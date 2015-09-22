<?php
    include "view/theme/header.php";
?>
<br />
<form method="post" action="" id ="form-register">
<h1>Đăng nhập</h1>
<?php
   if(isset($error)){
        echo "<h3 style='color:red'>".$error."</h3>";
    }
?>
<label>Tài khoản</label><br />
<input type="text" name="username"/><br />
<label>Mật khẩu</label><br />
<input type="password" name="password"/><br />
<input type="checkbox" name="remember" checked/>
<label>Ghi nhớ đăng nhập</label><br />
<input type="submit" name="ok" value="Đăng nhập"/>
</form>

<?php
    include "view/theme/footer.php";
?>