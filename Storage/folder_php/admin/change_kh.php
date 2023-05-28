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
                        if(isset($_GET['query']) =='suakh'){
                            $ma = isset($_GET['id_kh'])?$_GET['id_kh']:"";
                            $sanpham = "SELECT * FROM khachhang WHERE MAKH = '$ma'";
                            $result = mysqli_query($conn,$sanpham);
                            $row = mysqli_fetch_assoc($result);
                        }
                    ?>
                <form  method="post">
                    <table class="tb_change">
                                <tr>
                                    <th><label>MAKH</label></th>
                                    <th><input type="text" name="MAKH" value="<?php echo $row['MAKH'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>HOTEN</label></th>
                                    <th><input type="text" name="HOTEN" value="<?php echo $row['HOTEN'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>DCHI</label></th>
                                    <th><input type="text" name="DCHI" value="<?php echo $row['DCHI'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>SODT</label></th>
                                    <th><input type="text" name="SODT" value="<?php echo $row['SODT'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>EMAIL</label></th>
                                    <th><input type="text" name="EMAIL" value="<?php echo $row['EMAIL'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>NOTE</label></th>
                                    <th><input type="text" name="NOTE" value="<?php echo $row['NOTE'];?>"></th>
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
                                $MAKH  =  isset($_POST['MAKH'])?$_POST['MAKH']:"";
                                $HOTEN  =  isset($_POST['HOTEN'])?$_POST['HOTEN']:"";
                                $DCHI  =  isset($_POST['DCHI'])?$_POST['DCHI']:"";
                                $SODT  =  isset($_POST['SODT'])?$_POST['SODT']:"";
                                $EMAIL  =  isset($_POST['EMAIL'])?$_POST['EMAIL']:"";
                                $NOTE  =  isset($_POST['NOTE'])?$_POST['NOTE']:"";
                                $update = "UPDATE KHACHHANG SET  HOTEN = '$HOTEN', DCHI = '$DCHI', SODT = '$SODT', EMAIL = '$EMAIL', NOTE = '$NOTE' WHERE MAKH = '$MAKH'";
                                
                                if(isset($_POST['sub'])){
                                    mysqli_query($conn,$update);
                                    header("location: khachhang.php");
                                }
                                mysqli_close($conn);
                            ?>
            </form>
        </div>
    </main>
</body>
</html>