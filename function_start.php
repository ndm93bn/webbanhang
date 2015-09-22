<?php
    // Ket noi voi co so du lieu
    $connect_db = mysql_connect(DB_SERVER, DB_USER, DB_PASS)
        or die ("<h1>Error to connect DB");
    $select_db = mysql_select_db(DB_NAME, $connect_db)
        or die ("<h1>Error to select DB");
    
    /**
     * Chuyen trang
     */
    function redirect($url){
        header("location:".$url);
    }
?>