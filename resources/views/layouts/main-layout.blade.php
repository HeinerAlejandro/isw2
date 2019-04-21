@extends('layouts.app') 
@section('menu_content')
<header>
    <!-- Navbar goes here -->
    <!-- Items menu boton en navbar desktop -->

    {{--
    <ul id="dropdownmenu" class="dropdown-content">
        <li><a href="#!">Cambiar Contraseña</a></li>
        <li class="divider"></li>
        <li><a href="{{ route('logout') }}">Cerrar sesion</a></li>
    </ul>
    --}} 
    
    {{--
    <div class="navbar-fixed">
        <nav class="z-depth-0">
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="#!" class="breadcrumb">First</a>
                    <a href="#!" class="breadcrumb">Second</a>
                    <a href="#!" class="breadcrumb">Third</a>
                </div>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger primary-text-color"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <!-- Dropdown Trigger -->
                    <li>
                        <a class="dropdown-trigger dropdownmenu" href="#!" data-target="dropdownmenu">
                                    <i class="material-icons left">account_circle</i>{{ Auth::user()->usuario }}<i class="material-icons right">arrow_drop_down</i>
                                </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    --}}

    <nav class="z-depth-0">
        <div class="container">
            <div class="nav-wrapper">
                <div class="row">
                    <div class="col s12 l10 pull-l2">
                        <h5 class="header-breadcrumb mt-0 mb-0 text-uppercase show-on-medium-and-up hide-on-med-and-down">@yield('title')</h5>
                        <img src="{{ asset('public/img/logo-lugu-svg.svg') }}" alt="logo" class="header-img hide-on-med-and-up" />
                        <a href="#!" class="breadcrumb">First</a>
                        <a href="/" class="breadcrumb">@yield('title')</a> {{-- <a href="#!" class="breadcrumb">Third</a>                        --}}
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <a href="#" data-target="slide-out" class="top-nav sidenav-trigger full hide-on-large-only">
            <i class="material-icons">menu</i>
        </a>
    </div>

    <!-- items menu mobile -->
    {{--
    <ul class="sidenav sidenav-fixed z-depth-0" id="mobile-demo">
        <li><a href="#!">
                <i class="material-icons left">account_circle</i>{{ Auth::user()->usuario }} {{ Auth::user()->lastname }}</a>
        </li>
        <li class="divider"></li>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">home</i>Inicio</div>
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
    --}}

    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background center-align">
                    <img src="{{ asset('public/img/logo-lugu-svg.svg') }}" width="150" height="150" />
                </div>
                <div class="user-info">
                    <a href="#name">
                        <span class="black-text name">
                            {{ Auth::user()->usuario }} {{ Auth::user()->lastname }}
                        </span>
                    </a>
                    <a href="#email">
                        <span class="black-text email">
                            {{ Auth::user()->email }}
                        </span>
                    </a>
                </div>
            </div>
            <div class="divider"></div>
        </li>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">home</i>Inicio</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">account_box</i>
                        Usuarios
                    <i class="material-icons ml-auto arrow-icon">keyboard_arrow_down</i>
                </div>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{ route('programa.index') }}">Programas</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <li class="divider"></li>
        <li>
            <a href="{{ route('logout') }}"><i class="material-icons">add</i>Cerrar sesión</a>
        </li>
    </ul>
</header>
@endsection
 
@section('main_content')
<main>
    @yield('content')
</main>
@endsection