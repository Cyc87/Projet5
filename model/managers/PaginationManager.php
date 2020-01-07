<?php

    

    class PaginationManager{

    private $_db;
    private $perPage;
    private $firstOfPage;
    
    
        public function __construct(){
            try {
                $this->_db = new PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
    public function countProduct()
    {
       
        $this->perPage = 4 ;

        $req = $this->_db->query('SELECT COUNT(*) AS total FROM products WHERE category IN ("étagère","roulette","caisse")');
        $result = $req->fetch();

        $total = $result['total'];
        
        $numberPage = ceil($total / $this->perPage);

        if (isset($_GET['page']) && !empty($_GET['page']) && ctype_digit($_GET['page']) == 1) {
            if ($_GET['page'] > $numberPage) {
                $current = $numberPage;
               
            } else {
                $current = $_GET['page'];
            }
        } else {
            $current = 1;
        }
        
        $this->firstOfPage = ($current - 1) * $this->perPage;

        }
    public function readAllBeautifulCratesProduct()
    {
        $req = $this->_db->prepare('SELECT * FROM `products`  WHERE category  IN ("étagère","roulette","caisse") ORDER BY id DESC LIMIT ' . $this->firstOfPage . ',' . $this->perPage . '');
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
        $req = $this->_db->prepare('SELECT * FROM `products` WHERE category IN ("chaise","table","commode","buffet","armoire") ORDER BY id DESC LIMIT ' . $this->firstOfPage . ',' . $this->perPage . '');
        $req->execute();

        $readAllFineFurnishingProduct = [];

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $readAllFineFurnishingProduct[] = new ProductCreation($data);
        }
        
        return $readAllFineFurnishingProduct;
        $readAllFineFurnishingProduct->closeCursor();
    }
    public function readAllBeautifullWallProduct()
    {
        $req = $this->_db->prepare('SELECT * FROM products WHERE category = "mur" ORDER BY id DESC LIMIT ' . $this->firstOfPage . ',' . $this->perPage . '');
        $req->execute();

        $readAllBeautifullWallProduct = [];
        
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $readAllBeautifullWallProduct[] = new ProductCreation($data);
        }
        
        return $readAllBeautifullWallProduct;
        $readAllBeautifullWallProduct->closeCursor();
        
    }
}
