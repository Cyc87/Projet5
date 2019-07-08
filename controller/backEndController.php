<?php

function home(){

    include("view/home.php");
}
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
    include("view/login.php");  
}
function admin(){

    if (!isset($_SESSION['user'])) {
            header('Location: index.php?action=login');
            exit();
    }

    $accountManager = new AccountManager();       
    $data = $accountManager->sessionUser($_SESSION['user']);
    
    include("view/admin.php");   
}
function deconnexion(){

    session_destroy();
    
    header('Location: index.php?action=home');
    exit();  

    include("view/deconnexion.php");
}
function photoManagement(){

    if(!isset($_SESSION['user']))
    {
        header('Location: index.php?action=login');
        exit();
    }
    if(isset($_POST) && !empty($_POST)){
        
        if(!empty($_FILES['userfile']['name'])){
            
            if($_FILES['userfile']['error'] == 0){

                if($_FILES['userfile']['size'] > 5000000){
                    $_SESSION['message'] = "Image trop volumineuse!";
                    $_SESSION['msg_type'] = "danger";
                }
                $extension = strrchr($_FILES['userfile']['name'],'.');
                var_dump( $extension);
                $tabExt = array('.jpg','.gif','.png','.jpeg','.PNG','.JPG');
                var_dump($tabExt);

                if (in_array($extension,$tabExt)){

                    $img_dir = 'uploads/'.$_FILES['userfile']['name'];
            
                    move_uploaded_file($_FILES['userfile']['tmp_name'],$img_dir);
                    
                    $images = new PhotoCreation([
                        "namePhoto" => $img_dir,
                    ]);

                    $photoManager = new PhotoManager();
                    $photoManager->addPhotoCreation($images);

                    $_SESSION['message'] = "Votre image est enregistrée !";
                    $_SESSION['msg_type'] = "success";
                    header('Location: index.php?action=photoManagement');
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
    }

    $readManager = new PhotoManager();       
    $readImages = $readManager->readAllImage();

    if(isset($_GET['id'])){

        $deleteId = htmlspecialchars($_GET['id']);
        
        $deletePhoto = new PhotoManager();
        $deletePhoto->deletePhoto($deleteId);

        $_SESSION['message'] = "Image supprimée !";
        $_SESSION['msg_type'] = "success";
        header('Location: index.php?action=photoManagement');
        exit();
    }
    include("view/photoManagement.php");   
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
    include("view/creationAccount.php");
}
function about(){

    include("view/about.php");
}
function contact(){
    if(isset($_POST['sendMail'])){

        $name = htmlspecialchars($_POST['name']);
        $mail = htmlspecialchars($_POST['mail']);
        $content = htmlspecialchars($_POST['message']);

        if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['message'])){

            $to      = 'chenalcyril87@gmail.com';
            $subject = 'the subject';
            $message = $_POST['message'];
                
            $headers = array(
                'From' => 'chenalcyril87@gmail.com',
                'Reply-To' => 'chenalcyril87@gmail.com',
                'X-Mailer' => 'PHP/' . phpversion()
            );

            mail($to, $subject, $message, $headers); 
            
            
            $_SESSION['message'] = "Le message est bien envoyé ! ";
            $_SESSION['msg_type'] = "success";
            header('Location:index.php?action=contact');
            exit();
            
        }else{
            $_SESSION['message'] = "Tous les champs sont obligatoires ! ";
            $_SESSION['msg_type'] = "danger";
            header('Location:index.php?action=contact');
            exit();
        }
    }
    include("view/contact.php");
}
function univers(){

    include("view/univers.php");
}
function pageError(){
    
   include("view/pageError.php");
}
function crates(){
    
   include("view/crates.php");
}
function castor(){
    
   include("view/castor.php");
}
function chair(){

    include("view/chair.php");
}
function table(){

    include("view/table.php");
}
function furniture(){

    include("view/furniture.php");
}
function buffet(){

    include("view/buffet.php");
}
function cabinet(){

    include("view/cabinet.php");
}
function etageres(){

    include("view/etageres.php");
}
function makeoverFurniture(){

    include("view/makeoverFurniture.php");
}
function decorationBoard(){

    include("view/decorationBoard.php");
}
function salePainting(){

     include("view/salePainting.php");
}
function creativeAisles(){

     include("view/creativeAisles.php");
}

