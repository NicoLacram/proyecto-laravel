@extends('layouts.plantilla2')
@section('content')
  <section class="principal">
       <article class="nuevas" id="cursos">
           <div class="cursos">
                <form  action={{url("/UserPerfilUpdate",$user->id)}} method="POST"  enctype= "multipart/form-data">
                   @csrf
                   {{ method_field('PATCH') }}
                   <h2 class="__listcursos">Editar Perfil</h2>
                   <br>
                   <br>
                   <div class="form-row">
                        <div  class="form-group col-4 offset-4 ">
                          @if(count($errors)>0)
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                                @endif
                            <label for="titulo">Nombre</label>
                                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{old('first_name',$user->first_name)}}"/>
                        </div>
                        <div  class="form-group col-4 offset-4">
                            <label for="description">Apellido</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{old('last_name',$user->last_name)}}"/>
                        </div>
                        <div  class="form-group col-4 offset-4">
                            <label for="imagen">Foto</label>
                            <input class="form-control" type="file" name="avatar" id="avatar" value=""/>
                        </div>
                        <div class="form-group col-4 offset-4">
                            <input type="submit" class="btn btn-primary" value="Actualizar">
                        </div>
                    </div>
                </form>
           </div>
      </article>
  </section>
  <section class="caja2">
    </section>
@endsection

