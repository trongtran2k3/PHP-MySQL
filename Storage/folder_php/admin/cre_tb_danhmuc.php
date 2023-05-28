<?php
    require('C:/xampp/htdocs/web 2023 remake/account/connect.php');
    mysqli_set_charset($conn,"utf8");
    if(!$conn){
        die("Kết nốt không thành công".mysqli_connect_error());
    }else{
        $cre_tb_danhmuc = "CREATE TABLE danhmuc(
            id_dm varchar(50),
            ten_dm varchar(50),
            primary key(id_dm)
        )";
        
        
        $insert_danhmuc = "INSERT INTO danhmuc(`id_dm`,`ten_dm`) 
        VALUES('1','TẤT CẢ SẢN PHẨM'),
        ('2','DAVIES ORIGINAL'),
        ('3','DAVIES BRAND'),
        ('4','DAVIES LAB'),
        ('5','KIỂM TRA ĐƠN HÀNG'),
        ('6','TUYỂN DỤNG')
        ";
        ;
        if(mysqli_query($conn,$cre_tb_danhmuc)&&mysqli_query($conn,$insert_danhmuc))
        {
            echo "<br>Tạo danh mục thành công!";
        }
        else{
            echo "<br>Tạo danh mục thất bại!";
        }
    }
?>