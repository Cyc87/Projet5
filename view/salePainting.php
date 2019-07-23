<?php $title="La vente de peinture"; ?>

<?php ob_start(); ?>

<?php require("menu/menu.php"); ?>     
        
  
        
<?php $content = ob_get_clean(); ?>

<?php require('template/template.php') ?>

<?php require("footer/footer.php"); ?>