@extends('layouts.plantilla2')
@section('content')
<div class='login'>
        <form class="form2" action="{{ route('login') }}" method="POST">
            @csrf
          <h2>Inicio de Sesión</h2>
            @foreach ($errors->all() as $error)
                  {{$error}}
           @endforeach
          <input class="email2" name='email' placeholder='Email' type='text' value="{{ old('email') }}"/><hr>
          <p id="errorEmail"></p>
          <input class="password2"id='password' name='password' placeholder='Contraseña' type='password' value=""/><hr>
          <p id="errorPassword"></p>
          <div class='recordarte'>
              <input  name="remember" type="checkbox" id="remember" value="recordar" {{ old('remember') ? 'checked' : '' }}/>
              <label for='remember'></label>Recuerdame
          </div>
          <br>
          <input type='submit' value='Iniciar Sesion'/>
          @if (Route::has('password.request'))
               <a class='forgot' href='{{ route('password.request') }}'>¿Olvidaste tu contraseña?</a>
          @endif
        </form>
      </div>
      <section class="caja2">

      </section>
    </div>
@endsection


