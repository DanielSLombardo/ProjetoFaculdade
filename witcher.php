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
                                <li><a class="dropdown-item" href="bb.php">Bloodborne</a></li>
                                <li><a class="dropdown-item" href="er.php">Elden Ring</a></li>
                                <li><a class="dropdown-item" href="gow.php">God Of War</a></li>
                                <li><a class="dropdown-item" href="gta.php">GTA 5</a></li>
                                <li><a class="dropdown-item" href="hollow.php">Hollow Knight</a></li>
                                <li><a class="dropdown-item" href="mine.php">Minecraft</a></li>
                                <li><a class="dropdown-item" href="rdr.php">Red Dead Redemption 2</a></li>
                                <li><a class="dropdown-item" href="terraria.php">Terraria</a></li>
                                <li><a class="dropdown-item" href="witcher.php">The Witcher 3</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
                <div class="game-content">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="img/witcherimg1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/witcherimg2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/witcherimg3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <h5>Sobre</h5>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <strong>Sobre - </strong>Partindo exatamente do final de The Witcher 2, com os outrora poderosos que procuravam usar-lhe já não existindo mais, Geralt, apelidado de "lobo branco" por seus olhos animalescos e cabelos brancos, que são efeitos colaterais dos experimentos pelos quais passou, dá seguimento a sua aventureira vida, embarcando numa importante missão pessoal enquanto a ordem mundial enfrenta mudança.[22] A nova missão do caçador de monstros é dada em tempos sombrios nos quais um misterioso exército conhecido como a "Caçada Selvagem" invade os Reinos do Norte, deixando apenas sangue e ruína por onde passa; parece que Geralt é a chave para os parar.                         
                                    <br>
                                    <strong>Plataformas - </strong>Microsoft Windows ,PlayStation 4, Xbox One, PlayStation 5 e Xbox Series X/S.
                                    <br>
                                    <strong>Sua Nota - </strong>Aperte aqui para dar uma nota ao jogo.
                                    <h5 class="card-title"><a href="rating.php" class="btn btn-primary">Avaliar</a></h5>             
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <h5>Curiosidades</h5>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>1 - </strong>Em 2019 ganhou uma adaptação pela Netflix.
                                    <br>
                                    <strong>2 - </strong>Os jogos são baseados em vários livros de conto da Polônia.
                                    <br>
                                    <strong>3 - </strong>No início do game o cavalo era motivo de piadas pois sua jogabilidade proporcionava vários bugs engraçados.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    <h5>Minha Opinião</h5>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Uma maravilha! The Withcer 3 busca inspiração em contos medievais e no livro que foi baseado e consegue ser um ótimo RPG contando uma história incrível. Os personagens são interessantes e tem profundidade, todos fazem sentido. O combate não é um dos melhores mas mesmo assim não ofusca os pontos bons do jogo. Em geral, é um ótimo jogo que eu recomendo para ser jogado nas novas gerações com a melhoria de gráfico.                               
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <p>Copyright &copy Espaço Gamer</p>
        </footer>
    </div>
</body>
</html>