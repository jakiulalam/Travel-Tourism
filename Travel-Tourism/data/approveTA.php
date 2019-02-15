<?php

    require"Database.php";

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
        $usertype= $_POST['usertype'];



						$conn= DBConnection();
						$sql = "INSERT into login values('$username','$password','$usertype')";
						if(mysqli_query($conn,$sql)){
						echo"inserted";
						header("location: ../app/home.php");
                        }else{
                            echo"All ready approved <a href=../app/addTravelAgecies.php>Go back</a>";
                        }
    }