<?php $title = 'Mes jolies caisses'; ?>

<?php require('view/home/menu/menuHome/menu.php'); ?>

<?php ob_start(); ?>

<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Vous trouverez ici toutes les caisses</h2>
    <div class="container" style="text-align:center">

        <form action="index.php?action=beautifullCrates&page=$_GET['page']" method="get">
            <?php
            foreach ($readAllBeautifulCratesProduct as $readAllBeautifulCratesProduct) {
                ?>
                <div class="image">
                    <img src="<?= $readAllBeautifulCratesProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                    <h4><?= $readAllBeautifulCratesProduct->descriptionProduct() ?></h4>
                </div>
            <?php
            }
            ?>
        </form>
    </div>

</section>
<section>
    <div class="container">
        <nav aria-label="Page navigation">
            <ul class="pagination" style="text-align:center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>

<?php require("view/footer/footer.php"); ?>