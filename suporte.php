<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre-se</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-primary">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="inicio.php">
                        <button type="button" class="btn btn-primary">Página inicial <span
                                class="badge rounded-pill bg-success">New</span></button> </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <button type="button" class="btn btn-primary">Suporte  <span
                                class="spinner-grow spinner-grow-sm"></button></a>
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
                        <button type="button" class="btn btn-primary">Cursos </button></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="curso.php">Programador Web</a></li>
                        <li><a class="dropdown-item" href="#">Curso</a></li>
                        <li><a class="dropdown-item" href="#">Curso</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <button type="button" class="btn btn-primary">Cadastre-se </button></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="logar.php">
                        <button type="button" class="btn btn-primary">Login</button></a>
                </li>
            </ul>
            <div class="dados-usuario"> <?= $_SESSION['email']; ?> </div>
                    <a href="logout.php" class="btn btn-danger">Sair</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <form action="cadastrarCurso.php" id="form" method="POST">
                <h1 style="text-align: center;">Cadastro de cursos</h1>
                <div><label for="nomeCurso">Nome do curso</label><input type="text" placeholder="Nome do curso"
                        class="form-control" id="nomeCurso" name="nomeCurso" required></div>
                <div><label for="professor">Professor do curso</label><input type="text" class="form-control"
                        id="professor" placeholder="Professor do curso" name="professor" required></div><br><br>
                <button type="submit" class="btn btn-primary" name="bt_cadastrarCurso" id="enviar">Enviar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <a href="consulta-curso.php"><button type="submit" class="btn btn-dark">Lista</a>
            </form>
        </div>
    </div>
</body>

</html>