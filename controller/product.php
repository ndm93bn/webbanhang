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
            case "edit": 
                editProduct($_GET['id']); 
                break;   
            case "view": 
                viewProduct($_GET['id']); 
                break;   
            case "delete":
                deleteProduct($_GET['id']);
                break;
            default : echo "URL not found";
        }
        
    } else{
        include "view/product/index.php";
    }

function viewProduct($id){
    $product = getProductById($id);
    include "view/product/view.php";
}
function editProduct($id){
    $product = getProductById($id);
    
     if(isset($_POST['ok'])){
        if($_POST['name']==""){
            $error = "Chưa nhập tên sản phẩm";
        } else if($_POST['price']==""){
            $error = "Chưa nhập giá sản phẩm";
        } else{
            
            if($_FILES['img']['name'] != ""){
                $img_name = "images/".md5($_FILES['img']['name'].time()).".png";
                move_uploaded_file($_FILES["img"]["tmp_name"], 
                $img_name);
                $product['img'] = $img_name;
             }
           
           $product['name'] = $_POST['name'];
           $product['price'] = $_POST['price'];
           $product['info'] = $_POST['info'];
            
           updateProduct($product);
            
           $error = "Chỉnh sửa thành công";
           
        }
    }
    
    include "view/product/edit.php";
}

function deleteProduct($id){
    deleteOneProduct($id);
    redirect("index.php?controller=product");
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
            $img_name = "images/".md5($_FILES['img']['name'].time()).".png";
            
            move_uploaded_file($_FILES["img"]["tmp_name"], 
            $img_name);
            
            insertProduct($_POST['name'], $_POST['price'],
            $_POST['info'],$img_name);
            
            $error = "Thêm sản phẩm mới thành công";
            
            redirect("index.php?controller=product");
        }
    }
    include "view/product/new.php";
}
?>