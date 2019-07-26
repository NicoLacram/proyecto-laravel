<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
use App\Category;
use App\Level;

class CartController extends Controller
{
    function show(){
        return view('cart');
    }

    public function add($id)
    {
      $curso = Course::find($id);
      $curso = [
            'id' => $curso->id,
            "name" => $curso->name,
            'description' => $curso->description,
            'category' => $curso->category,
            'level' => $curso ->level,
            'price' => $curso->price,
            'length' => $curso->length,
            'image' => $curso->image,
        ];

       session()->put('user.cart.'.$id,$curso);

       return view('cart');
    }

    public function remove($id)
    {
        session()->pull('user.cart.' . $id, "default");
        return view('cart');
    }
}
