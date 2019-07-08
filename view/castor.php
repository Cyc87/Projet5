<?php $title="Les jolies roulettes"; ?>

<?php ob_start(); ?>

<?php require("menu.php"); ?>     
        

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
<?php require("footer.php"); ?>
 