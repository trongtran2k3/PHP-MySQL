<?php
    require('../../../account/connect.php');
    if(isset($_GET['query'])=='xoakh'){
        $ma = $_GET['id_kh'];
        $sql  = "DELETE FROM khachhang WHERE MAKH like '$ma'";
        
        if(mysqli_query($conn,$sql)){
            header("location: khachhang.php");
        }else{
            echo "<br>Xóa không thành công!".mysqli_error($conn);
        }
    }
?>