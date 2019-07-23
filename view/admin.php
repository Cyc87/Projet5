<?php $title = 'Administration'; ?>

<?php require('menu/menuAdmin.php'); ?>

<?php ob_start(); ?>


    

     
<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>

