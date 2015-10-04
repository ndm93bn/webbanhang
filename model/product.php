<?php
    function insertProduct($name, $price, $info, $img){
        $time = time();
        $sql = "insert into products
        (name,price,info,img, user_id, create_at)
        values('$name',$price,'$info','$img',$_SESSION[user_id],$time)";
        echo $sql;
        mysql_query($sql);
        
    }
    
    function getProducts(){
        $sql = "select * from products";
        return mysql_query($sql);
    }
    
    function getProductById($id){
        $sql = "select * from products where id =$id";
        $query =  mysql_query($sql);
        return mysql_fetch_array($query);
    }
    
    function deleteOneProduct($id){
        $sql = "delete from products where id = $id";
        mysql_query($sql);
       
    }
    
    function  updateProduct($p){
        $sql = "update products set name = '$p[name]',
            price = $p[price] ,img = '$p[img]' ,
            info = '$p[info]' where id = $p[id]";
            echo $sql;
        mysql_query($sql);
        
    }
?>