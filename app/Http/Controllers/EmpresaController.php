<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

/**
 * Class EmpresaController
 * @package App\Http\Controllers
 */
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa::paginate();

        return view('empresa.index', compact('empresa'))
            ->with('i', (request()->input('page', 1) - 1) * $empresa->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = new Empresa();
        return view('empresa.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empresa::$rules);

        $empresa = Empresa::create($request->all());

        return redirect()->route('empresa.index')
            ->with('success', 'Empresa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $CIF
     * @return \Illuminate\Http\Response
     */
    public function show($CIF)
    {
        $empresa = Empresa::find($CIF);

        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $CIF
     * @return \Illuminate\Http\Response
     */
    public function edit($CIF)
    {
        $empresa = Empresa::find($CIF);

        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empresa $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        request()->validate(Empresa::$rules);

        $empresa->update($request->all());

        return redirect()->route('empresa.index')
            ->with('success', 'Empresa updated successfully');
    }

    /**
     * @param int $CIF
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($CIF)
    {
        $empresa = Empresa::find($CIF)->delete();

        return redirect()->route('empresa.index')
            ->with('success', 'Empresa deleted successfully');
    }
}