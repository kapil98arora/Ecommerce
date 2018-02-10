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
		<div class="container">
			 <div class="row row-style">
			     <div class="col-sm-6 col-md-6">
                                 <div class=" col-sm-6 col-md-6 col-lg-offset-6">
			         <div class="panel panel-primary">
				      <div class="panel-heading">
				       <h4>Login</h4>
                                       <?php
                                       if(isset($_GET['A'])) echo "<h5>".$_GET["A"]."</h5>"
				        ?></div>
			          <div class="panel-body">
			           <p class="text-warning"><i>Login to make purchse<i></p>
                                               <form method="post" action="login_submit.php">
					   <div class="form-group">
					   <input  type="text" name="email" placeholder="Email" class="form-control input-lg">
					   </div>
					   <div class="form-group">
                                               <input type="password" name="passwd"  value="" class="form-control input-lg">
					   </div>
					  
					   <div class="form-group">
                                               <input type="submit" class="btn btn-primary" value="Login"/>
					 </div>
                                                   </form>
					 <div class="panel-footer">Dont have an account.? <span style="color:blue"><a href="signup.php">Register</a>
					 </span></div>
			           </div>
			         </div>
                                 </div>
			    </div>
			</div>
		</div>
		
	   <?php
           include 'includes/footer.php';
           ?>
</body>

		</html>