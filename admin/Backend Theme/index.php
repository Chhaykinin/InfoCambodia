<?php
session_start();
$id =$_SESSION['id'];
if(!$_SESSION['id']){
    header("location:login.php");
}
$con =mysqli_connect('localhost','root','','db_business_cambodia');
include("header.php");
?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                include("left_side_bar.php");
            ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid h-100">
                        <div style="overflow: hidden;width:90%px;height: 75vh" class="slide position-relative">
                        <?php
                            $sql_select = "SELECT * FROM tbl_admin WHERE id =$id";
                            $result = $con->query($sql_select);
                            $row = mysqli_fetch_assoc($result);
                            echo '
                                <img class="w-100 h-100 position-absolute" style="object-fit: cover;" src="./assets/images/backgroud-dashboard.gif" alt="">
                                <div style="background-color: #0000007a;" class="container-fluid d-flex align-items-center justify-content-center position-absolute p-0 h-100">
                                    <div class="box text-center">
                                        <h1 class="text-white">Welcome to Admin Dashboard</h1>
                                        <h1 class="text-warning">__'.$row['name'].'__</h1> 
                                    </div>
                                </div>
                            ';
                            // $row['name'] cheab yk name
                        ?>
                            
                        </div>
                    </div>
                    
                </div>
                <!-- End Page-content -->
                <?php
                    include("footer.php");
                ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        <?php
            include("right_side_bar.php");
        ?>
        <!-- /Right-bar -->
    </body>

</html>