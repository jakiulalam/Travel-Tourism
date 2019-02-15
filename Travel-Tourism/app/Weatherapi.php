<?php
	session_start();
	
	if($_SESSION['def']=='456')
	{	

	    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Weather API Example</title>
           <link rel="stylesheet" href="../design/apiStyle.css">
            <script src="../lib/jquery-3.3.1.min.js"> </script>
            <script>
                $(document).ready(function(){
                  $('#b1').click(function(){
                      var resultElement=$('#result');
                     $.ajax({
                         url:'http://api.openweathermap.org/data/2.5/weather?q=Dhaka%20Division&appid=004b751c580ef077efbfeb06f8cee3b8',
                         method:'get',
                         datatype:'json',
                         success: function(data){
                             resultElement.html('<div class="ap">Weather: '+ data.weather[0].main+ '<br/><br/>' + 'Description: '+data.weather[0].description + '<br/><br/> '+'Temp: '+(Math.floor(data.main.temp)-273+"°C"));
                         }
                     }) 
                  })  ;
                });
        </script>
    </head>
    <body>
       <center>
       <?php include_once"header.php"; ?>
   </center>
     <div class="api">
     <h1>Weather Information</h1>
      <input type="button" id="b1" value=" Get Dhaka weather">
      </div>
       <div id="result">
           
       </div>
    </body>
</html>
<?php
	}
	
	else{
		header("location: home.php");

	}
?>