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
            $req = $this->_db->prepare("INSERT  INTO images(namePhoto,dateCreationPhoto) VALUES (?,NOW())");
            $req->execute(array(
                $images->namePhoto(),
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
        public function updatePhoto(PhotoCreation $updatePhoto){
            
            $req = $this->_db->prepare("UPDATE images SET namePhoto = :namePhoto  WHERE id = :id");
            $req->execute(array(
                "namePhoto" => $updatePhoto->namePhoto(),
                "id" => $updatePhoto->id()
            ));
        }
    }
?>