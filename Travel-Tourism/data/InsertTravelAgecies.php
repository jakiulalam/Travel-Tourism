<?php
    error_reporting(0);	
	session_start();
	require"Database.php";
	
	if($_SESSION['def']=='456')
	{
		$username=$_GET['username'];
		$conn= DBConnection();
		$sql= "SELECT * from travelagency where Username = '$username'";
		
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($result)){
			
		$password =$row['Password'];
		$name = $row['Name'];
		$email = $row['Email'];
		$DateofBirth = $row['DateofBirth'];
		$gender =$row['Gender'];
        $usertype=$row['Type'];
	    }
		
	}else{
		header("location: login.php");

	}
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Update User Info</title>
</head>
<body>
<form method="post" action="approveTA.php">
<center>
<?php include_once"header.php"; ?>
<table align="center" border="1" cellspacing="1" cellpadding="1" width="65%"height="40%">
<tr align="center" >
<td colspan="2" height="40">Update User Info</td>
</tr>
<tr>
<td colspan="2"  height="30"> 
<img src="../design/pic/admin.png" width="900px" height="200px"/>
</td>
</tr>
<tr>
<td>  UserName: </td>
<td> <input type="text" name="username" value="<?php echo $username;?>"></td>
</tr>
<tr>
<td>  Name: </td>
<td> <input type="text" name="name" value="<?php echo $name;?>"></td>
</tr>
<tr>
<td> Password: </td>
<td> <input type="text" name="password" value="<?php echo $password;?>"></td>
</tr>
<tr>
<td> Date of Birth: </td>
<td> <input type="text" name="DateofBirth" value="<?php echo $DateofBirth;?>"></td>
</tr>
<tr>
<td> Gender: </td>
<td> <input type="text" name="Gender" value="<?php echo $gender;?>"></td>
</tr>
<tr>
<td> Email: </td>
<td> <input type="text" name="email" value="<?php echo $email;?>"></td>
</tr>
<tr>
<td> Type: </td>
<td> <input type="text" name="usertype" value="<?php echo $usertype;?>"></td>
</tr>
<tr align="right">
<td colspan="2">
<input type="submit" name="submit" value="Approve">&nbsp;
<input type="button" name="back" value="back" onclick="window.location.href='../app/addTravelAgecies.php'">
</td>
</tr>
</table></br>
<?php include_once"copyright.php"; ?>
</center>
</form>
</body>
</html>