<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionQuincenal;
use Illuminate\Http\Request;

/**
 * Class EvaluacionQuincenalController
 * @package App\Http\Controllers
 */
class EvaluacionQuincenalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluacionQuincenal = EvaluacionQuincenal::paginate();

        return view('evaluacion-quincenal.index', compact('evaluacionQuincenal'))
            ->with('i', (request()->input('page', 1) - 1) * $evaluacionQuincenal->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evaluacionQuincenal = new EvaluacionQuincenal();
        return view('evaluacion-quincenal.create', compact('evaluacionQuincenal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EvaluacionQuincenal::$rules);

        $evaluacionQuincenal = EvaluacionQuincenal::create($request->all());

        return redirect()->route('evaluacion-quincenal.index')
            ->with('success', 'EvaluacionQuincenal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluacionQuincenal = EvaluacionQuincenal::find($id);

        return view('evaluacion-quincenal.show', compact('evaluacionQuincenal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluacionQuincenal = EvaluacionQuincenal::find($id);

        return view('evaluacion-quincenal.edit', compact('evaluacionQuincenal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EvaluacionQuincenal $evaluacionQuincenal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvaluacionQuincenal $evaluacionQuincenal)
    {
        request()->validate(EvaluacionQuincenal::$rules);

        $evaluacionQuincenal->update($request->all());

        return redirect()->route('evaluacion-quincenal.index')
            ->with('success', 'EvaluacionQuincenal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evaluacionQuincenal = EvaluacionQuincenal::find($id)->delete();

        return redirect()->route('evaluacion-quincenal.index')
            ->with('success', 'EvaluacionQuincenal deleted successfully');
    }
}
