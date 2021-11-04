<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CausaMuerte;
class CausasMuerteController extends Controller
{
    public function ingresar(Request $request){
        $input = $request->all();
        $nombre = $input["nombre"];
        $descripcion = $input["descripcion"];
        $causa = new CausaMuerte();
        $causa->nombre = $nombre;
        $causa->descripcion = $descripcion;
        $causa->save();
        return $causa;
    }

    public function obtenerTodos(Request $request){
        //Todas las causas de muerte, equivalente a un SELECT * FROM  causas_muertes
        $causas = CausaMuerte::all();
        return $causas;
    }

    public function eliminar(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $causaMuerte = CausaMuerte::findOrFail($id);
        $causaMuerte->delete();
        return "ok";
    }

    public function actualizar(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $nombre = $input["nombre"];
        $descripcion = $input["descripcion"];
        //Buscar causa de muerte
        $causaMuerte = CausaMuerte::findOrFail($id);
        //Actualizar sus campos
        $causaMuerte->nombre = $nombre;
        $causaMuerte->descripcion = $descripcion;
        $causaMuerte->save();
        return $causaMuerte;
    }

}
