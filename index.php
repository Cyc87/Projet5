<?php
    
    session_start();

    require "controller/backEndController.php";

        if(isset($_GET['action'])){
            if($_GET['action'] == "home"){
                home();
            }
            else if($_GET['action'] == "contact"){
                contact();  
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
            }else if($_GET['action'] == "furniture"){
                furniture();
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
            }else{
                pageError();
            }
        }else{
            home();
        }