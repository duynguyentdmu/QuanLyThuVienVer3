<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_admin'])){	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$q_admin = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
		$v_admin = $q_admin->num_rows;
		if($v_admin == 1){
			echo '
				<script type = "text/javascript">
					alert("Tên người dùng đã được sử dụng");
					window.location = "admin.php";
				</script>
			';
		}else{
			//cau lenh nay la cau lenh cap nhat thong tin admin ma k cap nhat username
			$conn->query("UPDATE `admin` SET `username` = '$username', `password` = '$password', `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
			//cau lenh duoi dong nay la cau lenh goc
			//$conn->query("UPDATE `admin` SET `username` = '$username', `password` = '$password', `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());			
			echo '
				<script type = "text/javascript">
					alert("Lưu thay đổi");
					window.location = "admin.php";
				</script>
			';
		}
	}	