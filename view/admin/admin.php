<?php $title = 'Administration'; ?>

<?php require('view/admin/menuAdmin/menuAdmin.php'); ?>

<?php ob_start(); ?>


    

     
<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>

