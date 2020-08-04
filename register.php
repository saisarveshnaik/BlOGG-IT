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


	<section class="ftco-section contact-section ftco-degree-bg">
		<div class="container">
			<div class="row d-flex mb-5 contact-info">



			</div>
			<form action="#">
				<div class="row block-9">
					<div class="col-md-6 pr-md-5">
						<h4 style="color: white" class="mb-4">REGISTER FOR A NEW ACCOUNT</h4>


						<div class="form-group">
							<input type="text" class="form-control" id="fname" placeholder="Your First Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="mname" placeholder="Your Middle Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="lname" placeholder="Your Last Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="designation" placeholder="Your Designation">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" placeholder="Your Password">
						</div>
						


						<div class="form-group">
							<input type="number" class="form-control" id="contact_no" placeholder="Your contact no">
						</div>




					</div>

					<div class="col-md-6 pr-md-5">
						<br><br>

						<!--------------------------------PROFILE PIC------------------------------------------------------>
						<div class="item form-group">
							<label style="color: white" class="col-form-label col-md-3 col-sm-3 label-align" for="middle-name">Profile Picture<span class="required">*</span>
							</label>


							<div class="col-md-3 col-sm-3 ">
								<input type="file" id="profile_picture" name="file" />

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

						<div class="form-group">
							<textarea  cols="30" rows="7" id="messages" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group">

							<button type="button" id="formsubmit" class="btn btn-primary py-3 px-5">REGISTER</button>
						</div>


					</div>

				</div>
			</form>
		</div>
	</section>


	<?php
	require 'footer.php';
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


	<script type="text/javascript" src="registration_POST.js"></script>
	<script>
		$('#profile_picture').change(function(){

			var fd = new FormData();
			var files = $('#profile_picture')[0].files[0];
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
