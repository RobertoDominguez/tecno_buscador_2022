<?php

namespace App\Http\Controllers;

use App\Models\Indice;
use App\Http\Requests\StoreIndiceRequest;
use App\Http\Requests\UpdateIndiceRequest;
use App\Models\Enlace;
use App\Models\Pagina;
use App\Models\Palabra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IndiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Enlace $enlace)
    {
        $indices = Indice::join('palabras','palabras.id','indices.id_palabra')->where('indices.id_enlace',$enlace->id)->select('indices.*','palabras.nombre')->get();
        $pagina=Pagina::where('nombre','indice.index')->get()->first();
        $pagina->update(['veces_visitado'=>$pagina->veces_visitado+1]);
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('indice.index', compact('indices','pagina'),compact('enlace','user_log'))->with('tema');        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Enlace $enlace)
    {
        $pagina=Pagina::where('nombre','indice.create')->get()->first();
        $pagina->update(['veces_visitado'=>$pagina->veces_visitado+1]);
        $user_log=Auth::user();
        $palabras=Palabra::all();
        $tema=Session::get('tema',2);
        return view('indice.create', compact('pagina','enlace'),compact('palabras','user_log'))->with('tema');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIndiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Enlace $enlace,Request $request)
    {
        $validatedData = $request->validate([
            'id_palabra' => ['required'],
        ]);

        $validatedData['id_enlace']=$enlace->id;

        $indice = Indice::create($validatedData);

        return redirect()->route('indice.index',$enlace->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indice  $indice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enlace $enlace,Indice $indice)
    {
        $indice->delete();
        return redirect()->route('indice.index',$enlace->id);
    }
}
