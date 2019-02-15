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
	
	else{
		?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
</head>
<body>
<form method="post" action="../data/logcheck.php">
<center>
<table align="center" border="1" cellspacing="1" cellpadding="1" width="20%"height="40%">
<tr align="center">
<td colspan="2">Login</td>
</tr>
<tr>
<td> Username:</td>
<td> <input type="text" name="username"></td>
</tr>
<tr>
<td> Password:</td>
<td> <input type="password" name="password"></td>
</tr>
<tr>
<td align="right" colspan="2"> <input type="radio" name="rm"> Remember me!!</td>
</tr>
<tr align="right">
<td colspan="2">
<input type="submit" name="submit" value="Login">&nbsp;
<input type="button" name="register" value="Register" onclick="window.location.href='reg.php'">
</td>
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


