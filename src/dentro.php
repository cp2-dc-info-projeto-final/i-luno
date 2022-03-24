<<?php

session_start();
 

if(isset($_SESSION['adm'])){ 
    echo'Bem-vindo'. $_SESSION ['adm'].' - ADMINISTRADOR';
    echo '<script type=" text/javascript">window.location = "admin.php"</script>';
     
  }else if (isset($_SESSION['normal'])){  
        echo 'Bem-vindo'. $_SESSION['normal']. '';
        echo '<script type=" text/javascript">window.location = "paginainicial.php"</script>';
        }else{  
      

    }


?>
