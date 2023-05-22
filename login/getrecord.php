<?php 

include 'config.php';

session_start();

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  color: black;
  background-color: burlywood;
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 2px solid blue;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$sql="SELECT * FROM users WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>UserName</th>
<th>Email</th>
<th>Enc-Password</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>