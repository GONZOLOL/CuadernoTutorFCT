<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use Illuminate\Http\Request;
use App\Models\CuadernoTutor;

/**
 * Class visitaController
 * @package App\Http\Controllers
 */
class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visita = Visita::paginate();

        return view('visita.index', compact('visita'))
            ->with('i', (request()->input('page', 1) - 1) * $visita->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $Id_cuaderno)
    {
        $Id_cuaderno = $request->route('Id_cuaderno');
        $visita = new Visita();
        $url = route('visita.create', ['Id_cuaderno' => $Id_cuaderno]);
        return view('visita.create', compact('visita', 'Id_cuaderno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Visita::$rules);

        $visita = Visita::create($request->all());

        return redirect()->route('visita.index')
            ->with('success', 'visita created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $Id_visita
     * @return \Illuminate\Http\Response
     */
    public function show($Id_visita)
    {
        $visita = Visita::find($Id_visita);

        return view('visita.show', compact('visita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $Id_visita
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_visita)
    {
        $visita = Visita::find($Id_visita);

        return view('visita.edit', compact('visita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Visita $visita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visita $visita)
    {
        request()->validate(Visita::$rules);
        
        $visita->update($request->all());
    
        return redirect()->route('visita.index')
            ->with('success', 'Visita actualizada exitosamente');
    }
    

    /**
     * @param int $Id_visita
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($Id_visita)
    {
        $visita = Visita::find($Id_visita)->delete();

        return redirect()->route('visita.index')
            ->with('success', 'visita deleted successfully');
    }
}
