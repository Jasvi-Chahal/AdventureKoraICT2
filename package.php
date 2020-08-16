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
 <div class="trekking">
		<div class="container">
			<img src="images/slide1.jpg" alt="Notebook" style="width:1150px; height:500px">
		<div class="content">
			<h1>PLAN YOUR ADVENTURES TOUR WITH US</h1>
			<p></p>
		</div>
		</div>
		<hr>
	</div>	
<div class="package">
	<div class="container">
		<div class="row">
			<div class=col">
				<h2 style="color:gray"><strong>FILTER PACKAGE</strong></h2><hr>
			<!--Accordion wrapper-->
							<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

							  <!-- Accordion card -->
							  <div class="card">

								<!-- Card header -->
								<div class="card-header" role="tab" id="headingOne1">
								  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
									aria-controls="collapseOne1">
									<h5 class="mb-0">
									  TRIP TYPE <i class="fas fa-angle-down rotate-icon"></i>
									</h5>
								  </a>
								</div>

								<!-- Card body -->
								<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
								  <div class="card-body">
									<a href=""><h6>Annapurna</h6></a><hr>
									<a href=""><h6>Lantang</h6></a><hr>
									<a href=""><h6>Manaslu</h6></a><hr>
							
								  </div>
								</div>

							  </div>
							  <!-- Accordion card -->

							  <!-- Accordion card -->
							  <div class="card">

								<!-- Card header -->
								<div class="card-header" role="tab" id="headingTwo2">
								  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
									aria-expanded="false" aria-controls="collapseTwo2">
									<h5 class="mb-0">
									  DIFFICULTY LEVEL <i class="fas fa-angle-down rotate-icon"></i>
									</h5>
								  </a>
								</div>

								<!-- Card body -->
								<div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
								  <div class="card-body">
										
                                             <li style="list-style-type:none">
                                                        <label for="check1" class="custom-checkbox">
                                                            <input id="check1" onchange="filter()" type="checkbox">
                                                            <span class="check-input"></span>
                                                            <span class="check-label">Easy</span>
                                                        </label>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <label for="check2" class="custom-checkbox">
                                                            <input id="check2" onchange="filter()" type="checkbox">
                                                            <span class="check-input"></span>
                                                            <span class="check-label">Moderate</span>
                                                        </label>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <label for="check3" class="custom-checkbox">
                                                            <input id="check3" onchange="filter()" type="checkbox">
                                                            <span class="check-input"></span>
                                                            <span class="check-label">Quite Tough</span>
                                                        </label>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <label for="check4" class="custom-checkbox">
                                                            <input id="check4" onchange="filter()" type="checkbox">
                                                            <span class="check-input"></span>
                                                            <span class="check-label">Extremely Tough</span>
                                                        </label>
                                                    </li>
                                                
								  </div>
								</div>

							  </div>
							  <!-- Accordion card -->

							  <!-- Accordion card -->
							  <div class="card">

								<!-- Card header -->
								<div class="card-header" role="tab" id="headingThree3">
								  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
									aria-expanded="false" aria-controls="collapseThree3">
									<h5 class="mb-0">
									  TRIP LENGTH <i class="fas fa-angle-down rotate-icon"></i>
									</h5>
								  </a>
								</div>

								<!-- Card body -->
								<div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
								  <div class="card-body">
										<div class="slidecontainer">
										  <input type="range" min="0" max="30" step="5" value="3" class="slider" id="myRange" >
										  <input type="text" id="rangeValue">
										</div>
								  </div>
								</div>

							  </div>
							  <!-- Accordion card -->

							</div>
							<!-- Accordion wrapper -->
			</div>
			<div class="col">
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
		
		<div class="col">
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
		<div class="col">
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
var slider = document.getElementById("myRange");
  var output = document.getElementById("rangeValue");
  $(output).val(slider.value);
  slider.oninput = function() {
      $(output).val(slider.value);
  }
</script>
            <!-- Footer Start -->
	<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
  </body>
</html>