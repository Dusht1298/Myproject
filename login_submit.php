<?php 
include 'include/common.php';
$email= mysqli_escape_string($con,$_POST['email']);
$password= mysqli_escape_string($con,$_POST['password']);
$query="SELECT id FROM users WHERE users.email='$email' and users.password='$password'";
$result= mysqli_query($con, $query);
if(mysqli_num_rows($result)==0){
    
     header('location:login2.php');
}
else{
    $_SESSION['id']= mysqli_fetch_array($result);
    $_SESSION['email']=$email;
    header('location:products.php');
}
?>