<?php $title = 'Erreur 404'?>
        
<?php ob_start(); ?>

    <section>
        <picture>
            <a href="index.php?action=home"><img src="public/images/2.jpg" class="img-fluid2" alt="Responsive image" style="width:100%"></a>
        </picture>  
    </section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>