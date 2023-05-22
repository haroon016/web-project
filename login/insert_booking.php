<?php
include 'config.php';
    session_start();
    error_reporting(0);
    if(isset($_POST['submit'])){
        $Name = $_POST['Name'];
        $Phon_no = $_POST['Phon_no'];
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $dep_date = $_POST['dep_date'];
        $CNIC = $_POST['CNIC'];
        $class = $_POST['class'];
        $Triptype = $_POST['Triptype'];
        $userId = $_SESSION['id'];
        

        $result = mysqli_query($conn , "INSERT INTO booking (id , Phon_no , origin ,destination,dep_date,CNIC,class,Triptype, Name) VALUES ('$userId','$Phon_no' , '$origin' , '$destination','$dep_date','$CNIC','$class','$Triptype','$Name')")
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
    <title>HR Airlines -Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css">
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body style="background-color:wheat;">
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
</div>

<div class="row" style="background-color: wheat;">
            <div class="col-md-6" id= "form">
<div class="container">
    <form action="" method="post"  >
        <br>
        <h2 style="text-decoration: underline; text-align: center;">Book a Flight</h2><br>
            <label for= "Name"><h4> Enter Your Name</h4></label><br>
            <input list="Name" name="Name" placeholder="Write your Name" style="width: 350px; height: 40px;" ><br><br>
            <label for= "Phon_no"><h4> Enter Phone No.</h4></label><br>
            <input list="Phon_no" name="Phon_no" placeholder="Phon_no" style="width: 350px; height: 40px;" ><br><br>
            <label for= "origin"><h4> Enter the Origin</h4></label><br>
            <input list="origins" name="origin" placeholder="From" style="width: 350px; height: 40px;" >
                <datalist id="origins">
                    <option value="Lahore">
                </datalist><br><br>
            <label for= "Destination"><h4>Enter the Destination</h4></label><br>
              <input list="destinations" name="destination" placeholder="To" style="width: 350px; height: 40px;" >
                <datalist id="destinations">
                    <option value="Karachi">
                    <option value="Multan">
                    <option value="Islamabad">
                    <option value="Sailkot">
                    <option value="Peshawar">
                </datalist>
        <br><br>
            <label for ="departure_date"><h4>Enter the Departure Date</h4></label><br>
            <input type="date" name="dep_date"; style="width: 170px";><br><br>
            <label for = "no_of_pass"><h4>Enter Your CNIC</h4></label><br>
            <input type="number" name="CNIC" placeholder="xxxxx-xxxxxxx-x" style="width: 250px; height:40px;" ><br>
        <br>
            <label for= "class"><h4>Enter the Class</h4></class>
                <select name="class" style="width: 200px;height: 50px;">
                  <option value="economy">Economy</option>
                  <option value="business">Business</option>
                </select>
        <br><br>
          <label for= "trip"><h4>Enter Type of Trip</h4></class>
                <select name="Triptype" style="width: 200px;height: 50px;">
                  <option value="Oneway">One Way</option>
                  <option value="Round">Round Trip</option>
                </select><br><br>
            <br><br>
        <input type="submit" name="submit" value="Book Flight" style="margin-left: 100px; height: 40px; width: 400px; border-radius: 75px; background-image: linear-gradient(to right,blue, blueviolet); color: white;">
        
<br><br>
      </form>
      </div>
    </div>
    </div>
    <div style="background-color: wheat; ">
<div style="padding-left: 40px; margin-top: 20px; 
     padding-top: 40px; 
     background-color: wheat;width: 40%;border: 2px solid black; margin-left: 90px;
     margin-bottom:40px; ">
            <form style="width: 40%;">
                <label><b>Search Hotels Affliated with us</b></label><br>
<input type="text" placeholder="Enter Name of City" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form><br></div></div>

<footer>
        
        <a href="Home.php">GOTO Home</a>
        <a href="#">&copy; 2019 | HR Airlines</a> 
        <a href="#">  HR Airline Reservation System is Designed in 2019 By the Developer <b>Haroon Zahid Bajwa</b>
        </a>
    </footer>
</body>
</html>
<?php } ?>