<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<div id="imagehead">
<a href="Project.php"><img src="Link images\OLX.png" width="50px"></a>
<img src="Link images\sell.PNG" width="150px" align="right" class="imageheaders">
<a style='text-decoration: none' onclick='logout()'><img src='Link images\logout.ico' width='45px' align='right' class='imageheaders'><a>

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
<br>
<center>
	<form method="post" action="admin.php" enctype="multipart/form-data" style="font-size: 18px;
	text-align: center;
	font-family: "Comic Sans MS",cursive,sans-serif;">
	<div>
		ID No: <input type="number" name="id"> 
	</div>
	<div>
		Product name: <input type="text" name="productname">
	</div>
	<div>
		Original price: <input type="text" name="original_price">
	</div>
	<div>
		Selling Price: <input type="number" name="price">
	</div>
	<div>
		Description: <input type="text" name="description">
	</div>
	<div>
		<input type="file" name="images">
	</div>
	<div>
		Category: <select name="category">
			<option>Clothes</option>
			<option>Shoes</option>
			<option>Accessories</option>
		</select>
	</div>
	<div>
		<input type="submit" name="submit" value="Add">
		<input type="submit" name="update" value="Update">
		<input type="submit" name="delete" value="Delete">
	</div>
	</form>
</center>
<?php 
if(isset($_POST["submit"])){
	$name=$_POST["productname"];
	$original_price=$_POST["original_price"];
	$price=$_POST["price"];
	$description=$_POST["description"];
	$category=$_POST["category"];

	$targetdir="Uploads/";
	$filename=basename($_FILES["images"]["name"]);
	$targetfilepath = $targetdir . $filename;
    $filetype = pathinfo($targetfilepath, PATHINFO_EXTENSION);
	include('dbcon.php');
	switch($category){
		case "Clothes":
				$sql = "INSERT INTO clothes (productname,original_price,price,description) VALUES ('$filename',$original_price,$price,'$description')";
				mysqli_query($dbconn,$sql);
			break;
		case "Shoes":
				$sql = "INSERT INTO shoes (productname,original_price,price,description) VALUES ('$filename',$original_price,$price,'$description')";
				mysqli_query($dbconn,$sql);
			break;
		case "Accessories":
				$sql = "INSERT INTO accessories (productname,original_price,price,description) VALUES ('$filename',$original_price,$price,'$description')";
				mysqli_query($dbconn,$sql);
			break;
	}
	if(move_uploaded_file($_FILES["images"]["tmp_name"], $targetfilepath)){
		?>
		<script type="text/javascript">alert("Sucessfully Added")</script>
		<?php
	}else{
		?>
		<script type="text/javascript">alert("Failed to add product, please Try again")</script>
		<?php
	}
}elseif (isset($_POST["update"])) {
	$id=$_POST["id"];
	$name=$_POST["productname"];
	$price=$_POST["price"];
	$description=$_POST["description"];
	$category=$_POST["category"];

	$targetdir="Uploads/";
	$filename=basename($_FILES["images"]["name"]);
	$targetfilepath = $targetdir . $filename;
    $filetype = pathinfo($targetfilepath, PATHINFO_EXTENSION);
	include('dbcon.php');

	switch($category){
		case "Clothes":
				$sql = "UPDATE clothes set productname = '$filename' ,price = $price, description = '$description' WHERE id=$id";
				mysqli_query($dbconn,$sql);
			break;
		case "Shoes":
				$sql = "UPDATE shoes set productname = '$filename' ,price = $price, description = '$description' WHERE id=$id";
				mysqli_query($dbconn,$sql);
			break;
		case "Accessories":
				$sql = "UPDATE accessories set productname = '$filename' ,price = $price, description = '$description' WHERE id=$id";
				mysqli_query($dbconn,$sql);
			break;
	}
	if(move_uploaded_file($_FILES["images"]["tmp_name"], $targetfilepath)){
		?>
		<script type="text/javascript">alert("Updated Sucessfully")</script>
		<?php
	}else{
		?>
		<script type="text/javascript">alert("Failed to update product, please Try again")</script>
		<?php
	}
}elseif (isset($_POST["delete"])) {
	$id=$_POST["id"];
	$name=$_POST["productname"];
	$price=$_POST["price"];
	$description=$_POST["description"];
	$category=$_POST["category"];
	include('dbcon.php');
	switch($category){
		case "Clothes":
				$sql = "DELETE FROM clothes WHERE id=$id";
				?>
				<script type="text/javascript">alert("Deleted Successfully")</script>
				<?php
				mysqli_query($dbconn,$sql);
			break;
		case "Shoes":
				$sql = "DELETE FROM shoes WHERE id=$id";
				?>
				<script type="text/javascript">alert("Deleted Successfully")</script>
				<?php
				mysqli_query($dbconn,$sql);
			break;
		case "Accessories":
				$sql = "DELETE FROM accessories WHERE id=$id";
				?>
				<script type="text/javascript">alert("Deleted Successfully")</script>
				<?php
				mysqli_query($dbconn,$sql);
			break;
	}
}?>
<script type="text/javascript">
	function logout(){
		<?php $_SESSION['login_user']=="logout";
		?>
		alert("Logged Out Succesfully");
		window.location.href="login.php";
	}
</script> 
<h3>RECENT ACTIVITIES</h3>
<TABLE border="1">
	<th>Product Name</th>
	<th>Price</th>
	<th>Date Ordered</th>
	<th>Ordered by</th>
	<?php
include('dbcon.php');
$sql = "SELECT * FROM cart";
$result = mysqli_query($dbconn,$sql);
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>".$row['item_desc']."</td><td>".$row['item_price']."</td><td>".$row['date_ordered']."</td><td>".$row['ordered_by']."</td></tr>";
}
?>
</TABLE>




</body>
</html>