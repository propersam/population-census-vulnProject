
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
                            Family Member Registeration Page
                            <small>Register Family Member</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Register Family Member
                            </li>
                        </ol>
                    </div>

                    <div class="col-12 col-md-1"></div>
                    <div class="col-12 col-md-10">
                    
                    <!-- 
                     - Get family unique id from session,
                    - input for firstname, other_name, 
                    -  occupation
                    -  religion, relationship, age, 
                    -  member_contact number, 
                    -  contact address

                       
                    
                    -->
                    <?php
                  
                            include "includes/receive_data2.php";
                ?>
                </div>
                <div class='col-12 col-md-1'></div>




                </div>
                <!-- /.row -->














            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include "includes/admin_footer.php" ?>