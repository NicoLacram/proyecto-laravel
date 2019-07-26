@extends('layouts.plantilla2')
@section('content')
    <div class='formulario'>
        <h2>Registrarse</h2>
        <ul style="color:red"class="errores">
                @foreach ($errors->all() as $error)
                    {{$error}}
                @endforeach
        </ul>
        <form class="form" action="{{ route('register') }}" method="POST" enctype= "multipart/form-data">
            @csrf
            <input name='name' id="user_name" placeholder='Usuario' type='text' value="{{ old('name') }}"/><hr>
            <div id="errorUserName"></div>
            <input name="email" id="email" type="text"  placeholder="Email" title="user@email.com" value="{{ old('email') }}"><hr>
            <div id="errorEmail"></div>
            <input name='password'  id="password" placeholder='Contraseña' type='password' value=""/><hr>
            <div id="errorPassword"></div>
            <input name="password_confirmation" id="repassword" type="password" placeholder="Confirmar Contraseña" value=""><hr>
            <div id="errorPasswordRepeat"></div>
            <br>
            <input name="submit" type='submit' value='Registrarte'/>
        </form>
    </div>
    <section class="caja2">
    </section>
@endsection
