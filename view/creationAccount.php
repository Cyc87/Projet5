<?php $title = 'Création d\'un nouveau compte administrateur'; ?>

<?php ob_start(); ?>

<?php require "menuAdmin.php"; ?>

<section>
    <div class="container">
        <form action="index.php?action=creationAccount" method="post" id="formAccount">

            <div class="form-group">
                <label for="inputNom" id="labelAccountName">Nom</label>
                <input type="text" class="form-control" placeholder="Nom" name="nom" value="<?php if (isset($name) and !empty($name)) {
                                                                                                echo $name;
                                                                                            } ?>">
            </div>
            <div class="form-group">
                <label for="inputPassword" id="labelAccountMdp">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password1" value="<?php if (isset($password1)) {
                                                                                                                                    echo $password1;
                                                                                                                                } ?>">
            </div>
            <div class="form-group">
                <label for="inputPassword1" id="labelAccountMdp2">Confirmation mot de passe</label>
                <input type="password" class="form-control" id="inputPassword1" placeholder="Password" name="password2" value="<?php if (isset($password2)) {
                                                                                                                                    echo $password2;
                                                                                                                                } ?>">
            </div>
            <div class="form-group">
                <label for="inputEmail1" id="labelAccountMail">Adresse mail</label>
                <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Entrez email" name="mail" value="<?php if (isset($mail)) {
                                                                                                                                                            echo $mail;
                                                                                                                                                        } ?>">
            </div>
            <button type="submit">Créer compte</button>
        </form>
        <?php
            if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?=$_SESSION['msg_type'] ?>" style="height:50px; top:25px; left:50px;">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            }
        ?>
    </div>        
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>