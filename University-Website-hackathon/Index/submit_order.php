<?php
$name=$_POST["firstname"];
$order=$_POST['Order'];
$c_email=$_POST['Email'];
$specs=$_POST['subject'];      
$servername="localhost";
$username="root";
$password=""; 
$dbname = "university_services";  
 
  
$conn = new mysqli($servername,$username,$password,$dbname);
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 

   
    date_default_timezone_set("Asia/Kolkata");
    $datetime = date("Y-m-d H:i:s");

// Convert datetime to Unix timestamp
$timestamp = strtotime($datetime);

// Subtract time from datetime
$time = $timestamp + (15 * 60);

// Date and time after subtraction
$datetime = date("Y-m-d H:i:s", $time);


$sql =  "INSERT INTO `canteen` (`c_name`,`c_email`,`c_order`,`specs`,`pickup_time`)
 VALUES ('$name','$c_email','$order','$specs','$datetime')";

if($conn->query($sql)==TRUE){
    echo "<h1><center> Your order is placed successfully</center></h1>\n<br>";
    $query1="SELECT * from canteen where c_name='$name'";
    $result = $conn->query($query1);
    
   if ($result->num_rows > 0){
    while ($row1 = $result->fetch_assoc()){
        echo "<h2 style='color:black;font-family:cursive;'>Your order no. is: " . $row1["order_no"] . "</h2>\n<br><h2 style='color:black;font-family:cursive;'>Your pickup time is: ". $row1["pickup_time"] . "</h2>";
        echo "<br><br><br><h1><center>THANK YOU<br>VISIT AGAIN!!!</center></h1>";
    }}
    else {
        echo "0 results";
      }
}
else{
    echo "Error". $sql . "<br>" . $conn->error;
}
$conn->close();

?>

<!DOCTYPE html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="common.css">
</head>
<body></body>
</html>