<html>
<?php require_once 'includes/header.php'; 
    require_once 'includes/navbar.php';?>
  <body class="cuerpo">
    <div class="container centrar">
      <div class="container cuerpo text-center">	
        <a href="index.php?action=listado"> Listar usuarios</a><br>
        <a href="index.php?action=adduser"> Añadir usuario</a>
        <p><h2><img class="alineadoTextoImagen" src="images/user.png" width="50px"/>Actualizar Usuario</h2> </p>
      </div>
      <?php // Mostramos los mensajes procedentes del controlador que se hayan generado
            foreach ($parametros["mensajes"] as $mensaje) : ?> 
             <div class="alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
      <?php endforeach; ?>
      <form action="index.php?action=actuser" method="post" enctype="multipart/form-data">
        <!-- Rellenamos los campos con los valores recibidos desde el controlador -->
        <label for="txtnombre">Nombre
          <input type="text" class="form-control" name="nombre" value="<?= $parametros["datos"]["nombre"] ?>" required></label>
        <br/>
        <label for="email">Email
          <input type="email" class="form-control" name="email" value="<?= $parametros["datos"]["email"] ?>" required></label>
        <br/>  
        <?php if ($parametros["datos"]["imagen"] != null && $parametros["datos"]["imagen"] != "") { ?>
          </br>Imagen del Perfil: <img src="fotos/<?= $parametros["datos"]["imagen"] ?>" width="60" /></br>
        <?php } ?>
        </br>
        <label for="imagen">Actualizar imagen de perfil:
          <input type="file" name="imagen" class="form-control" value="<?= $parametros["datos"]["imagen"] ?>" /></label>
        </br>
        <!--Creamos un campo oculto para mantener el valor del id que deseamos modificar cuando pulsemos el botón actualizar-->  
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br/>
        <input type="submit" value="Actualizar" name="submit" class="btn btn-success">
      </form>
    </div>
  </body>
</html>