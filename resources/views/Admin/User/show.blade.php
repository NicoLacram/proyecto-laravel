@extends('layouts.plantilla2')
@section('content')
<main>
    <h2 class="__listcursos">Perfil de usuario</h2>
    <div class="__cursos row">
      <div class="d-flex col-12  __itemcurso" style="width: 18rem;">
            <div class="card" style="width: 18rem;">
                    <img src="{{asset("storage/avatars/$user->avatar")}}" class="card-img-top" alt="avatar">
                    <div class="card-body">
                      <h5 class="card-title">{{$user->name}}</h5>
                     <p class="card-text">{{$user->first}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Id:{{$user->id}}</li>
                      <li class="list-group-item">Nombre:{{$user->first_name}}</li>
                      <li class="list-group-item">Apellido:{{$user->last_name}}</li>
                      <li class="list-group-item">{{$user->email}}</li>
                    </ul>
                    <div class="card-body">
                      <a href='{{$user->id}}/editUser' role="button" class="btn btn-primary">Editar</a>
                    </div>
            </div>
        </div>
    </div>
</main>
@endsection
