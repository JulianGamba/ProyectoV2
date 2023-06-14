<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Campeonato;

class CrudController extends Controller
{
    // public function index(){
    //     $datos=DB::select("select * from  campeonatos");
    //     return view('vercampeonato')->with("datos", $datos);
    // }

    // public function create(Request $request){
    //     $sql=DB::insert("insert into campeonatos(nombre, categoria, modo, direccion, precio_inscripcion, valor_premiacion, cantidad_equipos, descripcion)values(?,?,?,?,?,?,?,?)" , [
    //         // $request->id_campeonato,
    //         $request->nombre,
    //         $request->categoria,
    //         $request->modo,
    //         $request->direccion,
    //         $request->precio_inscripcion,
    //         $request->valor_premiacion,
    //         $request->cantidad_equipos,
    //         $request->descripcion
    //     ]);
    //     return redirect()->route('vercampeonato');
    // }

    public function index(){
        $campeonato = Campeonato::all();
        return view('vercampeonato')->with("campeonato", $campeonato);
    }
    
    public function create(Request $request){
        $campeonato = new Campeonato();
        $campeonato->nombre = $request->nombre;
        $campeonato->categoria = $request->categoria;
        $campeonato->modo = $request->modo;
        $campeonato->direccion = $request->direccion;
        $campeonato->precio_inscripcion = $request->precio_inscripcion;
        $campeonato->valor_premiacion = $request->valor_premiacion;
        $campeonato->cantidad_equipos = $request->cantidad_equipos;
        $campeonato->descripcion = $request->descripcion;
        $campeonato->save();
        
        return redirect()->route('vercampeonato');
    }


    // public function update(Request $request, $id_campeonato) {
    //     $sql=DB::update("update campeonatos set nombre=?, categoria=?, modo=?, direccion=?, precio_inscripcion=?, valor_premiacion=?, cantidad_equipos=?, descripcion=? where id_campeonato" , [
    //         $request->nombre,
    //         $request->categoria,
    //         $request->modo,
    //         $request->direccion,
    //         $request->precio_inscripcion,
    //         $request->valor_premiacion,
    //         $request->cantidad_equipos,
    //         $request->descripcion
    //     ]);
    //     return redirect()->route('vercampeonato');
    // }

    public function update(Request $request, $id_campeonato)
    {
        $item = Campeonato::findOrFail($id_campeonato);
    
        $item->nombre = $request->nombre;
        $item->categoria = $request->categoria;
        $item->modo = $request->modo;
        $item->direccion = $request->direccion;
        $item->precio_inscripcion = $request->precio_inscripcion;
        $item->valor_premiacion = $request->valor_premiacion;
        $item->cantidad_equipos = $request->cantidad_equipos;
        $item->descripcion = $request->descripcion;
    
        $item->save();
    
        return redirect()->route('vercampeonato')->with('success', 'El campeonato se ha actualizado correctamente.');
    }
    

    public function edit($id_campeonato){
        $campeonato = Campeonato::find($id_campeonato);
        return view('editarcampeonato', ['campeonato' => $campeonato]);
    }

}

