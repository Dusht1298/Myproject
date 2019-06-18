<?php include 'include/common.php';?>

<!DOCTYPE html>
<html>
<head>
<title>Product Page</title>
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" type="text/css">
<script type="text/js"src="bootstrap\js\bootstrap.min.js"></script>
<script type="text/js"src="bootstrap\jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>


<body>
    <?php include 'include/header.php'; ?>
    <?php include 'include/check_if_added.php'; ?>
<div class="container">
<div class="jumbotron jumbo">
<div><h1>Welcome to our Lifestyle Store!</h1> 
<p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place. </p>
</div>
</div>
</div>
<div class="container">
<div class="row text-center">
<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/camera/cannon-eos.jpeg" alt="watch">
<div class="caption">
<h1>Cannon EOS</h1>
<p>price:36000.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(1))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>

<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/camera/cannon-eos.jpeg" alt="watch">
<div class="caption">
<h1>Cannon EOS</h1>
<p>price:36000.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(2))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>

<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/camera/cannon-eos.jpeg" alt="watch">
<div class="caption">
<h1>Cannon EOS</h1>
<p>price:36000.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(3))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>
<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/camera/cannon-eos.jpeg" alt="watch">
<div class="caption">
<h1>Cannon EOS</h1>
<p>price:36000.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(4))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?></div>
</div>
</div>

<div class="container">
<div class="row text-center">
<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/watch/titan-octane.jpeg" alt="watch">
<div class="caption">
<h1>Titan Octane</h1>
<p>price:3500.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(5))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?></div>

<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/watch/titan-octane.jpeg" alt="watch">
<div class="caption">
<h1>Titan Octane</h1>
<p>price:3500.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(6))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>

<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/watch/titan-octane.jpeg" alt="watch">
<div class="caption">
<h1>Titan Octane</h1>
<p>price:3500.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(7))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>
<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/watch/titan-octane.jpeg" alt="watch">
<div class="caption">
<h1>Titan Octane</h1>
<p>price:3500.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(8))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>

</div>
</div>
<div class="container">
<div class="row text-center">
<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/shirt/levis.jpg" alt="watch" class="image-responsive">
<div class="caption">
<h1>Levis</h1>
<p>price:2200.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(9))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>
<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/shirt/levis.jpg" alt="watch" class="image-responsive">
<div class="caption">
<h1>Levis</h1>
<p>price:2200.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(10))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>
<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/shirt/levis.jpg" alt="watch" class="image-responsive">
<div class="caption">
<h1>Levis</h1>
<p>price:2200.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(11))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>
<div class="col-sm-6 col-md-3 thumbnail">
<img src="Img/shirt/levis.jpg" alt="watch" class="image-responsive">
<div class="caption">
<h1>Levis</h1>
<p>price:2200.00</p>
</div>
<?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
<?php } else { if(check_if_added_to_cart(12))
 { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
  else { ?>
<a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
</div>

</div>
</div>
<?php include 'include/footer.php';
?>
</body>
</html>