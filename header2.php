<?php
require "session_script.php";
?>


<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <script src="https://kit.fontawesome.com/05315665b2.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" type="text/css" href="sidebar.css">

</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #027ddb;" id="navbar_shadow">
    <a class="navbar-brand" style="margin-left: 320px;" href="../index.php"><strong>BLOGGING</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../about_us.php">ABOUT</a>
        </li>
        
        <li class="nav-item active">
         <a class="nav-link" href="../contact_us.php">CONTACT US</a>
       </li>

       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        echo '<h6 style="color:white;margin-top:10px;margin-right:5px;">  Welcome! '.$_SESSION["user_name"].' </h6> | <a href="../logout.php" class="btn btn-danger btn-circle" style="font-size:18px;margin-left:5px;"><i class="fas fa-power-off" ></i></a>';

      }
      else{
        echo '<button class="btn btn-outline-default"><a href="login.php" style="color:black">LOGIN </a></button>
        <button class="btn btn-success margin-left"><a href="register.php" style="color:white">REGISTER</a></button>';
      }
      
      ?>
      
    </form>
  </div>
</nav>

</body>
</html>