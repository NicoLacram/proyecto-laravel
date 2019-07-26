@extends('layouts.plantilla2')
@section('content')
<main>
    <h2 class="__listcursos">Detalle del Curso</h2>
    <div class="__cursos row">
      <div class="d-flex card col-12  __itemcurso" style="width: 18rem;">

        <div class="_descripCurso">
            <p class="_tituloCur">{{$detalle->name}}</p>
            <div>
               <img src="{{asset("storage/coursePic/$detalle->image")}}" class="card-img-top  __imgcurso" alt="Imagen Curso">
            </div>
            <p class="text-justify">{{$detalle->description}}</p>
            <p class=""><u><strong>Precio:</strong></u> ${{$detalle->price}}</p>
            <p class=""><u><strong>Duracion:</strong></u> {{$detalle->length}} meses</p>
        </div>
        <a style="color:blue" href="/listadoCursos">Volver</a>
      </div>
    </div>
  </main>
@endsection
