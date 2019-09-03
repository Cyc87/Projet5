<?php $title = "La vente de peinture"; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<h2 style="text-align:center; margin-top:50px; margin-bottom:50px">La Vente de peinture</h2>
<section>
    <div class="container">
        <div class="text-justify">
            <p class="card-text" style="text-align: center">Je suis également conseillère <a href="http://eleonore-deco.com/site/" style="color:#025a55"> Eléonore Déco. </a><br /><br />Eléonore Déco, c'est une entreprise familiale française qui crée des peintures et produits de décoration en Bretagne, dans la voie du savoir faire artisanal et dans une démarche éco-responsable garantissant la qualité et le bien-être de tous.<br />Elle propose des produits simples et innovants pour peindre et décorer les murs et les meubles de la maison.<br /><br />Je vous propose des démonstration gratuites sur un théme précis afin de vous initier à des techniques décoratives avec les produits de la marques.<br /><br />Organisez un Café Déco à votre domicile pour un moment de convivialité, de créativité, d'échanges d'idées, de conseils personnalisés et bénéficiez de promotion, de cadeaux et de produits offerts(en fonction du CA de la réunion).<br /><br /></p>
        </div>
    </div>
    <div class="container">
        <div class="card" style="width: 18rem; text-align :center">
            <div class="card-body">
                <h5><a href="index.php?action=contact" style="color:#025a55" class="card-link">Organiser un Café Déco</a></h5>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>

<?php require("view/footer/footer.php"); ?>