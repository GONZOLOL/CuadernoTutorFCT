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
    public function index(Request $request)
    {
        $cuadernoTutorId = $request->query('cuadernoTutor_Id');

        $visita = Visita::where('Id_cuaderno', $cuadernoTutorId)->get();

        return view('visita.index', compact('visita', 'cuadernoTutorId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function create(Request $request)
     {
        $cuadernoTutorId = $request->query('cuadernoTutor_Id');

        $visita = new Visita();

        return view('visita.create', compact('visita', 'cuadernoTutorId'));
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

        $cuadernoTutorId = $visita->Id_cuaderno;
        
        return redirect()->route('visita.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'Visita created successfully.');
    }

    /**
     * @param int $Id_visita
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($Id_visita)
    {
        $visita = Visita::find($Id_visita);
        $cuadernoTutorId = $visita->Id_cuaderno;
        
        $visita->delete();
    
        return redirect()->route('visita.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'Visita borrada exitosamente');
    }
    
}