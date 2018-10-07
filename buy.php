<!DOCTYPE html>
<html lang="en">
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
     <table id="example" class="display" style="width:100%">
         <tr>
            <th>Customer Name</th>
            <th>Location</th>
            <th>Available Unit</th>
            <th>Rate Per Unit</th>
            <th></th>
         </tr>
              
       
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["location"]. "</td><td>" . $row["available_unit"]. " </td><td>" . $row["rate_per_unit"]. "</td><td>
        <a href='intrim.php'><button id='btn1' style='background-color: #4CAF50; border: none; color: white; padding: 8px 20px;'; type=submit>Buy</button></a></td></tr>";
    }
    echo "</table>";
    
} else {
    echo "0 results";
}
           
$conn->close();
?>


    
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.15/api/row().show().js"></script>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
  }); 
        
   $('#btn1').onClick(function() {
        alert('abs');
 
});        
    </script>
    
   