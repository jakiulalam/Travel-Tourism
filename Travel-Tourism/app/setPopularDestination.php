<?php
    error_reporting(0);	
	session_start();
	
	if($_SESSION['def']=='456')
	{
		
	}else{
		header("location: login.php");

	}
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Set Popular Destination</title>
</head>
<body>
<form method="post" action="../data/setPD.php" enctype="multipart/form-data">
<center>
<?php include_once"header.php"; ?>
<table align="center" border="1" cellspacing="1" cellpadding="1" width="65%"height="40%">
<tr align="center" >
<td colspan="2" height="40">Set Popular Destination</td>
</tr>
<tr>
<td colspan="2"  height="25" align="right"> 
<img src="../design/pic/poplar.jpg" width="900px" height="200px"/>
</td>
</tr>
<tr>
<td>  Destination Name: </td>
<td> <input type="text" name="dname"></td>
</tr>
<tr>
<td> Atractions: </td>
<td> <input type="text" name="atrract"></td>
</tr>
<tr>
<td> Stories: </td>
<td> <textarea name="message" rows="5" cols="22" placeholder="Tell some stories"></textarea></td>
</tr>
<tr>
<td> Information: </td>
<td> <input type="text" name="info" placeholder="say some info.."></td>
</tr>
<tr>
<td> Pictures: </td>
<td> &nbsp;<input type="file" name="uploadfile"/></td>
</tr>
<tr align="right">
<td colspan="2">
<input type="submit" name="submit" value="Set">&nbsp;
<input type="reset" name="" value="Reset">&nbsp;
<input type="button" name="back" value="back" onclick="window.location.href='home.php'">
</td>
</tr>
</table></br>
<?php include_once"copyright.php"; ?>
</center>
</form>
</body>
</html>