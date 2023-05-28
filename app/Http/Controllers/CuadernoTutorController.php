<?php

namespace App\Http\Controllers;

use App\Models\CuadernoTutor;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\TutorDocente;
use App\Models\Alumno;

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
        $cuadernoTutor = CuadernoTutor::paginate();

        return view('cuaderno-tutor.index', compact('cuadernoTutor'))
            ->with('i', (request()->input('page', 1) - 1) * $cuadernoTutor->perPage());
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
        return view('cuaderno-tutor.create', compact('cuadernoTutor', 'alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $empresa = Empresa::firstOrNew(
            ['CIF' => $request->input('CIF_EMPRESA')], 
            ['CIF' => $request->input('CIF_EMPRESA')]
        );
        
        // Now check if it's a new instance or existing instance.
        if (!$empresa->exists) {
            // It's a new instance. Redirect to the creation form.
            return redirect()->route('empresa.create')->withInput();
        }
        
        // Same for TutorDocente
        $tutorDocente = TutorDocente::firstOrNew(
            ['DNI' => $request->input('DNI_tutor_docente')], 
            ['DNI' => $request->input('DNI_tutor_docente')]
        );
        
        if (!$tutorDocente->exists) {
            // It's a new instance. Redirect to the creation form.
            return redirect()->route('tutor-docente.create')->withInput();
        }

        // If both exist, proceed to create the CuadernoTutor.
        request()->validate(CuadernoTutor::$rules);
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
        $cuadernoTutor = CuadernoTutor::find($Id_cuaderno);

        return view('cuaderno-tutor.show', compact('cuadernoTutor'));
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

        return view('cuaderno-tutor.edit', compact('cuadernoTutor'));
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
        $cuadernoTutor = CuadernoTutor::find($Id_cuaderno)->delete();

        return redirect()->route('cuaderno-tutor.index')
            ->with('success', 'CuadernoTutor deleted successfully');
    }
}