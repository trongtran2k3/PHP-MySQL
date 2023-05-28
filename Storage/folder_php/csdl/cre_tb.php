<?php
require('connect.php');
$db = 'web_ban_hang';
$conn = mysqli_connect($host, $username, $password, $db);
if (!$conn) {
    die("<br>Kết nối $db không thành công!");
} else {
    echo "Kết nối $db thành công!";
    // create table
    $cre_tb_khachhang = "CREATE TABLE KHACHHANG(
                                                    MAKH CHAR(20),	
                                                    HOTEN	VARCHAR(40),
                                                    DCHI	varchar(200),
                                                    SODT	varchar(20),
                                                    EMAIL VARCHAR(30),
                                                    NOTE VARCHAR(200),
                                                    PRIMARY KEY(MAKH)
                                                )";
    if (mysqli_query($conn, $cre_tb_khachhang)) {
        echo "<br>Tạo bảng khách hàng thành công!";
    } else {
        echo "<br>Tạo bảng khách hàng không thành công!" . mysqli_error($conn);
    }
    $cre_tb_loaisp = "CREATE TABLE LOAISP(    
                                                MALOAI CHAR(30),
                                                TENLOAI VARCHAR(50),
                                                PRIMARY KEY(MALOAI)
                                            )";
    if (mysqli_query($conn, $cre_tb_loaisp)) {
    echo "<br>Tạo bảng loại sản phẩm thành công!";
    } else {
    echo "<br>Tạo bảng loại sản phẩm không thành công!" . mysqli_error($conn);
    }
    $cre_tb_sanpham = "CREATE TABLE SANPHAM(    
                                                    MASP CHAR(20),
                                                    IMG VARCHAR(50),
                                                    FILE_PHP VARCHAR(50),
                                                    MALOAI CHAR(30),
                                                    TENSP VARCHAR(50),
                                                    SL_CON INT,
                                                    SIZE CHAR(5),
                                                    DVT CHAR(10),
                                                    GIA DECIMAL(10,2),
                                                    CONSTRAINT fk01_SANPHAM FOREIGN KEY(MALOAI) REFERENCES LOAISP(MALOAI) ON DELETE SET NULL,
                                                    PRIMARY KEY(MASP)
                                                )";
    if (mysqli_query($conn, $cre_tb_sanpham)) {
        echo "<br>Tạo bảng sản phẩm thành công!";
    } else {
        echo "<br>Tạo bảng sản phẩm không thành công!" . mysqli_error($conn);
    }
    $cre_tb_hoadon = "CREATE TABLE HOADON(
                                                    MAHD CHAR(10),
                                                    NGLHD DATETIME,
                                                    MAKH CHAR(20),
                                                    TOTAL DECIMAL(10,2),
                                                    PTTT VARCHAR(40),
                                                    CONSTRAINT fk01_HOADON FOREIGN KEY(MAKH) REFERENCES KHACHHANG(MAKH) ON DELETE SET NULL,
                                                    PRIMARY KEY(MAHD)
                                                )";
    if (mysqli_query($conn, $cre_tb_hoadon)) {
        echo "<br>Tạo bảng hóa đơn thành công!";
    } else {
        echo "<br>Tạo bảng hóa đơn không thành công!" . mysqli_error($conn);
    }
    $cre_tb_cthd = "CREATE TABLE CTHD(
                                                STT	INT(10) AUTO_INCREMENT, 	
                                                MASP CHAR(20),
                                                MAHD CHAR(10),
                                                SIZE CHAR(10),
                                                SL	INT,
                                                GIA DECIMAL(10,2),
                                                CONSTRAINT fk01_CTHD FOREIGN KEY(MAHD) REFERENCES HOADON(MAHD)  ON DELETE SET NULL,
                                                CONSTRAINT fk02_CTHD FOREIGN KEY(MASP) REFERENCES SANPHAM(MASP) ON DELETE SET NULL,
                                                PRIMARY KEY(STT)
                                          )";
    if (mysqli_query($conn, $cre_tb_cthd)) {
        echo "<br>Tạo bảng chi tiết hóa đơn thành công!";
    } else {
        echo "<br>Tạo bảng chi tiết hóa đơn không thành công!" . mysqli_error($conn);
    }
    $cre_tb_temp = "CREATE TABLE TEMP(
                                            STT	INT(10) AUTO_INCREMENT, 	
                                            MASP CHAR(20),
                                            MAHD CHAR(10),
                                            SIZE CHAR(10),
                                            SL	INT,
                                            GIA DECIMAL(10,2),
                                            PRIMARY KEY(STT)
                                    )";
        if (mysqli_query($conn, $cre_tb_temp)) {
        echo "<br>Tạo bảng temp thành công!";
        } else {
        echo "<br>Tạo bảng temp không thành công!" . mysqli_error($conn);
        }
}
mysqli_close($conn);
?>
