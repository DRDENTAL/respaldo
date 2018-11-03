@extends('layouts.app')
@section('login')
<h1 class="title">INICIAR SESIÓN
    <div class="close"></div>
</h1>
{!!Form::model(['method'=>'POST','autocomplete'=>'off','url'=>'route("login")'])!!}
    <div class="input-container">
        <input type="email" id="#{label}" required="required" name="email" autofocus placeholder="Ej. contacto@instaclass.cl" />
        <div class="bar"></div>
        @if ($errors->has('email'))<script>swal("Error!", "{{ $errors->first('email') }}", "error");</script>@endif
    </div>
    <div class="input-container">
        <input type="password" id="#{label}" required="required" name="password" placeholder="Contraseña" />
        <div class="bar"></div>

    @if ($errors->has('password'))
        <script>swal("Error!", "{{ $errors->first('password') }}", "error");</script>
    @endif
    </div>
    <div class="button-container">
        <button><span>INICIAR</span></button>
      </div>
{!!Form::close()!!}
<div class="footer"><a href="#" class="toggle">Registrarse aquí</a></div>

</div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">REGISTRAR
      <div class="close"></div>
    </h1>
@include('auth.register')
  </div>
</div>
@endsection