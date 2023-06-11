<?php

namespace App\Http\Controllers;

use App\Models\CuestionarioEmpresa;
use Illuminate\Http\Request;

/**
 * Class CuestionarioEmpresaController
 * @package App\Http\Controllers
 */
class CuestionarioEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuestionarioEmpresa = CuestionarioEmpresa::paginate();

        return view('cuestionario-empresa.index', compact('cuestionarioEmpresa'))
            ->with('i', (request()->input('page', 1) - 1) * $cuestionarioEmpresa->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuestionarioEmpresa = new CuestionarioEmpresa();
        return view('cuestionario-empresa.create', compact('cuestionarioEmpresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CuestionarioEmpresa::$rules);

        $cuestionarioEmpresa = CuestionarioEmpresa::create($request->all());

        return redirect()->route('cuestionario-empresa.index')
            ->with('success', 'CuestionarioEmpresa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuestionarioEmpresa = CuestionarioEmpresa::find($id);

        return view('cuestionario-empresa.show', compact('cuestionarioEmpresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuestionarioEmpresa = CuestionarioEmpresa::find($id);

        return view('cuestionario-empresa.edit', compact('cuestionarioEmpresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CuestionarioEmpresa $cuestionarioEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CuestionarioEmpresa $cuestionarioEmpresa)
    {
        request()->validate(CuestionarioEmpresa::$rules);

        $cuestionarioEmpresa->update($request->all());

        return redirect()->route('cuestionario-empresa.index')
            ->with('success', 'CuestionarioEmpresa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cuestionarioEmpresa = CuestionarioEmpresa::find($id)->delete();

        return redirect()->route('cuestionario-empresa.index')
            ->with('success', 'CuestionarioEmpresa deleted successfully');
    }
}