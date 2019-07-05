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

    if(!empty($_FILES['userfile'])){
 
    $extension = array('jpg', 'JPG','jepg', 'png', 'gif');
    $file_ext = explode('.',$_FILES['userfile']['name']);
    $file_ext[0];
    $file_ext = end($file_ext);
    
    if(!in_array($file_ext, $extension)){

        $ext_error = true;
        $_SESSION['message'] = "Votre image n'est pas valide !";
        $_SESSION['msg_type'] = "danger";
    }
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
} 
    $readManager = new PhotoManager();       
    $readImages = $readManager->readAllImage();

    include("view/photoManagement.php");
}
function deleteImage(){
    
    
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
            $message =
                '<html>
                    <body>
                        <div align="center">
                            <u>Nom de l\'expéditeur :</u>'.$name.'<br />
                            <u>Mail de l\'expéditeur :</u>'.$mail.'<br />
                            <br />
                            '.nl2br($content).'
                            <br />
                        </div>
                    </body>
                </html>';

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

