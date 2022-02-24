<?php

    if (!empty( $_GET[ 'id' ])))
    {
        include_once ('conecta.php');

        $id = $_GET ['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id" ;

        $resultado = $conexao -> consulta ( $sqlSelect );

        if ($resultado -> num_rows > 0 )
        {
            $sqlDelete = "EXCLUIR DE usuarios WHERE id=$id" ;
            $resultDelete = $conexao -> consulta ($sqlDelete );
        }
    }
    header ('Localização: sistema.php');
?>
