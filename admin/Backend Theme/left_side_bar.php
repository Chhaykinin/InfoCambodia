<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <!-- chenge profile admin with code php -->
            <?php
                   $sql_select = "SELECT * FROM tbl_admin WHERE id =$id";
                   $result = $con->query($sql_select);
                   $row = mysqli_fetch_assoc($result);
                   echo '
                        <div class="">
                        
                        <img src="./Image/'.$row['profile'].'" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1">'.$row['name'].'</h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    ';
            ?>
            
        </div>
       
        <!-- Sidemenu -->
        <div id="sidebar-menu">
        <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <!-- tbl_logo -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Logo Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_logo_view.php">View</a></li>
                        <li><a href="./tbl_logo_insert.php">Insert</a></li>
                    </ul>
                </li>
                <!-- tbl_about_us -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>About US Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_about_us_view.php">View</a></li>
                        <li><a href="./tbl_about_us_insert.php">Insert</a></li>
                    </ul>
                </li>
                <!-- tbl_contact -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-contacts-line"></i>
                        <span>Contact Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_contact_view.php">View</a></li>
                        <li><a href="./tbl_contact_insert.php">Insert</a></li>
                    </ul>
                </li>
                <!-- tbl_news_page -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> News Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_news_view.php">View</a></li>
                        <li><a href="./tbl_news_insert.php">Insert</a></li>
                    </ul>
                </li>
                <!-- tbl_ad -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Ad page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_ad_view.php">View</a></li>
                        <li><a href="./tbl_ad_insert.php">Insert</a></li>
                    </ul>
                </li>
                <!-- header page -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Header Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="./tbl_header_view.php">View</a></li>
                        <li><a href="./tbl_header_insert.php">Insert</a></li>
                    </ul>
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>