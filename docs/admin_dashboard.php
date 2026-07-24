<?php
              require "Connection.php";
              $sql = "SELECT * FROM orderdb";
              $result = mysqli_query($conn, $sql);
              $i = 0;
              if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    $i++;
                  }
                }
            mysqli_close($conn);
          ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MSC Uniform Ordering System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="1.css" rel="stylesheet">
  </head>
  <body class="body1">
    <section class="bg-image">
    <div class="gradient"></div>
      <div class="leftpanel">
        <img src="images/msc.png">
        <a href="admin_dashboard.php"><p class="dashboard">Dashboard</p></a>
        <a href="admin_addnewacc.php"><p class="addnew">Reset Password</p></a>
        <a onclick="logout()"><p class="logout">Log out</p></a>
      </div>
      <p class="welcome1"><b>Welcome back, Admin!</b></p>
      <pre class="instructions">This is the administrator's panel. Check out new orders and update them!
Click the specific category to view more.
      </pre>
      <a href="neworders.php">
      <div class="neworder">
        <p>New Orders</p>
        <h1><?php require "Connection.php";
                  $sql = "SELECT * FROM orderdb WHERE status = '' AND name != '' AND course != '' AND email != '' AND num != '' AND top_quantity != '0' AND bottom_quantity != '0'";
                  $result = mysqli_query($conn, $sql);
                  $new = 0;
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      $new++;
                    }
                  }
                  echo "$new";?>
        </h1>
      </div>
      </a>
      <a href="verified.php">
      <div class="verified">
        <p>Verified Orders</p>
        <h1><?php require "Connection.php";
                  $sql = "SELECT * FROM orderdb WHERE status = 'VERIFIED'";
                  $result = mysqli_query($conn, $sql);
                  $new = 0;
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      $new++;
                    }
                  }
                  echo "$new";?>
        </h1>
      </div>
      </a>
      <a href="onprocess.php">
      <div class="onprocess">
        <p>On Process</p>
        <h1><?php require "Connection.php";
                  $sql = "SELECT * FROM orderdb WHERE status = 'ON PROCESS'";
                  $result = mysqli_query($conn, $sql);
                  $new = 0;
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      $new++;
                    }
                  }
                  echo "$new";?>
        </h1>
      </div>
      </a>
      <a href="finished.php">
      <div class="finished">
        <p>Finished/Not yet Claimed</p>
        <h1><?php require "Connection.php";
                  $sql = "SELECT * FROM orderdb WHERE status = 'FINISHED'";
                  $result = mysqli_query($conn, $sql);
                  $new = 0;
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      $new++;
                    }
                  }
                  echo "$new";?>
        </h1>
      </div>
      </a>
      <a href="claimed.php">
      <div class="claimed">
        <p>Claimed</p>
        <h1><?php require "Connection.php";
                  $sql = "SELECT * FROM orderdb WHERE status = 'CLAIMED'";
                  $result = mysqli_query($conn, $sql);
                  $new = 0;
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      $new++;
                    }
                  }
                  echo "$new";?>
        </h1>
      </div>
      </a>
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
    const popup =document.querySelector('.popupbg');

    function logout(){
      popup.classList.add('logout');
    }

    function lclose(){
      popup.classList.remove('logout');
    }
  </script> 
  </body>
</html>