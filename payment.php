<?php
include 'include\common.php';
$transid=$_POST['transaction_id'];
if($transid=="123abc456def"){
    header('Location:success.php');
}
else{
    header('Location:paytm2.php');
}
?>

