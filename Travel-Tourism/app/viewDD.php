
<?php
	session_start();
	require"../data/Database.php";
	
		$conn= DBConnection();
		$sql= "SELECT * from db";
		
		$result = mysqli_query($conn, $sql);
		
        
	    
?>
<html>
<head>
	<title>User Details</title>
</head>
<body >
       <table border="1" height="25px" width="60%" align="center">	     
        <tr><td colspan="7" ><h4 style="text-align:center;">Discover Bangladesh</h4></td></tr>
		 <tr><td><h4 style="text-align:center;">Image</h4></td>
		  <td><h4 style="text-align:center;">Destination Namee</h4></td>
		  <td><h4 style="text-align:center;">Attraction</h4></td>
		  <td><h4 style="text-align:center;">Stories</h4></td>
		  <td><h4 style="text-align:center;">Information</h4></td>
		 </tr>
		 <tr>
		 <?php 
		 while($row = mysqli_fetch_assoc($result)){
				?>
         <td><h4 ><?php echo"<img src= 'DB/".$row['Image']."' height='150' width='150';>"?></h4></td>				
         <td><h4 style="text-align:center;"><?php echo $row['Dname']; ?></h4></td>
		 <td><h4 style="text-align:center;"><?php echo $row['Atrraction'];?></h4></td>
		 <td><h4 style="text-align:center;"><?php echo $row['Message'];?></h4></td>
		 <td><h4 style="text-align:center;"><?php echo $row['Information'];?></h4></td>
		 
		 </tr>
		 
		 <?php
						
		 } ?>
		 <tr><td colspan="7" width="30px" height="40px" align="right" valign="bottom"><a href="../index.php"><h4>Return Home<h4>
		 </a></td></tr>
		</table>
			
</body>
</html>