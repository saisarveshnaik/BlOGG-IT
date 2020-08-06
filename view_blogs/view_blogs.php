<!DOCTYPE html>
<html>
<head>
	<title>Blogging</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../style.css">

	<link rel="stylesheet" type="text/css" href="../sidebar.css">

	

</head>
<body>

	<?php
	require '../header.php';
	?>

	<?php
	require '../sidebar.php';
	?>





<div class="container">
 <div class="row">
 	<div class="col-md-1"></div>
 	<div class="col-md-11">

<?php
require '../connect.php';
$sql= $conn->prepare("SELECT * FROM blogs where user_id='".$_SESSION['user_id']."' and status='1' order by created_date_time DESC");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            if($sql->rowCount()>0){
              foreach (($sql->fetchAll()) as $key => $row) {

              	echo '<div class="jumbotron p-0 roundShadow" id="jumbotron">

  
  <div class="view overlay rounded-top">
  
    <img src="../'.$row['blog_pic'].'" id="blog_image" class="img-fluid" alt="Blog image">
    <a href="#">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  
  <div class="card-body text-left mb-3">
    <small>Likes   |  </small>
    <input type="button" value="Edit" onclick=\'editfunc("' .$row["blog_id"]. '")\' >
    <input type="button" value="Delete" onclick=\'deletefunc("' .$row["blog_id"]. '")\' >
   
    <h3 class="card-title h3 my-4"><strong>'.$row['blog_title'].'</strong></h3>
    <p style="font-size:18px;text-align:left;">'.$row['blog_desc'].'</p>
    ';

   

              }
          }
?>


</div>
 </div>	

</div>





	<?php
	require '../footer.php';
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript">
  
    function deletefunc(id)
    { 
      var r = confirm("Press a button!");
      if (r == true) {
      

           var dataString = 'id='+ id;


            $.ajax({
            type: "POST",
            url: "delete_blog.php",
            data: dataString,
            cache: false,
            success:function(data){
            if(data == 1){
            
             window.location.reload();
          
            }
            else{

          
            }

          }
      });

}
}


function editfunc(id)
    { 
     window.location.href='update_blog.php?id='+id;
}

</script>






</body>
</html>