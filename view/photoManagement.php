<?php $title = 'Gestion des images'; ?>

<?php ob_start(); ?>

<?php require("menuAdmin.php"); ?>
<section>
<?php
    if(isset($_SESSION['message'])){
?>
<div class="alert alert-<?=$_SESSION['msg_type'] ?>">
<?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    }
?>
</section>
<section>
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <form method="post" action="index.php?action=photoManagement" enctype="multipart/form-data" runat="server">
            <input type="file" name="userfile">
            <input type="submit" name="submit" value="Ajouter Photo">
        </form>
    </div>
</section>
<section>
    <div class="container">
        <table class="table table-bordered table-striped">  
            <tr>
                <th width="5%">Numéro</th>
                <th width="40%">Image</th>
                <th width="20%">Modifier</th>
                <th width="20%">Supprimer</th>
            </tr>
    </div>
</section>
<section>
    <div class="container">
        <form action="index.php?action=photoManagement" method="get">
            <?php
                foreach ($readImages as $readImages) {
            ?>
            <tr>
                <td>
                    <?= $readImages->id() ?>
                </td>
                <td>
                    <img src="<?= $readImages->namePhoto() ?>" height="10" width="50" class="img-thumbnail" />
                </td>
                
                <td>
                    <a name="editPhoto" href="index.php?action=editPhoto&id=<?= $readImages->id() ?>" class='btn btn-warning' style="color:white">Modifier</a> 
                </td>
                
                <td>
                    <a name="deletePhoto" href="index.php?action=photoManagement&id=<?= $readImages->id() ?>" class='btn btn-danger'>Supprimer</a> 
                </td>
            </tr>
            <?php 
                }
            ?>
        </form>
    </div>   
</section>

        

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
