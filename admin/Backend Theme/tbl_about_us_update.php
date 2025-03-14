<?php
    include("function.php");
    $id =$_SESSION['id'];
    include("header.php");
    $id_param =$_GET['id'];
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
                                    $sql_select ="SELECT * FROM tbl_about_us WHERE id = $id_param";
                                    $result = $con->query($sql_select);
                                    $row=mysqli_fetch_assoc($result);
                                    echo '
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" id="" value="'.$row['id'].'">
                                            <div class="row mb-3">
                                                <label for="" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="email" value="'.$row['email'].'" name="email">
                                                </div>
                                            </div>
                                        
                                            <div class="row mb-3">
                                                <label for="" class="col-sm-2 col-form-label">Socail Link</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="" value="'.$row['link'].'" name="link">
                                                </div>
                                            </div>
                                        

                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-2 col-form-label">Socail Icon</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control image1" type="file" id="image" name="social_icon">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-2 col-form-label"></label>
                                                <img class="showImage1 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:95px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                            </div>

                                    
                                            <button name="btn_udpate_about_us" type="submit" class="btn btn-info waves-effect waves-linght">Update about us</button>
                                        
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