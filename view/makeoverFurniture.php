<?php $title="Le Relooking de meubles"; ?>

<?php ob_start(); ?>

<?php require("menu/menu.php"); ?>     

<section>
    <div class="container">
        <div class="text-justify">
            <p class="card-text">Les meubles sont chinés et bichonnés avant d'être relookés avec amour et savoir-faire selon mes envies et inspirations.<br /> Etant anciens, subsistent les marques du temps qui font leur charme et son gages de leur histoire.<br />Ici tout est possible ! Vous rêvez d'un meuble unique et personnalisé ? Je le chine pour vous et nous choisissons ensemble les couleurs. <a href="index.php?action=contact">Contactez-moi</a> afin que nous échangions sur votre projet.<br />Vous possédez déjà un meuble de famille mais il nest plus à votre goût ? Je lui referai une petite beauté avec plaisir.<a href="index.php?action=contact"> Contactez-moi </a>afin que je vous propose un devis.</p>  
        </div>
    </div>    
    <div class=" text-center">
        <img src="public/images/photo2.jpg" class="card-img-top" id="aboutImage1"alt="">
    </div>
</section>
    
        
<?php $content = ob_get_clean(); ?>

<?php require('template/template.php') ?>
<?php require("footer/footer.php"); ?>
