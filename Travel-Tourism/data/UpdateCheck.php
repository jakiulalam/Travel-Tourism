<?php

    require"Database.php";

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$name= $_POST['name'];
		$password = $_POST['password'];
		$gender = $_POST['Gender'];
		$dateofbirth= $_POST['DateofBirth'];
		$email   = $_POST['email'];


		if($username == "" || $name == ""|| $password == "" || $gender == "" || $email == "" ){

			echo"Empty";
		}
		else{
			
			if(testusername($username)){
				if(testname($name)){
					if(testmail($email)){
						$conn= DBConnection();
						$sql = "UPDATE admin SET Username='$username',Name='$name',Password='$password',Gender='$gender',DateofBirth='$dateofbirth',Email='$email' WHERE Username='$username'";
						if(mysqli_query($conn,$sql)){
						echo"inserted";
						header("location: ../app/home.php");
						}
						else{
							echo "Not inserted";
						}
					}
					else
			        {
				      echo"Invalid Email <a href=../app/UpdateProfile.php>Try again</a>";
			        }
				}
				else
			    {
				 echo"Invalid name <a href=../app/UpdateProfile.php>Try again</a>";
			    }
			}
			else
			{
				echo"Invalid Username <a href=../app/UpdateProfile.php>Try again</a>";
			}

		}
		
	}
	else
	{
		echo "Invalid request";
	}
	function tesrtForuserAscii($value){
		$flag=0;
		$inputArray = str_split( $value);
  
		for( $i=0 ; $i < strlen($value) ; $i++ ){
			if( (ord($inputArray[$i]) >= 97 && ord($inputArray[$i]) <= 122) || ord($inputArray[$i]) == 32 || (ord($inputArray[$i]) >= 65 && ord($inputArray[$i]) <=90 ||(ord($inputArray[$i]) >= 49 && ord($inputArray[$i]) <= 57)) ){
				$flag++;
			}
		}
		if( $flag == strlen($value) && $inputArray[0] != "." && $inputArray[0] != "-" && $inputArray[0] != "$"){
			return true ;
		}
		else{
			return false;
		}
	}
	function tesrtForAscii($value){
		$flag=0;
		$inputArray = str_split( $value);
  
		for( $i=0 ; $i < strlen($value) ; $i++ ){
			if( (ord($inputArray[$i]) >= 97 && ord($inputArray[$i]) <= 122) || ord($inputArray[$i]) == 32 || (ord($inputArray[$i]) >= 65 && ord($inputArray[$i]) <=90) ){
				$flag++;
			}
		}
		if( $flag == strlen($value) && $inputArray[0] != "." && $inputArray[0] != "-" && $inputArray[0] != "$"){
			return true ;
		}
		else{
			return false;
		}
	}
	function testusername($username){
		if(strlen($username) >0 && tesrtForuserAscii($username)){
			
			return true;
		}else{
			return false;
		}
    }
	function testname($name){
		if(strlen($name) >=1 && tesrtForAscii($name)){
			
			return true;
		}else{
			return false;
		}
    }
	function testmail($email){
		
		$flag=0;
		$Array = str_split( $email);
		$valid   = '@';
        $valid2 =".";
		$one = strpos($email, $valid);
        $two = strpos($email, $valid2);
		
		
  
	   if( ($Array[0] != "@" || $Array[0] != "." || $Array[$pos+1] != "." ) && ($one && $two) ){
		return true;
	    }
		else{
		return false;
	   }
	   
    }
?>