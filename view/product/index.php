<?php
    include "view/theme/header.php";
?>

<a href="index.php?controller=product&action=new">
    Thêm sản phẩm mới
</a>

<table class="my-table">
<tr><th>STT</th><th>Minh họa</th><th>Tên</th><th>Giá</th>
<th>Lượt xem</th>
<th>Người tạo</th>
<th>Xem </th>
<th>Chỉnh sửa</th>
<th>Xóa</th>
</tr>

<?php
    $products = getProducts();
    while($p = mysql_fetch_array($products)){
        echo "<tr><td>$p[id]</td>";
        echo "<td><img src='$p[img]' width=50 height = 50 /></td>";
        echo "<td class ='align-left'>$p[name]</td>";
        echo "<td>$p[price]</td>";
        echo "<td>$p[view]</td>";
        
        $u = getUserById($p['user_id']);
        echo "<td>$u[fullname]</td>";
        
        echo "<td><a href='index.php?controller=product".
        "&action=view&id=$p[id]'>Xem</a></td>";
        
        echo "<td><a href='index.php?controller=product".
        "&action=edit&id=$p[id]'>Sửa</a></td>";
        echo "<td><a href='index.php?controller=product".
        "&action=delete&id=$p[id]'>Xóa</a></td></tr>";
    }
?>
</table>
<?php
    include "view/theme/footer.php";
?>