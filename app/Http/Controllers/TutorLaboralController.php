<?php

namespace App\Http\Controllers;

use App\Models\TutorLaboral;
use Illuminate\Http\Request;

/**
 * Class TutorLaboralController
 * @package App\Http\Controllers
 */
class TutorLaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorLaboral = TutorLaboral::paginate();

        return view('tutor-laboral.index', compact('tutorLaboral'))
            ->with('i', (request()->input('page', 1) - 1) * $tutorLaboral->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutorLaboral = new TutorLaboral();
        return view('tutor-laboral.create', compact('tutorLaboral'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TutorLaboral::$rules);

        $tutorLaboral = TutorLaboral::create($request->all());

        return redirect()->route('tutor-laboral.index')
            ->with('success', 'TutorLaboral created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutorLaboral = TutorLaboral::find($id);

        return view('tutor-laboral.show', compact('tutorLaboral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutorLaboral = TutorLaboral::find($id);

        return view('tutor-laboral.edit', compact('tutorLaboral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TutorLaboral $tutorLaboral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutorLaboral $tutorLaboral)
    {
        request()->validate(TutorLaboral::$rules);

        $tutorLaboral->update($request->all());

        return redirect()->route('tutor-laboral.index')
            ->with('success', 'TutorLaboral updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tutorLaboral = TutorLaboral::find($id)->delete();

        return redirect()->route('tutor-laboral.index')
            ->with('success', 'TutorLaboral deleted successfully');
    }
}