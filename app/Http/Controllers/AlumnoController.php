<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
    public $table = "alumno";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno = Alumno::paginate();

        return view('alumno.index', compact('alumno'))
            ->with('i', (request()->input('page', 1) - 1) * $alumno->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = new Alumno();
        return view('alumno.create', compact('alumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alumno::$rules);

        $alumno = Alumno::create($request->all());

        return redirect()->route('alumno.index')
            ->with('success', 'Alumno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param string $DNI
     * @return \Illuminate\Http\Response
     */
    public function show($DNI)
    {
        $alumno = Alumno::find($DNI);

        return view('alumno.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  varchar $DNI
     * @return \Illuminate\Http\Response
     */
    public function edit($DNI)
    {
        $alumno = Alumno::find($DNI);

        return view('alumno.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        request()->validate(Alumno::$rules);

        $alumno->update($request->all());

        return redirect()->route('alumno.index')
            ->with('success', 'Alumno updated successfully');
    }

    /**
     * @param varchar $DNI
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($DNI)
    {
        $alumno = Alumno::find($DNI)->delete();

        return redirect()->route('alumno.index')
            ->with('success', 'Alumno deleted successfully');
    }
}