<?php


if(isset($_POST['user']) and isset($_POST['password'])){
  if (empty($_POST['user']) or empty($_POST['password'])){
      header('location:index.php?error=1');

    } else {
      if ($_POST['user'] == "Prinick" and $_POST['password']=='12345'){
        session_start();
        if($_POST['sesion']==1){
          ini_set(session.cookie_lifetime,time()+(60*1));
        }
        $_SESSION['usuario']=$_POST['user'];
        header('location:access.php');
      } else {
        header('location:index.php?error=2');

      }
    }
    } else {
        header('location:index.php?error=3');
    }



?>
