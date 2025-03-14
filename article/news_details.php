<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'db_business_cambodia');
$sql_insert = "UPDATE tbl_news SET viewer =viewer+1 WHERE id =$id";
$con->query($sql_insert);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>InfoCambodia</title>
    <link rel="icon" href="./assets/img/InfoCambodia.png">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/news_details.css">
    <link rel="stylesheet" href="./assets/css/Bootstrap.css">
    <link rel="stylesheet" href="./assets/css/news_type.css ">
    <link rel="stylesheet" href="./assets/css/search.css">
    <link rel="stylesheet" href="./assets/css/box1.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Lato:wght@300;400;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include("header.php"); ?>
    <div class="container-fluid p-0 main_img_top">
        <div class="container-fluid img_top p-0">
            <img class="w-100 h-100" src="./assets/img/ezecom.jpg" alt="">
        </div>
        <div class="container-fluid img_top p-0">
            <img class="w-100 h-100" src="./assets/img/woori_bank.gif" alt="">
        </div>
        <div class="container-fluid img_top_end p-0">
            <img class="w-100 h-100" src="./assets/img/wing.gif" alt="">
        </div>
    </div>
    
    <?php
        $con = mysqli_connect('localhost', 'root', '', 'db_business_cambodia');
        $sql_select = "SELECT * FROM tbl_news WHERE id =$id";
        $result = $con->query($sql_select);
        $row = mysqli_fetch_assoc($result);
        echo '
                <!-- main_news -->
                <div class="container-fluid news">
                    <div class="container-fluid news_detail ">
                        <a class="news_type" href=""><span>' . $row['news_type'] . '</span></a>
                        <h1>' . $row['title'] . '</h1>
                        <p class="details_news">' . $row['writer'] . ' • ' . $row['date'] . ' • ' . $row['viewer'] . ' views</p>
                        <div class="container-fluid p-0 img1">
                            <img class="w-100 h-100" src="./assets/img/cimb.jpg" alt="">
                        </div>
                        <div class="container-fluid p-0 main_news_details">
                            <div class="main_news_left">
                                <img width="754.5px" height="396.1" src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" alt="">
                                
                                <!-- just description -->
                                <div>
                                    ' . $row['description'] . '
                                </div>
                                
                                <br><br><p>អត្ថបទដោយ៖ ' . $row['writer'] . '</p>
                                <a href="./writer_profile.php">
                                    <div class="writer_detail d-flex align-items-center">
                                        <img width="128" height="128" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                        <div class="demo_writer">
                                            <b class="text-dark">' . $row['writer'] . '</b>
                                            <p>ប្រសិនជាលោកអ្នកចង់ចែករំលែកទាក់ទងជាមួយមុខរបរផ្សេងៗឬក៏អាជីវកម្មដែលថ្មីហើយប្លែកក៏ដូចជាបទពិសោធន៍ក្នុងការប្រកបរបររកស៊ីបងប្អូនទាំងអស់គ្នាអាចធ្វើការទំនាក់ទំនងមកកាន់ខ្ញុំបាន។ ទំនាក់ទំនង 096 8989 176។ សូមអរគុណ</p>
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
            ';
    ?>

    <?php
    $sql_select = "SELECT * FROM tbl_news WHERE id!=$id";
    $result = $con->query($sql_select);
    $row = mysqli_fetch_assoc($result);
        echo '
            <!-- more_news -->
            <div class="container-fluid news">
                <div class="container-fluid news_detail p-0">
                    <a class="news_type" href=""><span>' . $row['news_type'] . '</span></a>
                    <h1>' . $row['title'] . '</h1>
                    <p class="details_news">' . $row['writer'] . ' • ' . $row['date'] . ' • ' . $row['viewer'] . ' views</p>
                    <div class="container-fluid p-0 img1">
                        <img class="w-100 h-100" src="./assets/img/cimb.jpg" alt="">
                    </div>
                    <div class="container-fluid p-0 main_news_details">
                        <div class="main_news_left">
                            <img width="754.5px" height="396.1" src="../../BC_Project/admin/Backend Theme/Image/' . $row['banner'] . '" alt="">
                            
                            <!-- just description -->
                            <div>
                                ' . $row['description'] . ' 
                                
                            </div>
                            
                            <br><br><p>អត្ថបទដោយ៖ ' . $row['writer'] . ' </p>
                            <a href="./writer_profile.php">
                                <div class="writer_detail d-flex align-items-center">
                                    <img width="128" height="128" src="../../BC_Project/admin/Backend Theme/Image/' . $row['writer_profile'] . '" alt="">
                                    <div class="demo_writer">
                                        <b class="text-dark">' . $row['writer'] . '</b>
                                        <p>ប្រសិនជាលោកអ្នកចង់ចែករំលែកទាក់ទងជាមួយមុខរបរផ្សេងៗឬក៏អាជីវកម្មដែលថ្មីហើយប្លែកក៏ដូចជាបទពិសោធន៍ក្នុងការប្រកបរបររកស៊ីបងប្អូនទាំងអស់គ្នាអាចធ្វើការទំនាក់ទំនងមកកាន់ខ្ញុំបាន។ ទំនាក់ទំនង 096 8989 176។ សូមអរគុណ</p>
                                        <span class="text-dark">
                                            <i class="fa-brands fa-facebook"></i>
                                            <i class="fa-brands fa-youtube"></i>
                                            <i class="fa-brands fa-instagram"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>xam
                        <div class="main_news_right">
                        </div>
                    </div>
                </div>
                
            </div>
        ';
    
   ?>
    <div>
    <?php
        include "footer.php";
    ?>
    </div>
</body>

</html>
<script src="./assets/script/navbar.js"></script>