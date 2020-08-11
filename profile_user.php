<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLOGG IT! | PROFILE</title>


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



  


  <section>
    <div class="container" style="margin-top: 10px;background-color: white;padding: 50px;" id="container_shadow">


      <div class="row">
        <?php

       

        require 'connect.php';
        $sql= $conn->prepare("SELECT * FROM users where user_id='".$user_id."'");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        if($sql->rowCount()>0){
          foreach (($sql->fetchAll()) as $key => $row) {
            

  echo '

        <div class="col-md-3 text-center">
          <img src="'.$row['profile_pic'].'" id="profile_page_pic" width="100" height="100">
          
        </div>
     

        <div class="col-md-3 text-center">';

        $count=$conn->prepare("SELECT * FROM blogs where user_id='".$user_id."' and status='0'");

        $count->execute();

        $no_of_blogs=$count->rowCount(); 
        
        if($no_of_blogs == ''){
          $no_of_blogs=0;
        }

        echo '
          
          <h4 style="margin-top: 30px; "><strong>'.$no_of_blogs.'</strong></h4>
          <a href="" style="color: black;font-size: 20px;"><p>Posts</p></a>
          
        </div>
        <div class="col-md-3 text-center">';

        $count=$conn->prepare("SELECT * FROM following where following_id='".$user_id."' and status='1'");

        $count->execute();

        $no_of_followers=$count->rowCount(); 
        
        if($no_of_followers == ''){
          $no_of_followers=0;
        }

        echo '

          <h4 style="margin-top: 30px; "><strong>'.$no_of_followers.'</strong></h4>
          <a href="" style="color: black;font-size: 20px;"><p>Followers</p></a>
        </div>
        <div class="col-md-3 text-center">';

          $count=$conn->prepare("SELECT * FROM following where user_id='".$user_id."' and status='1'");

        $count->execute();

        $no_of_following=$count->rowCount(); 
        
        if($no_of_following == ''){
          $no_of_following=0;
        }

        echo '
          <h4 style="margin-top: 30px; "><strong>'. $no_of_following.'</strong></h4>
          <a href="" style="color: black;font-size: 20px;"><p>Following</p></a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h4 style="margin-top: 20px;margin-left: 60px; text-align: left; ">'.$row['user_name'].'</h4>
          <p style="margin-left: 70px;margin-top: -6px; text-align: left;font-size: 18px ">'.$row['user_address'].'</p>
          <p style="margin-left: 70px;margin-top: -15px; text-align: left;font-size: 18px ">'.$row['user_cont'].'</p>
          <p style="margin-left: 70px;margin-top: -15px; text-align: left;font-size: 18px ">'.$row['user_email'].'</p>
          
        </div>
      </div>';
    }
  }
  ?>

      <div class="row" style="bac">
        <div class="col-md-12 text-center">

          <a href="edit_profile.php" class="btn btn-light form-control" style="background-color:#fafafa;width:900px;border:1px solid grey;">Edit Profile</a>

          <hr/>    <!-----  Horizontal rule   ----->
        </div>
      </div>




      <div class="row" style="margin-left: 50px;margin-right: 50px">
        <div class="col-md-4 text-center" style="padding: 0px;">

          <img src="profile_pictures/lloyd.jpeg" id="profile_blogs_image">
          
        </div>
        <div class="col-md-4 text-center" style="padding: 0px;">

          <img src="profile_pictures/sai.jpeg" id="profile_blogs_image">
          
        </div>
        <div class="col-md-4 text-center" style="padding: 0px;">

          <img src="profile_pictures/viru.jpeg" id="profile_blogs_image">
          
        </div>
      </div>

      <div class="row" style="margin-left: 50px;margin-right: 50px">
        <div class="col-md-4 text-center" style="padding: 0px;">

          <img src="profile_pictures/lloyd.jpeg" id="profile_blogs_image">
          
        </div>
        <div class="col-md-4 text-center" style="padding: 0px;">

          <img src="profile_pictures/lloyd.jpeg" id="profile_blogs_image">
          
        </div>
        <div class="col-md-4 text-center" style="padding: 0px;">

          <img src="profile_pictures/lloyd.jpeg" id="profile_blogs_image">
          
        </div>
      </div>





    </div>
  </section>






  <?php
  require 'footer.php';
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>


</body>
</html>