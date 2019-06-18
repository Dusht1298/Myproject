<!DOCTYPE html>
<?php include 'include\common.php';
if(!isset($_SESSION['email']))
{    
 header('Location:index.php');
}?>
<html>
<head>
<title>Setting Page</title>
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" type="text/css">
<script type="text/js"src="bootstrap\js\bootstrap.min.js"></script>
<script type="text/js"src="bootstrap\jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>


<body>
<?php include 'include\header.php';?>
<div class="container">
<div class="row row-style ">
    <form class="col-xs-4 col-xs-push-4" method="POST" action="settings_script.php">
<div class="form-group">
<input type="password" name="old_password" class="form-control" placeholder="Old Password">
</div>
<div class="form-group">
<input type="password" name="new_password" class="form-control" placeholder="Enter new Password">
</div>
<div class="form-group">
<input type="password" name="reenter_new_password" class="form-control" placeholder="Re-enter new Password">
</div>
<div class="form-group col-xs-4">
<button class="form-control btn btn-primary">Change</button>
</div>
</form>
</div>
</div>
    <?php include 'include\footer.php';?>
</body>
</body>
</html>