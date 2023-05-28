<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAY</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
        body{
            margin: 0;
            padding: 0;
            background-color: gainsboro;
        }
        main{
            max-width: 1100px;
            margin: 0px auto;
            display: flex;
            justify-content: space-between;
        }
        main .col{
            column-gap: 3;
        }
        .frm{
            width: 400px;
        }
        .frm input,select,textarea{
            width: 300px;
            height: 40px;
            margin: 5px 0px;
        }
        .pay{
            width: 400px;
            
        }
        .pay form{
            border: 1px solid black;
            width: 250px;
            height: auto;
            border-radius: 20px;
            background-color: beige;
        }
        .pay form div{
            margin-top: 20px;
            padding-bottom: 3px;
            border-bottom: 1px solid black;
        }
        .pay form div:last-child{
            border: none;
        }
        .success table{
            background-color: antiquewhite;
        }
        .success table tr th{
            padding-left: 40px;
            text-align: left;
        }
        .success table tr td{
            text-align: right;
            padding-right: 40px;
        }
        .success button{
            width: 120px;
            height: 35px;
        }
    </style>
</head>

<body>
    
    <main>
        <div class="col frm">
            <div style="width: 200px;height: 120px; display: flex; justify-content: space-evenly;text-align: center; padding-right: 30px;font-size: 54px;font-family: 'Permanent Marker', cursive;"><p>MaMiTi</p></div>
            <h2>Thông tin nhận hàng</h2>
            <form action="##" method="post">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="text" name="fullname" id="fullname" placeholder="Họ và Tên">
                <input type="text" name="phone" id="phone" placeholder="Số điện thoại">
                <input type="text" name="address" id="address" placeholder="Địa chỉ">
                <select name="provice" id="provice">
                    <option value="">--</option>
                    <option value="Can Tho">Cần Thơ</option>
                    <option value="Ha Noi">Hà Nội</option>
                    <option value="Ho Chi Minh">Hồ Chí Minh</option>
                    <option value="Da Nang">Đà Nẵng</option>
                </select>
                <textarea name="note" id="note" cols="10" rows="5" placeholder="Ghi chú(Tùy chọn)"></textarea>
            </form>
        </div>
        <div class="col pay">
            <h2>Thanh Toán</h2>
            <form action="##" method="post">
                <div><input type="radio" name="bank" id="bank"><label for="">Chuyển khoản qua ngân hàng</label></div>
                <div><input type="radio" name="cod" id="cod"><label for="">Thanh toán khi nhận hàng</label></div>
                <div><input type="radio" name="momo" id="momo"><label for="">Thanh toán qua MoMo</label></div>
            </form>
        </div>
        <div class="col success">
            <h2>Đơn hàng</h2>
            <?php
                if(isset($_GET['query'])=='pay'){
                    $total = $_GET['sum'];
                }
            ?>
            <table style="border: 1px solid black; width: 400px;height: 400px;">
                <tr>
                    <th>Tạm tính</th>
                    <td>$total</td>
                </tr>

                <tr>
                    <th>Phí vận chuyển</th>
                    <td>4444444</td>
                </tr>

                <tr>
                    <th>Tổng cộng</th>
                    <td>$$total</td>
                </tr>

                <tr>
                    <th><a href="">Quay lại trang chủ</a></th>
                    <td><a href=""><button>Đặt hàng</button></a></td>
                </tr>

            </table>
        </div>
    </main>
</body>

</html>