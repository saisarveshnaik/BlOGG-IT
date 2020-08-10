<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blogging | PROFILE</title>


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <script src="https://kit.fontawesome.com/05315665b2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" type="text/css" href="../sidebar.css">





</head>
<body>

  <?php
  require '../header.php';
  ?>



  


<section>
<div class="container" style="margin-top: 100px;background-color: white;padding: 50px;" id="container_shadow">


<div class="row">
  <?php

        $profile_id=$_GET['profile_id'];

        require '../connect.php';
        $sql= $conn->prepare("SELECT * FROM users where user_id='".$profile_id."'");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        if($sql->rowCount()>0){
          foreach (($sql->fetchAll()) as $key => $row) {
            

  echo '
  <div class="col-md-3 text-center">
    <img src="../'.$row['profile_pic'].'" id="profile_page_pic" width="100" height="100">
     
  </div>

  <div class="col-md-3 text-center">';
  
    $count=$conn->prepare("SELECT * FROM blogs where user_id='".$profile_id."' and status='0'");

        $count->execute();

        $no_of_blogs=$count->rowCount(); 
        
        if($no_of_blogs == ''){
          $no_of_blogs=0;
        }

        echo '
    <h4 style="margin-top: 30px; "><strong>'.$no_of_blogs.'</strong></h4>
    <a href="" style="color: black;font-size: 20px;"><p>Posts</p></a>
    
  </div>
  <div class="col-md-3 text-center">
  ';
  
    $count=$conn->prepare("SELECT * FROM following where following_id='".$profile_id."' and status='1'");

        $count->execute();

        $no_of_followers=$count->rowCount(); 
        
        if($no_of_followers == ''){
          $no_of_followers=0;
        }

        echo '
    <h4 style="margin-top: 30px; "><strong>'.$no_of_followers.'</strong></h4>
    <a href="" style="color: black;font-size: 20px;"><p>Followers</p></a>
  </div>
  <div class="col-md-3 text-center">
  ';
  
    $count=$conn->prepare("SELECT * FROM following where user_id='".$profile_id."' and status='1'");

        $count->execute();

        $no_of_following=$count->rowCount(); 
        
        if($no_of_following == ''){
          $no_of_following=0;
        }

        echo '
    <h4 style="margin-top: 30px; "><strong>'.$no_of_following.'</strong></h4>
    <a href="" style="color: black;font-size: 20px;"><p>Following</p></a>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h4 style="margin-top: 20px;margin-left: 60px; text-align: left; ">'.$row['user_name'].'</h4>
    
    
    <p style="margin-left: 70px;margin-top: -15px; text-align: left;font-size: 18px ">'.$row['user_address'].'</p>
    
    <p style="margin-left: 70px;margin-top: -15px; text-align: left;font-size: 18px ">'.$row['user_cont'].'</p>
    <a href=""><p style="margin-left: 70px;margin-top: -15px; text-align: left;font-size: 18px ">'.$row['user_email'].'</p></a>
  </div>
</div>
';
}
}
?>

<div class="row">
  <div class="col-md-12 text-center">
    <?php

     $count=$conn->prepare("SELECT * FROM following where user_id='".$_SESSION['user_id']."' and following_id='".$profile_id."' and status='1'");

        $count->execute();

        $follow=$count->rowCount(); 
        
        if($follow == ""){
        echo '<button  type="button" class="btn btn-primary form-control" style="width:900px;border:1px solid grey;" onclick=\'followfunc("' .$profile_id. '")\'><a href="" style="color: white">Follow</a></button>';

        }
        else
        {
        echo '<button  type="button" class="btn btn-primary form-control" style="width:900px;border:1px solid grey;" onclick=\'followfunc("' .$profile_id. '")\'><a href="" style="color: white">UnFollow</a></button>';
        }

    
    ?>
    <hr/>    <!-----  Horizontal rule   ----->
  </div>
</div>
<?php
$pic_count=0;
$sql= $conn->prepare("SELECT * FROM blogs where user_id='".$profile_id."' order by created_date_time DESC");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      if($sql->rowCount()>0){
        foreach (($sql->fetchAll()) as $key => $row) {

          if($pic_count == '0')
          {
          echo '
          <div class="row" style="margin-left: 50px;margin-right: 50px">';
          $pic_count=3;
          }

          echo '<div class="col-md-4 text-center" style="padding: 0px;">
                <img src="../'.$row['blog_pic'].'" width="250" height="250">
                </div>';
                $pic_count--;
          if($pic_count == '0')
          {
          echo '
          </div>';
          
          }

          }
        }
        ?>
    
  

</div>
</section>






  <?php
require '../footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript">
  

function followfunc(profile_id)
    { 
      
           var profile_id=profile_id;
           
                  

           var dataString = 'profile_id='+profile_id;


            $.ajax({
            type: "GET",
            url: "add_profile.php",
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
</script>
</body>
</html>