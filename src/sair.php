<?php
    session_start();
    unset($_SESSION['nomeusu']);
    unset($_SESSION['senha']);
    header('location: index.php');
?>
