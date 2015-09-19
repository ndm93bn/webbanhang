<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch ($action){
            case "login":
                login();
                break;
            case "register":
                register();
                break;
            default : echo "URL not found";
        }
        
    } else{
        echo "Main user";
    }
    
    function login(){
        echo "login";
    }
    
    function register(){
        include "view/user/register.php";
    }
?>