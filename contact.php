<?php 

//if(isset($_POST["submit"])){  
  
if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['country']) && !empty($_POST['msg'])) {  
    $name=$_POST['name'];  
    $phone=$_POST['phone']; 
    $email=$_POST['email']; 
    $country=$_POST['country']; 
    $msg=$_POST['msg']; 
  
    $con=mysqli_connect('localhost','id15571670_localhost','=N/DB6b=4nmD<C2') or die(mysqli_error());  
    mysqli_select_db($con,'id15571670_ticket') or die("cannot select DB");  
  
	$query=mysqli_query($con,"SELECT * FROM message WHERE email='".$email."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO message(name, phone, email, country, msg) VALUES('$name', '$phone','$email',  '$country','$msg')";  
     
    $result=mysqli_query($con,$sql);  
        if($result){  
          echo '<script>alert("Your message has been recorded!")</script>'; 
    
    } else {  
    echo '<script>alert("Failure!")</script>'; 
    }  
  
    } else {  
    
    }  
  
} 
//}  
?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" a href="css\home.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
 function button_alert() {
  alert("Your message has been recorded!");
}
</script>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,500&display=swap');

.coming_soon{
  background-color:#e6ffff;
  padding: 200px;
  margin: 40px 0px 40px 0px;
  position: relative;
}

.coming_text{
color: black;
font-size: 25px;
position: absolute;
top: 10%;
width: 1000px;

}
.coming_text1{
color: black;
font-size: 25px;
position: absolute;
left:15%;
top: 8%;
width: 1000px;

}
.contact_us{
background-color:#e6ffff;
padding-top: 60px;
height: 950px;
padding-left: 2px;
position: relative;
}

.quick_facts{
  background-color:#cce6ff;
padding-top: 30px;
height: 380px;
 padding-left: 50px;
  position: relative;
  
}

.contact_us .fa{
  font-size: 30px;
  width: 50px;
  margin: 5px 5px;
  text-align: center;
  justify-content: center;
  margin-bottom: 10px;
  margin-left: 30px; 
}
.quick_facts .fa {
  font-size: 50px;
  width: 50px;
  margin: 5px 5px;
  text-align: center;
  justify-content: center;
  margin-bottom: 10px;
  margin-left: 70px;
}
.quick_facts_text{
color: black;
font-size: 25px;
position: relative;
margin-top: 50px;
margin-bottom: 30px;
margin-left: 70px;
}
input[type=text] select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.form {
	padding: 30px 40px;	
}

.form-control {
	margin-bottom: 10px;
	padding-bottom: 20px;
	position: relative;
}

.form-control label {
	display: inline-block;
	margin-bottom: 5px;
}

.form-control input,select,textarea {
	border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 14px;
	padding: 10px;
	width: 100%;
}

.form-control input:focus {
	outline: 0;
	border-color: #777;
}

.form-control.success input {
	border-color: #2ecc71;
}

.form-control.error input {
	border-color: #e74c3c;
}

.form-control i {
	visibility: hidden;
	position: absolute;
	top: 40px;
	right: 10px;
}

.form-control.success i.fa-check-circle {
	color: #2ecc71;
	visibility: visible;
}

.form-control.error i.fa-exclamation-circle {
	color: #e74c3c;
	visibility: visible;
}

.form-control small {
	color: #e74c3c;
	position: absolute;
	bottom: 0;
	left: 0;
	visibility: hidden;
}

.form-control.error small {
	visibility: visible;
}

.btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #fece0c;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}


/* Create two columns that float next to eachother */
.column2 {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 10px;
}

/* Clear floats after the columns */
.row2:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column2, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
<body>
<div class="wrap">
    <nav>
        <div class="logo">FilmFlix</div>
        <ul>
            
            <li><a class="" href="home.html">Home</a></li>
            <li><a class="" href="movies\movie.html">Movies</a></li>
            <li><a class="" href="news\news.html">News</a></li>
            <li><a class="active" href="contact.html">Contact Us</a></li>
            <li><a class="" href="index.php">Sign-Out</a></li>
            
           
        </ul>
    </nav>
