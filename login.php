<html>
<head><title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="main.css"></head>
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
<fieldset style="width: 500px; text-align: center;">
Username: <input type="text" name="username" placeholder="Username" style="border-radius: 50px 50px; border-color: gray; width: 180px"><br>
Password: <input type="password" name="password" placeholder="Password" style="border-radius: 50px 50px; border-color: gray; width: 180px">
<br>
<input type="submit" name="login" value="Login" style="border-radius: 50px 50px; width: 50px; border: none; background-color: gray">
<br>
Do you have an account? <a href="register.php">Register</a> here
</fieldset>
</form>
</center>
<?php
if(isset($_POST["login"])){
	$username1=$_POST["username"];
	$password1=$_POST["password"];
	session_start();
	if($username1!=""&&$password1!=""){
		include('dbcon.php');

		$sql = "SELECT * FROM account WHERE username='$username1' AND password='$password1'";
		$result = mysqli_query($dbconn,$sql);
		$count=0;
		if(isset($result)){
			foreach ($result as $key => $value) {
				if ($value['id']==1) {
					$_SESSION['login_user']=$username1;
					?>
					<script>
					alert("Welcome Admin");
					window.location.href="admin.php";
					</script>
					<?php
				}else{
					$_SESSION['login_user']="user";
					?>
					<script type="text/javascript">
					alert("Welcome");
					window.location.href = "Project.php";
					</script>
					<?php
				}
				$count += 1;
			}
			if ($count == 0) {
				?>
 					<script type="text/javascript">
					alert("Incorrect username or password");
					</script>
					<?php
 			}
		}
	}else{
				?>
 					<script type="text/javascript">
					alert("Please Fill Up the Form");
					</script>
					<?php

		}
}
?>

</body>
</html>