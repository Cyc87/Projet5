<?php $title="Les Conseils déco"; ?>

<?php ob_start(); ?>

<?php require("menuAdmin.php"); ?>     
        

<section>

    <div class="container">
        <div class="card" style="width: 20rem;margin-top:50px">
            <form action="index.php?action=updatePhoto&id=<?= $_GET['id'] ?>" method="post">
                <?php if(isset($updateImages)){ ?>

                <?php
                    foreach ($updateImages as $updateImages) {
                ?>
                <img src="<?= $updateImages->namePhoto() ?>"  class="img-thumbnail" />
                <div class="card-body">
                    <input id="nomLabel" name="descriptionPhoto" type="text" value ="<?= $updateImages->descriptionPhoto() ?>" style="margin-right:20px">
                    <!-- <input style="margin-top:10px;margin-bottom:10px" type="file" name="userfile" id="userfile"><br /> -->
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

