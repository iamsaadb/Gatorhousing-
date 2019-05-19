<?php
include ('server.php');
session_start();
$time = time();
$lid=$_SESSION['owner'];
$sid=$_SESSION['user_id'];
$msg="";

if(isset($_POST['submit'])){
    if (!empty($_POST['message'])){
    $msg = $_POST['message'];
    
    
    
    $query = "INSERT INTO messaging (`mid`,`lid`,`sid`,`message`,`time`) VALUES ('2','$lid','$sid','$msg','$time')";
    
    if ($conn->query($query)) {
        echo "Your message is sent to the landlord successfully = ". $msg. "<br>";
        echo "Average response time is 12 minutes.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    $conn->close();

    
    
}}
?>