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
							<small id="limit" style="color: red; "></small>
							<small id="flag"></small>
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
<script>


$( "#username" ).keyup(function() {


	$('#username').on('blur', function(){
    if(this.value.length < 5){ 
       $('#limit').html('Should Be Atleast 5 Characters!');
   		}

       var username=$("#username").val();

       var datastr='username='+username;


       $.ajax({
    
	    
	    type: "POST",
	    url: "usearch.php",
	    data: datastr,
	    cache: false,
	    success: function(res){

	      if(res=='1')
	      {
	        $('#limit').html('Username Already Taken!');
	        
	        
	      }
	  else if(res=='0'){
	       
	       $('#limit').html('');
	       $('#formsubmit').css('display','inline');
	      }
	                    
	                  }
	                }); 
   }
	 
	 );





       $(this).focus(); // focuses the current field.
       return false; // stops the execution.
    
});



   
  
</script>
</body>
</html>