<?php

    sleep(3);
	error_reporting(0);
	$key 	= $_POST['key'];

	$con = mysqli_connect('localhost', 'root', '', 'tt');
	$sql = "select * from login where Username like '%".$key."%' or Type like '%".$key."%'";
	$result = mysqli_query($con,$sql);
	
if(mysqli_num_rows($result)>0){
    
	
    $output.='<h4 align="center">Search Result</h4>';
    $output.='<div class="td">
    <table id="te" align="center">
        <tr>
        <th>Username</th>
        <th>Type</th>
        </tr>';
    while($row = mysqli_fetch_assoc($result)){
    $output.='
    <tr>
    <td>'.$row['Username'].'</td>
    <td>'.$row['Type'].'</td>
    </tr>
    ';
    }
    echo $output;
}else{
    echo"data not found ";
}

?>