<?php $title = 'Ma jolie histoire'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<div>
    <div id="titleConcept" class="shadow-lg p-3 mb-5 bg-white rounded">
        <h2>Qui suis-je</h2>
    </div>
</div>
<section>
    <div class="container">
        <div class="text-justify">
            <p style="text-align:center">Je suis Dorothée, maman d'une jolie tribu, Enola, Malo, Béryl, Salomé et créatrice de Mon Joli Cocon.</p>
            <p style="text-align:center"> Fascinée par le pouvoir de transformation de la peinture, j'ai toujours aimé tenir un pinceau. Je me souviens encore avec émotion de mon premier relooking... une cage chinée en Provence avec ma mère alors que je n'avais que 17 ans.</p>
            <p style="text-align:center">Et puis il y a eu l'aménagement de mon premier chez moi et des suivants, la naissance de ma fille ainée, en 2003, l'envie de lui créer un petit cocon unique... le plaisir de flâner dans les brocantes, la joie de chiner, la chance d'avoir une maison de famille pleine de trésors à sublimer.</p>
            <p style="text-align:center">Jusqu'à l'évidence de créer Mon Joli Cocon. <br />Bienvenue dans mon univers.</p>
        </div>
    </div>
    <div class=" text-center">
        <img src="public/images/photo2.jpg" class="card-img-top" id="aboutImage1" alt="">
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>

<?php require("view/footer/footer.php"); ?>