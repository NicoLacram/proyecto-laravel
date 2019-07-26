@extends('layouts.plantilla2')
@section('content')
    <h2 class="__listcursos">Detalle del Curso</h2>
    <div class="__cursos row">
      <div class="d-flex col-12  __itemcurso" style="width: 18rem;">
            <div class="_descripCurso">
                <p class="_tituloCur">{{$cursos->name}}</p>
                <br>
                <div>
                   <img src="{{asset("storage/coursePic/$cursos->image")}}" class="card-img-top  __imgcurso" alt="Imagen Curso">
                </div>
                <br>
                <p class="text-justify">{{$cursos->description}}</p>
                <p class=""><u><strong>Modalidad:</strong></u> {{$cursos->category['name']}}</p>
                <p class=""><u><strong>Nivel:</strong></u> {{$cursos->level['name']}}</p>
                <p class=""><u><strong>Precio:</strong></u> ${{$cursos->price}}</p>
                <p class=""><u><strong>Duracion:</strong></u> {{$cursos->length}} meses</p>
                <br>
                <a class="_volver" href="/adminCourses">Volver</a>
            </div>
        </div>
    </div>
@endsection
