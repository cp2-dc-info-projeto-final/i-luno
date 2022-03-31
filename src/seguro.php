<?php
if(!isset($_SESSION)) {
  session_start();
}
if(!isset($_SESSION['id'])) {
     
 die("Não foi possivel acessar essa página porque você não esta logado.<p><a href=\"index.php\">Entre</a></p>");

}

?>
