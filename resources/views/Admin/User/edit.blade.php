@extends('layouts.plantilla2')
@section('content')
  <section class="principal">
       <article class="nuevas" id="cursos">
           <div class="cursos">
                @foreach ($user as $user)
                @endforeach
           <form  class="" action="{{ url('detalleUserAdmin',$user->id)}}" method="POST"  enctype= "multipart/form-data">
              @csrf
              {{ method_field('PATCH') }}
               <h2 class="__listcursos">Editar Usuario</h2>
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
                    <label for="titulo">Usuario</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{old('name',$user->name)}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="first_name">Nombre</label>
                    <input class="form-control" type="text"  name="first_name" id="first_name" value="{{old('firstname',$user->first_name)}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="precios">Apellido</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" value="{{old('last_name',$user->last_name)}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="imagen">avatar</label>
                <input class="form-control" type="file" name="avatar" id="avatar" value=""/>
                </div>
                <div class="form-group col-4 offset-4">
                        <a href="/adminUser" class="btn btn-secondary btn-outline-danger" style="color:white" tabindex="-1" role="button" aria-disabled="true">Cancelar</a>
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

