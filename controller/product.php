<?php

if(isset($_SESSION['user_id'])){
    $user = getUserById($_SESSION['user_id']);
}else{
   redirect("index.php?controller=user&action=login");
}

if(isset($_GET['action'])){
        
        $action = $_GET['action'];
        switch ($action){
            case "new": 
                newProduct(); 
                break;   
            default : echo "URL not found";
        }
        
    } else{
        include "view/product/index.php";
    }
    
function newProduct(){
  
    if(isset($_POST['ok'])){
        if($_POST['name']==""){
            $error = "Chưa nhập tên sản phẩm";
        } else if($_POST['price']==""){
            $error = "Chưa nhập giá sản phẩm";
        } else if($_FILES['img']['name'] == ""){
            $error = "Chưa thêm ảnh sản phẩm";
        } else{
            insertProduct($_POST['name'], $_POST['price'],
            $_POST['info'],$_FILES['img']['name']);
            
            $error = "Thêm sản phẩm mới thành công";
        }
    }
    include "view/product/new.php";
}
?>