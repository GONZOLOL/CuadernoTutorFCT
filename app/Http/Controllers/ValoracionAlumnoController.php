<?php

namespace App\Http\Controllers;

use App\Models\ValoracionAlumno;
use Illuminate\Http\Request;

/**
 * Class ValoracionAlumnoController
 * @package App\Http\Controllers
 */
class ValoracionAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valoracionAlumno = ValoracionAlumno::paginate();

        return view('valoracion-alumno.index', compact('valoracionAlumno'))
            ->with('i', (request()->input('page', 1) - 1) * $valoracionAlumno->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valoracionAlumno = new ValoracionAlumno();
        return view('valoracion-alumno.create', compact('valoracionAlumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ValoracionAlumno::$rules);

        $valoracionAlumno = ValoracionAlumno::create($request->all());

        return redirect()->route('valoracion-alumno.index')
            ->with('success', 'ValoracionAlumno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $valoracionAlumno = ValoracionAlumno::find($id);

        return view('valoracion-alumno.show', compact('valoracionAlumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valoracionAlumno = ValoracionAlumno::find($id);

        return view('valoracion-alumno.edit', compact('valoracionAlumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ValoracionAlumno $valoracionAlumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ValoracionAlumno $valoracionAlumno)
    {
        request()->validate(ValoracionAlumno::$rules);

        $valoracionAlumno->update($request->all());

        return redirect()->route('valoracion-alumno.index')
            ->with('success', 'ValoracionAlumno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $valoracionAlumno = ValoracionAlumno::find($id)->delete();

        return redirect()->route('valoracion-alumno.index')
            ->with('success', 'ValoracionAlumno deleted successfully');
    }
}
