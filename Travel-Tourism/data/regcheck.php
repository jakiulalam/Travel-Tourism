<?php

    require"Database.php";

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$name= $_POST['name'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$email   = $_POST['email'];
        $usertype = $_POST['utype'];
        
        $filedir = "../app/images/";
        $filepath = $filedir.$_FILES["uploadfile"]["name"];
         $img = $_FILES["uploadfile"]["name"];


		if($username == "" || $name == ""|| $password == "" || $gender == "" || $day == "" || $month == "" || $year == "" || $email == "" || $type= "" ){

			header("location: reg.php?status=nullvalue");
		}
		else{
			
			if(testusername($username)){
				if(testname($name)){
					if(testmail($email)){
						if(testDate($day,$month,$year)){
						$conn= DBConnection();
						
						if(!$conn){
		                   echo "DB Error: ".mysqli_connect_error();
	                    }else{
		                   echo "Success <br/>";
	                    }
						$dateofbirth=$day."/".$month."/".$year ;
                            if($usertype=="admin"){
						$sql = "INSERT into admin values('$username','$name','$password','$gender','$dateofbirth','$email','$usertype','$img')";
                           }
                            if($usertype=="travelAgency"){
                        $sql = "INSERT into travelAgency values('$username','$name','$password','$gender','$dateofbirth','$email','$usertype','$img')";  
                            }
                            if($usertype=="user"){
                        $sql = "INSERT into user values('$username','$name','$password','$gender','$dateofbirth','$email','$usertype','$img')";  
                            }
						if(mysqli_query($conn,$sql)){
						echo"inserted";
                            if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $filepath)){
                                echo"uploaded";
                            }else{
                                echo"Not Uploaded";
                            }
						header("location: ../app/selectlogin.php");   
						}
						else{
							echo "Not inserted";
						}
						}    
						else
			            {
				           echo"Invalid Date Of Birth <a href=../app/reg.php>Try again</a>";
			            }
                        
					}
					else
			        {
				      echo"Invalid Email <a href=../app/reg.php>Try again</a>";
			        }
				}
				else
			    {
				 echo"Invalid name <a href=../app/reg.php>Try again</a>";
			    }
			}
			else
			{
				echo"Invalid Username <a href=../app/reg.php>Try again</a>";
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
	
	
	
	function testDate($day,$month,$year){
			if( ($day >=0 && $day <=31 ) && ($month >=1 && $month <=12 ) && ($year >=1850 && $year <=2018 ) ){
               return true;
				
			}
			else{
               return false;
				
			}
		}
?>
