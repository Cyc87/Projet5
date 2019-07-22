<?php $title="Modification de la description"; ?>

<?php ob_start(); ?>

<?php require("menuAdmin.php"); ?>     
        

<section>

    <div class="container">
        <div class="card" style="width: 20rem;margin-top:50px">
            <form action="index.php?action=updateProduct&id=<?= $_GET['id'] ?>" method="post">
                <?php if(isset($updateProduct)){ ?>

                <?php
                    foreach ($updateProduct as $updateProduct) {
                ?>
                <img src="<?= $updateProduct->nameProduct() ?>"  class="img-thumbnail" />
                <div class="card-body">
                    <input id="nomLabel" name="descriptionProduct" type="text" value ="<?= $updateProduct->descriptionProduct() ?>" style="margin-right:20px; margin-bottom:10px;">
                    <button name="update" class="btn btn-warning">Modifier</button>
                </div>
                
                <?php
                    }
                }   
                ?>
            </form>
        </div>
    </div>    
</section>    

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>

