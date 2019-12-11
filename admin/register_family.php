
<?php include "includes/admin_header.php"; ?>
<div id="wrapper">

            
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <?php $page=2; include "includes/admin_navigation.php" ?>

    </nav>
   

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">


    <div class="col-lg-12">
        <h1 class="page-header">
            FAMILY REGISTRATION PAGE
            <small>Register Family Head</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i>  Family Registration Page
            </li>
        </ol>
    </div>

<div class="col-12 col-md-2"></div>
<div class="col-12 col-md-8">
                    
                    <!-- 

                        - input for family_name, family address, select local gov't, state of origin,
                        unique pvc_num, max_family_num,

                        - auto generate family unique id not editable,
                    
                    -->
                    <?php
                  
                            include "includes/receive_data.php";
                ?>
            </div>
            <div class='col-12 col-md-2'></div>



                 </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->";

 <?php include "includes/admin_footer.php"; ?>