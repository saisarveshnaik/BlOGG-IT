<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blogging</title>

  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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




<section>
<div class="container">
 <div class="row">
 	<div class="col-md-2"></div>
 	<div class="col-md-10">

<?php
require 'connect.php';
$sql= $conn->prepare("SELECT * FROM blogs order by created_date_time DESC");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            if($sql->rowCount()>0){
              foreach (($sql->fetchAll()) as $key => $row) {

              	echo '<div class="jumbotron p-0 roundShadow" id="jumbotron">

  
  <div class="view overlay rounded-top">
    <img src="'.$row['blog_pic'].'" id="blog_image" class="img-fluid" alt="Blog image">
    <a href="#">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  
  <div class="card-body text-left mb-3">

   
    <h3 class="card-title h3 my-4"><strong>'.$row['blog_title'].'</strong></h3>
    <p style="font-size:18px;text-align:left;">'.$row['blog_desc'].'</p>

    <div class="row">
     <div class="col-md-8 text-center">
     <input  class="form-control" type="" id="comment_text" name="" placeholder="Leave a comment....">  
     </div>
     <div class="col-md-4 text-center">
     <div class="btn-group">
     <button type="button" class="btn btn-success" >Comment</button>
     <a href="#" class="btn btn-primary">Read More</a>
     <button type="button" class="btn btn-danger" >Report</button>
     </div>
     </div>
    </div>


   
    
    

  </div>

</div>';

              }
          }
?>


</div>
 </div>	

</div>
</section>

    
<!-- <div class="jumbotron p-0" id="jumbotron">

  
  <div class="view overlay rounded-top">
    <img src="" class="img-fluid" alt="Sample image">
    <a href="#">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  
  <div class="card-body text-center mb-3">

   
    <h3 class="card-title h3 my-4"><strong>Card title</strong></h3>
   
    <p class="card-text py-2">Some quick example text to build on the card title and make up the bulk of the card's</p>
   
    <a href="#" class="btn btn-primary">Button</a>

  </div>

</div> -->





	<?php
	require 'footer.php';
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
</body>
</html>