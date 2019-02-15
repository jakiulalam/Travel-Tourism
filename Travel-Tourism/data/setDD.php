<?php

    require"Database.php";

	if(isset($_POST['submit'])){

		$dname = $_POST['dname'];
		$atrract= $_POST['atrract'];
		$mess = $_POST['message'];
		$info = $_POST['info'];
        
        $filedir = "../app/DB/";
        $filepath = $filedir.$_FILES["uploadfile"]["name"];
         $img = $_FILES["uploadfile"]["name"];


		if($dname == "" || $atrract == ""|| $mess == "" || $info == ""){

			echo "Not inserted";
		}
		else{
			
						$conn= DBConnection();
						
						if(!$conn){
		                   echo "DB Error: ".mysqli_connect_error();
	                    }else{
		                   echo "Success <br/>";
	                    }
                        $sql = "INSERT into db values('$dname','$atrract','$mess','$info','$img')";  
						if(mysqli_query($conn,$sql)){
						echo"inserted";
                            if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $filepath)){
                                echo"uploaded";
                            }else{
                                echo"Not Uploaded";
                            }
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