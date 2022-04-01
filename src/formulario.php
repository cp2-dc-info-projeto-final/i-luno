<?php

if (isset($_POST['submit']))
{

    include_once('conecta.php');

    $nome = $_POST['nome'];
    $nomusu = $_POST['nomusu'];
    $senha = $_POST['senha'];
    $tipo = 1;
    $erro = 0;

    if(strlen($nomusu) < 5){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Nome de usuário precisa ter no mínimo 5 caracteres")';  
        echo '</script>';  
        $erro = 1;
    }
    if(strlen($senha) < 8){
        echo '<script type ="text/JavaScript">';
        echo 'alert("A senha deve possuir no mínimo 8 caracteres")';
        echo '</script>';
        $erro = 1;
    }
    if($nomusu == $senha){
        echo '<script type ="text/JavaScript">';
        echo 'alert("O nome de usuário e a senha devem ser diferentes")';
        echo '</script>';
        $erro = 1;
    }
    if(empty($nome) OR strstr($nome,' ') == FALSE){
        echo '<script type ="text/JavaScript">';
        echo 'alert("Favor digitar seu nome")';
        echo '</script>';
        $erro = 1;
    }
// VERIFICA SE NÃO HOUVE ERRO 
    if($erro == 0) { 
        echo '<script type ="text/JavaScript">';
        echo 'alert("Favor digitar seu nome")';
        echo '</script>';


        header("location: cadastroefetuado.php");
        $mysqli = mysqli_connect("localhost","novailuno","12345678","iluno");
        $sql = "INSERT INTO usuarios (nome, nomUsuario, senha, tipo)";
        $sql .= "VALUES ('$nome','$nomusu','$senha','$tipo');";
        mysqli_query($mysqli,$sql);
        mysqli_close($mysqli);       
        
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
   
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />

</head>
<body>
    <div class="box">
        <form action="formulario.php" method=POST>
            <fieldset>
                <legend>Formulário de Cadastro</legend>
                <br>
                <div class="inputBox2">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox2">
                    <input type="text" name="nomusu" id="nomusu" placeholder="no mínimo 5 caracteres" class="inputUser" required>
                    <label for="email" class="labelInput">Nome de usuário</label>
                </div>
                <br><br>
                <div class="inputBox2">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Crie sua senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
