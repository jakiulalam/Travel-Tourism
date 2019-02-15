<?php

function DBConnection(){
                $conn= mysqli_connect('localhost','root',"",'tt');
						
			        if(!$conn){
		             echo "DB Error: ".mysqli_connect_error();
	                }else{
					 return $conn;
	                }
}					

?>