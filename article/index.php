<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> InfoCambodia</title>
    <link rel="icon" href="./assets/img/InfoCambodia.png">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/Bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700&family=Lato:wght@300;400;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include("header.php"); ?>
    <div id="carouselExampleIndicators" class="carousel container-fluid slide_header p-0 slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner h-100">
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'db_business_cambodia');
            $sql_select = "SELECT * FROM tbl_news ORDER BY id DESC ";
            $resulf = $con->query($sql_select);
            $row = mysqli_fetch_assoc($resulf);
            echo '
                    <div class="carousel-item active h-100 position-relative">
                        <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="d-block w-100 h-100 position-absolute" alt="...">
                        <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                            <div class="slide_header_details">
                                <h1><a class="text-white" href="./news_details.php">' . $row['title'] . '</a></h1>
                                <p>' . $row['writer'] . ' • ' . $row['news_type'] . ' • ' . $row['date'] . '</p>
                                <a href=""><button class="read">បន្តការអាន</button></a>
                                <a href=""><button class="writer">អំពីអ្នកនិពន្ធ</button></a>
                            </div>  
                        </div>
                    </div>
                ';

            ?>

            <?php
            $con = mysqli_connect('localhost', 'root', '', 'db_business_cambodia');
            $sql_select = "SELECT * FROM tbl_news ORDER BY id ";
            $resulf = $con->query($sql_select);
            $row = mysqli_fetch_assoc($resulf);
            echo '
                    <div class="carousel-item h-100 position-relative">
                        <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="d-block w-100 h-100 position-absolute" alt="...">
                        <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                            <div class="slide_header_details">
                                <h1><a class="text-white" href="./news_details.php">' . $row['title'] . '</a></h1>
                                <p>' . $row['writer'] . ' • ' . $row['news_type'] . ' • ' . $row['date'] . '</p>
                                <a href=""><button class="read">បន្តការអាន</button></a>
                                <a href=""><button class="writer">អំពីអ្នកនិពន្ធ</button></a>
                            </div>  
                        </div>
                    </div>
                ';

            ?>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'db_business_cambodia');
            $sql_select = "SELECT * FROM tbl_news ORDER BY id ";
            $resulf = $con->query($sql_select);
            $row = mysqli_fetch_assoc($resulf);
            echo '
                    <div class="carousel-item h-100 position-relative">
                        <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="d-block w-100 h-100 position-absolute" alt="...">
                        <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                            <div class="slide_header_details">
                                <h1><a class="text-white" href="./news_details.php">' . $row['title'] . '</a></h1>
                                <p>' . $row['writer'] . ' • ' . $row['news_type'] . ' • ' . $row['date'] . '</p>
                                <a href=""><button class="read">បន្តការអាន</button></a>
                                <a href=""><button class="writer">អំពីអ្នកនិពន្ធ</button></a>
                            </div>  
                        </div>
                    </div>
                ';

            ?>
        </div>

    </div>

    <!-- ad -->
    <div class="container-fluid ad_block p-0 d-flex align-items-center">
        <div class="ad_block_details">
            <p>ការផ្សាយពាណិជ្ជកម្មរបស់យើង</p>
            <div class="line"></div>
        </div>
        <div class="ad_block_img d-flex">
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'db_business_cambodia');
            $sql_select = "SELECT * FROM tbl_ad ORDER BY id DESC LIMIT 4";
            $resulf = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($resulf)) {
                echo '
                        <a href="' . $row['link'] . '">
                            <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['ad_img'] . '" alt="">
                        </a>
                    ';
            }
            ?>


        </div>
    </div>


    <?php
    $con = mysqli_connect('localhost', 'root', '', 'db_business_cambodia');

    // Get latest 3 popular news (any type or filtered by specific types)
    $sql = "SELECT * FROM tbl_news WHERE news_type IN ('កំពូលអ្នកលក់','ហិរញ្ញវត្ថុ','ភាពជាអ្នកដឹកនាំ') ORDER BY id DESC LIMIT 3";
    $result = $con->query($sql);

    $news_items = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $news_items[] = $row;
    }

    $count = count($news_items);
    ?>

    <div class="container-fluid main_body_slide">
        <div class="container-fluid body_sldie p-0">
            <h1>អត្ថបទពេញនិយមសរុប <span><a href="">មើល​បន្ថែម​</a></span></h1>

            <?php if ($count === 2): ?>
                <!-- ✅ Layout for 2 items (side by side using flex) -->
                <div class="container-fluid p-0 body_slide_block d-flex gap-3 flex-row">
                    <?php foreach ($news_items as $item): ?>
                        <div class="body_flex_item w-50 position-relative">
                            <img src="../../BC_Project/admin/Backend Theme/Image/<?= $item['banner'] ?>" class="h-100 w-100 position-absolute" alt="...">
                            <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                                <div class="body_left_details">
                                    <p class="text-white"><?= $item['news_type'] ?></p>
                                    <div class="line"></div>
                                    <h3><a href="./news_details.php?id=<?= $item['id'] ?>"><?= $item['title'] ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php elseif ($count === 3): ?>
                <!-- ✅ Layout for 3 items (default: 1 left big, 2 right stacked) -->
                <div class="container-fluid p-0 body_slide_block d-flex justify-content-between">
                    <div class="body_left h-100 position-relative">
                        <img src="../../BC_Project/admin/Backend Theme/Image/<?= $news_items[0]['banner'] ?>" class="h-100 w-100 position-absolute" alt="...">
                        <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                            <div class="body_left_details">
                                <p class="text-white"><?= $news_items[0]['news_type'] ?></p>
                                <div class="line"></div>
                                <h3><a href="./news_details.php?id=<?= $news_items[0]['id'] ?>">មានអ្វីថ្មីខ្លះ? <?= $news_items[0]['title'] ?></a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="body_right h-100">
                        <div class="body_right_top w-100 position-relative">
                            <img src="../../BC_Project/admin/Backend Theme/Image/<?= $news_items[1]['banner'] ?>" class="h-100 w-100 position-absolute" alt="...">
                            <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                                <div class="body_left_details">
                                    <p class="text-white"><?= $news_items[1]['news_type'] ?></p>
                                    <div class="line"></div>
                                    <h3><a href="./news_details.php?id=<?= $news_items[1]['id'] ?>"><?= $news_items[1]['title'] ?></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="body_right_bottom w-100 position-relative">
                            <img src="../../BC_Project/admin/Backend Theme/Image/<?= $news_items[2]['banner'] ?>" class="h-100 w-100 position-absolute" alt="...">
                            <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                                <div class="body_right_details">
                                    <p class="text-white"><?= $news_items[2]['news_type'] ?></p>
                                    <div class="line"></div>
                                    <h3><a href="./news_details.php?id=<?= $news_items[2]['id'] ?>"><?= $news_items[2]['title'] ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>អត្ថបទពេញនិយមប្រចាំខែ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news ORDER BY viewer DESC LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                        <div class="news_box">
                            <div class="news_box_img">
                                <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                            </div>
                            <div class="container p-0 news_box_text">
                                <span>#' . $row['news_type'] . '</span>
                                <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                <div class="news_writer d-flex align-items-center">
                                    <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                    <div class="writer_details">
                                        <b>' . $row['writer'] . '</b>
                                        <h6>' . $row['date'] . '</h6>
                                        <p>' . $row['viewer'] . ' views</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>អត្ថបទថ្មីៗ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='អត្ថបទថ្មីៗ' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>ចាប់ផ្តើមអាជីវកម្ម</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='អត្ថបទថ្មីៗ' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>អចលនទ្រព្យ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='អចលនទ្រព្យ' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>ភាពជាអ្នកដឹកនាំ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='ភាពជាអ្នកដឹកនាំ' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>ហិរញ្ញវត្ថុ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='ហិរញ្ញវត្ថុ' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                        <div class="news_box">
                            <div class="news_box_img">
                                <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                            </div>
                            <div class="container p-0 news_box_text">
                                <span>#' . $row['news_type'] . '</span>
                                <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                <div class="news_writer d-flex align-items-center">
                                    <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                    <div class="writer_details">
                                        <b>' . $row['writer'] . '</b>
                                        <h6>' . $row['date'] . '</h6>
                                        <p>' . $row['viewer'] . ' views</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>កំពូលអ្នកលក់</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='កំពូលអ្នកលក់' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>មុខរបរកសិកម្ម</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='មុខរបរកសិកម្ម' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>មុខរបរបច្ចេកវិទ្យា</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='មុខរបរបច្ចេកវិទ្យា' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>អត្ថបទ PR</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='អត្ថបទ PR' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>ពិព័រណ៍មុខរបរ 2025</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='ពិព័រណ៍មុខរបរ 2025' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>របាយការណ៍</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
            $sql_select = "SELECT * FROM tbl_news WHERE news_type='របាយការណ៍' LIMIT 3";
            $result = $con->query($sql_select);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <a class="text-decoration-none" href="./news_details.php?id=' . $row['id'] . '">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#' . $row['news_type'] . '</span>
                                    <p class="block_txt_title mt-2">' . $row['title'] . '</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="writer_details">
                                            <b>' . $row['writer'] . '</b>
                                            <h6>' . $row['date'] . '</h6>
                                            <p>' . $row['viewer'] . ' views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
            }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->

    <!-- footer -->
    <?php
    include "footer.php";
    ?>
</body>

</html>
<script src="./assets/script/navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>