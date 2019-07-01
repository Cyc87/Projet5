<?php $title = 'Contactez-moi'; ?>

<?php ob_start(); ?>

<?php require("menu.php"); ?>  

<div id="contact">
    <div class="shadow-lg p-3 mb-5 bg-white rounded"><h1>Me contacter</h1></div> 
</div>

<section>
<h4><p class="text-center">Une question, une remarque, une envie ?</p></h4>
<p class="text-center"> Pour toute demande d'information, personnalisation, prix...</p>
<p class="text-center">Appelez-moi ou envoyez moi un joli message, nous échangerons sur votre projet.</p>
</section>
<section>
<div class="container">
    <div id="cardContact" class="card" style="width: 18rem;">
        <img src="public/images/Mon Joli cocon.png" class="card-img-top" alt="">
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
        <a id="submitContact" type="submit" href="index.php?action=home" class="btn btn-info">ENVOYER</a>
        <a id="submitHome" type="submit" href="index.php?action=home" class="btn btn-info">Retour à l'accueil</a>
    </form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>                   