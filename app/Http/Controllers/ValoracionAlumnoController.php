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
    public function index(Request $request)
    {
        $cuadernoTutorId = $request->query('cuadernoTutor_Id');

        $valoracionAlumno = ValoracionAlumno::whereHas('cuadernoTutor', function ($query) use ($cuadernoTutorId) {
            $query->where('Id_cuaderno', $cuadernoTutorId);
        })->get();
        
        $valoracionAlumnoCount = $valoracionAlumno->count();

        return view('valoracion-alumno.index', compact('valoracionAlumno', 'valoracionAlumnoCount', 'cuadernoTutorId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cuadernoTutorId = $request->query('cuadernoTutor_Id');

        $valoracionAlumno = new ValoracionAlumno();
        return view('valoracion-alumno.create', compact('valoracionAlumno', 'cuadernoTutorId'));
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

        $cuadernoTutorId = $valoracionAlumno->Id_cuaderno;
        
        return redirect()->route('valoracion-alumno.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'Valoracion Alumno created successfully.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $valoracionAlumno = ValoracionAlumno::find($id);
        $cuadernoTutorId = $valoracionAlumno->Id_cuaderno;

        $valoracionAlumno = ValoracionAlumno::find($id)->delete();

        return redirect()->route('valoracion-alumno.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'ValoracionAlumno deleted successfully');
    }
}