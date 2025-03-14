<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
   $con =mysqli_connect('localhost','root','','db_business_cambodia');
    function register(){
        global $con;
        if(isset($_POST['btn_register'])){
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $password   = md5($_POST['password']);
            $c_password = md5($_POST['password_confirmation']); 
           
            $img_name   = rand(1,9999)."-".$_FILES['profile']['name'];
            $parth_upload= "./Image/".$img_name;
            move_uploaded_file($_FILES['profile']['tmp_name'],$parth_upload);
            if($password == $c_password){
                $sql_insert= "INSERT INTO tbl_admin VALUES(null,'$name','$email','$password','$img_name')";
                $con->query($sql_insert);
                header("location:login.php");
            }
        }
    }register();
    
    // login
   
    function login(){
        global $con;
        session_start();
        if(isset($_POST['btn_login'])){
            $email     = $_POST['email'];
            $password  = md5($_POST['password']);

            $sql_insert= " SELECT * FROM tbl_admin WHERE email='$email' AND password='$password'";
            $result =$con->query($sql_insert);
            $row=mysqli_fetch_assoc($result);
            $select_id =$row['id'];
            if(mysqli_num_rows($result)> 0){
                $_SESSION['id']=$select_id;// son key 
                header('location:index.php');
            }
        }
    }login();
    function logo(){

    }logo();

    // insert logo web site
    function logo_insert(){
        global $con;
        if(isset($_POST['btn_insert_logo'])){
            $logo =rand(1,9999)."-".$_FILES['logo']['name'];
            $parth_upload= "./Image/".$logo;
            move_uploaded_file($_FILES['logo']['tmp_name'],$parth_upload);

            $sql_insert = "INSERT INTO tbl_logo VALUES(null,'$logo')";
            $result=$con->query($sql_insert);

            if($result== TRUE){
                header("location:tbl_logo_view.php");//31:32
            }
        }
    }logo_insert();
    function logo_delete(){
        global $con;
        if(isset($_POST['btn_delete_logo'])){
            $id = $_POST['delete_logo'];
            $sql_delete =" DELETE FROM tbl_logo WHERE id=$id";
            $result=$con->query($sql_delete);
            if($result==TRUE){
                // sweetalert
                echo "
                    <script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Deleted successful',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>
                ";
            }
        }
    }logo_delete();
    // about_us_insert
    function about_us_insert(){
        global $con;
        if(isset($_POST['btn_insert_about_us'])){
            $email =$_POST['email'];
            $link =$_POST['link'];
            $icon =rand(1,9999)."-".$_FILES['social_icon']['name'];
            $parth_upload ='./Image/'.$icon;

            move_uploaded_file($_FILES['social_icon']['tmp_name'],$parth_upload);
            $sql_insert ="INSERT INTO tbl_about_us VALUES(null,'$icon','$link','$email')";
            $result = $con->query($sql_insert);
            if($result == TRUE){
                header("location:tbl_about_us_view.php");
            }
        }
    }about_us_insert();
    // about_us_update()
    function about_us_update(){
        global $con;
        if(isset($_POST['btn_udpate_about_us'])){
            if($_FILES['social_icon']['size']==""){
                $id =$_POST['id'];
                $email =$_POST['email'];
                $link  =$_POST['link'];
                $old_icon = $_POST['old_icon'];
                // code Update
                $sql_update =" UPDATE tbl_about_us SET email ='$email',link='$link',icon='$old_icon' WHERE id=$id ";
                $result=$con->query($sql_update);
                if($result == TRUE){
                    header("location:tbl_about_us_view.php");
                }
            }
            else{
                $id =$_POST['id'];
                $email =$_POST['email'];
                $link  =$_POST['link'];
                $icon = rand(1,9999)."-".$_FILES['social_icon']['name'];
                $parth_upload = "./Image/".$icon;
                move_uploaded_file($_FILES['social_icon']['tmp_name'],$parth_upload);
                $sql_update = "UPDATE tbl_about_us SET email ='$email',link='$link',icon='$icon' WHERE id=$id ";
                $result=$con->query($sql_update);
                if($result == TRUE){
                    header("location:tbl_about_us_view.php");
                }
            }
        }
    }about_us_update();
    // about_us_delete
    function about_us_delete(){
        global $con;
        if(isset($_POST['btn_delete_about_us'])){
            $id =$_POST['delete_icon'];
            $sql_delete = "DELETE FROM tbl_about_us WHERE id=$id";
            $result = $con->query($sql_delete);
            if($result ==TRUE){
                // sweetalert
                echo "
                    <script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Deleted successful',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>
                ";
            }
        }
    }about_us_delete();


    // insert_contact
    function insert_contact(){
        global $con;
        if(isset($_POST['btn_insert_contact'])){
            $phone = $_POST['phone_number'];
            $address = $_POST['address'];

            $sql_insert = "INSERT INTO tbl_contact VALUES(null,'$phone','$address')";
            $result =$con->query($sql_insert);
            
            if($result==TRUE){
                header("location:tbl_contact_view.php");
            }
        }
    }insert_contact();
    // updata_contact
    function update_contact(){
        global $con;
        if(isset($_POST['btn_update_contact'])){
            $phone =$_POST['phone_number'];
            $address =$_POST['address'];
            $id = $_POST['id'];
            $sql_update = "UPDATE tbl_contact SET phone = '$phone', address='$address' WHERE id = $id ";
            $result =$con->query($sql_update);
            if($result==TRUE){
                header("location:tbl_contact_view.php");
            }
        }
    }update_contact();

    // delete_contact
    function delete_contact(){
        global $con;
        if(isset($_POST['btn_delete_contact'])){
            $id=$_POST['delete_contact'];
            $sql_delete =" DELETE FROM tbl_contact WHERE id =$id";
            $result =$con->query($sql_delete);
            if($result == TRUE){
                echo "
                    <script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Deleted successful',
                            showConfirmButton: true,
                            timer: 1500
                        })
                    </script>
                ";
            }
        }
    }delete_contact();
    // Insert_news
    function insert_news(){
        global $con;
        if(isset($_POST['btn_news_insert'])){
            $title          =$_POST['title'];
            $banner         = rand(1,9999)."-".$_FILES['banner']['name'];
            $parth_upload_1 ="./Image/".$banner;
            move_uploaded_file($_FILES['banner']['tmp_name'],$parth_upload_1);


            $description =$_POST['description'];
            $news_type   =$_POST['news_type'];
            $writer      =$_POST['writer_name'];

            $writer_profile =rand(1,9999)."-".$_FILES['writer_profile']['name'];
            $parth_upload_2 = "./Image/".$writer_profile;
            move_uploaded_file($_FILES['writer_profile']['tmp_name'],$parth_upload_2);
            
            $date = $_POST['date'];

            $sql_insert ="INSERT INTO tbl_news VALUES(null,'$title','$banner','$description','$news_type','$writer','$writer_profile','$date',0)";
            $result =$con->query($sql_insert);
            if($result==TRUE){
                header("location:tbl_news_view.php");
            }
        }
    }insert_news();
    //news_update
    function news_update(){
        global $con;
        if(isset($_POST['btn_news_update'])){
            if($_FILES['banner']['size']==""){
                $banner = $_POST['old_banner'];
            }
            else{
                $banner = rand(1,999)."-".$_FILES['banner']['name'];
                $parth_upload = "./Image/".$banner;
                move_uploaded_file($_FILES['banner']['tmp_name'],$parth_upload);
            }
            if($_POST['news_type'] == "Open this select news type"){
                $news_type = $_POST['old_news_type'];
            }
            else{
                $news_type = $_POST['news_type'];
            }
            if($_FILES['writer_profile']['size']==""){
                $writer_profile = $_POST['old_writer_profile'];
            }
            else{
                $writer_profile = rand(1,999)."-".$_FILES['writer_profile']['name'];
                $parth_upload   ="./Image/".$writer_profile;
                move_uploaded_file($_FILES['writer_profile']['tmp_name'],$parth_upload);
            }
            $id=$_POST['id'];
            $title      =$_POST['title'];
            $description=$_POST['description'];
            $writer     =$_POST['writer_name'];
            $date       = $_POST['date'];
            $sql_update ="UPDATE tbl_news SET title='$title',banner='$banner',description='$description',news_type='$news_type',writer='$writer',writer_profile='$writer_profile',date='$date' WHERE id=$id ";
            $result=$con->query($sql_update);
            if($result==TRUE){
                header("location:tbl_news_view.php");
            }
        }
    }news_update();
    //news_delete
    function new_delete(){
        global $con;
        if(isset($_POST['btn_delete_news'])){
            $id         =$_POST['delete_news'];
            $sql_delete ="DELETE FROM tbl_news WHERE id =$id";
            $result =$con->query($sql_delete);
            if($result == TRUE){
                echo "
                    <script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Deleted successful',
                            showConfirmButton: true,
                            timer: 1500
                        })
                    </script>
                ";
            }
        }
    }new_delete();
    //insert_ad
    function insert_ad(){
        global $con;
        if(isset($_POST['btn_insert_ad'])){
            $link =$_POST['link'];

            $img  =rand(1,999)."-".$_FILES['ad_img']['name'];
            $parth_upload="./Image/".$img;
            move_uploaded_file($_FILES['ad_img']['tmp_name'],$parth_upload);
            $sql_insert = "INSERT INTO tbl_ad VALUES (null,'$img','$link')";
            $result =$con->query($sql_insert);
            if($result == TRUE){
                header("location:tbl_ad_view.php");
            }
        }
    }insert_ad();
    //delete ad
    function delete_ad(){
        global $con;
        if(isset($_POST['btn_delete_ad'])){
            $id = $_POST['delete_ad'];
            $sql_delete = "DELETE FROM tbl_ad WHERE id= $id ";
            $result =$con->query($sql_delete);
            if($result ==TRUE){
                // sweetalert
                echo "
                    <script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Deleted successful',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>
                ";
            }
        }
    }delete_ad();
    //update_ad
    function update_ad(){
        global $con;
        if(isset($_POST['btn_update_ad'])){
            if($_FILES['ad_img']['name']== ""){
                $ad_img=$_POST['old_ad_img'];
            }
            else{
                $ad_img=rand(1,9999)."-".$_FILES['ad_img']['name'];
                $parth_upload="./Image/".$ad_img;
                move_uploaded_file($_FILES['ad_img']['tmp_name'],$parth_upload);
            }
            $link=$_POST['link'];
            $id= $_POST['id'];
            $sql_update="UPDATE tbl_ad SET link='$link',ad_img='$ad_img' WHERE id=$id";
            $result=$con->query($sql_update);
            if($result ==TRUE){
                header("location:tbl_ad_view.php");
            }
        }
    }update_ad();
    // insert header
    function insert_header(){
        global $con;
        if(isset($_POST['btn_insert_header'])){
            $title  = $_POST['title'];
            $banner  = rand(1,999)."-".$_FILES['banner']['name'];
            $parth_upload ="./Image/".$banner;
            move_uploaded_file($_FILES['banner']['tmp_name'],$parth_upload);
            $sql_insert = "INSERT INTO tbl_news_type_header VALUES(null,'$title','$banner')";
            $result = $con->query($sql_insert);
            if($result == TRUE){
                header("location:tbl_header_view.php");
            }
        }
    }insert_header();
    //deleted_header
    function delete_header(){
        global $con;
        if(isset($_POST['btn_delete_header'])){
            $id=$_POST['delete_header'];
            $sql_delete="DELETE FROM tbl_news_type_header WHERE id=$id";
            $result=$con->query($sql_delete);
            if($result==TRUE){
                // sweetalert
                echo "
                    <script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Deleted successful',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>
                ";
            }

        }
    }delete_header();
    //update_header
    function update_header(){
        global $con;
        if(isset($_POST['btn_update_header'])){
            if($_FILES['banner']['name']==""){
                $banner=$_POST['old_banner'];
            }
            else{
                $banner=rand(1,999)."-".$_FILES['banner']['name'];
                $parth_upload="./Image/".$banner;
                move_uploaded_file($_FILES['banner']['tmp_name'],$parth_upload);
            }
            $id=$_POST['id'];
            $title=$_POST['title'];
            $sql_update="UPDATE tbl_news_type_header SET banner='$banner',title='$title' WHERE id=$id";
            $result=$con->query($sql_update);
            if($result==TRUE){
                header("location:tbl_header_view.php");
            }
        }
            
    }update_header();
?>
