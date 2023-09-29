document.addEventListener("DOMContentLoaded", function () {
  var cursor = document.getElementById("bubles");

  document.addEventListener("mousemove", function (e) {
    var x = e.clientX;
    var y = e.clientY;
    var scrollX = window.scrollX;
    var scrollY = window.scrollY;
    cursor.style.left = (x + scrollX + 15) + "px";
    cursor.style.top = (y + scrollY + 15) + "px";
  });
});
isPasswordValid = (password) => {
  const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*\W)(?!.*\s).{6,}$/;
  return passwordRegex.test(password);
}
isEmailValid = (mail) => {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(mail);
}
log = (event) => {
  var mail = document.getElementById("mail");
  var password = document.getElementById("pswd");
  var c = document.getElementById("emilerror");
  var d = document.getElementById("paserror");
  var x = 0;
  var valMail = isEmailValid(mail.value);
  if (mail.value == "" || valMail === 0) {
    mail.style.border = "2px solid red";
    c.innerText = "Enter Email ";
    c.style.color = "#fbff00";
    c.style.fontSize = '16px';
    c.style.paddingLeft = '10%';
    event.preventDefault();
  }
  else if (valMail == false) {
    mail.style.border = "2px solid red";
    c.innerText = "Invalid Email ";
    c.style.color = "#fbff00";
    event.preventDefault();
    c.style.fontSize = '16px';
    c.style.paddingLeft = '10%';
  }
  else {
    mail.style.border = "none";
    mail.style.borderBottom = "2px solid #000";
    c.innerText = "";
    x+=1;
  }
  var valid = isPasswordValid(password.value);
  if (valid == false) {
    password.style.border = "2px solid red";
    d.innerText = "Invalid Password";
    event.preventDefault();
    d.style.color = "#fbff00";
    d.style.fontSize = '16px';
    d.style.paddingLeft = '10%';
  }
  else{
    password.style.border = "none";
    password.style.borderBottom = "2px solid #000";
    d.innerText = "";
    x+=1;
  }
  if(x==2){
    document.getElementById('logForm').submit();
  }
};
sign = (event) =>{
  var name = document.getElementById("uName");
  var mail = document.getElementById("signMail");
  var password = document.getElementById("paswd");
  var c = document.getElementById("mailError");
  var d = document.getElementById("pasError");
  var e = document.getElementById("nameError");
  var valMail = isEmailValid(mail.value);
  var con = document.getElementById("contact");
  var f = document.getElementById("contError");
  var x = 0;
  if (name.value === "") {
    name.style.border = "2px solid red";
    e.innerText = "Enter Username ";
    event.preventDefault();
    e.style.fontSize = '16px';
    e.style.color = "#fbff00";
    e.style.paddingLeft = '10%';
  }
  else if (name.value.length < 6) {
    name.style.border = "2px solid red";
    e.innerText = "Minimum Username length is 6 ";
    e.style.fontSize = '16px';
    event.preventDefault();
    e.style.color = "#fbff00";
    e.style.paddingLeft = '10%';
  }
  else {
    name.style.border = "none";
    name.style.borderBottom = "2px solid #000";
    e.innerText = "";
    x+=1;
  }

  if (mail.value == "" || valMail == false) {
    mail.style.border = "2px solid red";
    c.innerText = "Enter Email ";
    c.style.fontSize = '16px';
    event.preventDefault();
    c.style.color = "#fbff00";
    c.style.paddingLeft = '10%';
  }
  else {
    mail.style.border = "none";
    mail.style.borderBottom = "2px solid #000";
    c.innerText = "";
    x+=1;
  }
  if(con.value==""){
    con.style.border = "2px solid red";
    f.innerText = "Enter Contact Number ";
    f.style.fontSize = '16px';
    event.preventDefault();
    f.style.color = "#fbff00";
    f.style.paddingLeft = '10%';
  }
  else if (con.value.length < 10) {
    con.style.border = "2px solid red";
    f.innerText = "Enter Valid Contact Number ";
    f.style.fontSize = '16px';
    event.preventDefault();
    f.style.color = "#fbff00";
    f.style.paddingLeft = '10%';
  }
  else{
    con.style.border = "none";
    con.style.borderBottom = "2px solid #000";
    f.innerText = "";
    x+=1;

  }

  var valid = isPasswordValid(password.value);
    event.preventDefault();
  if (valid == false) {
    password.style.border = "2px solid red";
    d.innerText = "Password length is minimum 6.It contains characters,Numbers,Symbols";
    event.preventDefault();
    d.style.fontSize = '16px';
    d.style.color = "#fbff00";
  }
  else{
    password.style.border = "none";
    password.style.borderBottom = "2px solid #000";
    d.innerText = "";
    x+=1;
  }
  if(x==4){
	  document.getElementById("regForm").submit();
  }
}

redirect = (event) => {
  var mail = document.getElementById("mail");
  var error = document.getElementById("emilerror");
  var a = document.getElementById("pass");
  var b = document.getElementById("repas");
  var c = document.getElementById("pasError");
  var d = document.getElementById("repassError");
  var e = document.getElementById("notSame");
  var valMail = isEmailValid(mail.value);
  var val1 = isPasswordValid(a.value);
  var val2 = isPasswordValid(b.value);
  if (mail.value == "" || valMail == false) {
    mail.style.border = "2px solid red";
    event.preventDefault();
    error.innerText = "Enter Email ";
    error.style.fontSize = '16px';
    error.style.color = "#fbff00";
    error.style.paddingLeft = '10%';
  }
  else {
    mail.style.border = "none";
    mail.style.borderBottom = "2px solid #000";
    error.innerText = "";
  }
  if (a.value === "") {
    a.style.border = "2px solid red";
    event.preventDefault();
    c.style.color = "#fbff00";
    c.innerText = "Invalid Password";
    c.style.fontSize = "16px";
    c.style.paddingLeft = "10%";
  }
  else if (val1 === false) {
    a.style.border = "2px solid red";
    c.innerText = "Invalid Password";
    c.style.color = "#fbff00";
    event.preventDefault();
    c.style.fontSize = "16px";
    c.style.paddingLeft = "10%";
  }
  else {
    a.style.border = "none";
    a.style.borderBottom = "2px solid #000";
    c.innerText = "";
  }
  if (b.value === "") {
    b.style.border = "2px solid red";
    d.innerText = "Invalid Password";
    event.preventDefault();
    d.style.fontSize = "16px";
    d.style.color = "#fbff00";
    d.style.paddingLeft = "10%";
  }
  else if (val2 === false) {
    b.style.border = "2px solid red";
    d.innerText = "Invalid Password";
    d.style.color = "#fbff00";
    d.style.fontSize = "16px";
    event.preventDefault();
    d.style.paddingLeft = "10%";
  }
  else {
    b.style.border = "none";
    b.style.borderBottom = "2px solid #000";
    d.innerText = "";
  }
  if (val1 == val2 && a.value != b.value) {
    alert("Passwords are different")
    e.innerText = "Enter Same Password Twice";
    event.preventDefault();
    e.style.fontSize = "25px";
    e.style.paddingLeft = "20%";
    a.style.border = "2px solid red";
    e.style.color = "#fbff00";
    b.style.border = "2px solid red";
  }
}

document.getElementById("vehicleForm").addEventListener("submit",function(event){
	event.preventDefault();
})
