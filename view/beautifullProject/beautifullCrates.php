<?php $title = 'Mes jolies caisses'; ?>

<?php require('view/home/menu/menuHome/menu.php'); ?>

<?php ob_start(); ?>

<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Les jolies caisses</h2>
    <div class="container" style="text-align:center">

        <form action="index.php?action=beautifullCrates&page" method="get">
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
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php
                for ($i = 1; $i <= $this->numberPage; $i++) {

                    if ($i == $this->current) {
                ?>
                        <li class="page-item"><a class="page-link" href="index.php?action=beautifullCrates&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php
                    } else {
                    ?>
                        <li class="page-item"><a class="page-link" href="index.php?action=beautifullCrates&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php
                    }
                }
                ?>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>

<?php require("view/footer/footer.php"); ?>