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
  <div class="container">
    <br />
    <br />
    <br />

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        This section contains a wealth of information, related to <strong>Nepal Travelling</strong>. If you cannot find an answer to your question, 
        make sure to <a href="ContactUs.php">contact us</a>. 
    </div>

    <br />

    <div class="" id="accordion">
        <div class="faqHeader"><h2>General questions</h2></div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">When's the best time to visit Nepal?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="card-block">
                    The peak seasons for trekking are the spring (Mar to May) and the fall (Sep to Nov) when you'll have clear skies and superb mountain views.
          Keep in mind, this is also when the trails are most crowded (although there are ways to avoid the crowds).
          The winter (Dec to Feb) and summer (Jun to Aug) months are also great times to visit—although weather can be unpredictable.
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">How do I get my visa for Nepal?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="card-block">
                    For most nationalities, you can get your visa on arrival in Kathmandu. It takes around 45 minutes and is the most convenient way to get your visa.
          You can also apply for a visa in advance from a local Nepali consulate in your country if you'd like to have everything arranged in advance.
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">How much luggage can I take on domestic flights?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="card-block">
                   For mountain flights, you're allowed 5 kg. for carry-on and 10 kg. for checked-in luggage. For non-mountain sector flights, the check-in allowance increases to 20-25 kg
                </div>
            </div>
        </div>

       
    </div>

 </div>
            <!-- Footer Start -->
	<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
  </body>
</html>