<?php
$total1 = 0;
$total2 = 0;
$maleadd = 0;
$femaleadd = 0;
if($_POST["top_quantity"] != "" && $_POST["bottom_quantity"] != ""){
    switch($_POST["top_size"]){
        //College/SHS
                    case "XXS":
                        $total1 = $_POST["top_quantity"] * 315;
                      break;
                    case "XS/S":
                        $total1 = $_POST["top_quantity"] * 337.5;
                      break;
                    case "M/L":
                        $total1 = $_POST["top_quantity"] * 382.5;
                      break;
                    case "XL":
                        $total1 = $_POST["top_quantity"] * 427.5;
                      break;
                    case "XXL":
                        $total1 = $_POST["top_quantity"] * 472.5;
                      break;
                  }
                  switch($_POST["bottom_size"]){
                    case "S33-34":
                        $total2 = $_POST["bottom_quantity"] * 328.5;
                      break;
                    case "S35":
                        $total2 = $_POST["bottom_quantity"] * 351;
                      break;
                    case "S36":
                        $total2 = $_POST["bottom_quantity"] * 396;
                      break;
                    case "S37":
                        $total2 = $_POST["bottom_quantity"] * 441;
                      break;
                    case "S38-40":
                        $total2 = $_POST["bottom_quantity"] * 531;
                      break;
                    case "S42-45":
                        $total2 = $_POST["bottom_quantity"] * 581;
                    break;
                  }
}
              $total3 = $total1 + $total2;
              
    echo "<div>&#8369 $total3</div>";
?>