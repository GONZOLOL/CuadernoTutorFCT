<?php

namespace App\Http\Controllers;

use App\Models\CentroTrabajo;
use Illuminate\Http\Request;
use App\Models\Empresa;

/**
 * Class CentroTrabajoController
 * @package App\Http\Controllers
 */
class CentroTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centroTrabajo = CentroTrabajo::paginate();


        return view('centro-trabajo.index', compact('centroTrabajo'))
            ->with('i', (request()->input('page', 1) - 1) * $centroTrabajo->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $CIF_EMPRESA = $request->route('CIF_EMPRESA');
        $centroTrabajo = new CentroTrabajo();

        $provincias = [
            'Almería' => 'Almería',
            'Cádiz' => 'Cádiz',
            'Córdoba' => 'Córdoba',
            'Granada' => 'Granada',
            'Huelva' => 'Huelva',
            'Jaén' => 'Jaén',
            'Málaga' => 'Málaga',
            'Sevilla' => 'Sevilla',
        ];

        return view('centro-trabajo.create', compact('centroTrabajo', 'CIF_EMPRESA', 'provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CentroTrabajo::$rules);
    
        $centroTrabajo = CentroTrabajo::create($request->all());
    
        return redirect()->route('empresa.index')
        ->with('success', 'Centro de trabajo creado exitosamente.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $centroTrabajo = CentroTrabajo::find($id);

        return view('centro-trabajo.show', compact('centroTrabajo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $centroTrabajo = CentroTrabajo::find($id);

        $provincias = [
            'Almería' => 'Almería',
            'Cádiz' => 'Cádiz',
            'Córdoba' => 'Córdoba',
            'Granada' => 'Granada',
            'Huelva' => 'Huelva',
            'Jaén' => 'Jaén',
            'Málaga' => 'Málaga',
            'Sevilla' => 'Sevilla',
        ];

        return view('centro-trabajo.edit', compact('centroTrabajo', 'provincias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CentroTrabajo $centroTrabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CentroTrabajo $centroTrabajo)
    {
        request()->validate(CentroTrabajo::$rules);

        $centroTrabajo->update($request->all());

        return redirect()->route('centro-trabajo.index')
            ->with('success', 'CentroTrabajo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $centroTrabajo = CentroTrabajo::find($id)->delete();

        return redirect()->route('centro-trabajo.index')
            ->with('success', 'CentroTrabajo deleted successfully');
    }
}