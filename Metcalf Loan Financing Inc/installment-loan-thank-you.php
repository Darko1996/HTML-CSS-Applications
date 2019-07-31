<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="installment loan, Wisconsin, installment loan Wisconsin, installment in Wisconsin, installment loan in Milwaukee, quick cash Milwaukee" />
    <title> Metcalf Loan Financing Inc. | Thank you</title>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/style.min.css" rel="stylesheet">

    <style>
        .navbar-bg .nav-link {
            color: #333 !important;
        }
        section img{
            width: 100% !important;
        }
        .navbar-toggler:not(:disabled):not(.disabled) {
            display: none;
        }
        @media (max-width:768px){
            .navbar-light .navbar-brand {
                margin: auto;
            }
        }
    </style>
</head>

<body id="page-top ">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-sticky" style="display: contents; ">
        <div class="container-fluid" style="padding: 0 100px; box-shadow: 0 0 12px black;">

            <a class="navbar-brand" href="../index.html">
            <picture data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <source srcset="../images/logo.webp" type="image/webp">
                    <source srcset="../images/logo.png" type="image/png">
                    <img src="../images/logo.png" alt="image" style="width: 200px">
            </picture>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                        <a class="nav-link pocetna" href="../index.html">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="section" style="margin: 100px 0;">
    <div class="container thank-you">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center thank-msg">Thank you for your application</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="text-align: left; color: black;">
				
					<p class="large"><strong class="green-amout"><?php echo $_GET['customerName']; ?></strong> , Your Application Has Been Submitted</p>
            
					<?php  if ($_GET['state'] != 'Idaho' or $_GET['state'] != 'Wisconsin' or $_GET['Texas'] != 'Idaho') { ?>
						<?php if ($_GET['amount'] != 0 || $_GET['amount'] != "") { ?>
							<p class="msg-desc">You have been pre-approved for up to <strong class="green-amout">$2,500.00</strong><?php /*  <strong class="green-amout">$<?php echo $_GET['amount']; ?></strong> */?>
						<?php } else { ?>
							<p class="msg-desc">Sorry, we are currently unable to give you a quote. Please call us to find out more. </p>
						<?php } ?>
						
						<?php if ($_GET['amount'] != 0 || $_GET['amount'] != "") { ?>
							<p><strong> Reference ID: </strong> <?php echo $_GET['loanappid']; ?>
						<?php } ?>
					<?php } ?>
					
                    <p class="call-box">
						<p><strong>In a hurry? Call us: </strong></p>
						<?php
						if($_GET['state'] != '') {
							$personal_phone = '';
							if($_GET['state'] == 'Idaho' or $_GET['state'] == 'Wisconsin' or $_GET['Texas'] == 'Idaho') {
								$personal_phone = '409-203-7269';
							} else {
								$personal_phone = '409-203-7269';
							}
							?>
								<a href="tel:<?php echo $personal_phone; ?>" class="call-now" data-phone="<?php echo $personal_phone; ?>">
									<img  src="<?php echo $actual_link; ?>/images/personal-phone.png" style="width: auto !important;"> <span><?php echo $personal_phone; ?></span>
								</a>
						<?php 
						}
						?>
						
					</p>
					
                </div>
                <div class="col-md-6 thank-you text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="icon-round"> <i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="text">What Happens Next?</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-description">You will receive a call from one of our lending
                            specialists to finalize your application - usually within 15 minutes! <br> Our specialist
                            are available from 9:00am - 7:00pm Central Time.</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="icon-round"> <i class="fa fa-clock-o" aria-hidden="true"></i></div>
                            <div class="text"> Up Late?</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-description">No worries! Overnight applications get first priority.
                            One of our lending specialists will contact you first thing next morning.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="blue">
        <div class="container-fluid">
            <div class="row footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mr-auto text-center">
                                <a class="footer-logo" href="../index.html">
                                <picture data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <source srcset="../images/logo-footer.webp" type="image/webp">
                                        <source srcset="../images/logo-footer.png" type="image/png">
                                        <img class="lazy" src="../images/logo-footer.png" alt="image"
                                            style="width: 100px">
                                    </picture>
                                </a>
                                <p class="address">9004 W Metcalf Place Milwaukee WI 53222</p>
                            </div>
                        </div>
                        <div class="col-md-9 text-center align-self-center">
                            <ul class="list-inline">
                                <li class="list-inline-item "> <a href="../pages/terms-and-conditions.html ">Terms And
                                        Conditions</a></li>
                                <li class="list-inline-item "></li>
                                <li class="list-inline-item "> <a href="../pages/wireless-policy.html ">Wireless
                                        Policy</a></li>
                                <li class="list-inline-item "></li>
                                <li class="list-inline-item "> <a href="../pages/privacy-policy.html ">Privacy Policy
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                            Copyright © Metcalf Loan Financing Inc. 2019. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../jquery/jquery.lazy.min.js" defer></script>
    <script src="../jquery/script.js" defer></script>

    <!-- JavaScript for App form -->
    <script type="text/javascript" src="../jquery/jquery.validate.min.js" defer></script>
    <script src="../jquery/jquery.placeholder.min.js" defer></script>
    <script src="../jquery/jquery.mask.min.js" defer></script>
    <script src="../jquery/form-script.min.js" defer></script>

</body>

</html>