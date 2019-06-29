<?php
   
    
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
            <link rel="icon" href="images/Mon-Joli-Cocon.ico">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <title>Mon joli contact</title>
        </head>
        <body>
            <header>
                <div id="contact">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded"><h1>Me contacter</h1></div> 
                </div>
            </header>
            <section>
                <h4><p class="text-center">Une question, une remarque, une envie ?</p></h4>
                <p class="text-center"> Pour toute demande d'information, personnalisation, prix...</p>
            <p class="text-center">Appelez-moi ou envoyez moi un joli message, nous échangerons sur votre projet.</p>
            </section>
            <section>
                <div class="container">
                    <div id="cardContact" class="card" style="width: 18rem;">
                        <img src="images/Mon Joli.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Dorothée</h5>
                            <p class="card-text">06.62.21.82.97</p>
                            <p class="card-text">monjolicocon@hotmail.com</p>
                        </div>
                    </div>
                    <form method="post" action="contact.php">
                        <div class="form-group">
                            <label>Votre nom</label>
                            <input name="name" type="text" class="form-control"value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" >
                        </div>
                        <div class="form-group">
                            <label>Votre adresse de messagerie</label>
                            <input name="mail" type="mail" class="form-control"value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" >
                        </div>
                        <div class="form-group">
                            <label>Votre message</label>
                            <textarea name="message" class="form-control" rows="3" ><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                        </div>
                        <div class="form-check">
                            <input name="checkInput"class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            J'ai lu et accepté la <a href="#">Politique de confidentialité</a>
                            </label>
                        </div>
                        <button id="submitContact" name="submitContact" type="submit" class="btn btn-primary">ENVOYER</button>
                    </form>
                    <?php
                        if(isset($_SESSION['message'])){ ?>
                            <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        }
                    ?>
                </div> 
            </section>
        </body>
    </html>