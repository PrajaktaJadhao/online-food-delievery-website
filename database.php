<?php
$conn = mysqli_connect('localhost', 'root', '', 'khana');
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
?>