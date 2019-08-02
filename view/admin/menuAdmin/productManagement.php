<?php $title = 'Gestion des produits'; ?>

<?php ob_start(); ?>

<?php require("view/admin/menuAdmin/menuAdmin.php"); ?>
<section>
    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
        <div class="container">
            <form method="post" action="index.php?action=productManagement" enctype="multipart/form-data" runat="server">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style="margin-top:50px;margin-bottom:50px" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ajouter une image
                    </button>
                    <div class="dropdown-menu" id="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <div class="dropdown-item" type="text">
                            <input style="margin-top:10px;margin-bottom:10px" type="file" name="userfile"><br />
                            <input style="margin-top:10px;margin-bottom:30px" name="category" type="text" placeholder="Catégories"><i id="category" class="fa fa-question-circle" style="font-size:24px"></i><br />
                            <input style="margin-top:10px;margin-bottom:30px" name="descriptionProduct" type="text" placeholder="Description">
                            <input type="submit" name="submit" value="Ajouter Photo">
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div class="container">
            <div class="resumeCategory" id="resumeCategory">
                <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                    <div id="croix">
                        <input type="image" alt="image" src="public/images/croix.png">
                    </div>
                    <div class="card-header">Voici comment indiquer la bonne catégorie :</div>
                    <div class="card-body">
                        <p>- Caisse à roulette : roulette</p>
                        <p>- Caisse : caisse</p>
                        <p>- Caisse étagère : étagère</p>
                        <p>- Chaise : chaise</p>
                        <p>- Table : table</p>
                        <p>- Commode : commode</p>
                        <p>- Buffet: buffet</p>
                        <p>- Mur : mur</p>
                        <p>- Tout le reste : divers</p>
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
    <div class="container">
        <table class="table table-bordered table-striped">
            <tr>
                <th width="6%">Numéro</th>
                <th width="17%">Categorie</th>
                <th width="17%">Description</th>
                <th width="20%">Image</th>
                <th width="20%">Modifier</th>
                <th width="20%">Supprimer</th>
            </tr>
    </div>
</section>
<section>
    <div class="container">
        <form action="index.php?action=productManagement" method="post" enctype="multipart/form-data" runat="server">
            <?php
            foreach ($readProduct as $readProduct) {
                ?>
                <tr>
                    <td>
                        <?= $readProduct->id() ?>
                    </td>
                    <td>
                        <?= $readProduct->category() ?>
                    </td>
                    <td>
                        <?= $readProduct->descriptionProduct() ?>
                    </td>
                    <td>
                        <img src="<?= $readProduct->nameProduct() ?>" height="10" width="50" class="img-thumbnail" />
                    </td>

                    <td>
                        <a name="editProduct" href="index.php?action=updateProduct&id=<?= $readProduct->id() ?>" class='btn btn-warning' style="color:white">Modifier</a>
                    </td>

                    <td>
                        <a name="deleteProduct" href="index.php?action=productManagement&id=<?= $readProduct->id() ?>" class='btn btn-danger'>Supprimer</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </form>
    </div>
</section>



<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>