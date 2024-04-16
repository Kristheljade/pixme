<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_freelancer'])){
		$freelancer_type = $_POST['freelancer_type'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `freelancer` SET `freelancer_type` = '$freelancer_type', `price` = '$price', `photo` = '$photo_name' WHERE `freelancer_id` = '$_REQUEST[freelancer_id]'") or die(mysqli_error());
		header("location:freelancer.php");
	}
?>