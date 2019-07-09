<?php

    function home(){

        include("view/home.php");
    }

     function crates(){

        $readManager = new PhotoManager();       
        $readImages = $readManager->readAllImage();

    include("view/crates.php");
}
function castor(){
    
    $readManager = new PhotoManager();       
    $readImages = $readManager->readAllImage();

    include("view/crates.php");
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

    $readManager = new PhotoManager();       
    $readImages = $readManager->readAllImage();

    include("view/etageres.php");
}
function beautifulCrates(){
   

    include("view/beautifulCrates.php");
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
?>