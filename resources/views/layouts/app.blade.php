<!DOCTYPE html>
<html lang="es">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta charset="UTF-8">
  <meta name="description" content="InstaClass Gestion Escolar" />
  <meta name="keywords" content="Gestio Escolar asistencia chile" />
  <meta name="author" content="Ariel Arancibia" />
  {!! Html::style('plugins/materialize/css/materialize.min.css') !!}
  {!! Html::style('plugins/material-preloader/css/materialPreloader.min.css') !!}
  {!! Html::style('css/icon.css') !!}
  {!! Html::style('css/alpha.min.css') !!}
  {!! Html::style('plugins/select2/css/select2.css') !!}
  {!! Html::style('css/custom.css') !!}
  {!! Html::style('plugins/sweetalert/sweetalert.css') !!}
  {!! Html::script('plugins/sweetalert/sweetalert.min.js') !!}
</head>

  <body>
    <div class="loader-bg"></div>
    <div class="loader">
      <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
          <div class="circle-clipper left"><div class="circle"></div></div>
          <div class="gap-patch"><div class="circle"></div></div>
          <div class="circle-clipper right"><div class="circle"></div></div>
        </div>
        <div class="spinner-layer spinner-orange">
          <div class="circle-clipper left"><div class="circle"></div></div>
          <div class="gap-patch"><div class="circle"></div></div>
          <div class="circle-clipper right"><div class="circle"></div></div>
        </div>
        <div class="spinner-blue">
          <div class="circle-clipper left"><div class="circle"></div></div>
          <div class="gap-patch"><div class="circle"></div></div>
          <div class="circle-clipper right"><div class="circle"></div></div>
        </div>
        <div class="spinner-orange">
          <div class="circle-clipper left"><div class="circle"></div></div>
          <div class="gap-patch"><div class="circle"></div></div>
          <div class="circle-clipper right"><div class="circle"></div></div>
        </div>
      </div>
    </div><!-- end loader-->

    <div class="mn-content fixed-sidebar">
     <header class="mn-header navbar-fixed">
       <nav class="white">
          <div class="nav-wrapper row">
            <section class="material-design-hamburger navigation-toggle"><a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon"><span class="material-design-hamburger__layer blue"></span></a></section>
            <div
              class="header-title col s3 m3"><span class="chapter-title"><img src="{{asset('img/logony.png')}}" width="140px" height="50px"></span></div>
          <ul class="right col s9 m3 nav-right-menu">
            <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons blue-text">more_vert</i></a></li>
            <li
              class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons blue-text">notifications_none</i><span class="badge orange">4</span></a></li>
              <!-- numero de notificacion-->
            <li
                class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons blue-text">search</i></a></li>
          </ul>
          <ul id="dropdown1" class="dropdown-content notifications-dropdown">
            <li class="notificatoins-dropdown-container">
              <ul>
                <li class="notification-drop-title">Notificación</li>
                <li class="notification-drop-title">Solicitudes</li>
                <!-- Notificationes -->
              </ul>
            </li>
          </ul>
        </div>
       </nav>
     </header>
    <aside id="chat-sidebar" class="side-nav white">
      <div class="side-nav-wrapper">
        <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
          <p class="right-sidebar-heading">CUENTA</p>
          <div class="settings-list">
            <div class="setting-item"><div class="setting-text"> <a href="javascript:void(0);" onclick="cargarformulario(1);">Datos de Usuario</a></div> </div>
            <div class="setting-item">
            <div class="setting-text">
               <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </div>
            </div>
            <div class="setting-item">
            </div>
          </div>
        </div>
      </div>
    </aside>

    <aside id="slide-out" class="side-nav white fixed">
      <div class="side-nav-wrapper">
        <div class="sidebar-profile">
          <div class="sidebar-profile-image"><img src="{{ Auth::user()->avatar }}" class="circle" alt=""></div>
          <div class="sidebar-profile-info">
            <a href="javascript:void(0);" class="account-settings-link">
              <p> {{ Auth::user()->name }} </p><span>{{ Auth::user()->email }} <i class="material-icons right">arrow_drop_down</i></span></a>
          </div>
        </div>
        <div class="sidebar-account-settings">
          <ul>
            <li class="no-padding"><a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Mi Información</a></li>
            <li class="no-padding"><a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Cambiar Contraseña<span class="new badge">18</span></a></li>
            <li class="no-padding"><a class="waves-effect waves-grey"><i class="material-icons">done</i>Reportar Error</a></li>
            <li class="no-padding"> <a class="waves-effect waves-grey"><i class="material-icons">history</i>Other<span class="new grey lighten-1 badge">3 new</span></a></li>
              <li
                class="divider"></li>
            <li class="no-padding"><a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a> 
            </li>
          </ul>
        </div>
        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
          <li class="no-padding active"><a href="javascript:void(0);" onclick="cargarformulario(2);"><i class="material-icons">trending_up</i>Grafico</a></li>
          <li class="no-padding"><a class="collapsible-header waves-effect waves-grey"><i class="material-icons">person_pin</i>Usuario<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
            <div
              class="collapsible-body">
              <ul>
                @if (Auth::user()->pp_alumno != 0 )
                  <li><a href="javascript:void(0);" onclick="cargarformulario(10);">Alumno</a></li>
                @endif

                @if (Auth::user()->pp_profesor != 0 )
                  <li><a href="javascript:void(0);" onclick="cargarformulario(11);">Profesor</a></li>
                @endif

                @if (Auth::user()->pp_apoderado != 0 )
                  <li><a href="javascript:void(0);" onclick="cargarformulario(12);">Apoderado</a></li>
                @endif

                @if (Auth::user()->pp_utp != 0 )
                  <li><a href="javascript:void(0);" onclick="cargarformulario(13);">UTP</a></li>
                @endif
                @if (Auth::user()->pp_secretaria != 0 )
                  <li><a href="javascript:void(0);" onclick="cargarformulario(14);">Secretaria</a></li>
                @endif
                @if (Auth::user()->pp_inspectoria != 0 )
                  <li><a href="javascript:void(0);" onclick="cargarformulario(15);">Inspectoria</a></li>
                @endif
              </ul>
      </div>
      </li>
      <li class="no-padding"><a class="collapsible-header waves-effect waves-grey"><i class="material-icons">supervisor_account</i>Profesor<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
        <div
          class="collapsible-body">
          <ul>
            @if (Auth::user()->pp_asistencia != 0 )
                <li><a href="javascript:void(0);" onclick="cargarformulario(20);">Asistencia</a></li>
            @endif
            @if (Auth::user()->pp_notas != 0 )
                <li><a href="javascript:void(0);" onclick="cargarformulario(21);">Nota</a></li>
            @endif
            @if (Auth::user()->pp_curso != 0 )
                <li><a href="javascript:void(0);" onclick="cargarformulario(22);">Curso</a></li>
            @endif
            @if (Auth::user()->pp_trivia != 0 )
                <li><a href="javascript:void(0);" onclick="cargarformulario(23);">Trivia</a></li>
            @endif

          </ul>
          </div>
      </li>
      <li class="no-padding"><a class="collapsible-header waves-effect waves-grey"><i class="material-icons">work</i>Reportes<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
        <div
          class="collapsible-body">
          <ul>
            @if (Auth::user()->pp_reReunion != 0 )
                <li><a href="javascript:void(0);" onclick="cargarformulario(30);">Reunión</a></li>
            @endif
            @if (Auth::user()->pp_reAlumno != 0 )
                <li><a href="javascript:void(0);" onclick="cargarformulario(31);">Alumno</a></li>
            @endif
            @if (Auth::user()->pp_reCurso != 0 )
                <li><a href="javascript:void(0);" onclick="cargarformulario(32);">Curso</a></li>
            @endif
            @if (Auth::user()->pp_reEstablecimiento != 0 )
                <li><a href="javascript:void(0);" onclick="cargarformulario(33);">Establecimiento</a></li>
            @endif
          </ul>
          </div>
      </li>
      <li class="no-padding"><a class="collapsible-header waves-effect waves-grey"><i class="material-icons">settings</i>Administración<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
        <div
          class="collapsible-body">
          <ul>
            @if (Auth::user()->pp_curso != 0 )
                <li><a href="javascript:void(0);" onclick="cargarformulario(40);">Curso</a></li>
            @endif
          </ul>
          </div>
      </li>
      </ul>
      <div class="footer">
        <p class="copyright">Instaclass ©</p><a href="http://www.nmhdesarrolla.cl" target="_black">NMH DESAROLLA</a></div>
      </div>
    </aside> 

    <main class="mn-inner">
    <!-- CONTENIDO DEL MODAL EN AJAX-->

    <!-- cONTENIDO DE MENU-->
    <section class="content row col s12" id="contenido_principal">
      <div style="display: none;" id="cargador_empresa">
        <div class="row col s12 center">
          <img src="imagenes/cargando.gif"  width="12%"  alt="cargador" title="Cargando..."> <br>
          <label> Cargando... </label>
        </div>
      </div>
    </section>


    </main>
    </div>
    <div class="left-sidebar-hover"></div>
    {!! Html::script('plugins/jquery/jquery-2.2.0.min.js') !!}
    {!! Html::script('plugins/materialize/js/materialize.min.js') !!}
    {!! Html::script('plugins/material-preloader/js/materialPreloader.min.js') !!}
    {!! Html::script('plugins/jquery-blockui/jquery.blockui.js') !!}
    {!! Html::script('plugins/jquery-validation/jquery.validate.min.js') !!}
    {!! Html::script('plugins/jquery-steps/jquery.steps.min.js') !!}
    {!! Html::script('js/alpha.min.js') !!}
    {!! Html::script('js/ajax.js') !!}
    {!! Html::script('plugins/sweetalert/sweetalert.min.js') !!}
    {!! Html::script('plugins/select2/js/select2.min.js') !!}
    {!! Html::script('js/pages/form-wizard.js') !!}
  </body>
</html>