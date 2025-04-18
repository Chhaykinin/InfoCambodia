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
            <div class="writer_dox position-absolute d-flex align-items-center">
                <div class="profile_writer">
                    <img src="./assets/img/writer.jpg" alt="">
                </div>
                <h1>Meoww</h1>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container-fluid search_main p-0">
        <?php
            for($i=1 ; $i<=6 ; $i++){
                echo'
                    <a class="text-decoration-none news_type_block" href="">
                        <div id="news_box" class="news_box">
                            <div class="news_box_img">
                                <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                            </div>
                            <div id="news_box_text" class="container p-0 news_box_text">
                                <span>#ភាពជាអ្នកដឹកនាំ</span>
                                <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                <div class="news_writer d-flex align-items-center">
                                    <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                    <div class="writer_details">
                                        <b>Meoww</b>
                                        <h6>January 30 2023</h6>
                                        <p>100 views</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                ';
            }
        ?>
    </div>
</body>
</html>
<script src="./assets/script/navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>