<?php
    require('../../../account/connect.php');
    if(isset($_GET['query'])=='xoacthd'){
        $ma = $_GET['id_cthd'];
        $sql  = "DELETE FROM CTHD WHERE MAHD like '$ma'";
        
        if(mysqli_query($conn,$sql)){
            header("location: cthd.php");
        }else{
            echo "<br>Xóa không thành công!".mysqli_error($conn);
        }
    }
?>