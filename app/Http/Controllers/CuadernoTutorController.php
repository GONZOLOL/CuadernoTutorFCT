<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\CuadernoTutor;
use App\Models\TutorDocente;
use App\Models\Alumno;
use App\Models\Visita;
use App\Models\Tiene;
 

/**
 * Class CuadernoTutorController
 * @package App\Http\Controllers
 */
class CuadernoTutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cuadernoTutor = CuadernoTutor::with('visita')->get();
       return view('cuaderno-tutor.index', compact('cuadernoTutor'));
    }

    public function pdf()
    {
        return view('cuaderno-tutor.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuadernoTutor = new CuadernoTutor();
        $alumnos = Alumno::all(); // Recupera todos los alumnos
        $tutores_docentes = TutorDocente::all()->mapWithKeys(function ($tutor) {
            return [$tutor->DNI => $tutor->Nombre . ' ' . $tutor->Apellido_1];
        });
        $empresas = Empresa::all()->mapWithKeys(function ($empresa) {
            return [$empresa->CIF => $empresa->Nombre];
        });        

        return view('cuaderno-tutor.create', compact('cuadernoTutor', 'alumnos', 'tutores_docentes', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CuadernoTutor::$rules);
    
        // Si el archivo existe.
        if ($request->hasFile('plan_formativo')) {
            // Recuperamos el archivo.
            $file = $request->file('plan_formativo');
    
            // Leemos su contenido.
            $content = File::get($file);
    
            // Guardamos el contenido en base64 en el request.
            $request->merge([
                'plan_formativo' => base64_encode($content),
            ]);
        }
    
        $cuadernoTutor = CuadernoTutor::create($request->all());
    
        $cuadernoTutor->alumnos()->sync($request->alumnos);            
        $request->session()->forget('alumnoIDs');
    
        return redirect()->route('cuaderno-tutor.index')
            ->with('success', 'CuadernoTutor created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $Id_cuaderno
     * @return \Illuminate\Http\Response
     */
 

    public function show($Id_cuaderno)
    {
        $cuadernoTutor = CuadernoTutor::with('alumnos')->find($Id_cuaderno);

        $cuadernoTutorId = $Id_cuaderno;

        if (!$cuadernoTutor) {
            return redirect()->route('cuaderno-tutor.index')
                ->with('error', 'CuadernoTutor not found.');
        }

        return view('cuaderno-tutor.show', compact('cuadernoTutor', 'cuadernoTutorId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $Id_cuaderno
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_cuaderno)
    {
        $cuadernoTutor = CuadernoTutor::find($Id_cuaderno);
        
        $plan_formativo = $cuadernoTutor->plan_formativo;

        $alumnos = Alumno::all(); // Recupera todos los alumnos
        $tutores_docentes = TutorDocente::all()->mapWithKeys(function ($tutor) {
            return [$tutor->DNI => $tutor->Nombre . ' ' . $tutor->Apellido_1];
        });
        $empresas = Empresa::all()->mapWithKeys(function ($empresa) {
            return [$empresa->CIF => $empresa->Nombre];
        });

        return view('cuaderno-tutor.edit', compact('cuadernoTutor', 'alumnos', 'tutores_docentes', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CuadernoTutor $cuadernoTutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CuadernoTutor $cuadernoTutor)
    {
        request()->validate(CuadernoTutor::$rules);

        $cuadernoTutor->update($request->all());

        return redirect()->route('cuaderno-tutor.index')
            ->with('success', 'CuadernoTutor updated successfully');
    }

    /**
     * @param int $Id_cuaderno
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($Id_cuaderno)
    {
        // Delete the associated records in the `tiene` table
        Tiene::where('Id_cuaderno', $Id_cuaderno)->delete();
    
        // Delete the CuadernoTutor record
        CuadernoTutor::find($Id_cuaderno)->delete();
    
        return redirect()->route('cuaderno-tutor.index')
            ->with('success', 'CuadernoTutor deleted successfully');
    }
    
    public function download($Id_cuaderno)
    {
        $cuadernoTutor = CuadernoTutor::findOrFail($Id_cuaderno);

        // Decodifica el archivo
        $decoded_content = base64_decode($cuadernoTutor->plan_formativo);

        // Crea una respuesta de descarga
        return response($decoded_content, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="PlanFormativo.pdf"',
        ]);
    }
}