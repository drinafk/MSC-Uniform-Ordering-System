<?php
$total1 = 0;
$total2 = 0;
$maleadd = 0;
$femaleadd = 0;
if($_POST["top_quantity"] != "" && $_POST["bottom_quantity"] != "" && $_POST["necktie"] != ""){
    switch($_POST["top_size"]){
        //College/SHS
                    case "S14":
                        $total1 = $_POST["top_quantity"] * 460;
                      break;
                    case "S15":
                        $total1 = $_POST["top_quantity"] * 510;
                      break;
                    case "S16":
                        $total1 = $_POST["top_quantity"] * 560;
                      break;
                    case "S17":
                        $total1 = $_POST["top_quantity"] * 610;
                      break;
                    case "S18+":
                        $total1 = $_POST["top_quantity"] * 660;
                      break;
                  }
                  switch($_POST["bottom_size"]){
                    case "S24":
                        $total2 = $_POST["bottom_quantity"] * 427;
                      break;
                    case "S25":
                        $total2 = $_POST["bottom_quantity"] * 477;
                      break;
                    case "S26":
                        $total2 = $_POST["bottom_quantity"] * 527;
                      break;
                    case "S27":
                        $total2 = $_POST["bottom_quantity"] * 577;
                      break;
                    case "S28+":
                        $total2 = $_POST["bottom_quantity"] * 627;
                      break;
                  }
                  $femaleadd = $_POST['necktie'] * 200;
}
              $total3 = $total1 + $total2 + $femaleadd;
              
    echo "<div>&#8369 $total3</div>";
?>