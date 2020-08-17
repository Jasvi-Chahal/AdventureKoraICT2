<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="CSS/mystyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Adventure Kora</title>
  </head>
  <body>
   <!-- header: logo and navigation-menu -->
   <?php 
    include('HeaderFooter/header.php'); 
    ?>
    <!-- end header -->
   <div class="team">
    <div class="container">
    <div class="row">
    <h3 style="padding-top: 60px;padding-left: 500px">Our Team</h3>
    
    </div><hr>
        <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="images/team1.png" alt="Abhimanyu" style="width:100%">
            <div class="container">
            <h2>Abhimanyu</h2>
            <p class="title">Co-Founder, Managing Director</p>
            <p>Being a passionate traveler and photography anthusiast
            he has best adventures ideas you can experiance in Nepal.</p>
            
            <p><button class="button">Contact</button></p>
          </div>
        </div>
        </div>

        <div class="col-sm-4">
    <div class="card">
      <img src="images/team2.jpg" alt="Nischal" style="width:100%">
      <div class="container">
        <h2>Nischal</h2>
        <p class="title">Co-Founder & Digital marketing specialist</p>
        <p>His aim is connecting people
    around the world with Himalayas for the unique experience.<br></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  
  <div class="col-sm-4">
    <div class="card">
      <img src="images/team3.jpg" alt="Astha" style="width:100%">
      <div class="container">
        <h2>Astha</h2>
        <p class="title">Co-Founder, Content creator and travel Designer</p>
        <p>Passionate about promoting sustainable 
    tourism and promoting women traveller.</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>
<hr>    
</div>



 
            <!-- Footer Start -->
	<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
  </body>
</html>