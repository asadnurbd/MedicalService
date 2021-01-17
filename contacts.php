
<?php 

include "connection.php";

if(isset($_POST['submit'])){

	$names=$_POST['name'];
	$emails=$_POST['email'];
	$phones=$_POST['phone'];
	$subjects=$_POST['subject'];
	$messages=$_POST['message'];
	
 
    echo "$names";
    echo "$emails";
    echo "$phones";
    echo "$subjects";
    echo "$messages";
    
 
    $contact="INSERT INTO `contacts`(`name`,`email`,`phone`,`subject`,`message`) VALUES('$names','$emails','$phones','$subjects','$messages')";
	 
	//  $data = $con->prepare($contact);
	$data=mysqli_query($con,$contact);
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
			<?php include"include/header.php";?>

				<!-- END HEADER -->




			<!-- GOOGLE MAP
			============================================= -->
		




			<!-- CONTACTS-1
			============================================= -->
			<section id="contacts-1" class="wide-60 contacts-section division">				
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Have a Any Feedback / Suggestions ? Get In Touch</h3>	

							<!-- Text -->
							<p>Have a a Any Feedback / Suggestions? Want to book an appointment for yourself? Give us a call
							   or send an email to contact the Mediqas.
							</p>
								
						</div>
					</div>

						
					<div class="row">	


		 				<!-- CONTACTS INFO -->
		 				<div class="col-md-5 col-lg-4">

		 					<!-- General Information -->
		 					<div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color">General Information</h5>
								<p>Dhaka,Bangladesh</p> 
								<p>Dhanmondi-32,Dhaka-1209</p>
								<p>Phone: 01689302597,01679599605</p>
								<p>Email: <a href="mailto:yourdomain@mail.com" class="blue-color">hello@medilife.com</a></p>
		 					</div>

		 					<!-- Working Hours -->
		 					<div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color">Working Hours</h5>
								<p>Saturday - Monday : 10:00 AM - 10:00 PM</p>
								<p>Tuesday - Thursday : 10:00 AM - 10:00 PM</p>
								<p>Friday –  : 8:00 AM - 10:00 PM</p> 
								
								
		 					</div>

						</div>	<!-- END CONTACTS INFO -->


						<!-- CONTACT FORM -->	
				 		<div class="col-md-7 col-lg-8">
				 			<div class="form-holder mb-40">
				 				<form action="" method="post" class="row ">
				                                            
					                <!-- Contact Form Input -->
					                <div id="input-name" class="col-md-12 col-lg-6">
					                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
					                </div>
					                        
					                <div id="input-email" class="col-md-12 col-lg-6">
					                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
					                </div>

					                <div id="input-phone" class="col-md-12 col-lg-8">
					                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
					                </div>	

					             

					                <div id="input-subject" class="col-lg-12">
					                	<input type="text" name="subject" class="form-control subject" placeholder="Subject*" required> 
					                </div>					                          
					                        
					                <div id="input-message" class="col-lg-12 input-message">
					                	<textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
					                </div> 
					                                            
					                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15 form-btn">  
					                	<button type="submit" class="btn btn-blue blue-hover submit" name="submit">Send Your Message</button> 
					                </div>
					                                                              
					                <!-- Contact Form Message -->
					                <div class="col-lg-12 contact-form-msg text-center">
					                	<div class="sending-msg"><span class="loading"></span></div>
					                </div>  
				                                              
				                </form> 

				 			</div>	
				 		</div> 	<!-- END CONTACT FORM -->	


				 	</div>	<!-- End row -->			  
 

				</div>	   <!-- End container -->		
			</section>	<!-- END CONTACTS-1 -->




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

		<!-- Google Map -->
		<script>
     		function initMap() {
     		var myLatLng = {lat: -37.817214, lng: 144.955925};
	        var map = new google.maps.Map(document.getElementById('gmap'), {
	          	center: myLatLng,
	          	zoom: 17,
	          	styles: [

	          		{ "elementType": "geometry", "stylers": [ { "color": "#ebe3cd" } ] }, 
		          	{ "elementType": "labels.text.fill", "stylers": [ { "color": "#523735" } ] }, 
		          	{ "elementType": "labels.text.stroke", "stylers": [ { "color": "#f5f1e6" } ] }, 
		          	{ 
		          		"featureType": "administrative",
		          		"elementType": "geometry.stroke", 
		          		"stylers": [ { "color": "#c9b2a6" } ]
		          	}, 
		          	{ 
		          		"featureType": "administrative.land_parcel", 
		          		"elementType": "geometry.stroke", 
		          		"stylers": [ { "color": "#dcd2be" } ] 
		          	}, 
		          	{ 
		          		"featureType": "administrative.land_parcel", 
		          		"elementType": "labels.text.fill", 
		          		"stylers": [ { "color": "#ae9e90" } ] 
		          	}, 
		          	{ 
		          		"featureType": "landscape.natural", 
		          		"elementType": "geometry", 
		          		"stylers": [ { "color": "#dfd2ae" } ] 
		          	}, 
		          	{ 
		          		"featureType": "poi", 
		          		"elementType": "geometry", 
		          		"stylers": [ { "color": "#dfd2ae" } ] 
		          	}, 
		          	{ 
		          		"featureType": "poi", 
		          		"elementType": "labels.text.fill", 
		          		"stylers": [ { "color": "#93817c" } ] 
		          	}, 
		          	{ 
		          		"featureType": "poi.park", 
		          		"elementType": "geometry.fill", 
		          		"stylers": [ { "color": "#a5b076" } ] 
		          	}, 
		          	{ 
		          		"featureType": "poi.park", 
		          		"elementType": "labels.text.fill", 
		          		"stylers": [ { "color": "#447530" } ] 
		          	}, 
		          	{ 
		          		"featureType": "road", 
		          		"elementType": "geometry", 
		          		"stylers": [ { "color": "#f5f1e6" } ] 
		          	}, 
		          	{ 
		          		"featureType": "road.arterial", 
		          		"elementType": "geometry", 
		          		"stylers": [ { "color": "#fdfcf8" } ] 
		          	}, 
		          	{ 
		          		"featureType": "road.highway", 
		          		"elementType": "geometry", 
		          		"stylers": [ { "color": "#f8c967" } ] 
		          	}, 
		          	{ 
		          		"featureType": "road.highway", 
		          		"elementType": "geometry.stroke", 
		          		"stylers": [ { "color": "#e9bc62" } ] 
		          	}, 
		          	{ 
		          		"featureType": "road.highway.controlled_access", 
		          		"elementType": "geometry", 
		          		"stylers": [ { "color": "#e98d58" } ] 
		          	}, 
		          	{ 
		          		"featureType": "road.highway.controlled_access", 
		          		"elementType": "geometry.stroke", 
		          		"stylers": [ { "color": "#db8555" } ] 
		          	}, 
		          	{ 
		          		"featureType": "road.local", 
		          		"elementType": "labels.text.fill", 
		          		"stylers": [ { "color": "#806b63" } ] 
		          	}, 
		          	{ 
		          		"featureType": "transit.line", 
		          		"elementType": "geometry", 
		          		"stylers": [ { "color": "#dfd2ae" } ] 
		          	}, 
		          	{ 
		          		"featureType": "transit.line", 
		          		"elementType": "labels.text.fill", 
		          		"stylers": [ { "color": "#8f7d77" } ] 
		          	}, 
		          	{ 
		          		"featureType": "transit.line", 
		          		"elementType": "labels.text.stroke", 
		          		"stylers": [ { "color": "#ebe3cd" } ] 
		          	}, 
		          	{ 
		          		"featureType": "transit.station", 
		          		"elementType": "geometry", 
		          		"stylers": [ { "color": "#dfd2ae" } ] 
		          	}, 
		          	{ 
		          		"featureType": "water", 
		          		"elementType": "geometry.fill", 
		          		"stylers": [ { "color": "#b9d3c2" } ] 
		          	}, 
		          	{ 
		          		"featureType": "water", 
		          		"elementType": "labels.text.fill", 
		          		"stylers": [ { "color": "#92998d" } ] 
	          		}	
	         	]
	        });
			var image = 'images/place-marker.png';
  			var beachMarker = new google.maps.Marker({
   				position: myLatLng,
    			map: map,
    			icon: image,
    			title: 'Hello World!'
  			});
			marker.setMap(map);
	      }
	    </script>

		<!-- To use this code on your website, get a free API key from Google. Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKl26cgtKhccOB_655pB3lOa2f44bMdp8&amp;callback=initMap" async defer></script>

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




</html>	