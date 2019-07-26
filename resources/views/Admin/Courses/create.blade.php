@extends('layouts.plantilla2')
@section('content')
  <section class="principal">
       <article class="nuevas" id="cursos">
           <div class="cursos">
             <form  action="/saveCourses" method="POST"  enctype= "multipart/form-data">
              @csrf
               <h2 class="__listcursos">Nuevo Curso</h2>
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
                    <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="description">Descripcion</label>
                    <textarea class="form-control" type="text" rows="10" cols="5" name="description" id="description" value="{{old('description')}}"> </textarea>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="precios">Precio</label>
                    <input class="form-control" type="text" name="price" id="price" value="{{old('price')}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="length">Duración</label>
                    <input class="form-control" type="text" name="length" id="length" value="{{old('length')}}"/>
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
                    <input type="submit" class="btn btn-primary" value="Agregar Curso">
                </div>
            </div>
            </form>

          </div>
      </article>
  </section>
  <section class="caja2">
</section>
@endsection
