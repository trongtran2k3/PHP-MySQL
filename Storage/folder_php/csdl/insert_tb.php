<?php
    require('connect.php');
    $db = 'web_ban_hang';
$conn = mysqli_connect($host, $username, $password, $db);
if (!$conn) {
    die("<br>Kết nối $db không thành công!");
} else {
    echo "<br>Kết nối $db thành công!";
    // insert table
    $insert_loaisp = "INSERT INTO LOAISP(`MALOAI`,`TENLOAI`)
    VALUES('at_nam','ÁO THUN NAM'),
        ('ak_nam','ÁO KHOÁC NAM'),
        ('hd_nam','ÁO HOODIES NAM'),
        ('lab_nam','ÁO THUN LAB NAM'),
        ('q_nam','QUẦN THUN NAM'),
        ('at_nu','ÁO THUN NỮ'),
        ('ak_nu','ÁO KHOÁC NỮ'),
        ('cr_nu','ÁO CROPTOP NỮ'),
        ('hd_nu','ÁO HOODIES NỮ') 
    ";
    if(mysqli_query($conn,$insert_loaisp)){
    echo "Insert thành công!";
    }else{
    echo "Insert thất bại!".mysqli_error($conn);
    }
    $insert_sanpham = "INSERT INTO sanpham(`MASP`,`IMG`,`FILE_PHP`,`MALOAI`,`TENSP`,`SL_CON`,`SIZE`,`DVT`,`GIA`)
              VALUES('D29-T7-D-2-S','1.webp','1/1.php','at_nam','DSW TEE WAFFLE KNIT','100','S','Cái','219000'),
                    ('D29-T7-D-2-M','1.webp','1/1.php','at_nam','DSW TEE WAFFLE KNIT','100','M','Cái','219000'),
                    ('D29-T7-D-2-L','1.webp','1/1.php','at_nam','DSW TEE WAFFLE KNIT','100','L','Cái','219000'),

                    ('D26-T12-2-S','2.webp','2/2.php','at_nam','DSW TEE VITAMIN DEE','100','S','Cái','199000'),
                    ('D26-T12-2-M','2.webp','2/2.php','at_nam','DSW TEE VITAMIN DEE','100','M','Cái','199000'),
                    ('D26-T12-2-L','2.webp','2/2.php','at_nam','DSW TEE VITAMIN DEE','100','L','Cái','199000'),

                    ('D26-T1-2-S','3.webp','3/3.php','at_nam','DSW TEE FLOWER','100','S','Cái','199000'),
                    ('D26-T1-2-M','3.webp','3/3.php','at_nam','DSW TEE FLOWER','100','M','Cái','199000'),
                    ('D26-T1-2-L','3.webp','3/3.php','at_nam','DSW TEE FLOWER','100','L','Cái','199000'),
                    
                    ('D26-T5-D-2-S','4.webp','4/4.php','at_nam','DSW TEE EXCITED','100','S','Cái','199000'),
                    ('D26-T5-D-2-M','4.webp','4/4.php','at_nam','DSW TEE EXCITED','100','M','Cái','199000'),
                    ('D26-T5-D-2-L','4.webp','4/4.php','at_nam','DSW TEE EXCITED','100','L','Cái','199000'),

                    ('D28-T12-D-2-S','5.webp','5/5.php','at_nam','DSW TEE DAVIES X DANANG DRAGONS SS22','100','S','Cái','199000'),
                    ('D28-T12-D-2-M','5.webp','5/5.php','at_nam','DSW TEE DAVIES X DANANG DRAGONS SS22','100','M','Cái','199000'),
                    ('D28-T12-D-2-L','5.webp','5/5.php','at_nam','DSW TEE DAVIES X DANANG DRAGONS SS22','100','L','Cái','199000'),

                    ('D25-T2-D-2-S','6.webp','6/6.php','at_nam','DSW TEE GRUNGE','100','S','Cái','199000'),
                    ('D25-T2-D-2-M','6.webp','6/6.php','at_nam','DSW TEE GRUNGE','100','M','Cái','199000'),
                    ('D25-T2-D-2-L','6.webp','6/6.php','at_nam','DSW TEE GRUNGE','100','L','Cái','199000'),

                    ('401602220102-S','7.webp','7/7.php','at_nam','DSW TEE PRIME','100','S','Cái','228000'),
                    ('401602220102-M','7.webp','7/7.php','at_nam','DSW TEE PRIME','100','M','Cái','228000'),
                    ('401602220102-L','7.webp','7/7.php','at_nam','DSW TEE PRIME','100','L','Cái','228000'),

                    ('402107211102-S','8.webp','8/8.php','at_nam','DSW TEE CAMOU TYPE LOGO - BLACK','100','S','Cái','208000'),
                    ('402107211102-M','8.webp','8/8.php','at_nam','DSW TEE CAMOU TYPE LOGO - BLACK','100','M','Cái','208000'),
                    ('402107211102-L','8.webp','8/8.php','at_nam','DSW TEE CAMOU TYPE LOGO - BLACK','100','L','Cái','208000'),
                    
                    ('D25-AK1-D-2-S','1.webp','1/1.php','ak_nam','DSW HOODED BASIC JACKET - ĐEN','100','S','Cái','299000'),
                    ('D25-AK1-D-2-M','1.webp','1/1.php','ak_nam','DSW HOODED BASIC JACKET - ĐEN','100','M','Cái','299000'),
                    ('D25-AK1-D-2-L','1.webp','1/1.php','ak_nam','DSW HOODED BASIC JACKET - ĐEN','100','L','Cái','299000'),

                    ('D30-AK8-2-S','2.webp','2/2.php','ak_nam','DSW JACKET DPH4X','100','S','Cái','299000'),
                    ('D30-AK8-2-M','2.webp','2/2.php','ak_nam','DSW JACKET DPH4X','100','M','Cái','299000'),
                    ('D30-AK8-2-L','2.webp','2/2.php','ak_nam','DSW JACKET DPH4X','100','L','Cái','299000'),

                    ('D30-AK7-2-S','3.webp','3/3.php','ak_nam','DSW FOREST JACKET','100','S','Cái','299000'),
                    ('D30-AK7-2-M','3.webp','3/3.php','ak_nam','DSW FOREST JACKET','100','M','Cái','299000'),
                    ('D30-AK7-2-L','3.webp','3/3.php','ak_nam','DSW FOREST JACKET','100','L','Cái','299000'),

                    ('D30-AK1-2-S','4.webp','4/4.php','ak_nam','DSW PUFF JACKET','100','S','Cái','299000'),
                    ('D30-AK1-2-M','4.webp','4/4.php','ak_nam','DSW PUFF JACKET','100','M','Cái','299000'),
                    ('D30-AK1-2-L','4.webp','4/4.php','ak_nam','DSW PUFF JACKET','100','L','Cái','299000'),

                    ('D30-AK5-D-2-S','5.webp','5/5.php','ak_nam','DSW FORREST VARSITY JACKET','100','S','Cái','392000'),
                    ('D30-AK5-D-2-M','5.webp','5/5.php','ak_nam','DSW FORREST VARSITY JACKET','100','M','Cái','392000'),
                    ('D30-AK5-D-2-L','5.webp','5/5.php','ak_nam','DSW FORREST VARSITY JACKET','100','L','Cái','392000'),

                    ('D27-AK1-2-S','6.webp','6/6.php','ak_nam','DSW BOMBER JACKET TACTICAL','100','S','Cái','396000'),
                    ('D27-AK1-2-M','6.webp','6/6.php','ak_nam','DSW BOMBER JACKET TACTICAL','100','M','Cái','396000'),
                    ('D27-AK1-2-L','6.webp','6/6.php','ak_nam','DSW BOMBER JACKET TACTICAL','100','L','Cái','396000'),

                    ('D30-AK6-2-S','7.webp','7/7.php','ak_nam','DSW JACKET DAVIESISM CLASSIC SS22','100','S','Cái','299000'),
                    ('D30-AK6-2-M','7.webp','7/7.php','ak_nam','DSW JACKET DAVIESISM CLASSIC SS22','100','M','Cái','299000'),
                    ('D30-AK6-2-L','7.webp','7/7.php','ak_nam','DSW JACKET DAVIESISM CLASSIC SS22','100','L','Cái','299000'),

                    ('D29-AK8-2-S','8.webp','8/8.php','ak_nam','DSW GREEN BOMBER VARSITY JACKET','100','S','Cái','544000'),
                    ('D29-AK8-2-M','8.webp','8/8.php','ak_nam','DSW GREEN BOMBER VARSITY JACKET','100','M','Cái','544000'),
                    ('D29-AK8-2-L','8.webp','8/8.php','ak_nam','DSW GREEN BOMBER VARSITY JACKET','100','L','Cái','544000'),

                    ('D29-HD12-2-S','1.webp','1/1.php','hd_nam','DSW HOODIE ZIP COMMUNITY','100','S','Cái','299000'),
                    ('D29-HD12-2-M','1.webp','1/1.php','hd_nam','DSW HOODIE ZIP COMMUNITY','100','M','Cái','299000'),
                    ('D29-HD12-2-L','1.webp','1/1.php','hd_nam','DSW HOODIE ZIP COMMUNITY','100','L','Cái','299000'),

                    ('D29-HD10-2-S','2.webp','2/2.php','hd_nam','DSW HOODIE COMMUNITY','100','S','Cái','299000'),
                    ('D29-HD10-2-M','2.webp','2/2.php','hd_nam','DSW HOODIE COMMUNITY','100','M','Cái','299000'),
                    ('D29-HD10-2-L','2.webp','2/2.php','hd_nam','DSW HOODIE COMMUNITY','100','L','Cái','299000'),

                    ('D25-HD1-B-2-S','3.webp','3/3.php','hd_nam','DSW D BASIC HOODIE','100','S','Cái','368000'),
                    ('D25-HD1-B-2-M','3.webp','3/3.php','hd_nam','DSW D BASIC HOODIE','100','M','Cái','368000'),
                    ('D25-HD1-B-2-L','3.webp','3/3.php','hd_nam','DSW D BASIC HOODIE','100','L','Cái','368000'),

                    ('401310201402-S','4.webp','4/4.php','hd_nam','DSW HOODIE REBOOT TACTICAL','100','S','Cái','256000'),
                    ('401310201402-M','4.webp','4/4.php','hd_nam','DSW HOODIE REBOOT TACTICAL','100','M','Cái','256000'),
                    ('401310201402-L','4.webp','4/4.php','hd_nam','DSW HOODIE REBOOT TACTICAL','100','L','Cái','256000'),
                    
                    ('402411102-S','5.webp','5/5.php','hd_nam','DSW HOODIE DAVIES FORMULA','100','S','Cái','256000'),
                    ('402411102-M','5.webp','5/5.php','hd_nam','DSW HOODIE DAVIES FORMULA','100','M','Cái','256000'),
                    ('402411102-L','5.webp','5/5.php','hd_nam','DSW HOODIE DAVIES FORMULA','100','L','Cái','256000'),

                    ('40171020702-S','6.webp','6/6.php','hd_nam','DSW HOODIE WARRIOR','100','S','Cái','264000'),
                    ('40171020702-M','6.webp','6/6.php','hd_nam','DSW HOODIE WARRIOR','100','M','Cái','264000'),
                    ('40171020702-L','6.webp','6/6.php','hd_nam','DSW HOODIE WARRIOR','100','L','Cái','264000'),

                    ('40131020902-S','7.webp','7/7.php','hd_nam','DSW HOODIE PHUOC','100','S','Cái','2569000'),
                    ('40131020902-M','7.webp','7/7.php','hd_nam','DSW HOODIE PHUOC','100','M','Cái','2569000'),
                    ('40131020902-L','7.webp','7/7.php','hd_nam','DSW HOODIE PHUOC','100','L','Cái','2569000'),

                    ('40131020702-S','8.webp','8/8.php','hd_nam','DSW HOODIE AGGRESSION RIBON','100','S','Cái','256000'),
                    ('40131020702-M','8.webp','8/8.php','hd_nam','DSW HOODIE AGGRESSION RIBON','100','M','Cái','256000'),
                    ('40131020702-L','8.webp','8/8.php','hd_nam','DSW HOODIE AGGRESSION RIBON','100','L','Cái','256000'),

                    ('4014392502-S','1.webp','1/1.php','q_nam','DSW BOX PANT BASIC LOGO','100','S','Cái','232000'),
                    ('4014392502-M','1.webp','1/1.php','q_nam','DSW BOX PANT BASIC LOGO','100','M','Cái','232000'),
                    ('4014392502-L','1.webp','1/1.php','q_nam','DSW BOX PANT BASIC LOGO','100','L','Cái','232000'),

                    ('D16-Q1-2-S','2.webp','2/2.php','q_nam','D16-Q1 TRIPED LINE PANT FLEX','100','S','Cái','255000'),
                    ('D16-Q1-2-M','2.webp','2/2.php','q_nam','D16-Q1 TRIPED LINE PANT FLEX','100','M','Cái','255000'),
                    ('D16-Q1-2-L','2.webp','2/2.php','q_nam','D16-Q1 TRIPED LINE PANT FLEX','100','L','Cái','255000'),

                    ('400906210502-S','3.webp','3/3.php','q_nam','DSW SHORT GREY CAMOU','100','S','Cái','221000'),
                    ('400906210502-M','3.webp','3/3.php','q_nam','DSW SHORT GREY CAMOU','100','M','Cái','221000'),
                    ('400906210502-L','3.webp','3/3.php','q_nam','DSW SHORT GREY CAMOU','100','L','Cái','221000'),

                    ('D21-Q1-2-S','4.webp','4/4.php','q_nam','D21-Q1 POLI SHORT BASIC','100','S','Cái','2217000'),
                    ('D21-Q1-2-M','4.webp','4/4.php','q_nam','D21-Q1 POLI SHORT BASIC','100','M','Cái','2217000'),
                    ('D21-Q1-2-L','4.webp','4/4.php','q_nam','D21-Q1 POLI SHORT BASIC','100','L','Cái','2217000'),

                    ('37218022203-S','1.webp','1/1.php','lab_nam','DVSL BASIC TEE WHITE','100','S','Cái','200000'),
                    ('37218022203-M','1.webp','1/1.php','lab_nam','DVSL BASIC TEE WHITE','100','M','Cái','200000'),
                    ('37218022203-L','1.webp','1/1.php','lab_nam','DVSL BASIC TEE WHITE','100','L','Cái','200000'),

                    ('372191220602-S','2.webp','2/2.php','lab_nam','DVSL TEE CHEST BOX','100','S','Cái','256000'),
                    ('372191220602-M','2.webp','2/2.php','lab_nam','DVSL TEE CHEST BOX','100','M','Cái','256000'),
                    ('372191220602-L','2.webp','2/2.php','lab_nam','DVSL TEE CHEST BOX','100','L','Cái','256000'),

                    ('372191220502-S','3.webp','3/3.php','lab_nam','DVSL HOLO ZIPPER BOX','100','S','Cái','220000'),
                    ('372191220502-M','3.webp','3/3.php','lab_nam','DVSL HOLO ZIPPER BOX','100','M','Cái','220000'),
                    ('372191220502-L','3.webp','3/3.php','lab_nam','DVSL HOLO ZIPPER BOX','100','L','Cái','220000'),

                    ('372191220402-S','4.webp','4/4.php','lab_nam','DVSL TEE DAVILLIUM LOGO','100','S','Cái','256000'),
                    ('372191220402-M','4.webp','4/4.php','lab_nam','DVSL TEE DAVILLIUM LOGO','100','M','Cái','256000'),
                    ('372191220402-L','4.webp','4/4.php','lab_nam','DVSL TEE DAVILLIUM LOGO','100','L','Cái','256000'),

                    ('D26-T9-T-2-S','1.webp','1/1.php','at_nu','DSS TEE OLYMPIC','100','S','Cái','179000'),
                    ('D26-T9-T-2-M','1.webp','1/1.php','at_nu','DSS TEE OLYMPIC','100','M','Cái','179000'),
                    ('D26-T9-T-2-L','1.webp','1/1.php','at_nu','DSS TEE OLYMPIC','100','L','Cái','179000'),

                    ('D25-T3-2-S','2.webp','2/2.php','at_nu','DSS TEE EBR TEDDY','100','S','Cái','199000'),
                    ('D25-T3-2-M','2.webp','2/2.php','at_nu','DSS TEE EBR TEDDY','100','M','Cái','199000'),
                    ('D25-T3-2-L','2.webp','2/2.php','at_nu','DSS TEE EBR TEDDY','100','L','Cái','199000'),

                    ('D15-T32-2-S','3.webp','3/3.php','at_nu','DSS TEE DAISY','100','S','Cái','220000'),
                    ('D15-T32-2-M','3.webp','3/3.php','at_nu','DSS TEE DAISY','100','M','Cái','220000'),
                    ('D15-T32-2-L','3.webp','3/3.php','at_nu','DSS TEE DAISY','100','L','Cái','220000'),

                    ('D14-T31-T-1-S','4.webp','4/4.php','at_nu','DSS TEE DEVIL`S CAKE - TRẮNG','100','S','Cái','200000'),
                    ('D14-T31-T-1-M','4.webp','4/4.php','at_nu','DSS TEE DEVIL`S CAKE - TRẮNG','100','M','Cái','200000'),
                    ('D14-T31-T-1-L','4.webp','4/4.php','at_nu','DSS TEE DEVIL`S CAKE TRẮNG','100','L','Cái','200000'),

                    ('D14-T33-T-1-S','1.webp','1/1.php','cr_nu','D14-T33 CROPTOP RUBBER TAG','100','S','Cái','159000'),
                    ('D14-T33-T-1-M','1.webp','1/1.php','cr_nu','D14-T33 CROPTOP RUBBER TAG','100','M','Cái','159000'),
                    ('D14-T33-T-1-L','1.webp','1/1.php','cr_nu','D14-T33 CROPTOP RUBBER TAG','100','L','Cái','159000'),

                    ('1622005210101-S','2.webp','2/2.php','cr_nu','DSS TRACK CROPTOP','100','S','Cái','159000'),
                    ('1622005210101-M','2.webp','2/2.php','cr_nu','DSS TRACK CROPTOP','100','M','Cái','159000'),
                    ('1622005210101-L','2.webp','2/2.php','cr_nu','DSS TRACK CROPTOP','100','L','Cái','159000'),

                    ('D10-T38-1-S','3.webp','3/3.php','cr_nu','D10-T38 CROPTOP LED TEXT','100','S','Cái','156000'),
                    ('D10-T38-1-M','3.webp','3/3.php','cr_nu','D10-T38 CROPTOP LED TEXT','100','M','Cái','156000'),
                    ('D10-T38-1-L','3.webp','3/3.php','cr_nu','D10-T38 CROPTOP LED TEXT','100','L','Cái','156000'),

                    ('1621711201101-S','4.webp','4/4.php','cr_nu','DSS CROPTOP PINK LOGO','100','S','Cái','156000'),
                    ('1621711201101-M','4.webp','4/4.php','cr_nu','DSS CROPTOP PINK LOGO','100','M','Cái','156000'),
                    ('1621711201101-L','4.webp','4/4.php','cr_nu','DSS CROPTOP PINK LOGO','100','L','Cái','156000'),

                    ('162191020901-S','1.webp','1/1.php','hd_nu','DSS ZIP HOODIE BASIC','100','S','Cái','248000'),
                    ('162191020901-M','1.webp','1/1.php','hd_nu','DSS ZIP HOODIE BASIC','100','M','Cái','248000'),
                    ('162191020901-L','1.webp','1/1.php','hd_nu','DSS ZIP HOODIE BASIC','100','L','Cái','248000'),

                    ('1621910201401-S','2.webp','2/2.php','hd_nu','DSS HOODIE COTTON','100','S','Cái','272000'),
                    ('1621910201401-M','2.webp','2/2.php','hd_nu','DSS HOODIE COTTON','100','M','Cái','272000'),
                    ('1621910201401-L','2.webp','2/2.php','hd_nu','DSS HOODIE COTTON','100','L','Cái','272000'),


                    ('1621910201201-S','3.webp','3/3.php','hd_nu','DSS ZIP HOODIE PAINTING','100','S','Cái','280000'),
                    ('1621910201201-M','3.webp','3/3.php','hd_nu','DSS ZIP HOODIE PAINTING','100','M','Cái','280000'),
                    ('1621910201201-L','3.webp','3/3.php','hd_nu','DSS ZIP HOODIE PAINTING','100','L','Cái','280000'),

                    ('162191020101-S','4.webp','4/4.php','hd_nu','DSS HOODIE D CARTOON','100','S','Cái','256000'),
                    ('162191020101-M','4.webp','4/4.php','hd_nu','DSS HOODIE D CARTOON','100','M','Cái','256000'),
                    ('162191020101-L','4.webp','4/4.php','hd_nu','DSS HOODIE D CARTOON','100','L','Cái','256000'),

                    ('1621006211001-S','1.webp','1/1.php','ak_nu','DSS JACKET 90S - WHITE','100','S','Cái','296000'),
                    ('1621006211001-M','1.webp','1/1.php','ak_nu','DSS JACKET 90S - WHITE','100','M','Cái','296000'),
                    ('1621006211001-L','1.webp','1/1.php','ak_nu','DSS JACKET 90S - WHITE','100','L','Cái','296000'),

                    ('162241220202-S','2.webp','2/2.php','ak_nu','DSS JACKET IGNORE','100','S','Cái','312000'),
                    ('162241220202-M','2.webp','2/2.php','ak_nu','DSS JACKET IGNORE','100','M','Cái','312000'),
                    ('162241220202-L','2.webp','2/2.php','ak_nu','DSS JACKET IGNORE','100','L','Cái','312000'),

                    ('D15-AK32-1-S','3.webp','3/3.php','ak_nu','D15-AK32 CROPPED LEATHER JACKET','100','S','Cái','280000'),
                    ('D15-AK32-1-M','3.webp','3/3.php','ak_nu','D15-AK32 CROPPED LEATHER JACKET','100','M','Cái','280000'),
                    ('D15-AK32-1-L','3.webp','3/3.php','ak_nu','D15-AK32 CROPPED LEATHER JACKET','100','L','Cái','280000'),

                    ('1622412201201-S','4.webp','4/4.php','ak_nu','DSS JACKET BASIC MARK 3-BLACK','100','S','Cái','264000'),
                    ('1622412201201-M','4.webp','4/4.php','ak_nu','DSS JACKET BASIC MARK 3-BLACK','100','M','Cái','264000'),
                    ('1622412201201-L','4.webp','4/4.php','ak_nu','DSS JACKET BASIC MARK 3-BLACK','100','L','Cái','264000')
                    ";
        if(mysqli_query($conn,$insert_sanpham)){
            echo "Insert thành công!";
        }else{
            echo "Insert thất bại!".mysqli_error($conn);
        }
   
}
?>