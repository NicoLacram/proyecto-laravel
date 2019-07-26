@extends('layouts.plantilla2')
@section('content')
    <h2 class="__listcursos">Detalle del Curso</h2>
    <div class="__cursos row">
      <div class="d-flex  col-12  __itemcurso" style="width: 18rem;">
        <div class="_descripCurso">
            <br>
            <div>
               <img src="{{asset("storage/coursePic/$curso->image")}}" class="card-img-top  __imgcurso" alt="Imagen Curso">
            </div>
            <br>
            <p class="text-justify">{{$curso->description}}</p>
            <p class=""><u><strong>Modalidad:</strong></u> {{$curso->category['name']}}</p>
            <p class=""><u><strong>Nivel:</strong></u> {{$curso->level['name']}}</p>
            <p class=""><u><strong>Precio:</strong></u> ${{$curso->price}}</p>
            <p class=""><u><strong>Duracion:</strong></u> {{$curso->length}} meses</p>
            <a href="{{route('cart.add',$curso->id)}}" class="btn btn-success" role="button">AÑADIR AL CARRITO</a>
            <br>
            <a class="_volver" href="/listadoCursos">Volver</a>
        </div>
      </div>
    </div>
@endsection
