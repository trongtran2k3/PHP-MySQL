<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>DSS TEE EBR TEDDY</title>
</head>

<body>
    <div class="page">
        <!-- header -->
        <div class="header">
            <!-- header top -->
            <div class="header-top">
                <!-- logo -->
                <div class="logo">
                    <div class="shop-name"><h3><a href="../../../Z-index.php" style="text-decoration: none;color: white;">MAMITI</a></h3></div>
                    <a href="../../../Z-index.php">
                        <img id="mmt" src="../../../Mamiti.png" alt="">
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
                        $exit =" <a style='color: white;margin-left: 10px;font-size: 15px;'' href='../../../index_khach.php'><i class='fa-solid fa-right-from-bracket'></i></a>";
                       
                    }else{
                        $name ='';
                        $account = 'Tài khoản';
                        $exit = "";
                    }
                    
                ?>
                <div class="account">
                <b  style="color: white;font-size: 15px;"><?php echo $name; ?></b><button style='background-color: black;' ><a class="gradientButton" href="../../../account/account.php"><b style="font-size: 15px;font-weight: normal;"><?php echo $account.'&nbsp'.$exit; ?></b></a></button>
                    <div style=" margin-left: 70px; " class="storage">
                        <a href="../../../Storage/folder_php/pay/giohang.php">
                            <?php 
                                require('../../../account/connect.php');
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
                            <a id="ori-a" href="../../../allin.php">TẤT CẢ SẢN PHẨM</a>
                        </li>
                        <li class="menu-item menu-original">
                            <a id="ori-a" href="../../../Davies original/daviesoriginal.php">
                                DAVIES ORIGINAL
                                <!-- dropdown -->
                                <b class="caret hidden-xs"></b>
                            </a>
                            <ul class="menu-original-item">
                                <li><a href="aothunnam.php">Áo thun nam</a></li>
                                <li><a href="../../../Davies original/AokhoacNam/aokhoacnam.php">Áo khoác nam</a></li>
                                <li><a href="../../../Davies original/Hoodie/hoodie.php">Hoodie/SWE</a></li>
                                <li><a href="../../../Davies original/QuanNam/quannam.php">Quần nam</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-brand">
                            <a id="ori-a" href="../../../Davies brand/daviesbrand.php">DAVIES BRAND</a>
                            <ul class="menu-brand-item" type="none">
                                <li><a href="../../../Davies brand/AothunNu/aothunnu.php">Áo thun nữ</a></li>
                                <li><a href="../../../Davies brand/AoKhoacNu/aokhoacnu.php">Áo khoác nữ</a></li>
                                <li><a href="../../../Davies brand/HoodieSWENu/hoodienu.php">Hoodie/SWE nữ</a></li>
                                <li><a href="../../../Davies brand/AoCroptop/croptop.php">Áo Croptop</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-lab">
                            <a id="ori-a" href="../../../Davies Lab/davieslab.php">DAVIES LAB</a>
                        </li>
                        <li class="menu-item menu-pay">
                            <a id="ori-a" href="../../../DonHang/ktra_donhang.php">KIỂM TRA ĐƠN HÀNG</a>
                        </li>
                        <li class="menu-item menu-work">
                            <a id="ori-a" href="../../../FPT-SoftWare/fptsoftware.php">TUYỂN DỤNG IT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- page-body -->
        <?php
            require('../../../account/connect.php');
            $sql = "SELECT * FROM SANPHAM WHERE TENSP like '%DSS TEE EBR TEDDY%'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="page-body">
            <div class="headline"><?php echo $row['TENSP'];?>
                <span></span>
                <span></span>
            </div>
            <div class="body">
                <div class="body-left">
                    <div class="body-left-info">
                        <div class="body-left-info-img">
                            <div><img class="img-bigsize" src="mau1.webp" alt=""></div>
                            <div>
                                <img id="img-smallsize" src="mau2.webp" alt="">
                                <img id="img-smallsize" src="mau3.webp" alt="">
                                <img id="img-smallsize" src="mau4.webp" alt="">
                            </div>
                        </div>
                        <div class="body-left-info-title">
                            <div class="body-left-info-title-name" style="padding-bottom: 15px;">
                                <p>ÁO THUN LOCAL BRAND ĐẸP MÀU BE EBR TEDDY TEE</p>
                                <h2><?php echo $row['TENSP'];?></h2>
                                <p>ÁO THUN NỮ STREETWEAR / DAVIES BRAND</p>
                            </div>
                            <div class="product-price">
                                <strong style="font-size: 24px;"><?php echo $row['GIA'];?>₫</strong>
                                <del>320.000₫</del>
                            </div>
                            <div class="search-contact">
                                Hoặc trả sau 73.000₫ x 3 kỳ với Fundiin Tìm hiểu(?)
                            </div>
                            <ul class="item-note">
                                <li class="item-note-li1">
                                    <i class="fa-solid fa-caret-right"></i> Giao hàng
                                    <ul class="item-note-li1-ul">
                                        <li class="ul-note-li2">Giao hàng miễn phí khi mua qua website.</li>
                                        <li class="ul-note-li2">Đơn hàng có giá trị từ 280.000.</li>
                                    </ul>
                                </li>
                                <li class="item-note-li1">
                                    <i class="fa-solid fa-caret-right"></i> Bảo hành
                                    <ul class="item-note-li1-ul">
                                        <li class="ul-note-li2">Đơn hàng có giá trị từ 280.000.</li>
                                        <li class="ul-note-li2">Hoặc mua nhầm size một cách nhanh chóng</li>
                                    </ul>
                                </li>
                                <li class="item-note-li1">
                                    <i class="fa-solid fa-caret-right"></i> Thanh toán
                                    <ul class="item-note-li1-ul">
                                        <li class="ul-note-li2">Thanh toán bằng MOMO, chuyển khoản hoặc thanh toán khi nhận hàng.</li>
                                    </ul>
                                </li>
                                <li class="item-note-li1">
                                    <i class="fa-solid fa-caret-right"></i> Sản phẩm
                                    <ul class="item-note-li1-ul">
                                        <li class="ul-note-li2">Thiết kế riêng biệt, tiêu chuẩn xuất khẩu.</li>
                                        <li class="ul-note-li2">Chính hãng, được đăng ký và bảo hộ nhãn hiệu độc quyền.</li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="check">
                            <form action="../../../Storage/folder_php/pay/cart.php" method="post">    
                                    <div style="width: 420px;display: flex;justify-content: left;height: 20px;margin-top: 10px;align-items: center;font-size: 18px;" class="option">
                                        
                                            <label style="font-weight: bold;" for="">Kích thước: </label>
                                            <select style="width: 50px;height: 25px;text-align: center;" name="size" id="size">
                                                <option value="">--</option>
                                                <option value="S" >S</option>
                                                <option value="M" >M</option>
                                                <option value="L" >L</option>
                                            </select>
                                            <ul class="count" style="list-style: none;text-decoration: none;display: flex;align-items: center;margin-left: 30px; width: 220px;">
                                                <li style="width: 40%;font-weight: bold;">Số lượng</li>
                                                <li style="width: 60%;display: flex;">
                                                    <button type="button" onclick="down()" style="padding: 5px 10px;">-</button>
                                                    <input style="width: 50px;text-align: center;" type="text" name="count" id="count" maxlength="4" >
                                                    <button type="button" onclick="up()" style="padding: 5px 10px;">+</button>
                                                <script>
                                                    document.getElementById("count").value = 1;
                                                    function up() {
                                                        var x = document.getElementById("count").value;
                                                        x = parseInt(x);
                                                        x = x + 1;
                                                        document.getElementById("count").value = x;
                                                    }

                                                    function down() {
                                                        var y = document.getElementById("count").value;
                                                        y = parseInt(y);
                                                        y = y - 1;
                                                        if (y < 1) {
                                                            y = 1;
                                                        }
                                                        document.getElementById("count").value = y;
                                                    }
                                                </script>
                                                <input type="hidden" name="tensp" id="tensp" value="<?php echo $row['TENSP'];?>">
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="button" style="display: flex;flex-wrap: wrap;padding: 20px 0px;">
                                        <div style="border: 1px solid black; width: 418px ;height: 25px; display: flex;justify-content: center;align-items: center;">
                                        <input style="text-decoration: none;color: black;width: 418px ;height: 25px;display: flex;justify-content: center;align-items: center;" type="submit" name="sub" id="sub" value="MUA HÀNG">
                                        <!-- <a style="text-decoration: none;color: black;width: 418px ;height: 25px;display: flex;justify-content: center;align-items: center;" class="btn"  href="../../../Storage/folder_php/pay/cart.php">MUA HÀNG</a> -->
                                    </div>
                                        <div style="padding: 5px 0px;"><button class="btn" style="width: 420px; background-color: white;color: black; padding: 5px;" disabled>MUA HÀNG TRÊN TIKTOK SHOP</button></div>
                                        <div><button class="btn" style="width: 420px; background-color: white;color: black; padding: 5px;" disabled>MUA HÀNG TRÊN SHOPEE</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="body-left-item">
                    </div>
                </div>
                <div class="body-right">

                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <ul class="menu-footer">
                <li class="shop-name">
                    <h3>MAMITI</h3>
                    <ul class="menu-footer-list address">
                        <li>RAYMA ASIA TRADING SERVICES COMPANY LIMITED</li>
                        <li>Địa chỉ: K46/60 Cao Thắng, Phường Thanh Bình, Quận Hải Châu, Đà Nẵng</li>
                        <li>Mã số thuế: 0401882373</li>
                    </ul>
                </li>
                <li class="menu-footer-li">
                    <h3>ĐIỀU KHOẢN</h3>
                    <ul class="menu-footer-list">
                        <li>Danh sách cửa hàng</li>
                        <li>Bảng số đo</li>
                        <li>Tiêu chuẩn chất lượng</li>
                    </ul>
                </li>
                <li class="menu-footer-li">
                    <h3>HỖ TRỢ</h3>
                    <ul class="menu-footer-list">
                        <li>Giới thiệu thương hiệu</li>
                        <li>Chính sách nhượng quyền</li>
                    </ul>
                </li>
                <li class="menu-footer-li">
                    <h3>CHÍNH SÁCH</h3>
                    <ul class="menu-footer-list">
                        <li>Chính sách thanh toán</li>
                        <li>Chính sách giao hàng</li>
                        <li>Chính sách mua hàng</li>
                        <li>Chính sách đổi trả</li>
                        <li>Chính sách bảo mật</li>
                    </ul>
                </li>
                <li class="menu-footer-li">
                    <h3>CHỨNG NHẬN</h3>
                    <img src="../../../logoSaleNoti.png" alt="">
                </li>
            </ul>
        </div>
    </div>
</body>

</html>