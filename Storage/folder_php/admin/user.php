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
                <a href="cthd.php">CTHD</a>
                <a style="background-color: antiquewhite;" href="user.php"><i class="fa-solid fa-user"></i>  User</a>
                <a href="../../../account/account.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
            </form>
        </div>
        <div class="main_right">
            <form action="##">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Tên người dùng</th>
                        <th>Email người dùng</th>
                        <th>Password</th>
                        <th>Chỉnh sữa</th>
                    </tr>
                    <tr>

                    </tr>
                    <?php
                        require('C:/xampp/htdocs/web 2023 remake/account/connect.php');
                        $danhmuc = "SELECT * FROM account";
                        $stt =1;
                        $result = mysqli_query($conn,$danhmuc);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<td>".$row['id_user']."</td>";
                            echo "<td>".$row['name_user']."</td>";
                            echo "<td>".$row['email_user']."</td>";
                            echo "<td>".$row['pass_user']."</td>";
                           ?>
                           <td>
                                <a class="btn" href="change_user.php?id_user=<?php echo $row['id_user'] ?>&query=sua_user">Sữa</a>
                                <a class="btn" href="dele_user.php?id_user=<?php echo $row['id_user'];?>&query=xoauser">Xóa</a>
                            </td>   
                           <?php
                            echo "</tr>";
                        }
                    ?>
                    <tr>
                        <th style="height: 100px;" colspan="10">
                            <a style="margin-right: 50px;" class="btn" href="them_user.php?query=them_user">Thêm</a>
                            <a style="margin-left: 50px;" class="btn" href="admin.php">Về trang chủ</a>
                        </th>

                    </tr>
                </table>
            </form>
        </div>
    </main>
</body>
</html>