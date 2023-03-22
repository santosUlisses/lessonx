
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
    <div class="row">
    <form action="cadastrar.php" id="form" method="POST">
        <h1 style="text-align: center;">Preencha os campos abaixo para o cadastro</h1>
        <div><label for="name">Nome</label><input type="text" placeholder="Nome completo" class="form-control" id="nome"
                name="nome" required></div>
        <div><label for="nascimento">Data de Nascimento</label><input type="date" min="1970-12-31" max="2023-12-31" name="dataNascimento" class="form-control" id="nascimento"
                name="dataNascimento" required></div>
        <div><label for="email"></label>E-mail</label><input type="email" placeholder="Digite seu email"
                class="form-control" id="email" name="email" required></div>
        <div><label for="senha"></label>Senha</label><input type="password" placeholder="Digite sua senha"
                class="form-control" id="senha" name="senha" required></div>
                        <div><label for="endereço">Repita sua senha</label><input type="password" placeholder="Repita sua senha"
            class="form-control" name="senha" required></div>
        <div><label for="genero">Gênero</label><select class="form-control" id="genero" name="genero" required>
                <option>Selecione seu genero</option>
                <option>Masculino</option>
                <option>Feminino</option>
                <option>Outros</option>
            </select></div><br>
            <button type="submit" class="btn btn-primary" name="bt_cadastrar" id="enviar">Enviar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </div>
        </div>
    </form>

</body>

</html>