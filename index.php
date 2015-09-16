<?php
session_start();

// Config website
include "configs.php";

// Chay ham khoi dau
include "function_start.php";

// Neu co Controller thi load controller
if (isset($_GET['controller'])){
    // Load Controller
    include "controller/".$_GET['controller'].".php";
}

?>