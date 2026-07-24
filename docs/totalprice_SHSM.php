<?php
$total1 = 0;
$total2 = 0;
$maleadd = 0;
$femaleadd = 0;
if($_POST["top_quantity"] != "" && $_POST["bottom_quantity"] != "" && $_POST["necktie"] != ""){
    switch($_POST["top_size"]){
        //College/SHS
                    case "S15":
                        $total1 = $_POST["top_quantity"] * 390;
                      break;
                    case "S16":
                        $total1 = $_POST["top_quantity"] * 440;
                      break;
                    case "S17":
                        $total1 = $_POST["top_quantity"] * 490;
                      break;
                    case "S18":
                        $total1 = $_POST["top_quantity"] * 540;
                      break;
                    case "S19+":
                        $total1 = $_POST["top_quantity"] * 590;
                      break;
                  }
                  switch($_POST["bottom_size"]){
                    case "S24":
                        $total2 = $_POST["bottom_quantity"] * 450;
                      break;
                    case "S25":
                        $total2 = $_POST["bottom_quantity"] * 500;
                      break;
                    case "S26":
                        $total2 = $_POST["bottom_quantity"] * 550;
                      break;
                    case "S27":
                        $total2 = $_POST["bottom_quantity"] * 600;
                      break;
                    case "S28+":
                        $total2 = $_POST["bottom_quantity"] * 650;
                      break;
                  }
                  $maleadd = $_POST['necktie'] * 100;
}
              $total3 = $total1 + $total2 + $maleadd;
              
    echo "<div>&#8369 $total3</div>";
?>