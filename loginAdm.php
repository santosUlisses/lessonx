<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: black">
    <nav class="navbar navbar-expand-sm bg-primary navbar-primary">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link"
                    href="inicio.php">
                    <button type="button" class="btn btn-primary">Página inicial <span class="badge rounded-pill bg-success">New</span></button> </a>
            </li>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="#">
                        <button type="button" class="btn btn-primary">Suporte</button></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" data-bs-toggle="dropdown">
                        <button type="button" class="btn btn-primary">Contato</button></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">4002-8922</a></li>
                        <li><a class="dropdown-item" href="#">4002-8922</a></li>
                        <li><a class="dropdown-item" href="#">4002-8922</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" data-bs-toggle="dropdown">
                        <button type="button" class="btn btn-primary">Cursos</button></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="curso.php">Programador Web</a></li>
                        <li><a class="dropdown-item" href="#">Curso</a></li>
                        <li><a class="dropdown-item" href="#">Curso</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="cadastro.php">
                        <button type="button" class="btn btn-primary">Cadastre-se</button></a>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="logar.php">
                        <button type="button" class="btn btn-primary">Login  <span class="spinner-grow spinner-grow-sm"></button></a>
            </ul>
        </div>
    </nav>
   <div class="container" style="background-color: white">
    <div class="row">
         <h1 style="text-align: center;">LOGIN ADMINISTRADOR</h1>
         <form action="logarAdm.php" method="POST">
    <div><label for="email"></label>E-mail</label><input type="email" placeholder="Digite seu email"
            class="form-control" id="email" name="email" required></div>

    <div><label for="senha"></label>Senha</label><input type="password" placeholder="Digite sua senha"
            class="form-control" id="senha" name="senha" required></div>
   
</div>
<input type="checkbox" name="salvar">Salvar login</input><br>
<button type="submit" class="btn btn-primary" name="bt_entrarAdm" id="entrarAdmin">Entrar</button>
</div>
</form>