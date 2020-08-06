<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="CSS/mystyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    
    <title>Adventure Kora</title>
  </head>
  <body>
   <!-- header: logo and navigation-menu -->
   <?php 
    include('HeaderFooter/header.php'); 
    ?>
    <!-- end header -->
    <div class="container">
		<div class="enquire-form-header">
			<div class="row" style="margin-top:40px">
				<h2 class="h1-responsive font-weight-bold text-center" style="margin-left:500px">Enquire</h2><br><hr><br>
			
				<p class="text-center w-responsive mx-auto mb-5"><h4> Fill In The Form <small> to submit your request to plan your holiday package. We will get back to you within one business day via e-mail.</small></h4></p>
								
	            </div>
			</div><br>

		<div class="enquiryForm">
			<form action="" method="post">
				<div class="row">
					<div class="col">
						<h2>Personal Information</h2><hr>
						<p class="hint-text">Please fill the following details.</p>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label for="firstname">First Name</label>
									<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
								</div>
								<div class="col">
								<label for="lastname">Last Name</label>
								<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
								</div>
							</div>        	
						</div>
						<div class="form-group">
						<label for="email">E-mail</label>
							<input type="email" class="form-control" name="email" placeholder="Email" required="required">
						</div>
						
						<div class="form-group">
							<label for="phoneNumber">Phone Number</label>
							<input type="tel" class="form-control" name="tel" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="required">

						</div>
						
						 <div class="form-group ">
							<label class="control-label  requiredField" for="date"> Trip Duration
								<span class="asteriskField"><div class="input-group-addon">
										<i class="fa fa-calendar "> </i>
									</div></span>
							</label>
							<div class="input-group">
									
									<input class="form-control" id="Fromdate" name="date" placeholder="MM/DD/YYYY" type="text"/> TO
									<input class="form-control" id="Todate" name="date" placeholder="MM/DD/YYYY" type="text"/>
							</div>
						</div>
						<div class="form-group">
							<label for="numberOfAdults">Number of Adults</label>
								<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="enquiryFormCustomSelect">
									<option selected>Choose...</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="more">more..</option>
							</select>
					</div>
					<div class="form-group">
							<label for="numberOfKids">Number of Kids</label>
								<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="enquiryFormCustomSelect">
									<option selected>Choose...</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
							</select>
					</div>
					 <div class="form-group">
							<label for="city">City / Town</label>
							<input type="text" class="form-control" name="cite_name" placeholder="City/Town" required="required">
					</div>
                <!-- region input-->
                <div class="form-group">
                    <label class="control-label">State / Province / Region</label>
                   <input type="text" class="form-control" name="state_name" placeholder="State/Province/Region" required="required">
                </div>
               
                <!-- country select -->
                <div class="form-group">
                    <label for="country">Country</label>
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="enquiryFormCustomSelect">
                            <option value="" selected="selected">(please select a country)</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia and Herzegowina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote d'Ivoire</option>
                            <option value="HR">Croatia (Hrvatska)</option>
                            <option value="CU">Cuba</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="TP">East Timor</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="FX">France, Metropolitan</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard and Mc Donald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran (Islamic Republic of)</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macau</option>
                            <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint LUCIA</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia (Slovak Republic)</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SH">St. Helena</option>
                            <option value="PM">St. Pierre and Miquelon</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands (British)</option>
                            <option value="VI">Virgin Islands (U.S.)</option>
                            <option value="WF">Wallis and Futuna Islands</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="YU">Yugoslavia</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                
					
					</div>
					<div class="col">
						<h2>Preview Pakages</h2><hr>
							<p class="hint-text">Your selected pakage.</p>
							<br>
							<br>
							<br>
							<br>
							<br>
							<div class="panel-body">
                                <strong>What more activities do your prefer?</strong><br><br>
                                    <ul class="row side-list check-list" style="list-style-type: none">
                                        <li class="col-md-6">
                                            <label for="check1" class="custom-checkbox">
                                                <input id="check1" type="checkbox" name="activities[]" value="Trekking">
                                                <span class="check-input"></span>
                                                <span class="check-label">Trekking</span>
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <label for="check2" class="custom-checkbox">
                                                <input id="check2" type="checkbox" name="activities[]"
                                                value="Mount Biking">
                                                <span class="check-input"></span>
                                                <span class="check-label">Mount Biking</span>
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <label for="check3" class="custom-checkbox">
                                                <input id="check3" type="checkbox" name="activities[]"
                                                value="Wildlife Safari">
                                                <span class="check-input"></span>
                                                <span class="check-label">Wildlife Safari</span>
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <label for="check4" class="custom-checkbox">
                                                <input id="check4" type="checkbox" name="activities[]"
                                                value="Bungee Jump">
                                                <span class="check-input"></span>
                                                <span class="check-label">Bungee Jump</span>
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <label for="check5" class="custom-checkbox">
                                                <input id="check5" type="checkbox" name="activities[]"
                                                value="Paragliding">
                                                <span class="check-input"></span>
                                                <span class="check-label">Paragliding</span>
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <label for="check6" class="custom-checkbox">
                                                <input id="check6" type="checkbox" name="activities[]"
                                                value="Cultural Tours">
                                                <span class="check-input"></span>
                                                <span class="check-label">Cultural Tours</span>
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <label for="check7" class="custom-checkbox">
                                                <input id="check7" type="checkbox" name="activities[]" value="Wellness">
                                                <span class="check-input"></span>
                                                <span class="check-label">Wellness</span>
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <label for="check8" class="custom-checkbox">
                                                <input id="check8" type="checkbox" name="activities[]"
                                                value="Volunteering">
                                                <span class="check-input"></span>
                                                <span class="check-label">Volunteering</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="order-block">
                                    <h2 class="small-size">Additional Notes</h2>
                                    <div class="wrap">
                                        <div class="hold">
                                            <label for="txt">Your Comment</label>
                                            <textarea style="height:300px" id="txt" name="message" class="form-control"
                                            placeholder="Please enter any additional information here, eg. food/drug requirements etc."></textarea>
                                        </div>
                                        
                                    </div>
								</div>
								<div class="text-center text-md-left" style="padding:35px 40px">
								<a><button type="button" class="btn btn-primary btn-block btn-rounded" onclick="">Submit Enquiry</button></a>
							</div>

				</div>
			</form>
			</div>
		</div>	
		</div><br>
		<br>
		<hr>
		<div class="container">
		     <div class="row">
			    <br>
			</div>
		</div>
	</div>
	<!-- Footer Start -->
	<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
	<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
  </body>
</html>
