<?php 
  //connection to database
  $cn=new mysqli("localhost","root","","php_class3");
   $name=$_POST['pro_name'];
   $price=$_POST['pro_price'];
   $sql="INSERT INTO `tbl_product`(`name`, `price`)
    VALUES ('$name','$price')";
   $cn->query($sql);
   

?>