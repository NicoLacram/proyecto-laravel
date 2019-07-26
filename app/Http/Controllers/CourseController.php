<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
use App\Level;


class CourseController extends Controller
{
    public function index(){
        $levels = Level::all();
        $categories = Category::all();
        $cursos = Course::all();
        return view('Courses.course',compact('cursos','categories','levels'));
    }
    public function show($id){
        $levels = Level::all();
        $categories = Category::all();
        $curso = Course::find($id);
        return view('Courses.DetalleCurso',compact('curso','levels','categories'));
    }

    public function search(Request $request)
    {
        $input = $request->input('busqueda');
        $cursos = Course::where('name','LIKE','%'.$input.'%')->paginate(4);
        return view('Courses.course')->with("cursos", $cursos);
    }

    public function indexblend()
    {
        $cursos = Course::where('category_id','=','1')->paginate(4);
        return view('Courses.course')->with("cursos", $cursos);
    }

    public function indexpresencial(){
        $cursos = Course::where('category_id','=','2')->paginate(4);
        return view('Courses.course')->with("cursos", $cursos);

    }

}
