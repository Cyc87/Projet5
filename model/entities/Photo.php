<?php

    class PhotoCreation{

        private $_id;
        private $_descriptionPhoto;
        private $_namePhoto;
        private $_dateCreationPhoto;
        

        public function __construct(Array $data){
        $this->hydrate($data);
        }
        public function hydrate(Array $data){
            if(isset($data['id'])){
            $this->setId($data['id']);
            }
            if(isset($data['descriptionPhoto'])){
            $this->setDescriptionPhoto($data['descriptionPhoto']);
            }
            if(isset($data['namePhoto'])){
            $this->setNamePhoto($data['namePhoto']);
            }
            if(isset($data['dateCreationPhoto'])){
            $this->setDateCreationPhoto($data['dateCreationPhoto']);
            }
        } 
        // GETTERS
        public function id(){
            return $this->_id;
        }
        public function descriptionPhoto(){
            return $this->_descriptionPhoto;
        }
        public function namePhoto(){
            return $this->_namePhoto;
        }
        public function dateCreationPhoto(){
            return $this->_dateCreationPhoto;
        }
        
        // SETTERS
        public function setId($id){
            $this->_id = $id;
        }
        public function setDescriptionPhoto($descriptionPhoto){
            $this->_descriptionPhoto = $descriptionPhoto;
        }
        public function setNamePhoto($namePhoto){
            $this->_namePhoto = $namePhoto;
        }
        public function setDateCreationPhoto($dateCreationPhoto){
            $this->_dateCreationPhoto = $dateCreationPhoto;
        }
    }     
?>