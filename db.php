<?php
$conn = mysqli_connect("localhost","root","","airbnb website");
if(!$conn){
   die("Connection Failed: " . mysqli_connect_error());
}
?>