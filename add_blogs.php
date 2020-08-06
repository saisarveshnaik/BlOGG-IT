<!DOCTYPE html>
<html>
<head lang="en">
	<title>Blogging|Add Blogs</title>


	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="sidebar.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">



</head>
<body>

	<?php
	require 'header.php';
	?>

	<?php
	require 'sidebar.php';
	?>


<section>
	<div class="container" style="margin-top: 10px">
		<form method="post" action="" enctype="multipart/form-data" id="myform">
		<div class="row">
			<div class="col-md-6">
				<div class="row">

					<div class="col-md-4"></div>
					<div class="col-md-8">
						<h4 style="color: white;text-align: center;" class="mb-4">CREATE A NEW BLOG!</h4>	





						<div class="item form-group">
							<select name="category" id="blog_category" class="form-control"> 
								<option value="" > Select Category</option>

								<?php 

								require "connect.php"; 
								$stmt = $conn->prepare("SELECT * FROM categories");
								$stmt->execute();
								$stmt->setFetchMode(PDO::FETCH_ASSOC);
								if($stmt->rowCount()>0){
									foreach(($stmt->fetchAll()) as $k1=>$row) {

										echo ' <option value="'.$row['category_id'].'"> '.$row['category_name'].' </option>';


									}
								}

								?>


							</select>      
						</div>

						<div class="item form-group">
							<input type="text"  required="required" class="form-control " id="blog_title" name="productname" placeholder="Blog Title">
						</div>

						<div class="item form-group">
							<textarea class="form-control blogTextarea" type="text" name="productnote"  id="blog_desc" placeholder="Blog Description" ></textarea>
						</div>


                       <div class="row">
                       	<div class="col-md-4">
                       		<div class="item form-group" style="text-align: right">
                       		<button class="btn btn-danger blogButtons" type="button"><a style="color:white" href="index.php">Cancel</a></button>
                       		</div>
                       	</div>
                       	<div class="col-md-4">
                       		<div class="item form-group" style="text-align: center;">
                       		<button class="btn btn-primary blogButtons" type="reset">Reset</button>
                       	</div>
                       	</div>
                       	<div class="col-md-4" >
                       		<div class="item form-group" style="text-align: left;">
                            <button type="button" id="blogsubmit" class="btn btn-success blogButtons">Post</button>
                        </div>
                       	</div>
                       </div>

					</div>



		</div>

	</div>

	<div class="col-md-6">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				
				<h4 style="color: white;text-align: center;" class="mb-4">CHOOSE A BLOG PICTURE!</h4>
				<div class="form-group" style="text-align: center;">

						<button type="button" class="btn btn-primary"><input type="file" id="blog_pic" name="file" /></button>	
						</div>
						<div class="form-group" style="text-align: center;">
						<img src="images/default.png" id="img" width="100%" height="100%">
						<div><input type="hidden" name="image1" id="image1" disabled></div>
                        </div>
					</div>

			<div class="col-md-4"></div>		

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

		<script src="add_blogs_POST.js"></script>


		<script>
			$('#blog_pic').change(function(){

				var fd = new FormData();
				var files = $('#blog_pic')[0].files[0];
				fd.append('file',files);

				$.ajax({
					url: 'upload_blog.php',
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