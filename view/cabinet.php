<?php $title="Ma jolie armoire"; ?>

<?php ob_start(); ?>

<?php require("menu.php"); ?>     
        
    
        
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
<?php require("footer.php"); ?>
