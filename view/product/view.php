<?php
    include "view/theme/header.php";
?>
<div id="content">
    <img src="<?php echo $product['img'];?>" width="50%"
        style="float: left;
        border: solid 1px #ccc;
        padding:10px;
        margin:10px;"/>
    <h1>Sản Phẩm:<?php echo $product['name'];?></h1>
    <div id="price">Giá bán: <?php echo $product['price'];?> đ</div>
    <div style="clear: both;"></div>
    <h3>Thông tin sản phẩm</h3>
    <?php echo $product['info'];?>
</div>
<?php
    include "view/theme/footer.php";
?>