<!DOCTYPE html>
<html>
<head lang="en">
	<title>Blogging|Your Blogs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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





<section id="1">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">

        <h1 style="color: white" class="mb-4">User's blogs</h1>

        
        
      </div>
    </div>
  </div> 
</section>




<section id="1" style="margin-top: 2%;">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 text-center">

       
       <input type="text" name="" class="form-control">


      </div>
      <div class="col-md-1"></div>
    </div>
  </div> 
</section>












































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