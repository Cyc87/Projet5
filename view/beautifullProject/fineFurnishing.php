<?php $title = 'Mes jolies meubles'; ?>

<?php require('view/home/menu/menuHome/menu.php'); ?>

<?php ob_start(); ?>

<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Vous trouverez ici tous les meubles</h2>
    <div class="container" style="text-align:center">

        <form action="index.php?action=fineFurnishing" method="get">
            <?php
            foreach ($readAllFineFurnishingProduct as $readAllFineFurnishingProduct) {
                ?>
                <div class="image">
                    <img src="<?= $readAllFineFurnishingProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                    <h4><?= $readAllFineFurnishingProduct->descriptionProduct() ?></h4>
                </div>
            <?php
            }
            ?>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>

<?php require("view/footer/footer.php"); ?>