<?php $title = 'Les jolies roulettes'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>
<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Toutes les jolies boites à roulettes sont utiles</h2>
    <div class="container" style="text-align:center">

        <form action="index.php?action=castor" method="get">
            <?php
            foreach ($readCastorProduct as $readCastorProduct) {
                
                ?>
                <div class="image">
                    <img src="<?= $readCastorProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                    <h4><?= $readCastorProduct->descriptionProduct() ?></h4>
                    
                </div>
            <?php
            }
            ?>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>