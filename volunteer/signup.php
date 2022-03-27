<?php 
session_start();
include ("../login/db.php");

?>
<?php
	
    include("../login/db_conn.php");

	if(isset($_POST['submit'])){
		$database = new Connection();
		$db = $database->open();
        $password = $_POST['password'];
        $password_rep = $_POST['rep_password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        if($password !== $password_rep){
            header("location: ../index.html?error");
            exit();
        }
		
		

		if (!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
			$_SESSION['message_fail'] = "Please enter a valid email!";
			$database->close();
			header('location: ../index.html?invalid=email');
		}

		else {
			try {

				$query = "SELECT id FROM users WHERE email = '".$_POST['username']."'";
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_array($result);
			}
			catch(PDOException $e) {
				$_SESSION['message_fail'] = $e->getMessage();
			}
	
			if (empty($row)){
				try{
					//make use of prepared statement to prevent sql injection
					$sql = $db->prepare("INSERT INTO users (name, email, password, userType) VALUES (:name, :email, :password, :userType);");
		
					//bind
					
					$sql->bindParam(':name', $_POST['name']);
					$sql->bindParam(':email', $_POST['username']);
					$sql->bindParam(':password', $password_hash);
                    $sql->bindParam(':userType', $_POST['usertype']);

                    $sql->execute();
			    }
				catch(PDOException $e){
					$_SESSION['message'] = $e->getMessage();
				}
		
				//close connection
				$database->close();
	
				header('location: ../index.html?successful?');
                exit();
			}
	
			else if (!empty($row)){
				$_SESSION['message_fail'] = "The username already exist. Please choose another username.";
				$database->close();
				header('location: ../index.html?failed');
                exit();
			}
		}
		
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}
?>