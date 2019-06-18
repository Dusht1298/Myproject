<?php include 'include\common.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" type="text/css">
<script type="text/js"src="bootstrap\js\bootstrap.min.js"></script>
<script type="text/js"src="bootstrap\jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>


<body>
<?php include 'include/header.php';?>
<div class="container">
<div class="row row-style">
<div class="panel panel-primary col-xs-6 col-xs-push-3 ">
<div class="panel-body">
<p class="text-warning"><Strong>Login to make a purchase</strong></p>
<div class="col-xs-8 col-xs-push-2"> 
    <form method="POST" action="login_submit.php">
<div class="form-group">
<div class="form-inline">
<strong>Email_</strong><span class="glyphicon glyphicon-user"></span>
</div>
<input type="text" name="email" placeholder="Email or Name" class="form-control">
</div>
<div class="form-group">
<div class="form-inline">
<strong>Password_</strong><span class="glyphicon glyphicon-lock"></span>
</div>
    <input type="password" name="password" placeholder="Password" class="form-control">
</div>
<div class="form-group col-xs-5 col-xs-push-3">
<button class="form-control btn-primary">Login</button>
</div>
</form>
</div>

</div>
<div class="panel-footer">
<p>Don't have an account? <a href="signup.php">Register_<span class="glyphicon glyphicon-pencil"></span></a></p>
</div>
</div>
</div>
</div>
<?php include 'include/footer.php';?>
</body>

</html>