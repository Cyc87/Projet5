<?php $title = "Les Conseils déco"; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Le Conseil déco</h2>

<section>
    <div class="container">
        <div class="text-justify">
            <p style="text-align : center">Vous avez besoin d'inspiration pour décorer votre intérieur ?</p>
            <p style="text-align : center">Je me déplace * chez vous pour vous offrir mes compétences de manière conviviales, sous forme d'échange et de partage : des idées, des propositions, des conseils en couleur et aménagement pour une harmonie dans votre intérieur en fonction de vos habitudes de vie, vos goûts et vos aspirations.</p>
            <p style="text-align : center">Coût de la prestation selon le nombre de pièces : à partir de 75€ </p>
            <p style="text-align : center">* frais de déplacement au delà de 30 km au départ de Saint-Junien 87200</p>
        </div>
    </div>
    <div class="container">
        <div class="card" style="width: 15rem; text-align :center">
            <div class="card-body">
                <h5><a href="index.php?action=contact" style="color:#025a55" class="card-link">Besoin de conseils</a></h5>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>