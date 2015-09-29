<?php
function insertUser($username, $password, $fullname,
    $year, $info){
        $password = md5($password);
        
        $time = time();
        $sql = "insert into users (username, password,"
        ." fullname, year, level, create_time, info) "
        ." values('$username', '$password', '$fullname',"
        ."$year, 1, $time, '$info')";
       
       return mysql_query($sql);    
}

    function checkUserLogin($username, $password)
    {
         $password = md5($password);
         
        $sql = "select * from users where username =
            '$username' and password = '$password'";
        $query = mysql_query($sql);
        if(mysql_num_rows($query) > 0){
            $user = mysql_fetch_array($query);
            $_SESSION['user_id'] = $user['id'];
            return true;
        } else{
            return false;
        } 
    }
    
    function getUserById($id){
        $sql = "select * from users where id =$id";
        $query = mysql_query($sql);
        return  mysql_fetch_array($query);
        
    }
?>