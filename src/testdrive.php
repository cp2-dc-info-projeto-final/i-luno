<?php
  
 include_once('conecta.php');

if(isset ($_POST['nomusu']) && isset($_POST['senha'])){    
    $nome = $_POST['nomusu'];
    $senha =$_POST['senha'];

    $_GET = mysqli_query("SELECT * FROM usuarios WHERE nome= '$nomusu' AND senha = '$senha' AND  tipo= '$tipo' ");
    $num = mysqli_num_ruws($_GET);

    if ($tipo == 1 ){
    header("location: admin.php"); 
       }
      else{
      header("location: paginainicial.php"); 
      }
    }
}else{  
        echo '<script type ="text/JavaScript">';
        echo 'alert("Nome ou senha digitos estão incorretos.")';
        echo '</script>';
        header("location: index.php"); 
}

} 

?>
