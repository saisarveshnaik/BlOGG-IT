<!DOCTYPE html>
<html>
<head>
	<title>BLOGG IT! | Edit Profile</title>


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script src="https://kit.fontawesome.com/05315665b2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="sidebar.css">


</head>
<body>




  <?php
  require 'header.php';
  ?>



	<section>
		<div class="container-fluid" style="background-color: #fafafa"> 




			<div class="row">

				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="container-fluid" style="padding: 1px;background-color: #ffffff;margin-top: 50px;" id="about_card">

						<div class="row" style="margin-top: 40px;">
							<div class="col-md-12 text-center">
								<h4 style="color: #4c4c4c">Edit Profile</h4>
								<hr/>
							</div>
						</div>



						<div class="row">
						 <div class="col-md-12 text-center">
						  <img src="images/profile.png" id="img" width="100" height="100"></img>
						  <input type="hidden" name="image1" id="image1" disabled>
						  <button style="width:200px; height:30px;border:none;margin-top: 10px;background-color: #ffffff;  color: #027ddb;" onclick="document.getElementById('profile_pic').click()">Change profile photo</button>
                          <input type='file' id="profile_pic" name="file" style="display:none">
						 </div>	
						</div>



						<div class="row" style="">							 
						<div class="col-md-2"></div>
						<div class="col-md-8" style="padding: 20px;">
						
						<p style="color: #4c4c4c">Name</p>
						<input type="text" id="name" name="" class="form-control input_border" style="margin-top: -18px;">

						<p style="margin-top: 20px;color: #4c4c4c">Username</p>
						<input type="text" id="username" name="" class="form-control input_border" style="margin-top: -18px;">

						<p style="margin-top: 20px;color: #4c4c4c">Address</p>
						<input type="text" id="address" name="" class="form-control input_border" style="margin-top: -18px;">	

						<p style="margin-top: 20px;color: #4c4c4c">Email</p>
						<input type="text" id="email" name="" class="form-control input_border" style="margin-top: -18px;">

						<p style="margin-top: 20px;color: #4c4c4c">Password</p>
						<input type="text" id="password" name="" class="form-control input_border" style="margin-top: -18px;">

						<div class="row" style="margin-top: 20px;margin-bottom:40px; ">
							<div class="col-md-12 text-center">
							<button type="button" style="width: 200px;background-color: #e2e2e2;" id="save_changes" class="btn btn-light" align='center'>Save Changes</button>	
							</div>
						</div>

						

						</div>	

						<div class="col-md-2"></div> 


						</div>
						
                     


					</div>
				<div class="col-md-3"></div>

			</div>


		</div>
	</section>














<?php
  require 'footer.php';
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script>
			$('#profile_pic').change(function(){

				var fd = new FormData();
				var files = $('#profile_pic')[0].files[0];
				fd.append('file',files);

				$.ajax({
					url: 'upload.php',
					type: 'post',
					data: fd,
					contentType: false,
					processData: false,
					success: function(response){
						if(response != 0){
							$("#img").attr("src",response); 
							$('#image1').val(response);
						$(".preview img").show(); // Display image element
					}else{
						alert('file not uploaded');
					}
				},
			});
			});

		</script>
		
		
		
		
		
		
		<script>
			$("#save_changes").click(function(){

		
		var name=$("#name").val();
		var username=$("#username").val();
		var email=$("#email").val();
		var address=$("#address").val();
		var password=$("#password").val();


		var datastr='password='+password+'&name='+name+'&username='+username+'&email='+email+'&address='+address;






		if (password=='') {
		alert("Please Enter the Password");

		}
		else if(name==''){
		alert("Please Enter the username");

		}

		else if (username=='') {
		alert("Please fill blog title")
		}

		else if (email=='') {
		alert("Please provide a short blog description")
		}


		else if (address=='') {
		alert("Please enter the address");



		}


		else{

		$.ajax({


		type: "POST",
		url: "edit_profile_GET.php",
		data: datastr,
		cache: false,
		success: function(res){
		if(res==1)
		{
			alert("Profile Edited Successfully");
			window.location.href="logout.php";
			window.location.href="login.php";

		}
		else{


		alert("Error updating profile information");


		}

		}
		}); 
		}

		});





		
	
	</script>

</body>
</html>