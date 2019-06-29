<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" type="text/css" href="public/stylesheet.css">
            <link rel="icon" href="public/images/Mon-Joli-Cocon.ico">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <title><?= $title ?></title>
        </head>
        <header>
            <section class="logoHeader">
                <div>
                    <img class="imageHeader" src="public/images/Mon joli cocon.png" alt="">   
                </div>
            </section>
            <section>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    MES JOLIES CAISSES
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:#025a55" >Pour ranger, trier organiser <br/>tous les jolis bazars</a>
                                    <a class="dropdown-item" href="#">Les jolis bazars</a>
                                    <a class="dropdown-item" href="#">Les jolis roulettes</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    MES JOLIS MEUBLES
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:#025a55">Chinés, bichonnés, relookés...<br/> Prêts pour une nouvelle vie</a>    
                                    <a class="dropdown-item" href="#">Ma jolie chaise</a>
                                    <a class="dropdown-item" href="#">Ma jolie table</a>
                                    <a class="dropdown-item" href="#">Ma jolie commode</a>
                                    <a class="dropdown-item" href="#">Mon joli buffet</a>
                                    <a class="dropdown-item" href="#">Ma jolie armoire</a>
                                    <a class="dropdown-item" href="#">Mon joli lit</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    MES JOLIES DECOS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:#025a55" >Pour ranger, trier organiser <br/>tous les jolis bazars</a>
                                    <a class="dropdown-item" href="#">a voir</a>
                                    <a class="dropdown-item" href="#">a voir</a>
                                    <a class="dropdown-item" href="#">a voir</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    MA JOLIE HISTOIRE
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="view/about.php">Qui suis-je ?</a>
                                    <a class="dropdown-item" href="view/concept.php">Le concept</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" aria-label="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Chercher</button>
                        </form>
                    </div>
                </nav>
            </section>
        </header>
        <body>
            <?= $content ?>
        <footer class="page-footer font-small cyan darken-3">
            <div class="card-body text-center">
                <h5 class="card-title" >Liens utiles</h5>
                <a href="#" style="padding: 0 10px;color:#025a55;">CGV</a>
                <a href="#" style="padding: 0 10px;color:#025a55;">Mentions légales</a>
                <a href="view/contact.php" style="padding: 0 10px;color:#025a55;">Me contacter</a>
                <a href="#" style="padding: 0 10px;color:#025a55;">Admin</a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class=" flex-center">
                            <a href="#" style="padding: 0 10px;color:#025a55; text-decoration:none">
                                <i class="fab fa-facebook fa-lg fa-2x"> </i>
                            </a>
                            <a href="#" style="padding: 0 10px;color:#025a55; text-decoration:none">
                                <i class="fab fa-instagram fa-lg fa-2x"> </i>
                            </a>
                            <a href="#" style="padding: 0 10px;color:#025a55; text-decoration:none">
                                <i class="fab fa-pinterest fa-lg fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3" >© 2019 Copyright:
                <a href="#" style="color:#025a55"> cyc-developpement.fr</a>
            </div>
        </footer>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
    </html>