<!DOCTYPE html>

<html lang="en">




	
<head>

<?php include"include/head.php"?>
	
	</head>




	<body>




		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loader-wrapper">
			<div id="loader"><div class="loader-inner"></div></div>
		</div>




	



		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<?php include"include/header.php"?>
				<!-- END HEADER -->




			<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Probability Test</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Probability Test</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	




			<!-- CONTACTS-2
			============================================= -->
			<section id="contacts-2" class="wide-60 contacts-section division">				
				<div class="container">
					<div class="row">	


						<!-- CONTACTS INFO -->
				 		<div class="col-lg-7">

				 			<!-- Title-->
				 			<h4 class="h4-md steelblue-color">Predict COVID-19 test result.</h4>

				 			<!-- Text-->
				 			<p class="contact-notice">
							 On this website you can find information and guidance from WHO regarding the current outbreak of coronavirus disease (COVID-19) that was first reported from Wuhan, China, on 31 December 2019. Please visit this page for daily updates.
				 			</p>

				 			<div class="row">


				 				<!-- CITY CONTACT DATA -->
				 				<div class="col-lg-12">

							<!-- Plan Title  -->
							<h5 class="h5-md steelblue-color">Testing Result</h5>

							<div class="pricing-table mb-40">								
								<table class="table table-hover">
									<thead>
									    <tr>
									      	<th scope="col">#</th>
									      	<th scope="col">Result</th>
									      	<th scope="col">Probability</th>
									    </tr>
									</thead>
									<tbody>
									    <tr>
									      	<th scope="row">1</th>
									     	<td>Predicted probability</td>
									      	<td> <span>75%</span></td>
									    </tr>
									    
									   
									</tbody>
								</table>
							</div>
						</div>


				 			

				 				




							</div>
						</div>	<!-- END CONTACTS INFO -->


						<!-- CONTACT FORM -->	
				 		<div class="col-lg-5">
				 			<div class="form-holder mb-40">
								<form name="contactForm" class="row contact-form">
				                                            
					                <!-- Contact Form Input -->
					                <div id="input-age" class="col-md-12">
					                	<input type="text" name="age" class="form-control name" placeholder="Enter Your Age*" required> 
									</div>

									<div id="input-ethnicity" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="ethnicity" class="custom-select patient" required>
					                        <option value="">Ethnicity *</option>
											<option>Middle East</option>
											<option>Europe </option>
											<option>Asia</option>
					                    </select>
					                </div>
									<div id="input-patient" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="gender" class="custom-select patient" required>
					                        <option value="">Gender *</option>
											<option>Male</option>
											<option>Female </option>
											
					                    </select>
					                </div>
									<div id="input-patient" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="gender" class="custom-select patient" required>
					                        <option value="">Smoking *</option>
											<option>Yes</option>
											<option>No </option>
											
					                    </select>
					                </div>
									<div id="input-influenza" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="influenza" class="custom-select patient" required>
					                        <option value="">Influenza vaccine *</option>
											<option>Yes</option>
											<option>No </option>
											
					                    </select>
					                </div>
									<div id="input-symptoms" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="symptoms" class="custom-select patient" required>
					                        <option value="">Symptoms and risks *</option>
											<option>Fever</option>
											<option>Exposed to the covid-19</option>
											<option>Heart attack</option>
											<option>Cold</option>
											<option>Vomiting </option>
											
					                    </select>
					                </div>
					                        

					                <!-- Form Select -->
					                <div id="input-patient" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" required>
					                        <option value="">Have You Visited Us Before for covid-19?*</option>
											<option>New Patient</option>
											<option>Returning Patient</option>
											
					                    </select>
					                </div>
					               

					             					                          
					                        
					                <div id="input-message" class="col-md-12 input-message">
					                	<textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
					                </div> 
					                                            
					                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15 form-btn">  
					                	<button type="submit" class="btn btn-blue blue-hover submit">Probability Calculator</button> 
					                </div>
					                                                              
					                <!-- Contact Form Message -->
					                <div class="col-md-12 contact-form-msg text-center">
					                	<div class="sending-msg"><span class="loading"></span></div>
					                </div>  
				                                              
				                </form> 
				 			</div>	
				 		</div> 	<!-- END CONTACT FORM -->	


				 	</div>	<!-- End row -->			  
				</div>	   <!-- End container -->		
			</section>	<!-- END CONTACTS-2 -->






			<!-- FOOTER-1
			============================================= -->
			<?php include"include/footer.php"?>
				<!-- END FOOTER-1 -->




		</div>	<!-- END PAGE CONTENT -->



		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.stellar.min.js"></script>	
		<script src="js/menu.js"></script>
		<script src="js/sticky.js"></script>
		<script src="js/jquery.scrollto.js"></script>
		<script src="js/materialize.js"></script>	
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/hero-form.js"></script>
		<script src="js/contact-form.js"></script>
		<script src="js/comment-form.js"></script>
		<script src="js/appointment-form.js"></script>
		<script src="js/jquery.datetimepicker.full.js"></script>
		<script src="js/jquery.validate.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/wow.js"></script>	
	
		<!-- Custom Script -->		
		<script src="js/custom.js"></script>

		<script> 
			new WOW().init();
		</script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
		<!-- End Google Analytics -->

		<script src="js/changer.js"></script>
		<script defer src="js/styleswitch.js"></script>	
		

	</body>




<!-- Mirrored from jthemes.net/themes/html/medservices/files/contacts-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 04:10:30 GMT -->
</html>	