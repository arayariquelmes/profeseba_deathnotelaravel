<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CausaMuerte;
class CausasMuerteController extends Controller
{
    
    public function index(){
        return CausaMuerte::all();
    }

    public function save(Request $request){
        $input = $request->all();
        $causaMuerte = new CausaMuerte();
        $causaMuerte->nombre = $input["nombre"];
        $causaMuerte->descripcion = $input["descripcion"];
        $causaMuerte->save();
        return $causaMuerte;
    }
}
