@extends('layouts.plantilla2')
@section('content')
  <section class="principal">
       <article class="nuevas" id="cursos">
           <div class="cursos">
                @foreach ($course as $curso)
                @endforeach
                <form  action="{{ url('/DetalleCursoUpdate',$curso->id) }}" method="POST"  enctype= "multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    <h2 class="__listcursos">Editar Curso</h2>
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
                            <label for="titulo">Nombre del Curso</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{old('name',$curso->name)}}"/>
                        </div>
                        <div  class="form-group col-4 offset-4">
                           <label for="description">Descripcion</label>
                           <textarea class="form-control" type="text" rows="10" cols="5" name="description" id="description" >{{old('description',$curso->description)}} </textarea>
                        </div>
                        <div  class="form-group col-4 offset-4">
                           <label for="precios">Precio</label>
                           <input class="form-control" type="number" name="price" id="price" value="{{old('price',$curso->price)}}"/>
                        </div>
                        <div  class="form-group col-4 offset-4">
                            <label for="length">Duración</label>
                            <input class="form-control" type="text" name="length" id="length" value="{{old('length',$curso->length)}}"/>
                        </div>
                        <dl class="form-group col-4 offset-4">
                            <dt>Categoria</dt>
                            <dd>
                                <select name="category_id" id="category_id">
                                   @foreach ($categories as $category)
                                   <option value="{{$category->id}}">{{$category->name}}</option>
                                   @endforeach
                                </select>
                            </dd>
                        </dl>
                        <dl class="form-group col-4 offset-4">
                            <dt>Nivel</dt>
                            <dd>
                                <select name="level_id" id="level_id">
                                   @foreach ($levels as $level)
                                   <option value="{{$level->id}}">{{$level->name}}</option>
                                   @endforeach
                                </select>
                            </dd>
                        </dl>
                        <div  class="form-group col-4 offset-4">
                             <label for="imagen">Foto</label>
                             <input class="form-control" type="file" name="image" id="image" value=""/>
                        </div>

                <div class="form-group col-4 offset-4">
                    <a href="/adminCourses" class="btn btn-secondary btn-outline-danger" style="color:white" tabindex="-1" role="button" aria-disabled="true">Cancelar</a>
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

