<?php
include("function.php");

if (!isset($_SESSION['id'])) {
    die("Unauthorized access.");
}
$id = $_SESSION['id'];

include("header.php");

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid request.");
}
$id_param = intval($_GET['id']);
?>

<?php include("left_side_bar.php"); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <h4 class="card-title">About Us Update Page</h4><br><br>
                        <?php
                        $sql_select = "SELECT * FROM tbl_about_us WHERE id = $id_param";
                        $result = $con->query($sql_select);

                        if ($result && $row = mysqli_fetch_assoc($result)) {
                            $img_path = (!empty($row['icon']) && file_exists("./Image/" . $row['icon'])) 
                                ? "./Image/" . htmlspecialchars($row['icon']) 
                                : "./assets/images/no_image.jpg";

                            echo '
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="' . $row['id'] . '">
                                <input type="hidden" name="old_icon" value="' . htmlspecialchars($row['icon']) . '">

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="email" name="email" value="' . htmlspecialchars($row['email']) . '">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Social Link</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="link" value="' . htmlspecialchars($row['link']) . '">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Social Icon</label>
                                    <div class="col-sm-10">
                                        <input class="form-control image1" type="file" name="social_icon" id="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="showImage1 card-img-top img-fluid" style="object-fit:cover; width: 200px; height:95px;" src="' . $img_path . '" alt="social_icon">
                                    </div>
                                </div>

                                <button name="btn_udpate_about_us" type="submit" class="btn btn-info waves-effect waves-light">Update About Us</button>
                            </form>';
                        } else {
                            echo "<div class='alert alert-danger'>Record not found.</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
</div>

<?php include("right_side_bar.php"); ?>
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
