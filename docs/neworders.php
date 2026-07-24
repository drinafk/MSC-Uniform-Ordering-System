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
    <div class="heading">
      <pre><u>MSC-UOS</u></pre>
      <img src="images/msc.png">
    </div>
    <img class="logomsc" src="images/logomsc.png">
    <div class="gradient"></div>
    <p class="newordertag">New orders</p>
    <div class="container">
    <table class="ordertable">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Type</th>
                <th>Gender</th>
                <th>Size (Top)</th>
                <th>Quantity</th>
                <th>Size (Bottom)</th>
                <th>Quantity</th>
                <th>Necktie/Logo</th>
                <th>Total</th>
                <th>Payment</th>
                <th>Balance</th>
                <th>Update</th>
            </tr>
            <?php
              require "Connection.php";
              $sql = "SELECT * FROM orderdb WHERE status = '' AND name != '' AND course != '' AND email != '' AND num != '' AND top_quantity != '0' AND bottom_quantity != '0' ORDER BY name ASC";
              $result = mysqli_query($conn, $sql);
              $i = 0;
              if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    $total3 = 0;
                    switch($row["top_size"]){
                      //College/SHS
                          case "S14":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 400;
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 460;
                            }
                            break;
                          case "S15":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 450;
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 510;
                            } else if(($row['type'] == 'College Uniform' || $row['type'] == 'SHS Uniform') && $row['gender'] == 'Male'){
                            $total1 = $row["top_quantity"] * 390;
                            }
                            break;
                          case "S16":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 500;
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 560;
                            } else if(($row['type'] == 'College Uniform' || $row['type'] == 'SHS Uniform') && $row['gender'] == 'Male'){
                            $total1 = $row["top_quantity"] * 440;
                            }
                            break;
                          case "S17":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 550;
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 610;
                            } else if(($row['type'] == 'College Uniform' || $row['type'] == 'SHS Uniform') && $row['gender'] == 'Male'){
                            $total1 = $row["top_quantity"] * 490;
                            }
                            break;
                          case "S18+":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 600;
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total1 = $row["top_quantity"] * 660;
                            }
                            break;
                          case "S18":
                              $total1 = $row["top_quantity"] * 540;
                            break;
                          case "S19+":
                            $total1 = $row["top_quantity"] * 590;
                            break;
              //PE
                          case "XXS":
                            $total1 = $row["top_quantity"] * 315;
                            break;
                          case "XS/S":
                            $total1 = $row["top_quantity"] * 337.5;
                            break;
                          case "M/L":
                            $total1 = $row["top_quantity"] * 382.5;
                            break;
                          case "XL":
                            $total1 = $row["top_quantity"] * 427.5;
                            break;
                          case "XXL":
                            $total1 = $row["top_quantity"] * 472.5;
                            break;
                        }
                        switch($row["bottom_size"]){
              //PE
                          case "S33-34":
                            $total2 = $row["bottom_quantity"] * 328.5;
                            break;
                          case "S35":
                            $total2 = $row["bottom_quantity"] * 351;
                            break;
                          case "S36":
                            $total2 = $row["bottom_quantity"] * 396;
                            break;
                          case "S37":
                            $total2 = $row["bottom_quantity"] * 441;
                            break;
                          case "S38-40":
                            $total2 = $row["bottom_quantity"] * 531;
                            break;
                          case "S42-45":
                            $total2 = $row["bottom_quantity"] * 581;
                            break;
              //COLLEGE/SHS
                          case "S24":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 400;
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 427;
                            } else if(($row['type'] == 'College Uniform' || $row['type'] == 'SHS Uniform') && $row['gender'] == 'Male'){
                            $total2 = $row["bottom_quantity"] * 450;
                            } 
                            break;
                          case "S25":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 450;
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 477;
                            } else if(($row['type'] == 'College Uniform' || $row['type'] == 'SHS Uniform') && $row['gender'] == 'Male'){
                            $total2 = $row["bottom_quantity"] * 500;
                            }
                            break;
                          case "S26":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 500;
                            
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 527;
                            } else if(($row['type'] == 'College Uniform' || $row['type'] == 'SHS Uniform') && $row['gender'] == 'Male'){
                            $total2 = $row["bottom_quantity"] * 550;
                            }
                            break;
                          case "S27":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 550;
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 577;
                            } else if(($row['type'] == 'College Uniform' || $row['type'] == 'SHS Uniform') && $row['gender'] == 'Male'){
                            $total2 = $row["bottom_quantity"] * 600;
                            }
                            break;
                          case "S28+":
                            if($row['type'] == 'College Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 550;
                            } else if($row['type'] == 'SHS Uniform' && $row['gender'] == 'Female'){
                            $total2 = $row["bottom_quantity"] * 627;
                            } else if(($row['type'] == 'College Uniform' || $row['type'] == 'SHS Uniform') && $row['gender'] == 'Male'){
                            $total2 = $row["bottom_quantity"] * 650;
                            }
                            break;
                        }
                        $femaleadd = $row['necktie'] * 200;
                        $maleadd = $row['necktie'] * 100;
                        if($row['gender'] == 'Female'){
                          $total3 = $total1 + $total2 + $femaleadd;
                        } else if($row['gender'] == 'Male'){
                          $total3 = $total1 + $total2 + $maleadd;
                        } else{
                          $total3 = $total1 + $total2;
                        }

                        if($row['payment'] == 'Down payment(500)'){
                          $balance = $total3 - 500;
                        }else{
                          $balance = 0;
                        }
                        $i++;
                    echo "<tr>
                                <td>$i</td>
                                <td>$row[name]</td>
                                <td>$row[type]</td>
                                <td>$row[gender]</td>
                                <td>$row[top_size]</td>
                                <td>$row[top_quantity]</td>
                                <td>$row[bottom_size]</td>
                                <td>$row[bottom_quantity]</td>
                                <td>$row[necktie]</td>
                                <td>$total3</td>
                                <td>$row[payment]</td>
                                <td>$balance</td>
                                <td>
                                    <button class='verifyBtn' name = 'status' onclick='toVerify($row[id], $i)'>Verify</button>
                                </td>
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
    <script>
      function toVerify(id, i){
            $.ajax({
            url: 'verify_order.php',
            type: 'post',
            data: {verify_id: id},
            success: function(result){
              alert('Order No. ' + i + ' Successfully Verified');
              document.location='neworders.php';
            }
        });
      }
    </script>
  </body>
</html>