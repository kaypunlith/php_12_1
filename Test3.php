<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width: 100px;
            height: 100px;
            background-color: red;
            float: left;
            margin-left: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 50px;
        }
    </style>
</head>
<body>
   
</body>
<?php 
   $i=0;
   while($i<10){
     if($i%2==0){
        ?>
        <div class="box"><?php echo $i?></div>
      <?php
     }
   $i++;
   }
?>
</html>