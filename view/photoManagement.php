<?php $title = 'Gestion des images'; ?>

<?php ob_start(); ?>

<?php require("menuAdmin.php"); ?>

<section>
<div class="container">
    <form method="POST" action="index.php?action=photoManagement" enctype="multipart/form-data">
        <input type="file" name="userfile">
        <input type="submit" name="submit" value="Ajouter Photo">
    </form>
</div>
</section>
<div class="container">
    <table class="table table-bordered table-striped">  
        <tr>
            <th width="10%">Image</th>
            <th width="70%">Nom</th>
            <th width="10%">Modifier</th>
            <th width="10%">Supprimer</th>
        </tr>
</div>
<tr>
    <td>
      <img src="" height="30" width="75" class="img-thumbnail" />
    </td>
    <td></td>
    <td><button type="button" name="update" class="btn btn-warning bt-xs update" >Modifier</button></td>
    <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" >Supprimer</button></td>
    </tr>
<?php
    if(isset($_SESSION['message'])){
?>
<div class="alert alert-<?=$_SESSION['msg_type'] ?>" style="height:50px; left:50px;">
<?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    }
?>


<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
