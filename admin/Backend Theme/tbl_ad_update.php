<?php
    include("function.php");
    $id = $_SESSION['id'];
    include("header.php");

    // Sanitize input
    $ad_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>

<!-- ========== Left Sidebar Start ========== -->
<?php include("left_side_bar.php"); ?>
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
                        <h4 class="card-title">Logo Update Page</h4><br><br>

                        <?php
                            $sql_select = "SELECT * FROM tbl_ad WHERE id = $ad_id";
                            $result = $con->query($sql_select);

                            if ($result && mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                $ad_img = !empty($row['ad_img']) ? "./Image/" . $row['ad_img'] : "./assets/images/no_image.jpg";

                                echo '
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="'.$row['id'].'">
                                        <input type="hidden" name="old_ad_img" value="'.$row['ad_img'].'">

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Link</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="link" value="'.htmlspecialchars($row['link']).'">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Advertisement Image</label>
                                            <div class="col-sm-10">
                                                <input class="form-control image1" type="file" name="ad_img" id="image">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <img class="showImage1 card-img-top img-fluid" 
                                                     style="object-fit:cover; width: 200px !important; height:95px !important;" 
                                                     src="'.$ad_img.'" alt="ad_image">
                                            </div>
                                        </div>

                                        <button name="btn_update_ad" type="submit" class="btn btn-info waves-effect waves-light">Update Advertisement</button>
                                    </form>
                                ';
                            } else {
                                echo "<p class='text-danger'>Advertisement not found.</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Page-content -->
    <?php include("footer.php"); ?>
</div>
<!-- end main content-->

<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<?php include("right_side_bar.php"); ?>
<!-- /Right-bar -->

</body>
</html>

<script>
    $(document).ready(function(){
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
