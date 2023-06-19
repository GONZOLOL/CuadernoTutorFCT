<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use DB;

class PDFController extends Controller
{
    public function generarPDF($idCuaderno)
    {
        // Obtener datos de la base de datos
        $alumnos = DB::table('ALUMNO')
        ->join('TIENE', 'ALUMNO.DNI', '=', 'TIENE.DNI_alumno')
        ->join('CUADERNO_TUTOR', 'TIENE.Id_cuaderno', '=', 'CUADERNO_TUTOR.Id_cuaderno')
        ->select('ALUMNO.*') // Selecciona todos los campos de la tabla ALUMNO
        ->where('TIENE.Id_cuaderno', $idCuaderno)
        ->get();

        $alumnoData = $alumnos;

    
        $tutoresDocentes = DB::table('tutor_docente')
            ->join('cuaderno_tutor', 'tutor_docente.DNI', '=', 'cuaderno_tutor.DNI_tutor_docente')
            ->where('cuaderno_tutor.Id_cuaderno', '=', $idCuaderno)
            ->get();
            
        $tutoresLaborales = DB::table('tutor_laboral')
        ->join('empresa', 'tutor_laboral.CIF_EMPRESA', '=', 'empresa.CIF')
        ->join('cuaderno_tutor', 'empresa.CIF', '=', 'cuaderno_tutor.CIF_EMPRESA')
        ->where('cuaderno_tutor.Id_cuaderno', '=', $idCuaderno)
        ->get();
        

        $cuaderno = DB::table('CUADERNO_TUTOR')
            ->where('Id_cuaderno', $idCuaderno)
            ->first();
        
        
        $empresa = DB::table('empresa')
        ->where('CIF', $cuaderno->CIF_EMPRESA)
        ->first();
        
        $centrosTrabajo = DB::table('CENTRO_TRABAJO')->get();

            
        $cursoActual = null;
        $fechaActualizacion = null;
        $trimestre = null;

        
        if ($cuaderno) {
            // Obtener los valores de cursoActual y fechaActualizacion
            $cursoActual = $cuaderno->ciclo_formativo_curso_actual;
            $fechaActualizacion = $cuaderno->updated_at;
            $trimestre = $cuaderno->trimestre;

        }
    
        // Crear instancia de Dompdf
        $dompdf = new Dompdf();

        // Generar el contenido HTML del PDF
        $viewData = [
            'cursoActual' => $cursoActual,
            'fechaActualizacion' => $fechaActualizacion,
            'alumnos' => $alumnoData, // Utilizar el nuevo array $alumnoData en lugar de $alumnos
            'tutoresDocentes' => $tutoresDocentes,
            'tutoresLaborales' => $tutoresLaborales,
            'trimestre' => $trimestre,
            'centrosTrabajo' => $centrosTrabajo,
            'empresa' => $empresa,

        ];
        
        $html = view('pdf.layout', $viewData)->render();
        $html .= view('pdf.portada', $viewData)->render();
        $html .= view('pdf.template', $viewData)->render();
        
        // Cargar el contenido HTML en Dompdf
        $dompdf->loadHtml($html);

        // Verificar si se cargó correctamente el contenido HTML en Dompdf
        if ($dompdf->get_canvas() !== null) {
            // Renderizar el PDF
            $dompdf->render();

            // Obtener el contenido del PDF
            $output = $dompdf->output();

            // Generar una respuesta con el PDF para mostrar en el navegador
            return response($output, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="cuadernotutorfct.pdf"',
            ]);
        } else {
            // Manejar el caso cuando el contenido HTML no se cargó correctamente
            // Puedes lanzar una excepción, mostrar un mensaje de error, etc.
            return response()->json(['error' => 'Error al cargar el contenido HTML en Dompdf'], 500);
        }
    }
}