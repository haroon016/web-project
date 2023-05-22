<?php 

include ('config.php');
session_start();
error_reporting(0);
        $Name = $_POST['Name'];
 
        $res = mysqli_query($conn , "DELETE FROM booking WHERE Name='$Name'")
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            table ,tr ,th, td{
                border:  2px solid blue;
            }
        </style>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="searchstyle.css">
        <title>HR_Airlines</title>
    <script>
function foo() {
   alert("Record Deleted Successfully!");
   return true;
}
</script>
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

        
    </nav>
</div>
</div><br><br>
<form method="post" action="">
        <label> Search by Name:</label> 
        <input type="text" name="Name" placeholder="Enter Name">
        <input type="submit" name="submit" value="Go" onclick="return foo();"><br><br>
        <p id="del"> Record Search</p>
</form><br><br>
    
<br><br><br><br><br><br><br><br><br><br><br>
  <footer>
        
        <a href="Home.php">Home</a>
        <a href="#">&copy; 2019 | HR Airlines</a> 
        <a href="#">  HR Airline Reservation System is Designed in 2019 By the Developer <b>Haroon Zahid Bajwa</b>
        </a>
    </footer>
</body>
</html>
