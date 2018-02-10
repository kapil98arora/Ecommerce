<!Doctype html>
<html>
<head>
<title>Lifestyle store</title>
<link rel="stylesheet" href="style.css" type="text/css">
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
		<style>
		.row-style{
			margin-top:80px;
		}
		</style>
</head>
<body>
<?php

include 'includes/common.php';
include 'includes/header.php';
include 'check_if_added.php';
?>
            
			
				
		<div class="container">
		<div class="row row-style">
		<div class="col-sm-12">
		<div class="jumbotron">
		<h1>Welcome to our LifeStyle Store!!!</h1>
		<p>We Sell Best Cameras,Watches and T-shirts in the Town</p>
		</div>
		<!--Cameras-->
<div class="row text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/camera1.jpg" alt="Canon EOS 5D Mark IV"></a>
<div class="caption">
<h3>Canon EOS 5D Mark IV</h3>
<p>$399</p>
<?php
if(!isset($_SESSION['email']))
{?>
    <p><a href="" class="btn btn-primary" role="button" >BUY Now</a></p>
    <?php
}else{ 
    if(check_if_added_to_cart(1)){
        echo '<a href="#" class="btn btn-success btn-block" disabled >Added to Cart</a>';
    }else{
        echo '<p><a href="cart.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>';
}

    }
?>
<!--Make it link not button as we need to disable it and enable it when user add to cart
<button class="btn btn-primary">Add to Cart</button>-->

</div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/camera2.jpg" alt="Nikon D810"></a>
<div class="caption">
<h3>Nikon D810</h3>
<p>$299</p>
<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>

</div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/camera3.jpg" alt=" Nikon D500"></a>
<div class="caption">
<h3>Nikon D500</h3>
<p>$209</p>

<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>

</div>
</div>
</div>


<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/camera4.jpg" alt="Canon EOS 7D Mark II"></a>
<div class="caption">
<h3>Canon EOS 7D Mark II</h3>
<p>$199</p>
<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>
</div>
</div>
</div>


</div>
 		
<!--End of cameras-->



     	<!--T-shirts-->
<div class="row text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/watch1.jpg" alt="Rado"></a>
<div class="caption">
<h3>Rado</h3>
<p>Price: <strong>$399</strong></p>

<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/watch2.jpg" alt="Omega"></a>
<div class="caption">
<h3>Omega</h3>
<p>Price: <strong>$119</strong></p>
<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/watch3.jpg" alt="Rolex"></a>
<div class="caption">
<h3>Rolex</h3>
<p>Price: <strong>$109</strong></p>
<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>
</div>
</div>
</div>


<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/watch4.jpg" alt="Titan"></a>
<div class="caption">
<h3>Titan</h3>
<p>Price: <strong>$89</strong></p>
<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>
</div>
</div>
</div>


</div>
 		
<!--End of watches-->

	<!--Tshirts-->
<div class="row text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/tshirt1.jpg" alt="Nike"></a>
<div class="caption">
<h3>Nike</h3>
<p>Price: <strong>$29</strong></p>
<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/tshirt2.jpg" alt="Rebook"></a>
<div class="caption">
<h3>Rebook</h3>
<p>Price: <strong>$31</strong></p>
<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/tshirt3.jpg" alt="Adidas"></a>
<div class="caption">
<h3>Adidas</h3>
<p>Price: <strong>$34</strong></p>
<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>
</div>
</div>
</div>


<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/tshirt4.jpg" alt="Levis"></a>
<div class="caption">
<h3>Levis</h3>
<p>Price: <strong>$26</strong></p>
<p><a href="login.php" class="btn btn-primary btn-block" role="button" >Add to cart</a></p>
</div>
</div>
</div>

<!--2nd row is full so now for 3rd row we have to write-->
<!--<div class="row text-center">

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/tshirt5.jpg" alt="Levis"></a>
<div class="caption">
<h3>Levis</h3>
<p>Price: <strong>$26</strong></p>
<button class="btn btn-primary">Add to Cart</button>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<a href="#"><img src="products/tshirt6.jpg" alt="Adidas"></a>
<div class="caption">
<h3>Adidas</h3>
<p>Price: <strong>$39</strong></p>
<button class="btn btn-primary">Add to Cart</button>
</div>
</div>
</div>

</div>
</div>-->
 		
<!--End of T-shirts-->

		</div>
		</div>
		</div>
	    <?php 
            include 'includes/footer.php';
            ?>
</body>
</html>