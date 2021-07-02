<?php
include 'connections.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['phone'];
  $message=$_POST['message'];
  $insertquery=" insert into contact (name,email,phone,message) values('$name','$email',$number,'$message') ";
  mysqli_query($connection,$insertquery);
}


?>