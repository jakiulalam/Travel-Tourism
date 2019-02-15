<?php
    error_reporting(0);	
	session_start();
	require"../data/Database.php";
	
	if($_SESSION['abc']=='987' || $_COOKIE['abc']=="987")
	{
		$usertype = $_SESSION['usertype'];
		if($usertype=="travelAgency"){
            header("location: ../app/TravelAgencie/home.php");
        }else{
                    $_SESSION['abc'] = "321";
                    setcookie('abc',"321",time()+3600,"/");
            header("location: ../app/User/Home.php");
        }
		
	}else{

		header("location: ../app/login2.php");

	}
	
?>