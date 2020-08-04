<!DOCTYPE html>
<html>
<head>
	<title>Blogging|Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="sidebar.css">

	


</head>
<body>

	<?php
	require 'header.php';
	?>

	<?php
	require 'sidebar.php';
	?>



	<div class="container" style="margin-top: 2%;">
		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">

				<h4 style="color: white;text-align: center;" class="mb-4">REGISTER FOR A NEW ACCOUNT</h4>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label style="color: white">Profile Picture</label>	
							<input type="file" id="profile_pic" name="file" />
						</div>
					</div>
					<div class="col-md-8" style="text-align: center;">
						<img src="images/profile.png" id="img" width="100" height="100" align="right">
						<div><input type="hidden" name="image1" id="image1" disabled></div>


					</div>
				</div>


				<div class="form-group">
					<label style="color: white">Full Name</label>
					<input type="text" class="form-control" id="user_name" placeholder="Your Name">
				</div>
				<div class="form-group">
					<label style="color: white">Address</label>
					<input type="text" class="form-control" id="user_address" placeholder="Your Address">
				</div>
				<div class="form-group">
					<label style="color: white">Contact No</label>
					<input type="number" class="form-control" id="user_cont" placeholder="Your Contact Number">
				</div>
				<div class="form-group">
					<label style="color: white">Email</label>
					<input type="text" class="form-control" id="user_email" placeholder="Your Email">
				</div>
				<div class="form-group">
					<label style="color: white">Username(must be unique)</label>
					<input type="text" class="form-control" id="username" placeholder="Create Unique Username">
				</div>
				<div class="form-group">
					<label style="color: white">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Your Password">
				</div>

				<div class="form-group">
					<label style="color: white">Gender:</label><br>
					<input type="radio" id="gender" value="male"> Male<br>
					<input type="radio" id="gender" value="female"> Female<br>
				</div>

                <div style="text-align: center;">
				<button type="button" id="formsubmit" class="btn btn-primary py-3 px-5">REGISTER</button>
                </div>



					</div>

			<div class="col-md-3"></div>
		</div>

		</div>

	<!-- <section class="ftco-section contact-section ftco-degree-bg">
		<div class="container">
			<div class="row d-flex mb-5 contact-info">



			</div>
			<form action="#">
				<div class="row block-9">
					<div class="col-md-6 pr-md-5">
						<h4 style="color: white" class="mb-4">REGISTER FOR A NEW ACCOUNT</h4>


						<div class="form-group">
							<input type="text" class="form-control" id="user_name" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="user_address" placeholder="Your Address">
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id="user_cont" placeholder="Your Contact Number">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="user_email" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="username" placeholder="Create Unique Username">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" placeholder="Your Password">
						</div>
						



					</div>

					<div class="col-md-6 pr-md-5">
						<br><br>

						
						<div class="item form-group">
							<label style="color: white" class="col-form-label col-md-3 col-sm-3 label-align" for="middle-name">Profile Picture<span class="required">*</span>
							</label>


							<div class="col-md-3 col-sm-3 ">
								<input type="file" id="profile_pic" name="file" />

							</div>
							<div class='preview col-md-12'>
								<img src="images/profile.png" id="img" width="100" height="100" align="right">



							</div>
							<div class="col-md-6 col-sm-6 ">  <input type="hidden" name="image1" id="image1" disabled></div>
						</div>


						<div class="form-group">
							<label style="color: white">Gender:</label><br>
							<input type="radio" id="gender" value="male"> Male<br>
							<input type="radio" id="gender" value="female"> Female<br>
						</div>


						<button type="button" id="formsubmit" class="btn btn-primary py-3 px-5">REGISTER</button>
					</div>


				</div>

			</div>
		</form>
	</div>
</section> -->


<?php
require 'footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script type="text/javascript" src="registration_POST.js"></script>
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
</body>
</html>