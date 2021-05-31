<?php

include("dbcon.php");

$brand = $_POST["brand"];

$query = "INSERT INTO item(Brand, Type, Price) VALUES ('$brand', '$type', $price)";
$result = $dbconn->query($query) or die ("Couldn't execute query.");


?>