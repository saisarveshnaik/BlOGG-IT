<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blogging | YOUR BLOGS</title>


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

   <script src="https://kit.fontawesome.com/05315665b2.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="../style.css">

  <link rel="stylesheet" type="text/css" href="../sidebar.css">





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



      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10 text-center">
          <h1 style="color: white">YOUR BLOGS</h1>
        </div>
      </div>


      <div class="row" style="margin-top: 50px;">
        <div class="col-md-2"></div>
        <div class="col-md-10">

       
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">




            <thead>



              <tr bgcolor="#29AAE2" class="text-center">

                <th><font color="white">Blod title</font></th>
                <th><font color="white">Blog Description</font></th>
                <th><font color="white">Blog Image</font></th>
                <th><font color="white">Action</th>

                </tr>
              </thead>
              <tbody>



                <?php
                require '../connect.php';
                $sql= $conn->prepare("SELECT * FROM blogs where user_id='".$_SESSION['user_id']."' and status='0' order by created_date_time DESC");
                $sql->execute();
                $sql->setFetchMode(PDO::FETCH_ASSOC);
                if($sql->rowCount()>0){
                  foreach (($sql->fetchAll()) as $key => $row) {

                    echo '<tr>            


                    <td  bgcolor="#2f3e46"><h6 style="color:white;">'.$row['blog_title'].'</h6></td>
                    <td  bgcolor="#2f3e46"><p style="color:white;">'.$row['blog_short_desc'].'</p></td>
                    <td  bgcolor="#2f3e46"><img src="../'.$row['blog_pic'].'" id="view_blog_img"  alt="Blog image"></td>
                    <td  bgcolor="#2f3e46">

                    <div class="btn-group">
                    <button type="button" class="btn btn-primary" value="Edit" onclick=\'editfunc("' .$row["blog_id"]. '")\' ><i class="fas fa-pencil-alt"></i></button>


                    <button type="button" class="btn btn-danger" value="Delete" onclick=\'deletefunc("' .$row["blog_id"]. '")\' ><i class="fas fa-trash-alt"></i></button>
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
    </section>

























    <?php
    require '../footer.php';
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