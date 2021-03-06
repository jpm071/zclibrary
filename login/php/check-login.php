
<?php
session_start();
include "../db_conn.php";

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['email'] = $_POST['username'];

	if (empty($username)) {
		$_SESSION['e_message'] = "Username field should not be empty.";
		header("Location: ../index.php?error=Username is required.");
		exit();
	}else if (empty($password)) {
		$_SESSION['e_message'] = "Password field should not be empty.";
		header("Location: ../index.php?error=Password is required.");
		exit();
	}
	else{
		if(!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)){
			$_SESSION['e_message'] = "Username should be in e-mail format.";
			header("Location: ../index.php?error=Username should be in email format.");
			exit();
		}
		else{
			$sql1 = "SELECT * FROM users WHERE email = '".$username."';";
			$result1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_array($result1);
			$cur_user = $row1['id'];

			if($row1['password'] == 'test'){
				header('location: change_pass_ui.php');
				exit();
			}

			if(empty($row1)){
				$_SESSION['e_message'] = "Username or password does not match with our records.";
				header("location: ../index.php?error=Username or password doest not match with our records.");
				exit();
			}

			else{
				$check_pass = password_verify($_POST['password'], $row1['password']);
		
				if($check_pass == true){
		
					$sql = "SELECT * FROM users WHERE email = '".$username."' AND id = '".$cur_user."';";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($result);

					if(!empty($row)) {
						if($row['userType'] == "admin"){
							header("location: ../php/admin/home.php");
							exit();
						}
						elseif($row['userType'] == "cataloger"){
							header("location: ../php/cataloger/cataloger.php");
							exit();
						}
						elseif($row['userType'] == "borrower"){
							header("location: ../php/borrower/borrower.php");
							exit();
						}
						else{
							header("location: ../index.php?error");
							exit();
						}
			
					}
			
				}
				else{
					$_SESSION['e_message'] = "Password does not match with our records.";
					header("location: ../index.php?error=Password doest not match with our records.");
					exit();
				}
			}

		}
	} 


}else {
	header("Location: ../index.php");
	exit();
}