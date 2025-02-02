<h1 class="nombre-pagina">Olvide mi Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" method="POST" action="/forgot">
<div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu email" required>
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">

</form>
<div class="acciones">
    <a href="/">Ya tienes una cuenta? Inicia Sesion!</a>
    <a href="/signup">No tienes una cuenta? Crea una!</a> 
</div>