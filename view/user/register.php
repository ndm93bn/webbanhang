<?php
    include "view/theme/header.php";
?>
<h1>Đăng kí toàn khoản</h1>

<form method="post" action="" id="form-register">
    <label>Tài khoản</label><br />
    <input type="text" name="username" /><br />
    <label>Mật khẩu</label><br />
    <input type="password" name="password"/><br />
    <label>Nhập lại mật khẩu</label><br />
    <input type="password" name="re-password"/><br />
    <label>Họ và tên</label><br />
    <input type="text" name="fullname"/><br />
    <label>Năm sinh: </label>
    <select name="year">
        <?php
            $i = 1950;
            for($i = 1950; $i < 2000; $i++){
                echo "<option value='$i'>$i</option>";
            }
        ?>
    </select><br />
    <label>Thông tin cơ bản</label><br />
    <textarea name="info">
    </textarea><br />
    <input type="checkbox" name="remember" checked/>
    <label>Ghi nhớ đăng nhập</label><br />
    <input type="submit" name="ok" value="Đăng kí"/>
</form>

<?php
    include "view/theme/footer.php";
?>