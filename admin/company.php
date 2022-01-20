<?php
include("include/head_util.php");
?>

<?php
include("include/navbar.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">List of Companies <a href="#" class="btn btn-primary btn-xs  "> <i class="fa fa-plus-circle fw-fa"></i> Add Company</a> </h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <form action="" Method="POST">
                            <div class="table-responsive">
                                <table id="dash-table" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th width="10%" align="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Amazon</td>
                                            <td>Seattle, Washington, United States</td>
                                            <td align="center"><a title="Edit" href="#" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a><a title="Delete" href="#" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a></td>
                                        </tr>
                                        <tr>
                                            <td>Goldman Sachs</td>
                                            <td>New York, New York, United States</td>
                                            <td align="center"><a title="Edit" href="#" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a><a title="Delete" href="#" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a></td>
                                        </tr>
                                        <tr>
                                            <td>Google</td>
                                            <td>Mountain View, California, United States</td>
                                            <td align="center"><a title="Edit" href="#" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a><a title="Delete" href="#" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a></td>
                                        </tr>
                                        <tr>
                                            <td>Tata Consultancy Services</td>
                                            <td>Mumbai, Maharastra, India</td>
                                            <td align="center"><a title="Edit" href="#" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a><a title="Delete" href="#" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a></td>
                                        </tr>
                                        <tr>
                                            <td>Cognizant</td>
                                            <td>Teaneck, New Jersey, United States</td>
                                            <td align="center"><a title="Edit" href="#" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a><a title="Delete" href="#" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a></td>
                                        </tr>
                                        <tr>
                                            <td>Infosys</td>
                                            <td>Bengaluru, Karnataka, India</td>
                                            <td align="center"><a title="Edit" href="#" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a><a title="Delete" href="#" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a></td>
                                        </tr>
                                    </tbody>

                                </table>
                                <div class="btn-group">
                                    <!--  <a href="index.php?view=add" class="btn btn-default">New</a> -->
                                    <?php
                                    if ($_SESSION['ADMIN_ROLE'] == 'Administrator') {
                                            // echo '<button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button'
                                        ;
                                    } ?>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->

<?php
include("include/footer.php");
?>