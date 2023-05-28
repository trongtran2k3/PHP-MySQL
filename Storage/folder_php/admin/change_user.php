<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sửa</title>
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
            <form >
                <label for=""><div class="name"><a href="../../../Z-index.php">MaMiTi</a></div></label>
                <a style="height: 120px;" href="../../../Z-index.php"><img style="width: 100px;height: 100px;" src="../../../Mamiti.png" alt=""></a>
                <a href="admin.php">Chào:  <b><?php echo $admin['name_user'];?></b></a>
                <a href="../../../Z-index.php"><i class="fa-solid fa-people-roof"></i> Shop</a>
                <a href="hoadon.php"><i class="fa-solid fa-bars"></i>  Hóa đơn</a>
                <a href="sanpham.php"><i class="fa-solid fa-store"></i>  Sản phẩm</a>
                <a href="khachhang.php"> Khách hàng</a>
                <a href="cthd.php">CTHD</a>
                <a href="user.php"><i class="fa-solid fa-user"></i>  User</a>
                <a href="../../../account/account.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
            </form>
        </div>
        <div class="change">
            <form method="post">
                    <?php
                        require('../../../account/connect.php');
                        if(isset($_GET['query']) =='sua_user'){
                            $ma = isset($_GET['id_user'])?$_GET['id_user']:"";
                            $sanpham = "SELECT * FROM account WHERE id_user = '$ma'";
                            $result = mysqli_query($conn,$sanpham);
                            $row = mysqli_fetch_assoc($result);
                        }
                    ?>
                <form  method="post">
                    <table class="tb_change">
                                <tr>
                                    <th><label>ID</label></th>
                                    <th><input type="text" name="id_user" value="<?php echo $row['id_user'];?>" ></th>
                                </tr>
                                <tr>
                                    <th><label>NAME</label></th>
                                    <th><input type="text" name="name_user" value="<?php echo $row['name_user'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>EMAIL</label></th>
                                    <th><input type="text" name="email_user" value="<?php echo $row['email_user'];?>"></th>
                                </tr>
                                <tr>
                                    <th><label>PASS</label></th>
                                    <th><input type="text" name="pass_user" value="<?php echo $row['pass_user'];?>"></th>
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        <input style="font-weight: bold; font-size: 14px;" type="submit" name="sub" class="btn" id="sub" value="Thay đổi">
                                        <a style="margin-left: 50px;background-color: bisque;" class="btn" href="admin.php">Về trang chủ</a>
                                    </th>
                                </tr>
                    </table>
                </form>
                            <?php
                                require('../../../account/connect.php');
                                $id_user  =  isset($_POST['id_user'])?$_POST['id_user']:"";
                                $name_user  =  isset($_POST['name_user'])?$_POST['name_user']:"";
                                $email_user  =  isset($_POST['email_user'])?$_POST['email_user']:"";
                                $pass_user  =  isset($_POST['pass_user'])?$_POST['pass_user']:"";
                                $update = "UPDATE account SET name_user = '$name_user',email_user = '$email_user',pass_user = '$pass_user' WHERE id_user = '$id_user'";
                                
                                if(isset($_POST['sub'])){
                                    mysqli_query($conn,$update);
                                    header("location: user.php");
                                }
                                mysqli_close($conn);
                            ?>
            </form>
        </div>
    </main>
</body>
</html>