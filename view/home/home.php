<?php $title = 'Mon joli cocon'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<section>
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ul class="carousel-indicators" id="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/images/slider/slider1.jpg" style="width:60%">
            </div>
            <div class="carousel-item">
                <img src="public/images/slider/slider2.jpg" style="width:60%">
            </div>
            <div class="carousel-item">
                <img src="public/images/slider/slider3.jpg" style="width:60%">
            </div>
        </div>
        <a class="carousel-control-prev" id="prevSlider" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" id="nextSlider" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section>
    <div class="card-deck" id="cardDeck">
        <div class="card text-white bg-dark mb-3">
            <a href="index.php?action=beautifulCrates&page" style="text-decoration:none">
                <div class="card-body">
                    <h5 class="card-title" style="color:white">Mes jolies caisses</h5>
                    <img src="public/images/crates/crates1.jpg" class="card-img-top" alt="image caisse">
                </div>
            </a>
        </div>
        <div class="card text-white bg-dark mb-3">
            <a href="index.php?action=fineFurnishing" style="text-decoration:none">
                <div class="card-body">
                    <h5 class="card-title" style="color:white">Mes jolies meubles</h5>
                    <img src="public/images/meubles/meuble1.jpg" class="card-img-top" alt="image meuble">
                </div>
            </a>
        </div>
        <div class="card text-white bg-dark mb-3">
            <a href="index.php?action=beautifullWall" style="text-decoration:none">
                <div class="card-body">
                    <h5 class="card-title" style="color:white">Mes jolis murs</h5>
                    <img src="public/images/deco/mur.jpg" class="card-img-top" alt="image déco"><br><br>
                </div>
            </a>
        </div>
    </div>
</section>
<section>
    <div class="cardInstagram">
        <h3 class="card-title " style="color:black ;text-align:center; margin-top:50px;margin-bottom:50px">Suivez-moi sur Instagram</h3>

    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>

<!-- LightWidget WIDGET -->
<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/68fcc57301515cb78f33cab37d885cb8.html" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

<?php require("view/footer/footer.php"); ?>