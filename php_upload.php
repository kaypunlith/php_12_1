<!DOCTYPE html>
<?php 
   $conn=new mysqli("localhost","root","","php_class3");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<>
    <div class="container-fluid">
    <div class="bg-dark text-center text-light p-3">
            <h2>Crud Operation</h2>
        </div>
    </div>
    <div class="container shadow p-5">
       
      <form action="contoller_upload.php" method="post" class="mt-3">
         <label for="">Enter code</label>
         <input type="text" class="form-control" name="code" placeholder="Enter code">
         <label for="">Enter Name</label>
         <input type="text" class="form-control" name="name" placeholder="Enter code">
         <label for="">Enter Price</label>
         <input type="text" class="form-control" name="price" placeholder="Enter code">
          <div class="mt-3">
          <button type="submit" class="btn btn-primary rounded-0">Save</button>
          <button class="btn btn-danger rounded-0">Close</button>
          </div>
      </form>
    </div>
    <div class="container">
          <table class="table mt-5 shadow">
              <tr class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
              <?php 
                $sql="SELECT * FROM `products` ORDER BY `id` desc";
                $result=$conn->query($sql);
                while($row=$result->fetch_array()){
                   ?>
                      <tr>
                        <td><?php echo $row[0]?></td>
                      
                        <td><?php echo $row[1]?></td>
                        <td><?php echo $row[2]?></td>
                       
                        <td>
                            <button  class="btn btn-warning rounded-0">Edit</button>
                            <button onclick="Dlete_product(<?php echo $row[0]?>)" class="btn btn-danger rounded-0" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                        </td>
                    </tr>
                   <?php
                }
              ?>
             
          </table>
    </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="delte_product.php" method="post">
        <div class="modal-body">
        <input type="text" value="" id="Delelte_id" name="Delete_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-success">Yes</button>
      </div>
        </form>
    </div>
  </div>
</div>
<script>
    function Dlete_product(id){
        $("#Delelte_id").val(id)
    }
</script>
</html>