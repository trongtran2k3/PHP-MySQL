<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sản phẩm</title>
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
                <form method="post">
                    <label for="">
                        <div class="name"><a href="../../../Z-index.php">MaMiTi</a></div>
                    </label>
                    <a style="height: 120px;" href="../../../Z-index.php"><img style="width: 100px;height: 100px;" src="../../../Mamiti.png" alt=""></a>
                    <a href="admin.php">Chào: <b><?php echo $admin['name_user']; ?></b></a>
                    <a href="../../../Z-index.php"><i class="fa-solid fa-people-roof"></i> Shop</a>
                    <a href="hoadon.php"><i class="fa-solid fa-bars"></i>  Hóa đơn</a>
                    <a style="background-color: antiquewhite;" href="sanpham.php"><i class="fa-solid fa-store"></i> Sản phẩm</a>
                    <a href="khachhang.php"> Khách hàng</a>
                    <a href="cthd.php">CTHD</a>
                    <a href="user.php"><i class="fa-solid fa-user"></i> User</a>
                    <a href="../../../account/account.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
                </form>
            </div>
            <div class="main_right">
                <div class="search">
                    <form method="post" class="search_bar">
                        <input type="text" name="search" id="search" placeholder="Tìm kiếm sản phẩm">
                        <input type="submit" name="sub" class="btn" id="sub" value="Tìm kiếm">
                        <!-- <a style="text-decoration: none;color: black;" class="label" href="search.php"><i class="fa-solid fa-magnifying-glass"></i></a> -->
                    </form>
                </div>
                <form>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Img</th>
                            <th>Mã loại</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng còn</th>
                            <th>Size</th>
                            <th>DVT</th>
                            <th>Giá</th>
                            <th>Chỉnh sữa</th>
                        </tr>
                        <tr>
                            <?php
                            require('C:/xampp/htdocs/web 2023 remake/account/connect.php');
                            $sp = isset($_POST['search']) ? $_POST['search'] : "";

                            $sql = "SELECT * FROM sanpham WHERE TENSP like '%$sp%'";
                            $stt = 1;
                            $kq = mysqli_query($conn, $sql);
                            if ($sp == '') {
                                // echo "<td colspan='10'>Khoong timf thaay</td>";echo "</tr>";
                                $all_sp = "SELECT * FROM sanpham";
                                $result_all = mysqli_query($conn, $all_sp);
                                if (mysqli_num_rows($result_all) > 0) {
                                    while ($row = mysqli_fetch_assoc($result_all)) {
                                        echo "<td>$stt</td>";
                                        $stt++;
                                        echo "<td>" . $row['MASP'] . "</td>";
                                        if ($row['MALOAI'] == 'at_nam') {
                                            echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies original/AothunNam/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                        } else if ($row['MALOAI'] == 'ak_nam') {
                                            echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies original/AokhoacNam/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                            } else if ($row['MALOAI'] == 'hd_nam') {
                                                echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies original/Hoodie/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                            } else if ($row['MALOAI'] == 'q_nam') {
                                                echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies original/QuanNam/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                            } else if ($row['MALOAI'] == 'lab_nam') {
                                                echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies Lab/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                            } else if ($row['MALOAI'] == 'at_nu') {
                                                echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies brand/AothunNu/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                            } else if ($row['MALOAI'] == 'ak_nu') {
                                                echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies brand//AoKhoacNu/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                            } else if ($row['MALOAI'] == 'hd_nu') {
                                                echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies brand/HoodieSWENu/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                            } else if ($row['MALOAI'] == 'cr_nu') {
                                                echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies brand/AoCroptop/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                            } else {
                                                echo "<td>" . $row['IMG'] . "</td>";
                                            }
                                            echo "<td>" . $row['MALOAI'] . "</td>";
                                            echo "<td>" . $row['TENSP'] . "</td>";
                                            echo "<td>" . $row['SL_CON'] . "</td>";
                                            echo "<td>" . $row['SIZE'] . "</td>";
                                            echo "<td>" . $row['DVT'] . "</td>";
                                            echo "<td>" . $row['GIA'] . "</td>";
                                            ?>
                                        <td>
                                            <a class="btn" href="change.php?id_sp=<?php echo $row['MASP'] ?>&query=sua">Sửa</a>
                                            <a class="btn" href="dele.php?id_sp=<?php echo $row['MASP'] ?>&query=xoa">Xóa</a>
                                        </td>
                                    <?php
                                        echo "</tr>";
                                    }
                                }
                            } else if (mysqli_num_rows($kq) > 0) {
                                while ($row = mysqli_fetch_assoc($kq)) {
                                    echo "<td>$stt</td>";
                                    $stt++;
                                    echo "<td>" . $row['MASP'] . "</td>";
                                    if ($row['MALOAI'] == 'at_nam') {
                                        echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies original/AothunNam/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                    } else if ($row['MALOAI'] == 'ak_nam') {
                                        echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies original/AokhoacNam/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                        } else if ($row['MALOAI'] == 'hd_nam') {
                                            echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies original/Hoodie/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                        } else if ($row['MALOAI'] == 'q_nam') {
                                            echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies original/QuanNam/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                        } else if ($row['MALOAI'] == 'lab_nam') {
                                            echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies Lab/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                        } else if ($row['MALOAI'] == 'at_nu') {
                                            echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies brand/AothunNu/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                        } else if ($row['MALOAI'] == 'ak_nu') {
                                            echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies brand//AoKhoacNu/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                        } else if ($row['MALOAI'] == 'hd_nu') {
                                            echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies brand/HoodieSWENu/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                        } else if ($row['MALOAI'] == 'cr_nu') {
                                            echo "<td>" ?> <img style="width: 40px;height: 40px;" src="../../../Davies brand/AoCroptop/<?php echo $row['IMG']; ?>" alt=""><?php "</td>";
                                        } else {
                                            echo "<td>" . $row['IMG'] . "</td>";
                                        }
                                        echo "<td>" . $row['MALOAI'] . "</td>";
                                        echo "<td>" . $row['TENSP'] . "</td>";
                                        echo "<td>" . $row['SL_CON'] . "</td>";
                                        echo "<td>" . $row['SIZE'] . "</td>";
                                        echo "<td>" . $row['DVT'] . "</td>";
                                        echo "<td>" . $row['GIA'] . "</td>";
                                        ?>
                                    <td>
                                        <a class="btn" href="change.php?id_sp=<?php echo $row['MASP'] ?>&query=sua">Sửa</a>
                                        <a class="btn" href="dele.php?id_sp=<?php echo $row['MASP'] ?>&query=xoa">Xóa</a>
                                    </td>
                            <?php
                                    echo "</tr>";
                                }
                            } else {
                                echo "<td colspan='10'>Không tìm thấy sản phẩm</td>";
                                echo "</tr>";
                            }

                            ?>
                        <tr>
                            <th style="height: 100px;" colspan="10">
                                <a style="margin-right: 50px;" class="btn" href="them.php?query=them_sp">Thêm</a>
                                <a style="margin-left: 50px;" class="btn" href="admin.php">Về trang chủ</a>
                            </th>

                        </tr>
                    </table>
                </form>

            </div>
        </main>
</body>

</html>