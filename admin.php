<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link rel="stylesheet" a href="css\home.css">

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
table {
border-collapse: collapse;
margin-left:130px;
width: 80%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<div class="wrap">
    <nav>
        <div class="logo">FilmFlix</div>
        <ul>
       
        <i class='fas fa-user-alt' style='font-size:48px;color:red;margin-top:10px;margin-right:10px;'></i>
            <li><a class="active" href="index.php">Sign-Out</a></li>
            
           
        </ul>
    </nav>
    <BR>
</div>

          <div style="font-size: 40px ;color: #000;font-weight: 900;text-align: center;">
            <b>CUSTOMER DETAILS</b>
          </div>
          <hr style="width:15%;text-align:center;height:2px;border-width:0;color:rgb(168, 168, 168);background-color:gray"/>
<BR>

<table>
<tr>
<th>Customer Name</th>
<th>Movie Name</th>
<th>Date</th>
<th>Time</th>
</tr>
<?php
$conn = mysqli_connect('localhost','id15571670_localhost','=N/DB6b=4nmD<C2', 'id15571670_ticket');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM book";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["username"]. "</td><td>" . $row["movie_name"] ."</td><td>" . $row["date"] . "</td><td>"
. $row["time"]. "</td></tr>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</body>
</html>