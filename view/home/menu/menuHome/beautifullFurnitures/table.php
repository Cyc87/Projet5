<?php $title = 'Les jolies tables'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Les jolies tables</h2>
    <div class="container" style="text-align:center">

        <form action="index.php?action=table" method="get">
            <?php
            foreach ($readTableProduct as $readTableProduct) {
                ?>
                <div class="image">
                    <img src="<?= $readTableProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                    <h4><?= $readTableProduct->descriptionProduct() ?></h4>
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