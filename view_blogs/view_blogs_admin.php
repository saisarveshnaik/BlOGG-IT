<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLOGG IT! | YOUR BLOGS</title>


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../style.css">

  <link rel="stylesheet" type="text/css" href="../sidebar.css">

   <link href="../css/all.css" rel="stylesheet"> 

   <script defer src="../js/all.js"></script>





</head>
<body>

  <?php
  require '../header2.php';
  ?>

  <?php
  require '../sidebar2.php';
  ?>





  <section>
    <div class="container">
      <div class="row" >
        <div class="col-md-2"></div>
        <div class="col-md-10 text-center">
          <div class="container-fluid" style="padding: 40px;background-color: #ffffff" id="about_card">
           <!--  <h1 style="color: #49659f">YOUR BLOGS</h1> -->

           
           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">




            <!-- <thead>



              <tr bgcolor="#027ddb" class="text-center">

                <th><font color="white">Blod title</font></th>
                <th><font color="white">Blog Description</font></th>
                <th><font color="white">Blog Image</font></th>
                <th><font color="white">Action</font></th>

              </tr>
            </thead> -->
            <tbody>



              <?php
              require '../connect.php';
              $sql= $conn->prepare("SELECT * FROM blogs WHERE status='0' order by created_date_time DESC");
              $sql->execute();
              $sql->setFetchMode(PDO::FETCH_ASSOC);
              if($sql->rowCount()>0){
                foreach (($sql->fetchAll()) as $key => $row) {

                  echo '<tr>            

                  <td  bgcolor="#ffffff"><img src="../'.$row['blog_pic'].'" id="view_blog_img"  alt="Blog image"></td>
                  <td  bgcolor="#ffffff"><p style="margin-top:50px;" >'.$row['blog_title'].'</p></td>
                  
                  
                  <td  bgcolor="#ffffff">

                  <div class="btn-group" style="margin-top:40px;">
                  <button type="button" class="btn btn-primary" value="Edit" onclick=\'editfunc("' .$row["blog_id"]. '")\' ><i class="fas fa-pencil-alt" style="margin-right:10px;"></i>Edit</button>


                  <button type="button" class="btn btn-danger" value="Delete" onclick=\'deletefunc("' .$row["blog_id"]. '")\' ><i class="fas fa-trash-alt" style="margin-right:10px;"></i>Delete</button>
                  </div>

                  </td>





                  </tr>';
                }
              }
              ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</section>

























<?php
require '../footer2.php';
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript">
  
  function deletefunc(id)
  { 
    var r = confirm("Press a button!");
    if (r == true) {
      

     var dataString = 'id='+ id;


     $.ajax({
      type: "POST",
      url: "delete_blog.php",
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
 }


 function editfunc(id)
 { 
   window.location.href='update_blog.php?id='+id;
 }

</script>



</body>
</html>