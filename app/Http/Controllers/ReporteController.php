<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
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


        return view('reportes',compact('pagina','user_log'),compact('tema'));
    }
}
