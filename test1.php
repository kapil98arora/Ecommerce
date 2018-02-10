<?php
$con=mysqli_connect("localhost","root","","ecommerce") or
        die(mysqli_error($con));
$select_query="SELECT id,email,first_name FROM users";

$select_query_result=mysqli_query($con,$select_query)or
        die(mysqli_error($con));

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title> 
        <!--ONLINE -->
        
      <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="container">
            <?php while ($row=mysqli_fetch_array($select_query_result)) {?>
            <div class="row">
                <div class="col-xs-12"><h4>User</h4></div>
            </div>
            <div class="row">
                <div class="col-xs-2">ID</div>
                <div class="col-xs-10"><?php echo $row['id'];?></div>
            </div>
            <div class="row">
                 <div class="col-xs-2">Email</div>
                <div class="col-xs-10"><?php echo $row['email'];?></div>
            </div>
            <div class="row">
                 <div class="col-xs-2">First Name</div>
                <div class="col-xs-10"><?php echo $row['first_name'];?></div>
            </div>
            <div class="row">
                 <div class="col-xs-2">products</div>
                <div class="col-xs-10"><?php echo number_of_products_purchased($con,$row['id']);?></div>
            </div>
            <hr/>
        <?php } ?>   
            </div>
  
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="panel-primary">
                <div class="panel-heading">
                    <h4>User Registration</h4>
                </div>
        
                    <div class="panel-body">
                    <form>
                        <div>
                    <input type="text" name="login" placeholder="email" class="form-control input-lg">
                        </div>
                         <div>
                    <input type="text" name="first_name" placeholder="First Name" class="form-control input-lg">
                        </div>
                         <div>
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control input-lg">
                        </div>
                         <div>
                    <input type="text" name="phone" placeholder="Phone" class="form-control input-lg">
                        </div>
                         <div>
                             <button class="btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            </div>
            </div>
        
    </body>
</html>
<?php

function number_of_products_purchased($con, $user_id) {
  $users_products_query = "SELECT  id FROM users_products WHERE user_id = '$user_id'";
  $users_products_result = mysqli_query($con, $users_products_query);
  $number_of_products = mysqli_num_rows($users_products_result);
  return $number_of_products;
}?>

