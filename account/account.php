<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleaccount.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Account</title>
                <?php
                    session_start();
                    $ac = isset($_SESSION['email'])?$_SESSION['email']:"";
                ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="reg_signup.php" method="post" name="myfrm">
                <h1>Tạo tài khoản</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input class="inp" type="text" placeholder="Name" name="name" id="name" />
                <input class="inp" type="email" placeholder="Email" name="email" id="email" />
                <input class="inp" type="password" placeholder="Password" name="password" id="pass" />
                <table style="width: 300px;align-items: center;text-align: center;">
                    <tr>
                        <th style="text-align: left;font-weight: normal;"><label>Giới tính: </label></th>
                        <th style="display: flex;font-weight: normal;">
                            <div  style="display: flex;align-items: center;"><input type="radio" name="gender" id="gender" value="Nam">Nam</input> </div>
                            <div style="display: flex;align-items: center;"><input type="radio" name="gender" id="gender" value="Nữ"> Nữ</input> </div>
                        </th>
                    </tr>
                    <tr>
                        <th style="text-align: left;font-weight: normal;"><label>Yêu thích: </label></th>
                        <th style="display: flex;font-weight: normal;">
                            <div style="display: flex;align-items: center;"><input type="checkbox" id="check" name="check" id="Java" value="Java"> Java </div>
                            <div style="display: flex;align-items: center;"><input type="checkbox" id="check" name="check" id="PHP" value="PHP"> PHP</div>
                            <div style="display: flex;align-items: center;"><input type="checkbox" id="check" name="check" id="Python" value="Python"> Python</div>
                        </th>
                    </tr>
                    <th style="text-align: left;font-weight: normal;">Năm sinh</th>
                    <th style="text-align: left;font-weight: normal;">                        
                        <select name="age" id="age" style="text-align: center; font-size: 14px;width: 150px;height: 20px;">
                            <option value="">--Chọn--</option>
                        </select>
                    </th>  
                </table>
                <button onclick="test_signup()">Đăng ký</button>
            </form>
            <script>
                var myfrm = document.forms.myfrm;
                function test_signup(){
                    const select = document.getElementById('age');
                    const yearnow = new Date().getFullYear();
                    const yearold = 1900;
                    for(let year = yearnow; year >= yearold;year--){
                        const option = document.createElement("option");
                        option.value = year;
                        option.textContent = year;
                        select.appendChild(option);
                    }
                    var name_user = document.getElementById("name").value;
                    var email_user = document.getElementById("email").value;
                    var pass_user = document.getElementById("pass").value;
                    var age = document.getElementById("age").value;
                    var gender = '';var fav = '';var dem =0;
                    var check = document.getElementsByTagName("input");
                    var temp = 0;
                    if(check[5].checked){ fav+= check[5].value;}
                    if(check[6].checked){ fav+= check[6].value;}
                    if(check[7].checked){ fav+= check[7].value;}
                    if(document.getElementById("gender").checked){
                        gender = document.getElementById("gender").value; 
                    }
                    for(let i= 0 ;i<name_user.length;i++){
                        if(!isNaN(name_user.charAt(i))){ dem++; }
                    }
                    if(name_user==''|| email_user==''||pass_user==''){
                        temp+=1;alert("Vui lòng điền đầy đủ thông tin!");
                    }else if(dem>0){
                        temp+=1;alert("Tên không được điền số!");
                    }else if(gender==''){
                        temp+=1;alert("Vui lòng chọn giới tính!");
                    }else if(fav==''){
                        temp+=1; alert("Vui lòng chọn môn yêu thích!");
                    }else if(age==''){
                        temp+=1;alert("Vui lòng chọn năm sinh!");
                    }
                    myfrm.onsubmit = function() {
                        if(temp>0){
                            return false;
                        }else{
                            return true;
                        }
                    }
                }
            </script>
        </div>
        <div class="form-container sign-in-container">
            <form action="reg_signin.php" method="post" name="myform">
                <h1>Đăng nhập</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/?stype=lo&jlou=AfffYFjiel9M10wfSRnwh-PfAEJsuXCpXREDt0JzpjyID1eWRYe_A3N6iniJiMPv7bCs8ntUGIiQ-fuOQRI5p8h_Bb75X-sXrZ8fPFYqD_K7OQ&smuh=37800&lh=Ac-bisToEPna6Og6A9E" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://accounts.google.com/v3/signin/identifier?dsh=S402951228%3A1676812937309062&authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&hl=vi&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="https://www.linkedin.com/" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>hoặc dùng tài khoản của bạn</span>
                <input type="email" placeholder="Email" id="email_signin" name="email_signin" value="<?php echo $ac;?>"/>
                <p id="er_email" style="text-align: right;color: red;margin: 0;padding: 0;font-weight: inherit;margin-left: 60px;font-size: 12px;"><i>*Email không được để trống</i></p>
                <input type="password" placeholder="Password" id="pass_signin" name="pass_signin"/>
                <p id="er_pass" style="text-align: right;color: red;margin: 0;padding: 0;font-weight: inherit;margin-left: 60px;font-size: 12px;"><i>*Mật khẩu không được để trống</i></p>
                <a href="#">Quên mật khẩu?</a>
                <button onclick="test()">Đăng nhập</button>
            </form>
            <script>
                $('#er_email').hide();
                $('#er_pass').hide();
                var myform = document.forms.myform;
                function test(){
                    if(document.getElementById('email_signin').value==''){
                        $('#er_email').show();
                }
                if(document.getElementById('pass_signin').value==''){
                    
                        $('#er_pass').show();
                } 
                if(document.getElementById('email_signin').value!=''){
                        $('#er_email').hide();
                    }
                if(document.getElementById('pass_signin').value!=''){
                        $('#er_pass').hide();
                }
                myform.onsubmit = function() {
                    if(document.getElementById('email_signin').value==''||document.getElementById('pass_signin').value==''){
                        return false;
                    }else{
                        return true;
                    }
                }
                }
                    
            </script>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Vui lòng đăng nhập với thông tin cá nhân của bạn</p>
                    <button class="ghost" id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Nhập thông tin cá nhân của bạn và bắt đầu đăng nhập</p>
                    <button class="ghost" id="signUp">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
    <script src="mainaccount.js"></script>
    <!-- <script src="account.js"></script> -->
</body>

</html>