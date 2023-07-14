<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
require_once "config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- link for font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">

    <title>booking form</title>
    <style>
        body{
            background-image: url("https://images.unsplash.com/photo-1622547748225-3fc4abd2cca0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80");
            background-size: cover;
        }
        *{
            font-family: 'Montserrat', sans-serif;
font-family: 'Roboto Condensed', sans-serif;
        }
        input{
            opacity: 0.7;
        }
        select{
            opacity: 0.7;
        }
       
    .footer{
   
        text-align: center;
    }
        
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">!HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['name']?></a>
      </li>
  </ul>
  </div>
  </div>
</nav>

<div class="container mt-4">
<center><b><b><h3><?php echo "Welcome ". $_SESSION['name']?>! <u> Please Enter The Booking Details</u></h3></b></b></center>
<div class="container mt-4">

<form action="" method="post">
    <legend>Bookings:</legend>
    <hr>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="checkin4">Check In</label>
      <input type="date" class="form-control" name="check_in" id="checkin4" placeholder="Check In" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Check Out</label>
      <input type="date" class="form-control" name ="check_out" id="inputcheckout4" placeholder="Check Out" required>
    </div>
  </div>
  <div class="form-group" id="22">
      <label for="inputcity">City</label>
      <select id="inputcity" class="form-control" name="city">
        <option value="jaipur">Jaipur</option>
        <option value="Delhi">Delhi</option>
</select>
    </div>
    <div class="form-group">
        <lable for="name4">Persons</label>
        <input type="number" class="form-control" name ="person" id="inputname4" placeholder="Enter no. of persons" required>
    </div>
    <div class="form-group">
      <label for="inputcity">Room Name</label>
      <select id="inputcity" class="form-control" name="room_name">
        <option value="Palace Room 1 Bedroom Garden View or Courtyard View">Palace Room 1 Bedroom Garden View or Courtyard View</option>
        <option value="Historical Suite 1 Bedroom Garden View or Courtyard View">Historical Suite 1 Bedroom Garden View or Courtyard View</option>
        <option value="Royal Suite 1 Bedroom Garden View or Courtyard View">Royal Suite 1 Bedroom Garden View or Courtyard View</option>
        <option value="Grand Royal Suite 1 Bedroom Garden View">Grand Royal Suite 1 Bedroom Garden View</option>
        <option value="Grand Presidential Suite 1 Bedroom Garden View">Grand Presidential Suite 1 Bedroom Garden View</option>
        <option value="Luxury Room Garden View">Luxury Room Garden View</option>
</select>
<br><br>
  <center><button type="submit" class="btn btn-primary btn-success">Confirm Your Booking</button></center>
  
 

</form>
</div>
</div>
<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <footer class="footer">
    <hr>
    <p>All right reserved &copy; 2023</p>
</footer>
</html>