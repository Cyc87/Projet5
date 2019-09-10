<?php $title = 'Les jolies boites'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>
<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Les jolies boites</h2>
    <p style="text-align:center">Les caisses prennent vie pour sublimer votre intérieur...<br />Pour tout ranger dans la maison !</p>
    <p style="text-align:center">En pin des Landes non traité et issu de forêts gérées durablement ou récupérées chez les cavistes, <br />les caisses sont personnalisées avec des peintures françaises de qualité, naturelles et respectueuses de notre santé et notre environnement.</p>
    <p style="text-align:center">Dimensions : 33x26x17 cm</p>
    <p style="text-align:center">Réalisation sur commande aux couleurs et inscriptions de votre choix.</p>
    <div class="container">
        <div class="card" style="width: 20rem; text-align :center; margin-top:50px;margin-bottom:50px">
            <h5><a href="index.php?action=contact" style="color:#025a55" class="card-link">Commander une jolie boite</a></h5>
        </div>
    </div>
    <div class="container" style="text-align:center">
        <form action="index.php?action=crates" method="get">
            <?php
            foreach ($readCratesProduct as $readCratesProduct) {
                ?>
                <div class="image">
                    <img src="<?= $readCratesProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                    <h4><?= $readCratesProduct->descriptionProduct() ?></h4>
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