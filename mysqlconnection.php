<?php
include($_SERVER['DOCUMENT_ROOT'].'/lightbox/config.php');
$con=mysqli_connect($db_server,$db_user,$db_password,$db_name);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,$db_name);	
?>