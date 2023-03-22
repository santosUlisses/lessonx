<?php
    session_start();
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        $nome  = mysqli_real_escape_string($con, $_POST['nome']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));
        $dataNascimento = mysqli_real_escape_string($con, $_POST['dataNascimento']);
        $genero = mysqli_real_escape_string($con, $_POST['genero']);
        // criar no bd
        $sql = "INSERT INTO usuarios (nome, email, senha, dataNascimento, genero) VALUES ('$nome','$email','$senha','$dataNascimento','$genero')";

        if(mysqli_query($con, $sql)) {
           //  Cadastro feito
            header('Location: logar.php');
        } else {
           //Erro no cadastro
            header('Location: logar.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }?>