<!DOCTYPE html>
<html lang="en">
<head>
	<title>BLOGG IT! | LOGIN</title>

 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

 <link rel="stylesheet" type="text/css" href="style.css">

 <link rel="stylesheet" type="text/css" href="sidebar.css">

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
    <div class="container" style="margin-right:350px;  padding: 1px;width: 800px" id="about_card" >
      <div class="row" style="margin-top: 40px;">
        <div class="col-md-3"></div>


        <div class="col-md-6">
          <h4 class="mb-4" align="center" style="color: #4c4c4c">LOGIN TO YOUR ACCOUNT</h4>
          <hr/>
          <div class="form-group">
            <label style="color: #4c4c4c">Username</label>
            <input type="text" id="uname" class="form-control input_border" placeholder="Your username" style="background-color: #ffffff;">
          </div>
          <div class="form-group">
            <label style="color: #4c4c4c">Password</label>
            <input type="password" id="pass" class="form-control input_border" placeholder="Your password" style="background-color: #ffffff;">
          </div> 
        </div>


        <div class="col-md-3"></div>
      </div>

      <div class="row" style="margin-top: 10px;margin-bottom: 60px;">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">



          
            <input type="button" class="btn btn-light  form-control" id="login" value="LOGIN" style="background-color: #0195f7;color: white"> 

            <div class="row" style="margin-top: 16px;">
              <div class="col-md-5">
                <hr/>
              </div>
              <div class="col-md-2">
                <p >OR</p>
              </div>
              <div class="col-md-5">
                <hr/>
              </div>
            </div>


            <a href="register.php" style="background-color: #e2e2e2;" type="button" class="btn btn-light form-control">Register</a>
         

          
          
        </div>
        <div class="col-md-3"></div>
      </div>



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
