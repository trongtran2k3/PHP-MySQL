<?php
    require('connect.php');
    $cre_database = "CREATE DATABASE web_ban_hang";
    if(!mysqli_query($conn,$cre_database)){
        echo "<br>Tạo database không thành công!";
    }else{
        echo "<br>Tạo database thành công!";
        
        
    }
    mysqli_close($conn);
?>