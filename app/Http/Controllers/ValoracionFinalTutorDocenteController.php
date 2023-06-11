<?php

namespace App\Http\Controllers;

use App\Models\ValoracionFinalTutorDocente;
use Illuminate\Http\Request;

/**
 * Class ValoracionFinalTutorDocenteController
 * @package App\Http\Controllers
 */
class ValoracionFinalTutorDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valoracionFinalTutorDocente = ValoracionFinalTutorDocente::paginate();

        return view('valoracion-final-tutor-docente.index', compact('valoracionFinalTutorDocente'))
            ->with('i', (request()->input('page', 1) - 1) * $valoracionFinalTutorDocente->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valoracionFinalTutorDocente = new ValoracionFinalTutorDocente();
        return view('valoracion-final-tutor-docente.create', compact('valoracionFinalTutorDocente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ValoracionFinalTutorDocente::$rules);

        $valoracionFinalTutorDocente = ValoracionFinalTutorDocente::create($request->all());

        return redirect()->route('valoracion-final-tutor-docente.index')
            ->with('success', 'ValoracionFinalTutorDocente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $valoracionFinalTutorDocente = ValoracionFinalTutorDocente::find($id);

        return view('valoracion-final-tutor-docente.show', compact('valoracionFinalTutorDocente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valoracionFinalTutorDocente = ValoracionFinalTutorDocente::find($id);

        return view('valoracion-final-tutor-docente.edit', compact('valoracionFinalTutorDocente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ValoracionFinalTutorDocente $valoracionFinalTutorDocente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ValoracionFinalTutorDocente $valoracionFinalTutorDocente)
    {
        request()->validate(ValoracionFinalTutorDocente::$rules);

        $valoracionFinalTutorDocente->update($request->all());

        return redirect()->route('valoracion-final-tutor-docente.index')
            ->with('success', 'ValoracionFinalTutorDocente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $valoracionFinalTutorDocente = ValoracionFinalTutorDocente::find($id)->delete();

        return redirect()->route('valoracion-final-tutor-docente.index')
            ->with('success', 'ValoracionFinalTutorDocente deleted successfully');
    }
}
