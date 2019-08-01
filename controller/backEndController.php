<?php

function login(){

    if (isset($_SESSION['user'])) {
        header('Location: index.php?action=admin');
        exit();
    }
    if (!empty($_POST)) {

            $name="";

            $accountManager = new AccountManager();       
            $data = $accountManager->getByUserName($name);
         
            if ($data) {  
                if (password_verify($_POST['password'], $data['password1'])){
                    $_SESSION['user'] = $data['id'];
                    header('Location: index.php?action=admin');
                    exit();
                } else {
                    $_SESSION['message'] = "Votre mot de passe est invalide";
                    $_SESSION['msg_type'] = "danger";
                }
            } else {
                $_SESSION['message'] = "Votre login est invalide";
                $_SESSION['msg_type'] = "danger";
            }
        }
    include("view/admin/login.php");  
}
function admin(){

    if (!isset($_SESSION['user'])) {
            header('Location: index.php?action=login');
            exit();
    }
    
    $accountManager = new AccountManager();       
    $data = $accountManager->sessionUser($_SESSION['user']);
    
    include("view/admin/admin.php");   
}
function deconnexion(){
    
    session_destroy();
    
    header('Location: index.php?action=home');
    exit();  

    include("view/deconnexion.php");
}
function productManagement(){

    if(!isset($_SESSION['user']))
    {
        header('Location: index.php?action=login');
        exit();
    }
    if(isset($_POST) && !empty($_POST)){
        
        if(!empty($_POST['descriptionProduct'])){

            if(!empty($_FILES['userfile']['name'])){
                
                if($_FILES['userfile']['error'] == 0){

                    if($_FILES['userfile']['size'] > 5000000){
                        $_SESSION['message'] = "Image trop volumineuse!";
                        $_SESSION['msg_type'] = "danger";
                    }
                    $extension = strrchr($_FILES['userfile']['name'],'.');
                    
                    $tabExt = array('.jpg','.gif','.png','.jpeg','JPEG','.PNG','GIF','.JPG');
                    
                    if (in_array($extension,$tabExt)){
                        $title = $_POST['descriptionProduct'];
                        $img_dir = 'uploads/'.date("H-i-s") .$_FILES['userfile']['name'];
                        
                        move_uploaded_file($_FILES['userfile']['tmp_name'] ,$img_dir);
                        
                        $product = new ProductCreation([
                            "nameProduct" => $img_dir,
                            "descriptionProduct" =>  $title,
                        ]);
 
                        $productManager = new ProductManager();
                        $productManager->addProductCreation($product);
                      
                        $_SESSION['message'] = "Votre image est enregistrée !";
                        $_SESSION['msg_type'] = "success";
                        header('Location: index.php?action=productManagement');
                        exit();  
                        
                    }else{
                        $_SESSION['message'] = "Extension de l'image incorrecte !";
                        $_SESSION['msg_type'] = "danger";
                    }
                }else{
                    $_SESSION['message'] = "Problème de formulaire!";
                    $_SESSION['msg_type'] = "danger";
                }
            }
        }else{
            $_SESSION['message'] = "Description Vide!";
            $_SESSION['msg_type'] = "danger";
        } 
    }
    
    $readManager = new ProductManager();       
    $readProduct = $readManager->readAllProduct();

    if(isset($_GET['id'])){

        $deleteId = htmlspecialchars($_GET['id']);
        
        $deleteProduct = new ProductManager();
        $deleteProduct->deleteProduct($deleteId);

        $_SESSION['message'] = "Image supprimée !";
        $_SESSION['msg_type'] = "success";
        header('Location: index.php?action=productManagement');
        exit();
    }
    include("view/admin/menuAdmin/productManagement.php");   
}
function updateProduct(){
    if (!isset($_SESSION['user'])) {
        header('Location: index.php?action=admin');
        exit();
    }
    $updateId = htmlspecialchars($_GET['id']);
    

    $updateManager = new ProductManager();       
    $updateProduct = $updateManager->editProduct($updateId);
    
        if (isset($_POST['update'])) {
            
            $descriptionProduct = htmlspecialchars($_POST['descriptionProduct']);
            $modifId = htmlspecialchars($_GET['id']);
           
            $productManager = new ProductManager();
            
            $productUpdate = new ProductCreation([
               
                'descriptionProduct' => $descriptionProduct,
                'id' => $modifId,  
                ]);
               
            $productManager->updateProduct($productUpdate);

            $_SESSION['message'] = "La fiche a été modifié avec succés !";
            $_SESSION['msg_type'] = "success";
            header('location: index.php?action=productManagement');
            exit();
}
    include("view/admin/menuAdmin/updateProduct.php"); 
}

function creationAccount(){

    if(!isset($_SESSION['user'])){
        header('Location: index.php?action=admin');
        exit();
    }
    if (!empty($_POST))
    {
        
        $name = trim(htmlspecialchars($_POST['nom']));
        $password1 = trim(htmlspecialchars($_POST['password1']));
        $password2 = trim(htmlspecialchars($_POST['password2']));
        $mail = trim(htmlspecialchars($_POST['mail']));
        $validation = true;

        
        if (strlen($name) > 30) {
            $_SESSION['message'] = "Votre nom doit faire moins de 30 caractères";
            $_SESSION['msg_type'] = "danger";
            $validation = false;
        }
        if (strlen($password1) < 8 || strlen($password1) > 25) {
            $_SESSION['message'] = "Votre mot de passe doit être compris entre 8 et 25 caractères";
            $_SESSION['msg_type'] = "danger";
            $validation = false;
        }
        if ($password1 != $password2) {
            $_SESSION['message'] = "Mots de passe différents";
            $_SESSION['msg_type'] = "danger";
            $validation = false;
        }
        if(!empty($_POST['mail']))
        {
            $accountManager = new AccountManager();       
            $data = $accountManager->getByMail($mail);
            
            if($data == true)
            {
                $_SESSION['message'] = "Mail déjà existant";
                $_SESSION['msg_type'] ="danger";
                $validation = false;
            }
        }
        if (empty($name) || empty($password1) || empty($password2) || empty($mail))
        {
            $_SESSION['message'] = "Tous les champs sont obligatoires ";
            $_SESSION['msg_type'] = "danger";
            $validation = false;
        }
        if($validation == true)
        {
            $password1 = password_hash($password1, PASSWORD_DEFAULT);
            
            $users = new AccountCreation([
                "username" => $name,
                "password1" => $password1,
                "mail" => $mail
            ]);

            $accountManager->addAccountCreation($users);

            $_SESSION['message'] = "Votre compte a été crée avec succés !";
            $_SESSION['msg_type'] = "success";
            header('Location: index.php?action=creationAccount');
            exit();
        }
    }  
    include("view/admin/menuAdmin/creationAccount.php");
}


