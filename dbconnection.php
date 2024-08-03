\<?php
define('DB_SERVER','localhost');
define('DB_USER','u502316585_biig');
define('DB_PASS' ,'@Contactus01');
define('DB_NAME', 'u502316585_biig');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

