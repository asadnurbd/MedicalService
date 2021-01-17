<?php
 include "connection.php";

 if(isset($_POST['submit'])){

	$names=$_POST['name'];
	$emails=$_POST['email'];
	$phones=$_POST['phone'];
	$age=$_POST['age'];
	$sampling=$_POST['sampling'];
	$city=$_POST['city'];
	$nationality=$_POST['nationality'];
	$test=$_POST['test'];
	$description=$_POST['description'];
	
    $pcr_test="INSERT INTO `pcr_test`(`name`,`email`,`phone`,`age`,`sampling`,`city`,`nationality`,`test`,`description`) VALUES('$names','$emails','$phones','$age','$sampling','$city','$nationality','$test','$description')";
	 
	//  $data = $con->prepare($contact);
	$data=mysqli_query($con,$pcr_test);
	if($data){
		echo "Data Insert";
	}else{
	 echo "Not Insert";
	}
	
 
 }

?>


<!DOCTYPE html>

<html lang="en">




	
<head>

<?php include"include/head.php"?> 
<style>
	.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 2rem + 2px);
	padding: .475rem .75rem;
	margin: 10px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
	 
 </style> 
	
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




			<!-- DOCTOR BREADCRUMBS -->
			<section id="doctor-breadcrumbs" class="bg-fixed doctor-details-section division">	
				<div class="container">
					<div class="row">
						<div class="col-md-7 offset-md-5">
			 				<div class="doctor-data white-color">

			 					<!-- Name -->	
			 					<h2 class="h2-xs">Online appointment booking for coronavirus (CoViD-19) PCR test</h2>

							</div>
						</div>
					</div>   <!-- End row -->	
				</div>	  <!-- End container -->
			</section>	<!-- END DOCTOR BREADCRUMBS -->




			<!-- DOCTOR-1 DETAILS -->
			<section id="doctor-1-details" class="doctor-details-section division">	
				<div class="container">
					<div class="row">


						<!-- DOCTOR PHOTO -->
						<div class="col-md-5">
			 				<div class="doctor-photo mb-40">

			 					<!-- Photo -->	
			 					<img class="img-fluid" src="img/pcr.jpg" alt="doctor-foto">

			 						<!-- End Doctor Info -->

								<!-- Doctor Contacts -->	
			 					<div class="doctor-contacts text-center">
				 					<h4 class="h4-xs"><i class="fas fa-mobile-alt"></i>01679599605</h4>
									<h4 class="h4-xs blue-color"><i class="fas fa-envelope-open-text"></i> 
										<a href="mailto:yourdomain@mail.com" class="blue-color">hello@medservice.com</a>
									</h4>
								</div>

								<!-- Buttons -->
								<div class="doctor-photo-btn text-center">
									<a href="probability.php" class="btn btn-md btn-blue blue-hover">Probability Test</a>
								</div>

			 				</div>
			 			</div>	<!-- END DOCTOR PHOTO -->


						 <!-- DOCTOR'S BIO -->
						 
							 <div class="col-md-12">
							<div class="doctor-bio">
							<h5 class="h5-md blue-color">you can place your order and get your appointments for testing even on weekends! </h5>


			 					<!-- Text -->	
						   		<p>
								   We constantly process group PCR test demands, so you can place your order and get your appointments for testing even on weekends! From now on online booking is available for individuals as well as companies and families to make the process easier and faster.
								   </p>
								   <ul  style="padding:2%;">
									   <li style="padding:2%;">* those persons who live in the same residence where a confirmed coronavirus infected person inhabits</li>
									   <li style="padding:2%;">*persons who have got in close contact with a confirmed coronavirus infected person</li>
									   <li style="padding:2%;">*persons who have stayed in the same indoor location (room, office etc.) with a confirmed coronavirus infected person within 2 meters for more than 15 minutes</li>
									  
                                </ul>
								
							</div>
						</div>
							 <div class="col-md-12">
							<div class="doctor-bio">
							<h5 class="h5-md blue-color">In case you order invidual PCR assay: </h5>

						   	

<!-- Option #1 -->
<div class="box-list m-top-15">							
	<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
	<p class="p-sm">fee of test should be paid at the reception of our clinic before your appointment for PCR assay</p>							
</div>

<!-- Option #2 -->
<div class="box-list">	
	<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
	<p class="p-sm"> before submitting the order form, please always check if your e-mail address field is filled in correctly. If your e-mail address is mistyped, we will not be able to send the confirmation and test results on time.
	 </p>				
