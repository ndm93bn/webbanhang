<?php
    function insertProduct($name, $price, $info, $img){
        $time = time();
        $sql = "insert into products
        (name,price,info,img, user_id, create_at)
        values('$name',$price,'$info','$img',$_SESSION[user_id],$time)";
        echo $sql;
        mysql_query($sql);
        
    }
?>