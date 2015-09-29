<?php
// Kiem tra user da dang nhap hay chua
if(isset($_SESSION['user_id'])){
    echo $_SESSION['user_id']."abc";
    $user = getUserById($_SESSION['user_id']);
}else{
   redirect("index.php?controller=user&action=login");
}
// Include view
include "view/v_".$_GET['controller'].".php";
?>