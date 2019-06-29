<?php $title = 'Mon joli coccon'; ?>
    
<?php ob_start(); ?>

    
<section>
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="carousel-indicators">
            <li  data-target="#carousel" data-slide-to="0" class="active"></li>
            <li  data-target="#carousel" data-slide-to="1"></li>
            <li  data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/images/slider/slider1.jpg" class=" w-50 " alt="">
            </div>
            <div class="carousel-item">
                <img src="public/images/slider/slider2.jpg" class=" w-50" alt="">   
            </div>
            <div class="carousel-item">
                <img src="public/images/slider/slider3.jpg" class=" w-50" alt="">   
            </div>
        </div>
        <a class="carousel-control-prev" id="prevSlider" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" id="nextSlider" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>   
<section>
    <div class="card-deck" style="width: 75%; margin: auto; margin-top:200px; text-align: center;">
        <div class="card">   
            <div class="card-body">
                <h5 class="card-title">Mes jolies caisses</h5>
                <p class="card-text"></p>
                <a class="dropdown-item" href="#">Découvrir</a>
            </div>
            <img src="public/images/caisses/caisse1.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mes jolies meubles</h5>
                <p class="card-text"></p>
                <a class="dropdown-item" href="#">Découvrir</a>
            </div>
            <img src="public/images/meubles/meuble1.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mes jolies décos</h5>
                <p class="card-text"></p>
                <a class="dropdown-item" href="#">Découvrir</a>
            </div>
            <img src="public/images/deco/deco1.jpg" class="card-img-top" alt="...">
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>

