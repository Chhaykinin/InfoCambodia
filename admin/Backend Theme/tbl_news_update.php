<?php
include("function.php");
$id = $_SESSION['id'];
include("header.php");

$new_id = $_GET['id'];
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
                        <h4 class="card-title">News Update Page</h4><br><br>
                        <?php
                        $sql_select = "SELECT * FROM tbl_news WHERE id=$new_id";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);

                        echo '
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="' . $row['id'] . '" name="id">
                            
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="title" value="' . $row['title'] . '" name="title">
                                </div>
                            </div>

                            <input type="hidden" value="' . $row['banner'] . '" name="old_banner">

                            <div class="row mb-3">
                                <label for="banner" class="col-sm-2 col-form-label">Banner</label>
                                <div class="col-sm-10">
                                    <input class="form-control image1" type="file" id="banner" name="banner">
                                    <img class="showImage1 card-img-top img-fluid mt-2" style="object-fit:cover; width: 200px; height:95px;" src="' . ($row['banner'] ? "./Image/" . $row['banner'] : '') . '" alt="Banner Image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="elm1">' . $row['description'] . '</textarea>
                                </div>
                            </div>

                            <input type="hidden" value="' . $row['news_type'] . '" name="old_name_type">

                            <div class="row mb-3">
                                <label for="news_type" class="col-sm-2 col-form-label">News Type</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="news_type">
                                        <option value="">Select News Type</option>';

                        $options = [
                            "អត្ថបទពេញនិយមប្រចាំខែ",
                            "អត្ថបទថ្មីៗ",
                            "កំពូលអ្នកលក់",
                            "មុខរបរកសិកម្ម",
                            "មុខរបរបច្ចេកវិទ្យា",
                            "របាយការណ៍",
                            "អត្ថបទ PR",
                            "ពិព័រណ៍មុខរបរ 2022",
                            "ចាប់ផ្តើមអាជីវកម្ម",
                            "អចលនទ្រព្យ",
                            "ភាពជាអ្នកដឹកនាំ",
                            "ហិរញ្ញវត្ថុ"
                        ];

                        foreach ($options as $option) {
                            $selected = ($row['news_type'] === $option) ? 'selected' : '';
                            echo "<option value=\"$option\" $selected>$option</option>";
                        }

                        echo '
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="writer_name" class="col-sm-2 col-form-label">Writer Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="writer_name" value="' . $row['writer'] . '" name="writer_name">
                                </div>
                            </div>

                            <input type="hidden" value="' . $row['writer_profile'] . '" name="old_writer_profile">

                            <div class="row mb-3">
                                <label for="writer_profile" class="col-sm-2 col-form-label">Writer Profile</label>
                                <div class="col-sm-10">
                                    <input class="form-control image2" type="file" id="writer_profile" name="writer_profile">
                                    <img class="showImage2 card-img-top img-fluid mt-2" style="object-fit:cover; width: 200px; height:95px;" src="' . ($row['writer_profile'] ? "./Image/" . $row['writer_profile'] : './assets/images/no_image.jpg') . '" alt="Writer Profile">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="date" name="date" value="' . $row['date'] . '" placeholder="Example: January 01 2023">
                                </div>
                            </div>

                            <button name="btn_news_update" type="submit" class="btn btn-info waves-effect waves-light">Update News Data</button>
                        </form>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
</div>

<!-- END layout-wrapper -->
<?php include("right_side_bar.php"); ?>

<!-- JS for Image Preview -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(".image1").change(function () {
        readURL(this, '.showImage1');
    });

    $(".image2").change(function () {
        readURL(this, '.showImage2');
    });

    function readURL(input, imageClass) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(imageClass).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>
