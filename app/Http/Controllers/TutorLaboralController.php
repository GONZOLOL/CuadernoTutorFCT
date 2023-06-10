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

        return view('tutor-laboral.index', compact('tutorLaboral'))
            ->with('i', (request()->input('page', 1) - 1) * $tutorLaboral->perPage());
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

        $tutorLaboral = TutorLaboral::create($request->all());
        
        if(!$tutorLaboral->exists) {
            return redirect()->back()->withErrors('Error creating TutorLaboral');
        }
        
        $tutorLaboral->supervisaAlumnos()->sync($request->alumnos);
        
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
        $tutorLaboral = TutorLaboral::find($DNI);

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