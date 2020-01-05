<?php $title = 'Les jolis murs'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>
<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Mes jolis murs</h2>
    <div class="container" style="text-align:center">
        <form action="index.php?action=prettyDecoration" method="get">
            <?php
            foreach ($readBeautifullWallProduct as $readBeautifullWallProduct) {
                ?>
                <div class="image">
                    <img src="<?= $readBeautifullWallProduct->nameProduct() ?>" height="300" width="500" class="img-thumbnail" />
                    <h4><?= $readBeautifullWallProduct->descriptionProduct() ?></h4>
                </div>
            <?php
            }
            ?>
        </form>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>