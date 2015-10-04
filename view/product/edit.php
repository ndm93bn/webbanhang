<?php
    include "view/theme/header.php";
?>

<a href="index.php?controller=product">
     Quay lại
</a>
<form method="post" action="" id="form-register"
 enctype="multipart/form-data">
<h3>Chỉnh sửa sản phẩm</h3>
<?php
    if(isset($error)){
        echo "<h3 style='color:red'>".$error."</h3>";
    }
?>
<label>Tên sản phẩm</label><br />
<input type="text" name="name"
 value="<?php echo $product['name'] ;?>"/><br />
<label>Giá</label>
<input type="text" name="price"
 value="<?php echo $product['price'] ;?>"/><br />
<label>Ảnh minh họa</label><br />
<img src="<?php echo $product['img'];?>" width="50px" 
    height="50px"/>
<input type="file" name="img"/><br />
<label>Thông tin chi tiết</label><br />
<textarea name="info"><?php echo $product['info'] ;?></textarea><br />
<input type="submit" name="ok" value="Chỉnh sửa"/>


</form>

<?php
    include "view/theme/footer.php";
?>