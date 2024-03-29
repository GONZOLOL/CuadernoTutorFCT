<?php

namespace App\Http\Controllers;

use App\Models\TutorDocente;
use Illuminate\Http\Request;

/**
 * Class TutorDocenteController
 * @package App\Http\Controllers
 */
class TutorDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorDocente = TutorDocente::paginate();

        return view('tutor-docente.index', compact('tutorDocente'))
            ->with('i', (request()->input('page', 1) - 1) * $tutorDocente->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutorDocente = new TutorDocente();
        return view('tutor-docente.create', compact('tutorDocente'));
    }
    public function cuadernoDocenteCreate()
    {
        $tutorDocente = new TutorDocente();
        return view('tutor-docente.cuadernoDocenteCreate', compact('tutorDocente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TutorDocente::$rules);

        $tutorDocente = TutorDocente::create($request->all());

        return redirect()->route('tutor-docente.index')
            ->with('success', 'TutorDocente created successfully.');
    }

    public function customStore(Request $request)
    {
        request()->validate(TutorDocente::$rules);

        $tutorDocente = TutorDocente::create($request->all());

        return redirect()->route('cuaderno-tutor.create')
            ->with('success', 'TutorDocente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutorDocente = TutorDocente::find($id);

        return view('tutor-docente.show', compact('tutorDocente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutorDocente = TutorDocente::find($id);

        return view('tutor-docente.edit', compact('tutorDocente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TutorDocente $tutorDocente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutorDocente $tutorDocente)
    {
        request()->validate(TutorDocente::$rules);

        $tutorDocente->update($request->all());

        return redirect()->route('tutor-docente.index')
            ->with('success', 'TutorDocente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tutorDocente = TutorDocente::find($id)->delete();

        return redirect()->route('tutor-docente.index')
            ->with('success', 'TutorDocente deleted successfully');
    }
}