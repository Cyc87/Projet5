<?php
    class PhotoManager{

        private $_db;

        public function __construct(){
            try {
                $this->_db = new PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        public function addPhotoCreation(PhotoCreation $images){
            $req = $this->_db->prepare("INSERT IGNORE INTO images(namePhoto,dateCreationPhoto) VALUES (?,NOW())");
            $req->execute(array(
                $images->namePhoto(),
            ));
            $data = $req ->fetch(PDO::FETCH_ASSOC);
            return $data;
            
        }
    }
?>