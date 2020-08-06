<!DOCTYPE html>
<html>
<head>
	<title>Blogging|Add Blogs</title>


	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	-->
	<link rel="stylesheet" type="text/css" href="../style.css">

	<link rel="stylesheet" type="text/css" href="../sidebar.css">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">



</head>
<body>

	<?php
	require '../header.php';
	?>

	<?php
	require '../sidebar.php';
	?>



	<div class="container" style="margin-top: 10px">
		<form method="post" action="" enctype="multipart/form-data" id="myform">
		<div class="row">
			<div class="col-md-6">
				<div class="row">

					<div class="col-md-2"></div>
					<div class="col-md-10">
						<h4 style="color: white;text-align: center;" class="mb-4">CREATE A NEW BLOG!</h4>	





						<!-- <div class="item form-group">
							<select name="category" id="blog_category" class="form-control"> 
								<option value="" > Select Category</option>

								<?php 

								require "../connect.php"; 
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
						</div> -->

						<?php
							require '../connect.php';

							$blog_id = $_GET['id'];
							$sql= $conn->prepare("SELECT * FROM blogs where blog_id='".$blog_id."' and status='1'");
							            $sql->execute();
							            $sql->setFetchMode(PDO::FETCH_ASSOC);
							            if($sql->rowCount()>0){
				              foreach (($sql->fetchAll()) as $key => $row) {

				              	echo '	<div class="item form-group">
				              				<input type=button id="blog_id" style="display:none;" value="'.$blog_id.'">
											<input type="text"  required="required" class="form-control " id="blog_title" name="productname" value="'.$row['blog_title'].'">
										</div>

										<div class="item form-group">
											<textarea class="form-control blogTextarea" type="text" name="productnote"  id="blog_desc"> '.$row['blog_desc'].' </textarea>
										</div>';
										
									}
								}
								?>

                       <div class="row">
                       	<div class="col-md-4">
                       		<div class="item form-group" style="text-align: right">
                       		<button class="btn btn-danger blogButtons" type="button"><a style="color:white" href="view_blogs.php">Cancel</a></button>
                       		</div>
                       	</div>
                       	<div class="col-md-4">
                       		<div class="item form-group" style="text-align: center;">
                       		<button class="btn btn-primary blogButtons" type="reset">Reset</button>
                       	</div>
                       	</div>
                       	<div class="col-md-4" >
                       		<div class="item form-group" style="text-align: left;">
                            <button type="button" id="blogsubmit" class="btn btn-success blogButtons">Update</button>
                        </div>
                       	</div>
                       </div>

					</div>



		</div>

	</div>

	<!-- <div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				
				<h4 style="color: white;text-align: center;" class="mb-4">CHOOSE A BLOG PICTURE!</h4>
				<div class="form-group" style="text-align: center;">

						<button type="button" class="btn btn-primary"><input type="file" id="blog_pic" name="file" /></button>	
						</div>
						<div class="form-group" style="text-align: center;">
						<img src="images/default.png" id="img" width="60%" height="40%">
						<div><input type="hidden" name="image1" id="image1" disabled></div>
                        </div>
					</div>

			</div>
 
		</div>


	</div> -->
</form>
</div>	




		<?php
		require '../footer.php';
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>

		


		<script type="text/javascript">
			

			$("#blogsubmit").click(function(){

  
 			var blog_id=$("#blog_id").val();
  			var blog_title=$("#blog_title").val();
 			var blog_desc=$("#blog_desc").val();
  

 			var datastr='blog_id='+blog_id+'&blog_title='+blog_title+'&blog_desc='+blog_desc;


			if (blog_title=='') {
			   alert("Please fill blog title")
			 }
			 else if (blog_desc=='') {
			   alert("Please fill blog description");
			 }
 

			else{

			 $.ajax({


			  type: "POST",
			  url: "update_blog1.php",
			  data: datastr,
			  cache: false,
			  success: function(res){
			    if(res==1)
			    {
			      alert("success");
			      window.location.href="view_blogs.php";

			    }
			    else{


			     alert("Something Went Wrong!");


			   }

			 }
			}); 
			}






});
		</script>
	</body>
	</html>