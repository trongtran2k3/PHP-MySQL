
<?php
session_start();
require('connect.php');
$email_user = isset($_POST['email_signin'])?$_POST['email_signin']:"";
$pass_user = isset($_POST['pass_signin'])?$_POST['pass_signin']:"";
$signin_account = "SELECT * FROM account WHERE (email_user LIKE '$email_user') AND (pass_user LIKE '$pass_user')";
$signin_admin = "SELECT * FROM account WHERE (email_user LIKE 'admin@gmail.com') AND (pass_user LIKE 'admin123') GROUP BY id_user";
$result = mysqli_query($conn,$signin_account);
$result_admin = mysqli_query($conn,$signin_admin);
$row  = mysqli_fetch_assoc($result);
$row_admin = mysqli_fetch_assoc($result_admin);
$email_user_error = $email_user;
$_SESSION['email']=$email_user_error;
if($email_user==''||$pass_user==''){
    echo "<script>alert('Email hoặc mật khẩu không để trống!')</script>";
    header("refresh:0 , url = account.php");
}else if($row['email_user']!=$email_user&&$row['pass_user']!=$pass_user){
    echo "<script>alert('Email hoặc mật khẩu không đúng!')</script>";
    header("refresh:0 , url = account.php");
}else if($row_admin['email_user']==$email_user&&$row_admin['pass_user']==$pass_user){
    $_SESSION['account_admin']=$row_admin;
    header("location: ../Storage/folder_php/admin/admin.php");
}else if($row['email_user']==$email_user&&$row['pass_user']==$pass_user){
    $_SESSION['account_user']=$row;
    $_SESSION['makh']= "mmt".random_int(10,99)."kh".random_int(100,999);
    $_SESSION['mahd']= "mmt".random_int(100,999)."hd".random_int(10,99);
    $makh=  $_SESSION['makh'];
    $sql_khachhang = "INSERT INTO KHACHHANG(`MAKH`,`HOTEN`,`DCHI`,`SODT`,`EMAIL`,`NOTE`)
    VALUES('$makh','','','','','')";
    mysqli_query($conn,$sql_khachhang);
    header("location: ../Z-index.php");
}
?>