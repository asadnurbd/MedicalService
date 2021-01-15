<?php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");
$message = '';
if(isset($_POST["email"]))
{
 sleep(5);
 $query = "
 INSERT INTO tbl_login 
 (first_name, last_name, gender, email, password, address, mobile_no) VALUES 
 (:first_name, :last_name, :gender, :email, :password, :address, :mobile_no)
 ";
 $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
 $user_data = array(
  ':first_name'  => $_POST["first_name"],
  ':last_name'  => $_POST["last_name"],
  ':gender'   => $_POST["gender"],
  ':email'   => $_POST["email"],
  ':password'   => $password_hash,
  ':address'   => $_POST["address"],
  ':mobile_no'  => $_POST["mobile_no"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  $message = '
  <div class="alert alert-success">
  Registration Completed Successfully
  </div>
  ';
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
 }
}
?>


<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from jthemes.net/themes/html/medservices/files/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 04:10:23 GMT -->
<head>
<?php include"include/head.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Multi Step Registration Form Using JQuery Bootstrap in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />


  <style>
 .nav-tabs {
    border-bottom: 0px solid #ae1e1e;
}
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#7aa8e7;
   color:#333;
  
   
  }
  .inactive_tab1 {
    background-color: #eaeef1;
    color: #333;
    cursor: not-allowed;
   
 }

  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }

  .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color:#7aa8e7;
    border-color: #dee2e6 #dee2e6 #fff;
}
.nav-item{

    width:8%;
   
    padding-left:5px;
   
}
.nav{
    
    list-style: none;
}
  </style>


</head>




	<body>




		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loader-wrapper">
			<div id="loader"><div class="loader-inner"></div></div>
		</div>




		<!-- STYLE SWITCHER
		============================================= -->
		<div id="stlChanger">
			<div class="blockChanger bgChanger">
            	<a href="#" class="chBut"><i class="fas fa-sliders-h"></i></a>
                <div class="chBody">														
					<div class="stBlock text-center" style="margin:30px 20px 30px 16px">
						<p>Choose Layout</p>
						<a class="s_1" href="demo-1.html"><img src="images/color-scheme/l-01.jpg" width="175" height="120" alt="layout-image"></a>
						<a class="s_1" href="demo-2.html"><img src="images/color-scheme/l-02.jpg" width="175" height="93" alt="layout-image"></a>
						<a class="s_1" href="demo-3.html"><img src="images/color-scheme/l-03.jpg" width="175" height="105" alt="layout-image"></a>
						<a class="s_1" href="demo-4.html"><img src="images/color-scheme/l-04.jpg" width="175" height="100" alt="layout-image"></a>
						<a class="s_1" href="demo-5.html"><img src="images/color-scheme/l-05.jpg" width="175" height="112" alt="layout-image"></a>
						<a class="s_1" href="demo-6.html"><img src="images/color-scheme/l-06.jpg" width="175" height="100" alt="layout-image"></a>
						<a class="s_1" href="demo-7.html"><img src="images/color-scheme/l-07.jpg" width="175" height="97" alt="layout-image"></a>
						<a class="s_1" href="demo-8.html"><img src="images/color-scheme/l-08.jpg" width="175" height="91" alt="layout-image"></a>
						<a class="s_1" href="demo-9.html"><img src="images/color-scheme/l-09.jpg" width="175" height="97" alt="layout-image"></a>
						<a class="s_1" href="demo-10.html"><img src="images/color-scheme/l-10.jpg" width="175" height="105" alt="layout-image"></a>
						<a class="s_1" href="demo-11.html"><img src="images/color-scheme/l-11.jpg" width="175" height="105" alt="layout-image"></a>
						<a class="s_1" href="demo-12.html"><img src="images/color-scheme/l-12.jpg" width="175" height="125" alt="layout-image"></a>
					</div>						
				</div>
			</div>
		</div>	  <!-- END SWITCHER -->




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<header id="header" class="header">


                <!-- MOBILE HEADER -->
                <?php include"include/header.php";?>
			   	<!-- END HEADER -->




			<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Appointment</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	




			<!-- APPOINTMENT PAGE
			============================================= -->
			<div id="appointment-page" class="wide-60 appointment-page-section division">
				<div class="container">
				 	<div class="row">


				 		<!-- SERVICE DETAILS -->
				 		<div class="col-lg-12">
				 			<div class="txt-block pr-30">

				 				<!-- Title -->
								<h3 class="h3-md steelblue-color">Book an Appointment</h3>

								<!-- Text -->
								
								<!-- APPOINTMENT FORM -->
								<div id="appointment-form-holder" class="text-center">
									
                                    
                                    <div class="container box">
                                <br />
                                <?php echo $message; ?>
                                <form method="post" class="form-group" id="register_form">
                                    <div style="margin-bottom:10%;  margin-left: 80px; ">
                                    <ul class="nav nav-tabs">
                                    <li class="nav-item" >
                                    <a class="nav-link active_tab1" style="border:1px solid #ccc; border-radius:100%;" id="list_login_details" >1</a>
                                    <span class="font-size: 1.2rem;">Patient
                                        Information
                                        </span>
                                     </li>

                                    <li class="nav">
                                    <a class="nav-link " style="border-bottom: 2px solid #34ebb4; width:200px;margin-left:0px;" id="list_login_details" ></a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc; border-radius:100%;">2</a>
                                    <span for="">
