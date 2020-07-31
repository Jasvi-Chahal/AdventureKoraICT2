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
 <!-- Top content -->
        <div class="top-content">
       		<div class="row no-gutters">
       			<div class="col">
       				<div id="carousel-example" class="carousel slide" data-ride="carousel">
       					<ol class="carousel-indicators">
       						<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
       						<li data-target="#carousel-example" data-slide-to="1"></li>
       						<li data-target="#carousel-example" data-slide-to="2"></li>
       					</ol>
       					<div class="carousel-inner">
       						<div class="carousel-item active">
       							<img src="images/slide-1.jpg" class="d-block w-100" alt="img1">
								<div class="carousel-caption">
									<h1 class="wow fadeInLeftBig">A New Sky ,A New Life.</h1>
									<div class="description wow fadeInUp">
										<p>
											Choose you new destination to discover with us.
										</p>
										<a href="#"><button type="button" class="btn">Discover more</button></a>
									</div>
								</div>
       						</div>
       						<div class="carousel-item">
       							<img src="images/slide1.jpg" class="d-block w-100" alt="img2">
       							<div class="carousel-caption">
									<h1 class="wow fadeInLeftBig">Tours</h1>
									<div class="description wow fadeInUp">
										<p>
										Discover the unique and diverse culture of Nepal.	
										</p>
										<a href="#"><button type="button" class="btn">Discover more</button></a>
									</div>
								</div>
       						</div>
       						<div class="carousel-item">
       							<img src="images/slide-2.jpg" class="d-block w-100" alt="img3">
       							<div class="carousel-caption">
									<h1 class="wow fadeInLeftBig">Adventure</h1>
									<div class="description wow fadeInUp">
										<p>
											Experienec the thrill of adventure in The Himalayas.
										</p>
										<a href="#"><button type="button" class="btn">Discover more</button></a>
									</div>
								</div>
       						</div>
       					</div>
						<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
       				</div>
       			</div>
       		</div>
        </div><hr>
<!-----------introduction section------------------->

<section class="company-intro">
			<div class="container">
			<h2>Welcome to Adventure Kora</h2><br><hr>
				<div class="row">
				    <div class="col-lg-6">
						<div class="intro-text">
							
							<p> Nepal has been labeled as one of the best sites to experience the bungee jump.
							You can experience this thrilling jump at around 160 meters over Bhotekhosi, 
							one of the fastest flowing rivers in Nepal. Follow this up with the canyon swing of
							240-meter free fall at the speed of 150 meters per hour.
							Currently, there are two bungy spots in Nepal one at Pokhara and other at Bhotekoshi.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="intro-image">
							<a href="#"><img src="images/intro.png"></a>
						</div>
					</div>
				</div>
			</div>
		</section><hr>
<!------------Divider-------------->
<div class="divider">
   <div class="container-fluid">
	   <div class="row">
	       <h3><i class="fas fa-box-open"></i>   Featured Package</h3>
        </div>
    </div>
</div>
<!----------------Featured package------------->
<div class="featuredPackage">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="image">
						<img src="images/package-1.jpg">
					</div>
					<div class="card-inner">
						<div class="header">
							<h2>Base Camp Trek</h2>
							<h3>Everest Region</h3>
						</div>
					<div class="content">
						<p><i class="fas fa-calendar-day"></i> 21 Days</p>
					</div>
					<a href="#"><button type="button" class="btn">Book Now</button></a>
				</div>
			</div>
		</div>
    <div class="col-sm-4">
		<div class="card">
			<div class="image">
				<img src="images/package-2.jpg"">
			</div>
			<div class="card-inner">
				<div class="header">
					<h2>Gokyo Lake Trek</h2>
					<h3>Everest region</h2>
				</div>
				<div class="content">
					<p><i class="fas fa-calendar-day"></i> 14 Days</p>
				</div>
				<a href="#"><button type="button" class="btn">Book Now</button></a>
		</div>
	</div>
</div>
<div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="images/package-3.jpg"">
			</div>
    <div class="card-inner">
      <div class="header">
        <h2>Everest Three Pass Trek</h2>
        <h3>Everest Region  </h3>
    </div>
    <div class="content">
      <p><i class="fas fa-calendar-day"></i> 14 Days</p>
    </div>
	<a href="#"><button type="button" class="btn">Book Now</button></a>
      </div>
  </div>
</div><div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="images/package-4.jpg">
    </div>
    <div class="card-inner">
      <div class="header">
        <h2>Everest Three Pass Trek</h2>
        <h3>Everest Region  </h3>
    </div>
    <div class="content">
      <p><i class="fas fa-calendar-day"></i> 14 Days</p>
    </div>
	<a href="#"><button type="button" class="btn">Book Now</button></a>
      </div>
  </div>
</div><div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="images/package-5.jpg"">
    </div>
    <div class="card-inner">
      <div class="header">
        <h2>Everest Three Pass Trek</h2>
        <h3>Everest Region  </h3>
    </div>
    <div class="content">
      <p><i class="fas fa-calendar-day"></i> 14 Days</p>
    </div>
	<a href="#"><button type="button" class="btn">Book Now</button></a>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="images/package-2.jpg">
    </div>
    <div class="card-inner">
      <div class="header">
        <h2>Everest Three Pass Trek</h2>
        <h3>Everest Region </h3>
    </div>
    <div class="content">
     <p><i class="fas fa-calendar-day"></i> 14 Days</p>
    </div>
	<a href="#"><button type="button" class="btn">Book Now</button></a>
      </div>
  </div>
</div>
		</div>
	</div><hr>
	
</div>
<!-----------------------divider---------------------------->
<div class="divider">
   <div class="container-fluid">
	   <div class="row">
	       
        </div>
    </div>
</div>

<!---------------------Customise package search----------------->

<section class="call-to-action-box no-padding">
			<div class="container">
				<div class="action-style-box">
					<div class="row">
						<div class="col-md-10">
							<div class="call-to-action-text">
								<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							<div class="find_item">
								<div>Destination:</div>
								<input type="text" class="destination find_input" required="required" placeholder="Keyword here">
							</div>
							<div class="find_item">
								<div>Adventure type:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>Categories</option>
									<option>Categories</option>
									<option>Categories</option>
								</select>
							</div>
							<div class="find_item">
								<div>Min price</div>
								<select name="min_price" id="min_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<div class="find_item">
								<div>Max price</div>
								<select name="max_price" id="max_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<button class="button find_button">Find</button>
						</form>
						</div>
						</div>
					</div><!-- row end -->
				</div><!-- Action style box -->
			</div><!-- Container end -->
		</section><!-- Action end --><br>
<!---------------------videp play section----------------->
<section class="company-intro">
			<div class="container">
			<h2>Some Adventures Activities</h2><br><hr>
				<div class="row">
				    <div class="col-lg-6">
						<div class="intro-text">
							
							<p> Nepal has been labeled as one of the best sites to experience the bungee jump.
							You can experience this thrilling jump at around 160 meters over Bhotekhosi, 
							one of the fastest flowing rivers in Nepal. Follow this up with the canyon swing of
							240-meter free fall at the speed of 150 meters per hour.
							Currently, there are two bungy spots in Nepal one at Pokhara and other at Bhotekoshi.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="intro-image">
							
						</div>
					</div>
				</div>
			</div>
		</section><hr>
    <!-- Footer Start -->
	<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
  </body>
</html>