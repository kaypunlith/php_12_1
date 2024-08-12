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
            display:flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            color: white;
        }
    </style>
</head>
<body>
    <!-- <div class="box"></div> -->
</body>
    <?php 
       $num=array(10,20,30,40,50);
         for($i=0;$i<5;$i++){
            ?>
                <div class="box"><?php echo $num[$i]?></div>
            <?php 
         }

    ?>
</html>