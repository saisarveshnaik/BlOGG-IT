<div id="wrapper" class="roundBorder">

    <!-- Sidebar -->

    <div style="margin-left:-10%;" id="sidebar-wrapper" >
        <ul class="sidebar-nav">
            <!-- <li class="sidebar-brand">
                <a style="color: white" href="#">
                    PROFILE
                </a>


          

              
           </li> -->
           
            <?php
              
               if (isset($_SESSION['user_name'])) {
                 echo '<div style="margin-top:10%;">
                 <img id="profile" src="'.$_SESSION["profile_pic"].'">

                 </div>';
             }
             else
             {
                echo "";

             }
             ?>
                  
           <br>
           <li>
            <a style="color: white" href="#">DASHBOARD</a>
        </li>
        <li>
            <a style="color: white" href="add_blogs.php">ADD BLOGS</a>
        </li>
        <li>
            <a style="color: white" href="#">VIEW BLOGS</a>
        </li>
        <li>
            <a style="color: white" href="#">EVENTS</a>
        </li>
        <li>
            <a style="color: white" href="#">ABOUT</a>
        </li>
        <li>
            <a style="color: white" href="#">SERVICES</a>
        </li>
        <li>
            <a style="color: white" href="#">CONTACT</a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1></h1>
                <p></p>
                <p></p>

            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
<!-- Menu Toggle Script -->
   <!--  <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
 -->
