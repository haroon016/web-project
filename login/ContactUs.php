<?php
include 'config.php';
    session_start();
    error_reporting(0);
    if(isset($_POST['submit'])){
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Subject = $_POST['Subject'];
        $Message = $_POST['Message'];        

        $result = mysqli_query($conn , "INSERT INTO contact ( Name , Email ,Subject,Message) VALUES ('$Name' , '$Email' , '$Subject','$Message')")
            or die("data Not Inserted");
            if(!empty($result)){
                header('Location:welcome.html');
            }

    }

    else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
        #last{
    background-image: url("last.jpg");
      height: 600px; 
  background-position: center; 
  background-repeat: no-repeat;
  background-size: cover;   
}
        nav a{
    text-decoration: none;
    color: rgb(255, 255, 255);
    padding: 2%;
    text-align: center;
    float: left;
}

nav{
    background-color: rgb(165, 165, 165);
    overflow: hidden;
    width: 100%;
}

nav a:hover{
    color: rgb(187, 187, 187) ;
}
        footer {
    background-color: #333;
    overflow: hidden;
}

footer a {
    text-decoration: none;
    padding: 20px;
    text-align: center;
    float: left;
    color: white;
}
    </style>
</head>
<body>
    <div class="row">
    <div class="col-md-12">
        <nav>
        <a href="Home.php"><b style="font-family: Cursive;">HR Airlines</b></a>
        <a href="Home.php">Home</a>
        <a href="ContactUs.html">Contact</a>
        <a href="About.html">About</a>
        <a href="insert_booking.php">Booking Online</a>
        <a href="logout.php">login</a>
        <a href="register.php">SignUp</a>

        
    </nav>
</div>
</div>
      <div class="row" id="last">
        <div class="col-md-12">
        <form action="" method = "post" class="container" >
            <br>
            <h2 style="text-align: center;">We Want to Hear from You !</h2><br>
            <input type="text" name="Name" placeholder="Write Your name" required style="background-color:burlywood; width: 400px; height: 40px;"><br><br> 
            <input type="email" name="Email" id="email" placeholder="enter email address" required style="background-color:burlywood; width: 400px; height: 40px;"><br><br>
            <input type="text" name="Subject" placeholder="Subject" required style="background-color:burlywood;width: 400px; height: 40px;"><br>
            <textarea name="Message" id="Message" cols="100" rows="10" placeholder="Type your message here...." style="background-color: burlywood; margin-top: 20px;"></textarea><br><br>
            <input type="submit" name="submit" value="Submit" style="width:100px; height: 40px; background-image: linear-gradient(to right,chocolate,burlywood);" required>
            <br><br>
        </form>
    </div></div>
    <footer>
        
        <a href="Home.php">Home</a>
        <a href="#">&copy; 2019 | HR Airlines</a> 
        <a href="#">  HR Airline Reservation System is Designed in 2019 By the Developer <b>Haroon Zahid Bajwa</b>
        </a>
    </footer>
</body>
</html>
<?php } ?>