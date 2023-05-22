<?php 

include ('config.php');
session_start();
error_reporting(0);
        $Phon_no = $_POST['Phon_no'];
 
        $res = mysqli_query($conn , "SELECT * FROM booking WHERE Phon_no='$Phon_no'")
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
	<label>Search by Phon_no: </label>
	<input type="text" name="Phon_no" placeholder="Enter Phon_no">
	<input type="submit" name="submit" value="Go"><br><br>
	
</form><br><br>
    <table width="70%">

        <tr>
           <th>Name</th>
            <th>Phone Number</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Departure Date</th>
            <th>CNIC</th>
            <th>Class</th>
            <th>Triptype</th>

        </tr>
<?php
while($row = mysqli_fetch_assoc($res)){
        echo  "<tr>";
        echo  "<td>$row[Name]</td>";
        echo  "<td>$row[Phon_no]</td>";
        echo  "<td>$row[origin]</td>";
        echo  "<td>$row[destination]</td>";
        echo  "<td>$row[dep_date]</td>";
        echo  "<td>$row[CNIC]</td>";
        echo  "<td>$row[class]</td>";
        echo  "<td>$row[Triptype]</td>";

        echo  "</tr>";
}
?>





    </table>

</form>
<br><br><br><br><br><br><br><br><br><br><br>
  <footer>
        
        <a href="Home.php">Home</a>
        <a href="#">&copy; 2019 | HR Airlines</a> 
        <a href="#">  HR Airline Reservation System is Designed in 2019 By the Developer <b>Haroon Zahid Bajwa</b>
        </a>
    </footer>
</body>
</html>

