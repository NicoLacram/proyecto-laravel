@extends('layouts.plantilla2')
@section('content')
<h2 class="__listcursos">Administración de usuarios</h2>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre del Usuario</th>

            <th>Ver</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($user as $user)
            <tr>
            <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>


                <td><a class="admin" href="/detalleUserAdmin/{{$user->id}}"><i class="fas fa-eye"></i></a></td>
                <td><a class="admin" href="/detalleUserAdmin/{{$user->id}}/editUser"><i class="fas fa-edit"></i></a></td>
                <td><a class="admin" id="btdele" href="/deleteUserAdmin/{{$user->id}}"><i class="far fa-trash-alt"></i></a></td>
            </tr>
            @endforeach
    </tbody>

</table>
<section class="caja2">
 </section>
@endsection
