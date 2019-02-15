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
			$sql="SELECT * from login where Username = '$username' and Password = '$password'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);
			$_SESSION['usertype'] = $row['Type'];
            
				if($row['Username'] == $username && $row['Password'] == $password){
				 $isvalid = "validuser";
					if(isset($_POST['rm'])){
				     setcookie('abc',"987",time()+3600,"/");
					}
				}
		    }

			if($isvalid == "validuser"){

				$_SESSION['abc'] = "987";
				$_SESSION['user'] = "$username";
                
				
				header("location: ../app/homecheck.php");
			}else{
				header("location: ../app/login2.php?status=invaliduser");
			}

		}

?>