</div>

  
    <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="images/aboutus_silder4.jpg" style="width:100%; height: 450px;">
        </div>
        
        <div class="mySlides fade">
       
          <img src="images/aboutus_slider1.jpg" style="width: 100%; height: 450px;">
        </div>
        
        <div class="mySlides fade">
         
          <img src="images/aboutus_silder3.jpg" style="width:100%; height:450px;">
        </div>
        
        <div class="mySlides fade">
            <img src="images/aboutus_slider.jpg" style="width: 100%;height: 450px;">
          </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
        </div>
 



<div class="coming_soon">
  
    <div class="coming_text1">
      <div style="font-size: 40px ;color: #fff;font-weight: 400;text-align:center;"></div>
      <p style="font-size: 20px;">21 years ago in South Africa a seed of an idea was planted, a dream was shared.
          Inception happened. 21 years on, we look back at what we've built. 
          Leave it upto us, and we'd love to do it all over again. Here's our story.
          FilmFlix has also built India’s largest organic 
          reviews and ratings engine for movies and has driven technology innovations, 
          such as the m-ticket and Movie Mode,
          impacting tens of millions of users and the industry at large.</p> 
         <div style="position: absolute; margin-left: 0px;">
        
          <h5 style="color: rgb(0, 0, 0);"><b><i class="fa fa-gg"></i> 15 Million+ <i class="fa fa-gg"></i><br></h5>
            <h6>&nbsp;&nbsp;&nbsp;APP DOWNLOADS</h6>
          </div>

          <div style="position: absolute; margin-left: 320px;">
           
            <h5 style="color: rgb(0, 0, 0);"><b><i class="fa fa-gg"></i> 10 Million+ <i class="fa fa-gg"></i><br></h5>
              <h6>&nbsp;&nbsp;&nbsp;TICKETS A MONTH</h6>
            </div>

            <div style="position: absolute; margin-left: 630px;">
             
              <h5 style="color: rgb(0, 0, 0);"></b><i class="fa fa-gg"></i> 1 Million+ <i class="fa fa-gg"></i><br></h5>
                <h6>&nbsp;&nbsp;&nbsp;PAGE VIEWS A<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MONTH</h6>
              </div>
     
     </div>
</div>

