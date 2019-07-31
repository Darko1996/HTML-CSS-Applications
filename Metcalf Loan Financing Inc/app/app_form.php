<html>
	<head>
		<title>Installment Loan</title>
		<link href="../css/form-style.css" type="text/css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.mask.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/form.js?v=1241"></script>
	</head>

	<body>
		<div class="app-container">
			<form id="personal" name="personal" method="post" action="thank-you.php" target="_parent" class="personal">
				<p class="title">Get Cash Today</p>
				<div class="field-box select">
					<select class="loamt ezinput_side2" name="amount" id="amount" type="text" required> 
						<option value="" selected disabled>Loan Amount</option>
						<option value="500">$500.00 or less</option>
						<option value="1000">$1000.00</option>
						<option value="1500">$1500.00</option>
						<option value="2000">$2000.00</option>
						<option value="2500">$2500.00</option>
						<!-- <option value="3000">$3000.00</option>
						<option value="3500">$3500.00</option>
						<option value="4000">$4000.00</option>
						<option value="4500">$4500.00</option>
						<option value="5000">$5000.00</option>
						<option value="5500">$5500.00</option>
						<option value="6000">$6000.00</option>
						<option value="6500">$6500.00</option>
						<option value="7000">$7000.00</option>
						<option value="7500">$7500.00</option>
						<option value="8000">$8000.00</option>
						<option value="8500">$8500.00</option>
						<option value="9000">$9000.00</option>
						<option value="9500">$9500.00</option>
						<option value="10000">$10,000.00+</option> -->
					</select>
				</div>
				<div class="field-box">
					<input type="text" id="name" name="name" class="ezinput_side2"  placeholder="Full Name"  required/>
				</div>
				<div class="field-box">
					<input type="text" id="phone" name="phone" class="ezinput_side2" placeholder="Phone" maxlength="15" required/>
				</div>
				<div class="field-box">
					<input type="text" id="email" name="email" class="ezinput_side2" placeholder="Email" required/>
				</div>
				<div class="field-box">
					<input type="text" id="zip" name="zip" class="ezinput_side2" placeholder="Zipcode" maxlength="5" required/>
				</div>
				<div class="field-box terms-box">
					<label class="checkbox">Yes, I would like to receive a quote on how much CASH I can get on my loan as well as information 
					on other products and/or services from ezDinero Solutions, Inc. and its affiliates via text message and email. 
					By making this selection, I understand and agree I will receive ezDinero Solutions, Inc. text messages at the 
					mobile number provided.  I know my selection is not necessary to apply for and/or use our services.
						<input type="checkbox" name="sms_opt_in" value="yes" >
						<span class="checkmark"></span>
					</label>
				</div>
				<div class="field-box terms-box">
					<label class="checkbox">I have read and agree to the <a href="./pages/wireless-policy/" target="_blank"> Wireless Policy</a>, 
						<a href="../application-privacy-policy/" target="_blank">Privacy Policy</a> and 
						<a href="../application-terms-conditions/" target="_blank">Terms and Conditions</a>.
							<input type="checkbox" name="agree" id="agree" value="yes" required>
							<span class="checkmark"></span>
					</label>
				</div>
				<input type="hidden" id="city" name="city" />
				<input type="hidden" name="state" id="state" />
				<input type="hidden" id="referrer" name="referrer" value="" />
				<input type='hidden' name='loan_type' value='in' />
				<input type='hidden' name='json' value='1' />
				<input type="hidden" id="app_page" name="app_page" value="">
				<div class="field-box">
					<input type="submit" value="Submit" class="blue2 small" name="submit" />
				</div>
			</form>
		</div>
	</body>
</html> 

