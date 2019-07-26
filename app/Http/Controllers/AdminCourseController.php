<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Category;
use App\Level;

class AdminCourseController extends Controller
{
    public function index(){
        $levels = Level::all();
        $categories = Category::all();
        $cursos = Course::all();
        return view('Admin.Courses.index',compact('cursos','categories','levels'));
    }

    public function show($id)
    {
        $levels = Level::all();
        $categories = Category::all();
        $cursos = Course::find($id);
        return view('Admin.Courses.AdmDetalleCurso',compact('cursos','categories','levels'));
    }


    public function create(){
        $levels = Level::all();
        $categories = Category::all();
        $cursos = Course::all();
        return view('Admin.Courses.create',compact('cursos','categories','levels'));
    }

    public function save(Request $request){
        $reglas = [
            'name'=> 'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'category_id'=>'required',
            'level_id'=> 'required',
            'length'=>'required|numeric',
            'image'=> 'image|max:1999|required'
        ];

        $mensajes = [
            'required'=>'El campo :attribute es requerido',
            'numeric'=>'Este campo :attribute sólo acepta número'
        ];


        $this->validate($request,$reglas,$mensajes);
        if($request->has('image')){
            $rutaArchivo = $request['image']->store('coursePic','public');
            $nombreArchivo= basename($rutaArchivo);
        }
        Course::create([
        'name'=> $request['name'],
        'description'=>$request['description'],
        'price'=>$request['price'],
        'category_id' => $request["category_id"],
        'level_id' => $request['level_id'],
        'length'=>$request['length'],
        'image'=> $nombreArchivo
        ]);
        return redirect('/adminCourses/');

    }

    public function edit(Course $id)
    {
      $levels = Level::all();
      $categories = Category::all();
      $course = Course::find($id);
      return view('Admin.Courses.edit', [
          'course' => $course,
          'categories'=>$categories,
          'levels'=>$levels
      ]);

    }

    public function update(Request $request, $id){
        $reglas = [
            'name'=> 'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'category_id' => $request["category_id"],
            'level_id' => $request['level_id'],
            'length'=>'required|numeric',
            'image'=> 'image|max:1999'
        ];

        $mensajes = [
            'required'=>'El campo :attribute es requerido',
            'numeric'=>'Este campo :attribute sólo acepta número'
        ];
        $this->validate($request,$reglas,$mensajes);
        $fileInForm = 'image';
        if ($request->hasFile($fileInForm)) {
        $file = $request->file($fileInForm);
        if ($file->isValid()) {
            $rutaArchivo =$file->store('coursePic','public');
            $nombreArchivo= basename($rutaArchivo);
        }}
        $cursoActualizado = Course::find($id);
        $cursoActualizado->name = $request->input("name");
        $cursoActualizado->description = $request->input("description");
        $cursoActualizado->price = $request->input("price");
        $cursoActualizado->category_id= $request->input("category_id");
        $cursoActualizado->level_id= $request->input("level_id");
        $cursoActualizado->length=$request->input("length");
        if ($request->hasFile($fileInForm)) {
        $cursoActualizado->image = $nombreArchivo;
        }
        $cursoActualizado->save();
        return redirect('/adminCourses');
    }

    public function delete($id){
        $cursoBorrar = Course::find($id);
        $cursoBorrar->delete();
        return redirect('/adminCourses/');
    }

}




