<?php
  
 include_once('conecta.php');

if(isset ($_POST['nomusu']) && isset($_POST['senha'])){    
    $nome = $_POST['nomusu'];
    $senha =$_POST['senha'];

    $_GET = mysqli_query("SELECT * FROM usuarios WHERE nome= '$nomusu' AND senha = '$senha'");
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
      
    }
}else{  
    echo ' Nome ou senha digitos estão incorretos.';
}

} 
header("location: paginainicial.php"); 

?>
