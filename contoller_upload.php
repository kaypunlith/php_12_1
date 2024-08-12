<?php
 $conn=new mysqli("localhost","root","","php_class3");
  $name=$_POST['name'];
  $price=$_POST['price'];
 //connect to database
  $sql="INSERT INTO `products` VALUES(null,'$name','$price')"; //insert products to tble
  $conn->query($sql); //query data to table
  if($sql){
    header("Location:php_upload.php");
  }

?>