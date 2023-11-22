<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Gamer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="img/icon.png" type="image/png">
</head>
<body>
    <div class="page-container">
        <div class="content-wrap">
            <nav class="navbar navbar=light bg-light">
                <div class="container-fluid">
                    <h1>Espaço Gamer</h1>
                    <a class="navbar-brand"></a>
                    <?php
                        print "Olá, " . $_SESSION["nome"];
                        print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
                    ?>
                </div>
            </nav>
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link" href="content.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Games</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="gow.php">God Of War</a></li>
                                <li><a class="dropdown-item" href="mine.php">Minecraft</a></li>
                                <li><a class="dropdown-item" href="bb.php">Bloodborne</a></li>
                                <li><a class="dropdown-item" href="er.php">Elden Ring</a></li>
                                <li><a class="dropdown-item" href="rdr.php">Red Dead Redemption 2</a></li>
                                <li><a class="dropdown-item" href="witcher.php">The Witcher 3</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="sobre.php">Sobre</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            <div class="container-fluid">
                <h3>Sobre o Projeto</h3>
                <p>A ideia surgiu para ser um site sobre jogos. Cada página de jogo teria um campo de comentário usando PHP e uma página de contato usando Javascript. Com o meu pouco conhecimento de PHP, usei apenas ele para realizar o login chamando o usuário pelo banco de dados MySQL. A parte do Javascript decidi que seria melhor implementar um sistema de avaliação de estrelas para cada jogo, em que o usuário poderia dar uma nota individual.</p>
                <p>As páginas só podem ser acessadas após o login ser efetuado, utilizando nome de usuário e senha. Após o login ser efetuado, a primeira página a ser apresentada é a página Home. Foi implementado um Nav Bar como menu para deixar arrumado de forma melhor as opções de páginas do site. <br> Na parte acima do menu aparece o nome do usuário cadastrado no banco de dados e ao lado um botão para sair e realizar o logout.</p>
                <p>Coloquei apenas jogos que eu particularmente gosto, para ficar mais fácil falar um pouco sobre eles. Separei a barra de Games por ordem alfabética. <br>  </p>
                <p>Atualizações futuras: <br> Pretendo adicionar um sistema de comentários linkado com o usuário. <br> Registro de usuários por fora do banco de dados, utilizando o layout do site para registro de usuários. <br> Mais informações sobre os jogos como: ano do lançamento, empresa e gênero do jogo.</p>
                <p>Abaixo está o projeto inicial que foi usado como sabe, apresentou muitos bugs e não estava sendo usado o Bootstrap, com isso esse projeto foi abandonado e criado o atual do zero.</p>
                <img src="img/site1.png" class="img-fluid" alt="">
            </div>
        </div>
        <footer class="footer">
            <p>Copyright &copy Espaço Gamer</p>
        </footer>
    </div>
</body>
</html>