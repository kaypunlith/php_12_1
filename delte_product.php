<?php 
 $conn=new mysqli("localhost","root","","php_class3");
 $id=$_POST['Delete_id'];
$sql="DELETE FROM `products` WHERE `id`=$id";
$conn->query($sql);
if($sql){
    header("Location:php_upload.php");
}
?>