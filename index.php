<?php
    
    session_start();

    require "model/entities/Account.php";
    require "model/managers/AccountManager.php";

    require "model/entities/Product.php";
    require "model/managers/ProductManager.php";

    require "controller/FrontEndController.php";
    require "controller/backEndController.php";

    
    
    $readSearchProduct="";

        if(isset($_GET['action'])){
            if($_GET['action'] == "home"){
                home();
            }else if($_GET['action'] == "login"){
                login();
            }else if($_GET['action'] == "admin"){
                admin();
            }else if($_GET['action'] == "productManagement"){
                productManagement();
            }else if($_GET['action'] == "updateProduct"){
                updateProduct();
            }else if($_GET['action'] == "beautifulCrates"){
                beautifulCrates();
            } else if ($_GET['action'] == "fineFurnishing") {
                fineFurnishing();
            }else if($_GET['action'] == "deconnexion"){
                deconnexion();
            }else if($_GET['action'] == "creationAccount"){
                creationAccount();
            }else if($_GET['action'] == "contact"){
                contact();  
            } else if ($_GET['action'] == "legalNotice") {
            legalNotice();
            }else if($_GET['action'] == "about"){
                about();
            }else if($_GET['action'] == "univers"){
                univers();
            }else if($_GET['action'] == "crates"){
                crates();
            }else if($_GET['action'] == "castor"){
                castor();
            }else if($_GET['action'] == "chair"){
                chair();
            }else if($_GET['action'] == "table"){
                table();
            }else if($_GET['action'] == "chest"){
                chest();
            }else if($_GET['action'] == "buffet"){
                buffet();
            }else if($_GET['action'] == "cabinet"){
                cabinet();
            }else if($_GET['action'] == "etageres"){
                etageres();
            }else if($_GET['action'] == "makeoverFurniture"){
                makeoverFurniture();
            }else if($_GET['action'] == "decorationBoard"){
                decorationBoard();
            }else if($_GET['action'] == "salePainting"){
                salePainting();
            }else if($_GET['action'] == "creativeAisles"){
                creativeAisles();
            } else if ($_GET['action'] == "beautifullWall") {
                beautifullWall();
            }else if ($_GET['action'] == "wall") {
                wall();
            }else if ($_GET['action'] == "search") {
                search($readSearchProduct);
            }else{
                pageError();
            }
        }else{
            home();
        }
