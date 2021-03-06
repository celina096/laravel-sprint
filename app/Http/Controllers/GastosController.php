<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Gasto;
use App\Tipo_de_gasto;
use App\Http\Requests\GastosRequest;

class GastosController extends Controller
{

  function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listar(){

      // dd('estoy en listar');

      $gastos =DB::table('gastos')
          ->select('gastos.id','gastos.gasto','gastos.condicion','tipos_de_gastos.tipo','tipos_de_gastos.id as id_tipo','users.name')
          ->join('tipos_de_gastos', 'gastos.tipo_de_gasto_id', '=', 'tipos_de_gastos.id')
          ->join('users', 'gastos.user_id', '=', 'users.id')
          ->where(DB::raw('users.id'),auth()->user()->id )
           ->get();

        // $gastos = Gasto::all();
        // $tipos = Tipo_de_gasto::all();

        return response()->json(["data"=> $gastos->toArray()]);

    }

    public function index()
    {

      $tipos = Tipo_de_gasto::all();
        return view('configuracion.egresos.gasto')
        ->with('tipos', $tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GastosRequest $request)
    {
      $gasto = new Gasto([
        'gasto' => $request->input('gasto'),
        'tipo_de_gasto_id' => $request->input('tipo'),
        'user_id' => auth()->user()->id,
      ]);
      $gasto->save();
      // return redirect()->route('gasto.index');
      return response()->json(["data"=> $gasto->toArray()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $gasto = Gasto::find($id);
      $tipos = Tipo_de_gasto::all();
      return view('configuracion.gasto-editar')
      ->with('gasto', $gasto)
      ->with('tipos', $tipos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $gasto = Gasto::find($id);
      $gasto->gasto = $request->input('gasto');
      $gasto->tipo_de_gasto_id = $request->input('tipo');

      $gasto->save();

        return redirect()->route('gasto.index');
    }

    public function editar(Request $request, $id)
    {
      $gasto = Gasto::find($id);
      $gasto->gasto =  $request['gasto'];
      $gasto->tipo_de_gasto_id = $request['tipo'];

      $gasto->save();

      return response()->json([
        "mensaje" => $gasto
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $gasto = Gasto::find($id);
      $gasto->delete();
      return redirect()->route('gasto.index');
    }

    public function eliminar($id)
    {
      $gasto = Gasto::find($id);
      $gasto->delete();
      return response()->json(["mensaje" => $gasto]);
    }

    public function crear(Request $request)
    {
      if ($request->ajax()){
        $gasto = new Gasto([
          'gasto' => $request['gasto'],
          'tipo_de_gasto_id' => $request['tipo'],
          'user_id' => auth()->user()->id,
        ]);
        $gasto->save();

        return response()->json([
          "mensaje" => $gasto
          ]);
        }
    }
}
