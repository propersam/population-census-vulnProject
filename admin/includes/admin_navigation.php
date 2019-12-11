
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.php">POPULATION CENSUS SYSTEM</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i> <?= "{$_SESSION['username']}" . " ( {$_SESSION['user_role']} )"; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>

                <li class="divider"></li>

                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            
            
        <?php
            $active1='';
            $active2='';
            $active3='';
            $active4='';
            

             switch($page){
                
                case 1:
                    $active1 = 'active';
                    break;
                case 2:
                    $active2 = 'active';
                    break;
                case 3:
                    $active3 = 'active';
                    break;
                case 4:
                    $active4 = 'active';
                    break;
                
                default:
                    pass;

            }
            echo "
            <li class='{$active1}'>
             <a href='index.php'><i class='fa fa-fw fa-dashboard'></i> Dashboard</a>
            </li>";

            if ($_SESSION['user_role'] == 'staff'){
               
                echo "
                <li class='{$active2}' >
                    <a href='register_family.php'><i class='fa fa-fw fa-table'></i> Register Family Head</a>
                </li>
                <li class='{$active3}'>
                    <a href='pop_statistics.php'><i class='fa fa-fw fa-globe'></i> Current Population Data</a>
                </li>
                ";
            } else if($_SESSION['user_role'] == 'supervisor') {
                echo "
                <li class='{$active2}'>
                    <a href='register_staff.php'><i class='fa fa-fw fa-table'></i> Register New Admin </a>
                </li>
                <li class='{$active3}'>
                    <a href='pop_statistics.php'><i class='fa fa-fw fa-globe'></i> Current Population Data</a>
                </li>
                <li class='{$active4}'>
                    <a href='admin_view.php'><i class='fa fa-fw fa-eye'></i> View Admin activities</a>
                </li>
                ";   
            } else {
                echo "
                <li class='{$active2}'>
                    <a href='add_fam_member.php'><i class='fa fa-fw fa-table'></i> Add Family member</a>
                </li>
                <li class='{$active3}'>
                    <a href='fam_member.php'><i class='fa fa-fw fa-edit'></i> View / Update Family Details</a>
                </li>
                ";
            }

           

            ?>

            <li>
                <a href='../includes/logout.php'><i class='fa fa-fw fa-power-off'></i> Logout</a>
            </li>
            <!-- <li>
                <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
            </li>
            
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                </ul>
            </li>
            <li class="active">
                <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
            </li> -->
           
        </ul>
    </div>
    <!-- /.navbar-collapse -->