<div class="quick_facts">
        <div style="font-size: 40px ;color: rgb(19, 18, 18);font-weight: 900;text-align: center;margin-top:5px;">
          <b>Quick Facts</b>
        </div>
       
        <hr style="width:15%;text-align:center;height:2px;border-width:0;color:rgb(168, 168, 168);background-color:gray"/>
        <div class="quick_facts_text"> 
            
              <div style="position: absolute; margin-left: 0px;">
                <i class="fa fa-users"></i>
                <h5 style="color: rgb(0, 0, 0);margin-left:30px;"><b>30 Million+<br></h5>
                  <h6 style="margin-left:30px;">CUSTOMERS</b></h6>
              </div>
              <div style="position: absolute; margin-left: 320px;">
                <i class="fa fa-globe"></i>
                   <h5 style="margin-left:79px;"> <b>5+<br></h5>
                  <h6 style="margin-left:50px;">  COUNTRIES </b></h6>
              </div>
              <div style="position: absolute; margin-left: 590px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker"></i>
                   <h5 style="margin-left:130px;"> <b>650+<br></b></h5>
                   <h6 style="margin-left:25px;">COUNTRIES TOWNS AND CITIES</h6>
                  
              </div>
              <div style="position: absolute;margin-left: 1000px;">
                <i class="fa fa-camera-retro"></i>
                <h5 style="color: rgb(0, 0, 0);margin-left:63px;"><b>5000+<br></h5>
                <h6 style="margin-left:65px;">  SCREENS</b></h6>
              </div>            
            </div>
        </div>   
      </div>
      <div class="contact_us">
        <div style="font-size: 30px ;color: rgb(19, 18, 18);font-weight: 600;text-align: center;margin-top:5px;">
          <b>CONTACT US</b> <hr style="width:10%;text-align:center;height:2px;border-width:0;color:crimson;background-color:coral"/>
          <p style="font-size: 20px;">Swing by for a movie, or leave us a message:</p>
        </div> 
      
        <div class="row2">
          <div class="column2">
            <img src="images/cinema-sign.jpg" style="width:80%">
            <p style="font-size: 20px;color:#ff0000;margin-left: 80px;margin-top:80px;" >
            <i class="fa fa-paper-plane"></i>Customer Care :<br><i class="fa fa-phone"></i>9879654875
              <br><i class="fa fa-envelope"></i>filmflix@gmail.com</p>
          </div>
          <div class="column2">
          <form  method='POST' action=''>
          <div class="form-control">
              <label for="fname">Name</label>
              <input type="text" id="fname" name="name" placeholder="John Doe" onkeyup="checkInputs()">
              <i class="fas fa-check-circle"></i>
			        <i class="fas fa-exclamation-circle"></i>
		    	    <small>Error message</small>
          </div>

          <div class="form-control">
              <label for="phone">Phone</label>
              <input type="text" id="phone" name="phone" placeholder="8956741523" onkeyup="checkInputs()">
              <i class="fas fa-check-circle"></i>
			        <i class="fas fa-exclamation-circle"></i>
		    	    <small>Error message</small>
              </div>

          <div class="form-control">
              <label for="text">Email</label>
              <input type="text" id="email" name="email" placeholder="john@gmail.com" onkeyup="checkInputs()">
              <i class="fas fa-check-circle"></i>
			        <i class="fas fa-exclamation-circle"></i>
		    	    <small>Error message</small>
              </div>

              <label for="country">Country</label>
              <select id="country" name="country">
                <option value="india">India</option>
                <option value="australia">Australia</option>
                <option value="usa">USA</option>
              </select>
            
              <div class="form-control">
              
              <textarea id="message" name="msg" placeholder="Your Message..." onkeyup="checkInputs()" style="height:170px"></textarea>
              <i class="fas fa-check-circle"></i>
			        <i class="fas fa-exclamation-circle"></i>
		    	    <small>Error message</small>
              </div>
              <div class="btn">
                <input type="submit" value="submit">
              </div>
            </form>
          </div>
        </div>
      </div>

<div class="end">
    <div style="color: red;"><h1>FilmFlix</h1></div>
    <div id="social">
    <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>  
    <p style="font-size: 12px;color: grey;">Copyright 2020 © Bigtree Entertainment Pvt. Ltd. All Rights Reserved.<br>
      The content and images used on this site are copyright protected and copyrights vests with the respective owners.
       The usage of the content and images on this website is intended to promote the works and no endorsement of the artist shall 
       be implied. Unauthorized use is prohibited and punishable by law.</p>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

const form = document.getElementById('form');
const fname = document.getElementById('fname');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const message = document.getElementById('message');


function checkInputs() {
	// trim to remove the whitespaces
	const fnameValue = fname.value.trim();
	const emailValue = email.value.trim();
	const phoneValue = phone.value.trim();
	const messageValue = message.value.trim();
	
	if(fnameValue === '') {
		setErrorFor(fname, 'Name cannot be blank');
	} else {
		setSuccessFor(fname);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(messageValue === '') {
		setErrorFor(message, 'Message cannot be blank');
  } else if(messageValue.length<10 ){
    setErrorFor(message, 'Message should be atleast 10 characters');
  }
  else {
		setSuccessFor(message);
	}
	
	if(phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	} else if(phoneValue.length<10 ) {
		setErrorFor(phone, 'Phone number should be 10 digits');
	} else{
		setSuccessFor(phone);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

</script>
</body>
</html>