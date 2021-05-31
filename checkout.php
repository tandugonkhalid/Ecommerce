<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
<head>
	<title>Checkout</title>
	<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="clothes.css">
</head>
<body>
<div id="imagehead">
<img src="Link images\OLX.png" width="50px">
<img src="Link images\sell.PNG" width="150px" align="right" class="imageheaders">

<div id="pheader">
<p>Download the OLD app!</p>
<p>Buy and sell faster with people near you.</p>
</div>

<table align="center"  cellspacing="0" cellpadding="0">
<tr>
<td><input type="Search" placeholder="Search" id="search"></td>
<td><button id="searchbutton">
<img src="Link images\\searchicon.PNG" style="background-color: transparent; width: 10px;">
</button>
</td>
</tr>
</table>
</center>
<br>
</div>
	<table border="1">
		<th>Product ID</th>
		<th>Product Description</th>
		<th>Price</th>
		<th>Date Ordered</th>
		<th>Ordered by</th>
<?php
include('dbcon.php');
	if (isset($_POST['add_to_cart'])) {
		$price=$_POST['price'];
		$desc=$_POST['desc'];
		$date= date('m/d/Y');
		$user=$_SESSION['login_user'];
		$sql="INSERT INTO cart (item_desc,item_price,date_ordered,ordered_by) VALUES('$desc',$price,'$date','$user')";
		mysqli_query($dbconn,$sql);
	?>
	<script type="text/javascript">
		alert("Added to cart");
	</script>

	<?php			
	$sql = "SELECT * FROM cart";
	$result = mysqli_query($dbconn,$sql);
	$total = 0;
	$price_array = array('item_price' => $price);
	while($row=mysqli_fetch_array($result)){
		echo "<tr><td>".$row['id']."</td><td> ".$row['item_desc']."</td><td> ".$row['item_price']."</td></tr>";
	}
	$_SESSION["itemprice"][] = $price_array;
	foreach ($_SESSION['itemprice'] as $key => $value) {
		$total+=$value['item_price'];
	}


?>
</table>
<form method="post">
	Product ID: <input type="number" name="num"><br>
	Total Amount: <input type="number" value="<?php echo $total;?>" name="total"><br>
	Enter amount: <input type="number" name="cashamount" ><br>
	<input type="submit" value="Checkout" name="checkout">
	<input type="submit" value="Delete" name="delete">
	<button onclick="back()">Back</button>
	<?php } ?>
<?php
if(isset($_POST["checkout"])){
	include('dbcon.php');
	$amount=$_POST['cashamount'];
	$total=$_POST['total'];
		if($amount<$total){
			?>
			<script type="text/javascript">
				alert("Invalid Amount. Cash Amount is less than the Total Amount of the products");
			</script>
			<?php
		}else{
			unset($_SESSION['login_user']);
			unset($_SESSION['itemprice']);
			?>
			<script type="text/javascript">
				alert("Payment Complete");
				window.location.href="Project.php";
			</script>
			<?php
		}
}else if(isset($_POST['delete'])) {
		$id=$_POST['num'];
		$sql="DELETE FROM cart where id=$id";
		$result=mysqli_query($dbconn,$sql);
			?><script type="text/javascript">
				alert("Item Deleted");
			</script><?php

	}
?>
<script type="text/javascript">
	function back(){
		alert("hello");
		window.location.href="Project.php";
	}
</script>
</form>
</body>
</html>