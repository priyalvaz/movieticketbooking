<!DOCTYPE html>
<html>
<head>
	<title> Online Ticket Booking Website</title>
	<link rel="stylesheet" a href="css\style_reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <style>

.container1{
	width: 500px;
	height: 520px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(48, 87, 126, 0.9);
    margin-top: 100px;
    padding-left: 10px;
    color : #fff;
}
.back{
    margin-top: 20px;
    margin-left: 24rem;
    color:white;
    background-color: black;
    width: 90px;
    height: 30px;
    border: none;

}
    </style>
	<div class="container1">
		<img src="images/login.jpg"/>
		<form method='POST' action='forgot1.php'>
       
			
            <div class="form-input">
                <label>Email ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="email" name="email" placeholder="Enter Email ID" required/>
            </div>
            <div class="form-input">
                <label>Phone No. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="tel" name="phone" placeholder="Enter Phone Number" required/>
            </div>
          
            <input type="submit"  value="Get OTP" class="btn-login"/>
            <div style="margin-top: 30px;" class="form-input">
                <label>Enter OTP</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="password" placeholder="Enter OTP" required/>
            </div>
        
            <input type="submit" value="Create Password" class="btn-login"/>          
           
        </form>
            <a href="index.php">
                <input type="submit" type="submit" value="Cancel" class="back"/>
            </a>
	</div>
</body>
</html>




<?php session_start();
      //Put session start at the beginning of the file
?>
  <?php
          if (isset($_POST['submit'])){
          
$email = $_POST['email']; 
  
$phone = $_POST['phone']; 

          }
?>