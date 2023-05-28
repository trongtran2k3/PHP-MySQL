<?php
    require('connect.php');
    mysqli_set_charset($conn,"utf8");
    if(!$conn){
        die("Kết nốt không thành công".mysqli_connect_error());
    }else{
        $cre_tb_account = "CREATE TABLE account(
            id_user int AUTO_INCREMENT,
            name_user varchar(50),
            email_user varchar(50),
            pass_user varchar(40),
            primary key(id_user)
        )";
        mysqli_query($conn,$cre_tb_account);
    }
?>