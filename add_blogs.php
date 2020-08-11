<!DOCTYPE html>
<html>
<head>
	<title>BLOGG IT! | Add Blogs</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="sidebar.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link href="css/all.css" rel="stylesheet"> 

  <script defer src="js/all.js"></script>
</head>
<body>



	<?php
	require 'header.php';
	?>

	<?php
	require 'sidebar.php';
	?>






	<section>

		<div class="container-fuild">
			<form method="post" action="" enctype="multipart/form-data" id="myform">

				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-7">

						<div class="container-fuild" style="padding: 1px;background-color: #ffffff;" id="about_card">


							<div class="row" style="margin-top: 20px;margin-bottom: 20px">
								<div class="col-md-12 text-center">
									<h3 style="color: #4c4c4c;">Create a new Blog!</h3>
								</div>
							</div>
                            
                            <hr/>

							<div class="row" style="margin-top: 24px;">
								<div class="col-md-1"></div>
								<div class="col-md-5 text-left">
									<div class="form-group">
										<img src="images/default.png" id="img1" width="100%" height="100%">
										<div><input type="hidden" name="image1" id="image1" disabled></div>

									</div>
								</div>
								<div class="col-md-5 text-left">
									<div class="form-group">

										<button style="margin-top: 158px;" type="button" class="btn btn-primary form-control"><input type="file" id="blog_pic" name="file" /></button>	
									</div>
								</div>
								<div class="col-md-1"></div>
							</div>


							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="item form-group">
										<select name="category" id="blog_category" class="form-control" style="background-color: #fafafa;"> 
											<option value="" style="background-color: #fafafa;" > Select Category</option>

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
										<input type="text"  required="required" class="form-control " id="blog_title" name="blog_title" placeholder="Blog Title" style="background-color: #fafafa;">
									</div>

									<div class="item form-group">
										<input type="text"  required="required" class="form-control " id="blog_short_desc" name="blog_short_desc" placeholder="Short Description of the blog" style="background-color: #fafafa;">
									</div>

									<div class="item form-group">
										<textarea class="form-control blogTextarea" type="text" name="blog_desc"  id="blog_desc" placeholder="Blog Description" style="background-color: #fafafa;"></textarea>
									</div>


									<div class="row" style="margin-bottom: 50px;">
										<div class="col-md-12 text-right">
											<div class="btn-group">
												<div class="item form-group" >
													<button class="btn btn-light" type="reset" style="margin-right: 5px;background-color: #e2e2e2;">Reset</button>
												</div>
												<div class="item form-group">
													<button style="width: 300px;background-color: #0195f7;color: white;" type="button" id="blogsubmit" class="btn btn-light ">POST</button>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-1"></div>
							</div>














						</div>

					</div>
					<div class="col-md-2"></div>	

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
						$("#img1").attr("src",response); 
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
