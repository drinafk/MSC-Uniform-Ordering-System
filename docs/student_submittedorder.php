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
    <div class="head_instruction"><p>Order placed successfully!</p></div>
    <div class="sub_instruction"><p>Please take a screenshot of this order form and show it to the Cashier's Office for payment.</p></div>
      <div class="okay">
        <a href="student_shop.php"><button>Okay</button></a>
      </div>
      <div class="dots">
        <img src="images/dots.png" alt="dots">
      </div>
    </section>
  </body>
</html>

<?php
    require "Connection.php";
    $sql = "SELECT * FROM orderdb";
    $result = mysqli_query($conn, $sql);
    $total1 = 0;
    $total2 = 0;
    $total3 = 0;
    $femaleadd1 = 0;
    $maleadd1 = 0;
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
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
          $femaleadd1 = $row['necktie'] * 200;
          $maleadd1 = $row['necktie'] * 100;
          if($row['gender'] == 'Female'){
            $total3 = $total1 + $total2 + $femaleadd1;
          } else if($row['gender'] == 'Male'){
            $total3 = $total1 + $total2 + $maleadd1;
          }else{
            $total3 = $total1 + $total2;
          }
          echo "<script>console.log($total3)</script>";
          

          echo "
            <form method='post' id='order-form' class='submitted_orderform'>
            <table class='table1'>
              <tr>
                <td class='border2'>Name:</td>
                <td class='border1' id='name'>$row[name]</td>
              </tr>
              <tr>
                <td class='border2'>Course/Year/Section:</td>
                <td class='border1' id='course'>$row[course]</td>
              </tr>
              <tr>
                <td class='border2'>Email:</td>
                <td class='border1' id='email'>$row[email]</td>
              </tr>
              <tr>
                <td class='border2'>Contact Number:</td>
                <td class='border1' id='contact_num'>$row[num]</td>
              </tr>
              <tr>
                <td class='border2'>Type:</td>
                <td class='border1' id='order'>$row[type]</td>
              </tr>
              <tr>
                <td class='border2'>Gender:</td>
                <td class='border1' id='order'>$row[gender]</td>
              </tr>
              <tr>
                <td class='border2'>Size (Top):</td>
                <td class='border1' id='size'>$row[top_size]</td>
              </tr>
              <tr>
                <td class='border2'>Quantity (Top):</td>
                <td class='border1' id='size'>$row[top_quantity]</td>
              </tr>
              <tr>
                <td class='border2'>Size (Bottom):</td>
                <td class='border1' id='size'>$row[bottom_size]</td>
              </tr>
              <tr>
                <td class='border2'>Quantity (Bottom):</td>
                <td class='border1' id='size'>$row[bottom_quantity]</td>
              </tr>
              <tr>
                <td class='border2'>Necktie/Logo</td>
                <td class='border1' id='size'>$row[necktie]</td>
              </tr>
              <tr>
                <td class='border2'>Payment:</td>
                <td class='border1' id='size'>$row[payment]</td>
              </tr>
              <tr>
                <td class='border2'>Total payable amount:</td>
                <td class='border1' id='total'>&#8369 $total3</td>
              </tr>
            </table>
            </form>";
        }
    }
    mysqli_close($conn);
?>