</div>

<p>
In case PCR assay is taken on Friday (or on the last weekday) the test result will be prepared on the next day if extra fee of 10 000 HUF for weekend evidence is paid. 
   </p>
<p>
At our Budapest clinics, the result – based on prior experience – in the case of PCR tests taken before 14:00, is completed by the end of the next working day. For samples taken after 14:00, the result will be sent by the end of the 2nd working day after sampling.
</p>  

<p>
At our country clinics, in case of non-close contact, the result of the test is completed by the end of the next working day after sampling, while in case of close contact, by the end of the 2nd working day after sampling.
</p>

								
							</div>
						</div>
					
						 
							<!-- END DOCTOR BIO -->


					</div>    <!-- End row -->	
				</div>	   <!-- End container -->
			</section>  <!-- END DOCTOR-1 DETAILS -->




			<!-- TESTIMONIALS-2
			============================================= -->
			<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Please select first if you are interested in Individual Test</h3>	

							<!-- Text -->
							
										
						</div> 
					</div>	 <!-- END SECTION TITLE -->
				
					
					<!-- TESTIMONIALS CONTENT -->
					<div class="row">
										
						

						
							<!-- END TESTIMONIAL #9 -->

							<div class="col-lg-12">
				 			<div class="txt-block pr-30">

				 			

								<!-- APPOINTMENT FORM -->
								<div id="appointment-form-holder" class="text-center">
									<form  action="" method="post" class="row " >
 
	           
						                <!-- Contact Form Input -->
						                
				                                            
						                <!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-3">
						                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required=""> 
						                </div>
						                        
						                <div id="input-email" class="col-lg-3">
						                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required=""> 
						                </div>

						                <div id="input-phone" class="col-lg-3">
						                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required=""> 
										</div>
						                <div id="input-age" class="col-lg-3">
						                	<input type="tel" name="age" class="form-control phone" placeholder="Enter Your  Age*" required=""> 
										</div>
										<div id="input-sampling" class="col-lg-4">
						                	<input id="datetimepicker" type="text" name="sampling" class="form-control date" placeholder="Preferred day of sampling*" required=""> 
						                </div>
										
										<!-- <div class="col-lg-3">
										<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
										</div> -->

										<div id="input-City" class="col-lg-4" >
						                	<input type="tel" name="city" class="form-control phone" placeholder="Enter Your City*" required=""> 
										</div>
										<div id="input-nationality" class="col-lg-4">
						                	<input type="tel" name="nationality" class="form-control phone" placeholder="Enter Your Nationality*" required=""> 
										</div>
																                          
										

										<label class="ml-4 pb-2 pt-2" >Regarding the patients stated below, have anyone met in person a confirmed coronavirus infected person?</label> <br>	


										 <div class=" row col-lg-12 ml-2 pb-2">
											<div class="ml-lg-4">
											<input class="form-check-input" type="radio" name="test" id="exampleRadios1" value="Yes" checked required>
											<label class="form-check-label" for="exampleRadios1">
												Yes
                                            </label>

											</div>
											<div class="ml-lg-4">
											<input class="form-check-input" type="radio" name="test" id="exampleRadios1" value="No" checked>
											<label class="form-check-label" for="exampleRadios1">
												No 
                                            </label>
										
										   </div>
										</div>						                          
						                        
						                <div id="input-message" class="col-lg-12 input-message">
						                	<textarea class="form-control message" name="description" rows="6" placeholder="Your Message ..."></textarea>
						                </div> 
						                                            
						                <!-- Contact Form Button -->
						                <div class="col-lg-12 form-btn">  
						                	<button type="submit" class="btn btn-blue blue-hover submit" name="submit">Submit</button> 
						                </div>
						                                                              
						                <!-- Contact Form Message -->
						                <div class="col-lg-12 appointment-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>  
					                                              
					                </form> 

								</div>	<!-- END APPOINTMENT FORM -->

								<!-- Text -->
							
								
				 				
				 			</div>
				 		
						</div>									
					</div>	<!-- END TESTIMONIALS CONTENT --> 
							
						
				</div>	   <!-- End container -->
			</section>	 <!-- END TESTIMONIALS-2 -->

	


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

		
		<!-- End Google Analytics -->

		<script src="js/changer.js"></script>
		<script defer src="js/styleswitch.js"></script>	
		

	</body>




</html>	