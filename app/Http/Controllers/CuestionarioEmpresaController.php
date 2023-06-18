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

     public function index(Request $request)
     {
         $cuadernoTutorId = $request->query('cuadernoTutor_Id');
     
         $cuestionarioEmpresa = CuestionarioEmpresa::whereHas('cuadernoTutor', function ($query) use ($cuadernoTutorId) {
             $query->where('Id_cuaderno', $cuadernoTutorId);
         })->get();
     
         $cuestionarioCount = $cuestionarioEmpresa->count();
     
         return view('cuestionario-empresa.index', compact('cuestionarioEmpresa', 'cuestionarioCount', 'cuadernoTutorId'));
     }
     


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cuadernoTutorId = $request->query('cuadernoTutor_Id');
        $cuestionarioEmpresa = new CuestionarioEmpresa();
        return view('cuestionario-empresa.create', compact('cuestionarioEmpresa', 'cuadernoTutorId'));
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

        $cuadernoTutorId = $cuestionarioEmpresa->Id_cuaderno;

        return redirect()->route('cuestionario-empresa.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'Cuestionario Empresa created successfully.');
    }
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        $cuestionarioEmpresa = CuestionarioEmpresa::find($id);
        $cuadernoTutorId = $cuestionarioEmpresa->Id_cuaderno;

        $cuestionarioEmpresa = CuestionarioEmpresa::find($id)->delete();


        return redirect()->route('cuestionario-empresa.index', ['cuadernoTutor_Id' => $cuadernoTutorId])
            ->with('success', 'CuestionarioEmpresa deleted successfully');
    }
}