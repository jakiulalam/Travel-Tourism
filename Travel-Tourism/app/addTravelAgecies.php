
<?php
	session_start();
	require"../data/Database.php";
	
	if($_SESSION['def']=='456')
	{	

		$conn= DBConnection();
		$sql= "SELECT * from travelagency";
		
		$result = mysqli_query($conn, $sql);
		
        
	    
?>
<html>
<head>
	<title>User Details</title>
</head>
<body >
       <table border="1" height="30px" width="40%" align="center">	     
        <tr><td colspan="7" ><h4 style="text-align:center;">Profile Information</h4></td></tr>
		 <tr><td><h4 style="text-align:center;">Username</h4></td>
		  <td><h4 style="text-align:center;">Name</h4></td>
		  <td><h4 style="text-align:center;">Password</h4></td>
		  <td><h4 style="text-align:center;">Date of Birth</h4></td>
		  <td><h4 style="text-align:center;">Gender</h4></td>
		  <td><h4 style="text-align:center;">Email</h4></td>
		  <td><h4 style="text-align:center;">Action</h4></td>
		 </tr>
		 <tr>
		 <?php 
		 while($row = mysqli_fetch_assoc($result)){
				?>				
         <td><h4 style="text-align:center;"><?php echo $row['Username']; ?></h4></td>
		 <td><h4 style="text-align:center;"><?php echo $row['Name']; ?></h4></td>
		 <td><h4 style="text-align:center;"><?php echo $row['Password'];?></h4></td>
		 <td><h4 style="text-align:center;"><?php echo $row['DateofBirth'];?></h4></td>
		 <td><h4 style="text-align:center;"><?php echo $row['Gender'];?></h4></td>
		 <td><h4 style="text-align:center;"><?php echo $row['Email'];?></h4></td>
		 <td ><h4 ><a href='../data/delete.php?username=<?=$row["Username"]?>'> <input type="button" name="delete" value="delete"></a>
		 <h4 ><a href='../data/InsertTravelAgecies.php?username=<?=$row["Username"]?>'> <input type="button" name="delete" value="Approve"></a>
		 </h4></td>
		 
		 </tr>
		 
		 <?php
						
		 } ?>
		 <tr><td colspan="7" width="30px" height="40px" align="right" valign="bottom"><a href="home.php"><h4>GO Home<h4>
		 </a></td></tr>
		</table>
			
</body>
</html>
<?php

	}
	
	else{
		header("location: home.php");

	}
?>