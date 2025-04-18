<?php
$con = new mysqli('localhost', 'root', '', 'db_business_cambodia');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Update viewer count
    $stmt = $con->prepare("UPDATE tbl_news SET viewer = viewer + 1 WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    // Fetch the selected news
    $stmt = $con->prepare("SELECT * FROM tbl_news WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $news = $result->fetch_assoc();
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoCambodia</title>
    <link rel="icon" href="./assets/img/InfoCambodia.png">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/news_details.css">
    <link rel="stylesheet" href="./assets/css/Bootstrap.css">
    <link rel="stylesheet" href="./assets/css/news_type.css">
    <link rel="stylesheet" href="./assets/css/search.css">
    <link rel="stylesheet" href="./assets/css/box1.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container-fluid p-0 main_img_top">
        <div class="container-fluid img_top p-0"><img class="w-100 h-100" src="./assets/img/ezecom.jpg" alt=""></div>
        <div class="container-fluid img_top p-0"><img class="w-100 h-100" src="./assets/img/woori_bank.gif" alt=""></div>
        <div class="container-fluid img_top_end p-0"><img class="w-100 h-100" src="./assets/img/wing.gif" alt=""></div>
    </div>

    <?php if (!empty($news)) : ?>
        <div class="container-fluid news">
            <div class="container-fluid news_detail">
                <a class="news_type" href="#"><span><?= htmlspecialchars($news['news_type']) ?></span></a>
                <h1><?= htmlspecialchars($news['title']) ?></h1>
                <p class="details_news"><?= htmlspecialchars($news['writer']) ?> • <?= htmlspecialchars($news['date']) ?> • <?= $news['viewer'] ?> views</p>
                <div class="container-fluid p-0 img1"><img class="w-100 h-100" src="./assets/img/cimb.jpg" alt=""></div>
                <div class="container-fluid p-0 main_news_details">
                    <div class="main_news_left">
                        <img width="754.5px" height="396.1" src="../../BC_Project/admin/Backend Theme/Image/<?= htmlspecialchars($news['banner']) ?>" alt="">
                        <div><?= $news['description'] ?></div>
                        <br><br>
                        <p>អត្ថបទដោយ៖ <?= htmlspecialchars($news['writer']) ?></p>
                        <a href="./writer_profile.php">
                            <div class="writer_detail d-flex align-items-center">
                                <img width="128" height="128" src="../../BC_Project/admin/Backend Theme/Image/<?= htmlspecialchars($news['writer_profile']) ?>" alt="">
                                <div class="demo_writer">
                                    <b class="text-dark"><?= htmlspecialchars($news['writer']) ?></b>
                                    <p>ប្រសិនជាលោកអ្នកចង់ចែករំលែក... ទំនាក់ទំនង 096 8989 176។ សូមអរគុណ</p>
                                    <span class="text-dark">
                                        <i class="fa-brands fa-facebook"></i>
                                        <i class="fa-brands fa-youtube"></i>
                                        <i class="fa-brands fa-instagram"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="main_news_right">
                        <img width="452.7px" height="452.7px" src="./assets/img/camed.gif" alt="">
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php
    // Fetch related news (excluding the current one)
    $stmt = $con->prepare("SELECT * FROM tbl_news WHERE id != ? ORDER BY date DESC LIMIT 3");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $related_news = $stmt->get_result();
    ?>

    <div class="container-fluid news">
        <h2 class="text-center">ព័ត៌មានផ្សេងទៀត</h2>
        <?php while ($row = $related_news->fetch_assoc()) : ?>
            <div class="container-fluid news_detail p-0 mb-5">
                <a class="news_type" href="#"><span><?= htmlspecialchars($row['news_type']) ?></span></a>
                <h1><?= htmlspecialchars($row['title']) ?></h1>
                <p class="details_news"><?= htmlspecialchars($row['writer']) ?> • <?= htmlspecialchars($row['date']) ?> • <?= $row['viewer'] ?> views</p>
                <div class="container-fluid p-0 img1"><img class="w-100 h-100" src="./assets/img/cimb.jpg" alt=""></div>
                <div class="container-fluid p-0 main_news_details">
                    <div class="main_news_left">
                        <img width="754.5px" height="396.1" src="../../BC_Project/admin/Backend Theme/Image/<?= htmlspecialchars($row['banner']) ?>" alt="">
                        <div><?= $row['description'] ?></div>
                        <br><br>
                        <p>អត្ថបទដោយ៖ <?= htmlspecialchars($row['writer']) ?></p>
                        <a href="./writer_profile.php">
                            <div class="writer_detail d-flex align-items-center">
                                <img width="128" height="128" src="../../BC_Project/admin/Backend Theme/Image/<?= htmlspecialchars($row['writer_profile']) ?>" alt="">
                                <div class="demo_writer">
                                    <b class="text-dark"><?= htmlspecialchars($row['writer']) ?></b>
                                    <p>ប្រសិនជាលោកអ្នកចង់ចែករំលែក... ទំនាក់ទំនង 096 8989 176។ សូមអរគុណ</p>
                                    <span class="text-dark">
                                        <i class="fa-brands fa-facebook"></i>
                                        <i class="fa-brands fa-youtube"></i>
                                        <i class="fa-brands fa-instagram"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <?php include "footer.php"; ?>
</body>

</html>
<script src="./assets/script/navbar.js"></script>
