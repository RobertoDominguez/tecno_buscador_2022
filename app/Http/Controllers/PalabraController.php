<?php

namespace App\Http\Controllers;

use App\Models\Palabra;
use App\Http\Requests\StorePalabraRequest;
use App\Http\Requests\UpdatePalabraRequest;
use App\Models\Pagina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PalabraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $palabras = Palabra::all();
        $pagina=Pagina::where('nombre','palabra.index')->get()->first();
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('palabra.index', compact('palabras','pagina'),compact('user_log','tema'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagina=Pagina::where('nombre','palabra.create')->get()->first();
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('palabra.create', compact('pagina','user_log'),compact('tema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required','max:200'],
        ]);

        //$validatedData['id_usuario'] = Auth::user()->id;
        $validatedData['veces_buscado']=0;

        $palabra = Palabra::create($validatedData);

        return redirect()->route('palabra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Palabra  $palabra
     * @return \Illuminate\Http\Response
     */
    public function show(Palabra $palabra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Palabra  $palabra
     * @return \Illuminate\Http\Response
     */
    public function edit(Palabra $palabra)
    {
        $pagina=Pagina::where('nombre','palabra.edit')->get()->first();
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('palabra.edit', compact('pagina','palabra'),compact('user_log','tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Palabra  $palabra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Palabra $palabra)
    {
        $validatedData = $request->validate([
            'nombre' => ['required','max:200'],
        ]);

        $palabra->update($validatedData);

        return redirect()->route('palabra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Palabra  $palabra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Palabra $palabra)
    {

        $palabra->delete();
        return redirect()->route('palabra.index');
    }
}
