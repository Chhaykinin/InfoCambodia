<?php
    include("function.php");
    $id = $_SESSION['id'];
    include("header.php");
    $header_id = $_GET['id'];
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
                            $sql_select = "SELECT * FROM tbl_news_type_header WHERE id = $header_id";
                            $result = $con->query($sql_select);
                            $row = mysqli_fetch_assoc($result);

                            $current_banner = !empty($row['banner']) ? "./Image/" . $row['banner'] : './assets/images/no_image.jpg';

                            echo '
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="' . $row['id'] . '" name="id">
                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="' . $row['title'] . '" id="title" name="title">
                                        </div>
                                    </div>
                                    <input type="hidden" value="' . $row['banner'] . '" name="old_banner">
                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label">Banner</label>
                                        <div class="col-sm-10">
                                            <input class="form-control image1" type="file" id="image" name="banner">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label"></label>
                                        <img class="showImage1 card-img-top img-fluid" style="object-fit: cover; width: 200px; height: 95px;" src="' . $current_banner . '" alt="ad_image">
                                    </div>
                                    <button name="btn_update_header" type="submit" class="btn btn-info waves-effect waves-light">Insert Update</button>
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
<!-- End Main Content -->

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
        // Image Preview
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);  // Read the first selected file
        });
    });
</script>
