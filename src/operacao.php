<?php
session_start();


if((isset($_POST['nomUsuario'])))
 if (isset($_POST['senha'])){
    $usuario = mysqli_real_escape_string($conn, $_POST['nomUsuario']); 
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

}
if($senha == '123' AND $usuario == 'admin'){

    header("location:administracao.php");

}
else{

  $_SESSION ['loginErro']="Usuario ou senha invalidos";
  header("location:index.php");
}

?>