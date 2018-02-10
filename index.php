<?php
include 'includes/common.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jQuery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 
        <link type='text/css' rel="stylesheet" href="style.css">
        <!--ONLINE -->
        
      <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           </head>
    <body>
        <?php
        if(isset($_SESSION['email'])){?>
        header('location:product.php');
        <?php }?>
        
        <?php
        include 'includes/header.php';
        ?>
     
        <div id="bgimage" class="container">
            <div>
			<center>
                <div class="img-rounded" id="bgcontent">
                    <h2>We Sell Lifestyle.</h2>
                    <p style="font-style: italic;font-family:sans-serif;">Flat 50% off on big brands</p>
                    <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
				</center>
            </div>
        </div>
		<marquee  behavior='scroll' scrollamount='6' onmouseover='this.stop()' onmouseout='this.start()'>
		Login to make purchse and Grab the Deal.Hurry up!!! flat 50% off on Branded Items</marquee><br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail">
                    <a href="product.php"><img src="image/camera.jpg" alt="Camera"></a>
                    <div class="caption">
                        <h4>Cameras</h4><br>
                        <p> Choose amoung the best in the world</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                    <a href="product.php"><img src="image/handwatch.jpg" alt=""></a>
                    <div class="caption">
                        <h4>Watches</h4><br>
                        <p> Original Watches amoung the best brands</p>    
                    </div>
                    </div>
                </div>
                   <div class="col-sm-4">
                       <div class="thumbnail">
                    <a href="product.php"><img src="image/tshirt.jpg"></a>
                    <div class="caption">
                         <h4>T-Shirts</h4>
                         <p>Our cool t-shirts summer collection<p>
                    </div>
                       </div>
                </div>
            </div>
            
        </div>
		<div class="container">
	             <div class="row">
			 <div class="col-xs-6">
			     <div class="panel panel-default">
			         <div class="panel-body">
			          <strong>Login to make purchse and Grab the Deal.Hurry up!!! flat 50% off on Branded Items</strong><br>
			         <a href="login.php"><button class="btn btn-danger">Login</button></a><br/>
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
