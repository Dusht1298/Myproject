<?php include 'include/common.php';
$pid=$_GET['id'];
$id=$_SESSION['id'];
$query="DELETE FROM user_items WHERE user_items.user_id=$id[0] and user_items.item_id=$pid";
$result= mysqli_query($con, $query)or die($con);
header('Location:cart.php');
?>