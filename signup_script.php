<?php include 'include/common.php';
$email= mysqli_escape_string($con,$_POST['email']);
$query1="SELECT id FROM users WHERE users.email='$email'";
$result1= mysqli_query($con, $query1);
if(mysqli_num_rows($result1)>0){
   echo "email already exist"; 
}
else{
$name= mysqli_escape_string($con,$_POST['name']);
$password= mysqli_escape_string($con,$_POST['password']);
$contact= mysqli_escape_string($con,$_POST['contact']);
$city= mysqli_escape_string($con,$_POST['city']);
$address= mysqli_escape_string($con,$_POST['address']);

$query="INSERT INTO users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
$result= mysqli_query($con, $query)or die(mysqli_error($con));
$_SESSION['id']= mysqli_insert_id($con);
$_SESSION['email']=$email;
header('Location:login.php');
}
?>