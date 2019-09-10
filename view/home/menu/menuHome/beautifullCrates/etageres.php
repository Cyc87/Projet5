<?php $title = 'Les jolies étagères'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Les jolies étagères</h2>
    <p style="text-align:center">Détourner une caisse ou un ancien tiroir et voilà une étagère unique !</p>
    <p style="text-align:center">Réalisation sur commande aux couleurs de votre choix.</p>
    <div class="container">
        <div class="card" style="width: 20rem; text-align :center; margin-top:50px;margin-bottom:50px">
            <h5><a href="index.php?action=contact" style="color:#025a55" class="card-link">Commander une jolie étagère</a></h5>
        </div>
    </div>
    <div class="container" style="text-align:center">
        <form action="index.php?action=etageres" method="get">
            <?php
            foreach ($readEtagereProduct as $readEtagereProduct) {
                ?>
                <div class="image">
                    <img src="<?= $readEtagereProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                    <h4><?= $readEtagereProduct->descriptionProduct() ?></h4>
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