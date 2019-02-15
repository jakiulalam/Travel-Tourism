<?php
	
	session_start();
	require"Database.php";

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == ""){
			header("location: login.php?status=nullvalue");

		}else{

			$conn= DBConnection();
			$sql="SELECT * from admin where Username = '$username' and Password = '$password'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);
			
				if($row['Username'] == $username && $row['Password'] == $password){
				 $isvalid = "validuser";
					if(isset($_POST['rm'])){
				     setcookie('abc',"123",time()+3600,"/");
					}
				}
		    }

			if($isvalid == "validuser"){

				$_SESSION['abc'] = "123";
				$_SESSION['user'] = "$username";
				
				header("location: ../app/home.php");
			}else{
				header("location: ../app/login.php?status=invaliduser");
			}
			fclose($myfile);

		}

?>