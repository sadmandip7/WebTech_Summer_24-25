validateForm()
 {
var first_name = document.getElementById("first_name").value;
var last_name = document.getElementById("last_name").value;
var address = document.getElementById("address").value;
var city = document.getElementById("city").value;
var phone = document.getElementById("phone").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var confirm_password = document.getElementById("confirm_password").value;


//Validation Input
if (first_name === "" ||last_name === "" || address ==="" || city === "" || phone ==="" || email === "")
   { alert ("Please Fill the Form");
return false;
   }
   

}