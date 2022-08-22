<?php
include 'connection.php';
session_start();
$uname=$_POST['uname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql = mysqli_query($con,"insert into contact (`name`,`email`,`phone`,`subject`,`message`) values ('$uname','$phone','$email','$subject','$message')");
if($sql){
  $_SESSION['msg']="done";
  header('location:contact.php');  
}else{
    $_SESSION['msg']="not done";
    header('location:contact.php');   
}



?>