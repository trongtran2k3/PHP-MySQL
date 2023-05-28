var myform = document.forms.myform;
var er_email = document.getElementById('er_email');
var er_name = document.getElementById('er_name');
var er_gender = document.getElementById('er_gender');
var er_phone = document.getElementById('er_phone');
var er_address = document.getElementById('er_address');
var er_provice = document.getElementById('er_provice');
var er_email = document.getElementById('er_email');
var dem = 0;
function show(){
    if(myform.email.value==""){
        er_email.innerHTML = "Vui lòng điền email";
        dem++;
    }else{
        er_email.innerHTML = "";
    }
    if(myform.fullname.value==""){
        er_name.innerHTML = "Vui lòng điền tên";
        dem++;
    }else{
        er_name.innerHTML = "";
    }
    if(myform.gender1.checked== false && myform.gender2.checked== false ){
        er_gender.innerHTML = "Vui lòng chọn giới tính";
        dem++;
    }else if(myform.gender1.checked== true && myform.gender2.checked== true){
        er_gender.innerHTML = "Chỉ chọn 1 trong 2 ";
        dem++;
    }else{
        er_gender.innerHTML = "";
    }
    if(myform.phone.value==""){
        er_phone.innerHTML = "Vui lòng điền số điện thoại";
        dem++;
    }else{
        er_phone.innerHTML = "";
    }
    if(myform.address.value==""){
        er_address.innerHTML = "Vui lòng điền địa chỉ";
        dem++;
    }else{
        er_address.innerHTML = "";
    }
    if(myform.provice.value==""){
        er_provice.innerHTML = "Vui lòng chọn tỉnh";
        dem++;
    }else{
        er_provice.innerHTML = "";
    }
    if(myform.pay1.checked==false&&myform.pay2.checked==false&&myform.pay3.checked==false){
        er_pttt.innerHTML = "Vui lòng chọn phương thức thanh toán ";
        dem++;
    }else if((myform.pay1.checked==true&&myform.pay2.checked==true)||(myform.pay1.checked==true&&myform.pay3.checked==true)||(myform.pay3.checked==true&&myform.pay2.checked==true)||(myform.pay1.checked==true&&myform.pay2.checked==true&&myform.pay3.checked==true)){
        er_pttt.innerHTML = "Vui lòng chỉ chọn 1 phương thức";
        dem++;
    }else{
        er_pttt.innerHTML = "";
    }
    
}
myform.onsubmit = function(){
    if(dem>0){
        return false;
    }else{
        window.location.href('../../../allin.php');
    }
}