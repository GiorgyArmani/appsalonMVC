<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesion con tus datos</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>


<form class="formulario"   action="/" method="POST">
  <div class="campo">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Tu email">
  </div>
  <div class="campo">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Tu password">
  </div>
  <div>
    <input class="boton" type="submit" value="Login">
  </div>
</form>

<div class="acciones">
    <a href="/signup">No tienes cuenta? Crear una!</a>
    <a href="/forgot">Olvidaste tu password?</a> 
</div>
