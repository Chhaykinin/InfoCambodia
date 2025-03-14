<div id="navbar" class="container-fluid header d-flex justify-content-between align-items-center">
    <div class="logo">
        <!-- catch logo wirter_code_php-->
        <?php
           $con =mysqli_connect('localhost','root','','db_business_cambodia');
           $sql_select="SELECT * FROM tbl_logo ORDER BY id DESC";
           $result=$con->query($sql_select);
           $row=  mysqli_fetch_array($result);
           echo '
                <a href="./index.php"><img width="100%" height="100%" src="../../BC_Project/admin/Backend Theme/Image/'.$row['logo'].'" alt=""></a>
   
           ';
        ?>
    </div>
    <div class="menu_bar">
        <ul>
            <li><a class="nav-link" href="./news_type.php?news_type=អត្ថបទថ្មីៗ">ព័ត៌មានថ្មីៗ</a></li>
            <li><a class="nav-link" href="./news_type.php?news_type=ចាប់ផ្តើមអាជីវកម្ម">ចាប់ផ្តើមអាជីវកម្ម</a></li>
            <li><a class="nav-link" href="./news_type.php?news_type=អចលនទ្រព្យ">អចលនទ្រព្យ</a></li>
            <li><a class="nav-link" href="./news_type.php?news_type=ភាពជាអ្នកដឹកនាំ">ភាពជាអ្នកដឹកនាំ</a></li>
            <li><a class="nav-link" href="./news_type.php?news_type=ហិរញ្ញវត្ថុ">ហិរញ្ញវត្ថុ</a></li>
            <li><a class="nav-link" href="./news_type.php?news_type=កំពូលអ្នកលក់">កំពូលអ្នកលក់</a></li>
            <li class="else"><a class="nav-link" href="">ផ្នែកផ្សេងទៀត</a></li>
            <li><a href="./search.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
        </ul>
    </div>
</div>