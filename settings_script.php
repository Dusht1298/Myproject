<?php include 'include/common.php';
$old= mysqli_escape_string($con, $_POST['old_password']);
$new= mysqli_escape_string($con, $_POST['new_password']);
$renew= mysqli_escape_string($con, $_POST['reenter_new_password']);
$id=$_SESSION['id'];
$query="SELECT password FROM users WHERE id='$id[0]'";
$result= mysqli_query($con, $query)or die(mysqli_error($con));
if($result)
{ $a= mysqli_fetch_array($result);
{ if($a['password']==$old){
$query="UPDATE users SET users.password='$new' WHERE id='$id[0]'";
$result=mysqli_query($con, $query)or die(mysqli_error($con));
if($result)
{header('Location:login.php');}
}
else{header('Location:settings.php');}
}
}
else{header('Location:settings.php');}
?>