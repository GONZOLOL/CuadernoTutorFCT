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
    public function index(Request $request)
    {
        $cuadernoTutorId = $request->query('cuadernoTutor_Id');

        $valoracionFinalTutorDocente = ValoracionFinalTutorDocente::whereHas('cuadernoTutor', function ($query) use ($cuadernoTutorId) {
            $query->where('Id_cuaderno', $cuadernoTutorId);
        })->get();

        $valoracionFinalTutorDocenteCount = $valoracionFinalTutorDocente->count();

        return view('valoracion-final-tutor-docente.index', compact('valoracionFinalTutorDocente', 'valoracionFinalTutorDocenteCount', 'cuadernoTutorId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cuadernoTutorId = $request->query('cuadernoTutor_Id');

        $valoracionFinalTutorDocente = new ValoracionFinalTutorDocente();
        return view('valoracion-final-tutor-docente.create', compact('valoracionFinalTutorDocente', 'cuadernoTutorId'));
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

        $cuadernoTutorId = $valoracionFinalTutorDocente->Id_cuaderno;

        return redirect()->route('valoracion-final-tutor-docente.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'ValoracionFinalTutorDocente created successfully.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $valoracionFinalTutorDocente = ValoracionFinalTutorDocente::find($id);
        $cuadernoTutorId = $valoracionFinalTutorDocente->Id_cuaderno;

        $valoracionFinalTutorDocente = ValoracionFinalTutorDocente::find($id)->delete();

        return redirect()->route('valoracion-final-tutor-docente.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'Valoracion final tutor docente deleted successfully');
    }
}