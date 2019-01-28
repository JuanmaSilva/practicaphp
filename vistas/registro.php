<!DOCTYPE html>
<html>

  <body class="cuerpo">
  <center>
    <div class="container centrar">
        <a href="index.php?action=login">Inicio</a>
        <div class="container cuerpo text-center">	
            <h1>REGISTRO</h1>
        <?php foreach ($parametros["mensajes"] as $mensaje) : ?> 
          <div class="alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
        <?php endforeach; ?>
        <form method="post" enctype="multipar/form-data" action="index.php?action=adduser">
           <div>
            <label for="NIF">NIF*: 
            <input type="text" name="NIF" class="form-control" required>
            </label>
            <label for="nombre">Nombre*: 
                <input type="text" name="nombre" class="form-control" required>
            </label><br>    
            <label for="apellido1">Apellido1*: 
                <input type="text" name="apellido1" class="form-control" required>
            </label>
            <label for="apellido2">Apellido2: 
                <input type="text" name="apellido2" class="form-control" >
            </label><br>
            <label for="nombreusuario">Nombre usuario*: 
                <input type="text" name="nombreusuario" class="form-control" required></input>
            </label><br>
            </div>
            <label for="telefonomovil">Telefono movil*: 
                <input type="text" name="telefonomovil" class="form-control" required>
            </label>
            <label for="telefonofijo">Telefono fijo: 
                <input type="text" name="telefonofijo" class="form-control" >
            </label><br>
            <label for="email">E-mail*: 
                <input type="email" name="email" class="form-control" required>
            </label><br>
            <label for="passwd">Contraseña*: 
                <input type="password" name="passwd" class="form-control" required>
            </label><br>
            <label for="departamento">Departamento*: 
                <input type="text" name="departamento" class="form-control" required>
            </label><br>
            <label for="paginaweb">Pagina web: 
                <input type="text" name="paginaweb" class="form-control" >
            </label>
            <label for="blog">Blog: 
                <input type="text" name="blog" class="form-control" >
            </label>
            <label for="twitter">Twitter: 
                <input type="text" name="twitter" class="form-control" >
            </label><br>
            <label for="imagen">Foto
            <input type="file" name="imagen" class="form-control">
            </label><br>
            <div class="container text-center">
            <div class="g-recaptcha" data-sitekey="6LcvfYIUAAAAAF75EL8oyYBFbNbB1RV9oSWB1a9F"></div>
            </div>
            <input type="submit" name="enviar" value="Registrarse" class="btn btn-success">
                </form>
      </div>
    </div>
  </center>
  </body>
</html>

