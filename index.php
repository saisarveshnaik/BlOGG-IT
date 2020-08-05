<!DOCTYPE html>
<html>
<head>
	<title>Blogging</title>

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

  
  <div class="card-body text-center mb-3">

   
    <h3 class="card-title h3 my-4"><strong>'.$row['blog_title'].'</strong></h3>
    <p style="font-size:18px;text-align:left;">'.$row['blog_desc'].'</p>

    <div class="row">
     <div class="col-md-9">
     <input  class="form-control" type="" id="comment_text" name="" placeholder="Leave a comment...." align="center">  
     </div>
     <div class="col-md-3">
     <button type="button" class="btn btn-success" style="margin-right:10px;">Comment</button>
     <a href="#" class="btn btn-primary">Read More</a>
     </div>
    </div>


   
    
    

  </div>

</div>';

              }
          }
?>

    
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
