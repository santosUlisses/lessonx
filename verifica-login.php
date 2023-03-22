<?php
    if(!isset($_SESSION['idusuario']) || !isset($_SESSION['email'])) {
        header('Location: inicio.php');
    }?>
