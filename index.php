<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLOGG IT!</title>


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
  
  <div class="container">
   <div class="row" >
    <div class="col-md-2"></div>
    <div class="col-md-10">

      <?php
      require 'connect.php';
      $sql= $conn->prepare("SELECT * FROM blogs INNER JOIN users ON blogs.user_id=users.user_id WHERE blogs.status='0' order by blogs.created_date_time DESC");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      if($sql->rowCount()>0){
        foreach (($sql->fetchAll()) as $key => $row) {




        


        if (isset($_SESSION['user_name'])){
        echo '<div class="jumbotron p-0 "  style="background-color:#ffffff;margin-top:0px;border:2px solid #f3f3f3;border-radius:10px;" >


          <div class="view overlay rounded-top" style="padding:20px;">
          <img src="'.$row['blog_pic'].'" id="blog_image" class="img-fluid" alt="Blog image">
          <a href="#">
          <div class="mask rgba-white-slight"></div>
          </a>
          </div>


          <div class="card-body text-left mb-3" style="margin-top:-50px">


          <h3 class="card-title h3 my-4" style="color:#1b2668"><strong>'.$row['blog_title'].'</strong></h3>


          <div class="row" style="margin-top:-22px;margin-bottom:-10px;">
          <div class="col-md-8">
          <p>Posted by: <a href="profile/profile.php?profile_id='.$row['user_id'].'" style="margin-right:10px;">'.$row['username'].'</a> '.$row['created_date_time'].'</p>
         
          </div>';

          require 'likes/likes.php'; 
          echo '
          </div>
          <hr/>

         

          <p style="font-size:16px;text-align:left;">'.$row['blog_short_desc'].'....<a data-toggle="modal" data-target="#'.$row['blog_id'].'"  href="">Read More</a></p>
          

          <div class="row">
          <div class="col-md-12 text-center">
          <div class="row" style="margin-right:6px;margin-bottom:-14px;">
          <div class="col-md-12" id="commentDiv">
          <input style="margin-left:15px;background-color:#cfe0ee;" class="form-control commentfix" type="" id="comment_text'.$row["blog_id"].'"  placeholder="Leave a comment...."> 
          <button style="width:80px;margin-left:-80px;background-color:#cfe0ee;" type="button" class="btn" onclick=\'commentfunc("' .$row["blog_id"]. '")\' ><i class="fas fa-paper-plane" style="font-size:20px;"></i></button>
          </div>


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
          <div class=" modal-header-full-width   modal-header text-center" style="background-image: linear-gradient(to left, #367cff, #26c0f7);">
          <h3 class="modal-title w-100" style="color:white;"><strong>BLOGG IT!</strong></h3>
          <button style="color:white;" type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="background-color:#ffffff">

          <img id="read_more_img" src="'.$row['blog_pic'].'">

          <h1 style="color:#382d51; margin-top:20px;" class="section-heading text-center wow fadeIn ">'.$row['blog_title'].'</h1>

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

        else{

          echo '<div class="jumbotron p-0 "  style="background-color:#ffffff;margin-top:0px;border:2px solid #f3f3f3;border-radius:10px;" >


          <div class="view overlay rounded-top" style="padding:20px;">
          <img src="'.$row['blog_pic'].'" id="blog_image" class="img-fluid" alt="Blog image">
          <a href="#">
          <div class="mask rgba-white-slight"></div>
          </a>
          </div>


          <div class="card-body text-left mb-3" style="margin-top:-50px">


          <h3 class="card-title h3 my-4" style="color:#1b2668"><strong>'.$row['blog_title'].'</strong></h3>


          <div class="row" style="margin-top:-22px;margin-bottom:-10px;">
          <div class="col-md-8">
          <p>Posted by: <a href="profile/profile.php?profile_id='.$row['user_id'].'" style="margin-right:10px;">'.$row['username'].'</a> '.$row['created_date_time'].'</p>
         
          </div>


          </div>
          <hr/>

         

          <p style="font-size:16px;text-align:left;">'.$row['blog_short_desc'].'....<a data-toggle="modal" data-target="#'.$row['blog_id'].'"  href="">Read More</a></p>
          

          <div class="row">
          <div class="col-md-12 text-center">
          <div class="row" style="margin-right:6px;margin-bottom:-14px;">
          <div class="col-md-12" id="commentDiv">
         
          </div>


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
          <div class=" modal-header-full-width   modal-header text-center" style="background-image: linear-gradient(to left, #367cff, #26c0f7);">
          <h3 class="modal-title w-100" style="color:white;"><strong>BLOGG IT!</strong></h3>
          <button style="color:white;" type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body" style="background-color:#ffffff">

          <img id="read_more_img" src="'.$row['blog_pic'].'">

          <h1 style="color:#382d51; margin-top:20px;" class="section-heading text-center wow fadeIn ">'.$row['blog_title'].'</h1>

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
