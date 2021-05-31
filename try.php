<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
<?php
include('dbcon.php');
$sql = "SELECT * FROM shoes";
$result = mysqli_query($dbconn,$sql);
while($row = mysqli_fetch_array($result)){
	echo "<div>";
	echo "<img src='Uploads/".$row['productname']."'>";
	echo "<p>".$row['description']."</p>";
	echo "<p>Price: ".$row['price']."</p>";
	echo "</div>";
}
?>
</div>
</body>
</html>