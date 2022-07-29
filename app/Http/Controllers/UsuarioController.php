<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsuarioController extends Controller
{
    public function loginView(){
        $pagina=Pagina::where('nombre','login.view')->get()->first();
        $pagina->update(['veces_visitado'=>$pagina->veces_visitado+1]);
        return view('login',compact('pagina'));
    }

    public function login(Request $request){
        $validatedData = $request->validate([
            'email' => ['required', 'max:30','exists:users,email'],
            'password' => ['required'],
        ]);

        $usuario=User::where('email',$request->email)->first();

        
        // if (is_null($usuario)){
        //     return back()->withErrors(['error'=>'El usuario no existe']);    
        // }

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('admin.reportes');
        }
        return back()->withErrors(['error'=>'La contraseña es incorrecta']);
    }


    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('buscador');
    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $pagina=Pagina::where('nombre','usuario.index')->get()->first();
        $pagina->update(['veces_visitado'=>$pagina->veces_visitado+1]);
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('user.index', compact('users','pagina'),compact('user_log','tema'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagina=Pagina::where('nombre','usuario.create')->get()->first();
        $pagina->update(['veces_visitado'=>$pagina->veces_visitado+1]);
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('user.create', compact('pagina','user_log'),compact('tema'));
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
            'name' => ['required','max:200'],
            'email' => ['required', 'max:200','email'],
            'password' => ['required','max:200'],
            'rol'=>['required']
        ]);

        $validatedData['password']=Hash::make($request->password);

        $user = User::create($validatedData);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $pagina=Pagina::where('nombre','usuario.edit')->get()->first();
        $pagina->update(['veces_visitado'=>$pagina->veces_visitado+1]);
        $user_log=Auth::user();
        $tema=Session::get('tema',2);
        return view('user.edit', compact('pagina','user_log'),compact('user','tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $validatedData = $request->validate([
            'name' => ['required','max:200'],
            'email' => ['required', 'max:200','email'],
            'password' => ['required','max:200'],
            'rol'=>['required']
        ]);

        $validatedData['password']=Hash::make($request->password);


        $user->update($validatedData);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->delete();
        return redirect()->route('user.index');
    }

}
