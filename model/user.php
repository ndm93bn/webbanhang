<?php
function insertUser($username, $password, $fullname,
    $year, $info){
        $time = time();
        $sql = "insert into users (username, password,"
        ." fullname, year, level, create_time, info) "
        ." values('$username', '$password', '$fullname',"
        ."$year, 1, $time, '$info')";
       
       return mysql_query($sql);    
}

    function checkUserLogin($username, $password)
    {
        $sql = "select * from users where username =
            '$username' and password = '$password'";
        $query = mysql_query($sql);
        if(mysql_num_rows($query) > 0){
            return true;
        } else{
            return false;
        } 
    }
?>