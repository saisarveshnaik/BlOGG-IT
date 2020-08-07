
<?php
 $sql= $conn->prepare("SELECT * FROM comments where blog_id='".$row['blog_id']."' order by created_date_time DESC");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            if($sql->rowCount()>0){
              foreach (($sql->fetchAll()) as $key => $row) {
                echo'<hr/>';
                
                                $sql= $conn->prepare("SELECT * FROM users where user_id='".$row['user_id']."'");
                                $sql->execute();
                                $sql->setFetchMode(PDO::FETCH_ASSOC);
                                if($sql->rowCount()>0){
                                  foreach (($sql->fetchAll()) as $key => $row1) {

                                       echo '<div class="row">
                                              <div class="col-md-1">
                                              <img id="commenterImage" src="'.$row1["profile_pic"].'" /> 
                                              </div>
                                              <div class="col-md-11" >
                                              <div class="row">
                                              <div class="col-md-6">
                                              <h6>'.$row1["user_name"].'@'.$row1["username"].'<h6>
                                              </div>
                                              <div class="col-md-6">

                                              <p style="text-align:right;"><i>'.$row["created_date_time"].'</i></p>
                                              </div>
                                              </div>

                                              <p>'.$row['comment_text'].'</p>


                                              </div>
                                              </div>
                                              <hr/>';
                                            }
                                          }
                                        }
                                      }
                                      else{
              echo 'No Comments';
            }

            ?>

<script type="text/javascript">
   function commentfunc(id)
    { 
      
           var blog_id=id;
           var comment=$("#comment_text"+blog_id).val();       

           var dataString = 'blog_id='+blog_id+'&comment_text='+comment;


            $.ajax({
            type: "POST",
            url: "comments/add_comment.php",
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