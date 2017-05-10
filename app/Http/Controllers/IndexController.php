<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Catalogo;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Catalogo::Select("marca")->groupby("marca")->get()->toArray();
        $anios = Catalogo::Select("anio")->groupby("anio")->orderby("anio")->get()->toArray();
        //dd($marcas); 
        return view('welcome')->with(["marcas" => $marcas, "anios" => $anios]);
    }

    public function modelos(Request $request){
        if($request->ajax()){
            $anio = $request->input("anio", '');
            $marca = $request->input('marca', '');
            $modelos = Catalogo::select("modelo")->where("marca", $marca)->where("anio", $anio)->orderby("modelo")->groupby("modelo")->get()->toArray();
            return  response()->json($modelos);
        }
    }
    
    public function marcasanio(Request $request){
         if($request->ajax()){
             $anio = $request->input("anio", "");
             $marcas = Catalogo::select("marca")->where("anio", $anio)->orderby("marca")->groupby("marca")->get()->toArray();
             return response()->json($marcas);
         }
    }
    
    public function codigos(Request $request){
        if($request->ajax()){
            $anio = $request->input("anio", "");
            $modelo = $request->input("modelo", "");
            $marca = $request->input("marca", "");
            $codigos = Catalogo::select(DB::raw("distinct(codigo) as codigo"), "descripcion", 'dato1', 'dato2')->where("anio", $anio)->where("marca", $marca)->where("modelo", $modelo)->get()->toArray();
            return response()->json($codigos);
        }
    }

}
