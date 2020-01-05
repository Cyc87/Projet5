<?php $title = 'Mes jolies caisses'; ?>

<?php require('view/home/menu/menuHome/menu.php'); ?>

<?php ob_start(); ?>

<section>
    <h2 style="text-align:center; margin-top:50px; margin-bottom:50px">Les jolies caisses</h2>
    <div class="container" style="text-align:center">

        <form action="index.php?action=beautifullCrates" method="get">
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
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>

                    <?php
                    for ($i = 1; $i <= $numberPage; $i++) {

                        if ($i == $current) {
                    ?>
                            <li class="active"><a href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php
                        } else {
                        ?>
                            <li><a href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php
                        }
                    }
                    ?>


                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </form>

    </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>

<?php require("view/footer/footer.php"); ?>