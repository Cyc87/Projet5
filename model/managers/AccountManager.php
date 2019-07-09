<?php

    class AccountManager{

        private $_db;

        public function __construct(){
            try {
                $this->_db = new PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        public function getByMail($mail){
            $req = $this->_db->prepare("SELECT * FROM `users` WHERE mail = :mail");
            $req->execute(array(
                "mail" => $mail
            ));
            $data = $req ->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function getByUsername($name){
            $req = $this->_db->prepare("SELECT * FROM `users` WHERE username = :username");
            $req->execute(array(
                "username" => $_POST['usernameAdmin']
            ));
            $data = $req ->fetch(PDO::FETCH_ASSOC);
            return $data; 
        }
        public function addAccountCreation(AccountCreation $users){
            $req = $this->_db->prepare("INSERT INTO users(username, password1, mail, dateCreation) VALUES (?,?,?,NOW())");
            $req->execute(array(
                $users->userName(),
                $users->password1(),
                $users->mail(),
        
            ));
            $data = $req ->fetch(PDO::FETCH_ASSOC);
            return $data;
            
        }
        public function sessionUser($id){
            $req = $this->_db->prepare("SELECT * FROM `users` WHERE id = :id");
            $req->execute(array(
                "id" => $id
            ));
            $data = $req ->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>