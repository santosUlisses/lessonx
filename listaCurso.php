<?php
require_once 'atividade.php';

session_start();
$listaCursos= $_SESSION['listaCurso'];
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
                        <button type="button" class="btn btn-primary">Cursos </button></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="curso.php">Programador Web</a></li>
                        <li><a class="dropdown-item" href="#">Curso</a></li>
                        <li><a class="dropdown-item" href="#">Curso</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="#">
                        <button type="button" class="btn btn-primary">Cadastre-se <span class="spinner-grow spinner-grow-sm"></button></a>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="logar.php">
                        <button type="button" class="btn btn-primary">Login</button></a>
            </ul>
        </div>
    </nav>

        
    <div class="container">
<h1 style="text-align: center;">Lista</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Professor</th>
      <th scope="col">Curso</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
      if ( isset($listaCursos) && empty($listaCursos) == false ) {
        $cont=1;
        foreach($listaCursos as $curso){
            $nomeCurso= $curso['nomeCurso'];
            $professor= $curso ['professor'];
        
    ?>
        <tr>
        <td><?=$cont?></td>
      <td><?=$nomeCurso?></td>
      <td><?=$professor?></td>
      </tr>
      <?php
                $cont++;        
                    } 

                    } else {
                ?>
                        <tr>
                            <td colspan="3">Não há cursos cadastrados</td>
                        </tr>
                <?php
                    }

                    unset($_SESSION['listaCurso']);
                ?>
    
    
    
  </tbody>
</table>
                </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>
</html>

