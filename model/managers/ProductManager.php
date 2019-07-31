<?php
    class ProductManager{

        private $_db;

        public function __construct(){
            try {
                $this->_db = new PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        public function countProduct(){
            $perPage = 4;

            $req = $this->_db->query('SELECT COUNT(*) AS total FROM products WHERE descriptionProduct IN ("étagère","roulette","caisse")');
            $result = $req->fetch();
            $total = $result['total'];

            $numberPage = ceil($total/$perPage);
       
            if(isset($_GET['page']) && !empty($_GET['page']) && ctype_digit($_GET['page']) == 1){
                if($_GET['page'] > $numberPage){
                    $current = $numberPage;
                }else{
                    $current = $_GET['page'];
                }
            }else{
                $current = 1;
            }
            
            $firstOfPage = ($current-1)*$perPage;
          
        }
        public function addProductCreation(ProductCreation $product){
            $req = $this->_db->prepare("INSERT  INTO products(nameProduct,descriptionProduct,dateCreationProduct) VALUES (?,?,NOW())");
            $req->execute(array(
                $product->nameProduct(),
                $product->descriptionProduct(),
            ));
            $data = $req ->fetch(PDO::FETCH_ASSOC);
            return $data;
            $data->closeCursor();
        }
        public function readAllproduct(){
            $req = $this->_db->query('SELECT * FROM products ORDER BY dateCreationProduct DESC ');
            $readProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC))
            {
                $readProduct[] = new ProductCreation($data);
            }
            return $readProduct;
            $readProduct->closeCursor();
        }
        public function readAllBeautifulCratesProduct()
        {
            $req = $this->_db->prepare('SELECT * FROM `products` WHERE descriptionProduct IN ("étagère","roulette","caisse") LIMIT 0,20');
            $req->execute();
            $readAllBeautifulCratesProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readAllBeautifulCratesProduct[] = new ProductCreation($data);
            }
            return $readAllBeautifulCratesProduct;
            $readAllBeautifulCratesProduct->closeCursor();
        }
        public function readAllFineFurnishingProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct IN ("chaise","table","commode","buffet","armoire","mur") LIMIT 0,6');
            $readAllFineFurnishingProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readAllFineFurnishingProduct[] = new ProductCreation($data);
            }
            return $readAllFineFurnishingProduct;
            $readAllFineFurnishingProduct->closeCursor();
        }
        public function readPrettyDecorationProduct()
        {
            $req = $this->_db->query('SELECT * FROM products WHERE descriptionProduct = "divers" LIMIT 0,6');
            $readPrettyDecorationProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readPrettyDecorationProduct[] = new ProductCreation($data);
            }
            return $readPrettyDecorationProduct;
            $readPrettyDecorationProduct->closeCursor();
        }
        public function readCastorProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "roulette" ');
            $readCastorProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readCastorProduct[] = new ProductCreation($data);
            }
            return $readCastorProduct;
            $readCastorProduct->closeCursor();
        }
        public function readCratesProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "caisse" ');
            $readCratesProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readCratesProduct[] = new ProductCreation($data);
            }
            return $readCratesProduct;
            $readCratesProduct->closeCursor();
        }
        public function readEtagereProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "étagère" ');
            $readEtagereProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readEtagereProduct[] = new ProductCreation($data);
            }
            return $readEtagereProduct;
            $readEtagereProduct->closeCursor();
        }
        public function readChairProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "chaise" ');
            $readChairProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readChairProduct[] = new ProductCreation($data);
            }
            return $readChairProduct;
            $readChairProduct->closeCursor();
        }
        public function readTableProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "table" ');
            $readTableProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readTableProduct[] = new ProductCreation($data);
            }
            return $readTableProduct;
            $readTableProduct->closeCursor();
        }
        public function readChestProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "commode" ');
            $readChestProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readChestProduct[] = new ProductCreation($data);
            }
            return $readChestProduct;
            $readChestProduct->closeCursor();
        }
        public function readBuffetProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "buffet" ');
            $readBuffetProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readBuffetProduct[] = new ProductCreation($data);
            }
            return $readBuffetProduct;
            $readBuffetProduct->closeCursor();
        }
        public function readCabinetProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "armoire" ');
            $readCabinetProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readCabinetProduct[] = new ProductCreation($data);
            }
            return $readCabinetProduct;
            $readCabinetProduct->closeCursor();
        }
        public function readWallProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "mur" ');
            $readWallProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readWallProduct[] = new ProductCreation($data);
            }
            return $readWallProduct;
            $readWallProduct->closeCursor();
        }
        public function deleteProduct($id){
            $req = $this->_db->prepare("DELETE FROM products WHERE id = ?");
            $req->execute(array(
                $id,
            ));
        }
        public function editProduct($id){
            $req = $this->_db->prepare('SELECT * FROM products WHERE id = ?');
            $req->execute(array(
                $id
            ));
            $productEdit = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC))
            {
                $productEdit[] = new ProductCreation($data);
            }
            return $productEdit;
            $productEdit->closeCursor();
        }
        public function updateProduct(ProductCreation $updateId){
            $req = $this->_db->prepare("UPDATE products SET  descriptionProduct = :descriptionProduct WHERE id = :id");
            $req->execute(array(

                "descriptionProduct" =>  $updateId->descriptionProduct(),
                "id" => $updateId->id()
            ));
        }
         
   }
?>