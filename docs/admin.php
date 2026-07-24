

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
      <div class="wrapper">
        <section class="form-box">
            <pre class="welcome"><b>Welcome back, Admin!</b></pre>
            <pre class="please">Please enter your details</pre>
            <form method="dialog" id="login-form">
                <div class="input-box">
                      <label>Email:</label><br>
                      <input type="email" placeholder="Enter Email Address" name="email" required>
                </div>
                <div class="input-box1">
                    <div class="white"></div>
                    <label>Password:</label><br>
                    <input type="password" placeholder="Enter Password" id="password" name="pass" required>
                    <img src="images/closed-icon.png" id="eyeicon">
                </div>
                <div class="forgot">
                    <a href="admin_forgotpass.php"><p><i>Forgot Password</i></p></a>
                </div>
                <div class="login">
                    <button type="submit" name="submit" onclick="ulogin()">Log in</button>
                </div>
            </form>
        </section>
      </div>
      <div class="goback">
        <a href="index.php"><button><p>&#10688</p>Menu</button></a>
      </div>
      <div class="dots">
        <img src="images/dots.png" alt="dots">
      </div>
    </section> 
  <script>
function ulogin(){
  $.ajax({
        url: 'login.php',
        type: 'post',
        data: $("#login-form").serialize(),
        success: function(result){
          console.log(result)
          if(result == "Invalid"){
            alert('Login Credentials do not match')
          }else{
            document.location = 'admin_dashboard.php';
          }
        }
    });
}

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
  </script>
  <script src="javascript/OTP Timer.js"></script>
  </body>
</html>