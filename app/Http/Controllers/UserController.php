<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function profile($id) {
        $user = User::find($id);
        return view('User.profile')->with('user',$user);
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('User.edit')->with('user',$user);
    }

    public function update(Request $request, $id){
        $reglas = [
            'first_name'=> 'required',
            'last_name'=>'required',
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
        return view('User.profile')->with('user',$user);

    }



}
