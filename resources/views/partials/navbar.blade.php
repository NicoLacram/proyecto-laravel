<header class="header">
    <nav class="navbar fixed-top">
        <a href="/" class="logo">RODINI</a>
        <span class="menu-icon"> <img src="https://img.icons8.com/color/48/000000/menu.png"> </span>
      <nav class="navigation">
        <ul>
            <li class="_principal">
                        <a href="/">HOME</a>
            </li>
            <li class="_principal dropdown">
                <a href="/listadoCursos" class="dropbtn">CURSOS</a>
                <div class="dropdown-content">
                        <a href="/presencial">Presencial</a>
                        <a href="/blend">Blend</a>
                </div>
            </li>
            <li class="_principal">
                    <a href="/faq">FAQ</a>
            </li>
            @guest
               <li class="nav-item  _principal">
                   <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                </li>
                @if (Route::has('register'))
                   <li class="nav-item _principal">
                       <a class="nav-link" href="{{ route('register') }}">REGISTRO</a>
                   </li>
               @endif
               @else
               @if (Auth::User()->role == 7)
               <li class="nav-item dropdown _principal">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       Administar<span class="caret"></span>
                   </a>

                   <section class="dropdown-menu dropdown-menu _principal" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" href="/adminCourses">Cursos</a>
                       <a class="dropdown-item" href="/adminUser">Usuarios</a>
                   </section>
               </li>
               @endif
                   <li class="nav-item dropdown _principal">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu _principal" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/UserPerfil/{{ Auth::user()->id }}">Perfil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST"                style="display: none;">
                                     @csrf
                                 </form>
                         </div>
                     </li>
             @endguest
             <li class="_busqueda">
                <form action={{route('product.search')}} method="get" class="form-inline my-2 my-lg-0" >
                        <input class="form-control mr-sm-1 iconnav bordernav" type="search" name="busqueda" aria-label="Search">
                        <button class="fas fa-search nav-item fa-lg iconnav" type="submit" name="search-submit"></button>
                </form>
            </li>
            <li class="_basket">
                 <a class="nav-link" href="/cart">
                     <i class="fas fa-shopping-basket fa-md icon navcart"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>

