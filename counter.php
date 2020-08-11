
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
