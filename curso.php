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

 <body style="background-image: url(programa.jpg); background-size: 157%;">
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
                        <button type="button" class="btn btn-primary">Cursos <span class="spinner-grow spinner-grow-sm"></button></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="curso.php">Programador Web <span class="spinner-grow spinner-grow-sm"></a></li>
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
        </div>
        <div class="dados-usuario"> <?= $_SESSION['email']; ?> </div>
        <a href="logout.php" class="btn btn-danger">Sair</a>
        </div>
    </nav>
    <div class="container">
    <div class="container mt-5">
        <div class="row">
            
            <div class=" bg-light col-md-5" id="div2">
        <iframe width="528" height="355" src="https://www.youtube.com/watch?v=VdTRiUe23oss" title="YouTube video player" frameborder="0"
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <h1>História da programação</h1>
       <p>As linguagens de programação são linguagens usadas para a comunicação com o computador. Estas linguagens são constituídas de comandos, que quando utilizados corretamente, executam uma ação.
         A programação nos computadores não tem uma data correta de início. Tudo começou na década de 30, com os primeiros computadores elétricos. Em 1948, Konrad Zuse publicou sua criação,
          a linguagem de programação Plankalkül. Na época, ainda não tinha muita utilidade, então foi esquecida. Antes da programação passar para o computador,
           eram usados cartões de papelão que eram perfurados, criando códigos.
         Foi na década de 50 que as primeiras linguagens modernas surgiram. FORTRAN (1955), LISP, a "List Processor” e COBOL, a COmmon Business Oriented Language. 
         Tambem apareceu na mesma epoca a ALGOL 60.
         Os paradigmas da programação foram criados, em sua maioria, na década de 70.  Nesta época surgiram:
         Simula: inventada nos anos 1960 por Nygaard e Dahl foi a primeira linguagem a suportar o conceito de classes.
         C: uma das primeiras linguagens de programação de sistemas, criado por Dennis Ritchie e Ken Thompson, tem uma das maiores influencias no mundo atual.
         Prolog: projetada em 1972, foi a primeira linguagem de programação com paradigma lógico.
         Pascal: Outra importante linguagem, embora atualmente esteja quase sem uso.
         Nos anos 80 surgiu a linguagem C++, que se tornou tão importante quanto o C, entre outras:
         C++: Criada para ser compatível com C, o C++ foi muito importatante, pois é mais simples e dinâmico.
         Perl: Uma boa linguagem. Ótima para trabalhar em níveis de sobrecarga grandes
         Nos anos 90, a internet surgiu como um furacão, e mudou totalmente o rumo da programação. As linguagens Java e Javascript foram criadas nesta época, ambas relacionadas com a internet,
          surgiu também a visual Basic e o Object Pascal.
         Java: Linguagem relativamente simples, orientada para objetos, que foi criada com a Idea de revolucionar as linguagens de programação.
         PHP: Muito importante para o desenvolvimento de aplicativos para WEB, esta linguagem esta cada vez mais tomando conta dos Web sites.
         A programação esta em todos os equipamentos eletrônicos atuais. Cada programa, cada pagina na internet, esta escrita em alguma linguagem de programação. Com o tempo, as linguagens vêm se unindo,
          formando linguagens mais fortes, e com mais funções.
         A programação passou por um grande processo, porem bastante rápido. Estas linguagens estão ficando cada vez mais fáceis de interpretar e escrever.</p>
       
        <!--Botão que aciona o modal -->
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#minhaModal">
            Comece a programar
        </button>
        <!--Modal-->
        <div class="modal fade" id="minhaModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"> 
                        <h1 class="modal-title fs-5" >AVISO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                   Página em construção
                </div>
                <div class="modal-footer"> 
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
                </div>
            </div>
        </div>
        <div class=" mt-5 bg-light col-md-5" id="div1">
        </div>
</body>
</html>