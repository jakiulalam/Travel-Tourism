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
<title>Notice</title>
</head>
<body>
<form method="post" action="../data/setNotice.php">
<center>
<?php include_once"header.php"; ?>
<table align="center" border="1" cellspacing="1" cellpadding="1" width="65%"height="40%">
<tr align="center" >
<td colspan="2" height="40">Notice</td>
</tr>
<tr>
<td colspan="2"  height="30"> 
<img src="../design/pic/notice.jpg" width="900px" height="200px"/>
</td>
</tr>
<tr>
<td>  Subject: </td>
<td> <input type="text" name="name"></td>
</tr>
<tr>
<td> Details: </td>
<td> <textarea name="message" rows="5" cols="22" placeholder="Tell Details.."></textarea></td>
</tr>
<tr align="right">
<td colspan="2">
<input type="submit" name="submit" value="Add">&nbsp;
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