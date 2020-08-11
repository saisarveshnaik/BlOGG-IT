<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLOGG IT! | REPORTS</title>


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
     <div class="row" style="margin-top: 2%;">


      <div class="col-md-2"></div>
      <div class="col-md-10 text-center">

        <h2>Reports</h2>
        <hr/>

        <div class="container-fluid" style="padding: 40px;background-color: #ffffff" id="about_card">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">




            <thead>



              <tr bgcolor="#027ddb" class="text-center">

                <th><font color="white">Report ID</font></th>
                <th><font color="white">Blog ID</font></th>
                <th><font color="white">Username</font></th>
                <th><font color="white">Category</th>
                  <th><font color="white">Description</th>
                    <th><font color="white">Created at</th>

                    </tr>
                  </thead>
                  <tbody>



                    <?php
                    require 'connect.php';
                    $sql= $conn->prepare("SELECT * FROM reports INNER JOIN users ON reports.user_id=users.user_id order by reports.created_at DESC");
                    $sql->execute();
                    $sql->setFetchMode(PDO::FETCH_ASSOC);
                    if($sql->rowCount()>0){
                      foreach (($sql->fetchAll()) as $key => $row) {

                        echo '<tr class="text-center">            


                        <td  bgcolor="#ffffff"><h6>'.$row['report_id'].'</h6></td>
                        <td  bgcolor="#ffffff"><p>'.$row['blog_id'].'</p></td>
                        <td  bgcolor="#ffffff"><p>'.$row['username'].'</p></td>
                        <td  bgcolor="#ffffff"><p>'.$row['report_category'].'</p></td>
                        <td  bgcolor="#ffffff"><p>'.$row['report_desc'].'</p></td>
                        <td  bgcolor="#ffffff"><p>'.$row['created_at'].'</p></td>





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
      require 'footer.php';
      ?>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <script src="js/bootstrap.min.js"></script>

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
