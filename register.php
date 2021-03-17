<?php 

//if(isset($_POST["submit"])){  
   

  
if(!empty($_POST['name']) && !empty($_POST['uname']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['phone']) && !empty($_POST['cpassword']) && !empty($_POST['password'])) {  
    $name=$_POST['name'];  
	$uname=$_POST['uname'];  
	$dob=$_POST['dob']; 
	$phone=$_POST['phone']; 
	$email=$_POST['email']; 
    $password=$_POST['password']; 
    $cpassword=$_POST['cpassword']; 


    if($password != $cpassword){
       
        echo '<script>alert("Password Did Not Match Please Try Again..")</script>'; 
        
    }
  else{
    $con=mysqli_connect('localhost','id15571670_localhost','=N/DB6b=4nmD<C2') or die(mysqli_error());  
    mysqli_select_db($con,'id15571670_ticket') or die("cannot select DB");  
  
	$query=mysqli_query($con,"SELECT * FROM login WHERE username='".$uname."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password,name,email,phone_number,DOB) VALUES('$uname', '$cpassword', '$name', '$email', '$phone', '$dob')";  
     
    $result=mysqli_query($con,$sql);  
        if($result){  
            header("Location: index.php");
     echo '<script>alert("Account Successfully Created")</script>'; 
    
    } else {  
   
    echo '<script>alert("Failure!")</script>';
    }  

    } else {  
 
    echo '<script>alert("That email already exists! Please try again with another.")</script>';
    }  
  }
} else {  
   
    echo "";
}  
//}  
?>	


<!DOCTYPE html>
<html>
<head>
	<title> Online Ticket Booking Website</title>
	<link rel="stylesheet" a href="css\style_reg.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
	<div class="container">
	
		<form method='POST' action=''>
        <h1 >Register</h1>
        <div class="form-input">
            <label>Enter Your Name</label>&nbsp;
            <input type="text" name="name" placeholder="User Name" required/>	
        </div>
			<div class="form-input">
                <label>User Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="uname" placeholder="User Name" required/>	
            </div>
            
            <div class="form-input">
                <label>Email ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="email" name="email" placeholder="Enter Email ID" required/>
            </div>
            <div class="form-input">
                <label>Phone No. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="tel" name="phone" placeholder="Enter Phone Number" required/>
            </div>
            <div class="form-input">
                <label>Date Of Birth</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="date" name="dob" placeholder="Enter Date Of Birth" required/>
            </div>
			<div class="form-input">
                <label>Enter Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="password" name="password"id="password" placeholder="password" required/>
            </div>
            
            <div class="form-input">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" id="confirm" placeholder="Confirm password"  required/>
                <div id="errConfirm"></div>
			</div>
			<input type="submit" type="submit" value="Register"  class="btn-login"/>
			<div class="sign-option">
				<p>Alredy Register ? <a href="index.php">Sign In now</a></p>
				
            </div>
            
		</form>
    </div>
   
</body>
</html>