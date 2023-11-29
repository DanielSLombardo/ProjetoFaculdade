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
    <script defer src="app.js"></script>
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
                            <a class="nav-link"href="content.php">Home</a>
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
                            <a class="nav-link active" aria-current="page" href="contato.php">Contato</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            <div class="home-content">
                <div class="contato">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 offset-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>Entre em Contato</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="https://formsubmit.co/ajax/nickolas@tigercodes.com.br"method="POST" data-form>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="nome">Nome</label>
                                                    <input type="text" name="nome" id="nome" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="email">E-mail</label>
                                                    <input type="email" name="email" id="email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="mensagem">Mensagem</label>
                                                    <textarea name="mensagem" id="mensagem" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <button id="btn" class="btn btn-primary" type="submit" data-button>Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                        <script src="https://smtpjs.com/v3/smtp.js"></script>
                                        <script>
                                            var btn =document.getElementById('btn');
                                            btn.addEventListener('click',function(e){
                                                e.preventDefault()
                                                var name = document.getElementById('name').value;
                                                var email = document.getElementById('email').value;
                                                var subject = document.getElementById('subject').value;
                                                var message = document.getElementById('message').value;
                                                var body = 'name: ' + name + '<br/> email: ' + email + '<br/> subject: ' + subject + '<br/> message: ' + message;
                                            
                                                Email.send({
                                                    SecureToken : "3ad3fb09-0292-4e30-b52d-41aec8db12ae",
                                                    To : 'danielombardo2002@gmail.com',
                                                    From : "emailptesteprog@gmail.com",
                                                    Subject : "Mensagem de contato",
                                                    Body : body
                                                }).then(
                                                message => alert(message)
                                                );
                                            
                                            })
                                        </script>
                                    </div>
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