<?php $title = 'Contactez-moi'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>  

    <div id="contact">
        <div class="shadow-lg p-3 mb-5 bg-white rounded"><h2>Me contacter</h2></div> 
    </div>

    <section>
        <h4><p class="text-center">Une question, une remarque, une envie ?</p></h4>
        <p class="text-center"> Pour toute demande d'information, personnalisation, prix...</p>
        <p class="text-center">Appelez-moi ou envoyez moi un joli message, nous échangerons sur votre projet.</p>
    </section>
    <section>
    <div class="container" style="margin-bottom: 50px;">
        <div id="cardContact" class="card" style="width: 18rem;">
            <img src="public/images/logo.png" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Dorothée</h5>
                <p class="card-text">06.62.21.82.97</p>
                <p class="card-text">monjolicocon@hotmail.com</p>
            </div>
        </div>
        <form method="post" action="index.php?action=contact" style="margin-left: -120px;">
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
            <div class="send" style="margin-top:50px">
                <button name="sendMail" style="color:black;text-decoration:none;">ENVOYER</button>
            </div>
        </form>
        <?php
            if(isset($_SESSION['message'])){
        ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>" style="height:50px;top:30px;left:50px;">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            }
        ?>
    </section>
    
<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>
