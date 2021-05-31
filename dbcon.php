<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OLXDB";

$dbconn = new mysqli($servername, $username, $password, $dbname);
if ($dbconn->connect_error) {
    die("Connection failed: " . $dbconn->connect_error);
} 

?> 