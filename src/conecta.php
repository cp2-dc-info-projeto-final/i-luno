<?php

    $dbHost = 'Localhost';
    $dbUsername = 'novailuno';
    $dbPassword = '12345678';
    $dbName = 'iluno';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

     if($conexao->connect_errno)
     {
         echo "Erro";
     }
     else
     {
         echo "Conexao efetuada com sucesso";
     }

?>
