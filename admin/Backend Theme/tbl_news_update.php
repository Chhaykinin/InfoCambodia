<?php
    include("function.php");
    $id=$_SESSION['id'];
    include("header.php");
    $new_id=$_GET['id'];
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
                                <h4 class="card-title">News Update Page</h4><br><br>
                                <?php
                                    $sql_select="SELECT * FROM tbl_news WHERE id=$new_id";
                                    $result=$con->query($sql_select);
                                    $row=mysqli_fetch_assoc($result);
                                    echo '
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <input type="hidden" value="'.$row['id'].'" name="id" >
                                            <div class="row mb-3">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="title" value="'.$row['title'].'" name="title">
                                                </div>
                                            </div>
                                            <input type="hidden" value="'.$row['banner'].'" name="old_banner" >
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-2 col-form-label">Banner</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control image1" type="file" id="image" name="banner">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="description" class="col-sm-2 col-form-label">Decription</label>
                                                <div class="col-sm-10">
                                                    <textarea name="description" id="elm1" >'.$row['description'].'</textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" value="'.$row['news_type'].'" name="old_name_type">
                                            <div class="row mb-3">
                                                <label for="title" class="col-sm-2 col-form-label">News Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" name="news_type" aria-label="Default select example">
                                                        <option selected="">Open this select news type</option>
                                                        <option value="អត្ថបទពេញនិយមប្រចាំខែ">អត្ថបទពេញនិយមប្រចាំខែ</option>
                                                        <option value="អត្ថបទថ្មីៗ">អត្ថបទថ្មីៗ</option>
                                                        <option value="កំពូលអ្នកលក់">កំពូលអ្នកលក់</option>
                                                        <option value="មុខរបរកសិកម្ម">មុខរបរកសិកម្ម</option>
                                                        <option value="មុខរបរបច្ចេកវិទ្យា">មុខរបរបច្ចេកវិទ្យា</option>
                                                        <option value="របាយការណ៍">របាយការណ៍</option>
                                                        <option value="អត្ថបទ PR">អត្ថបទ PR</option>
                                                        <option value="ពិព័រណ៍មុខរបរ 2022">ពិព័រណ៍មុខរបរ 2022</option>
                                                        <option value="ចាប់ផ្តើមអាជីវកម្ម">ចាប់ផ្តើមអាជីវកម្ម</option>
                                                        <option value="អចលនទ្រព្យ">អចលនទ្រព្យ</option>
                                                        <option value="ភាពជាអ្នកដឹកនាំ">ភាពជាអ្នកដឹកនាំ</option>
                                                        <option value="ហិរញ្ញវត្ថុ">ហិរញ្ញវត្ថុ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="writer_name" class="col-sm-2 col-form-label">Writer Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="writer_name" value="'.$row['writer'].'" name="writer_name">
                                                </div>
                                            </div>
                                            <input type="hidden" value="'.$row['writer_profile'].'" name="old_writer_profile" >
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-2 col-form-label">Writer Profile</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control image2" id="image" type="file" name="writer_profile">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="date" class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="date" name="date" value="'.$row['date'].'" placeholder="Example: January 01 2023">
                                                </div>
                                            </div>
                                            <button name="btn_news_update" type="submit" class="btn btn-info waves-effect waves-linght">Update News Data</button>
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