<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" a href="css\home.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <title>Movie Seat Booking</title>
    <style>
  .read{
    margin-left: 150px;
    margin-right: 150px;
    margin-top: 30px;
    padding: 30px;;
  
    border: 2px solid black;
    font-size: 20px;
  }
 
    </style>
  </head>
  <body>
  <div class="wrap">
    <nav>
        <div class="logo">FilmFlix</div>
        <ul>
           
        <li><a class="" href="home.html">Home</a></li>
            <li><a class="" href="movies\movie.html">Movies</a></li>
            <li><a class="" href="news\news.html">News</a></li>
            <li><a class="" href="contact.php">Contact Us</a></li>
            <li><a class="" href="index.php">Sign-Out</a></li>
            
           
        </ul>
    </nav>
</div><br>
<div style="font-size: 40px ;color: #000;font-weight: 900;text-align: center; margin-top: 15px; ">
  <b>THANK YOU FOR BOOKING WITH US</b>

</div>
<hr style="width:40%;margin-bottom: 35px; text-align:center;height:2px;border-width:0;color:rgb(168, 168, 168);background-color:gray"/>


</div>
<div class="read">
<h5 style="text-align: center;color:red;">Your tickets will be available 2 hours before the show time <br>
Movie Ticket will be sent to you through email and SMS.</h5>



 Payment Status : SUCCESSFUL<br><br>

 Booking ID :<spam id="demo"></spam>

  </div>
  <script>
document.getElementById("demo").innerHTML =
Math.floor(Math.random() * 10000000) + 1;
</script>



</body>
</html>
