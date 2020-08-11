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
           <div class="row" style="margin-top:-30px;">
           <div class="col-md-2 text-right" style="padding:0px;">
           <strong><h6 style="color:#1b2668;margin-top:14px;"><span id=""> '.$number_of_rows.'</span>  Likes </h6></strong>
           </div>
           <div class="col-md-10 text-right">';

           $count=$conn->prepare("SELECT * FROM likes where blog_id='".$blog_id."' and user_id='".$user_id."' and status='1'");

        $count->execute();

        $number_of_rows1=$count->rowCount(); 
        
        if($number_of_rows1 == ""){
        echo '
        
        <button style="background-color:black;border-radius:10px;width:150px;"  type="button" class="btn btn-dark form-control" onclick=\'likefunc("' .$blog_id. '")\'><i class="fas fa-thumbs-up" style="font-size:16px;margin-top:5px;margin-right:5px;"></i>Like</button>

         <button style="border-radius:10px;background-color:#ffd7d7;" type="button" class="btn" data-toggle="modal" data-target="#myModal'.$row['blog_id'].'"><i class="fas fa-exclamation-triangle" style="font-size:16px;color:#ec0b00;"></i></button>
        ';

        }
        else
        {
        echo '<button style="width:150px;border-radius:10px;"  type="button" class="btn btn-warning form-control" onclick=\'likefunc("' .$blog_id. '")\'><i class="fas fa-thumbs-down" style="font-size:16px;margin-top:5px;margin-right:5px;"></i>Unlike</button>


          <button style="border-radius:10px;background-color:#ffd7d7;" type="button" class="btn" data-toggle="modal" data-target="#myModal'.$row['blog_id'].'"><i class="fas fa-exclamation-triangle" style="font-size:16px;color:#ec0b00;"></i></button>
         ';
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