<?php $title="Le concept"; ?>

<?php ob_start(); ?>
        
        <div id="contact">
            <div class="shadow-lg p-3 mb-5 bg-white rounded"><h1>Le concept / L'idée</h1></div> 
        </div>
    </header>
    <section>
        <div class="container">
            <div class="text-justify">
                <p class="card-text">Tous les meubles ont été chinés et bichonnés avant d'être relookés avec amour et savoir-faire. Etant anciens, subsistent les marques du temps qui font leur charme et sont gages de leur histoire.<br/>
                                    Les meubles sont remis au gout du jour dans une démarche éco-responsable. Redonner une nouvelle vie c'est recycler, allonger la durée de vie et limiter la consommation.<br/>
                                    Les meubles sont nettoyés, peints et protégés avec des produits et peintures naturels sans solvant ni cov et fabriqués en France.<br/>
                                    Ici tout est possible ! Vous rêvez d'un meuble unique et personnalisé ? Je le chine pour vous et nous choisissons ensemble les couleurs. <a href="contact.php">Contactez-moi</a> afin que nous échangions sur votre projet.<br/>
                                    Vous possédez déjà un meuble mais il n'est plus à votre goût ? Je lui referai une petite beauté avec plasir. Contactez-moi afin de vous proposer un devis.</p>  
            </div>
        </div>    
        <div class=" text-center">
            <img src="images/slider3.jpg" class="card-img-top" id="cardImage2"alt="">
        </div>
    </section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>