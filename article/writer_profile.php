<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfoCambodia</title>
    <link rel="icon" href="./assets/img/InfoCambodia.png">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/Bootstrap.css">
    <link rel="stylesheet" href="./assets/css/news_type.css ">
    <link rel="stylesheet" href="./assets/css/search.css">
    <link rel="stylesheet" href="./assets/css/writer_profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700&family=Lato:wght@300;400;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<?php include("header.php"); ?>
    <div class="container-fluid p-0 type_header position-relative">
        <img class="position-absolute" src="./assets/img/bg.jpg" width="100%" height="100%" alt="">
        <div class="container-fluid p-0 half_header position-absolute d-flex align-items-center ">
            <?php
            // Database connection
            $con = mysqli_connect('localhost', 'root', '', 'db_business_cambodia');

            // Fetch the latest news (you can modify the query to fetch specific news or writer)
            $sql = "SELECT * FROM tbl_news ORDER BY id DESC LIMIT 1"; // Change query as needed
            $result = mysqli_query($con, $sql);

            // Initialize default values
            $writer_name = "Meoww"; // Default name in case no data is found
            $writer_profile = "./assets/img/default_profile.png"; // Default image in case no data is found

            // Fetch data if available
            if ($row = mysqli_fetch_assoc($result)) {
                $writer_name = htmlspecialchars($row['writer']);
                $writer_profile = "../../BC_Project/admin/Backend Theme/Image/" . htmlspecialchars($row['writer_profile']);
            }
            ?>
            <div class="writer_dox position-absolute d-flex align-items-center">
                <div class="profile_writer">
                    <img src="<?php echo $writer_profile; ?>" alt="Writer Profile" onerror="this.onerror=null; this.src='./assets/img/default_profile.png';">
                </div>
                <h1><?php echo $writer_name; ?></h1>
                <p></p>
            </div>
        </div>

    </div>
    <div class="container-fluid search_main p-0">
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'db_business_cambodia');
        $sql = "SELECT * FROM tbl_news ORDER BY id DESC LIMIT 6";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $banner = htmlspecialchars($row['banner']);
                $writerProfile = htmlspecialchars($row['writer_profile']);
                $writer = htmlspecialchars($row['writer']);
                $title = htmlspecialchars($row['title']);
                $type = htmlspecialchars($row['news_type']);
                $date = htmlspecialchars($row['date']);
                $views = htmlspecialchars($row['viewer']);

                echo '
                    <a class="text-decoration-none news_type_block" href="./news_details.php?id=' . $row['id'] . '">
                        <div id="news_box" class="news_box">
                            <div class="news_box_img">
                                <img src="../../BC_Project/admin/Backend Theme/Image/' . $banner . '" class="h-100 w-100" alt="News Banner">
                            </div>
                            <div id="news_box_text" class="container p-0 news_box_text">
                                <span>#' . $type . '</span>
                                <p class="block_txt_title mt-2">' . $title . '</p>
                                <div class="news_writer d-flex align-items-center">
                                    <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $writerProfile . '" onerror="this.onerror=null; this.src=\'./assets/img/default_profile.png\';" alt="Writer">
                                    <div class="writer_details">
                                        <b>' . $writer . '</b>
                                        <h6>' . $date . '</h6>
                                        <p>' . $views . ' views</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                ';
            }
        } else {
            echo '<p class="text-center mt-4">No news found.</p>';
        }
        ?>
    </div>

</body>

</html>
<script src="./assets/script/navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>