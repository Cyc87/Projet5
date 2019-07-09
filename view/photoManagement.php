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
<section>
    <div class="container">
        <form method="post" action="index.php?action=photoManagement" enctype="multipart/form-data" runat="server">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" style="margin-top:50px;margin-bottom:50px" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ajouter une image
                </button>
                <div class="dropdown-menu" id="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">
                        <input style="margin-top:10px;margin-bottom:10px" type="file" name="userfile"><br />
                        <input id="nomLabel" name="descriptionPhoto" type="text" placeholder="Description">
                        <input type="submit" name="submit" value="Ajouter Photo">
                    </button>
                </div>
            </div>
        </div>   
    </div>  
</section>
<section>
    <div class="container">
        <table class="table table-bordered table-striped">  
            <tr>
                <th width="5%">Numéro</th>
                <th width="35%">Description</th>
                <th width="20%">Image</th>
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
                    <?= $readImages->descriptionPhoto() ?>
                </td>
                <td>
                    <img src="<?= $readImages->namePhoto() ?>" height="10" width="50" class="img-thumbnail" />
                </td>
                
                <td>
                    <a name="editPhoto" href="index.php?action=updatePhoto&id=<?= $readImages->id() ?>" class='btn btn-warning' style="color:white">Modifier</a> 
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
