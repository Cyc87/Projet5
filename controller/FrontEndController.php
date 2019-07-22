<?php
    function home(){
        
        include("view/home.php");
    }

     function crates(){

        $readManager = new ProductManager();       
        $readCratesProduct = $readManager->readCratesProduct();

    include("view/crates.php");
}
function castor(){
    
    $readManager = new ProductManager();
    $readCastorProduct = $readManager->readCastorProduct();

    include("view/castor.php");
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

    $readManager = new ProductManager();
    $readChairProduct = $readManager->readChairProduct();

    include("view/chair.php");
}
function table(){
    $readManager = new ProductManager();
    $readTableProduct = $readManager->readTableProduct();

    include("view/table.php");
}
function chest(){
    $readManager = new ProductManager();
    $readChestProduct = $readManager->readChestProduct();

    include("view/chest.php");
}
function buffet(){
    $readManager = new ProductManager();
    $readBuffetProduct = $readManager->readBuffetProduct();

    include("view/buffet.php");
}
function wall(){
    $readManager = new ProductManager();
    $readWallProduct = $readManager->readWallProduct();

    include("view/wall.php");
}
function prettyDecoration()
{
    $readManager = new ProductManager();
    $readPrettyDecorationProduct = $readManager->readPrettyDecorationProduct();

    include("view/prettyDecoration.php");
}
function cabinet(){
    $readManager = new ProductManager();
    $readCabinetProduct = $readManager->readCabinetProduct();

    include("view/cabinet.php");
}
function etageres(){

    $readManager = new ProductManager();       
    $readEtagereProduct = $readManager->readEtagereProduct();

    include("view/etageres.php");
}
function beautifulCrates()
{
    $readManager = new ProductManager();
    $readAllBeautifulCratesProduct = $readManager->readAllBeautifulCratesProduct();

    include("view/beautifulCrates.php");
}
function fineFurnishing()
{
    $readManager = new ProductManager();
    $readAllFineFurnishingProduct = $readManager->readAllFineFurnishingProduct();

    include("view/fineFurnishing.php");
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