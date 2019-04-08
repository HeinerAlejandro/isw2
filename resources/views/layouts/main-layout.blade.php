@extends('layouts.app')

@section('menu_content')

    
    
    <!-- Navbar goes here -->

    <!-- Items menu boton en navbar desktop -->
    <ul id="dropdownmenu" class="dropdown-content">
      <li><a href="#!">Cambiar Contraseña</a></li>
      <li class="divider"></li>
      <li><a href="{{ route('logout') }}">Cerrar sesion</a></li>
    </ul>

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
              <a href="{{ url('/') }}" class="brand-logo"> {{ config('app.name', 'Laravel') }}</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <!-- Dropdown Trigger -->
                    <li>
                        <a class="dropdown-trigger dropdownmenu" href="#!" data-target="dropdownmenu">
                          <i class="material-icons left">account_circle</i>{{ Auth::user()->name }} {{ Auth::user()->lastname }}<i class="material-icons right">arrow_drop_down</i>
                          </a>
                    </li>

              </ul>
            </div>
        </nav>
    </div>

    <!-- items menu mobile -->
    <ul class="sidenav" id="mobile-demo">
      <li><a href="#!">
        <i class="material-icons left">account_circle</i>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</a>
      </li>
      <li class="divider"></li>
        <ul class="collapsible">
          <li>
            <div class="collapsible-header blue"><i class="material-icons">home</i>Inicio</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">business_center</i>Empresas</div>
            <div class="collapsible-body"></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">content_paste</i>Tareas</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>          
          <li>
            <div class="collapsible-header"><i class="material-icons">account_box</i>Usuarios</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      <li class="divider"></li>
      <li><a href="{{ route('logout') }}">Cerrar sesion</a></li>
    </ul> 
@endsection

@section('main_content')
    
    <!-- Page Layout here -->
    <div class="row">

      <div class="col s2 m2 hide-on-med-and-down blue">
        <!-- Menu desktop Izquierda -->
        <ul class="collapsible">
          <li>
            <div class="collapsible-header blue"><i class="material-icons">home</i>Inicio</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">business_center</i>Empresas</div>
            <div class="collapsible-body"></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">content_paste</i>Tareas</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>          
          <li>
            <div class="collapsible-header"><i class="material-icons">account_box</i>Usuarios</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </div>

      <div class="col s12 m10">
        <!-- Teal page content  -->
        
         @yield('content')
      </div>

    </div>
@endsection