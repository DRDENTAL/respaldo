<form action="{{ route('register') }}" method="POST" autocomplete="off">
{{ csrf_field() }}
<div class="input-container">
    <input type="#{type}" id="#{label}" name="name" focus required="required"/>
    <label for="#{label}">Nombre</label>
    <div class="bar"></div>
</div>
<div class="input-container">
    <input type="email" id="#{label}" name="email" required="required"/>
    <label for="#{label}">Correo</label>
    <div class="bar"></div>
</div>
<div class="input-container">
    <input type="password" id="#{label}" />
    <label for="#{label}">Contraseña</label>
    <div class="bar"></div>
</div>
<div class="button-container"><button><span>Registrarse</span></button>
</div>
</form>