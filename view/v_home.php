<?php
    include "view/theme/header.php";
?>
<h1>Xin chào <?php echo $user['fullname'];?> </h1>
<a href="index.php?controller=user&action=logout">Đăng xuất</a>

<?php
    include "view/theme/footer.php";
?>