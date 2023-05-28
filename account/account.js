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
    alert("Vui lòng điền đầy đủ thông tin!");return;
}else if(dem>0){
    alert("Tên không được điền số!");return;
}else if(gender==''){
    alert("Vui lòng chọn giới tính!");return;
}else if(fav==''){
    alert("Vui lòng chọn môn yêu thích!");return;
}else if(age==''){
    alert("Vui lòng chọn năm sinh!");return;
}


