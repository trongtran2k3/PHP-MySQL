<?php
    session_start();
    $_SESSION['size'] = $_POST['size'];
    $_SESSION['count'] = $_POST['count'];
    $_SESSION['tensp'] = $_POST['tensp'];
    $size = isset($_SESSION['size'])?$_SESSION['size']:"";
    if($size==''){
        echo "
        <script>alert('Vui lòng chọn size!')</script>";
        header('refresh:0 ,url=' . $_SERVER['HTTP_REFERER']);
    }else{
        $count = isset($_SESSION['count'])?$_SESSION['count']:"";
        $count_temp = isset($_SESSION['count'])?$_SESSION['count']:"";
        $tensp = isset($_SESSION['tensp'])?$_SESSION['tensp']:"";
        require('../../../account/connect.php');
        $sql_tensp = "SELECT * FROM SANPHAM WHERE TENSP like '$tensp' AND SIZE ='$size'";
        $result_sp = mysqli_query($conn,$sql_tensp);
        $row_sp = mysqli_fetch_assoc($result_sp);
        
        $gia = $row_sp['GIA'];
        $masp = $row_sp['MASP'];
        $mahd =$_SESSION['mahd'];
        $makh =$_SESSION['makh'];

        $test = "SELECT * FROM KHACHHANG WHERE MAKH  = '$makh'";
        $result = mysqli_query($conn,$test);
        if(mysqli_num_rows($result)<=0){
        $sql_khachhang = "INSERT INTO KHACHHANG(`MAKH`,`HOTEN`,`DCHI`,`SODT`,`EMAIL`,`NOTE`)VALUES('$makh','','','','','')";
        mysqli_query($conn,$sql_khachhang);
        }
        //cthd
        $search_cthd = "SELECT * FROM CTHD WHERE MASP='$masp'";
        $result_search= mysqli_query($conn,$search_cthd);
        //temp
        $search_temp = "SELECT * FROM TEMP WHERE MASP='$masp'";
        $result_search_temp= mysqli_query($conn,$search_temp);
        
        $sql_hoadon ="INSERT INTO HOADON(`MAHD`,`NGLHD`,`MAKH`,`TOTAL`,`PTTT`)VALUES('$mahd','','$makh','','')";
        mysqli_query($conn,$sql_hoadon);
        // if(mysqli_query($conn,$sql_hoadon)){
        //     echo "Thêm thành công!";
        // }else{
        //     echo mysqli_error($conn);
        // }

        //cthd
        if(mysqli_num_rows($result_search)>0){
            //cthd
            $up = mysqli_fetch_assoc($result_search);
            $count+=$up['SL'];
            $slcon = (int)$row_sp['SL_CON']-(int)$count; 
            $insert_cthd = "UPDATE CTHD SET SL ='$count' WHERE MASP='$masp'";
            mysqli_query($conn,"UPDATE SANPHAM SET SL_CON ='$slcon' WHERE MASP='$masp'");
        }else{
            //cthd
            $insert_cthd = "INSERT INTO CTHD(`MASP`,`MAHD`,`SIZE`,`SL`,`GIA`)VALUES('$masp','$mahd','$size','$count','$gia')"; 
            $slcon_temp = (int)$row_sp['SL_CON']-(int)$count; 
            mysqli_query($conn,"UPDATE SANPHAM SET SL_CON ='$slcon' WHERE MASP='$masp'");
        }
        //temp
        if(mysqli_num_rows($result_search_temp)>0){
            //temp
            $up_temp = mysqli_fetch_assoc($result_search_temp);
            $count_temp+=$up_temp['SL'];
            $slcon_temp = (int)$row_sp['SL_CON']-(int)$count; 
            $insert_temp = "UPDATE TEMP SET SL ='$count_temp' WHERE MASP='$masp'";
            mysqli_query($conn,"UPDATE SANPHAM SET SL_CON ='$slcon' WHERE MASP='$masp'");
        }else{
           //temp
            $insert_temp = "INSERT INTO TEMP(`MASP`,`MAHD`,`SIZE`,`SL`,`GIA`)VALUES('$masp','$mahd','$size','$count','$gia')"; 
            $slcon_temp = (int)$row_sp['SL_CON']-(int)$count; 
            mysqli_query($conn,"UPDATE SANPHAM SET SL_CON ='$slcon' WHERE MASP='$masp'");
        }
        if(mysqli_query($conn,$insert_cthd)&&mysqli_query($conn,$insert_temp)){
            echo "<script>alert('Thêm thành công!')</script>";
            header("refresh:0, url= giohang.php"); 
        }else{
            // echo "<script>alert('Thêm thất bại!')</script>";
            echo mysqli_error($conn);
        }
    }
?>

