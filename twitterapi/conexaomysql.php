<?php

//database-1.cjeymcuvf5ie.us-east-1.rds.amazonaws.com
//3306
//twitter
//aws_dba_mysql
//awsdbamysql2020

$servername = "database-1.cjeymcuvf5ie.us-east-1.rds.amazonaws.com";
$database = "twitter";
$username = "aws_dba_mysql";
$password = "awsdbamysql2020";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>