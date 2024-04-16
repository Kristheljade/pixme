<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form'])){
		$freelancer_no = $_POST['freelancer_no'];
		$days = $_POST['days'];
		$extra_bed = $_POST['extra_bed'];
		$query = $conn->query("SELECT * FROM `transaction` WHERE `freelancer_no` = '$freelancer_no' && `status` = 'On Going'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('Freelancer not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `client` NATURAL JOIN `freelancer` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
			$total = $fetch2['price'] * $days;
			$total2 = 800 * $extra_bed;
			$total3 = $total + $total2;
			$checkout = date("Y-m-d", strtotime($fetch['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `transaction` SET `freelancer_no` = '$freelancer_no', `days` = '$days', `status` = 'On Going', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total3' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			header("location:checkin.php");
		}
	}
?>