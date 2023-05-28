<?php 
require('../../../account/connect.php');
   if(isset($_GET['query'])=='sua'){
        $id =$_GET['id'];
        $count =$_GET['count'];
        $sql_update = "UPDATE cthd SET  WHERE MAHD ='$id'";
        mysqli_query($conn,$sql_update);
        header("location: giohang.php");
   }
?>