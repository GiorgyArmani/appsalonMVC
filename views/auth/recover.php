<h1 class="nombre-pagina">Reestablece tu Cuenta</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuacion!</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>
<?php if($error) return; ?>

<form class="formulario" method="POST">
<div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Nuevo password" required>
    </div>

    <input type="submit" class="boton" value="Reestablecer Password">

</form>
<div class="acciones">
    <a href="/">Ya tienes una cuenta? Inicia Sesion!</a>
    <a href="/signup">No tienes una cuenta? Crea una!</a> 
</div>