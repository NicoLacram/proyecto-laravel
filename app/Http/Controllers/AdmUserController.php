<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdmUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('Admin.User.index')->with('user',$user);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('Admin.User.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id)
    {
        //public function edit(Course $id)

        $user = User::find($id);
        return view('Admin.User.edit', [
            'user' => $user
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reglas = [
            'avatar'=> 'image|max:1999'
        ];

        $mensajes = [
            'required'=>'El campo :attribute es requerido',
        ];
        $this->validate($request,$reglas,$mensajes);
        $fileInForm = 'avatar';
        if ($request->hasFile($fileInForm)) {
        $file = $request->file($fileInForm);
        if ($file->isValid()) {
            $rutaArchivo =$file->store('avatars','public');
            $nombreArchivo= basename($rutaArchivo);
        }}
        $user = User::find($id);
        $user->first_name = $request->input("first_name");
        $user->last_name= $request->input("last_name");
        if ($request->hasFile($fileInForm)) {
        $user->avatar = $nombreArchivo;
        }
        $user->save();
        return redirect('adminUser');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioBorrar = User::find($id);
        $usuarioBorrar->delete();
        return redirect('/adminUser');
    }

}
