<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `freelancer` WHERE `freelancer_id` = '$_REQUEST[freelancer_id]'") or die(mysql_error());
	header("location:freelancer.php");
?>