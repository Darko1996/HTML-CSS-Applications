jQuery(document).ready(function($) {
	// Domain
	var 
	  url = window.location,
	  site_address = url.protocol+"//"+url.hostname;
	
	$('#referrer').val(site_address);
	
	// Parent of iframe 
	$("#app_page").val(parent.document.URL);
	
	// Phone number
	$("#phone").mask('+1(000) 000-0000');

	// Zip Code
	function ajax_call(url) {
		$.ajax({
			url: url,
			jsonp: "callback",
			dataType: "jsonp",
			data: {
				format: "json"
			},
			success: function(response) {
				$('#city').val(response.city);
				$('#state').val(response.state_name);
			}
		});
	}
	$("#zip").on('change keyup', function() {
		if ($("#zip").val().length > 4) {
			var url = "https://www.ezleadtracker.com/loantrack2/remote/zipcode/zip/zipcode/" + $("#zip").val();
			ajax_call(url)
		}
	});
	
	$("#personal").validate({
		rules: { 
			name:  { required: true, nameFormat:    true, minlength: 2 },
			phone: { required: true, usPhoneFormat: false, maxlength:16 },
			zip:   { required: true, minlength:     5 },
			email: { required: true, email:         true },
			agree: "required"
		},
		messages: {
			name:  "Please, enter your First and Last name",
			zip:   "Please enter your zip",
			phone: "Please enter your phone number",
			email: "Please enter a valid email address",
			agree: "Please accept our policy"
		}
	});
	$.validator.addMethod( "nameFormat", function(value, element) {
			if (this.optional(element) || value != "[test]") { // bypass [test]
				return this.optional(element) || /^[A-Za-z]+[\s|,][A-Z'a-z']{1,19}$/.test(value);
			} else
				return true;
		}, "Please, enter your First and Last name"
	);
	$.validator.addMethod("usPhoneFormat", function(value, element) {
		return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
	}, "Enter a valid phone number.");
});