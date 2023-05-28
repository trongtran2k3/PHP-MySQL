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
                        if(isset($_GET['query']) =='sua'){
                            $ma = isset($_GET['id_sp'])?$_GET['id_sp']:"";
                            $sanpham = "SELECT * FROM sanpham WHERE MASP = '$ma'";
                            $result = mysqli_query($conn,$sanpham);
                            $row = mysqli_fetch_assoc($result);
                        }
                    ?>
                <form method="post">
                    <table class="tb_change">
                                <tr>
                                    <th><label>ID</label></th>
                                    <th><input type="text" name="masp" value="<?php echo $row['MASP'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>Img</label></th>
                                    <th><input type="text" name="img" value="<?php echo $row['IMG'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>Mã loại</label></th>
                                    <th><input type="text" name="maloai" value="<?php echo $row['MALOAI'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>Tên sản phẩm</label></th>
                                    <th><input type="text" name="tensp" value="<?php echo $row['TENSP'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>Số lượng còn</label></th>
                                    <th><input type="text" name="slcon" value="<?php echo $row['SL_CON'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>Size</label></th>
                                    <th><input type="text" name="size" value="<?php echo $row['SIZE'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>DVT</label></th>
                                    <th><input type="text" name="dvt" value="<?php echo $row['DVT'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>Giá</label></th>
                                    <th><input type="text" name="gia" value="<?php echo $row['GIA'];?>"></th>
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
                                    $masp  =  isset($_POST['masp'])?$_POST['masp']:"";
                                    $img  =  isset($_POST['img'])?$_POST['img']:"";
                                    $maloai  =  isset($_POST['maloai'])?$_POST['maloai']:"";
                                    $tensp  =  isset($_POST['tensp'])?$_POST['tensp']:"";
                                    $slcon  =  isset($_POST['slcon'])?$_POST['slcon']:"";
                                    $size  =  isset($_POST['size'])?$_POST['size']:"";
                                    $dvt  =  isset($_POST['dvt'])?$_POST['dvt']:"";
                                    $gia  =  isset($_POST['gia'])?$_POST['gia']:"";
                                    $update = "UPDATE sanpham SET IMG = '$img',MALOAI = '$maloai',TENSP = '$tensp',SL_CON = '$slcon',SIZE = '$size',DVT = '$dvt',GIA = '$gia' WHERE MASP = '$masp'";
                                    
                                    if(isset($_POST['sub'])){
                                        mysqli_query($conn,$update);
                                        echo "<script>alert('Thay đổi thành công!')</script>";
                                        // header("refresh:0, url=sanpham.php");
                                        echo "<script>window.location.href = 'sanpham.php'</script>";
                                    }
                                    mysqli_close($conn);
                            ?>
                </form>
        </div>
    </main>
</body>
</html>