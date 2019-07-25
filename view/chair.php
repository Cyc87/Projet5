<?php $title = "Les jolies chaises"; ?>

<?php ob_start(); ?>

<?php require("menu/menu.php"); ?>
<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Toutes les jolies chaises</h2>
    <div class="container" style="text-align:center">

        <form action="index.php?action=chair" method="get">
            <?php
            foreach ($readChairProduct as $readChairProduct) {
                ?>

                <img src="<?= $readChairProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />

            <?php
            }
            ?>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template/template.php') ?>
<?php require("footer/footer.php"); ?>