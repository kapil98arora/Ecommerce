<?php
include 'includes/common.php';
?>
<!Doctype html>
<html>
<head>
<title>Lifestyle store</title>
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jQuery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" type="text/css" rel="stylesheet">
        
        
        <!--ONLINE -->
        
      <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		.row-style{
			margin-top:80px;
		}
		</style>
</head>
<body>
<?php
include 'includes/header.php';
?>
            
			
				
		<div  class="container">
		
		<div class="row row-style">
		
		<div class="col-sm-3 col-md-6" >
                    <div class="col-lg-6 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <form method='post' action="users_signup.php">
				
		<h2>Sing Up</h2>
		<div  class="form-group input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" placeholder="First Name" name="first_name" class="form-control input-lg">
		</div>
                <div  class="form-group input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" placeholder="Last Name" name="last_name" class="form-control input-lg">
		</div>
		<div class="form-group input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" placeholder="Email" name="email" class="form-control input-lg">
		</div>
		<div class="form-group input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password"  placeholder="" name="passwd" class="form-control input-lg">
		</div>
		<div class="form-group input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		<input type="number"  placeholder="Contact" name="phone" class="form-control input-lg">
                </div>
		<!--<div class="form-group input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
		<input type="text"  placeholder="City" name="signup" class="form-control input-lg">
		</div>
		<div class="form-group input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		<input type="text"  placeholder="Address" name="signup" class="form-control input-lg">
		</div>-->
                <div class="form-group">
                    <input  type="submit"  class="btn btn-primary"/>
                </div>
		</form>
                </div>
		</div>
		</div>
		</div>
	    <?php
            include 'includes/footer.php';
            ?>
</body>

		</html>