<?php

    require"Database.php";

	if(isset($_POST['submit'])){

		$sname = $_POST['name'];
		$mess = $_POST['message'];
        


		if($sname == "" || $mess == "" ){

			echo "Not inserted";
		}
		else{
			
						$conn= DBConnection();
						
						if(!$conn){
		                   echo "DB Error: ".mysqli_connect_error();
	                    }else{
		                   echo "Success <br/>";
	                    }
                        $sql = "INSERT into notice values('','$sname','$mess')";  
						if(mysqli_query($conn,$sql)){
						echo"inserted";
						header("location: ../app/home.php");  
						}
						else{
							echo "Not inserted";
						

		}
		
	}
    }
	else
	{
		echo "Invalid request";
	}