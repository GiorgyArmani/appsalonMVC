<h1 class="nombre-pagina">Actualizar</h1>
<p class="descripcion-pagina">Llena todos los campos para actualizar el Servicio</p>

<?php include_once dirname(__DIR__). '../templates/barra.php';
      include_once dirname(__DIR__). '../templates/alertas.php'; ?>


<h2>Información General</h2>
<form  method="post" class="formulario">

    <?php include_once __DIR__. '/formulario.php';?>

    <input type="submit" class="boton" value="Actualizar">

</form>