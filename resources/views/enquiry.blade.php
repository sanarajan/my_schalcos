<?php
if(isset($_REQUEST['check']) && $_REQUEST['check']=="Send_mail"){
$name = $_REQUEST["name"];
$phone = $_REQUEST["phone"];
$email = $_REQUEST["email"];
$message = $_REQUEST["message"];
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'schalcos');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$query = "INSERT INTO `enquiry` (name,phone, email, message) VALUES ('$name','$phone', '$email', '$message')";
$result = mysqli_query($connection, $query);

if($result){
 
       include("mail.php");
} 
// redirect to success page
/*if ($success){
   echo "success";
}else{
    echo "invalid";
}*/
}
 
?>