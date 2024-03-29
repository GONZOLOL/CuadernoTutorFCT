<?php

namespace App\Http\Controllers;

use App\Models\TutorLaboral;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\CentroTrabajo;
use App\Models\Empresa;

/**
 * Class TutorLaboralController
 * @package App\Http\Controllers
 */
class TutorLaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorLaboral = TutorLaboral::paginate();

        return view('tutor-laboral.index', compact('tutorLaboral'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutorLaboral = new TutorLaboral();
        $alumnos = Alumno::all(); // Recupera todos los alumnos
        $centrosTrabajo = CentroTrabajo::pluck('Denominacion', 'id'); // Obtener la lista de centros de trabajo
        $empresas = Empresa::pluck('Nombre', 'CIF');

        return view('tutor-laboral.create', compact('tutorLaboral', 'alumnos', 'centrosTrabajo', 'empresas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TutorLaboral::$rules);
    
        $existingTutor = TutorLaboral::find($request->input('DNI'));
    
        if ($existingTutor) {
            return redirect()->route('tutor-laboral.create')
                ->with('error', 'A tutor with the same DNI already exists.');
        }
    
        $tutorLaboral = TutorLaboral::create($request->all());
    
        if ($request->has('alumnos')) {
            foreach ($request->alumnos as $alumno) {
                $existingAlumno = Alumno::find($alumno);
                if ($existingAlumno) {
                    $tutorLaboral->supervisaAlumnos()->attach($alumno);
                }
            }
        }
    
        return redirect()->route('tutor-laboral.index')
            ->with('success', 'TutorLaboral created successfully.');
    }
    

    

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($DNI)
    {
        $tutorLaboral = TutorLaboral::find($DNI);

        return view('tutor-laboral.show', compact('tutorLaboral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($DNI)
    {
        $tutorLaboral = TutorLaboral::with('supervisaAlumnos')->find($DNI);


        $centrosTrabajo = CentroTrabajo::pluck('Denominacion', 'id'); // Obtener la lista de centros de trabajo
        
        $empresas = Empresa::pluck('Nombre', 'CIF');

        $alumnos = Alumno::all(); // Recupera todos los alumnos

        return view('tutor-laboral.edit', compact('tutorLaboral', 'alumnos', 'centrosTrabajo', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TutorLaboral $tutorLaboral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $DNI)
{
    $tutorLaboral = TutorLaboral::findOrFail($DNI);

    request()->validate(TutorLaboral::$rules);

    $existingTutor = TutorLaboral::where('DNI', '!=', $DNI)
        ->where('DNI', $request->input('DNI'))
        ->first();

    if ($existingTutor) {
        return redirect()->route('tutor-laboral.edit', $DNI)
            ->with('error', 'A tutor with the same DNI already exists.');
    }

    $tutorLaboral->update($request->all());

    return redirect()->route('tutor-laboral.index')
        ->with('success', 'TutorLaboral updated successfully');
}


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tutorLaboral = TutorLaboral::find($id)->delete();

        return redirect()->route('tutor-laboral.index')
            ->with('success', 'TutorLaboral deleted successfully');
    }
}