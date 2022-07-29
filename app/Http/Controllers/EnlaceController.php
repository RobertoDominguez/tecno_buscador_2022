<?php

namespace App\Http\Controllers;

use App\Models\Enlace;
use App\Http\Requests\StoreEnlaceRequest;
use App\Http\Requests\UpdateEnlaceRequest;
use App\Models\Pagina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EnlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enlaces = Enlace::all();
        $pagina=Pagina::where('nombre','enlace.index')->get()->first();
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('enlace.index', compact('enlaces','pagina'),compact('user_log'))->with('tema');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagina=Pagina::where('nombre','enlace.create')->get()->first();
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('enlace.create', compact('pagina','user_log'),compact('tema'));
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
            'encabezado' => ['required','max:200'],
            'url' => ['required', 'max:200'],
        ]);

        //$validatedData['id_usuario'] = Auth::user()->id;
        $validatedData['veces_buscado']=0;

        $enlace = Enlace::create($validatedData);

        return redirect()->route('enlace.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function show(Enlace $enlace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function edit(Enlace $enlace)
    {
        $pagina=Pagina::where('nombre','enlace.edit')->get()->first();
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('enlace.edit', compact('pagina','enlace'),compact('user_log','tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enlace $enlace)
    {

        $validatedData = $request->validate([
            'encabezado' => ['required','max:200'],
            'url' => ['required', 'max:200'],
        ]);

        //$validatedData['id_usuario'] = Auth::user()->id;


        $enlace->update($validatedData);

        return redirect()->route('enlace.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enlace $enlace)
    {

        $enlace->delete();
        return redirect()->route('enlace.index');
    }
}
