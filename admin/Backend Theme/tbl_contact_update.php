<?php
    include("function.php");
    $id =$_SESSION['id'];
    include("header.php");
    $contact_id =$_GET['id'];
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <h4 class="card-title">Logo Insert Page</h4><br><br>
                                <?php
                                    $sql_select= "SELECT * FROM tbl_contact WHERE id =$contact_id";
                                    $result = $con->query($sql_select);
                                    $row = mysqli_fetch_assoc($result);
                                    echo '
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <input type="hidden" value="'.$row['id'].'" name="id">
                                            <div class="row mb-3">
                                                <label for="" class="col-sm-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="email" value="'.$row['phone'].'" name="phone_number">
                                                </div>
                                            </div>
                                        
                                            <div class="row mb-3">
                                                <label for="" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="" value="'.$row['address'].'" name="address">
                                                </div>
                                            </div>
                                            <button name="btn_update_contact" type="submit" class="btn btn-info waves-effect waves-linght">Update Contact</button>
                                        
                                        </form>
                                    ';
                                ?>
                                

                            </div>
                        </div>
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
<script>

    $(document).ready(function(){
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
   

</script>