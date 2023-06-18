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
    public function index(Request $request)
    {
        $cuadernoTutorId = $request->query('cuadernoTutor_Id');

        $valoracionFinalTutorLaboral = ValoracionFinalTutorLaboral::whereHas('cuadernoTutor', function ($query) use ($cuadernoTutorId) {
            $query->where('Id_cuaderno', $cuadernoTutorId);
        })->get();

        $valoracionFinalTutorLaboralCount = $valoracionFinalTutorLaboral->count();

        return view('valoracion-final-tutor-laboral.index', compact('valoracionFinalTutorLaboral', 'valoracionFinalTutorLaboralCount', 'cuadernoTutorId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cuadernoTutorId = $request->query('cuadernoTutor_Id');

        $valoracionFinalTutorLaboral = new ValoracionFinalTutorLaboral();
        return view('valoracion-final-tutor-laboral.create', compact('valoracionFinalTutorLaboral', 'cuadernoTutorId'));
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

        $cuadernoTutorId = $valoracionFinalTutorLaboral->Id_cuaderno;

        return redirect()->route('valoracion-final-tutor-laboral.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'ValoracionFinalTutorLaboral created successfully.');
    }
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $valoracionFinalTutorLaboral = ValoracionFinalTutorLaboral::find($id);
        $cuadernoTutorId = $valoracionFinalTutorLaboral->Id_cuaderno;

        $valoracionFinalTutorLaboral = ValoracionFinalTutorLaboral::find($id)->delete();

        return redirect()->route('valoracion-final-tutor-laboral.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'ValoracionFinalTutorLaboral deleted successfully');
    }
}