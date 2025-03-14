<?php
    include("function.php");
    $id =$_SESSION['id'];
    include("header.php");
   
?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                include("left_side_bar.php");
            ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">News Data Page</h4>

                                    <table id="datatable" class="table table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Icon</th>
                                                <th>Link</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                $sql_select ="SELECT * FROM tbl_about_us";
                                                $result = $con->query($sql_select);
                                                while($row=mysqli_fetch_assoc($result)){
                                                    echo '
                                                        <tr>
                                                            <td>'.$row['id'].'</td>
                                                            <td>
                                                                <img width="100px" src="./Image/'.$row['icon'].'" alt="">
                                                            </td>
                                                            <td>
                                                                '.$row['link'].'
                                                            </td>
                                                            <td>
                                                                '.$row['email'].'
                                                            </td>
                                                            <td>
                                                                <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn_delete btn btn-danger waves-effect waves-linght" >Delete</button>
                                                                <a href="./tbl_about_us_update.php?id='.$row['id'].' " class="btn_delete btn btn-success waves-effect waves-linght" >Update</a>
                                                            </td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                            <!-- insert to table -->
                                            
                                        </tbody>
                                    </table>
                                
                                    <!-- The Modal -->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Are you sure to delete this row?</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <form action="" method="post">
                                                    <input type="hidden" name="delete_icon" id="delete_logo">
                                                    <button class="btn btn-danger" name="btn_delete_about_us">Yes</button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
            </div>
                <!-- End Page-content -->
                <?php
                    include("footer.php");
                ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        <?php
            include("right_side_bar.php");
        ?>
        <!-- /Right-bar -->
    </body>

</html>
<script>
    // systax: ការចាប់id
    $(document).ready(function(){
        $(".btn_delete").click(function(){
            var id =$(this).parents("tr").find("td:eq(0)").text();
            $("#delete_logo").val(id);
        })
    })
</script>