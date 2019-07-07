<?php $title="Modification de l'image"; ?>

<?php ob_start(); ?>
<section>
    <form action="index.php?action=editPhoto&edit=<?= $_GET['id'] ?>" method="get">
        <div class="card" style="width: 100%;height:auto" >
            <h5 class="card-title text-center">Ancienne Photo</h5>
            <?php foreach($ReadPhoto as $ReadPhoto) { ?>
            <div class="card-title text-center">
                <img src="<?= $ReadPhoto->namePhoto() ?>" height="500" width="500" class="img-thumbnail" />
            </div>
            <?php
                }
            ?>
        </div>
    </form>
</section>
<section>
    <div class="container">
        <form method="post" action="index.php?action=editPhoto" enctype="multipart/form-data">
            <input type="file" name="userfile">
            <input type="submit" name="editPhoto" value="Voir Photo">
        </form>
    </div>
</section>
<!-- <section>
    <form action="index.php?action=editPhoto&edit=<?= $_GET['id'] ?>" method="get">
        <div class="card" style="width: 100%;height:auto" >
            <h5 class="card-title text-center">Nouvelle Photo</h5>
            <?php foreach($ReadPhoto as $ReadPhoto) { ?>
            <div class="card-title text-center">
                <img src="<?= $ReadPhoto->namePhoto() ?>" height="500" width="500" class="img-thumbnail" />
            </div>
            <?php
                }
            ?>
        </div>
    </form>
</section>         -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>

