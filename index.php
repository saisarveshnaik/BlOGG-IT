<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blogging</title>


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

  <?php
  require 'sidebar.php';
  ?>




  <section>              <!----------------COUNTER SECTION ------------------------>

    <div class="row" style="margin-left: 160px;margin-top: -20px;">
      <div class="col-md-2"></div>
      <div class="col-md-8 text-center">
        

        <div class="container-fluid" style="padding: 1px;margin-bottom: 20px;background-color: #ffffff; width: 900px;" id="index_card">


          <div class="row" style="margin-top: 5px">
            <div class="col-md-4 text-center">
              <?php
              $count=$conn->prepare("SELECT * FROM blogs where user_id='".$_SESSION['user_id']."' and status='0'");

        $count->execute();

        $no_of_blogs=$count->rowCount(); 
        
        if($no_of_blogs == ''){
          $no_of_blogs=0;
        }

        echo '
    <h4 style="margin-top: 30px; "><strong>'.$no_of_blogs.'</strong></h4>';
             ?>
             <p style="font-size:20px;">Blogs</p>
           </div>
           <div class="col-md-4 text-center">
            
            <?php
              $count=$conn->prepare("SELECT * FROM following where following_id='".$_SESSION['user_id']."' and status='1'");

        $count->execute();

        $no_of_followers=$count->rowCount(); 
        
        if($no_of_followers == ''){
          $no_of_followers=0;
        }

        echo '
    <h4 style="margin-top: 30px; "><strong>'.$no_of_followers.'</strong></h4>';
             ?>
             
             <p style="font-size:20px;">Followers</p>
           </div>

           <div class="col-md-4 text-center">
            
            <?php  
            $count=$conn->prepare("SELECT * FROM following where user_id='".$_SESSION['user_id']."' and status='1'");

        $count->execute();

        $no_of_following=$count->rowCount(); 
        
        if($no_of_following == ''){
          $no_of_following=0;
        }

        echo '<h4 style="margin-top: 30px; "><strong>'.$no_of_following.'</strong></h4>';
            
           
           ?>
           <p style="font-size:20px;">Following</p>
         </div>
       </div>

       

     </div>




   </div>
   <div class="col-md-2"></div>
 </div>
 















</section>







