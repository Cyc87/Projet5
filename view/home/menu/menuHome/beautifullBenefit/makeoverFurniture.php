<?php $title = "Le Relooking de meubles"; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Le Relooking de meubles</h2>

<section>
    <div class="container">
        <div class="text-justify">
            <p class="card-text" style="text-align:center">Les meubles sont chinés et bichonnés avant d'être relookés avec amour et savoir-faire selon mes envies et inspirations.
                <p style="text-align:center">Etant anciens, subsistent les marques du temps qui font leur charme et sont gages de leur histoire.</p>
                <p style="text-align:center">Ici tout est possible ! Vous rêvez d'un meuble unique et personnalisé ? Je le chine pour vous et nous choisissons ensemble les couleurs.<br/><a href=" index.php?action=contact">Contactez-moi</a> afin que nous échangions sur votre projet.</p>
                <p style="text-align:center">Vous possédez déjà un meuble de famille mais il nest plus à votre goût ? Je lui referai une petite beauté avec plaisir.<br /><a href="index.php?action=contact"> Contactez-moi </a>afin que je vous propose un devis.</p>
        </div>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>