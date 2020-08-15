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




<!-- Page Content -->
<div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">

    <h1 class="my-4">Adventure Kora: 
      <small>Welcome to our blog post</small>
    </h1>

    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="images/Blog1.jpg" alt="Card image cap" height="350px">
      <div class="card-body">
        <h2 class="card-title">Adventures you should embark upon in Nepal</h2>
        <p class="card-text">Trekking Mount Everest 

Well, one of the most famous natural icons of Nepal is Mount Everest which is also one of the most adventurous one. Nepal is known one of the best countries for trekking, not just the Everest but other peaks too. Every year thousands of trekkers and climbers come to Nepal to enjoy this serene beauty and test their endurance. The best part is the government of Nepal is continuously opening new trekking areas that were restricted earlier, means you can try a new route every time you visit Nepal.</p>
        <a href="BlogDetails.php" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on: Jan 01, 2020 by
        <a href="#">Admin</a>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="Images/Blog3.jpg" alt="Card image cap" height="310px">
      <div class="card-body">
        <h2 class="card-title">Things you need to know before trekking to ABC_ASJ...</h2>
        <p class="card-text">Annapurna Base Camp is considered to be a moderate trekking route. Compared to other trekking routes in the Himalayas, ABC trek has a lot of accommodation and tea-houses along the way for you to choose from.

Here are the things you need to think off before making deciding to trek

What kind of travel style is available?

The first thing you need to decide before trekking is what kind of trek do you want to go for? 
Annapurna Base Camp trek is a popular trekking destination, so you have a lot of options. You can either opt for a trekking house trek travel style.</p>
        <a href="#" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
      Posted on: Nov 03, 2019 by
        <a href="#">Admin</a>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="Images/Blog2.jpg" alt="Card image cap" height="310px">
      <div class="card-body">
        <h2 class="card-title">Why you can’t miss the Nepalese Cuisine?</h2>
        <p class="card-text">Buckle up, as we take you on a joyous ride of the most exotic delicacies that are bound to leave you drooling.

Momos


No list of flavorsome Nepali food is complete without this ultimate favorite. Momos are juicy dumplings made in white flour, with delicious stuffing, cooked over steam and served to you with the most finely cooked chutney.
And in the modern food definition, they are the healthiest form of a scrumptious delight. Dumplings are filled with meat stuffing, buffalo meat being a cult favorite (others are equally delicious though, like chicken, and even vegetables for that matter).</p>
        <a href="#" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
      Posted on: Mar 16, 2019 by
        <a href="#">Admin</a>
      </div>
    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>

  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-append">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Trip-Types</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="Trekking.php">Trekking</a>
              </li>
              <li>
                <a href="PeakClimbinh.php">Peak Climbing</a>
              </li>
              <li>
                <a href="Tours.php">Tours</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="AdventureSports.php">Adventures Sports</a>
              </li>
              <li>
                <a href="Volunteering.php">Volunteering</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Featured Packages</h5>
      <div class="card-body">
        Featured packages will come soon.    
    </div>
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
</body>
</html>
