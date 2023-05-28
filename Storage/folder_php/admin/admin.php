<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
    <?php
        session_start();
        $admin = isset($_SESSION['account_admin'])?$_SESSION['account_admin']:"";
        $ad = isset($admin['name_user'])?$admin['name_user']:"";
    ?>
    <main>
        <div class="main_left">
            <form action="##">
                <label for=""><div class="name"><a href="../../../Z-index.php">MaMiTi</a></div></label>
                <a style="height: 120px;" href="../../../Z-index.php"><img style="width: 100px;height: 100px;" src="../../../Mamiti.png" alt=""></a>
                <a style="background-color: antiquewhite;" href="admin.php">Chào:  <b><?php echo $ad;?></b></a>
                <a href="../../../Z-index.php"><i class="fa-solid fa-people-roof"></i> Shop</a>
                <a href="hoadon.php"><i class="fa-solid fa-bars"></i>  Hóa đơn</a>
                <a href="sanpham.php"><i class="fa-solid fa-store"></i>  Sản phẩm</a>
                <a href="khachhang.php"> Khách hàng</a>
                <a href="cthd.php">CTHD</a>
                <a href="user.php"><i class="fa-solid fa-user"></i>  User</a>
                <a href="../../../account/account.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
            </form>
        </div>
        <div class="main_right" style="display: flex; justify-content: space-evenly;">
        <img href='https://moewalls.com/anime/todoroki-fire-and-ice-my-hero-academia-live-wallpaper/'><img src='https://moewalls.com/wp-content/uploads/2023/04/todoroki-fire-and-ice-my-hero-academia-thumb-728x455.jpg' title='Todoroki Fire And Ice My Hero Academia Live Wallpaper'></img>
        <img style="width: 325px;height: 455px;" src="https://th.bing.com/th/id/OIP.AvI_8TpKjUrQtTumQCHlLQHaKd?pid=ImgDet&rs=1" alt="">
    </div>
    </main>
    <div class="main_bottom" style="display: flex; justify-content: center; padding-top: 3px;">
        <img style="width: 1205px;" src="https://th.bing.com/th/id/R.9979cc6dcc7cf04bcde8c63f72a26438?rik=eYPQf1h1dYZc1w&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2f7%2f3%2fd%2f475098.jpg&ehk=mlehQHMB%2f83DnnMEHwEJM2qeiu%2bk0jU5CgUtouexVXM%3d&risl=&pid=ImgRaw&r=0" alt="">
    </div>
</body>
</html>