<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use App\Models\Palabra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReporteController extends Controller
{

    public function tema($nro){
        if (!Session::has('tema')){
            Session::put('tema',2);
        } 

        switch ($nro){
            case 1:
                Session::put('tema',1);
                break;
            case 2:
                Session::put('tema',2);
                break;
            case 3:
                Session::put('tema',3);
                break;
        }
        return back();
    }

    public function reportes(){
        $pagina=Pagina::where('nombre','admin.reportes')->get()->first();
        $pagina->update(['veces_visitado'=>$pagina->veces_visitado+1]);
        $user_log=Auth::user();
        $tema=Session::get('tema',2);


        $palabraMasBuscada=Palabra::orderBy('veces_buscado', 'desc')->first();
        $palabraMenosBuscada=Palabra::orderBy('veces_buscado', 'asc')->first();
        $cantidadBusquedas=Pagina::where('nombre', 'buscar')->get()->first()->veces_visitado;
        $cantidadPalabrasRegistradas=Palabra::all()->count();
        $reportes=[
            'palabra_mas_buscada'=>$palabraMasBuscada,
            'cantidad_de_busquedas'=>$cantidadBusquedas,
            'palabra_menos_buscada'=>$palabraMenosBuscada,
            'cantidad_palabras_registradas'=>$cantidadPalabrasRegistradas
        ];

        return view('reportes',compact('pagina','user_log'),compact('tema','reportes'));
    }
}
