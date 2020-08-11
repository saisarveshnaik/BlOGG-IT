<?php
require "session_script.php";
?>


<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" type="text/css" href="sidebar.css">

  <link href="css/all.css" rel="stylesheet"> 

  <script defer src="js/all.js"></script>

</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient(to left, #367cff, #26c0f7);" >
    <a class="navbar-brand" style="margin-left: 60px;color: white;" href="../index.php"><strong>BLOGG IT!</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" style="color: white;">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php" style="color: white;margin-left:200px;">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../about_us.php" style="color: white;">ABOUT</a>
        </li>
        
        <li class="nav-item active">
         <a class="nav-link" href="../contact_us.php" style="color: white;">CONTACT US</a>
       </li>

       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          CATEGORIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 form-navbar">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->

      <?php
      
      if (isset($_SESSION['user_name'])) {
        echo '
        <h6 style="color:white;margin-top:10px;margin-right:5px;">  Welcome! '.$_SESSION["user_name"].' </h6> | 
        <a href="../logout.php" class="btn btn-light btn-circle" style="font-size:18px;margin-left:5px;color:#027ddb;border:1px solid #027ddb;"><i class="fas fa-power-off" style="margin-right:10px;background-color:#ffffff"></i>Logout</a>
        ';

      }
      else{
        echo '
        <a href="../login.php" class="btn btn-light margin-left" style="color:#ffffff;background-color:#367cff;border-radius:10px;width:150px;margin-right:16px">Login</a>

        <a href="../register.php" class="btn btn-light" style="color:#027ddb;border:2px solid #027ddb;background-color:#ffffff;border-radius:10px;width:150px;">Register</a>';
        
      }
      
      ?>
      
    </form>
  </div>
</nav>

</body>
</html>
