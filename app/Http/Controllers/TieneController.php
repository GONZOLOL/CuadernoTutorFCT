<?php

namespace App\Http\Controllers;

use App\Models\Tiene;
use Illuminate\Http\Request;

/**
 * Class TieneController
 * @package App\Http\Controllers
 */
class TieneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tienes = Tiene::paginate();

        return view('tiene.index', compact('tienes'))
            ->with('i', (request()->input('page', 1) - 1) * $tienes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiene = new Tiene();
        return view('tiene.create', compact('tiene'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tiene::$rules);

        $tiene = Tiene::create($request->all());

        return redirect()->route('tienes.index')
            ->with('success', 'Tiene created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiene = Tiene::find($id);

        return view('tiene.show', compact('tiene'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiene = Tiene::find($id);

        return view('tiene.edit', compact('tiene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tiene $tiene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiene $tiene)
    {
        request()->validate(Tiene::$rules);

        $tiene->update($request->all());

        return redirect()->route('tienes.index')
            ->with('success', 'Tiene updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiene = Tiene::find($id)->delete();

        return redirect()->route('tienes.index')
            ->with('success', 'Tiene deleted successfully');
    }
}
