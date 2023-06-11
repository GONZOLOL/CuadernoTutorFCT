<?php

namespace App\Http\Controllers;

use App\Models\ValoracionFinalTutorLaboral;
use Illuminate\Http\Request;

/**
 * Class ValoracionFinalTutorLaboralController
 * @package App\Http\Controllers
 */
class ValoracionFinalTutorLaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valoracionFinalTutorLaboral = ValoracionFinalTutorLaboral::paginate();

        return view('valoracion-final-tutor-laboral.index', compact('valoracionFinalTutorLaboral'))
            ->with('i', (request()->input('page', 1) - 1) * $valoracionFinalTutorLaboral->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valoracionFinalTutorLaboral = new ValoracionFinalTutorLaboral();
        return view('valoracion-final-tutor-laboral.create', compact('valoracionFinalTutorLaboral'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ValoracionFinalTutorLaboral::$rules);

        $valoracionFinalTutorLaboral = ValoracionFinalTutorLaboral::create($request->all());

        return redirect()->route('valoracion-final-tutor-laboral.index')
            ->with('success', 'ValoracionFinalTutorLaboral created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $valoracionFinalTutorLaboral = ValoracionFinalTutorLaboral::find($id);

        return view('valoracion-final-tutor-laboral.show', compact('valoracionFinalTutorLaboral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valoracionFinalTutorLaboral = ValoracionFinalTutorLaboral::find($id);

        return view('valoracion-final-tutor-laboral.edit', compact('valoracionFinalTutorLaboral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ValoracionFinalTutorLaboral $valoracionFinalTutorLaboral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ValoracionFinalTutorLaboral $valoracionFinalTutorLaboral)
    {
        request()->validate(ValoracionFinalTutorLaboral::$rules);

        $valoracionFinalTutorLaboral->update($request->all());

        return redirect()->route('valoracion-final-tutor-laboral.index')
            ->with('success', 'ValoracionFinalTutorLaboral updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $valoracionFinalTutorLaboral = ValoracionFinalTutorLaboral::find($id)->delete();

        return redirect()->route('valoracion-final-tutor-laboral.index')
            ->with('success', 'ValoracionFinalTutorLaboral deleted successfully');
    }
}
