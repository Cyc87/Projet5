<?php $title = "Les jolies commodes"; ?>

<?php ob_start(); ?>

<?php require("menu.php"); ?>

    <section>
        <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Toutes les jolies commodes</h2>
        <div class="container">

            <form action="index.php?action=chest" method="get">
                <?php
                foreach ($readChestProduct as $readChestProduct) {
                    ?>

                    <img src="<?= $readChestProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />

                <?php
                }
                ?>
            </form>
        </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
<?php require("footer.php"); ?>