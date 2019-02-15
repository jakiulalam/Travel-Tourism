<?php
    require"Database.php";
	
	    $username=$_GET['username'];
		$conn= DBConnection();
		$sql="delete from travelagency where Username='$username'";
        $sql2="delete from login where Username='$username'";
		
		if(mysqli_query($conn,$sql))
		{
			if(mysqli_query($conn,$sql2))
		      {
			header("location: addTravelAgecies.php");
		      }
		   else
		     {
			echo"error";
		     }
		}
		else
		{
			echo"error";
		}
		mysqli_close($conn);

	

?>