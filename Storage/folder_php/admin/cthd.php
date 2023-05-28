<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hóa đơn</title>
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
            <form action="##">
                <label for=""><div class="name"><a href="../../../Z-index.php">MaMiTi</a></div></label>
                <a style="height: 120px;" href="../../../Z-index.php"><img style="width: 100px;height: 100px;" src="../../../Mamiti.png" alt=""></a>
                <a href="admin.php">Chào:  <b><?php echo $admin['name_user'];?></b></a>
                <a href="../../../Z-index.php"><i class="fa-solid fa-people-roof"></i> Shop</a>
                <a href="hoadon.php"><i class="fa-solid fa-bars"></i>  Hóa đơn</a>
                <a href="sanpham.php"><i class="fa-solid fa-store"></i>  Sản phẩm</a>
                <a href="khachhang.php"> Khách hàng</a>
                <a style="background-color: antiquewhite;" href="cthd.php">CTHD</a>
                <a href="user.php"><i class="fa-solid fa-user"></i>  User</a>
                <a href="../../../account/account.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
            </form>
        </div>
        <div class="main_right">
            <form action="##">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>MASP</th>
                        <th>MAHD</th>
                        <th>SIZE</th>
                        <th>SL</th>
                        <th>GIA</th>
                    </tr>
                    <?php
                        require('C:/xampp/htdocs/web 2023 remake/account/connect.php');
                        $cthd = "SELECT * FROM CTHD";
                        $result = mysqli_query($conn,$cthd);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<td>".$row['STT']."</td>";
                            echo "<td>".$row['MASP']."</td>";
                            echo "<td>".$row['MAHD']."</td>";
                            echo "<td>".$row['SIZE']."</td>";
                            echo "<td>".$row['SL']."</td>";
                            echo "<td>".$row['GIA']."</td>";
                           ?>
                           <td><a class="btn" href="change_cthd.php?id_cthd=<?php echo $row['MAHD'] ?>&query=suacthd">Sửa</a><a class="btn" href="dele_cthd.php?id_cthd=<?php echo $row['MAHD'] ?>&query=xoacthd">Xóa</a></td>
                           <?php
                            echo "</tr>";
                        }
                    ?>
                    <tr>
                        <th style="height: 100px;" colspan="10">
                            <a style="margin-right: 50px;" class="btn" href="them_hd.php">Thêm</a>
                            <a style="margin-left: 50px;" class="btn" href="admin.php">Về trang chủ</a>
                        </th>
                    </tr>
                </table>
            </form>
        </div>
    </main>
</body>
</html>