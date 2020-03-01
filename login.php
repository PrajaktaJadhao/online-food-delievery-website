<?php

include 'database.php';

$a = $_POST['mob'];
$b = $_POST['pass'];

$sql = "SELECT * FROM member WHERE mobile='$a' AND pwd='$b' ";
$result = $conn->query($sql);
header("Location: order.html");
?>
