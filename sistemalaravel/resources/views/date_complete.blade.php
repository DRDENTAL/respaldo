@extends('layouts.app')
@section('login')
<h2 class="title">Ingrese Contraseña
    <div class="close"></div>
</h2>
<form class="form-horizontal" method="POST" action="{{ url('complete/'.$id) }}">
{{ csrf_field() }}

 <div class="input-container">

    <input type="password" id="#{label}" required="required" name="password" autofocus placeholder="Contraseña" />
    <div class="bar"></div>
    @if ($errors->has('password'))
    {{ $errors->first('password') }}
    @endif
</div>

<div class="input-container">
    <input type="password" id="password-confirm" required="required" name="password_confirmation" autofocus placeholder="Repita Contraseña" /> 
    <div class="bar"></div>
    @if ($errors->has('password'))
    {{ $errors->first('password') }}
    @endif
</div>

<div class="button-container">
    <button><span>Completar Datos</span></button>
</div>
</form>
@endsection
