<?php
    include("function.php");
?>

<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <!-- <a href="index.html" class="auth-logo"> -->
                                    <!-- <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt=""> -->
                                    <!-- <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt=""> -->
                                <!-- </a> -->
                            </div>
                        </div>
                        <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>
                        <div class="p-3">
                            <!-- edit -->
                            <form method="post" enctype="multipart/form-data" class="form-horizontal mt-3">
                                
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="text" name="name" id="name" placeholder="Name">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control"  id="password" name="password"  placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Password Confirmation">
                                    </div>
                                </div>
                                <!-- edit -->
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="image1 form-control" id="profile" name="profile" type="file" >
                                    </div>
                                </div>

                                </div>
                                <!-- img -->
                                <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label"></label>
                                        <img class="showImage2 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:95px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                        </div>
                                    </div>
                                </div>
                                
    
                                <div class="form-group text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <!-- edit name -->
                                        <button name="btn_register" class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                </div>
    
                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a href="login.php" class="text-muted">Already have account?</a>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->
        

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
<script>
    $(document).ready(function(){
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage2").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>