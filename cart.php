<?php include 'include/common.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Cart Page</title>
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" type="text/css">
<script type="text/js"src="bootstrap\js\bootstrap.min.js"></script>
<script type="text/js"src="bootstrap\jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>


<body>
<?php include 'include/header.php';?>
<div class="container">
<div class="row-style col-xs-5 col-xs-push-3">
<?php
 $id=$_SESSION['id'];
 $query="SELECT *FROM items INNER JOIN user_items ON user_items.item_id=items.item_id "
        . "WHERE user_items.user_id='$id[0]' and user_items.status='Added to cart'";
 $result= mysqli_query($con, $query)or die($con);   ?>
<table class="table table-responsive table-striped">
<tr>
<th>Item Number</th>
<th>Item Name</th>
<th>price</th>
</tr>
<?php ?>
<tr>
<th></th>
<?php $count=1 ;$total=0; while($row= mysqli_fetch_array($result)) {?>
<tr> 
    <td><?php echo $count++;?></td> 
    <td><?php echo $row['name'];?> </td> 
    <td><?php echo $row['price'];?> </td>
    <td><?php echo "<a href='cart_remove.php?id={$row['item_id']}'class='remove_item_link'>Remove</a>"?></td>
</tr>
<?php $total+=$row['price']; }?>
<th>Total</th>
<th> <?php echo $total." Rupees"; ?></th>
<th><a href="paytm.php"><button class="btn btn-primary"><?php echo"Pay ".$total." Rupees"; ?></button></a></th>
</tr>
</table>
</div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>