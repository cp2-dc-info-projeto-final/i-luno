<?php

session_start();
//por um link pro adm ir direto pra lista,busca,exclusão,edição e atualização
//usuari normal ir direto pro perfil
// por opção para o usuario sair 

if(isset($_SESSION['adm'])){ 
    echo'Bem-vindo'. $_SESSION ['adm'].' - ADMINISTRADOR';
      header(location:admin.php);
    
    }else if (isset($_SESSION['normal'])){  
        echo 'Bem-vindo'. $_SESSION['normal']. ''; 
    header(location:paginainicial.php);
      

    }else{  
      echo '<script type=" text/javascript">window.location = "formulario.php"</script>';


    }


?>


