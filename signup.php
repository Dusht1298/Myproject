<?php include 'include\common.php';
 if(isset($_SESSION['email']))
 {header('location:products.php');
 }
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup Page</title>
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" type="text/css">
<script type="text/js"src="bootstrap\js\bootstrap.min.js"></script>
<script type="text/js"src="bootstrap\jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>


<body>
<?php include 'include/header.php';?>
<div  class="container">
<div class="row row-style">
<div class="panel panel-primary col-xs-10 col-xs-push-1">
<div class="panel-body">
    <form class="col-xs-6 col-xs-push-3 " method="POST" action="signup_script.php">
<div class="form-group">
<h1>Sign up<h1>
<input type="text" class="form-control" name="name" placeholder="User Name">
</div>
<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="Email">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="password" placeholder="Password">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="contact" placeholder="Contact">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="city" placeholder="City">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="address" placeholder="Adresss">
</div>
<div class="form-group col-xs-4 col-xs-push-4">
<button name="submit" class="btn-primary form-control">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>