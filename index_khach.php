<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <title>Index</title>
</head>
<body>
    <?php 
        session_start();
        unset($_SESSION['account_user']);
    ?>
    <div class="page">
        <!-- header -->
        <div class="header">
            <!-- header top -->
            <div class="header-top">
                <!-- logo -->
                <div class="logo">
                    <div class="shop-name"><h3><a href="Z-index.php" style="text-decoration: none;color: white;">MAMITI</a></h3></div>
                    <a href="Z-index.php">
                        <img id="mmt" src="Mamiti.png" alt="">
                    </a>
                </div>
                <!-- search -->
                <div class="search-box">
                <form action="" class="frm-search" method="post">
                        <input type="text" class="search-input" name="search" placeholder="Bạn muốn tìm gì?">
                        <button class="search-submit" name="sub" id="sub"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="account">
                    <button style='background-color: black;' ><a class="gradientButton" href="account/account.php"><b style="font-size: 15px;font-weight: normal;">Tài khoản</b></a></button>
                    
                    <div class="storage">
                        <a href="Storage/folder_php/pay/giohang.php">
                            <?php 
                                require('account/connect.php');
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
                            <a id="ori-a" href="allin.php">TẤT CẢ SẢN PHẨM</a>
                        </li>
                        <li class="menu-item menu-original">
                            <a id="ori-a" href="Davies original/daviesoriginal.php">
                                DAVIES ORIGINAL
                                <!-- dropdown -->
                                <b class="caret hidden-xs"></b>
                            </a>
                            <ul class="menu-original-item">
                                <li><a href="Davies original/AothunNam/aothunnam.php">Áo thun nam</a></li>
                                <li><a href="Davies original/AokhoacNam/aokhoacnam.php">Áo khoác nam</a></li>
                                <li><a href="Davies original/Hoodie/hoodie.php">Hoodie/SWE</a></li>
                                <li><a href="Davies original/QuanNam/quannam.php">Quần nam</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-brand">
                            <a id="ori-a" href="Davies brand/daviesbrand.php">DAVIES BRAND</a>
                            <ul class="menu-brand-item" type="none">
                                <li><a href="Davies brand/AothunNu/aothunnu.php">Áo thun nữ</a></li>
                                <li><a href="Davies brand/AoKhoacNu/aokhoacnu.php">Áo khoác nữ</a></li>
                                <li><a href="Davies brand/HoodieSWENu/hoodienu.php">Hoodie/SWE nữ</a></li>
                                <li><a href="Davies brand/AoCroptop/croptop.php">Áo Croptop</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-lab">
                            <a id="ori-a" href="Davies Lab/davieslab.php">DAVIES LAB</a>
                        </li>
                        <li class="menu-item menu-pay">
                            <a id="ori-a" href="DonHang/ktra_donhang.php">KIỂM TRA ĐƠN HÀNG</a>
                        </li>
                        <li class="menu-item menu-work">
                            <a id="ori-a" href="FPT-SoftWare/fptsoftware.php">TUYỂN DỤNG IT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- page-body -->
    <?php
        require('account/connect.php');
        $search = isset($_POST['search'])?$_POST['search']:"";
        $sql_search = "SELECT * FROM sanpham WHERE TENSP like '%$search%' AND SIZE = 'S'";
        $result_search = mysqli_query($conn,$sql_search);
        if($search ==''){
        // $sql  = "SELECT * FROM sanpham WHERE SIZE = 'S'" ;
        // $result = mysqli_query($conn,$sql);
    ?>
        <div class="page-body">
            <a href="" class="banner">
                <img id="img" src="banner1.webp" onclick="changeimg" alt="" class="banner-img">
                <script>
                    var i = 1;
                    changeimg = function(){
                        var img = ["banner1.webp","banner2.webp","banner6.webp","banner8.webp"];
                        document.getElementById('img').src = img[i];
                        i++;
                        if(i==4){
                            i=0;
                        }
                    }
                    setInterval(changeimg,2000);
                </script>
            </a>
            <div class="list-product">
                <!-- product original -->
                <div class="content-original content-item">
                    <div>DSW/DAVIES ORIGINAL - NAM</div>
                    <a href="Davies original/daviesoriginal.php" class="icon-right">Xem tất cả tại đây <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="list-original list-item">  
                <?php
                    require('account/connect.php');
                    $sql = "SELECT * FROM sanpham WHERE MALOAI like '%at_nam%' AND SIZE = 'S'";
                    $result = mysqli_query($conn,$sql);
                    $i=1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                        <div class="product-items">
                            <div class="product-top">
                                <div class="product-thumb">
                                    <?php 
                                        if($row['MALOAI']=='at_nam'){
                                            ?>
                                            <a href="Davies original/AothunNam/<?php echo $row['FILE_PHP']?>">
                                                <img src="Davies original/AothunNam/<?php echo $row['IMG']?>" alt="">
                                            <?php
                                        }else if ($row['MALOAI'] == 'ak_nam') {
                                            ?> 
                                            <a href="Davies original/AokhoacNam/<?php echo $row['FILE_PHP']?>">
                                                <img  src="Davies original/AokhoacNam/<?php echo $row['IMG']; ?>" alt="">
                                            <?php
                                            } else if ($row['MALOAI'] == 'hd_nam') {
                                               ?>
                                               <a href="Davies original/Hoodie/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies original/Hoodie/<?php echo $row['IMG']; ?>" alt="">
                                                <?php 
                                            } else if ($row['MALOAI'] == 'q_nam') {
                                               ?>
                                               <a href="Davies original/QuanNam/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies original/QuanNam/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'lab_nam') {
                                               ?>
                                               <a href="Davies Lab/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies Lab/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'at_nu') {
                                               ?>
                                               <a href="Davies brand/AothunNu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies brand/AothunNu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'ak_nu') {
                                               ?> 
                                               <a href="Davies brand/AoKhoacNu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies brand/AoKhoacNu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'hd_nu') {
                                               ?> 
                                               <a href="Davies brand/HoodieSWENu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies brand/HoodieSWENu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'cr_nu') {
                                               ?>
                                               <a href="Davies brand/AoCroptop/<?php echo $row['FILE_PHP']?>">
                                                     <img  src="Davies brand/AoCroptop/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else {
                                               echo $row['IMG'] ;
                                            }
                                    ?></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="Davies original/AothunNam/1/1.php" class="product-name"><?php echo $row['TENSP'];?></a>
                                
                                <div class="product-price"><?php echo $row['GIA'];?>đ</div>
                            </div>
                        </div>
                    <?php 
                        } 
                    ?>
                </div>
                <!-- product brand -->
                <div class="content-brand content-item">
                    <div>DSW/DAVIES BRAND - NỮ</div>
                    <a href="Davies brand/daviesbrand.php" class="icon-right">Xem tất cả tại đây <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="list-brand list-item">
                <?php
                    require('account/connect.php');
                    $sql = "SELECT * FROM sanpham WHERE (MALOAI like '%at_nu%' OR MALOAI like '%ak_nu%') AND SIZE = 'S'";
                    $result = mysqli_query($conn,$sql);
                    $i=1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                        <div class="product-items">
                            <div class="product-top">
                                <div class="product-thumb">
                                    <?php 
                                        if($row['MALOAI']=='at_nam'){
                                            ?>
                                            <a href="Davies original/AothunNam/<?php echo $row['FILE_PHP']?>">
                                                <img src="Davies original/AothunNam/<?php echo $row['IMG']?>" alt="">
                                            <?php
                                        }else if ($row['MALOAI'] == 'ak_nam') {
                                            ?> 
                                            <a href="Davies original/AokhoacNam/<?php echo $row['FILE_PHP']?>">
                                                <img  src="Davies original/AokhoacNam/<?php echo $row['IMG']; ?>" alt="">
                                            <?php
                                            } else if ($row['MALOAI'] == 'hd_nam') {
                                               ?>
                                               <a href="Davies original/Hoodie/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies original/Hoodie/<?php echo $row['IMG']; ?>" alt="">
                                                <?php 
                                            } else if ($row['MALOAI'] == 'q_nam') {
                                               ?>
                                               <a href="Davies original/QuanNam/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies original/QuanNam/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'lab_nam') {
                                               ?>
                                               <a href="Davies Lab/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies Lab/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'at_nu') {
                                               ?>
                                               <a href="Davies brand/AothunNu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies brand/AothunNu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'ak_nu') {
                                               ?> 
                                               <a href="Davies brand/AoKhoacNu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies brand/AoKhoacNu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'hd_nu') {
                                               ?> 
                                               <a href="Davies brand/HoodieSWENu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies brand/HoodieSWENu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'cr_nu') {
                                               ?>
                                               <a href="Davies brand/AoCroptop/<?php echo $row['FILE_PHP']?>">
                                                     <img  src="Davies brand/AoCroptop/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else {
                                               echo $row['IMG'] ;
                                            }
                                    ?></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="Davies original/AothunNam/1/1.php" class="product-name"><?php echo $row['TENSP'];?></a>
                                
                                <div class="product-price"><?php echo $row['GIA'];?>đ</div>
                            </div>
                        </div>
                    <?php 
                        } 
                    ?>
                </div>
                <!-- product lab -->
                <div class="content-lab content-item">
                    <div>DVSL/DAVIES LABORATORY - GIỚI HẠN</div>
                    <a href="Davies Lab/davieslab.php" class="icon-right">Xem tất cả tại đây <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="list-laboratory list-item">
                <?php
                    require('account/connect.php');
                    $sql = "SELECT * FROM sanpham WHERE MALOAI like '%lab_nam%'  AND SIZE = 'S'";
                    $result = mysqli_query($conn,$sql);
                    
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                        <div class="product-items">
                            <div class="product-top">
                                <div class="product-thumb">
                                    <?php 
                                        if($row['MALOAI']=='at_nam'){
                                            ?>
                                            <a href="Davies original/AothunNam/<?php echo $row['FILE_PHP']?>">
                                                <img src="Davies original/AothunNam/<?php echo $row['IMG']?>" alt="">
                                            <?php
                                        }else if ($row['MALOAI'] == 'ak_nam') {
                                            ?> 
                                            <a href="Davies original/AokhoacNam/<?php echo $row['FILE_PHP']?>">
                                                <img  src="Davies original/AokhoacNam/<?php echo $row['IMG']; ?>" alt="">
                                            <?php
                                            } else if ($row['MALOAI'] == 'hd_nam') {
                                               ?>
                                               <a href="Davies original/Hoodie/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies original/Hoodie/<?php echo $row['IMG']; ?>" alt="">
                                                <?php 
                                            } else if ($row['MALOAI'] == 'q_nam') {
                                               ?>
                                               <a href="Davies original/QuanNam/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies original/QuanNam/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'lab_nam') {
                                               ?>
                                               <a href="Davies Lab/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies Lab/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'at_nu') {
                                               ?>
                                               <a href="Davies brand/AothunNu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies brand/AothunNu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'ak_nu') {
                                               ?> 
                                               <a href="Davies brand/AoKhoacNu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies brand/AoKhoacNu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'hd_nu') {
                                               ?> 
                                               <a href="Davies brand/HoodieSWENu/<?php echo $row['FILE_PHP']?>">
                                                    <img  src="Davies brand/HoodieSWENu/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else if ($row['MALOAI'] == 'cr_nu') {
                                               ?>
                                               <a href="Davies brand/AoCroptop/<?php echo $row['FILE_PHP']?>">
                                                     <img  src="Davies brand/AoCroptop/<?php echo $row['IMG']; ?>" alt="">
                                               <?php 
                                            } else {
                                               echo $row['IMG'] ;
                                            }
                                    ?></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="Davies original/AothunNam/1/1.php" class="product-name"><?php echo $row['TENSP'];?></a>
                                
                                <div class="product-price"><?php echo $row['GIA'];?>đ</div>
                            </div>
                        </div>
                        <?php 
                        } 
                        ?>
                        
                    </div>
                </div>
                <img class="banner-shop" src="Siêu sale cùng MMTShop.jpg" alt="" width="1200px" height="470px">
            </div>
        </div>
            <?php   
                }else if(mysqli_num_rows($result_search)>0){
                    ?>
                    <ul  class="product">
                    <?php
                    while($row = mysqli_fetch_assoc($result_search)){
                        ?>
                            <li>
                                <div class="product-items">
                                    <div class="product-top">
                                        <div class="product-thumb">
                                            <?php 
                                                if($row['MALOAI']=='at_nam'){
                                                    ?>
                                                    <a href="Davies original/AothunNam/<?php echo $row['FILE_PHP']?>">
                                                        <img src="Davies original/AothunNam/<?php echo $row['IMG']?>" alt="">
                                                    <?php
                                                }else if ($row['MALOAI'] == 'ak_nam') {
                                                    ?> 
                                                    <a href="Davies original/AokhoacNam/<?php echo $row['FILE_PHP']?>">
                                                        <img  src="Davies original/AokhoacNam/<?php echo $row['IMG']; ?>" alt="">
                                                    <?php
                                                    } else if ($row['MALOAI'] == 'hd_nam') {
                                                       ?>
                                                       <a href="Davies original/Hoodie/<?php echo $row['FILE_PHP']?>">
                                                            <img  src="Davies original/Hoodie/<?php echo $row['IMG']; ?>" alt="">
                                                        <?php 
                                                    } else if ($row['MALOAI'] == 'q_nam') {
                                                       ?>
                                                       <a href="Davies original/QuanNam/<?php echo $row['FILE_PHP']?>">
                                                            <img  src="Davies original/QuanNam/<?php echo $row['IMG']; ?>" alt="">
                                                       <?php 
                                                    } else if ($row['MALOAI'] == 'lab_nam') {
                                                       ?>
                                                       <a href="Davies Lab/<?php echo $row['FILE_PHP']?>">
                                                            <img  src="Davies Lab/<?php echo $row['IMG']; ?>" alt="">
                                                       <?php 
                                                    } else if ($row['MALOAI'] == 'at_nu') {
                                                       ?>
                                                       <a href="Davies brand/AothunNu/<?php echo $row['FILE_PHP']?>">
                                                            <img  src="Davies brand/AothunNu/<?php echo $row['IMG']; ?>" alt="">
                                                       <?php 
                                                    } else if ($row['MALOAI'] == 'ak_nu') {
                                                       ?> 
                                                       <a href="Davies brand/AoKhoacNu/<?php echo $row['FILE_PHP']?>">
                                                            <img  src="Davies brand/AoKhoacNu/<?php echo $row['IMG']; ?>" alt="">
                                                       <?php 
                                                    } else if ($row['MALOAI'] == 'hd_nu') {
                                                       ?> 
                                                       <a href="Davies brand/HoodieSWENu/<?php echo $row['FILE_PHP']?>">
                                                            <img  src="Davies brand/HoodieSWENu/<?php echo $row['IMG']; ?>" alt="">
                                                       <?php 
                                                    } else if ($row['MALOAI'] == 'cr_nu') {
                                                       ?>
                                                       <a href="Davies brand/AoCroptop/<?php echo $row['FILE_PHP']?>">
                                                             <img  src="Davies brand/AoCroptop/<?php echo $row['IMG']; ?>" alt="">
                                                       <?php 
                                                    } else {
                                                       echo $row['IMG'] ;
                                                    }
                                            ?></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a style="text-decoration: none;color: black;" href="Davies original/AothunNam/1/1.php" class="product-name"><?php echo $row['TENSP'];?></a>
                                        
                                        <div class="product-price"><?php echo $row['GIA'];?>đ</div>
                                    </div>
                                </div>
                            </li>
                        <?php
                            }
                }else{
                    echo "<br>Không tìm thấy sản phẩm!";
                }
                ?>
            </ul>
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
                        <img src="logoSaleNoti.png" alt="">
                    </li>
                </ul>
        </div>
    </div>
</body>
</html>