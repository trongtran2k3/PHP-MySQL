<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sữa</title>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
    <main>
    <?php
        session_start();
        $admin = $_SESSION['account_admin'];
    ?>
    <main>
        <div class="main_left">
            <form >
                <label for=""><div class="name"><a href="../../../Z-index.php">MaMiTi</a></div></label>
                <a style="height: 120px;" href="../../../Z-index.php"><img style="width: 100px;height: 100px;" src="../../../Mamiti.png" alt=""></a>
                <a href="admin.php">Chào:  <b><?php echo $admin['name_user'];?></b></a>
                <a href="../../../Z-index.php"><i class="fa-solid fa-people-roof"></i> Shop</a>
                <a href="hoadon.php"><i class="fa-solid fa-bars"></i>  Hóa đơn</a>
                <a href="sanpham.php"><i class="fa-solid fa-store"></i>  Sản phẩm</a>
                <a href="khachhang.php"> Khách hàng</a>
                <a href="cthd.php">CTHD</a>
                <a href="user.php"><i class="fa-solid fa-user"></i>  User</a>
                <a href="../../../account/account.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
            </form>
        </div>
        <div class="change">
            <form method="post">
                    <?php
                        require('../../../account/connect.php');
                        if(isset($_GET['query']) =='suahd'){
                            $ma = isset($_GET['id_hd'])?$_GET['id_hd']:"";
                            $sanpham = "SELECT * FROM hoadon WHERE MAHD = '$ma'";
                            $result = mysqli_query($conn,$sanpham);
                            $row = mysqli_fetch_assoc($result);
                        }
                    ?>
                <form  method="post">
                    <table class="tb_change">
                                <tr>
                                    <th><label>MAHD</label></th>
                                    <th><input type="text" name="MAHD" value="<?php echo $row['MAHD'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>NGLHD</label></th>
                                    <th><input type="text" name="NGLHD" value="<?php echo $row['NGLHD'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>MAKH</label></th>
                                    <th><input type="text" name="MAKH" value="<?php echo $row['MAKH'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>TOTAL</label></th>
                                    <th><input type="text" name="TOTAL" value="<?php echo $row['TOTAL'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>PTTT</label></th>
                                    <th><input type="text" name="PTTT" value="<?php echo $row['PTTT'];?>"></th>
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        <input style="font-weight: bold; font-size: 14px;" type="submit" name="sub" class="btn" id="sub" value="Thay đổi">
                                        <a style="margin-left: 50px;background-color: bisque;" class="btn" href="admin.php">Về trang chủ</a>
                                    </th>
                                </tr>
                    </table>
                </form>
                            <?php
                                require('../../../account/connect.php');
                                $MAHD  =  isset($_POST['MAHD'])?$_POST['MAHD']:"";
                                $NGLHD  =  isset($_POST['NGLHD'])?$_POST['NGLHD']:"";
                                $MAKH  =  isset($_POST['MAKH'])?$_POST['MAKH']:"";
                                $TOTAL  =  isset($_POST['TOTAL'])?$_POST['TOTAL']:"";
                                $PTTT  =  isset($_POST['PTTT'])?$_POST['PTTT']:"";
                                
                                $update = "UPDATE hoadon SET  NGLHD = '$NGLHD', MAKH = '$MAKH', TOTAL = '$TOTAL', PTTT = '$PTTT' WHERE MAHD = '$MAHD'";
                                
                                if(isset($_POST['sub'])){
                                    mysqli_query($conn,$update);
                                    header("location: hoadon.php");
                                }
                                mysqli_close($conn);
                            ?>
            </form>
        </div>
    </main>
</body>
</html>