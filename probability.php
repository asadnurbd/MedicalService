<?php
 include "connection.php";

 if(isset($_POST['submit'])){

	$age=$_POST['age'];
	$ethnicity=$_POST['ethnicity'];
	$gender=$_POST['gender'];
	$smoking=$_POST['smoking'];
	$influenza=$_POST['influenza'];
	$symptoms=$_POST['symptoms'];
	$patient=$_POST['patient'];
	$message=$_POST['message'];
	
	
    $probability_test="INSERT INTO `probability_test`(`age`,`ethnicity`,`gender`,`smoking`,`influenza`,`symptoms`,`patient`,`message`) VALUES('$age','$ethnicity','$gender','$smoking','$influenza','$symptoms','$patient','$message')";
	
	 
	//  $data = $con->prepare($contact);
	$data=mysqli_query($con,$probability_test);
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

#contacts-2 .form {
    padding: 50px 40px 35px;
    margin: 0;
    background-color: #f7f7f7;
    border: 1px solid #ddd;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
}

.form-control {
    margin-top: 10px;
    display: block;
    width: 100%;
    height:50px;
    padding:5 px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
  
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

							<div class="pricing-table mb-40" id='nur'>								
								<table class="table table-hover">
									<thead>
									    <tr>
									      	<th scope="col">SN</th>
									      	<th scope="col">Result</th>
									      	<th scope="col">Probability</th>
									    </tr>
									</thead>
									<tbody>

									<?php 
										 $show="SELECT* from probability_test ";
										 $result=$con->query($show);
										 $i=1;
										 if($result->num_rows>0){
											$j=1;
											
											$row_count=$result->num_rows;
											// echo "$row_count";
									          
											 while($row=$result->fetch_array()){
						
												 $j++;
												
												 if($j==$row_count+1)
                                                     {
														// echo $row['age'];
																
														if($row['age']>=40 || $row['gender']=='male'|| $row['smoking']=='yes'||$row['influenza']=='yes' ){

													
												
									         
											 
									?>
									    <tr>
									      	<th scope="row"><?php echo $i++?></th>
									     	<td>Predicted probability  nur</td>
									      	<td> <span><?php echo(rand(70,100));?>%</span></td>
										</tr>
										
									<?php 
									}
									else{  ?>

										<tr>
									      	<th scope="row"><?php echo $i++?></th>
									     	<td>Predicted probability</td>
									      	<td> <span><?php echo(rand(10,40));?>%</span></td>
										</tr>

                                  <?php
									}
								
								} } 	}
                                                     
							
									
								    ?>
									    
									   
									</tbody>
								</table>
							</div>
						</div>


				 			

				 				




							</div>
						</div>	<!-- END CONTACTS INFO -->


						<!-- CONTACT FORM -->	
				 		<div class="col-lg-5">
				 			<div class="form-holder mb-40">
								<form action="#nur" method="post" class="row form">
				                                            
					                <!-- Contact Form Input -->
					                <div id="input-age" class="col-md-12">
					                	<input type="text" name="age" class="form-control name" placeholder="Enter Your Age*" required> 
									</div>

									<div id="input-ethnicity" class="col-md-12 input-patient  ">
					                    <select id="inlineFormCustomSelect3" name="ethnicity" class="custom-select patient form-control " required>
					                        <option value="" >Ethnicity *</option>
											<option value="middle_east">Middle East</option>
											<option value="europe">Europe </option>
											<option value="asia">Asia</option>
					                    </select>
					                </div>
									<div id="input-patient" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="gender" class="custom-select patient form-control" required>
					                        <option >Gender *</option>
											<option value="male">Male</option>
											<option value="female">Female </option>
											
					                    </select>
					                </div>
									<div id="input-patient" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="smoking" class="custom-select patient form-control" required>
					                        <option >Smoking *</option>
											<option value="yes" >Yes</option>
											<option value="no" >No </option>
											
					                    </select>
					                </div>
									<div id="input-influenza" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="influenza" class="custom-select patient form-control" required>
					                        <option >Influenza vaccine *</option>
											<option value="yes">Yes</option>
											<option value="no">No </option>
											
					                    </select>
					                </div>
									<div id="input-symptoms" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="symptoms" class="custom-select patient form-control" required>
					                        <option >Symptoms and risks *</option>
											<option value="fever">Fever</option>
											<option value="exposed">Exposed to the covid-19</option>
											<option value="heart_attack">Heart attack</option>
											<option value="cold">Cold</option>
											<option value="vomiting">Vomiting </option>
											
					                    </select>
					                </div>
					                        

					                <!-- Form Select -->
					                <div id="input-patient" class="col-md-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="patient" class="custom-select patient form-control" required>
					                        <option >Have You Visited Us Before for covid-19?*</option>
											<option value="new">New Patient</option>
											<option value="old">Returning Patient</option>
											
					                    </select>
					                </div>
					               

					             					                          
					                        
					                <div id="input-message" class="col-md-12 input-message">
					                	<textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
					                </div>
					                                            
					                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15 form-btn">  
					                	<button type="submit" class="btn btn-blue blue-hover submit" name="submit" style="margin-left: 80px;" >Probability Calculator</button> 
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
		
		<!-- End Google Analytics -->

		<script src="js/changer.js"></script>
		<script defer src="js/styleswitch.js"></script>	
		

	</body>




</html>	