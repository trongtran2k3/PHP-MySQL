<?php
    $host = 'localhost';
    $username = 'root';
    $db = 'web_ban_hang';
    $conn = mysqli_connect($host,$username,'',$db);
    mysqli_set_charset($conn,"utf8");
    if(!$conn){
        die("Kết nốt không thành công".mysqli_connect_error());
    }
?>