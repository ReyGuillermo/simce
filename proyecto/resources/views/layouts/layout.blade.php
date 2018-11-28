<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>SIMCE |</title>

    <!-- Bootstrap -->
    <link href="{{ asset ('plantilla/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset ('plantilla/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Aqui estilos personalizados -->
    @yield('estilos')
    <!-- //////////////////////////  -->
    <!-- Custom Theme Style -->
    <link href="{{ asset ('plantilla/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SIMCE</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('plantilla/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-cog"></i> Parametros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @can('Documento.index')
                        <li><a href="{{ route('Documento.index') }}">Tipo Documentos</a></li>
                      @endcan
                      @can('Funcionario.index')
                        <li><a href="{{ route('Tfuncion.index') }}">Tipo Funcionario</a></li>
                      @endcan
                      @can('Solicita.index')
                        <li><a href="{{ route('Solicita.index') }}">Tipo de Solicitantes</a></li>
                      @endcan
                      @can('Identidad.index')
                        <li><a href="{{ route('Identidad.index') }}">Tipo de Identificación</a></li>
                      @endcan
                      @can('Documentos.index')
                        <li><a href="{{ route('Documentos.index') }}">Documentos Solicitados</a></li>
                      @endcan
                      @can('Medicamentos.index')
                        <li><a href="{{ route('Medicamentos.index') }}">Medicamentos</a></li>
                      @endcan
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Solicitudes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    @can('Solicitud.create')
                      <li><a href="{{ route('Solicitud.index') }}">Crear Solicitud</a></li>
                    @endcan
                    @can('Solicitud.index')
                      <li><a href="{{ route('Solicitud.index') }}">Mis Solicitudes</a></li>
                    @endcan
                    @can('Establecimiento.index')
                      <li><a href="{{ route('Establecimiento.index') }}">Mis Establecimientos</a></li>
                    @endcan
                    </ul>
                  </li>
                  <li><a><i class="fa fa-check"></i> Administración<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @can('Usuarios.index')
                        <li><a href="{{ route('Usuarios.index') }}">Usuarios</a></li>
                      @endcan
                      <li><a href="{{ route('Documento.index') }}">Revisar Documentación</a></li>                      
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div> 
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('plantilla/images/img.jpg')}}" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Configuración</span>
                      </a>
                    </li>                    
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <i class="fa fa-sign-out pull-right"></i>Salir</a>
                          {!! Form::open(['route' => 'logout','class'=>'form-horizontal', 'name' =>'logout-form', 'id' =>'logout-form']) !!}
                            @include('admin.Logout.partes.form')
                          {!! Form::close() !!} 
                    </li>                    
                  </ul>
                </li>
                <li role="presentation" class="dropdown">                
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('plantilla/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('plantilla/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('plantilla/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('plantilla/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <div class="container-fluid">              
                    <h1>Simce</h1>
            </div>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- Contenido de la pagina -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="col-md-12 title_center">
                <h2>Sistema de Información para el Manejo de Medicamentos de Control Especial</h2>                
              </div>
            </div>
            <div class="row"></div>
            <div class="clearfix"></div>
            @yield('contenido')
          </div>
        </div> 
        <!-- /Termina contenido de la pagina -->
        
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gobernación de Casanare - Guillermo Torres 
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset ('plantilla/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset ('plantilla/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Aqui los script adicionales -->

    @yield('scripts')

    <!-- Custom Theme Scripts -->
    <script src="{{ asset ('plantilla/build/js/custom.min.js')}}"></script>

    @yield('scriptsadd')

  </body>
</html>
