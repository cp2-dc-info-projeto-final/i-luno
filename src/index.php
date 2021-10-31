<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      
    }else{
      echo"Bem-Vindo, Estudante! <br>";
      echo"<br><a href='login.html'>Faça Login</a>";
    }
?>
