<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blogging</title>


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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




  <section>
    <div class="container">
     <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10">

        <?php
        require 'connect.php';
        $sql= $conn->prepare("SELECT * FROM blogs order by created_date_time DESC");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        if($sql->rowCount()>0){
          foreach (($sql->fetchAll()) as $key => $row) {
            
            
            $blog_title=$row['blog_title'];
            $blog_desc=$row['blog_desc'];

           echo '<div class="jumbotron p-0 roundShadow" id="jumbotron">


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
           <h6><i>Posted by:  ';
           include 'get_uname.php';
            echo '</i></h6>
           <p><i>created_date_time: '.$row['created_date_time'].'</i></p>
           </div>';

           require 'likes/likes.php'; 
           echo '
           </div>



           <p style="font-size:16px;text-align:left;">'.$row['blog_short_desc'].'</p>

           <div class="row">
           <div class="col-md-8 text-center">
           <input  class="form-control" type="" id="comment_text'.$row["blog_id"].'"  placeholder="Leave a comment....">  
           </div>
           <div class="col-md-4 text-center">
           <div class="btn-group">
           <button type="button" class="btn btn-success" onclick=\'commentfunc("' .$row["blog_id"]. '")\' >Comment</button>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$row['blog_id'].'">Read more</button>
           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Report</button>
           </div>
           </div>
           </div>';
          require 'comments/comment.php';



echo '
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






<!-- Modal -->
<div class="text-center">
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Report this Blog</h4>
        </div>
        <div class="modal-body">
          <p>We appretiate your report feedback!</p> <br>


          <select name="category" id="report_category" class="form-control"> 
            <option value="" > Select Category</option>
            <option value="spam" > Spam </option>
            <option value="pornography" > Pornography </option>
            <option value="Hatred and Bullying" > Hatred and Bullying </option>
            <option value="Self-harm" > Self-harm </option>
            <option value="Violant contnet" > Violant,gory and harmful content </option>
            <option value="Illegal activities" > Illegal activities(e.g drug use)</option>
            <option value="Copyright infrigement" > Copyright and trademark infrigement</option>
            <option value="Dont like it" > I just don't like it</option>
          </select>


          <input style="margin-top: 1%;" class="form-control" type="text" name="report_desc" id="report_desc" placeholder="Write report description...">
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Report</button>
        </div>
      </div>

    </div>
  </div>
</div>





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




</body>
</html>