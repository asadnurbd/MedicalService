
<?php

$connect = new PDO("mysql:host=localhost;dbname=nur", "root", "");
$message = '';


if(isset($_POST["email"]))
{
 sleep(5);
 $query = "
 INSERT INTO tbl_login 
 (first_name, last_name, gender, email, password, address, mobile_no,department) VALUES 
 (:first_name, :last_name, :gender, :email, :password, :address, :mobile_no,:department)
 ";
 $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
 $user_data = array(
  ':first_name'  => $_POST["first_name"],
  ':last_name'  => $_POST["last_name"],
  ':gender'   => $_POST["gender"],
  ':email'   => $_POST["email"],
  ':password'   => $password_hash,
  ':address'   => $_POST["address"],
  ':mobile_no'  => $_POST["mobile_no"],
  ':department'  => $_POST["department"]
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

	
<head>
<?php include"include/head.php"?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Multi Step Registration Form Using JQuery Bootstrap in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />


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
                                    <div class="panel-heading">Patient Information</div>
                                    <div class="panel-body">

                                    <div class="form-group">
                                        <label>Enter First Name</label>
                                       
                                        <input type="text" name="first_name" id="first_name" placeholder="Enter Your First Name*" class="form-control" />
                                        <span id="error_first_name" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control"  placeholder="Enter Your Last Name*"  />
                                        <span id="error_last_name" class="text-danger"></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Enter Email Address</label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your email" />
                                        <span id="error_email" class="text-danger"></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" id="email" class="form-control" placeholder="Enter Your Address" />
                                        <span id="error_email" class="text-danger"></span>
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
                                    <div id="" class="col-md-12  form-control ">
                                                                        <select id="inlineFormCustomSelect1" name="status" class="custom-select " required>
                                                                            <option >MARITAL STATUS</option>  
                                                                            <option value="married">Married</option>
                                                                            <option value="single">Single</option>
                                                                            
                                                                        </select>
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
                                    <div class="panel-heading">Appointment Details</div>
                                    <div class="panel-body">

                                    <div class="form-group">
                                        <label>DOES THE PATIENT HAVE A DIAGNOSIS?</label> <br>
                                        <label class="radio-inline">
                                        <input type="radio" name="diagnosis" value="yes" checked> Yes
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="diagnosis" value="no"> No
                                        </label>
                                    </div>

                                    
                                   
                                    <div class="form-group">
                                    <label>DEPARTMENT OR SPECIALTY AREA</label> <br>
                                    <div  class="col-md-12  form-control ">
                                                                        <select id="inlineFormCustomSelect1" name="department" class="custom-select " required>
                                                                            <option >Select Department</option>  
                                                                            <option value="nur">Pediatrics Department</option>
                                                                            <option>Neurology Department</option>
                                                                            <option>Haematology Department</option>
                                                                            <option>X-Ray Diagnostic Department</option>
                                                                            <option>Cardiology Department</option>
                                                                            <option>MRI Department</option>
                                                                            <option>Laboratory Services</option>
                                                                            <option>Other</option>
                                                                        </select>
                                     </div>
                                     </div>
                                    <br />

                                    <div class="form-group">
                                        <label>IS THIS CONDITION OR INJURY RELATED TO WORK?</label> <br>
                                        <label class="radio-inline">
                                        <input type="radio" name="injury" value="yes" checked> Yes
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="injury" value="no"> No
                                        </label>
                                    </div
                                    <div class="form-group">
                                        <label>IS THIS CONDITION OR INJURY RELATED TO AN AUTO ACCIDENT?</label> <br>
                                        <label class="radio-inline">
                                        <input type="radio" name="accident" value="yes" checked> Yes
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="accident" value="no"> No
                                        </label>
                                    </div
                                    
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
                                        <label>Enter your Name</label>
                                        <input type="text" name="req_name" id="email" class="form-control" placeholder="Enter Your Name" />
                                        <span id="error_email" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Email Name</label>
                                        <input type="text" name="req_email"id="email" class="form-control" placeholder="Enter Your Email" />
                                        <span id="error_email" class="text-danger"></span>
                                    </div>
                                   
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
                                    <div class="form-group">
                                        <label>Enter Your Description</label>
                                        <textarea name="escription" id="address" class="form-control"></textarea>
                                        <span id="error_address" class="text-danger"></span>
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
              
           

			</div>	<!-- END APPOINTMENT PAGE -->

	


			<!-- FOOTER-1
            ============================================= -->
          

			<!-- END FOOTER-1 -->




        </div>	<!-- END PAGE CONTENT -->
      
        <?php include"include/footer.php"?>

        



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