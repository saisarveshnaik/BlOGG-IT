<?php
require 'connect.php';
error_reporting(0);
?>


<div id="wrapper" class="roundBorder">

    <!-- Sidebar -->

    <div style="margin-left:-190px;" id="sidebar-wrapper" >
        <ul class="sidebar-nav text-center" >
         
            <?php
            
            if (isset($_SESSION['user_name'])) {
               echo '<div style="margin-top:10%;">
               <img id="profile" src="'.$_SESSION["profile_pic"].'">

               </div>';
           }
           else
           {
            echo '<div style="margin-top:10%;">
            <img id="profile" src="images/profile.png">

            </div>';

        }
        ?>
        
        <br>


        <?php 


        if ($type_id=='0') {
            echo'           <li>
            <a style="color: white;margin-left:-18px" href="profile_user.php">YOUR PROFILE</a>
            </li>
            <li>
            <a style="color: white;margin-left:-18px" href="add_blogs.php">ADD BLOGS</a>
            </li>
            <li>
            <a style="color: white;margin-left:-18px" href="view_blogs/view_blogs_admin.php">ALL BLOGS</a>
            </li>
            <li>
            <a style="color: white;margin-left:-18px" href="messages.php">MESSAGES</a>
            </li>
            <li>
            <a style="color: white;margin-left:-18px" href="reports.php">REPORTS</a>
            </li>

            
            <li>
            <a style="color: white;margin-left:-18px" href="about_us.php">ABOUT US</a>
            </li>
            <li>
            <a style="color: white;margin-left:-18px" href="contact_us.php">CONTACT US</a>
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
            ';
        }
        else if($type_id=='1'){
            echo'           <li>
            <a style="color: white;margin-left:-18px" href="profile_user.php">YOUR PROFILE</a>
            </li>
            <li>
            <a style="color: white;margin-left:-18px" href="add_blogs.php">ADD BLOGS</a>
            </li>
            <li>
            <a style="color: white;margin-left:-18px" href="view_blogs/view_blogs.php">YOUR BLOGS</a>
            </li>
            
            <li>
            <a style="color: white;margin-left:-18px" href="about_us.php">ABOUT US</a>
            </li>
            <li>
            <a style="color: white;margin-left:-18px" href="contact_us.php">CONTACT US</a>
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
            ';

        }

        else{
            echo'
            <li>
            <a style="color: white;margin-left:-18px" href="about_us.php">ABOUT US</a>
            </li>
            <li>
            <a style="color: white;margin-left:-18px" href="contact_us.php">CONTACT US</a>
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
            ';
        }

        ?>
