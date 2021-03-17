<?php
if(isset($_POST["submit"])){  
  
    if(!empty($_POST['name']) && !empty($_POST['password'])) {  
        $email=$_POST['name'];  
        $password=$_POST['password'];  
      
        $con=mysqli_connect('localhost','id15571670_localhost','=N/DB6b=4nmD<C2') or die(mysqli_error());  
        mysqli_select_db($con,'id15571670_ticket') or die("cannot select DB");  
      
        $query=mysqli_query($con,"SELECT * FROM admin_login WHERE username='".$email."' AND password='".$password."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbemail=$row['username'];  
        $dbpassword=$row['password'];  
        }  
      
        if($email == $dbemail && $password == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_email']=$email;  
      
        /* Redirect browser */  
        header("Location: admin.php");  
        }  
		}
		 else {  
       
        echo '<script>alert("Invalid username or password!")</script>';
        }  
      
    } else {  
        echo "";  
    }  
    }  
?>


<!DOCTYPE html>
<html>
<head>
	<title> Online Ticket Booking Website</title>
	<link rel="stylesheet" a href="css\style_login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
	<div class="container">
	<img src="images/login.jpg"/>
	<form method="POST">
			<div class="form-input">
				<input type="text" name="name" id="name" placeholder="Username"required/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" id="password" placeholder="Password" required/>
			</div>
			<div style="color: white;font-size:20px;margin-right: 210px;">
				
				<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			</div> 
				<input type="submit"  name="submit" value="Login" class="btn-login" />
			<div class="sign-option">
				<br>
				<a href="forgot.phps">Forgot password?</a>
				
			</div>
		</form>
	</div>
</body>
</html>
