<!DOCTYPE HTML>
<?php
// Start the session
session_start();
?>
<html>
<head>
<meta name="UTF-8">
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<div id="imagehead">
<a href="Project.php"></a>
<img src="Link images\sell.PNG" width="150px" align="right" class="imageheaders">
<?php 

if($_SESSION['login_user']=="logout"){
echo "<a href='Project.php' style='text-decoration: none' onclick='logout()'><img src='Link images\logout.ico' width='45px' align='right' class='imageheaders'></a>";
}elseif($_SESSION['login_user']=="user"){
echo "<a href='Project.php' style='text-decoration: none' onclick='logout()'><img src='Link images\logout.ico' width='45px' align='right' class='imageheaders'></a>";
?>
<?php
}
else{
echo "<a href='login.php' style='text-decoration: none'><img src='Link images\Login.PNG' width='87px' align='right' class='imageheaders'></a>";
}
	?>
<div id="pheader">
<p>Download the OLD app!</p>
<p>Buy and sell faster with people near you.</p>
</div>

<table align="center"  cellspacing="0" cellpadding="0">
<tr>
<td><input type="Search" placeholder="Search" id="search"></td>
<td><button id="searchbutton" >
<img src="Link images\\searchicon.PNG" style="background-color: transparent; width: 10px;">
</button>
</td>
</tr>
</table>
</center>
<br>
</div>

<center>
<div id="Mainborder">
<table id="tablelinks" cellpadding="0" cellspacing="0">
<caption>GET YOUR ITEMS NOW!!</caption>
<tr class="title">
<td class="title">Shoes</td>
<td class="title">Clothings</td>
<td class="title">Accessories</td>
</tr>
<tr class="table">
<td class="table">
	<a href="shoes_index.php" class="links">
	<div id="firslink" title="SHOES">
		<button id="button" class="button">View All</button>
		<img src="Link images\Shoes.PNG" class="imagesize">
		<hr>
		<button class="button">Adidas</button>
		<button class="button">Vans</button>
		<button class="button">Nike</button>
		<button class="button">Puma</button>
		<button class="button">Converse</button>
		<button class="button">Keds</button>
		<button class="button">Other Shoes Accessories</button>
	</div>
	</a>
</td>
<td class="table">
<a href="clothes_index.php" class="links">
	<div id="secondlink" title="CLOTHES"><!SECOND LINK>
		<button id="button" class="button">View All</button>
		<img src="Link images\clothes.PNG" class="imagesize">
		<hr>
		<button class="button">T-shirts</button>
		<button class="button">Crop tops</button>
		<button class="button">Pants</button>
		<button class="button">Shorts</button>
		<button class="button">Underwears</button>
		<button class="button">Socks</button>
		<button class="button">Other daily necessities</button>
	</div>
	</a>
</td>
<td class="table" >
<a href="accessories_index.php" class="links">
	<div id="thirdlink" title="ACCESSORIES">
		<button id="button" class="button">View All</button>
		<img src="Link images\acessories.jpg" class="imagesize">
		<hr>
		<button class="button">Accessories for Men and Women</button>
		<button class="button">Jewelries</button>
		<button class="button">Umbrellas</button>
		<button class="button">Bracelets</button>
		<button class="button">Necklaces</button>
		<button class="button">Anklets</button>
	</div>
	</a>
	
</td>
</tr>
<table>
</div>
</center>
<br>
<br>
<script type="text/javascript">
	function logout(){
		<?php $_SESSION['login_user']="";
		?>
		alert("Logged Out Succesfully");
	}
</script> 
</body>
</html> 