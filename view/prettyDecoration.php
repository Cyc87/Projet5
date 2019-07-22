<?php $title = 'Les jolies déco'; ?>

<?php ob_start(); ?>

<?php require("menu.php"); ?>
<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Toutes les jolies décorations</h2>
    <div class="container">

        <form action="index.php?action=prettyDecoration" method="get">
            <?php
            foreach ($readPrettyDecorationProduct as $readPrettyDecorationProduct) {
                ?>

                <img src="<?= $readPrettyDecorationProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />

            <?php
            }
            ?>
        </form>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
<?php require("footer.php"); ?>