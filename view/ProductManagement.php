<?php $title = 'Gestion des produits'; ?>

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
        <form method="post" action="index.php?action=productManagement" enctype="multipart/form-data" runat="server">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" style="margin-top:50px;margin-bottom:50px" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ajouter une image
                </button>
                <div class="dropdown-menu" id="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">
                        <input style="margin-top:10px;margin-bottom:10px" type="file" name="userfile"><br />
                         <input style="margin-top:10px;margin-bottom:30px" id="nomLabel" name="descriptionProduct" type="text" placeholder="Description">
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
        <form action="index.php?action=productManagement" method="post" enctype="multipart/form-data" runat="server">
            <?php
                foreach ($readProduct as $readProduct) {
            ?>
            <tr>
                <td>
                    <?= $readProduct->id() ?>
                </td>
                <td>
                    <?= $readProduct->descriptionProduct() ?>
                </td>
                <td>
                    <img src="<?= $readProduct->nameProduct() ?>" height="10" width="50" class="img-thumbnail" />
                </td>
                
                <td>
                    <a name="editProduct" href="index.php?action=updateProduct&id=<?= $readProduct->id() ?>" class='btn btn-warning' style="color:white">Modifier</a> 
                </td>
                
                <td>
                    <a name="deleteProduct" href="index.php?action=productManagement&id=<?= $readProduct->id() ?>" class='btn btn-danger'>Supprimer</a> 
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
