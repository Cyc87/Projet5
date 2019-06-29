<?php $title = 'Ma jolie histoire'; ?>

<?php ob_start(); ?>

        <div id="contact">
            <div class="shadow-lg p-3 mb-5 bg-white rounded"><h1 style="text-align:center">Qui suis-je ?</h1></div> 
        </div>
    
    <section>
        <div class="container">
            <div class="text-justify">
                <p class="card-text">Dorothée, maman d'une jolie tribue ,Enola, Malo, Béryl et Salomé. Fascinée par le pouvoir de transformation de la peinture, j'ai toujours aimé tenir un pinceau. Je me souviens encore avec émotion de mon premier relooking... une cage chinée en Provence avec ma mère alors que je n'avais que 17 ans. Et puis il y a eu l'aménagement de mon premier chez moi, et des suivants, la naissance de ma fille ainée, en 2003, l'envie de lui créer un petit cocon unique. Le bonheur de flâner dans les brocantes, la joie de chiner, la chance d'avoir une maison de famille pleine de trésors à sublimer. Jusqu'à l'évidence d'exploiter cette passion et d'en faire Mon Jolie Cocon. Bienvenue dans mon univers.</p>  
            </div>
        </div>    
        <div class=" text-center">
            <img src="public/images/photo2.jpg" class="card-img-top" id="cardImage2"alt="">
        </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>

