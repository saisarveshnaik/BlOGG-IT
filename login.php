<!DOCTYPE html>
<html>
<head>
	<title>Blogging|Login</title>
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



  <div class="container" style="margin-top: 100px;">
    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-6">
        <h4 class="mb-4" align="center" style="color: white" >LOGIN TO YOUR ACCOUNT</h4>
        <div class="form-group">
          <label style="color: white">USERNAME</label>
          <input type="text" id="uname" class="form-control" placeholder="Your username">
        </div>
        <div class="form-group">
          <label style="color: white">PASSWORD</label>
          <input type="password" id="pass" class="form-control" placeholder="Your password">
        </div> 
      </div>
      <div class="col-md-3">

      </div>
    </div>

    <div class="row">
      <div class="col-md-3"></div>
      <div style="text-align: center;" class="col-md-6">



      <div class="btn-group" role="group" aria-label="Basic example">
        <input type="button" class="btn btn-primary py-3 px-5" id="login" value="LOGIN" style="margin-right: 10px"> 
        <button style="margin-left: 10px;" type="button" class="btn btn-primary py-3 px-5"><a href="register.php" style="color: white;">Register</a></button>
      </div>

        
        
      </div>
      <div class="col-md-3"></div>
    </div>



  </div>






<!--   <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">



      </div>
      <form action="#">
        <div class="row block-9">
          <div class="col-md-12">
             
            <div class="col-md-3">
              
            </div>
            <div class="col-md-6">
              <h4 class="mb-4" align="center" style="color: white" >LOGIN TO YOUR ACCOUNT</h4>
            
            <div class="form-group">
              <label style="color: white">USERNAME</label>
              <input type="text" id="uname" class="form-control" placeholder="Your username">
            </div>
            <div class="form-group">
              <label style="color: white">PASSWORD</label>
              <input type="password" id="pass" class="form-control" placeholder="Your password">
            </div>
            </div>
            <div class="col-md-3"></div>
 
            </div>


          <div class="row">
            <div style="margin-left: 100px" class="col-md-6">     
            <input type="button" class="btn btn-primary py-3 px-5" id="login" value="LOGIN">
          </div>
          <div style="margin-left: 100px" class="col-md-6"> 
            <p><a href="register.php" class="btn btn-primary px-4 py-3">REGISTER NOW</a> </p>
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

    <script src="login_POST.js"></script>

  </body>
  </html>
