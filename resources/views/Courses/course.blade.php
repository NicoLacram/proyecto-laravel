@extends('layouts.plantilla2')
@section('content')
<main>
    <h2 class="__listcursos">Listado de cursos</h2>
    <div class="row">
      <div class="d-flex col-12 __itemcurso" style="width: 18rem;">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Curso</th>
                        <th scope="col">Detalle</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                      <tr>
                        <td>{{$curso->name}}</td>
                        <td><a style="color:blue" href="/DetalleCurso/{{$curso->id}}"><i class="fas fa-info-circle"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
            </table>
      </div>
    </div>
  </main>
    <section class="caja2">
    </section>
@endsection


