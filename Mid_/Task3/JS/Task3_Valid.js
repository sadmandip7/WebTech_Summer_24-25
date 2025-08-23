function validateForm() {
   var first_name = document.getElementById("first_name").value.trim();
   var last_name = document.getElementById("last_name").value.trim();
   var address = document.getElementById("address").value.trim();
   var city = document.getElementById("city").value.trim();
   var phone = document.getElementById("phone").value.trim();
   var email = document.getElementById("email").value.trim();
   var password = document.getElementById("password").value;
   var confirm_password = document.getElementById("confirm_password").value;

   if (
      first_name === "" ||
      last_name === "" ||
      address === "" ||
      city === "" ||
      phone === "" ||
      email === "" ||
      password === "" ||
      confirm_password === ""
   ) {
      alert("Please fill all fields.");
      return false;
   }

   var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
   if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return false;
   }

   var phonePattern = /^\d{10,15}$/;
   if (!phonePattern.test(phone)) {
      alert("Please enter a valid phone number (10-15 digits).");
      return false;
   }

   if (password !== confirm_password) {
      alert("Passwords do not match.");
      return false;
   }

   if (password.length < 8) {
      alert("Password must be at least 8 characters long.");
      return false;
   }

   return true;
}