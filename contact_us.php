<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blogging | CONTACT US</title>


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <script src="https://kit.fontawesome.com/05315665b2.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" type="text/css" href="sidebar.css">





</head>
<body>

  <?php
  require 'header.php';
  ?>




  <section>  
    <div class="row">

      <div class="col-md-3"></div>
      <div class="col-md-6 text-center">

        <div class="container-fluid" style="padding:40px;background-color: #17a2b8; margin-top: 100px;">

          <div class="row" style="margin-left: 30px;margin-right: 30px;">
            
            <h3 style="color: white;">CONTACT US</h3>
          </div>

          <div class="row" style="margin-left: 30px;margin-right: 35px;">
            <p style="color: white;">We'd love to hear from you,please drop us a message if you have any queries.</p>
          </div>

          <div class="row" style="margin-left: 20px;margin-right: 20px;">
            <div class="col-md-6 text-left">
              <p>First Name</p>
              <input type="text" name="firstname" id="msg_firstname" class="form-control" style="margin-top: -10px;text-transform: uppercase;">
            </div>
            <div class="col-md-6 text-left">
             <p>Last Name</p>
             <input type="text" name="lastname" id="msg_lastname" class="form-control" style="margin-top: -10px;text-transform: uppercase">
           </div>
         </div>

         <div class="row" style="margin-left: 20px;margin-right: 20px; margin-top: 10px;">
          <div class="col-md-12 text-left">
            <p>Email</p>
            <input type="text" name="email" id="msg_email" class="form-control" style="margin-top: -10px;">

          </div>
        </div>


        <div class="row" style="margin-left: 20px;margin-right: 20px; margin-top: 10px;">
          <div class="col-md-12 text-left">
            <p>Message</p>

            <textarea type="text" class="contactTextarea form-control" name="message" id="msg_text" style="margin-top: -10px;"></textarea>

          </div>
        </div>

        <div class="row" style="margin-left: 20px;margin-right: 20px; margin-top: 20px;">
          <div class="col-md-12 text-left">
            <button type="button" class="btn btn-light" id="contactSubmit" style="width: 200px;">Submit</button>
          </div>
        </div>


      </div>



    </div>
    <div class="col-md-3"></div>

  </div>
</section>





















<?php
require 'footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="contact_us_POST.js"></script>


</body>
</html>