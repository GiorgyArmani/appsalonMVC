<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>


<?php 
    include_once __DIR__. "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/signup">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" value="<?php s($usuario->nombre); ?>">
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Tu apellido" value="<?php s($usuario->apellido); ?>">
    </div>
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu email" value="<?php s($usuario->email); ?>" >
    </div>
    <div class="campo">
        <label for="telefono">telefono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Tu telefono" value="<?php s($usuario->telefono); ?>">
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Tu Password" required>
    </div>
    
    <input class="boton" type="submit" value="Signup">
  
</form>

<div class="acciones">
    <a href="/">Ya tienes una cuenta? Inicia Sesion!</a>
    <a href="/forgot">Olvidaste tu password?</a> 
</div>

