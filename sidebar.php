<?php
require 'connect.php';
error_reporting(0);
?>


<div id="wrapper" class="roundBorder">

    <!-- Sidebar -->

    <div style="margin-left:-190px;" id="sidebar-wrapper" >
        <ul class="sidebar-nav">
           
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


<?php 


          if ($type_id=='0') {
            echo'           <li>
            <a style="color: white" href="#">DASHBOARD</a>
        </li>
        <li>
            <a style="color: white" href="blog_request.php">BLOG REQUEST</a>
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
';
        }
        else if($type_id=='1'){
            echo'           <li>
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
';

        }

        else{
            echo'           <li>
            <a style="color: white" href="#">DASHBOARD</a>
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
';
        }

        ?>