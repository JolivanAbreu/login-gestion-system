<?php
    session_start();
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    unset ($_SESSION['nome']);
    unset ($_SESSION['idUsuario']);
    session_destroy();
    header('location:../Login.php');
    exit();
?>