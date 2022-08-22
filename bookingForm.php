<?php
include 'connection.php';
session_start();
$directory = "dl_img/";
$dl_img=$_FILES['dl_img']['name'];
$dl_tempName=$_FILES['dl_img']['tmp_name'];
$fileExtension = strtolower(end(explode('.',$dl_img)));
$path = $directory.time().basename($dl_img);
$didUpload = move_uploaded_file($dl_tempName, $path);
if($didUpload){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $booking_from=$_POST['booking_from'];
  $booking_to=$_POST['booking_to'];
  $time=$_POST['time'];
  $vehicle_type=$_POST['vehicle_type'];
  $quantity=$_POST['quantity'];
  $sql = mysqli_query($con,"insert into booking (`name`,`email`,`phone`,`dl_img`,`booking_from`,`booking_to`,`time`,`vehicle_type`,`quantity`) 
              values ('$uname','$phone','$email','$path','$booking_from','$booking_to','$time','$vehicle_type','$quantity')");
  if($sql){
    $_SESSION['msg']="done";
    header('location:booking.php');  
  }else{
      $_SESSION['msg']="not done";
      header('location:booking.php');   
  }
}




?>