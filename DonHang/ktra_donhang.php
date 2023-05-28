<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Giỏ hàng</title>
</head>

<body>
    <div class="page">
        <!-- header -->
        <div class="header">
            <!-- header top -->
            <div class="header-top">
                <!-- logo -->
                <div class="logo">
                    <div class="shop-name"><h3><a href="../Z-index.php" style="text-decoration: none;color: white;">MAMITI</a></h3></div>
                    <a href="../Z-index.php">
                        <img id="mmt" src="../Mamiti.png" alt="">
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
                        $exit =" <a style='color: white;margin-left: 10px;font-size: 15px;'' href='../index_khach.php'><i class='fa-solid fa-right-from-bracket'></i></a>";
                       
                    }else{
                        $name ='';
                        $account = 'Tài khoản';
                        $exit = "";
                    }
                    
                ?>
                <div class="account" style="width: 350px;" >
                <b  style="color: white;font-size: 15px;"><?php echo $name; ?></b><button style='background-color: black;' ><a class="gradientButton" href="../account/account.php"><b style="font-size: 15px;font-weight: normal;"><?php echo $account.'&nbsp'.$exit; ?></b></a></button>
                    <div style=" margin-left: 70px; " class="storage">
                        <a href="../Storage/folder_php/pay/giohang.php">
                            <?php 
                                require('../account/connect.php');
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
                            <a id="ori-a" href="../allin.php">TẤT CẢ SẢN PHẨM</a>
                        </li>
                        <li class="menu-item menu-original">
                            <a id="ori-a" href="../Davies original/daviesoriginal.php">
                                DAVIES ORIGINAL
                                <!-- dropdown -->
                                <b class="caret hidden-xs"></b>
                            </a>
                            <ul class="menu-original-item">
                                <li><a href="aothunnam.php">Áo thun nam</a></li>
                                <li><a href="../Davies original/AokhoacNam/aokhoacnam.php">Áo khoác nam</a></li>
                                <li><a href="../Davies original/Hoodie/hoodie.php">Hoodie/SWE</a></li>
                                <li><a href="../Davies original/QuanNam/quannam.php">Quần nam</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-brand">
                            <a id="ori-a" href="../Davies brand/daviesbrand.php">DAVIES BRAND</a>
                            <ul class="menu-brand-item" type="none">
                                <li><a href="../Davies brand/AothunNu/aothunnu.php">Áo thun nữ</a></li>
                                <li><a href="../Davies brand/AoKhoacNu/aokhoacnu.php">Áo khoác nữ</a></li>
                                <li><a href="../Davies brand/HoodieSWENu/hoodienu.php">Hoodie/SWE nữ</a></li>
                                <li><a href="../Davies brand/AoCroptop/croptop.php">Áo Croptop</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-lab">
                            <a id="ori-a" href="../Davies Lab/davieslab.php">DAVIES LAB</a>
                        </li>
                        <li class="menu-item menu-pay">
                            <a id="ori-a" href="ktra_donhang.php">KIỂM TRA ĐƠN HÀNG</a>
                        </li>
                        <li class="menu-item menu-work">
                            <a id="ori-a" href="../FPT-SoftWare/fptsoftware.php">TUYỂN DỤNG IT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- page-body -->
        <main style="display: flex;justify-content: center;margin-top: 50px;">
            <table style="width: 960px;text-align: center;">
                <tr><th colspan="6" style="font-size: 32px;">DANH SÁCH HÓA ĐƠN</th></tr>
                <tr>
                    <th>STT</th>
                    <th>MÃ HÓA ĐƠN</th>
                    <th>NGÀY LẬP</th>
                    <th>MÃ KHÁCH HÀNG</th>
                    <th>TỔNG TIỀN</th>
                    <th>PHƯƠNG THỨC THANH TOÁN</th>
                    
                </tr>
               
                    <?php
                        require('../account/connect.php');
                        // $makh =$_SESSION['makh'];
                        $email = isset($user['email_user'])?$user['email_user']:"";
                        $makh = $_SESSION['makh'];
                        $sql = "SELECT MAHD,NGLHD,HOADON.MAKH,TOTAL,PTTT FROM HOADON,KHACHHANG WHERE HOADON.MAKH=KHACHHANG.MAKH  AND KHACHHANG.MAKH = '$makh'";
                        // $sql = "SELECT * FROM HOADON WHERE MAKH ='$makh'";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            $stt=1;
                            while($row = mysqli_fetch_assoc($result)){
                                $ma = $row['MAHD'];
                                $date = $row['NGLHD'];
                                $ma_kh = $row['MAKH'];
                                $total = $row['TOTAL'];
                                $pttt = $row['PTTT'];
                                
                                if($total==0){
                                    echo "<td colspan='6'style='text-align:center;'>Không có hóa đơn nào!</td>";
                                }else{
                                    echo " <tr>";
                                    echo "<td>$stt</td>";
                                    echo "<td>$ma</td>";
                                    echo "<td>$date</td>";
                                    echo "<td>$ma_kh</td>";
                                    echo "<td>$total</td>";
                                    echo "<td>$pttt</td>";
                                ?>
                                <td><a href="../Storage/folder_php/admin/dele_hd.php?id_hd=<?php echo $row['MAHD'] ?>&query=xoahd_ktradonhang">Hủy đơn hàng</a></td>
                                <?php
                                    echo "</tr>";
                                };
                                $stt++;
                                }
                        }else{
                            echo "<td colspan='6'style='text-align:center;'>Không có hóa đơn nào!</td>";
                        }
                    ?>
            </table>
        </main>
        <!-- footer -->
        <div class="footer" style="margin-top: 210px;">
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
                    <img src="../logoSaleNoti.png" alt="">
                </li>
            </ul>
        </div>
    </div>
</body>

</html>