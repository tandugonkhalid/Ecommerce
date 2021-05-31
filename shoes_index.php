<?php
session_start();
?>
<html>
<head>
<title>Shoes</title>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="Shoes.css">
<link rel="stylesheet" type="text/css" href="shoes_index.css">
</head>
<body>
<div id="imagehead">
<a href="Project.php"><img src="Link images\OLX.png" onclick='click()' width="50px"></a>
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

<div>


<?php
include('dbcon.php');
$sql = "SELECT * FROM shoes";
$result = mysqli_query($dbconn,$sql);
while($row = mysqli_fetch_array($result)){
	echo "<img id='image' src='Uploads/".$row['productname']."'>";
	?>
	<form method="post" action="checkout.php">
	<div>
	<?php
	echo $row['description']."<br>";
	echo $row['price'];
	?>
	<br>
	<input type="hidden"  name="price" value="<?php echo $row["price"] ?>">
	<input type="hidden"  name="desc" value="<?php echo $row["description"] ?>">
	<input type="submit" name="add_to_cart" value="Add to cart">
	</div>
	</form>
	<?php	
}
?>
<script type="text/javascript">
function click(){
	<?php


if($_SESSION['login_user']=="logout"){
$_SESSION['login_user']=="logout";
}elseif($_SESSION['login_user']=="user"){
$_SESSION['login_user']=="user";
}

	
?>
}	
</script>

</div>
<div>
<form action="checkout.php">
	<input type="submit" name="cart" value="Proceed to cart">
</form>

</div>

</body>
</html>