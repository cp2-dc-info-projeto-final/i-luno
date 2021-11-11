<?php
    $operacao = $_POST["operacao"];
    include "i-luno.sql";

    if($operacao == "inserir"){
        $username = $_POST["username"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $erro = 0;

        if(strlen($username) < 5 OR strlen($username) > 10){
            echo "O username deve possuir no mínimo 5 e no máximo 10 caracteres.<br>";
            $erro = 1;
        }
        if(strlen($senha) < 5 OR strlen($senha) > 10){
            echo "A senha deve possuir no mínimo 5 e no máximo 10 caracteres.<br>";
            $erro = 1;
        }
        if($username == $senha){
            echo "O username e a senha devem ser diferentes.<br>";
            $erro = 1;
        }
        if(empty($nome) OR strstr($nome,' ') == FALSE){
            echo "Favor digitar seu nome corretamente. <br>";
            $erro = 1;
        }
        if(strlen($nome) > 30){
            echo "O nome deve possuir no máximo 30 caracteres.<br>";
            $erro = 1;
        }
        // VERIFICA SE NÃO HOUVE ERRO 
        if($erro == 0) {
            $sql = "INSERT INTO usuarios (username,senha,nome)";
            $sql .= "VALUES ('$username','$senha','$nome');";  
            mysqli_query($mysqli,$sql);  
            echo "<br>O usuário foi cadastrado com sucesso!"; 
        }
    }
    elseif($operacao == "exibir"){
        $sql = "SELECT * FROM usuarios;";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i=0; $i < $linhas; $i++){
            $usuario = mysqli_fetch_array($res);
            echo "Username: ".$usuario["username"]."<br>";
            echo "Senha: ".$usuario["senha"]."<br>";
            echo "Nome: ".$usuario["nome"]."<br>";
            echo $usuario["cod_usuario"]."'>Alterar usuário</a><br>";
        }
    }
    elseif($operacao == "buscar"){
        $username = $_POST["username"];
        $sql = "SELECT * FROM usuarios WHERE username like '%$username%';";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i=0; $i < $linhas; $i++){
            $usuario = mysqli_fetch_array($res);
            echo "Username: ".$usuario["username"]."<br>";
            echo "Senha: ".$usuario["senha"]."<br>";
            echo "Nome: ".$usuario["nome"]."<br>";
        }
    }
    elseif($operacao == "atualizar"){
        $cod_usuario = $_POST["cod_usuario"];
        $username = $_POST["username"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $erro = 0;

        if(strlen($username) < 5 OR strlen($username) > 10){
            echo "O username deve possuir no mínimo 5 e no máximo 10 caracteres.<br>";
            $erro = 1;
        }
        if(strlen($senha) < 5 OR strlen($senha) > 10){
            echo "A senha deve possuir no mínimo 5 e no máximo 10 caracteres.<br>";
            $erro = 1;
        }
        if($username == $senha){
            echo "O username e a senha devem ser diferentes.<br>";
            $erro = 1;
        }
        if(empty($nome) OR strstr($nome,' ') == FALSE){
            echo "Favor digitar seu nome corretamente. <br>";
            $erro = 1;
        }
        if(strlen($nome) > 30){
            echo "O nome deve possuir no máximo 30 caracteres.<br>";
            $erro = 1;
        }
        // VERIFICA SE NÃO HOUVE ERRO 
        if($erro == 0) {
            $sql = "UPDATE usuarios SET username = '$username', senha = '$senha',";
            $sql .= "nome = '$nome'"; 
            $sql .= "WHERE cod_usuario = $cod_usuario;";
            mysqli_query($mysqli,$sql);  
            echo "<br>O usuário foi atualizado com sucesso!";
            echo "<br><a href='index.php'>Página Inicial</a>";
        }
    }
    mysqli_close($mysqli);
?>

