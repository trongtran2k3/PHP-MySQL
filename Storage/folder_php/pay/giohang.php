<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../folder_css/style-storage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                    <div class="shop-name">
                        <h3><a href="../../../Z-index.php" style="text-decoration: none;color: white;">MAMITI</a></h3>
                    </div>
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
                if (isset($_SESSION['account_user'])) {
                    $user = $_SESSION['account_user'];
                    $name = $user['name_user'];
                    $account = '';
                    $exit = " <a style='color: white;margin-left: 10px;font-size: 15px;'' href='../../../index_khach.php'><i class='fa-solid fa-right-from-bracket'></i></a>";
                } else {
                    $name = '';
                    $account = 'Tài khoản';
                    $exit = "";
                }

                ?>
                <div class="account" style="width: 350px;">
                    <b style="color: white;font-size: 15px;"><?php echo $name; ?></b><button style='background-color: black;'><a class="gradientButton" href="../../../account/account.php"><b style="font-size: 15px;font-weight: normal;"><?php echo $account . '&nbsp' . $exit; ?></b></a></button>
                    <div style=" margin-left: 70px; " class="storage">
                        <a href="giohang.php">
                            <?php
                            require('../../../account/connect.php');
                            $sql = "SELECT * FROM TEMP";
                            $num = mysqli_num_rows(mysqli_query($conn, $sql));
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
        <form method="post" action="xuly.php" name="myfrm">
            <div class="user" style="display: flex;justify-content: center;">
                <div class="col frm">
                    <h1>Thông tin nhận hàng</h1>
                    <input type="email" name="email" id="email" placeholder="Email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>">
                    <input type="text" name="fullname" id="fullname" placeholder="Họ và Tên" value="<?php echo $name; ?>">
                    <input type="text" name="phone" id="phone" placeholder="Số điện thoại">
                    <input type="text" name="address" id="address" placeholder="Địa chỉ">
                    <select name="provice" id="provice">
                        <option value="">--</option>
                        <option value="Can Tho">Cần Thơ</option>
                        <option value="Ha Noi">Hà Nội</option>
                        <option value="Ho Chi Minh">Hồ Chí Minh</option>
                        <option value="Da Nang">Đà Nẵng</option>
                    </select>
                    <textarea name="note" id="note" cols="30" rows="10" placeholder="Ghi chú(Tùy chọn)"></textarea>
                </div>
            </div>
            <div style="display: flex;justify-content: center;">
                <select name="pttt" id="pttt" style="text-align: center;width: 200px;">
                    <option value="">-Phương thức thanh toán-</option>
                    <option value="Chuyển khoản">Chuyển khoảng ngân hàng</option>
                    <option value="MoMo">Momo</option>
                    <option value="Thanh toán khi nhận">Thanh toán khi nhận hàng</option>
                </select>
            </div>
            <div class="body">
                <div class="title">
                    <p>Sản phẩm đã chọn</p>
                </div>
                <div class="main">
                    <table style="text-align: center;" class="table">
                        <tr class="list_title">
                            <th></th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>SIZE</th>
                            <th>ĐƠN GIÁ</th>
                            <th>SỐ LƯỢNG</th>
                            <th>THÀNH TIỀN</th>
                            <th></th>
                        </tr>
                        <tr class="amination">
                            <th colspan="7"></th>
                        </tr>
                        <?php
                        require('../../../account/connect.php');

                        $sql = "SELECT * FROM TEMP";
                        $result = mysqli_query($conn, $sql);
                        $total = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $ma = $row['MASP'];
                            $ma_hd = $row['MAHD'];
                            $sp = mysqli_query($conn, "SELECT * FROM sanpham WHERE MASP = '$ma'");
                            $row_sp = mysqli_fetch_assoc($sp);
                        ?>
                            <input type="hidden" name="mahd" id="mahd" value="<?php echo $ma_hd; ?>">

                            <tr class="list_product">
                                <?php
                                if ($row_sp['MALOAI'] == 'at_nam') {
                                    echo "<td>" ?> <img style="width: 70px;height: 70px;" src="../../../Davies original/AothunNam/<?php echo $row_sp['IMG']; ?>" alt=""><?php "</td>";
                                } else if ($row_sp['MALOAI'] == 'ak_nam') {
                                    echo "<td>" ?> <img style="width: 70px;height: 70px;" src="../../../Davies original/AokhoacNam/<?php echo $row_sp['IMG']; ?>" alt=""><?php "</td>";
                                                                                                                                                                                } else if ($row_sp['MALOAI'] == 'hd_nam') {
                                                                                                                                                                                    echo "<td>" ?> <img style="width: 70px;height: 70px;" src="../../../Davies original/Hoodie/<?php echo $row_sp['IMG']; ?>" alt=""><?php "</td>";
                                                                                                                                                                                } else if ($row_sp['MALOAI'] == 'q_nam') {
                                                                                                                                                                                    echo "<td>" ?> <img style="width: 70px;height: 70px;" src="../../../Davies original/QuanNam/<?php echo $row_sp['IMG']; ?>" alt=""><?php "</td>";
                                                                                                                                                                                } else if ($row_sp['MALOAI'] == 'lab_nam') {
                                                                                                                                                                                    echo "<td>" ?> <img style="width: 70px;height: 70px;" src="../../../Davies Lab/<?php echo $row_sp['IMG']; ?>" alt=""><?php "</td>";
                                                                                                                                                                                } else if ($row_sp['MALOAI'] == 'at_nu') {
                                                                                                                                                                                    echo "<td>" ?> <img style="width: 70px;height: 70px;" src="../../../Davies brand/AothunNu/<?php echo $row_sp['IMG']; ?>" alt=""><?php "</td>";
                                                                                                                                                                                } else if ($row_sp['MALOAI'] == 'ak_nu') {
                                                                                                                                                                                    echo "<td>" ?> <img style="width: 70px;height: 70px;" src="../../../Davies brand//AoKhoacNu/<?php echo $row_sp['IMG']; ?>" alt=""><?php "</td>";
                                                                                                                                                                                } else if ($row_sp['MALOAI'] == 'hd_nu') {
                                                                                                                                                                                    echo "<td>" ?> <img style="width: 70px;height: 70px;" src="../../../Davies brand/HoodieSWENu/<?php echo $row_sp['IMG']; ?>" alt=""><?php "</td>";
                                                                                                                                                                                } else if ($row_sp['MALOAI'] == 'cr_nu') {
                                                                                                                                                                                    echo "<td>" ?> <img style="width: 70px;height: 70px;" src="../../../Davies brand/AoCroptop/<?php echo $row_sp['IMG']; ?>" alt=""><?php "</td>";
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo "<td>" . $row_sp['IMG'] . "</td>";
                                                                                                                                                                                }
                                                                                                                                                                                    ?>
                                <td class="name_product"><?php echo $row_sp['TENSP'] ?></td>
                                <td class="size_product"><?php echo $row['SIZE'] ?></td>
                                <td class="price_product"><input type="text" name="price" id="price" value="<?php echo $row_sp['GIA'] ?>"></td>
                                <td class="amount_product">
                                    <div style="width: 50%;display: flex; justify-content: center;">
                                        <!-- <button type="button" onclick="down()" style="padding: 5px 10px;">-</button> -->
                                        <input style="width: 100px;border: 0;outline: none;text-align: center;" type="text" name="count" id="count" value="<?php echo $row['SL']; ?>" maxlength="4">
                                        <!-- <button type="button" onclick="up()" style="padding: 5px 10px;">+</button> -->
                                    </div>
                                </td>
                                <td class="money_product">
                                    <?php

                                    $price = $row_sp['GIA'];
                                    $count = $row['SL'];
                                    $sum =   (int)$price * (int)$count;
                                    $total = (int)$total + (int)$sum;
                                    ?>
                                    <input type="text" name="result" id="result" value="<?php echo $sum; ?>" disabled>

                                </td>

                                <td class="delete_product" style="display: flex;width: ̀̀50px;height: 70px; justify-content: space-between;align-items: center;">
                                    <a style="text-decoration: none;" class="btn" href="dele_cart.php?id=<?php echo $ma; ?>&query=xoa">Xóa</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr class="link">
                            <td class="link_index"><a href="../../../allin.php"><i class="fa-solid fa-arrow-left-long"></i> Tiếp tục mua hàng</a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="sum">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2" class="sum_i">
                                <table>
                                    <tr>
                                        <th>Tổng tiền: </th>
                                        <th>
                                            <input style="outline: none;border: 0; width: 50px;" type="text" name="total" id="total" value="<?= $total; ?>">
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr class="pay">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2" class="pay_i">
                                <a style="display: flex; text-decoration: none;width: 130px;margin-left: 60px; color: black;justify-content: center;" href="xuly.php">
                                    <input style="border: 0;outline: none;background-color: transparent;" type="submit" onclick="show()" name="sub" id="sub" value="THANH TOÁN">
                                </a>
                            </td>
                        </tr>

                    </table>
                </div>
        </form>
        <script>
            var myfrm = document.forms.myfrm;
            function show(){
                var fullname = document.getElementById("fullname").value;
                var phone = document.getElementById("phone").value;
                var email = document.getElementById("email").value;
                var address = document.getElementById("address").value;
                var provice = document.getElementById("provice").value;
                var pttt = document.getElementById("pttt").value;
                var dem =0;
                var dem_phone = 0;
                var temp=0;
                for(let i= 0 ;i<fullname.length;i++){
                    if(!isNaN(fullname.charAt(i))){ 
                        dem++; 
                    }
                }
                for(let i= 0 ;i<phone.length;i++){
                    if(isNaN(phone.charAt(i))){ 
                        dem_phone++; 
                    }
                }
                if(email==''||fullname==''||address==''||address==''||phone==''){
                    temp+=1;
                   alert('Vui lòng điền đầy đủ thông tin!');
                }else if(dem>0){
                    temp+=1;
                    alert("Tên không được điền số!");
                }else if(dem_phone>0){
                    temp+=1;
                    alert("Số điện thoại không được điền chữ!");
                }else if(pttt==''){
                    temp+=1;
                   alert('Vui lòng chọn hình thức thanh toán!');
                }
                myfrm.onsubmit = function() {
                    if(dem>0||dem_phone>0||temp>0){
                        return false;
                    }else{
                        return true;
                    }
                }
            }
        </script>
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