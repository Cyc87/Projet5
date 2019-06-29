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
            }else if($_GET['action'] == "concept"){
                concept();
            }else{
                pageError();
            }
        }else{
            home();
        }