Appointment
Details</span>
                                    </li>
                                    <li class="nav">
                                    <a class="nav-link " style="border-bottom: 2px solid #34ebb4; width:200px;" id="list_login_details" ></a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc; border-radius:100%;">3</a>
                                    <span for="">Requestor
Information
</span>
                                    </li>
                                   </ul>

                                    </div>
                               
                                <div class="tab-content" style="margin-top:16px;">
                                    <div class="tab-pane active" id="login_details">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">Login Details</div>
                                    <div class="panel-body">

                                    <div class="form-group">
                                        <label>Enter Email Address</label>
                                        <input type="text" name="email" id="email" class="form-control" />
                                        <span id="error_email" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Password</label>
                                        <input type="password" name="password" id="password" class="form-control" />
                                        <span id="error_password" class="text-danger"></span>
                                    </div>
                                    <br />
                                    <div align="center">
                                        <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
                                    </div>
                                    <br />
                                    </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="personal_details">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">Fill Personal Details</div>
                                    <div class="panel-body">
                                    <div class="form-group">
                                        <label>Enter First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control" />
                                        <span id="error_first_name" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" />
                                        <span id="error_last_name" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <label class="radio-inline">
                                        <input type="radio" name="gender" value="male" checked> Male
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="gender" value="female"> Female
                                        </label>
                                    </div>

                                    <div id="" class="col-md-12 input-department form-group">
                                                                        <select id="inlineFormCustomSelect1" name="department" class="custom-select department" required>
                                                                            <option value="">Select Department</option>  
                                                                            <option>Pediatrics Department</option>
                                                                            <option>Neurology Department</option>
                                                                            <option>Haematology Department</option>
                                                                            <option>X-Ray Diagnostic Department</option>
                                                                            <option>Cardiology Department</option>
                                                                            <option>MRI Department</option>
                                                                            <option>Laboratory Services</option>
                                                                            <option>Other</option>
                                                                        </select>
                                                                    </div>
                                    <br />
                                    <div align="center">
                                        <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
                                    </div>
                                    <br />
                                    </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact_details">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">Fill Contact Details</div>
                                    <div class="panel-body">
                                    <div class="form-group">
                                        <label>Enter Address</label>
                                        <textarea name="address" id="address" class="form-control"></textarea>
                                        <span id="error_address" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Mobile No.</label>
                                        <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
                                        <span id="error_mobile_no" class="text-danger"></span>
                                    </div>
                                    <br />
                                    <div align="center">
                                        <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
                                    </div>
                                    <br />
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                </form>
                                </div>

								
				 				
				 			</div>
				 		</div>	<!-- END SERVICE DETAILS -->



					</div>	<!-- End row -->	
				</div>	 <!-- End container -->
			</div>	<!-- END APPOINTMENT PAGE -->

	


			<!-- FOOTER-1
			============================================= -->
			<footer id="footer-1" class="bg-image wide-40 footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">	


						<!-- FOOTER INFO -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-info mb-40">

								<!-- Footer Logo -->
								<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80  pixels) -->
								<img src="images/footer-logo-white.png" width="180" height="40" alt="footer-logo">

								<!-- Text -->	
								<p class="p-sm mt-20 display-1" >Aliquam orci nullam tempor sapien gravida donec an enim ipsum porta
								   justo at velna auctor congue
								</p>  

								<!-- Social Icons -->
								<div class="footer-socials-links mt-20">
									<ul class="foo-socials text-center clearfix">

										<li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
										<li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
										<li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>			
																																				
										<!--
										<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>	
										<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>											
										<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
										<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>									
										<li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>											
										<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
										<li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
										<li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
									    -->	

									</ul>									
								</div>	
							
							</div>		
						</div>


						<!-- FOOTER CONTACTS -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-box mb-40">
							
								<!-- Title -->
								<h5 class="h5-xs">Our Location</h5>

								<!-- Address -->
								<p>121 King Street, Melbourne,</p> 
								<p>Victoria 3000 Australia</p>
								
								<!-- Email -->
								<p class="foo-email mt-20">E: <a href="mailto:yourdomain@mail.com">hello@yourdomain.com</a></p>

								<!-- Phone -->
								<p>P: +12 9 8765 4321</p>

							</div>
						</div>


						<!-- FOOTER WORKING HOURS -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-box mb-40">
							
								<!-- Title -->
								<h5 class="h5-xs">Working Time</h5>

								<!-- Working Hours -->
								<p class="p-sm">Mon - Wed - <span>9:00 AM - 7:00 PM</span></p>
								<p class="p-sm">Thursday - <span>9:00 AM - 6:30 PM</span></p>
								<p class="p-sm">Friday - <span>9:00 AM - 6:00 PM</span></p>
								<p class="p-sm">Sat - Sun - <span>Closed</span></p>										

							</div>
						</div>


						<!-- FOOTER PHONE NUMBER -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-box mb-40">
												
								<!-- Title -->
								<h5 class="h5-xs">Emergency Cases</h5>

								<!-- Footer List -->
								<h5 class="h5-xl blue-color">1-800-123-4560</h5>

								<!-- Text -->	
								<p class="p-sm mt-15">Aliquam orci nullam undo tempor sapien gravida donec enim ipsum porta
								   justo velna aucto magna
								</p> 																												

							</div>
						</div>	


					</div>	  <!-- END FOOTER CONTENT -->


					<!-- FOOTER COPYRIGHT -->
					<div class="bottom-footer">
						<div class="row">
							<div class="col-md-12">
								<p class="footer-copyright">&copy; 2019 <span>MedService</span>. All Rights Reserved</p>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->										
			</footer>	<!-- END FOOTER-1 -->




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

	

		<script src="js/changer.js"></script>
        <script defer src="js/styleswitch.js"></script>	
        

        <script>
$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
  
  var error_email = '';
  var error_password = '';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }
  
  if($.trim($('#password').val()).length == 0)
  {
   error_password = 'Password is required';
   $('#error_password').text(error_password);
   $('#password').addClass('has-error');
  }
  else
  {
   error_password = '';
   $('#error_password').text(error_password);
   $('#password').removeClass('has-error');
  }

  if(error_email != '' || error_password != '')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 
 $('#btn_personal_details').click(function(){
  var error_first_name = '';
  var error_last_name = '';
  
  if($.trim($('#first_name').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').removeClass('has-error');
  }
  
  if($.trim($('#last_name').val()).length == 0)
  {
   error_last_name = 'Last Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').addClass('has-error');
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').removeClass('has-error');
  }

  if(error_first_name != '' || error_last_name != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
 $('#btn_contact_details').click(function(){
  var error_address = '';
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  if($.trim($('#address').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address').text(error_address);
   $('#address').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address').text(error_address);
   $('#address').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }
  if(error_address != '' || error_mobile_no != '')
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 
});
</script>

		

	</body>


</html>	