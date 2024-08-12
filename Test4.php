<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php 
//non return non parametor
//    function sayhello(){
//       echo "Hello My name is Dara";
//    }
//    sayhello();

 //non retrun has parametor
 function Login($username,$passwrod,$cpassword){
       if($username=="admin"){
           if($passwrod==123){
               if($cpassword==123){
                  echo "Login successfully";
               }else{
                echo "Wrong comfrom password";
               }
           }else{
           echo "Wrong password";
           }
       }else{
         echo "Error username";
       }
 }  
//  Login("admi4",123,123);

 //has return non paramet
 function findnumber(){
    $a=10;$b=20;
    return $a+$b;
 }
 //has retrun has parametor
 function fumdnumber2($x1,$x2){
    return $x1+$x2;
 }

 echo "sum number=".findnumber()."<br>";
 echo "sum number2=".fumdnumber2(20,findnumber());
?>
</html>