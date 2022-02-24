<?php
      
    include_once ('conecta.php');
    if (isset($_POST ['atualizar']))
    {
        $id = $_POST ['id'];
        $nome = $_POST['nome'];
        $nomusu = $_POST['nomusu'];
        $senha = $_POST['senha'];
        
        
        $sqlInsert = "ATUALIZAR usuarios
        SET nome='$nome',senha='$senha',nomusu='$nomusu' WHERE id=$id";
        $resultado = $conexao -> consulta($sqlInsert);
        print_r($resultado);
    }
     header('Location: sistema.php');

?>
