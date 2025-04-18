
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jquery.vectormap css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Kantumruy:wght@300;400;700&family=Lato:wght@100;300;400;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">

    </head>
    <style>
        *{
            font-family: Roboto,Hanuman;
        }
    </style>
    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="./index.php" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="logo-sm" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="logo-dark" height="20">
                                    </span>
                                </a>
                
                                <a href="index.php" class="logo logo-light">
                                    <span class="logo-sm">
                                        <!-- <img src="assets/images/logo-sm.png" alt="logo-sm-light" height="22"> -->
                                    </span>
                                    <span class="logo-lg">
                                        <!-- <img src="assets/images/logo-light.png" alt="logo-light" height="20"> -->
                                    </span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                                <i class="ri-menu-2-line align-middle"></i>
                            </button>
                        </div>
                        
                        <div class="d-flex">
                            <div class="dropdown d-none d-lg-inline-block ms-1">
                                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                    <i class="ri-fullscreen-line"></i>
                                </button>
                            </div>
                            <div class="dropdown d-inline-block user-dropdown">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- chenge pic header -->
                                    <?php
                                        $sql_select = "SELECT * FROM tbl_admin WHERE id =$id";
                                        $result = $con->query($sql_select);
                                        $row = mysqli_fetch_assoc($result);
                                        echo '
                                            <img class="rounded-circle header-profile-user" src="./Image/'.$row['profile'].'"alt="Header Avatar">
                                            <span class="d-none d-xl-inline-block ms-1">'.$row['name'].'</span>
                                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                        ';
                                    ?>    
                                   
                                </button>
                                
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a class="dropdown-item text-danger" href="./logout.php"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                    <i class="ri-settings-2-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
            </header>