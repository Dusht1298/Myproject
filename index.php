<?php include 'include\common.php';?>
<?php if (isset($_SESSION['email'])){?>
header('location: products.php');
<?php } ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="online shopping of fashion and lifestyle products" >
    <meta name="keywords" content="html,css,bootstrap,javascript,mysql,php">
    <meta name="author" content="shubham achval">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
<title>Index Page</title>
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" type="text/css">
<script type="text/js"src="bootstrap\js\bootstrap.min.js"></script>
<script type="text/js"src="bootstrap\jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php include 'include/header.php';?>
<div class="bannerimage img-responsive">
<div class="innerimage">
<H1>We sell lifestyle</H1>
<p>Flat 40% OFF on premium brands</p>
<a href="products.php"><button class="button btn-danger" value="Shop Now">Shop Now</button></a>
</div>
</div>
<br/>
<div class="container">
<div class="row">
<a href="#" class="col-sm-3 col-sm-offset-1 img-responsive thumbnail"><img src="Img/camera.jpg" alt="camera"></img>
<div class="caption">
<h2>Cameras</h2>
<p>Choose among the best available in the world.</p>
</div></a>

<a href="#" class="col-sm-3 col-sm-offset-1 img-responsive thumbnail"><img src="Img/watch.jpg" alt="watch"></img>
<div class="caption">
<h2>Watches</h2>
<p>Original Watches from best brands.</p>
</div>
</a>
<a href="#" class="col-sm-3 col-sm-offset-1 img-responsive thumbnail"><img src="Img/shirt.jpg" alt="shirt"></img>
<div class="caption">
<h2>Shirts</h2>
<p>Our exquisite collection of shirts.</p>
</div>
</a>
</div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>