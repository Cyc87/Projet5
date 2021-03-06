<?php $title = 'Administrateur'; ?>

<?php ob_start(); ?>

<section>
    <div class="container" style="margin-top:150px;">

        <form action="index.php?action=login" method="post">

            <div class="card text-center" style="width: 18rem;">
                <img src="public/images/logo.png" class="card-img-top" alt="...">
                <ul class="list-group list-group-flush">
                    <div class="form-group">
                        <label for="label"></label>
                        <input type="text" class="form-control" name="usernameAdmin" placeholder="Admin" required="">
                    </div>
                    <div class="form-group">
                        <label for="label"></label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>
                </ul>
                <div class="card-body">
                    <button class="btn btn-info" type="submit">Connection</button><br><br>
                    <a class="btn btn-dark" href="index.php?action=home" type="submit">Retour à l'accueil</a>
                </div>
            </div>
        </form>
        <?php
        if (isset($_SESSION['message'])) {
            ?>
            <div class="alert alert-<?= $_SESSION['msg_type'] ?>" style="height:50px; left:50px;">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
            </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>