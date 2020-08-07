<?php

$blog_id=$row['blog_id'];
$user_id=$_SESSION['user_id'];

$count=$conn->prepare("SELECT * FROM likes where blog_id='".$blog_id."' and status='1'");

        $count->execute();

        $number_of_rows=$count->rowCount(); 
        
        if($number_of_rows == ''){
          $number_of_rows=0;
        }

echo '<div class="col-md-4">
           <div class="row">
           <div class="col-md-6 text-right">
           <strong><h6 style="margin-top:10%;"><span id=""> '.$number_of_rows.'</span>  Likes </h6></strong>
           </div>
           <div class="col-md-6">';

           $count=$conn->prepare("SELECT * FROM likes where blog_id='".$blog_id."' and user_id='".$user_id."' and status='1'");

        $count->execute();

        $number_of_rows1=$count->rowCount(); 
        
        if($number_of_rows1 == ""){
        echo '<button  type="button" class="btn btn-success form-control" onclick=\'likefunc("' .$blog_id. '")\'>Like</button>';
        }
        else
        {
        echo '<button  type="button" class="btn btn-success form-control" onclick=\'likefunc("' .$blog_id. '")\'>UnLike</button>';
        }

      echo'</div>
           </div>
           
           
           </div>';



?>

<script type="text/javascript">
  

  function likefunc(blog_id)
    { 
      
           var blog_id=blog_id;
           
                  

           var dataString = 'blog_id='+blog_id;


            $.ajax({
            type: "GET",
            url: "likes/add_like.php",
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