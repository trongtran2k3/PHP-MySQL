
<?php
    session_start();
    $makh = $_SESSION['makh'];
    $mahd = $_SESSION['mahd'];
    require('../../../account/connect.php');
    $email_user = isset($_POST['email'])?$_POST['email']:"";
    $fullname = isset($_POST['fullname'])?$_POST['fullname']:"";
    $phone = isset($_POST['phone'])?$_POST['phone']:"";
    $address = isset($_POST['address'])?$_POST['address']:"";
    $city = isset($_POST['provice'])?$_POST['provice']:"";
    $note = isset($_POST['note'])?$_POST['note']:"";
    $total = isset($_POST['total'])?$_POST['total']:"";
    $pttt =  isset($_POST['pttt'])?$_POST['pttt']:"";
    $date = date("Y-m-d H:i:s");
    if($total==0){
        echo "<script>alert('Không có đơn hàng thanh toán! Quay lại shop mua hàng!')</script>";
        header("refresh:0, url= ../../../allin.php");
    }else if($email_user!=''&&$fullname!=''&&$address!=''&&$city!=''&&$phone!=''&&$pttt!=''){
        $test = "SELECT * FROM KHACHHANG WHERE MAKH  = '$makh'";
        $result = mysqli_query($conn,$test);
        if(mysqli_num_rows($result)>0){
            $sql_khachhang = "UPDATE KHACHHANG SET HOTEN = '$fullname',DCHI='$address, $city',SODT='$phone',EMAIL='$email_user',NOTE='$note' WHERE MAKH ='$makh'";
        }else{
            $sql_khachhang = "INSERT INTO khachhang(`MAKH`,`HOTEN`,`DCHI`,`SODT`,`EMAIL`,`NOTE`)VALUES('$makh','$fullname','$address, $city','$phone','$email_user','$note')";
        }
        if(mysqli_query($conn,$sql_khachhang)){
            $update_hoadon = "UPDATE HOADON SET NGLHD ='$date',MAKH='$makh',TOTAL='$total',PTTT='$pttt' WHERE MAHD ='$mahd'";
            $dele_cart = "DELETE FROM TEMP";
            mysqli_query($conn,$update_hoadon);
            mysqli_query($conn,$dele_cart);
            $_SESSION['mahd']= "mmt".random_int(100,999)."hd".random_int(10,99);
            echo "<script>alert('Đặt hàng thành công!')</script>";
            header("refresh:0,url = ../../../allin.php");
        }
    }
?> 