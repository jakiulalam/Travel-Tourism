<!DOCTYPE html>
<html>

<head>
    <title>Tour & Tourism</title>
    <link rel="stylesheet" type="text/css" href="design/style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
    <script src="lib/jquery-3.3.1.min.js">
    </script>
    <script type="text/javascript">
    $(window).on('scroll',function(){
        if($(window).scrollTop()) {
            $('nav').addClass('black');
        }
        else {
            $('nav').removeClass('black');
        }
    })
    </script>
</head>

<body>
    <div class="wrapper">
        <nav>
            <div class="logo">Travel & Tourism</div>
            <UL>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="app/viewDD.php">Discover Bangladesh</a></li>
                <li><a href="app/ViewPD.php">Popular Destination</a></li>
                <li><a href="app/reg.php">Registration</a></li>
                <li><a class="active" href="app/selectlogin.php">Log In</a></li>
            </UL>
        </nav>
        <section class="sec1"></section>
        <section class="content">
           
            <P>Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours. Tourism may be international, or within the traveller's country.</P>
            
        </section>
    </div>
</body>

</html>
