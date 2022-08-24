<?php
$uname = "root";
$dbpass = "";
$host = "localhost";
$dbname = "project";

$conn = mysqli_connect($host, $uname, $dbpass, $dbname) or die("Connection failed: " . mysqli_connect_error());