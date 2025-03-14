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
                                                <th>Title</th>
                                                <th>Banner</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- insert to table -->
                                            <?php
                                                $sql_select="SELECT * FROM tbl_news_type_header";
                                                $resulf=$con->query($sql_select);
                                                while($row=mysqli_fetch_assoc($resulf)){
                                                    echo '
                                                        <tr>
                                                            <td>'.$row['id'].'</td>
                                                            <td>
                                                                '.$row['title'].'
                                                            </td>

                                                            <td>
                                                                <img width="100px" src="./Image/'.$row['banner'].'" alt="">
                                                            </td>
                                                            
                                                            <td>
                                                                <a href="./tbl_header_update.php?id='.$row['id'].'" class=" btn_delete btn btn-primary waves-effect waves-linght">Update</a>
                                                                <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn_delete btn btn-danger waves-effect waves-lingh" >Delete</button>
                                                          
                                                            </td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                            
                                                
                                                
                                            
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
                                                    <input type="hidden" name="delete_header" id="delete_logo">
                                                    <button class="btn btn-danger" name="btn_delete_header">Yes</button>
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