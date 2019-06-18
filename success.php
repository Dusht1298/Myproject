<?php include 'include/common.php';
if(!isset($_SESSION['email']))
{ header('Location:index.php');}
$user_id=$_SESSION['id'];
$query="UPDATE user_items SET status='Confirmed' WHERE user_items.user_id=$user_id[0] and user_items.status='Added to cart'";
$result=mysqli_query($con, $query)or die(mysqli_error($result));
?>
<!DOCTYPE html>
<html>
<head>
<title>Success Page</title>
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" type="text/css">
<script type="text/js"src="bootstrap\js\bootstrap.min.js"></script>
<script type="text/js"src="bootstrap\jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php include 'include/header.php';?>
<div class="container row-style">
<div class="row">
<div class="panel panel-primary col-xs-10 col-xs-push-1">
<div class="panel-body col-xs-12 col-xs-push-1">
<p><h4>Your order is confirmed. Thank you for shopping
with us. <a href="products.php">Click here</a> to purchase any other item.
</h4></p>
</div>
</div>
</div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>