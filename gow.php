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
                            <img src="img/gowimg1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p>As lutas contra os chefes são bem desafiadoras.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/gowimg2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p>Sistema de RPG foi bem implementado.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/gowimg3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p>Mundo vivo e que da vontade de explorar 100%.</p>
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
                                    <strong>Sobre - </strong>Muitos anos se passaram desde que Kratos teve sua vingança contra os deuses do Olimpo,[c] e agora ele vive com seu filho Atreus em Midgard. O jogo começa após a morte da segunda esposa de Kratos e mãe de Atreus, Faye. Seu último desejo era que suas cinzas fossem espalhadas no pico mais alto dos nove reinos nórdicos. Antes de iniciar sua jornada, Kratos é confrontado por um homem misterioso com poderes divinos. Depois de aparentemente matá-lo, Kratos e Atreus partem em sua jornada.                                
                                    <br>
                                    <strong>Plataformas - </strong>PlayStation 4 e Microsoft Windows
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
                                    <strong>1 - </strong>As cicatrizes vermelhas de Kratos seriam azuis no primeiro jogo de PS2.
                                    <br>
                                    <strong>2 - </strong>Sony não pretendia fazer outro jogo da série.
                                    <br>
                                    <strong>3 - </strong>No final da história é confirmado que existem outras mitologias no mesmo mundo, o que deixa em aberto se outros jogos da franquia se passarão em outras mitologias.
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
                                    Um ar fresco que renovou a franquia que já estava morta, combate pode parecer um pouco duro no início mas depois que se pega o costume é nítido que o combate foi bem pensado, é prazeroso eliminar os inimigos usando as habilidades juntas. A história é ótima, introduzindo personagens novos e carismáticos. Recomendo esse jogo para quem já jogou os anteriores e também para quem nunca jogou nenhum da franquia, é um ótimo começo.                                
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