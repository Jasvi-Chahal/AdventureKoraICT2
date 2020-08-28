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
      <img src="images/peakclimbing.jpg" alt="Notebook" style="width:1150px; height:500px">
    <div class="content">
      <h1>PEAK CLIMBING</h1>
      <p>Mountaineering in Nepal is the most challenging and rewarding adventure in Nepal and in the world. 
      Our Expedition and Peak Climbing trips take you to Nepal's Himalayan mountains,
      recognized to be the highest mountains on the planet, including the mighty Mount Everest (8848 m), 
      fulfilling every mountaineer's dream.</p>
    </div>
    </div>
    <hr>
  </div>  
<div class="peakclimbing">
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
          <div class="row">
    <div class="col">
  <a href="Trekking.php"><button type="button" class="btn">Book Now</button></a>
      </div>
    <div class="col">
      <div class="share-button sharer" style="display: block;">
    <button type="button" class="btn btn-success share-btn">Share</button>
    <div class="social top center networks-5 ">
        <!-- Facebook Share Button -->
        <a class="fbtn share facebook" href="https://www.facebook.com/sharer/sharer.php?u=url"><i class="fa fa-facebook-square"></i></a> 
        <!-- Twitter Share Button -->
        <a class="fbtn share twitter" href="https://twitter.com/intent/tweet?text=title&amp;url=url&amp;via=creativedevs"><i class="fa fa-twitter"></i></a> 
       <!-- LinkedIn Share Button -->
        <a class="fbtn share linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=url&amp;title=title&amp;source=url/"><i class="fa fa-linkedin"></i></a>
    </div>
</div>
    </div>
   </div>
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
    <div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="images/img/package6.jpg" alt="Package 6" width="100%" height="180px">
    </div>
    <div class="card-inner">
      <div class="header">
    <h5>Gokyo Lake with Renjo La</h5>
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
 <script>
 $( document ).ready(function() {
     //custom button for homepage
     $( ".share-btn" ).click(function(e) {
          $('.networks-5').not($(this).next( ".networks-5" )).each(function(){
             $(this).removeClass("active");
         });
         $(this).next( ".networks-5" ).toggleClass( "active" );
    });   
});
 
 </script>
 
            <!-- Footer Start -->
	<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
  </body>
</html>