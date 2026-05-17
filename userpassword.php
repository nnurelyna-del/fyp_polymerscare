<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

  <!-- FORGOT PASSWORD SECTION -->
  <div id="forgotSection">

    <h2>Forgot Password</h2>

    <div id="forgotMessage" class="message"></div>

    <div class="input-group">
      <label>Email</label>
      <input type="email" id="email" placeholder="Enter your email">
    </div>

    <button onclick="checkEmail()">
      Continue
    </button>

  </div>

  <!-- CHANGE PASSWORD SECTION -->
  <div id="changeSection" class="hidden">

    <h2>Change Password</h2>

    <div id="changeMessage" class="message"></div>

    <div class="input-group">
      <label>New Password</label>
      <input type="password" id="newPassword" placeholder="Enter new password">
    </div>

    <div class="input-group">
      <label>Confirm Password</label>
      <input type="password" id="confirmPassword" placeholder="Confirm password">
    </div>

    <button onclick="changePassword()">
      Update Password
    </button>

  </div>

</div>

<script>

  // Example stored account
  let storedEmail = "user@gmail.com";
  let storedPassword = "123456";

  // CHECK EMAIL
  function checkEmail(){

    let email = document.getElementById("email").value;
    let message = document.getElementById("forgotMessage");

    if(email === storedEmail){

      message.innerHTML = "Email found!";
      message.className = "message success";

      setTimeout(() => {

        document.getElementById("forgotSection").classList.add("hidden");
        document.getElementById("changeSection").classList.remove("hidden");

      }, 1000);

    } else {

      message.innerHTML = "Email not found!";
      message.className = "message error";
    }
  }

  // CHANGE PASSWORD
  function changePassword(){

    let newPassword = document.getElementById("newPassword").value;
    let confirmPassword = document.getElementById("confirmPassword").value;

    let message = document.getElementById("changeMessage");

    if(newPassword === "" || confirmPassword === ""){

      message.innerHTML = "Please fill all fields!";
      message.className = "message error";

      return;
    }

    if(newPassword !== confirmPassword){

      message.innerHTML = "Passwords do not match!";
      message.className = "message error";

      return;
    }

    storedPassword = newPassword;

    message.innerHTML = "Password changed successfully!";
    message.className = "message success";

    console.log("Updated Password:", storedPassword);
  }

</script>

</body>
</html>