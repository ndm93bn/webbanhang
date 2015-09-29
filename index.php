<?php
session_start();
// Config website
include "configs.php";

// Chay ham khoi dau
include "function_start.php";

//include model
include "model/user.php";
include "model/product.php";
        

// Neu co Controller thi load controller
if (isset($_GET['controller'])){
    // Load Controller
    include "controller/".$_GET['controller'].".php";
}else{
    // Neu khong co controller thi load trang chu
    redirect("index.php?controller=home");
}

?>
