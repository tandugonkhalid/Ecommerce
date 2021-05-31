<html>
<head><title>REGISTRATION</title>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="registration.css"></head>
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
<center>
<form method="post">
<fieldset>
<legend>Registration Form</legend>
Fill up the Following:<br>
First Name: <input type="text" name="fname" placeholder="First Name" required><br>
Last Name: <input type="text" name="lname" placeholder="Last Name" required><br>
Username: <input type="text" name="username" placeholder="Username" required><br>
Password: <input type="password" name="password" placeholder="Password" required><br>
Confirm Password: <input type="password" name="confirmpass" placeholder="Confirm Password" required><br>
Address: <input type="text" name="address" placeholder="Address" required><br>
<input type="submit" value="Register" name="register" id="submitbutton">
</fieldset>
</form>
</center>
</body>
<?php
if(isset($_POST["register"])){
$username=$_POST["username"];
$password=$_POST["password"];
$cpass=$_POST["confirmpass"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$address=$_POST["address"];

$_SESSION['login_user']=$username;
if($username!=null||$username!=""&&$password!=null||$password!=""){
	addaccount($username,$password);
	registeraccount($fname,$lname,$address,$cpass,$password);
}

}

function addaccount($username1,$password1){
	include('dbcon.php');
	$query = "INSERT INTO account(username, password) VALUES ('$username1', '$password1')";
	$result = $dbconn->query($query) or die ("Couldn't execute query.");
}

function registeraccount($fname,$lname,$address,$cpass,$password1){
	include('dbcon.php');
	if($cpass==$password1){
	$query = "INSERT INTO registration(Firstname, Lastname, Address) VALUES ('$fname', '$lname', '$address')";
	$result = $dbconn->query($query) or die ("Couldn't execute query.");
	}else{
		echo $cpass." ".$password1;
		echo "Password does not match";
	}
}
?>
</html>