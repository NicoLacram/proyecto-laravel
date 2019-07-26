<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;



class WelcomeController extends Controller
{
    public function welcome(){
        $cursos = Course ::randomize(6)->get();
        return view('welcome')->with('cursos',$cursos);
    }
}
