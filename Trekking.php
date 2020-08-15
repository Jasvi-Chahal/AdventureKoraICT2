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
      <img src="images/trekking.jpg" alt="Notebook" style="width:1150px; height:500px">
    <div class="content">
      <h1>TREKKING</h1>
      <p>Home to the highest mountain peak in the world Mount Everest, trekking to this region is nothing short of a pilgrimage.
      The Everest region offers visitors a glimpse of the lives of one of the highest mountain dwellers in the world, the famed 
      Sherpas, their culture and lifestyles and to the Buddhist tradition in the region. It also astonishes visitors with its rich
      biodiversity, and some of the highest glacial lakes in the world. While you trek in this region, you'll witness the daunting
      peaks of the Mt. Everest, Mt. Lhotse, Mt. Makalu, and Cho Oyu towering above the skies crowing the ridges of the Himalayan range.</p>
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
            <img src="images/img/package1.jpg" alt="Package 1" width="100%" height="180px" >
          </div>
          <div class="card-inner">
            <div class="header">
              
              <h5 style="margin-left: 10px; margin-top:10px"> Everest Base Camp Via Kongma la</h5>
            </div>
          <div class="content">
            <p><i class="fas fa-calendar-day"></i> 14 Days</p>
          </div>
          <a href="Trekking.php"><button type="button" class="btn">Book Now</button></a>
        </div>
      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="card">
        <div class="image">
          <img src="images/img/package3.jpg" alt="Package 3" width="100%" height="180px"> 
        </div>
      <div class="card-inner">
      <div class="header">
        <h5>Everest Base Camp</h5>
      </div>
      <div class="content">
        <p><i class="fas fa-calendar-day"></i> 12 Days</p>
      </div>
        <a href="Trekking.php"><button type="button" class="btn">Book Now</button></a>
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