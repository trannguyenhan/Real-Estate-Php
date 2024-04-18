<?php

$con = mysqli_connect("localhost","root","mysql12345","developers");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
