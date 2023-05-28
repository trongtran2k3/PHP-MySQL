<?php
require('connect.php');
$name_user = isset($_POST['name'])?$_POST['name']:"";
$email_user = isset($_POST['email'])?$_POST['email']:"";
$pass_user = isset($_POST['password'])?$_POST['password']:"";
if($name_user!=''&&$email_user!=''&&$pass_user!=''){
    $ins_tb_user = "INSERT INTO account(`name_user`,`email_user`,`pass_user`)VALUES('$name_user','$email_user','$pass_user')";
    if(mysqli_query($conn,$ins_tb_user)){
        echo "<script>alert('Đăng ký thành công!')</script>";
        header("refresh:0 ,url = account.php");
    } else
    {
        echo "<br>Đăng ký thất bại!".mysqli_error($conn);
    }
}
?>
