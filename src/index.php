<?php
include("conecta.php");

if(isset ($_POST['nomUsuario']) || isset($_POST['senha'])){
  
    if(strlen($_POST['nomUsuario'])== 0){    
      echo"Preencha seu nome";
    }  else if(strlen($_POST['senha'])== 0){  
      echo"Preencha com sua senha";
    } else {   

      $nome = $mysli ->real_escape_string($_POST['nomUsuario']);
      $senha = $mysli ->real_escape_string($_POST['senha']);


       $sql_code = "SELECT * FROM  usuarios WHERE nomUsuario = '$nomUsuario' AND senha= '$senha'";
       $sql_query = $mysqli->query($sql_code) or die ("Falha na execusão do código:" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){ 
            
            $usuario = $sql_query->mysqli_fetch_assoc();


            if(!isset($_SESSION)) {  
             session_start();
         }
           $_SESSION['id'] = $usuario ['id'];
           $_SESSION['nomUsuario'] = $usuario ['nomUsuario'];

            header("location: paginainicial.php");

        }else{  
         echo"Falha ao logar!! nome ou senha incorretos";
        }
    
    }   


}
?>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
    
</head>
<body>
    
    <div class="inputBox1">
        <h1>Login</h1>
        <form action="" method="POST" name="nomusu">
        <input type="text" placeholder="Nome de usuário">
        <br><br>
        <input type="password" placeholder="Senha" name="senha">
        <br><br><br>
        <button class="btn" type="submit" name="submit">Login</button>
        <br><br><br>
        <a class="btn" href="formulario.php">Cadastra-se aqui</a>
    </div>
</body>
</html>
