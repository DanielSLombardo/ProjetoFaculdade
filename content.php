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
                            <a class="nav-link active" aria-current="page" href="content.php">Home</a>
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
            <div class="home-content">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                    <img src="img/eldenring.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="er.php" class="btn btn-outline-primary">Elden Ring</a></h5>
                        <p class="card-text">O ápice dos jogos de mundo aberto e RPG de ação, juntando o melhor dos dois mundos!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Última atualização há 20 minutos</small>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="img/minecraft.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="mine.php" class="btn btn-outline-primary">Minecraft</a></h5>
                        <p class="card-text">Um dos jogos mais importantes para toda a indústria e que influenciou a vida de milhares de criança em todo o mundo.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Última atualização há 2 horas</small>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="img/bloodborne.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="bb.php" class="btn btn-outline-primary">Bloodborne</a></h5>
                        <p class="card-text">Uma obra prima, combate e mecânicas incríveis.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Última atualização há 2 horas</small>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="img/rdr2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="rdr.php" class="btn btn-outline-primary">Red Dead Redemption 2</a></h5>
                        <p class="card-text">História cativante, gráficos maravilhosas e uma trilha sonora melhor ainda.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Última atualização há 7 horas</small>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="img/witcher.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="witcher.php" class="btn btn-outline-primary">The Witcher 3</a></h5>
                        <p class="card-text">Foi por 5 anos o game mais premiado de toda história, agora permanecendo em segundo lugar.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Última atualização há 1 dia</small>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="img/gow.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="gow.php" class="btn btn-outline-primary">God Of War</a></h5>
                        <p class="card-text">Um ótimo jogo que trouxe um ar de novidade a uma ótima franquia.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Última atualização há 1 dia</small>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="img/terraria.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="terraria.php" class="btn btn-outline-primary">Terraria</a></h5>
                        <p class="card-text">Um ótimo jogo para passar o tempo com seus amigos.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Última atualização há 2 dias</small>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="img/gta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="gta.php" class="btn btn-outline-primary">Grand Theft Auto 5</a></h5>
                        <p class="card-text">E quando vai lançar o GTA 6?.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Última atualização há 4 dias</small>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="img/hollow.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="hollow.php" class="btn btn-outline-primary">Hollow Knight</a></h5>
                        <p class="card-text">Não tenho mapa, to perdido!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Última atualização há 5 dias</small>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <p>Copyright &copy Espaço Gamer 2023</p>
        </footer>
    </div>
</body>
</html>