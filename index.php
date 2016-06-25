<?php
  if(isset($_GET['error'])){
    if($_GET['error']==1){
      echo 'Error : Debes llenar todos los campos';
    } else if($_GET['error']==2) {
      echo 'Error : El login, la contraseña o ambos son errados ';
    } else if($_GET['error']==3){
      echo 'Error no intentes saltarte el formulario';
    } else if($_GET['error']==4){
      echo '';
    }
    unset($_GET['error']);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="login.php" method="POST">
      <label for="">Usuario</label><input type="text" name="user" value="">
      <br />
      <label for="">Contraseña</label><input type="text" name="password" value="">
      <br />
      <label for="">Desear recordar mi contraseña </label>
      <input type="checkbox" name="sesion" value="1">
      <br />
      <input type="submit" value="INGRESAR" />
  </form>
  </body>
</html>
