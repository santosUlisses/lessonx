<?php
    session_start();
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrarCurso'])) {
        $nomeCurso  = mysqli_real_escape_string($con, $_POST['nomeCurso']);
        $professor = mysqli_real_escape_string($con, $_POST['professor']);
    
        // criar no bd
        $sql = "INSERT INTO cadastrocurso (nomeCurso, professor) VALUES ('$nomeCurso','$professor')";

        if(mysqli_query($con, $sql)) {
           //  Cadastro feito
            header('Location: listaCurso.php');
        } else {
           //Erro no cadastro
            header('Location: suporte.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }?>