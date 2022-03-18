<<?php

session_start();
//por um link pro adm ir direto pra lista,busca,exclusão,edição e atualização
//usuari normal ir direto pro perfil
// por opção para o usuario sair 

if(isset($_SESSION['adm'])){ 
    echo'Bem-vindo'. $_SESSION ['adm'].' - ADMINISTRADOR';
    echo '<script type=" text/javascript">window.location = "admin.php"</script>';
     }else if (isset($_SESSION['normal'])){  
        echo 'Bem-vindo'. $_SESSION['normal']. '';
        echo '<script type=" text/javascript">window.location = "paginainicial.php"</script>';
        }else{  
      

    }


?>


