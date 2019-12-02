<?php $title = 'Contactez-moi'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<div id="contact"><br>
    <div>
        <h2>Me contacter</h2><br>
    </div>
</div>

<section>
    <h4>
        <p class="text-center">Une question, une remarque, une envie ?</p>
    </h4>
    <p class="text-center"> Pour toute demande d'information, personnalisation, prix...</p>
    <p class="text-center">Appelez-moi ou envoyez moi un joli message, nous échangerons sur votre projet.</p>
</section>
<section>
    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?>" style="top:5px;text-align:center">

        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
        </div>
        <div class="container" id="containerCard" style="margin-bottom: 50px;">
            <div id="cardContact" class="card" style="width: 18rem;">
                <img src="public/images/logo.png" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Dorothée</h5>
                    <p class="card-text">06.62.21.82.97</p>
                    <p class="card-text">monjolicocon@hotmail.com</p>
                </div>
            </div>
            <div class="formContact">
                <form method="post" action="index.php?action=contact">
                    <div class="form-group">
                        <label>Votre nom</label>
                        <input name="name" type="text" class="form-control" value="<?php if (isset($_POST['name'])) {
                                                                                        echo $_POST['name'];
                                                                                    } ?>">
                    </div>
                    <div class="form-group">
                        <label>Votre adresse de messagerie</label>
                        <input name="mail" type="mail" class="form-control" value="<?php if (isset($_POST['mail'])) {
                                                                                        echo $_POST['mail'];
                                                                                    } ?>">
                    </div>
                    <div class="form-group">
                        <label>Votre message</label>
                        <textarea name="message" class="form-control" rows="3"><?php if (isset($_POST['message'])) {
                                                                                    echo $_POST['message'];
                                                                                } ?></textarea>
                    </div>
                    <div class="send" style="margin-top:50px">
                        <button class="btn btn-dark" name="sendMail">ENVOYER</button>
                    </div>
                </form>
            </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>