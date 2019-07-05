<?php $title = 'Gestion des images'; ?>

<?php ob_start(); ?>

<?php require("menuAdmin.php"); ?>

<section>
    <div class="container">
        <form method="POST" action="index.php?action=photoManagement" enctype="multipart/form-data">
            <input type="file" name="userfile">
            <input type="submit" name="submit" value="Ajouter Photo">
        </form>
    </div>
    </section>
        <div class="container">
            <table class="table table-bordered table-striped">  
                <tr>
                    <th width="5%">Numéro</th>
                    <th width="40%">Date</th>
                    <th width="40%">Image</th>
                    <th width="20%">Supprimer</th>
                    <th width="20%">Modifier</th>
                </tr>
        </div>
        <div>
        <?php
                foreach ($readImages as $readImages) {
            ?>
            <tr>
                <td>
                    <?= $readImages->id() ?>
                </td>
                <td>
                    <?= $readImages->dateCreationPhoto() ?>
                </td>
                <td>
                    <img src="<?= $readImages->namePhoto() ?>" height="10" width="50" class="img-thumbnail" />
                </td>
                <td><a href="index.php?action=photoManagement&id=<?= $readImages->id() ?>"  name="deleteImage" class="btn btn-warning bt-xs update" >Supprimer</a></td>
                <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" >Modifier</button></td>
            </tr>
            <?php 
                }
            ?>
        </div>
        <?php
            if(isset($_SESSION['message'])){
        ?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            }
        ?>


<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
