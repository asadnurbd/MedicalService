

<?php 

include "connection.php";

if(isset($_POST['submit'])){

	$names=$_POST['name'];
	$emails=$_POST['email'];
	$ages=$_POST['age'];
	$phones=$_POST['phone'];
	$addresses=$_POST['address'];
	$districts=$_POST['district'];
	$groups=$_POST['group'];
	$genders=$_POST['gender'];
 
    echo "$names";
    echo "$emails";
    echo "$ages";
    echo "$phones";
    echo "$addresses";
    echo "$districts";
    echo "$groups";
    echo "$genders";
 
	$blood="INSERT INTO `donate_blood`(`name`,`email`,`age`,`phone`,`address`,`district`,`group`,`gender`) VALUES('$names','$emails','$ages','$phones','$addresses','$districts','$groups','$genders')";
	 
	// $data = $con->prepare($blood);
	$data=mysqli_query($con,$blood);
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
						<div class="col-lg-12 pt-2 pt-10offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">who can donate blood? </h3>	

							<!-- Text -->
							<p class="steelblue-color col-lg-10  " style="margin-left:100px; padding:1%">
							To donate blood or platelets, you must be in good general health, weigh at least 110 pounds, and be at least 16 years old. Parental consent is required for blood donation by 16 year olds; 16 year olds are NOT eligible to donate platelets. No parental consent is required for those who are at least 17 years old.
</p>
								
						</div>
					<h4 class="h3-md steelblue-color ml-lg-4 ">Please Fill Up The Form :</h4>	

					</div>


					<div class="row">	

				

		 				

						<!-- CONTACT FORM -->	
				 		<div class="col-md-7 col-lg-12 pt-5">
				 			<div class="form-holder mb-40">
				 				<form  method="POST" class="row " id="form-content">
				                                            
					                <!-- Contact Form Input -->
					                <div id="input-name" class="col-md-12 col-lg-4">
					                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
									</div>
									<div id="input-email" class="col-md-12 col-lg-4">
					                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
					                </div>
									
					                <div id="input-age" class="col-md-12 col-lg-4">
					                	<input type="text" name="age" class="form-control name" placeholder="Enter Your Age*" required> 
									</div>
									
									<div id="input-phone" class="col-md-12 col-lg-6">
					                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
									</div>
					                        
					                <div id="input-address" class="col-md-12 col-lg-6">
					                	<input type="text" name="address" class="form-control " placeholder="Enter Your Address*" required> 
					                </div>
					                <div id="input-district" class="col-md-12 col-lg-6">
					                	<input type="text" name="district" class="form-control " placeholder="Enter Your District*" required> 
									</div>
									

					                
					                
									
									<div id="input-patient" class="col-md-12 col-lg-6 input-patient ">
					                    <select id="inlineFormCustomSelect3" name="group" class="custom-select patient form-control" required="">
					                        <option>Enter Your Blood Group*</option>
											<option value="A+">A+</option>
											<option value="AB+">AB+</option>
											<option value="A-">A-</option>
											<option value="AB-">AB-</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>
											<option value="B+">B+</option>
											<option value="B-">B-</option>
					                    </select>
									</div>
									
					             	
					                <div id="input-phone" class="col-md-12 col-lg-4 ml-2 mt-2">
					                	<div class="row ml-lg-1">
											<p>Gender :</p>
											<div class="ml-lg-4">
											<input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked required>
											<label class="form-check-label" for="exampleRadios1">
												Male
                                            </label>

											</div>
											<div class="ml-lg-4">
											<input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="female" checked>
											<label class="form-check-label" for="exampleRadios1">
												Female 
                                            </label>

											</div>		
										</div>
									</div>	
									
								
		                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15 form-btn ml-2">  
					                	<input type="submit" class="btn btn-blue blue-hover submit" name="submit" value="Send Your Message">
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

			<div id="" class="division" style="background-color:#0e8eab; text-align: center;">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">

							
								<!-- Title -->
								<h4 class="h4-sm  text-white">Seek Blood </h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>

			<section id="pricing-2" class="pb-60 pricing-section division">
				<div class="container">	
					<div class="row pricing-row">


						<!-- PRICING TABLE #1 -->
						<div class="col-lg-12">

							<!-- Plan Title  -->
							<h5 class="h5-md steelblue-color pt-5">Available Blood Donator List :</h5>

							<div class="pricing-table mb-40">								
								<table class="table table-hover">
									<thead>
									    <tr>
									      	<th scope="col">SN</th>
									      	<th scope="col">Name</th>
									      	<th scope="col">District</th>
									      	<th scope="col">Blood Group</th>
									      	<th scope="col">Age</th>
									      	<th scope="col">Contact Number</th>
									      
									    </tr>
									</thead>
									<tbody>
										<?php 
										 $show="SELECT* from donate_blood";
										 $result=$con->query($show);
										 $i=1;
										 if($result->num_rows>0){
											 while($row=$result->fetch_array()){
																			
										
										
									?>
									    <tr>
									      	<th scope="row"><?php echo $i++;?></th>
											 <td><?php echo $row["name"];?></td>
											 <td><?php echo $row["district"];?></td>
									     	<td><?php echo $row["group"];?></td>
									     	<td><?php echo $row["age"];?></td>
									     	<td><?php echo $row["phone"];?></td>
									     	
									     	
										</tr>
										<?php }}?>
									   
									</tbody>
								</table>
							</div>
						</div>	<!-- END PRICING TABLE #1 -->

	
					</div>	<!-- End row -->


				


				</div>    <!-- End container -->		
			</section>




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

		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKl26cgtKhccOB_655pB3lOa2f44bMdp8&amp;callback=initMap" async defer></script>


		<script src="js/changer.js"></script>
		<script defer src="js/styleswitch.js"></script>	
		

	</body>




</html>	