<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLOGG IT! | Messages</title>


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

        <h3 style="color:#1f2564">Messages</h3>
        <hr/>

        <div class="container-fluid" style="padding: 40px;background-color: #ffffff" id="about_card">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">




            <thead>

                  </thead>
                  <tbody>



                    <?php
                    require 'connect.php';
                    $sql= $conn->prepare("SELECT * FROM messages where status='1' order by created_date_time desc");
                    $sql->execute();
                    $sql->setFetchMode(PDO::FETCH_ASSOC);
                    if($sql->rowCount()>0){
                      foreach (($sql->fetchAll()) as $key => $row) {

                        echo '<tr class="text-center">            


                        <td  bgcolor="#ffffff"><h6>'.$row['msg_firstname'].'</h6></td>
                        <td  bgcolor="#ffffff"><p>'.$row['msg_email'].'</p></td>
                        <td  bgcolor="#ffffff"><p>'.$row['msg_text'].'</p></td>
                        <td  bgcolor="#ffffff"><p>'.$row['created_date_time'].'</p></td>

                        <td  bgcolor="#ffffff">

                  <div class="btn-group">
                  <button type="button" class="btn btn-primary" value="Edit" onclick=\'editfunc("' .$row["msg_id"]. '")\' ><i class="fas fa-eye"></i>Mark as read</button>

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
      require 'footer.php';
      ?>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <script src="js/bootstrap.min.js"></script>

      <script type="text/javascript">

        function editfunc(id)
        { 
          var r = confirm("Press a button!");
          if (r == true) {


           var dataString = 'id='+ id;


           $.ajax({
            type: "POST",
            url: "message_read.php",
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


       

     </script>



   </body>
   </html>