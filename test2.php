<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['id'])){
    echo "hello".$_SESSION['email'];
}
 else {
echo "hello guest";    
}
?>
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
    <body> <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class=" panel panel-primary">
                <div class="panel-heading">
                    <h4>User Registration</h4>
                </div>
        
                    <div class="panel-body">
                        <form method="post" action="users_registration_script.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="email" class="form-control input-lg">
                        </div>
                         <div class="form-group">
                             <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control input-lg">
                        </div>
                         <div class="form-group">
                             <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control input-lg">
                        </div>
                         <div class="form-group">
                             <label for="phone">Phone</label>
                             <input type="number" name="phone" id="phone" placeholder="Phone" class="form-control input-lg">
                        </div>
                         <div class="form-group">
                             <input type="submit" class=" btn btn-primary" value="submit"/>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            </div>
            </div>
        
    </body>
</html>