<?php $title = 'Les jolies tables'; ?>

<?php ob_start(); ?>

<?php require("menu.php"); ?>

<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Toutes les tables sont utiles</h2>
    <div class="container">

        <form action="index.php?action=table" method="get">
            <?php
            foreach ($readTableProduct as $readTableProduct) {
                ?>

                <img src="<?= $readTableProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />

            <?php
            }
            ?>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>

<?php require("footer.php"); ?>