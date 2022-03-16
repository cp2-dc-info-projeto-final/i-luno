<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['nomusu']) && !empty($_POST['senha']))
    {
        //Acessa
        include_once('conectar.php')
        $nomusu = $_POST['nomusu'];
        $senha = $_POST['senha'];

       // print_r('$nomusu: ' . $nomusu);
       // print_r('<br>');
       // print_r('senha: ' . $senha);

       $sql="SELECT * FROM usuarios WHERE email = '$nomusu' and senha = '$senha'";

       $result = $conexão->query($sql);

       // print_r($sql);
       // print_r($result);

       if(mysqli_num_rows($result)< 1)
       {
          unset($_SESSION['nomusu'] = $nomusu);
          unset($_SESSION['senha'] = $senha);
          header('location: index.php'); 
       }
       else
       {
           $_SESSION['nomusu'] = $nomusu;
           $_SESSION['senha'] = $senha;
          header('location: sistema.php');
       }
    }
    else
    {
        //Não acessa
        header('location:index.php');
    }

    echo  "<script>alert('Não foi possivel fazer o login!);</script>";
?>
