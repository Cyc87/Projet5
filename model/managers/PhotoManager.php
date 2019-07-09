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
            $req = $this->_db->prepare("INSERT  INTO images(namePhoto,descriptionPhoto,dateCreationPhoto) VALUES (?,?,NOW())");
            $req->execute(array(
                $images->namePhoto(),
                $images->descriptionPhoto(),
            ));
            $data = $req ->fetch(PDO::FETCH_ASSOC);
            return $data;
            
        }
        public function readAllImage(){
            $req = $this->_db->query('SELECT * FROM images ORDER BY dateCreationPhoto DESC ');
            $readImages = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC))
            {
                $readImages[] = new PhotoCreation($data);
            }
            return $readImages;
        }
        public function deletePhoto($id){
            $req = $this->_db->prepare("DELETE FROM images WHERE id = ?");
            $req->execute(array(
                $id,
            ));
        }
        public function editPhoto($id){
            $req = $this->_db->prepare('SELECT * FROM images WHERE id = ?');
            $req->execute(array(
                $id
            ));
            $photoEdit = [];
            while ($data = $req->fetch(PDO::FETCH_ASSOC))
            {
                $photoEdit[] = new PhotoCreation($data);
            }
            return $photoEdit;
        }
        public function updatePhoto(PhotoCreation $updateId){
            $req = $this->_db->prepare("UPDATE images SET  descriptionPhoto = :descriptionPhoto WHERE id = :id");
            $req->execute(array(
                "descriptionPhoto" =>  $updateId->descriptionPhoto(),
                "id" => $updateId->id()
            ));
        }
        
    }
?>