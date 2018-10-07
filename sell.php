<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

<title></title>
        <script type="text/javaScript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javaScript" src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style='background-image:none;'>
    <!-- <button class="btn-homepage"><a href="login.html"> Login/ Sign Up</a></button> -->
         <div class="nav">
      <ul>
        <li><img src="./img/logo.png" height="35px" width="100px"></li>
        <li class="home"><a href="#">Home</a></li>
        <li class="about"><a href="about.html">About</a></li>
        <li class="trade"><a class="active" href="trade.html">Trade</a>
          <ul>
            <li><a href="buy.php">Buy</a></li>
            <li><a href="sell.php">Sell</a></li>
          </ul>
        </li>
        <li class="account"><a href="account.html">My Account</a>
          <ul>
            <li><a href="order.html">My Orders</a></li>
            <li><a href="profile.html">My Profile</a></li>
        </ul>
        </li>
      </ul>
    </div>

<form action="pay.html" method="POST" style=" font-size: 25px; text-align:center;">
Energy Quantity-<input type="text" id="quantity" name="quantity" style="margin-top: 50px";><br>
price per unit-<input type="text" id="price" name="price per unit" style="margin-top: 50px";><br>
Location-<input type="text" id="loc" name="location" style="margin-top: 50px";><br>


<button class="btn2" type="Submit" style="padding: 10px; background-color: orange; border-color: orange;">Post</button>
</form>
<br><br>
Your Posts History:
<table border="1" style="border-collapse: collapse;">
    <tr>
      <th>Date</th>
      <th>Location</th>
      <th>Total Unit</th>
      <th>Available Unit</th>
      <th>Rate Per Unit</th>
    </tr>
    <tr>
      <td>07/10/2018</td>
      <td>BLR</td>
      <td>150</td>
      <td>150</td>
      <td>2.5</td>
    </tr>
    <tr>
      <td>07/10/2018</td>
      <td>BLR2</td>
      <td>50</td>
      <td>0</td>
      <td>2</td>
    </tr>
  </table>
  </body>
  </html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "energy";

?>
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM product_details where available_unit >0 order by available_unit desc ";
$result = $conn->query($sql);
?>
           
<script type="text/javascript">
  $(document).ready(function(){
    $('.btn2').on('click', myfunction);
    function(myfunction() {
    document.getElementById('.btn2').onclick = myfunction
  })
  });
</script>
  


    

        
 
   