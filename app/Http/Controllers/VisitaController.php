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
    public function index($Id_cuaderno)
    {
        $visitas = Visita::where('Id_cuaderno', $Id_cuaderno)->get();

        return view('visita.index', compact('visitas', 'Id_cuaderno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function create(Request $request)
     {
         $Id_cuaderno = $request->route('Id_cuaderno');
         $visita = new Visita();

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

        $Id_cuaderno = $request->input('Id_cuaderno');
        $url = route('visita.index', ['Id_cuaderno' => $Id_cuaderno]);

        return redirect($url)
            ->with('success', 'Visita created successfully.');
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

        $Id_cuaderno = $visita->Id_cuaderno;

        return view('visita.edit', compact('visita', 'Id_cuaderno'));
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
        
        $Id_cuaderno = $request->input('Id_cuaderno');

        return redirect()->route('visita.index', ['Id_cuaderno' => $Id_cuaderno])
            ->with('success', 'Visita actualizada exitosamente');
    }
    

    /**
     * @param int $Id_visita
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($Id_visita)
    {
        $visita = Visita::find($Id_visita);
        
        if (!$visita) {
            return redirect()->route('visita.index')
                ->with('error', 'Visita no encontrada');
        }
        
        $Id_cuaderno = $visita->Id_cuaderno;
        
        $visita->delete();
    
        return redirect()->route('visita.index', ['Id_cuaderno' => $Id_cuaderno])
            ->with('success', 'Visita borrada exitosamente');
    }
    
}
