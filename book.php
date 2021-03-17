
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\book.css" />
   
    
    <title>Movie Seat Booking</title>
  </head>
  <body>
    <div class="boxitem">
    <div class="movie-container">
    <div class="form-input">
                <label style="margin-right:73px;">Date</label>
				<input type="date" name="dob" placeholder="Enter Date Of Birth" required/>
            </div><br>
      <label>Select a movie</label>
      <select id="movie">
        <option value="8">Gunjan Saxena ($8)</option>
        <option value="10">Panga ($10)</option>
        <option value="10">Panga ($10)</option>
        <option value="11">Harry Potter ($11)</option>
        <option value="10">Dilwale Dulhania Le Jayenge ($10)</option>
        <option value="9">Mother India ($9)</option>
        <option value="10">Hum Aapke Hai Kon ($10)</option>
        <option value="11">3 Idiots ($11)</option>
        <option value="10">Sholay ($10)</option>
        <option value="12">Yeh Jawaani Hai Deewani ($12</option>
        <option value="10">Lagaan ($10)</option>
        <option value="9">Amar Akbar Anthony ($9)</option>
        <option value="10">Jodhaa Akbar ($10)</option>
        <option value="10">Don ($10)</option>
      </select>
    </div>


    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
      </div>
    </div>
<form method="post">
    <p class="text">
      You have selected <span id="count">0</span> seats for a price of $
     <span
        id="price" name="price"
        >0</span>
    </p>
  
    <div style="text-align: center; margin-top: 20px;">
            <button  formaction="..\movies\movie.html" class="button1" style="background-color:black;color: white;border: 3px solid #f44336; margin-right: 30px; ">
                Back</button>
                <button  formaction="payment.php" name="submit"class="button1" style="background-color:black;color: white;border: 3px solid #f44336; ">
                   Book Now</button>
          </div>


        
    <script src="css\book.js" type="text/javascript"></script>
    </form>
    </div>
  </body>
</html>
