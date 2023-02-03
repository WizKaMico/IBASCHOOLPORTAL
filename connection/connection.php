<?php 
	
$host = "localhost";
$username = "root";
$password = "";
$database = "ibaportal";
	
	$con = new mysqli("localhost","root","","ibaportal");
	if(!$con)
	{
		echo "Connection is not Successfully";
	}
?>	