<?php

namespace CYC\Projet5\model\manager\ProductManager;

class ProductManager
{

    private $_db;
    private $perPage;
    private $numberPage;
    private $current;
    private $firstOfPage;


    public function __construct()
    {
        try {
            $this->_db = new \PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', '');
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    function countProduct()
    {

        $this->perPage = 4;

        $req = $this->_db->query('SELECT COUNT(*) AS total FROM products WHERE category IN ("étagère","roulette","caisse")');
        $result = $req->fetch();

        $total = $result['total'];

        $this->numberPage = ceil($total / $this->perPage);

        if (isset($_GET['page']) && !empty($_GET['page']) && ctype_digit($_GET['page']) == 1) {
            if ($_GET['page'] > $this->numberPage) {
                $current = $this->numberPage;
            } else {
                $this->current = $_GET['page'];
            }
        } else {
            $this->current = 1;
        }

        $this->firstOfPage = ($this->current - 1) * $this->perPage;
    }
    public function readAllBeautifulCratesProduct()
    {
        $req = $this->_db->prepare('SELECT * FROM `products`  WHERE category  IN ("étagère","roulette","caisse") ORDER BY id DESC LIMIT ' . $this->firstOfPage . ',' . $this->perPage . '');
        $req->execute();

        $readAllBeautifulCratesProduct = [];

        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readAllBeautifulCratesProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        
        ?>
        <section>
            <div class="container">
                <nav aria-label="Page navigation">
                    <ul class="pagination">

                        <li class="<?php if ($this->current == '1') {

                                        echo " page-item disabled";
                                    } ?>">
                            <a class="page-link" href="index.php?action=beautifullCrates&page=<?php if ($this->current != '1') {
                                                                                                    echo $this->current - 1;
                                                                                                } else {
                                                                                                    echo $this->current;
                                                                                                } ?>" aria-label="Previous">
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
                        <li class="<?php if ($this->current == $this->numberPage) {
                                        echo " page-item disabled";
                                    } ?>">
                            <a class="page-link" href="index.php?action=beautifullCrates&page=<?php if ($this->current != $this->numberPage) {
                                                                                                    echo $this->current + 1;
                                                                                                } else {
                                                                                                    echo $this->current;
                                                                                                } ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
