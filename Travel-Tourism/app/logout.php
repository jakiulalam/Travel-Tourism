<?php
	
	session_start();
	session_destroy();
	setcookie('abc',"",time()-1,"/");
	header("location: ../index.php");
	
?>