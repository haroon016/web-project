<?php 

include 'config.php';

session_start();

error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HR Airlines</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css">

</head>
<body>
<div class="row">
    <div class="col-md-12">
        <nav>
        <a href="Home.php"><b style="font-family: Cursive;">HR Airlines</b></a>
        <a href="Home.php">Home</a>
        <a href="ContactUs.php">Contact</a>
        <a href="About.html">About</a>
        <a href="insert_booking.php">Booking Online</a>
        <a href="logout.php">login</a>
        <a href="register.php">SignUp</a>
        <a href="check.html">Check Bookings</a>
        <?php echo "<h4 style='float:right; margin-right:20px; color: chocolate; font-family: cursive; font-weight: bold;'> Welcome " . $_SESSION['username'] . "</h4>"; ?>
        <a href="logout.php" style="float: right; color: maroon; font-size: 18px;"><b>Logout</b></a>
        
    </nav>
    <div class="hom">
        </div>
        </div>
        </div>

        
    <div style="background-color: rgb(165, 165, 165);">
    <div class="row" id="aboutus">
        <div class="col-md-2"></div>
        <div class="col-md-8" >
        <br><br><h2>Get to Know Us</h2> 
        <p> Looking for a top-notch Flight Booking Service ? Allow us to introduce ourselves. We're HR Airlines and our team of pros are available whenever you need us. We don't just meet your expectations, we surpass them. HR Airlines serves the needs of residents in Lahore and the surrounding area. Since 2019, our company has been committed to being the best at what we do. See a full list of our services below.</p>
        <br><br>
    </div> 
</div>
</div>
    
    <div class="row" style="background-color:lightcyan; height:550px">
        <div class="col-md-12">
            <div class="container">
    <div style="padding-left: 5%;">
        <h2 style="text-decoration: underline;">Our latest Flight Deals</h2>
        <p>From <b>Lahore  </b></p>
    </div>
    <div class="row">
        <div class="col-md-5" id="col1"><div class="transbox">
    <p>This is Bali in North America</p>
  </div></div>
        <div class="col-md-5" id="col2"><div class="transbox">
    <p>This is Bangkok</p>
  </div></div>
    </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" id="col3"><div class="transbox">
    <p>This is Singapur</p>
  </div></div>
    <div class="col-md-3"></div>
    </div>
</div>
</div>
</div>
    <div id="ourflights">
        <h1 style=" padding: 5% 3% 0% 3%;">Travel safely with us</h1>
        <p style="padding: 0% 5% 0% 3%; font-size: 26px;">As one of the largest and most experienced global airlines throughout the COVID-19 crisis, you can rely on us to take you on your next journey safely.</p>
        <div class="row">
        <div class="col-md-5" id="col4"><div class="transbox">
    <p>Working space</p>
  </div></div>
        <div class="col-md-5" id="col5"><div class="transbox">
    <p>A good Air hosteress</p>
  </div></div>
    </div>
    </div>

    
        <div class="row" id="last">
        <div class="col-md-12">
        <form action="" class="container" >
            <br>
            <h2 style="text-align: center;">We Want to Hear from You !</h2>
            <input type="text" name="name" placeholder="Write Your name" required style="background-color:burlywood; width: 400px; height: 40px;"><br><br> 
            <input type="email" name="email" id="email" placeholder="enter email address" required style="background-color:burlywood; width: 400px; height: 40px;"><br><br>
            <input type="text" name="name" placeholder="Subject" required style="background-color:burlywood;width: 400px; height: 40px;"><br>
            <textarea name="address" id="address" cols="100" rows="10" placeholder="Type your message here...." style="background-color: burlywood; margin-top: 20px;"></textarea><br><br>
            <input type="submit" value="Submit" style="width:100px; height: 40px; background-image: linear-gradient(to right,chocolate,burlywood);" required>
            <br><br>
        
        </form>
    </div></div>
    
    <footer>
        
        <a href="ContactUs.php">Contact Us</a>
        <a href="#">&copy; 2019 |  Airlines</a> 
        <a href="#">  HR Airline Reservation System is Designed in 2019 By the Developer <b>Haroon Zahid Bajwa</b>
        </a>
    </footer>
</body>
</html>