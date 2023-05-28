<?php
    require('../../../account/connect.php');
    if(isset($_GET['query'])=='xoahd'){
        $ma = $_GET['id_hd'];
        $sql  = "DELETE FROM HOADON WHERE MAHD like '$ma'";
        $sql_cthd  = "DELETE FROM CTHD WHERE MAHD like '$ma'";
        mysqli_query($conn,$sql_cthd);  
        if(mysqli_query($conn,$sql)){
            header("location: hoadon.php");
        }else{
            echo "<br>Xóa không thành công!".mysqli_error($conn);
        }
    }
    if(isset($_GET['query'])=='xoahd_ktradonhang'){
        $ma = $_GET['id_hd'];
        $sql  = "DELETE FROM HOADON WHERE MAHD like '$ma'";
        $sql_cthd  = "DELETE FROM CTHD WHERE MAHD like '$ma'";
        mysqli_query($conn,$sql_cthd);  
        if(mysqli_query($conn,$sql)){
            header("location: ../../../DonHang/ktra_donhang.php");
        }else{
            echo "<br>Xóa không thành công!".mysqli_error($conn);
        }
    }
?>