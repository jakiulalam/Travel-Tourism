<?php
    error_reporting(0);	
	session_start();
	require"../data/Database.php";

	if($_SESSION['abc']=='123' || $_COOKIE['abc']=="123")
	{
		$username = $_SESSION['user'];
		$conn= DBConnection();
		$sql= "SELECT * from admin where Username = '$username'";
		
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($result)){
			
		$password =$row['Password'];
		$name = $row['Name'];
		$email = $row['Email'];
		$DateofBirth = $row['DateofBirth'];
		$gender =$row['Gender'];
        $img =$row['Image'];
        
	    }
		$_SESSION['def'] = "456";
		
	}else{
		header("location: login.php");

	}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<style>
    body{
        margin: 0;
        padding: 0;
        background: #D0ECE7;
    }
</style>
</head>
<body>
<form>
<center>
<?php include_once"header.php"; ?>
<table align="center" border="1" cellspacing="1" cellpadding="1" width="75%"height="40%">
<tr align="center" >
<td colspan="2" height="40"> <h1>Travel & Tourism</h1></td>
</tr>
<tr>
<td colspan="2"  height="30"> 
<a href="addTravelAgecies.php">Approve travel agencies</a>&nbsp &nbsp &nbsp  
<a href="discoverBangladesh.php">Discover Bangladesh</a> &nbsp &nbsp &nbsp
<a href="setPopularDestination.php">Set Popular Destination</a> &nbsp &nbsp &nbsp
<a href="searchUser.php">Search User</a> &nbsp &nbsp &nbsp
<a href="approveUser.php">Approve User</a>&nbsp &nbsp &nbsp
<a href="notice.php">Notice</a>&nbsp &nbsp &nbsp
<a href="AllUser.php">All User</a>&nbsp &nbsp &nbsp
<a href="Weatherapi.php">Weather Info</a>
</td>
</tr>
<tr>
<td colspan="2" height="40">
    <MARQUEE> <img src="../design/pic/Home.jpg"  width="900px" height="300px" />
    <img src="../design/pic/poplar.jpg"  width="900px" height="300px" />
    </MARQUEE>
</td>
</tr>
<tr>
<td> Profile Picture: </td>
<td> <?php echo"<img src= 'images/$img' height='150' width='150';>"?></td>
</tr>
<tr>
<td> UserName: </td>
<td> <?php echo"$username";?></td>
</tr>
<tr>
<td> Name: </td>
<td> <?php echo"$name";?></td>
</tr>
<tr>
<td> Password: </td>
<td> <?php echo"$password";?></td>
</tr>
<tr>
<td> Date of Birth: </td>
<td> <?php echo"$DateofBirth";?></td>
</tr>
<tr>
<td> Gender: </td>
<td> <?php echo"$gender";?></td>
</tr>
<tr>
<td> Email: </td>
<td> <?php echo"$email";?></td>
</tr>
<tr>
<td colspan="2" align="right">
<input type="button" name="register" value="Update Info" onclick="window.location.href='UpdateProfile.php'">
</td>
</tr>
</table></br>
<?php include_once"copyright.php"; ?>
</center>
</form>
</body>
</html

