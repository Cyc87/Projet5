<?php $title = 'Les jolies étagères'; ?>

<?php ob_start(); ?>

<?php require("menu.php"); ?>        


    
<?php $content = ob_get_clean(); ?>
<?php require("footer.php"); ?>
<?php require('template.php') ?>

