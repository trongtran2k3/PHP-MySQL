<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $conn = mysqli_connect($host,$username,$password,'');
    mysqli_set_charset($conn,"utf8");
    if(!$conn){
        die('<br>Kết nối không thành công!'.mysqli_connect_error());
    }else{
        echo "<br>Kết nối thành công!";
    }
?>