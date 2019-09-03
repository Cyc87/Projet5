<?php $title = "Les Ateliers créatifs"; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Les Ateliers créatifs</h2>

<div class="container">
    <div class="text-justify">
        <p class="card-text" style="text-align: center">Je me déplace * chez vous ou dans un lieu associatif pour animer un atelier d'environ 2h.<br />J'apporte tout le matériel nécessaire et vous transmets l'ensemble des techniques pour réaliser votre création.<br /><br />Pour tous types d'événements : anniversaire entre copines dès 8 ans, EVJF, mariage ou sans occasion particulière, juste pour passer un moment convivial entre amies.<br /><br />Nous définissons ensemble le type d'Atelier en fonction de vos envies, vos goûts et des participantes.<br />ex : présentoir à bijoux, plaque/toile déco, plateau, boîte ... upcycling à partir de pots, bouteilles, boîtes de conserve...<br /><br /></p>
    </div>
</div>
<div class="container">
    <div class="text-justify;" style="text-align:center">
        <div class=" row">
            <div class="col-sm-4">
                <div class="card-body">
                    <div class=" text-center">
                        <img src="public/images/meubles/meuble1.jpg" class="card-img-top" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-body">
                    <div class=" text-center">
                        <img src="public/images/meubles/meuble1.jpg" class="card-img-top" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-body">
                    <div class=" text-center">
                        <img src="public/images/meubles/meuble1.jpg" class="card-img-top" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-align:center">
                <p class="card-text">Minimum de 4 personnes.<br />Maximum de 6 à 10 personnes selon le type de création.<br /><br />A partir de 120€<br /><br /></p>
                <p>* frais de déplacement au delà de 30 km au départ de Saint-Junien 87200</p>
            </div>
        </div>
        <div class="container">
            <div class="card" style="width: 15rem; text-align :center">
                <div class="card-body">
                    <h5><a href="index.php?action=contact" style="color:#025a55" class="card-link">Organiser un Atelier</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>