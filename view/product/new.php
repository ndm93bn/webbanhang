<?php
    include "view/theme/header.php";
?>

<a href="index.php?controller=product">
     Quay lại
</a>
<form method="post" action="" id="form-register"
 enctype="multipart/form-data">
<h3>Thêm sản phẩm mới</h3>
<?php
    if(isset($error)){
        echo "<h3 style='color:red'>".$error."</h3>";
    }
?>
<label>Tên sản phẩm</label><br />
<input type="text" name="name"/><br />
<label>Giá</label>
<input type="text" name="price"/><br />
<label>Ảnh minh họa</label><br />
<input type="file" name="img"/><br />
<label>Thông tin chi tiết</label><br />
<textarea name="info"></textarea><br />
<input type="submit" name="ok" value="Thêm mới"/>


</form>

<?php
    include "view/theme/footer.php";
?>