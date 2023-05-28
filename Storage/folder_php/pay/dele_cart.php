<?php 
require('../../../account/connect.php');
   if(isset($_GET['query'])=='xoa'){
        $id =$_GET['id'];
        $sql_dele = "DELETE FROM CTHD WHERE MASP ='$id'";
        $sql_dele_temp = "DELETE FROM TEMP WHERE MASP ='$id'";
        $sql_sp = "SELECT * FROM SANPHAM WHERE MASP = '$id'";
        $sql_cthd = "SELECT * FROM CTHD WHERE MASP = '$id'";
        $row_sp = mysqli_fetch_assoc(mysqli_query($conn,$sql_sp));
        $row_cthd = mysqli_fetch_assoc(mysqli_query($conn,$sql_cthd));
        $sl_cthd = $row_cthd['SL'];
        $slcon_sp = (int)$row_sp['SL_CON']+(int)$sl_cthd; 
        mysqli_query($conn,"UPDATE SANPHAM SET SL_CON ='$slcon_sp' WHERE MASP ='$id'");
        if(mysqli_query($conn,$sql_dele)){
         mysqli_query($conn,$sql_dele_temp);
         echo "<script>alert('Xóa thành công!')</script>";
        header("refresh:0 , url =  giohang.php");
        }
   }
?>