<div class="container-fluid footer_img p-0 m-3">
        <!-- <img width="100%" height="100%" src="./assets/img/footer.png" alt=""> -->
    </div>
    <div class="container-fluid footer p-0">
        <div class="container-fluid footer_block p-0 d-flex justify-content-between">
            <div class="footer_block_left">
                <p>ស្វែងយល់អំពីពួកយើង</p>
                <a href="">អំពីពួកយើង</a><br><br>
                <h4>
                    <?php
                        $sql_select="SELECT * FROM tbl_about_us";
                        $result=$con->query($sql_select);
                        while($row=mysqli_fetch_assoc($result)){
                            echo '
                                <a href="'.$row['link'].'"><img width="35px" height="35px" src="../../BC_Project/admin/Backend Theme/Image/'.$row['icon'].'" alt=""></a>
                            ';
                        }
                    ?>
                    
                    <!-- <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    <a href=""><i class="fa-brands fa-telegram"></i></a> -->
                    
                </h4>
                <br><br>
                
                <?php
                    $sql_select="SELECT * FROM tbl_about_us WHERE email!='' ORDER BY id DESC";
                    $result=$con->query($sql_select);
                    $row=mysqli_fetch_assoc($result);
                    echo '
                        <span>'.$row['email'].'</span>
                    ';
                ?>
            </div>
            
            <div class="footer_block_center">
                <p class="text-center">អត្ថបទផ្សេងៗ</p>
                <div class="container-fluid p-0 footer_block_center_menu">
                    <div class="row h-100">
                        <div class="col-6 h-100">
                            <ul class="navbar-nav">
                                <li><a href="">ព័ត៌មានថ្មីៗ</a></li>
                                <li><a href="">ចាប់ផ្តើមអាជីវកម្ម</a></li>
                                <li><a href="">អចលនទ្រព្យ</a></li>
                                <li><a href="">ភាពជាអ្នកដឹកនាំ</a></li>
                                <li><a href="">ហិរញ្ញវត្ថុ</a></li>
                                <li><a href="">កំពូលអ្នកលក់</a></li>
                            </ul>
                        </div>
                        <div class="col-6 h-100">
                            <ul class="navbar-nav">
                                <li><a href="">មុខរបរកសិកម្ម</a></li>
                                <li><a href="">មុខរបរបច្ចេកវិទ្យា</a></li>
                                <li><a href="">អត្ថបទ PR</a></li>
                                <li><a href="">ពិព័រណ៍មុខរបរ 2025</a></li>
                                <li><a href="">របាយការណ៍</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_block_right">
                <p>ទំនាក់ទំនងមកពួកយើង</p>
                <?php
                    $sql_select="SELECT * FROM tbl_contact ORDER BY id DESC";
                    $result=$con->query($sql_select);
                    $row =mysqli_fetch_assoc($result);
                    echo '
                        <h6>'.$row['phone'].'</h6>
                        <span>'.$row['address'].'</span>
                    ';

                    
                ?>
                
                
            </div>
        </div>
        <div class="container footer_end text-center text-white">
            <b>InfoCambodia</b>
            <p>បំផុសគំនិតរកស៊ី នាំមនុស្សឱ្យហ៊ានចេញរកស៊ីតាមក្ដីស្រមៃ</p>
        </div>
    </div>
    <div class="container-fluid p-0 end d-flex justify-content-around align-items-center">
        <span>© 2025 InfoCambodia. All Rights Reserved.</span>
        <span>Developed by: Chhay kinin</span>
    </div>