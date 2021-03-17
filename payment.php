<?php 
//if(isset($_POST["submit"])){  
  if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['card_name']) && !empty($_POST['card_number']) && !empty($_POST['expiration']) && !empty($_POST['cvv'])) {  
    $fname=$_POST['fname'];  
    $lname=$_POST['lname']; 
    $username=$_POST['username'];  
    $email=$_POST['email']; 
    $address=$_POST['address']; 
    $card_name=$_POST['card_name']; 
    $card_number=$_POST['card_number']; 
    $expiration=$_POST['expiration']; 
    $cvv=$_POST['cvv']; 
  

  
    $con=mysqli_connect('localhost','id15571670_localhost','=N/DB6b=4nmD<C2') or die(mysqli_error());  
    mysqli_select_db($con,'id15571670_ticket') or die("cannot select DB");  
  
	$query=mysqli_query($con,"SELECT * FROM customer WHERE username='".$username."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO customer(fname, lname, username, email, address, name_card, card_number, Expiration, cvv)
    VALUES('$fname', '$lname', '$username', '$email', '$address', '$card_name','$card_number','$expiration','$cvv')";  
     
    $result=mysqli_query($con,$sql);  
        if($result){  
            header("Location: receipt.php");
    echo '<script>alert("Successfull")</script>';
    
    } else {  
   
    echo '<script>alert("Failure!")</script>';
    }  
  
    } else {  
      echo '<script>alert("That email already exists! Please try again with another.")</script>';  
    }  
    else{
      echo '<script>alert("all Fields required")</script>';  
    }
  
} 
//}  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Online Movie Ticket Booking System</title>

    <!-- Bootstrap core CSS -->
    <link href="css\bootstrap.min.css" rel="stylesheet">

  
	
	<style>
	.box-shadow img{ width:100%; max-height:320px !important;}
	.box-shadow .btnbox{ text-align:center}
	</style>
  </head>

  <body>

    <div class="container">
      <div class="py-5 text-center">
        
        <div style="font-size: 40px ;color: #000;font-weight: 900;text-align: center; margin-top: 15px; ">
            <b>CHECKOUT FORM</b>
          </div>
          <hr style="width:20%;margin-bottom: 35px; text-align:center;height:2px;border-width:0;color:rgb(168, 168, 168);background-color:gray"/>
          
       
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4" >
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill"></span>
          </h4>
          <ul class="list-group mb-3">
          
           
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form method="POST" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" name="fname" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder=""  name="lname"value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email"  name="email"placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address"  name="address"placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <br>
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>India</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                  <br>
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>Maharastra</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" name="card_name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" name="card_number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" name="expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" name="cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <form >
            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Continue to checkout</button>
            
            </form>
          </form>
        </div>
      </div>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
         
        </p>
        
      </div>
    </footer>

  
    <script src="css\jquery-3.2.1.slim.min.js"></script>
 
    <script src="css\bootstrap.min.js"></script>
    <script src="css\book.js" type="text/javascript"></script>

    
  </body>
</html>
