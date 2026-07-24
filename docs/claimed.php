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
    <div class="heading">
      <pre><u>MSC-UOS</u></pre>
      <img src="images/msc.png">
    </div>
    <img class="logomsc" src="images/logomsc.png">
    <div class="gradient"></div>
    <p class="newordertag">Claimed</p>
    <div class="container">
    <table class="ordertable">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Date</th>
            </tr>
            <?php
              require "Connection.php";
              $sql = "SELECT * FROM orderdb WHERE status = 'CLAIMED' ORDER BY name ASC";
              $result = mysqli_query($conn, $sql);
              $i = 0;
              if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    $i++;
                    echo "<tr>
                                <td>$i</td>
                                <td>$row[name]</td>
                                <td>$row[date_claimed]</td>
                          </tr>";
                  }
              }
              mysqli_close($conn);
            ?>        
    </table>
    </div>
      <div class="goback">
        <a href="admin_dashboard.php"><button><p>&#10688</p>Back</button></a>
      </div>
      <div class="dots">
        <img src="images/dots.png" alt="dots">
      </div>
    </section> 
  </body>
</html>