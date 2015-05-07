function validateForm()
{
var usern=$("#username").val();
var sexa=$("#sexa").val();
var sexb=$("#sexb").val();
var passwd=$("#password").val();
var passwdc=$("#password_confirm").val();
var x=document.forms["ccfrom"]["privacy"].value;


if( usern == null  || usern ==""){
$("#username").addClass("error");
return false;
}
if( passwd == null  || passwd =="" || passwd != passwdc ){
$("#password").addClass("error");
$("#password_confirm").addClass("error");
return false;
}
}