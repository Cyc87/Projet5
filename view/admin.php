<?php $title = 'Administration'; ?>

<?php require('menuAdmin.php'); ?>

<?php ob_start(); ?>


    

     
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

