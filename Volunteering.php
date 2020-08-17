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
 <div class="trekking">
    <div class="container">
      <img src="images/volunteering.jpg" alt="TREKKING" style="width:1150px; height:300px">
    <div class="content">
      <h1>Volunteering</h1>
      <p>On Saturday 25th April, 2015 the most powerful earthquake to hit Nepal since 1934 struck near Saurpani, between capital Kathmandu and tourist town Pokhara. Measuring 7.9 on the Richter scale, up to 10,000 people are believed to have died from the natural disaster. Here you'll focus on the rebuilding of schools, orphanages and health centers in Kathmandu and remote villages deep in the mountains of Nepal!</p>
    </div>
    </div>
    <hr>
  </div>  
<div class="trekkingPackage">
  <div class="container">
      <a class="weatherwidget-io" href="https://forecast7.com/en/27d7285d32/kathmandu/" 
      data-label_1="KATHMANDU" data-label_2="WEATHER" data-font="Times New Roman" data-icons="Climacons Animated" 
      data-days="3" data-theme="dark" >KATHMANDU WEATHER</a>
    <hr>
  <div class="row">
    <div class="col-sm-4">
        <div class="card">
          <div class="image">
            <img src="images/construction.jpg" alt="Package 1" width="100%" height="180px" >
          </div>
          <div class="card-inner">
            <div class="header">
              
              <h5 style="margin-left: 10px; margin-top:10px">Project Community Construction</h5>
            </div>
          <div class="content">
            <p><i class="fas fa-calendar-day"></i> 12 days
 <li>LOCATION: KATHMANDU, NEPAL</li>

  <li>START DATES: WEEKLY (SAT/SUN ARRIVALS)</li>

  <li>ACCOMMODATION: VOLUNTEER HOUSE (SHARED ROOMS)</li> </p>
          </div>
          <a href="TailorMade.php"><button type="button" class="btn">Get more info!</button></a>
        </div>
      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="card">
        <div class="image">
          <img src="images/teach.jpg" alt="Package 3" width="100%" height="180px"> 
        </div>
      <div class="card-inner">
      <div class="header">
        <h5>Project Educate Children</h5>
      </div>
      <div class="content">
        <p><i class="fas fa-calendar-day"></i> 2 Months <li>LOCATION: KATHMANDU, NEPAL</li>

  <li>START DATES: WEEKLY (SAT/SUN ARRIVALS)</li>

  <li>ACCOMMODATION: VOLUNTEER HOUSE (SHARED ROOMS)</li> </p></p>
      </div>
        <a href="TailorMade.php"><button type="button" class="btn">Get more info!</button></a>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
 
 
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';
fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
 
            <!-- Footer Start -->
  <?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
  </body>
</html>