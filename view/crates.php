<?php $title = 'Les jolies boites'; ?>

<?php ob_start(); ?>

<?php require("menu.php"); ?>        
<section>
    <h2 style ="text-align:center; margin-top:50px; margin-bottom:50px">Toutes les jolies boites sont utiles</h2>
        <div class="container">
    
            <form action="index.php?action=crates" method="get">
                <?php
                    foreach ($readCratesProduct as $readCratesProduct) {
                ?>
                
                    <img src="<?= $readCratesProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                
                <?php 
                    }
                ?>
            </form>
        </div>
</section>   
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
<?php require("footer.php"); ?>