<?php
        return $readAllBeautifulCratesProduct;

        $readAllBeautifulCratesProduct->closeCursor();
    }
    public function readAllFineFurnishingProduct()
    {
        $req = $this->_db->prepare('SELECT * FROM `products` WHERE category IN ("chaise","table","commode","buffet","armoire") ORDER BY id DESC LIMIT ' . $this->firstOfPage . ',' . $this->perPage . '');
        $req->execute();

        $readAllFineFurnishingProduct = [];

        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readAllFineFurnishingProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }

        return $readAllFineFurnishingProduct;
        $readAllFineFurnishingProduct->closeCursor();
    }
    public function readAllBeautifullWallProduct()
    {
        $req = $this->_db->prepare('SELECT * FROM products WHERE category = "mur" ORDER BY id DESC LIMIT ' . $this->firstOfPage . ',' . $this->perPage . '');
        $req->execute();

        $readAllBeautifullWallProduct = [];

        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readAllBeautifullWallProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }

        return $readAllBeautifullWallProduct;
        $readAllBeautifullWallProduct->closeCursor();
    }
    public function addProductCreation(\CYC\Projet5\model\entities\Product\ProductCreation $product)
    {
        $req = $this->_db->prepare("INSERT INTO products(category,nameProduct,descriptionProduct,dateCreationProduct) VALUES (?,?,?,NOW())");
        $req->execute(array(
            $product->category(),
            $product->nameProduct(),
            $product->descriptionProduct(),
        ));
        $data = $req->fetch(\PDO::FETCH_ASSOC);
        return $data;
        $data->closeCursor();
    }
    public function readAllproduct()
    {
        $req = $this->_db->query('SELECT * FROM products ORDER BY dateCreationProduct DESC ');
        $readProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readProduct;
        $readProduct->closeCursor();
    }
    public function readCastorProduct()
    {
        $req = $this->_db->query('SELECT * FROM `products` WHERE category = "roulette" ORDER BY id DESC LIMIT 0,6');
        $readCastorProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readCastorProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readCastorProduct;
        $readCastorProduct->closeCursor();
    }
    public function readCratesProduct()
    {
        $req = $this->_db->query('SELECT * FROM `products` WHERE category = "caisse" ORDER BY id DESC LIMIT 0,6');
        $readCratesProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readCratesProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readCratesProduct;
        $readCratesProduct->closeCursor();
    }
    public function readEtagereProduct()
    {
        $req = $this->_db->query('SELECT * FROM `products` WHERE category = "étagère" ORDER BY id DESC LIMIT 0,6');
        $readEtagereProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readEtagereProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readEtagereProduct;
        $readEtagereProduct->closeCursor();
    }
    public function readChairProduct()
    {
        $req = $this->_db->query('SELECT * FROM `products` WHERE category = "chaise" ORDER BY id DESC LIMIT 0,6');
        $readChairProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readChairProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readChairProduct;
        $readChairProduct->closeCursor();
    }
    public function readTableProduct()
    {
        $req = $this->_db->query('SELECT * FROM `products` WHERE category = "table" ORDER BY id DESC LIMIT 0,6');
        $readTableProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readTableProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readTableProduct;
        $readTableProduct->closeCursor();
    }
    public function readChestProduct()
    {
        $req = $this->_db->query('SELECT * FROM `products` WHERE category = "commode" ORDER BY id DESC LIMIT 0,6');
        $readChestProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readChestProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readChestProduct;
        $readChestProduct->closeCursor();
    }
    public function readBuffetProduct()
    {
        $req = $this->_db->query('SELECT * FROM `products` WHERE category = "buffet" ORDER BY id DESC LIMIT 0,6');
        $readBuffetProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readBuffetProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readBuffetProduct;
        $readBuffetProduct->closeCursor();
    }
    public function readCabinetProduct()
    {
        $req = $this->_db->query('SELECT * FROM `products` WHERE category = "armoire" ORDER BY id DESC LIMIT 0,6');
        $readCabinetProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readCabinetProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readCabinetProduct;
        $readCabinetProduct->closeCursor();
    }
    public function readWallProduct()
    {
        $req = $this->_db->query('SELECT * FROM `products` WHERE category = "mur" ORDER BY id DESC LIMIT 0,6');
        $readWallProduct = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $readWallProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $readWallProduct;
        $readWallProduct->closeCursor();
    }
    public function deleteProduct($id)
    {
        $req = $this->_db->prepare("DELETE FROM products WHERE id = ?");
        $req->execute(array(
            $id,
        ));
    }
    public function editProduct($id)
    {
        $req = $this->_db->prepare('SELECT * FROM products WHERE id = ?');
        $req->execute(array(
            $id
        ));
        $productEdit = [];
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $productEdit[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
        }
        return $productEdit;
        $productEdit->closeCursor();
    }
    public function updateProduct(\CYC\Projet5\model\entities\Product\ProductCreation $updateId)
    {
        $req = $this->_db->prepare("UPDATE products SET  descriptionProduct = :descriptionProduct, category = :category WHERE id = :id");
        $req->execute(array(
            "category" => $updateId->category(),
            "descriptionProduct" =>  $updateId->descriptionProduct(),
            "id" => $updateId->id()
        ));
    }
    public function readSearchProduct($search, $readSearchProduct)
    {

        $req = $this->_db->prepare('SELECT * FROM products WHERE category LIKE ? OR descriptionProduct LIKE ? ORDER BY id DESC LIMIT 0,20');
        $req->execute(array('%' . $search . '%', '%' . $search . '%'));

        $count = $req->rowcount();

        if ($count >= 1) {

            $_SESSION['message'] = "$count résultat(s) trouvé(s) pour $search";
            $_SESSION['msg_type'] = "success";

            $readSearchProduct = [];
            while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
                $readSearchProduct[] = new \CYC\Projet5\model\entities\Product\ProductCreation($data);
            }
        } else {
            $_SESSION['message'] = "0 résultat trouvé pour $search";
            $_SESSION['msg_type'] = "danger";
        }

        return $readSearchProduct;
        $readSearchProduct->closeCursor();
    }
}

?>