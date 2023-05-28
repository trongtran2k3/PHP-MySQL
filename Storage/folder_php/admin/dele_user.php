<?php
    require('../../../account/connect.php');
    if(isset($_GET['query'])=='xoauser'){
        $ma = $_GET['id_user'];
        $sql  = "DELETE FROM account WHERE id_user like '$ma'";
        
        if(mysqli_query($conn,$sql)){
            header("location: user.php");
        }else{
            echo "<br>Xóa không thành công!".mysqli_error($conn);
        }
    }
?>