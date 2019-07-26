@extends('layouts.plantilla')
@section('content')
 {{ session('status') }}
<div class='container-fluid p-0 bg-light'>
        @foreach ($cursos as $curso)
        <div class="row  _cursos">
            <div class="d-wrap col-xs-12 col-md-6 col-lg-6 _inicio">
                <img class="rounded-circle" src="/storage/coursePic/{{$curso->image}}" alt="Imagen Curso" width="200" height="200">
               <h2 class="text-center _home" id="_titulo">{{$curso->name}}</h2>
               <p class="text-monospace text-justify _home"> {{$curso->description}}</p>
               <p class="_home"><a class="btn btn-info" href="/DetalleCurso/{{$curso->id}}" role="button">Ver más&raquo;</a></p>
            </div>
        </div>
    @endforeach
</div>
@endsection
