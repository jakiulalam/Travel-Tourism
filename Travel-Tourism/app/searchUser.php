<?php
	session_start();
	
	if($_SESSION['def']=='456')
	{	

	    
?>

<!DOCTYPE html>
<html>

<head>
    <title>Search User</title>
    <link rel="stylesheet" href="../design/searchStyle.css">
</head>

<body>
   <center>
       <?php include_once"header.php"; ?>
   </center>
    <div class="box">
        <h1>Find User</h1>
        <input type="text" id="search" name="" placeholder="Type...">
        <input type="button" name="" value="Search" onclick="loadData()">
    </div>
        <div id="result">
        
        </div>
    <script>
        function loadData() {



            if (document.getElementById("search").value != "") {

                document.getElementById('result').innerHTML = "<img src='../design/pic/load.gif'/>";

                var xmlHttp = new XMLHttpRequest();

                xmlHttp.open('POST', '../data/searchinfo.php', true);
                xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                var abc = "key=" + document.getElementById('search').value;
                xmlHttp.send(abc);

                xmlHttp.onreadystatechange = function() {

                    if (this.readyState == 4 && this.status == 200) {

                        var data = this.responseText;
                        document.getElementById('result').innerHTML = data;
                    }
                }



            } else {


                alert("Fields can't be empty");
            }

        }

    </script>
</body>
<?php
	}
	
	else{
		header("location: home.php");

	}
?>
