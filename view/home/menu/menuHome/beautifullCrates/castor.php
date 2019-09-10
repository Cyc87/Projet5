<?php $title = 'Les jolies roulettes'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>
<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Les jolies roulettes</h2>
    <p style="text-align:center">Avec une caisse sur roulettes, ranger devient aussi pratique que ludique !</p>
    <p style="text-align:center">Caisse à jouets ou bac à livres, offrez un cadeau unique et personnalisé !</p>
    <p style="text-align:center">Les caisses sont en pin des Landes non traité et issu de forêts gérées durablement.<br />Elles sont personnalisées avec des peintures françaises de qualité, naturelles et respectueuses de notre santé et notre environnement.</p>
    <p style="text-align:center">Dimensions : 49x33x17 cm</p>
    <p style="text-align:center">Réalisation sur commande aux couleurs et inscriptions de votre choix.</p>
    <div class="container">
        <div class="card" style="width: 20rem; text-align :center; margin-top:50px;margin-bottom:50px">
            <h5><a href="index.php?action=contact" style="color:#025a55;" class="card-link">Commander une jolie caisse</a></h5>
        </div>
    </div>

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