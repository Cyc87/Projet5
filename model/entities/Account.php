<?php

namespace CYC\Projet5\model\entities\Account;


class AccountCreation{
        
        private $_id;
        private $_userName;
        private $_password1;
        private $_mail;
        private $_creationDate;
        

        public function __construct(Array $data){
        $this->hydrate($data);
        }
        public function hydrate(Array $data){
            if(isset($data['id'])){
            $this->setId($data['id']);
            }
            if(isset($data['username'])){
            $this->setUserName($data['username']);
            }
            if(isset($data['password1'])){
            $this->setPassword1($data['password1']);
            }
            if(isset($data['mail'])){
            $this->setMail($data['mail']);
            }
            if(isset($data['dateCreation'])){
            $this->setDateCreation($data['dateCreation']);
            }
        } 
        // GETTERS
        public function id(){
            return $this->_id;
        }
        public function userName(){
            return $this->_userName;
        }
        public function password1(){
            return $this->_password1;
        }
        public function mail(){
            return $this->_mail;
        }
        public function dateCreation(){
            return $this->_dateCreation;
        }
        // SETTERS
        public function setId($id){
            $this->_id = $id;
        }
        public function setUserName($name){
            $this->_userName = $name;
        }
        public function setPassword1($password1){
            $this->_password1 = $password1;
        }
        public function setMail($mail){
            $this->_mail = $mail;
        }
        public function setDateCreation($dateCreation){
            $this->_dateCreation = $dateCreation;
        }
    }     
?>