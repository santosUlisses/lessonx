<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image: url(children.png); background-size: 100%;">
    <nav class="navbar navbar-expand-sm bg-primary navbar-primary">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link"
                    href="#">
                    <button type="button" class="btn btn-primary">Página inicial  <span class="spinner-grow spinner-grow-sm"></button> </a>
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
                        <button type="button" class="btn btn-primary">Login</button></a>
            </ul>
            <div class="dados-usuario"> <?= $_SESSION['email']; ?> </div>
        <a href="logout.php" class="btn btn-danger">Sair</a>
        </div>
        
    </nav>
    <div class="container mt-5">
        <div id="exemploCarrossel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                    class="active"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"> <a href="#"><img src="novidade.jpg" height="600px" width="600px"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-nome d-md-block bg-dark shadow opacity-75">
                    </a>
                    <h5>Novidades</h5>
                </div>
            </div>
            <div class="carousel-item">
                <a href="#"> <img src="conquistas.jpg" height="600px" width="600px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-nome d-md-block bg-dark shadow opacity-75">
                </a>
                <h5>Conquistas</h5>
            </div>
        </div>
        <div class="carousel-item">
            <a href="#"><img src="professores.png" height="600px" width="600px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-nome d-md-block bg-dark shadow opacity-75">
            </a>
            
            <h5>Professores</h5>
            
        </div>
    </div>
    </div>
    </div>