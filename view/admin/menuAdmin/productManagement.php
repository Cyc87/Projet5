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
</section>
<section>
    <div class="container">
        <div id="crossAdd" style="margin-top: -178px; position: relative;right: -362px; z-index: 2">
            <input id="crossAddbutton" type="image" alt="image" src="public/images/croix.png">
        </div>
        <form method="post" action="index.php?action=productManagement" enctype="multipart/form-data" runat="server">
            <div style="text-align:center">
                <div class="container" id="buttonAddImage">
                    <input class="btn btn-dark" type="button" id="" value="Ajouter une image"><br /><br /><br />
                </div>
                <div class="container" id=addImage>
                    <div class="card" style="width: 22rem;">
                        <div class="card-body">
                            <input style="margin-top:10px;margin-bottom:10px;" type="file" name="userfile"><br />
                        </div>
                        <div class="container">
                            <input style="margin-top:10px;margin-bottom:30px" name="category" type="text" placeholder="Catégories"><i id="category" class="fa fa-question-circle" style="font-size:24px;margin-top: -23px;"></i><br />
                        </div>
                        <input style="margin-top:10px;margin-bottom:30px" name="descriptionProduct" type="text" placeholder="Description">
                        <input type="submit" name="submit" value="Ajouter Photo">
                    </div>
                </div><br />
            </div>
        </form>
    </div>
</section>
<section>
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
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="table table-responsive">
        <div class="container">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Categorie</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <form action="index.php?action=productManagement" method="post" enctype="multipart/form-data" runat="server">
            <?php
            foreach ($readProduct as $readProduct) {
                ?>
                <tr>
                    <td id="data" data-label="Numéro">
                        <?= $readProduct->id() ?>
                    </td>
                    <td id="data" data-label="Categorie">
                        <?= $readProduct->category() ?>
                    </td>
                    <td id="data" data-label="Description">
                        <?= $readProduct->descriptionProduct() ?>
                    </td>
                    <td id="data" data-label="Image">
                        <img src="<?= $readProduct->nameProduct() ?>" height="10" width="50" class="img-thumbnail" />
                    </td>
                    <td id="data" data-label="Modifier">
                        <a name="editProduct" href="index.php?action=updateProduct&id=<?= $readProduct->id() ?>" class='btn btn-dark' style="color:white">Modifier</a>
                    </td>
                    <td id="data" data-label="Supprimer">
                        <a name="deleteProduct" href="index.php?action=productManagement&id=<?= $readProduct->id() ?>" class='btn btn-dark'>Supprimer</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </form>
    </div>
</section>
<section>

</section>

<script src="public/js/category.js"></script>
<script src="public/js/addImage.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('view/template/template.php') ?>