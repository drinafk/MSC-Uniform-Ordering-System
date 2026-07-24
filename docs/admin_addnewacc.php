
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MSC Uniform Ordering System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body class="body1">
    <section class="bg-image">
    <div class="gradient"></div>
      <div class="leftpanel">
        <img src="images/msc.png">
        <a href="admin_dashboard.php"><p class="dashboard1">Dashboard</p></a>
        <a href="admin_addnewacc.php"><p class="addnew1">Reset Password</p></a>
        <a onclick="logout()"><p class="logout">Log out</p></a>
      </div>
      <p class="welcome1"><b>Please complete the form.</b></p>
      <div class="wrapper1">
        <section class="form-box">
            <pre class="welcome3"><b>Reset Password</b></pre>
            <form id="change-pass" method="dialog">
                <div class="input-box2">
                      <label>New Password:</label><br>
                      <input type="password" placeholder="New Password" id="password" name="pass" required>
                      <img src="images/closed-icon.png" id="eyeicon">
                </div>
                <div class="input-box3">
                    <label>Confirm Password:</label><br>
                    <input type="password" placeholder="Confirm Password" id="password1" name="pass1" required>
                    <img src="images/closed-icon.png" id="eyeicon1">
                </div>
                <div class="input-otp1">
                  <label>OTP:</label><br>
                  <input type="number" placeholder="Enter OTP" id="code" name="code" required autocomplete="off">  
                </div>
                <div class="login">
                    <button type="submit" name="submit" onclick="changepass()">Confirm</button>
                </div>
            </form>
        </section>
      </div>
      <input type="button" id="timerbtn1" value="Send OTP">
      <img class="dashboardicon" src="images/dashboard.png">
      <img class="addnewicon" src="images/reset_pass.png">
      <img class="logouticon" src="images/logout.png">
      <img class="logomsc1" src="images/logomsc.png">
      <div class="dots1">
        <img src="images/dots.png" alt="dots">
      </div>
    </section>
    <div class="popupbg">
    <div class="logCont">
      <label>Are you sure you want to Log out?</label>
      <div class="logBtn">
        <button onclick="location.href = 'admin.php'">Yes</button>
        <button onclick="lclose()">No</button>
      </div>
    </div>
  </div>   
    <script>
      let backicon = document.getElementById("back-icon");
      let password = document.getElementById("password");
      let password1 = document.getElementById("password1");
      let eyeicon = document.getElementById("eyeicon");
      let eyeicon1 = document.getElementById("eyeicon1");
        
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
        eyeicon1.onclick = function(){
          if(password1.type == "password"){
            password1.type = "text";
            eyeicon1.src = "images/open-icon.png";
          }
          else if(eyeicon1.src == "images/open-icon.png"){
            password1.type = "password";
            eyeicon1.src = "images/closed-icon.png";
          }
          else{
            password1.type = "password";
            eyeicon1.src = "images/closed-icon.png";
          }
        }
    const popup = document.querySelector('.popupbg');

    function logout(){
      popup.classList.add('logout');
    }

    function lclose(){
      popup.classList.remove('logout');
    }
    function changepass(){
        $.ajax({
            url: 'change-pass.php',
            type: 'post',
            data: $("#change-pass").serialize(),
            success: function(result){
              if(result == "notmatch"){
                alert('Password Do Not Match');
              }else{
                alert('Password changed successfully');
              }
            }
        });
      }
    </script>  
    <script src="javascript/OTP Timer1.js"></script>
  </body>
</html>