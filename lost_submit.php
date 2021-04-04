<?php
date_default_timezone_set("Asia/Kolkata");
$name=$_POST["Name"];
$mobile=$_POST['Mobilenumber'];
$c_email=$_POST['Email'];
$complain=$_POST['Message']; 
$time=$_POST["time"];
$loc=$_POST['location'];     
$servername="localhost";
$username="root";
$password=""; 
$dbname = "university_services";  
 
  
$conn = new mysqli($servername,$username,$password,$dbname);
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
else{
    $case_id=md5($c_email.time());
$sql =  "INSERT INTO `lost_found` (`s_name`,`s_email`,`s_complain`,`last_time`,`location`,`phone_number`)
 VALUES ('$name','$c_email','$complain','$time','$loc','$mobile')";

if($conn->query($sql)==TRUE){
echo "<h2 style='color:white;font-family:cursive;'>Complaint registered successfully!</h2>";
$to=$c_email;

$subject= "Complaint Resgistration (Workatease.com)";

$headers = 'From: Lost and found section (Workatease.com)'."\r\n";
$headers ="MIME-Version:1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";

$ms="Dear $name,<br>we received your complaint and your case is forwarded to respective authorities for investigation of the same.<br>
please note down your case-id.no = '$case_id'<br>
 please visit the lost and found section of college at 1st floor A building to collect your item sharp at 9:30 am<br>Thank You.";
if(mail($to, $subject, $ms, $headers)){
echo "<h1 style='color:white;font-family:cursive;'>please visit your registered mail-id for case-id.no and further information!!</h1>";
}}
else{
    echo "<h1 style='color:white;font-family:cursive;'>mail not sent</h1>";
}
 }
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="common1.css"> 
</head>
<body>

</body>
</html>