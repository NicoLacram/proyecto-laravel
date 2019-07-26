@extends('layouts.plantilla2')
@section('content')
    <h2 class="__listcursos">Administración de Cursos</h2>
    <br>
    <a cllas="crearCurso" style="color:orange" href="/createCourses">Incluir un curso</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre del Curso</th>

                <th>Ver</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($cursos as $curso)
                <tr>
                <td>{{$curso->id}}</td>
                    <td>{{$curso->name}}</td>


                    <td><a class="admin" href="/DetalleCursoAdmin/{{$curso->id}}"><i class="fas fa-eye"></i></a></td>
                    <td><a class="admin" href="/DetalleCurso/{{$curso->id}}/editCourses"><i class="fas fa-edit"></i></a></td>
                    <td><a class="admin" id="btdele" href="/deleteCourse/{{$curso->id}}"><i class="far fa-trash-alt"></i></a></td>
                </tr>
                @endforeach
        </tbody>

    </table>
    <section class="caja2">
     </section>

@endsection

