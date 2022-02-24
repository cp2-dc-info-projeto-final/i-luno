<?php
    session_start();
    unset($_SESSION['Nome de usuário']);
    unset($_SESSION['senha']);
    header('location: index.php');
?>