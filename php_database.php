<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
        <label for="">Enter name</label><br>
        <input type="text" name="pro_name"><br>
        <label for="">Enter price</label><br>
        <input type="text" name="pro_price"><br>
        <button type="submit">Post</button>
    </form>
    <table border="1" width="30%">
        <tr>
            <th>code</th>
            <th>name</th>
            <th>price</th>
        </tr>
        <?php 
           $cn=new mysqli("localhost","root","","php_class3");
           $sql="SELECT * FROM `tbl_product`";
           $result=$cn->query($sql);
           while($row=$result->fetch_array()){
            ?>
               <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
        </tr>
            <?php
           }
        ?>
    </table>
</body>
</html>