<?php
// Start the session
session_start();
?>
<html>
<head><title>ACCESSORIES</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div id="imagehead">
<a href="Project.php"><img src="Link images\OLX.png" width="50px"></a>
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

<form method="post">
<table align="center">
<caption>Accessories</caption>
<tr>
<td><img src="Accessories images\Belt 1.JPG"></td>
<td colspan="2" align="center"><img src="Accessories images\Gucci belt.JPG"></td>
</tr>
<tr>
<td>
<input type="hidden" value="750" name ="price1">
<input type="hidden" value="" name ="brand1">
<input type="hidden" value="Belt for Men" name ="type1">
<input type="submit" value="ADD TO CART "style="background-color: none; border-color: none; height: 20px; border-radius: 50px 50px;" name="submit1"></td>
<td colspan="2" align="center">
<input type="hidden" value="1150" name ="price2">
<input type="hidden" value="Gucci" name ="brand2">
<input type="hidden" value="Belt" name ="type2">
<input type="submit" value="ADD TO CART "style="background-color: none; border-color: none; height: 20px; border-radius: 50px 50px;" name="submit2"></td>
</tr>
<tr>
<td><img src="Accessories images\IMG_4991.JPG"></td>
<td><img src="Accessories images\IMG_4992.JPG"></td>
<td><img src="Accessories images\IMG_4993.JPG"></td>
</tr>
<tr>
<td>
<input type="hidden" value="7500" name ="price3">
<input type="hidden" value="" name ="brand3">
<input type="hidden" value="Earrings(Gold)" name ="type3">
<input type="submit" value="ADD TO CART "style="background-color: none; border-color: none; height: 20px; border-radius: 50px 50px;" name="submit3"></td>
<td>
<input type="hidden" value="8550" name ="price4">
<input type="hidden" value="" name ="brand4">
<input type="hidden" value="Earrings(Diamond)" name ="type4">
<input type="submit" value="ADD TO CART "style="background-color: none; border-color: none; height: 20px; border-radius: 50px 50px;" name="submit4"></td>
<td>
<input type="hidden" value="6550" name ="price5">
<input type="hidden" value="" name ="brand5">
<input type="hidden" value="ring(Diamond)" name ="type5">
<input type="submit" value="ADD TO CART "style="background-color: none; border-color: none; height: 20px; border-radius: 50px 50px;" name="submit5"></td>
</tr>
<tr>
<td><img src="Accessories images\IMG_4994.JPG"></td>
<td colspan="2" align="center"><img src="Accessories images\IMG_4995.JPG"></td>
</tr>
<tr>
<td>
<input type="hidden" value="8550" name ="price6">
<input type="hidden" value="" name ="brand6">
<input type="hidden" value="Crescent moonring" name ="type6">
<input type="submit" value="ADD TO CART "style="background-color: none; border-color: none; height: 20px; border-radius: 50px 50px;" name="submit6"></td>
<td colspan="2" align="center">
<input type="hidden" value="9980" name ="price7">
<input type="hidden" value="" name ="brand7">
<input type="hidden" value="Infinity ring" name ="type7">
<input type="submit" value="ADD TO CART "style="background-color: none; border-color: none; height: 20px; border-radius: 50px 50px;" name="submit6"></td>
</tr>
</table>
</body>
</form>

<?php
include('dbcon.php');
if(isset($_POST["submit1"])==true){
	$brand = $_POST["brand1"];
	$type = $_POST["type1"];
	$price = $_POST["price1"];
				$query = "INSERT INTO item(Brand, Type, Price) VALUES ('$brand', '$type', $price)";
				$result = $dbconn->query($query) or die ("Couldn't execute query.");

}
else if(isset($_POST["submit2"])==true){
	$brand = $_POST["brand2"];
	$type = $_POST["type2"];
	$price = $_POST["price2"];
				$query = "INSERT INTO item(Brand, Type, Price) VALUES ('$brand', '$type', $price)";
				$result = $dbconn->query($query) or die ("Couldn't execute query.");

}
else if(isset($_POST["submit3"])==true){
	$brand = $_POST["brand3"];
	$type = $_POST["type3"];
	$price = $_POST["price3"];
				$query = "INSERT INTO item(Brand, Type, Price) VALUES ('$brand', '$type', $price)";
				$result = $dbconn->query($query) or die ("Couldn't execute query.");

}
else if(isset($_POST["submit4"])==true){
	$brand = $_POST["brand4"];
	$type = $_POST["type4"];
	$price = $_POST["price4"];
				$query = "INSERT INTO item(Brand, Type, Price) VALUES ('$brand', '$type', $price)";
				$result = $dbconn->query($query) or die ("Couldn't execute query.");

}
else if(isset($_POST["submit5"])==true){
	$brand = $_POST["brand5"];
	$type = $_POST["type5"];
	$price = $_POST["price5"];
				$query = "INSERT INTO item(Brand, Type, Price) VALUES ('$brand', '$type', $price)";
				$result = $dbconn->query($query) or die ("Couldn't execute query.");

}
else if(isset($_POST["submit6"])==true){
	$brand = $_POST["brand6"];
	$type = $_POST["type6"];
	$price = $_POST["price6"];
				$query = "INSERT INTO item(Brand, Type, Price) VALUES ('$brand', '$type', $price)";
				$result = $dbconn->query($query) or die ("Couldn't execute query.");

}
else if(isset($_POST["submit7"])==true){
	$brand = $_POST["brand7"];
	$type = $_POST["type7"];
	$price = $_POST["price7"];
				$query = "INSERT INTO item(Brand, Type, Price) VALUES ('$brand', '$type', $price)";
				$result = $dbconn->query($query) or die ("Couldn't execute query.");

}
?>
</html>