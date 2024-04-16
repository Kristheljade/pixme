<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_client'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$days = $_POST['days'];
		$checkin = $_POST['date'];
		$conn->query("INSERT INTO `client` (firstname, middlename, lastname, address, contactno, days) VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactno', '$days')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `client` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno' && `days` = '$days'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `freelancer_id` = '$_REQUEST[freelancer_id]' && `status` = 'Pending'") or die(mysqli_error());
		$row = $query2->num_rows;
		if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Must be present date')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>	
										</li>
									</ul>";
							}
						"</div>";
				}else{	
						if($client_id = $fetch['client_id']){
							$freelancer_id = $_REQUEST['freelancer_id'];
							$conn->query("INSERT INTO `transaction`(client_id, freelancer_id, status, checkin, days) VALUES('$client_id', '$freelancer_id', 'Pending', '$checkin', '$days')");
							echo "<script>alert('Reservation Successfull!, Please wait to the freelancer to accept your reservation. Check your notification bell for update. ')</script>";
							exit();
						}
				}	
			}	
	}	
?>