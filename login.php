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


  <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">



      </div>
      <form action="#">
        <div class="row block-9">
          <div class="col-md-12">
            <h4 class="mb-4" align="center" style="color: white" >LOGIN TO YOUR ACCOUNT</h4>
            
            <div class="form-group">
              <label style="color: white">USERNAME(EMAIL)</label>
              <input type="text" id="uname" class="form-control" placeholder="Your username">
            </div>
            <div class="form-group">
              <label style="color: white">PASSWORD</label>
              <input type="password" id="pass" class="form-control" placeholder="Your password">
            </div>
            

          </div>

          <div class="col-md-4"></div>
          <div class="col-md-2">     
            <input type="button" class="btn btn-primary py-3 px-5" id="login" value="LOGIN">
          </div>
          <div class="col-md-2"> 
            <p><a href="register.php" class="btn btn-primary px-4 py-3">REGISTER NOW</a> </p></div>


            
            
          </div>
        </form>
      </div>
    </section>


    <?php
    require 'footer.php';
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="login_POST.js"></script>

  </body>
  </html>
