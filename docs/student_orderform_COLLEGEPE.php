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
  <body class="body3">
    <section class="bg-image">
    <div class="gradient"></div>
      <div class="leftpanel">
        <img src="images/msc.png">
        <a href="student_home.php"><p class="home1">Home</p></a>
        <a href="student_shop.php"><p class="shop1">Shop</p></a>
        <a href="student_howtoorder.php"><p class="howtoorder">How to order</p></a>
        <a href="student_contactus.php"><p class="contactus">Contact us</p></a>
        <a href="student_aboutus.php"><p class="aboutus">About us</p></a>
      </div>
      <div class="heading1">
        <pre><u>MSC-UOS</u></pre>
        <p>Uniform Ordering System</p>
      </div>
      <div class="orderformtitle">
        <p class="orderform_text">Order Form</p>
      </div>
      <div class="note2">
      <p>Notice: Strictly no cancellation of orders. Once you click 'submit' , your order will be received by the admin.</p>
      </div>
      <form method="dialog" id="order-form" class="orderform1">
    <table class="table">
      <tr>
        <th class="border3" colspan="2">Customer Details</th>
      </tr>
      <tr>
        <td class="border2">Name:</td>
        <td class="orderform_bg"><input type="text" name="name" id="customer_name" class="details" required></td>
      </tr>
      <tr>
        <td class="border2">Course/Year/Section:</td>
        <td class="orderform_bg"><input type="text" name="course" id="course_year_section" class="details" required></td>
      </tr>
      <tr>
        <td class="border2">Email:</td>
        <td class="orderform_bg"><input type="email" name="email" id="email" class="details" required></td>
      </tr>
      <tr>
        <td class="border2">Contact Number:</td>
        <td class="orderform_bg"><input type="number" name="num" id="num" class="details" required></td>
      </tr>
      <tr>
        <th class="border3" colspan="2">Order Details</th>
      </tr>
      <tr>
        <td class="border2">Type:</td>
        <td class="border"><input name="type" value="College PE Uniform" id="type"><p>College PE Uniform</p></td>
      </tr>
      <tr>
        <td class="border2">Gender:</td>
        <td class="border"><input name="gender" value="Unisex" id="gender"><p>Unisex</p></td>
      </tr>
      <tr>
        <td class="border2">Size (T-shirt):</td>
        <td class="border1">
        <select name="top_size" id="top_size" onchange="none()">
            <option value="none" id="none">none</option>
            <option value="XXS" id="XXS">XXS</option>
            <option value="XS/S" id="XS/S">XS/S</option>
            <option value="M/L" id="M/L">M/L</option>
            <option value="XL" id="XL">XL</option>
            <option value="XXL" id="XXL">XXL</option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="border2">Quantity:</td>
        <td class="orderform_bg"><input type="number" name="top_quantity" id="top_quantity" min="0" required></td>
      </tr>
      <tr>
        <td class="border2">Size (Pants):</td>
        <td class="border1">
        <select name="bottom_size" id="bottom_size" onchange="none1()">
            <option value="none">none</option>
            <option value="S33-34">S33-34</option>
            <option value="S35">S35</option>
            <option value="S36">S36</option>
            <option value="S37">S37</option>
            <option value="S38-40">S38-40</option>
            <option value="S42-45">S42-45</option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="border2">Quantity:</td>
        <td class="orderform_bg"><input type="number" name="bottom_quantity" id="bottom_quantity" min="0" required></td>
      </tr>
      <tr>
        <td class="border2">Total Price:</td>
        <td class="orderform_bg" id="total"><div>&#8369 0</div></td>
      </tr>
      <tr>
        <td class="border2">Payment:</td>
        <td class="border1">
        <select name="payment" id="payment" onchange="none1()">
            <option value="Full payment">Full payment</option>
            <option value="Down payment(500)">Down payment(500)</option>
          </select>
        </td>
      </tr>
    </table>
    <button class="submitBtn" type="submit" onclick="addorder()">Place Order</button></td>
  </form>
  <div class="leftpanellogos">
      <img class="homeicon" src="images/home.png">
      <img class="shopicon" src="images/shop.png">
      <img class="howtoordericon" src="images/help.png">
      <img class="contactusicon" src="images/contact.png">
      <img class="aboutusicon" src="images/about.png">
      <img class="logomsc1" src="images/logomsc.png">
      <div class="goback1">
        <a href="index.php"><button><p>&#10688</p>Menu</button></a>
      </div>
    </div>
    <div class="back_orderform1">
          <a href="student_collegepepreview.php"><button>Back</button></a>
      </div>
      <div class="dots3">
        <img src="images/dots.png" alt="dots">
      </div>
<script>
const ordersizetopSelect = document.getElementById('order_size_top');
const sizeOptions = document.getElementById('size-options');
const totalPriceSpan = document.getElementById('total-price');
const topQuantity = document.getElementById('top_quantity');
const bottomQuantity = document.getElementById('bottom_quantity');
const topSize = document.getElementById('top_size');
const bottomSize = document.getElementById('bottom_size');
function changetotal(){
          var input4 = $('#bottom_size').val();
            var input3 = $('#top_size').val();
            var input2 = $('#necktie').val();
            var input1 = $('#bottom_quantity').val();
            var input = $('#top_quantity').val();
            $.ajax({
                url: 'totalprice_PE.php',
                method: 'post',
                data: {top_quantity: input, bottom_quantity: input1, necktie: input2, top_size: input3, bottom_size: input4},
                success: function(result){
                  $('#total').html(result);
                },
            });
        }
if(topSize.value == "none"){
    topQuantity.value = 0;
  }

  if(bottomSize.value == "none"){
    bottomQuantity.value = 0;
  }

  function none(){
    if(topSize.value == "none"){
      topQuantity.value = 0;
    }
    changetotal()
  }

  function none1(){
    if(bottomSize.value == "none"){
      bottomQuantity.value = 0;
    }
    changetotal()
  }

function addorder(){
    $.ajax({
        url: 'add_order.php',
        type: 'post',
        data: $("#order-form").serialize(),
        success: function(result){
          alert('Order placed successfully');
          document.location = 'student_submittedorder.php';
        }
    });
  }

  $(document).ready(function(){
        $('#top_quantity').keyup(function(){
            var input4 = $('#bottom_size').val();
            var input3 = $('#top_size').val();
            var input2 = $('#necktie').val();
            var input1 = $('#bottom_quantity').val();
            var input = $('#top_quantity').val();
            $.ajax({
                url: 'totalprice_PE.php',
                method: 'post',
                data: {top_quantity: input, bottom_quantity: input1, necktie: input2, top_size: input3, bottom_size: input4},
                success: function(result){
                  $('#total').html(result);
                },
            });
        })

        $('#bottom_quantity').keyup(function(){
            var input4 = $('#bottom_size').val();
            var input3 = $('#top_size').val();
            var input2 = $('#necktie').val();
            var input1 = $('#bottom_quantity').val();
            var input = $('#top_quantity').val();
            $.ajax({
                url: 'totalprice_PE.php',
                method: 'post',
                data: {top_quantity: input, bottom_quantity: input1, necktie: input2, top_size: input3, bottom_size: input4},
                success: function(result){
                  $('#total').html(result);
                },
            });
        })
    });

</script>
    </section>    
  </body>
</html>