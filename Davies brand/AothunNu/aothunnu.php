<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <title>Áo Thun Nữ</title>
</head>
<body>
    <div class="page">
        <!-- header -->
        <div class="header">
            <!-- header top -->
            <div class="header-top">
                <!-- logo -->
                <div class="logo">
                    <div class="shop-name"><h3><a href="../../Z-index.php" style="text-decoration: none;color: white;">MAMITI</a></h3></div>
                    <a href="../../Z-index.php">
                        <img id="mmt" src="../../Mamiti.png" alt="">
                    </a>
                </div>
                <!-- search -->
                <div class="search-box">
                    <form action="" class="frm-search">
                        <input type="text" class="search-input" placeholder="Bạn muốn tìm gì?">
                        <button class="search-submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <!-- Sign in sign up -->
                <?php
                    session_start();
                    if(isset($_SESSION['account_user'])){
                        $user = $_SESSION['account_user'];
                        $name = $user['name_user'];
                        $account ='';
                        $exit =" <a style='color: white;margin-left: 10px;font-size: 15px;'' href='../../index_khach.php'><i class='fa-solid fa-right-from-bracket'></i></a>";
                       
                    }else{
                        $name ='';
                        $account = 'Tài khoản';
                        $exit = "";
                    }
                    
                ?>
                <div class="account">
                <b  style="color: white;font-size: 15px;"><?php echo $name; ?></b><button style='background-color: black;' ><a class="gradientButton" href="../../account/account.php"><b style="font-size: 15px;font-weight: normal;"><?php echo $account.'&nbsp'.$exit; ?></b></a></button>
                    <div style=" margin-left: 70px; " class="storage">
                        <a href="../../Storage/folder_php/pay/giohang.php">
                            <?php 
                                require('../../account/connect.php');
                                $sql = "SELECT * FROM TEMP";
                                $num = mysqli_num_rows(mysqli_query($conn,$sql));
                            ?>
                            <button class="gradientButton">Giỏ Hàng <i class="fa-solid fa-cart-shopping"></i>_ <input type="text" name="cart_count" id="cart_count" style="width: 20px; background-color: black;color: white; text-align: center;" value="<?php echo $num ?>" disabled></button>
                        </a>
                    </div>
                     
                </div>
             </div> 
            <!-- animation gradient -->
            <div class="gradient"></div>
            <!-- header bottom -->
            <div class="header-bottom">
                <!-- menu-->
                <nav class="container">
                    <ul class="menu">
                        <li class="menu-item menu-all">
                            <a id="ori-a" href="../../allin.php">TẤT CẢ SẢN PHẨM</a>
                        </li>
                        <li class="menu-item menu-original">
                            <a id="ori-a" href="../../Davies original/daviesoriginal.php">
                                DAVIES ORIGINAL
                                <!-- dropdown -->
                                <b class="caret hidden-xs"></b>
                            </a>
                            <ul class="menu-original-item">
                                <li><a href="../../Davies original/AothunNam/aothunnam.php">Áo thun nam</a></li>
                                <li><a href="../../Davies original/AokhoacNam/aokhoacnam.php">Áo khoác nam</a></li>
                                <li><a href="../../Davies original/Hoodie/hoodie.php">Hoodie/SWE</a></li>
                                <li><a href="../../Davies original/QuanNam/quannam.php">Quần nam</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-brand">
                            <a id="ori-a" href="../../Davies brand/daviesbrand.php">DAVIES BRAND</a>
                            <ul class="menu-brand-item" type="none">
                                <li><a href="aothunnu.php">Áo thun nữ</a></li>
                                <li><a href="../../Davies brand/AoKhoacNu/aokhoacnu.php">Áo khoác nữ</a></li>
                                <li><a href="../../Davies brand/HoodieSWENu/hoodienu.php">Hoodie/SWE nữ</a></li>
                                <li><a href="../../Davies brand/AoCroptop/croptop.php">Áo Croptop</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-lab">
                            <a id="ori-a" href="../../Davies Lab/davieslab.php">DAVIES LAB</a>
                        </li>
                        <li class="menu-item menu-pay">
                            <a id="ori-a" href="../../DonHang/ktra_donhang.php">KIỂM TRA ĐƠN HÀNG</a>
                        </li>
                        <li class="menu-item menu-work">
                            <a id="ori-a" href="../../FPT-SoftWare/fptsoftware.php">TUYỂN DỤNG IT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- page-body -->
        <div class="page-body">
            <div class="headline">ÁO THUN NỮ
                <span></span>
                <span></span>
            </div>
            <ul class="product">
                <?php
                    require('../../account/connect.php');
                    $sql = "SELECT * FROM sanpham WHERE MALOAI like '%at_nu%'  AND SIZE = 'S'";
                    $result = mysqli_query($conn,$sql);
                    $i=1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                    <li>
                        <div class="product-items">
                            <div class="product-top">
                                <div class="product-thumb">
                                    <?php 
                                        if($row['MALOAI']=='at_nam'){
                                            ?>
                                            <a href="../../Davies original/AothunNam/<?php echo $row['FILE_PHP']?>">
                                                <img src="../../Davies original/AothunNam/<?php echo $row['IMG']?>" alt="">
                                            <?php
                                        }else if ($row['MALOAI'] == 'ak_nam') {
                                            ?> 
                                            <a href="../../Davies original/AokhoacNam/<?php echo $row['FILE_PHP']?>">
                                                <img  src="../../Davies original/AokhoacNam/<?php echo $row['IMG']; ?>" alt="">
                                            <?php
                                            } else if ($row['MALOAI'] == 'hd_nam') {
                                               ?>
                                               <a href="../../Davies original/Hoodie/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="../../Davies original/Hoodie/<?php echo $row['IMG']; ?>" alt="">
                                                <?php 
                                            } else if ($row['MALOAI'] == 'q_nam') {
                                               ?>
                                               <a href="../../Davies original/QuanNam/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="../../Davies original/QuanNam/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'lab_nam') {
                                               ?>
                                               <a href="../../Davies Lab/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="../../Davies Lab/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'at_nu') {
                                               ?>
                                               <a href="../../Davies brand/AothunNu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="../../Davies brand/AothunNu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'ak_nu') {
                                               ?> 
                                               <a href="../../Davies brand/AoKhoacNu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="../../Davies brand/AoKhoacNu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'hd_nu') {
                                               ?> 
                                               <a href="../../Davies brand/HoodieSWENu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="../../Davies brand/HoodieSWENu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'cr_nu') {
                                               ?>
                                               <a href="../../Davies brand/AoCroptop/<?php echo $row['FILE_PHP']?>">
                                                     <img  src="../../Davies brand/AoCroptop/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else {
                                               echo $row['IMG'] ;
                                            }
                                    ?></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="../../Davies original/AothunNam/1/1.php" class="product-name"><?php echo $row['TENSP'];?></a>
                                
                                <div class="product-price"><?php echo $row['GIA'];?>đ</div>
                            </div>
                        </div>
                    </li>
                    <?php 
                        } 
                    ?>
            </ul>
        </div>

        <!-- footer -->
        <div class="footer">
                <ul class="menu-footer">
                    <li class="shop-name"><h3>MAMITI</h3>
                        <ul class="menu-footer-list address">
                            <li>RAYMA ASIA TRADING SERVICES COMPANY LIMITED</li>
                            <li>Địa chỉ: K46/60 Cao Thắng, Phường Thanh Bình, Quận Hải Châu, Đà Nẵng</li>
                            <li>Mã số thuế: 0401882373</li>
                        </ul>
                    </li>
                    <li class="menu-footer-li"><h3>ĐIỀU KHOẢN</h3>
                        <ul class="menu-footer-list">
                            <li>Danh sách cửa hàng</li>
                            <li>Bảng số đo</li>
                            <li>Tiêu chuẩn chất lượng</li>
                        </ul>
                    </li>
                    <li class="menu-footer-li"><h3>HỖ TRỢ</h3>
                        <ul class="menu-footer-list">
                            <li>Giới thiệu thương hiệu</li>
                            <li>Chính sách nhượng quyền</li>
                        </ul>
                    </li>
                    <li class="menu-footer-li"><h3>CHÍNH SÁCH</h3>
                        <ul class="menu-footer-list">
                            <li>Chính sách thanh toán</li>
                            <li>Chính sách giao hàng</li>
                            <li>Chính sách mua hàng</li>
                            <li>Chính sách đổi trả</li>
                            <li>Chính sách bảo mật</li>
                        </ul>
                    </li>
                    <li class="menu-footer-li"><h3>CHỨNG NHẬN</h3>
                        <img src="../../logoSaleNoti.png" alt="">
                    </li>
                </ul>
        </div>
    </div>
</body>
</html>