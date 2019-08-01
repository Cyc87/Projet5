<?php $title="La vente de peinture"; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>     
        
  
        
<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>

<?php require("view/footer/footer.php"); ?>