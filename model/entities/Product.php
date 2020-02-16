<?php

namespace CYC\Projet5\model\entities\Product;

    class ProductCreation{

        private $_id;
        private $_category;
        private $_descriptionProduct;
        private $_nameProduct;
        private $_dateCreationProduct;
            

        public function __construct(Array $data){
        $this->hydrate($data);
        }
        public function hydrate(Array $data){
            if(isset($data['id'])){
            $this->setId($data['id']);
            }
            if(isset($data['category'])){
            $this->setCategory($data['category']);
            }
            if(isset($data['descriptionProduct'])){
            $this->setDescriptionProduct($data['descriptionProduct']);
            }
            if(isset($data['nameProduct'])){
            $this->setNameProduct($data['nameProduct']);
            }
            if(isset($data['dateCreationProduct'])){
            $this->setDateCreationProduct($data['dateCreationProduct']);
            }
        } 
        // GETTERS
        public function id(){
            return $this->_id;
        }
        public function category(){
            return $this->_category;
        }
        public function descriptionProduct(){
            return $this->_descriptionProduct;
        }
        public function nameProduct(){
            return $this->_nameProduct;
        }
        public function dateCreationProduct(){
            return $this->_dateCreationProduct;
        }
        
        // SETTERS
        public function setId($id){
            $this->_id = $id;
        }
        public function setCategory($category){
            $this->_category = $category;
        }
        public function setDescriptionProduct($descriptionProduct){
            $this->_descriptionProduct = $descriptionProduct;
        }
        public function setNameProduct($nameProduct){
            $this->_nameProduct = $nameProduct;
        }
        public function setDateCreationProduct($dateCreationProduct){
            $this->_dateCreationProduct = $dateCreationProduct;
        }
    }     
?>