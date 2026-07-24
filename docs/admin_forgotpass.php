<?php
  require "Connection.php";
  if(isset($_POST['submit'])){
    $pass = $_POST["pass"];
    $code = $_POST["code"];
    $sql = "SELECT * FROM accountdb WHERE verification = '$code'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $sql = "UPDATE accountdb SET pass = '$pass'";
        $result = mysqli_query($conn, $sql);
    }else{
        echo "Invalid";
    }
    mysqli_close($conn);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MSC Uniform Ordering System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="1.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body class="body1">
    <section class="bg-image">
    <div class="heading">
      <pre><u>MSC-UOS</u></pre>
      <img src="images/msc.png">
    </div>
    <img class="logomsc" src="images/logomsc.png">
    <div class="gradient"></div>
      <div class="changepass">
        <section class="form-box">
            <pre class="change"><b>Change Password</b></pre>
            <form method="post" id="change-pass">
                <div class="input-pass">
                    <div class="white"></div>
                    <label>New Password:</label><br>
                    <input type="password" placeholder="Enter New Password" id="password" name="pass" required>
                    <img src="images/closed-icon.png" id="eyeicon">
                </div>
                <div class="input-otp">
                  <label>OTP:</label><br>
                  <input type="number" placeholder="Enter OTP" id="code" name="code" required autocomplete="off">  
                </div>
                <div class="forgot">
                    <a href="admin.php"><p><i>Back to Login</i></p></a>
                </div>
                <div class="login1">
                    <button type="submit" name="submit" onclick="changepass()">Change password</button>
                </div>
            </form>
        </section>
      </div>
      <input type="button" id="timerbtn" value="Send OTP">
      <div class="goback">
        <a href="index.php"><button><p>&#10688</p>Menu</button></a>
      </div>
      <div class="dots">
        <img src="images/dots.png" alt="dots">
      </div>
    </section> 
  <script>
    let backicon = document.getElementById("back-icon")
    let password = document.getElementById("password");
    let eyeicon = document.getElementById("eyeicon");

      eyeicon.onclick = function(){
        if(password.type == "password"){
          password.type = "text";
          eyeicon.src = "images/open-icon.png";
        }
        else if(eyeicon.src == "images/open-icon.png"){
          password.type = "password";
          eyeicon.src = "images/closed-icon.png";
        }
        else{
          password.type = "password";
          eyeicon.src = "images/closed-icon.png";
        }
      }
      function changepass(){
        $.ajax({
            type: 'post',
            data: $("#change-pass").serialize(),
            success: function(result){
              alert('Password changed successfully');
            }
        });
      }
  </script>
  <script src="javascript/OTP Timer.js"></script>
  </body>
</html>