<section>
  
  <div class="container">
   <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">

      <?php
      require 'connect.php';
      $sql= $conn->prepare("SELECT * FROM blogs INNER JOIN users ON blogs.user_id=users.user_id order by blogs.created_date_time DESC");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      if($sql->rowCount()>0){
        foreach (($sql->fetchAll()) as $key => $row) {


          $blog_title=$row['blog_title'];
          $blog_desc=$row['blog_desc'];

          echo '<div class="jumbotron p-0 roundShadow" id="jumbotron" style="background-color:#ffffff;">


          <div class="view overlay rounded-top">
          <img src="'.$row['blog_pic'].'" id="blog_image" class="img-fluid" alt="Blog image">
          <a href="#">
          <div class="mask rgba-white-slight"></div>
          </a>
          </div>


          <div class="card-body text-left mb-3">


          <h3 class="card-title h3 my-4"><strong>'.$row['blog_title'].'</strong></h3>


          <div class="row">
          <div class="col-md-8">
          <p style=margin-bottom:5px;><i>Posted by: <a href="profile/profile.php?profile_id='.$row['user_id'].'">'.$row['username'].'</a></i></p>
          <p style="font-size:11px;margin-top:-10px;"><i>created_date_time: '.$row['created_date_time'].'</i></p>
          </div>';

          require 'likes/likes.php'; 
          echo '
          </div>



          <p style="font-size:16px;text-align:left;">'.$row['blog_short_desc'].'</p>

          <div class="row">
          <div class="col-md-9 text-center">
          <div class="row">
          <div class="col-md-12" id="commentDiv">
          <input style="margin-left:15px;background-color:#f8f9fb;" class="form-control commentfix" type="" id="comment_text'.$row["blog_id"].'"  placeholder="Leave a comment...."> 
          <button style="width:80px;margin-left:-80px;" type="button" class="btn btn-light" onclick=\'commentfunc("' .$row["blog_id"]. '")\' ><i class="fas fa-paper-plane" style="font-size:20px;"></i></button>
          </div>


          </div> 
          </div>
          <div class="col-md-3 text-right">
          <div class="btn-group">

          <button style="width:80px;margin-top:2px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$row['blog_id'].'"><i class="fas fa-book-open" style="font-size:18px;"></i></button>
          <button style="width:80px;margin-top:2px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal'.$row['blog_id'].'"><i class="fas fa-exclamation-triangle" style="font-size:18px;"></i></button>
          </div>
          </div>
          </div>

          <!-- Modal -->
          <div class="text-center">
          <div id="myModal'.$row['blog_id'].'" class="modal fade" role="dialog">
          <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
          <div class="modal-header">
          <h4>Report this Blog</h4>
          </div>
          <div class="modal-body">
          <p>We appretiate your report feedback!</p> <br>


          <select name="category" id="report_category' .$row['blog_id']. '" class="form-control" required> 
          <option value="" > Select Category</option>
          <option value="spam" > Spam </option>
          <option value="pornography" > Pornography </option>
          <option value="Hatred and Bullying" > Hatred and Bullying </option>
          <option value="Self-harm" > Self-harm </option>
          <option value="Violant contnet" > Violant,gory and harmful content </option>
          <option value="Illegal activities" > Illegal activities(e.g drug use)</option>
          <option value="Copyright infrigement" > Copyright and trademark infrigement</option>
          <option value="Dont like it" > I just don\'t like it</option>
          </select>


          <input style="margin-top: 1%;" class="form-control" type="text" name="report_desc" id="report_desc' .$row['blog_id']. '" placeholder="Write report description..." required>
          </div>
          <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" onclick=\'reportfunc("' .$row['blog_id']. '")\' class="btn btn-danger" data-dismiss="modal">Report</button>
          </div>
          </div>

          </div>
          </div>
          </div>
          <div class="modal fade right" id="'.$row['blog_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
          <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
          <div class="modal-content-full-width modal-content ">
          <div class=" modal-header-full-width   modal-header text-center">
          <h5 class="modal-title w-100" id="exampleModalPreviewLabel">BLOGGING WEBSITE</h5>
          <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">

          <img id="read_more_img" src="'.$row['blog_pic'].'">

          <h1 class="section-heading text-center wow fadeIn my-5 pt-3">'.$row['blog_title'].'</h1>

          <p class="text-center" style="margin-left:5%;margin-right:5%">'.$row['blog_desc'].'</p>


          <div class="row">
          <div class="col-md-12">
          <h4 style="margin-left:20px;">Comments</h4>
          <hr/>
          </div>
          </div>';


          require 'comments/comment.php';

          echo '

          </div>
          <div class="modal-footer-full-width  modal-footer">
          <button type="button" class="btn btn-danger btn-md btn-rounded" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary btn-md btn-rounded">Save changes</button> -->
          </div>
          </div>
          </div>
          </div>















          </div>
          </div>';

        }
      }
      ?>


    </div>
  </div> 
</div>







</section>









<?php
require 'footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>




<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

</script>

<script type="text/javascript">
  function reportfunc(blog_id)
  { 

   var blog_id=blog_id;
   var report_category=$("#report_category"+blog_id).val();
   var report_desc=$("#report_desc"+blog_id).val();

   if(report_category == ""){

   }

   if(report_desc == ""){

   }


   var dataString = 'blog_id='+blog_id+'&report_category='+report_category+'&report_desc='+report_desc;


   $.ajax({
    type: "POST",
    url: "add_report.php",
    data: dataString,
    cache: false,
    success:function(data){
      if(data == 1){

       window.location.reload();

     }
     else if(data == 5){
      alert("Blog Already Reported!");

    }

  }
});


 }



</script>







</body>
</html>