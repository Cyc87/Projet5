<?php
    
    session_start();

    require "model/entities/Account.php";
    require "model/entities/Product.php";

    require "model/managers/AccountManager.php";
    require "model/managers/ProductManager.php";

    require "controller/FrontEndController.php";
    require "controller/backEndController.php";

    
    
    
    $readSearchProduct="";
    

        if(isset($_GET['action'])){
            if($_GET['action'] == "home"){
                CYC\Projet5\controller\FrontEndController\home();
            }else if($_GET['action'] == "login"){
                CYC\Projet5\controller\backEndController\login();
            }else if($_GET['action'] == "admin"){
                CYC\Projet5\controller\backEndController\admin();
            }else if($_GET['action'] == "productManagement"){
                CYC\Projet5\controller\backEndController\productManagement();
            }else if($_GET['action'] == "updateProduct"){
                CYC\Projet5\controller\backEndController\updateProduct();
            }else if($_GET['action'] == "beautifullCrates"){
                CYC\Projet5\controller\FrontEndController\beautifullCrates();
            } else if ($_GET['action'] == "fineFurnishing") {
                CYC\Projet5\controller\FrontEndController\fineFurnishing();
            }else if($_GET['action'] == "deconnexion"){
                CYC\Projet5\controller\backEndController\deconnexion();
            }else if($_GET['action'] == "creationAccount"){
                CYC\Projet5\controller\backEndController\creationAccount();
            }else if($_GET['action'] == "contact"){
                CYC\Projet5\controller\FrontEndController\contact();  
            } else if ($_GET['action'] == "legalNotice") {
                CYC\Projet5\controller\FrontEndController\legalNotice();
            }else if($_GET['action'] == "about"){
                CYC\Projet5\controller\FrontEndController\about();
            }else if($_GET['action'] == "univers"){
                CYC\Projet5\controller\FrontEndController\univers();
            }else if($_GET['action'] == "crates"){
                CYC\Projet5\controller\FrontEndController\crates();
            }else if($_GET['action'] == "castor"){
                CYC\Projet5\controller\FrontEndController\castor();
            }else if($_GET['action'] == "chair"){
                CYC\Projet5\controller\FrontEndController\chair();
            }else if($_GET['action'] == "table"){
                CYC\Projet5\controller\FrontEndController\table();
            }else if($_GET['action'] == "chest"){
                CYC\Projet5\controller\FrontEndController\chest();
            }else if($_GET['action'] == "buffet"){
                CYC\Projet5\controller\FrontEndController\buffet();
            }else if($_GET['action'] == "cabinet"){
                CYC\Projet5\controller\FrontEndController\cabinet();
            }else if($_GET['action'] == "etageres"){
                CYC\Projet5\controller\FrontEndController\etageres();
            }else if($_GET['action'] == "makeoverFurniture"){
                CYC\Projet5\controller\FrontEndController\makeoverFurniture();
            }else if($_GET['action'] == "decorationBoard"){
                CYC\Projet5\controller\FrontEndController\decorationBoard();
            }else if($_GET['action'] == "salePainting"){
                CYC\Projet5\controller\FrontEndController\salePainting();
            }else if($_GET['action'] == "creativeAisles"){
                CYC\Projet5\controller\FrontEndController\creativeAisles();
            } else if ($_GET['action'] == "beautifullWall") {
                CYC\Projet5\controller\FrontEndController\beautifullWall();
            }else if ($_GET['action'] == "wall") {
                CYC\Projet5\controller\FrontEndController\wall();
            }else if ($_GET['action'] == "search") {
                CYC\Projet5\controller\FrontEndController\search($readSearchProduct);
            }else{
                CYC\Projet5\controller\FrontEndController\pageError();
            }
        }else{
            CYC\Projet5\controller\FrontEndController\home();
        }
