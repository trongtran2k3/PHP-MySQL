<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Thêm sản phẩm</title>
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
                <form>
                    <label for="">
                        <div class="name"><a href="../../../Z-index.php">MaMiTi</a></div>
                    </label>
                    <a style="height: 120px;" href="../../../Z-index.php"><img style="width: 100px;height: 100px;" src="../../../Mamiti.png" alt=""></a>
                    <a href="admin.php">Chào: <b><?php echo $admin['name_user']; ?></b></a>
                    <a href="../../../Z-index.php"><i class="fa-solid fa-people-roof"></i> Shop</a>
                    <a href="hoadon.php"><i class="fa-solid fa-bars"></i>  Hóa đơn</a>
                    <a href="sanpham.php"><i class="fa-solid fa-store"></i> Sản phẩm</a>
                    <a href="khachhang.php"> Khách hàng</a>
                    <a href="cthd.php">CTHD</a>
                    <a href="user.php"><i class="fa-solid fa-user"></i> User</a>
                    <a href="../../../account/account.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
                </form>
            </div>
            <div class="change">
                <form method="post">
                    <table class="tb_change">
                        <tr>
                            <th><label>ID</label></th>
                            <th><input type="text" name="masp"></th>
                        </tr>
                        <tr>
                            <th><label>Img</label></th>
                            <th><input type="text" name="img"></th>
                        </tr>
                        <tr>
                            <th><label>Mã loại</label></th>
                            <th><input type="text" name="maloai"></th>
                        </tr>
                        <tr>
                            <th><label>Tên sản phẩm</label></th>
                            <th><input type="text" name="tensp"></th>
                        </tr>
                        <tr>
                            <th><label>Số lượng còn</label></th>
                            <th><input type="text" name="slcon"></th>
                        </tr>
                        <tr>
                            <th><label>Size</label></th>
                            <th><input type="text" name="size"></th>
                        </tr>
                        <tr>
                            <th><label>DVT</label></th>
                            <th><input type="text" name="dvt"></th>
                        </tr>
                        <tr>
                            <th><label>Giá</label></th>
                            <th><input type="text" name="gia"></th>
                        </tr>
                        <tr>
                            <th colspan="2">
                                <input type="submit" name="sub" id="sub" class="btn" value="Thêm">
                                <input style="margin-left: 100px;" type="submit" name="admin" id="admin" class="btn" value="Về trang chủ">
                            </th>
                        </tr>
                    </table>
                </form>
                <?php
                require('../../../account/connect.php');
                $masp  =  isset($_POST['masp']) ? $_POST['masp'] : "";
                $img  =  isset($_POST['img']) ? $_POST['img'] : "";
                $maloai  =  isset($_POST['maloai']) ? $_POST['maloai'] : "";
                $tensp  =  isset($_POST['tensp']) ? $_POST['tensp'] : "";
                $slcon  =  isset($_POST['slcon']) ? $_POST['slcon'] : "";
                $size  =  isset($_POST['size']) ? $_POST['size'] : "";
                $dvt  =  isset($_POST['dvt']) ? $_POST['dvt'] : "";
                $gia  =  isset($_POST['gia']) ? $_POST['gia'] : "";

                $update = "INSERT INTO sanpham(`MASP`,`IMG`,`MALOAI`,`TENSP`,`SL_CON`,`SIZE`,`DVT`,`GIA`) VALUES('$masp','$img','$maloai','$tensp','$slcon','$size','$dvt','$gia')";

                if (isset($_POST['sub'])) {
                    if (mysqli_query($conn, $update)) {
                        header("location: sanpham.php");
                    } else {
                        echo "Thêm không thành công!" . mysqli_error($conn);
                    }
                }
                if (isset($_POST['admin'])) {
                    header("location: admin.php");
                }
                mysqli_close($conn);
                ?>
            </div>
        </main>
</body>

</html>