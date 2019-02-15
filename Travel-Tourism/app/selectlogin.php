<?php
  error_reporting(0);
  session_start();
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invalid user info! <a href=login.php>try again...</a>";
		}else if($status == "nullvalue"){
			echo "Username/password can't be empty <a href=login.php>try again...</a>";
		}
    }
	else if($_SESSION['abc']=='123' || $_COOKIE['abc']=="123"){
		header("location: home.php");
	    }
    else if($_SESSION['abc']=='987' || $_COOKIE['abc']=="987"){
		header("location: ../app/jakiul/home.php");
	    }
        else if($_SESSION['abc']=='321' || $_COOKIE['abc']=="321"){
		header("location: ../app/morshina/Home.php");
	    }
	
	else{
		?>
<!DOCTYPE html>
<html>
<head>
<title>LogSelect</title>
</head>
<body>
<form >
<center>
<table align="center" border="1" cellspacing="1" cellpadding="1" width="20%"height="40%">
<tr align="center">
<td colspan="2">Select</td>
</tr>
<tr>
<td> <a href="login.php"><img src="../design/pic/admin.png" width="160px" height="150px"/></a></td>
<td><a href="login2.php"><img src="../design/pic/User_icon-820x490.jpg" width="160px" height="150px"/></a></td>
</tr>
<tr>
    <td>Admin</td>
    <td>Other</td>
</tr>
</table></br>
<?php include_once"copyright.php"; ?>
</center>
</form>
</body>
</html>
<?php
	}	
?>