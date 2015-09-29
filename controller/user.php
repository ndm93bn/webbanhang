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
            case "logout":
                session_destroy();
                setcookie("user_id",0,time());
                redirect("index.php");
                break;
                
            default : echo "URL not found";
        }
        
    } else{
        echo "Main user";
    }
    
    function login(){
        //xu ly cookie
        if(isset($_COOKIE['user_id'])){
            $_SESSION['user_id'] = $_COOKIE['user_id'];
            setcookie("user_id", $_SESSION['user_id'],time() + 60*60*24*7);
            redirect("index.php");
        }
        // Xy ly login
         if (isset($_POST['ok'])){
          if($_POST['username'] == "")
            {
               $error = "Chưa nhập username";
            } else if ($_POST['password'] == "")
            {
               $error = "Chưa nhập mật khẩu"; 
            } else {
                $login_ok = 
                    checkUserLogin($_POST['username'], $_POST['password']);
                if($login_ok){
                    $error = "Đăng nhập thành công";
                    if(isset($_POST['remember'])){
                        setcookie("user_id", $_SESSION['user_id'],time() + 60*60*24*7);
                    }
                    redirect("index.php?controller=product");
                }else{
                    $error = "Tài khoản hoặc mật khẩu không đúng";
                }  
            }
        }
        include "view/user/login.php";
    }
    
    function register(){
        // Xu ly dang ki thanh vien moi
        if (isset($_POST['ok'])){
            if($_POST['username'] == "")
            {
               $error = "Chưa nhập username";
            } else if ($_POST['password'] == "")
            {
               $error = "Chưa nhập mật khẩu"; 
            } else if($_POST['re-password'] == "")
            {
                $error = "Chưa nhập lại mật khẩu";
            } else if ($_POST['fullname'] == "")
            {
                $error = "Chưa nhập họ tên";
            } else if($_POST['password'] != $_POST['re-password']){
                $error = "Xác thực mật khẩu không đúng";
            } else{
               insertUser($_POST['username'],
                    $_POST['password'], $_POST['fullname'],
                    $_POST['year'], $_POST['info']);
                    
               // Chuyen sang trang login
               redirect("?controller=user&action=login");
              
            }
        }
        
        include "view/user/register.php";
    }
?>