<?php
    require('../../../account/connect.php');
    if(isset($_GET['query'])=='xoa'){
        $ma = $_GET['id_sp'];
        $sql  = "DELETE FROM sanpham WHERE MASP like '$ma'";
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('Xóa thành công!')</script>";
            header("refresh:0,url=  sanpham.php");
        }else{
            echo "<br>Xóa không thành công!".mysqli_error($conn);
        }
    }
?>