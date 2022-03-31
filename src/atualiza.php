<?php
    include_once('conecta.php');

    if(isset($_POST[ 'atualizar']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $nomUsu = $_POST['nomusu'];
        $senha = $_POST['senha'];
        
        $sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha',nomusu='$nomusu' WHERE id=$id";
        $result = $conexao->query($sqlUpdate);
        print_r($result);
    }
    header('Location: formulario.php');

?>
