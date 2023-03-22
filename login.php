<?php
session_start();
require_once 'conexao.php';
if(isset($_POST['bt_entrar'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha= '$senha';";

    $resultado = mysqli_query($con, $sql);

    if(mysqli_affected_rows($con) > 0 ) {
        $dados = mysqli_fetch_array($resultado);
        $_SESSION['idusuario'] = $dados['idusuario'];
        $_SESSION['email'] = $dados['email'];
        header('Location: inicio.php');
    }else {
       
        header('Location: logar.php');
    }
    mysqli_close($con);
}
?>
