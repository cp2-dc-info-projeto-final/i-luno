<?php
  
 include_once('conecta.php');

if(isset ($_POST['nome']) && isset($_POST['senha'])){    
    $nome = $_POST['nome'];
    $senha =$_POST['senha'];

    $_GET = mysqli_query("SELECT * FROM usuarios WHERE nome= '$nome' AND senha = '$senha'");
    $num = mysqli_num_ruws($_GET);

    if ($num == 1 ){
     while ($percorer = mysqli_fetch_array($_GET)){    
      $adm = $percorer ['adm'];
      $nome = $percorer['nome'];


      session_start();
      if($adm == 1){
      $_SESSION[$adm] = $nome;
      }else{ 
       $_SESSION['normal'] = $nome;


     }
     echo '<script type=" text/javascript">window.location = "seila.php"</script>';

    }
}else{  
    echo ' Nome ou senha digitos estão incorretos.';
}

} 


?>
