<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfoCambodia</title>
    <!-- <link rel="icon" href="./assets/img/InfoCambodia.png">
    <link rel="stylesheet" href="./assets/css/InfoCambodia.png">
    <link rel="stylesheet" href="./assets/css/Bootstrap.css">
    <link rel="stylesheet" href="./assets/css/news_type.css ">
    <link rel="stylesheet" href="./assets/css/search.css">
    <link rel="stylesheet" href="./assets/css/box1.css"> -->
    <link rel="icon" href="./assets/img/InfoCambodia.png">
    <link rel="stylesheet" href="./assets/css/index.css">
    <!-- <link rel="stylesheet" href="./assets/css/news_details.css"> -->
    <link rel="stylesheet" href="./assets/css/Bootstrap.css">
    <link rel="stylesheet" href="./assets/css/news_type.css ">
    <link rel="stylesheet" href="./assets/css/search.css">
    <link rel="stylesheet" href="./assets/css/box1.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700&family=Lato:wght@300;400;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php include("header.php") ?>
    <div class="container-fluid p-0 type_header position-relative">
        <img class="position-absolute" src="./assets/img/bg1.jpg" width="100%" height="100%" alt="">
        <div class="container-fluid p-0 half_header position-absolute d-flex align-items-center ">
            <h3>បំផុសសកម្មភាពអាជីវកម្មថ្មីៗទាំងនៅក្នុងស្រុក និងក្រៅស្រុក</h3>
        </div>
    </div>
    <div class="container-fluid search_bar d-flex">
        <form action="" method="post">
            <input type="text" name="search_text" placeholder="Search">
            <button type="submit" name="btn_submit">Submit</button>
        </form>
    </div>
    <div class="container-fluid search_main p-0">
        <?php
            $con =mysqli_connect('localhost','root','','db_business_cambodia');
            if(isset($_POST['btn_submit'])){
                $text =$_POST['search_text'];
                $sql_select="SELECT * FROM tbl_news WHERE title LIKE '%$text%'";
                $result=$con->query($sql_select);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo'
                            <a class="text-decoration-none news_type_block" href="./news_details.php?id='.$row['id'].'">
                                <div id="news_box" class="news_box">
                                    <div class="news_box_img">
                                        <img src="../../BC_Project/admin/Backend Theme/Image/'.$row['banner'].'" class="h-100 w-100" alt="...">
                                    </div>
                                    <div id="news_box_text" class="container p-0 news_box_text">
                                        <span>#'.$row['news_type'].'</span>
                                        <p class="block_txt_title mt-2">'.$row['title'].'</p>
                                        <div class="news_writer d-flex align-items-center">
                                            <img width="48px" height="48px" src="../../BC_Project/admin/Backend Theme/Image/'.$row['writer_profile'].'" alt="">
                                            <div class="writer_details">
                                                <b>'.$row['writer'].'</b>
                                                <h6>'.$row['date'].'</h6>
                                                <p>'.$row['viewer'].' views</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        ';
                    }
                }
                else{
                    echo '
                        <div class="container-fluid d-flex align-items-center justify-content-center" style="height:200px; position: absolute; top:70%;">
                            <div class="box">
                                <img width="450px" src="https://static.vecteezy.com/system/resources/previews/007/104/553/original/search-no-result-not-found-concept-illustration-flat-design-eps10-modern-graphic-element-for-landing-page-empty-state-ui-infographic-icon-vector.jpg" alt="">
                            </div>
                        </div>
                    ';
                }
            }
        ?>
    </div>
</body>
</html>
<script src="./assets/script/navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>