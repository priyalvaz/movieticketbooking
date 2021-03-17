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
	height: 400px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(48, 87, 126, 0.9);
    margin-top: 100px;
    padding-left: 10px;
    color : #fff;
}
.back{
    margin-top: 30px;
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
		<form method='POST' action=''>
       <div style="font-size:20px;margin-top:10px;margin-bottom:10px;">
       <?php echo $_POST['email'];?>
       </div>
        
            <div class="form-input">
                <label>Enter Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="password" name="password" placeholder="password" required/>
            </div>
            
            <div class="form-input">
                <label>Confirm Password</label>
				<input type="password" name="cpassword" placeholder="Confirm password" required/>
			</div>
			<input type="submit" formaction="index.php" value="Submit" class="btn-login"/>
          
				
           
        </form>
            <a href="forgot.php">
                <input type="submit" type="submit" value="Cancel" class="back"/>
            </a>
	</div>
</body>
</html>









<?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'id15571670_localhost';
            $dbpass = '=N/DB6b=4nmD<C2';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
    if($password != $cpassword){
       
        echo '<script>alert("Password Did Not Match Please Try Again..")</script>'; 
        
    }
    else{
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $sql = "UPDATE login ". "SET password = $password ". 
               "WHERE email = $email" ;
            mysql_select_db('id15571670_ticket');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }
        }else {
         }
     ?>