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
        public function addProductCreation(ProductCreation $product){
            $req = $this->_db->prepare("INSERT  INTO products(nameProduct,descriptionProduct,dateCreationProduct) VALUES (?,?,NOW())");
            $req->execute(array(
                $product->nameProduct(),
                $product->descriptionProduct(),
            ));
            $data = $req ->fetch(PDO::FETCH_ASSOC);
            return $data;
             
        }
        public function readAllproduct(){
            $req = $this->_db->query('SELECT * FROM products ORDER BY dateCreationProduct DESC ');
            $readProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC))
            {
                $readProduct[] = new ProductCreation($data);
            }
            return $readProduct;
        }
        public function readAllBeautifulCratesProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct IN ("étagère","roulette","caisse") LIMIT 0,6');
            $readAllBeautifulCratesProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $readAllBeautifulCratesProduct[] = new ProductCreation($data);
            }
            return $readAllBeautifulCratesProduct;
        }
        public function readAllFineFurnishingProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct IN ("chaise","table","commode","buffet","armoire","mur") LIMIT 0,6');
            $readAllFineFurnishingProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $readAllFineFurnishingProduct[] = new ProductCreation($data);
            }
            return $readAllFineFurnishingProduct;
        }
        public function readPrettyDecorationProduct()
        {
            $req = $this->_db->query('SELECT * FROM products WHERE descriptionProduct = "divers" LIMIT 0,6');
            $readPrettyDecorationProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readPrettyDecorationProduct[] = new ProductCreation($data);
            }
            return $readPrettyDecorationProduct;
        }
        public function readCastorProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "roulette" ');
            $readCastorProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readCastorProduct[] = new ProductCreation($data);
            }
            return $readCastorProduct;
        }
        public function readCratesProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "caisse" ');
            $readCratesProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readCratesProduct[] = new ProductCreation($data);
            }
            return $readCratesProduct;
        }
        public function readEtagereProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "étagère" ');
            $readEtagereProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readEtagereProduct[] = new ProductCreation($data);
            }
            return $readEtagereProduct;
        }
        public function readChairProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "chaise" ');
            $readChairProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readChairProduct[] = new ProductCreation($data);
            }
            return $readChairProduct;
        }
        public function readTableProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "table" ');
            $readTableProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readTableProduct[] = new ProductCreation($data);
            }
            return $readTableProduct;
        }
        public function readChestProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "commode" ');
            $readChestProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readChestProduct[] = new ProductCreation($data);
            }
            return $readChestProduct;
        }
        public function readBuffetProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "buffet" ');
            $readBuffetProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readBuffetProduct[] = new ProductCreation($data);
            }
            return $readBuffetProduct;
        }
        public function readCabinetProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "armoire" ');
            $readCabinetProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readCabinetProduct[] = new ProductCreation($data);
            }
            return $readCabinetProduct;
        }
        public function readWallProduct()
        {
            $req = $this->_db->query('SELECT * FROM `products` WHERE descriptionProduct = "mur" ');
            $readWallProduct = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $readWallProduct[] = new ProductCreation($data);
            }
            return $readWallProduct;
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