<html>
<head><title>CLOTHINGS</title>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="shoes_index.css">
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

<br>
<br>

<?php include('dbcon.php');
$sql = "SELECT * FROM clothes";
$result = mysqli_query($dbconn,$sql);
while($row = mysqli_fetch_array($result)){
	echo "<img id='image' src='Uploads/".$row['productname']."'>";
	echo $row['description']."<br>";
	echo $row['price'];
	}?>

</body>
</html>