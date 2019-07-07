<?php $title="Les Conseils déco"; ?>

<?php ob_start(); ?>

<?php require("menu.php"); ?>     
        
<section>
    <div class="container">
        <div class="text-justify">
            <p class="card-text">Vous êtes en manque d'inspiration pour aménager votre intérieur ? Je me déplace chez vous pour vous offrir mes compétences de manière conviviales, sous forme d'échange et de partage : des idées, des propositions, des conseils en couleur et aménagement pour une harmonie dans votre sweet home en fonction de votre mode de vie, vos goût et vos aspirations.<br />Coût de la prestations : 50€/heure + frais de déplacement selon distance.</p>  
        </div>
    </div>    
    <div class=" text-center">
        <img src="public/images/photo2.jpg" class="card-img-top" id="aboutImage1"alt="">
    </div>
</section>    
        
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
<?php require("footer.php"); ?>
