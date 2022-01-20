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
                                <h1 class="page-header">List of Vacancies <a href="#" class="btn btn-primary btn-xs  "> <i class="fa fa-plus-circle fw-fa"></i> Add Job Vacancy</a> </h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <form action="controller.php?action=delete" Method="POST">
                            <div class="table-responsive">
                                <table id="dash-table" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Company Name</th>
                                            <th>Occupation Title</th>
                                            <th>Require no. of Employees</th>
                                            <th>Salaries</th>
                                            <th>Duration of Employment</th>
                                            <th>Qualification/Work experience</th>
                                            <th>Job Description</th>
                                            <th>Prefered Sex</th>
                                            <th>Sector of Vacancy</th>
                                            <th>Job Status</th>
                                            <th width="10%" align="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Amazon</td>
                                            <td>Software Development Engineering</td>
                                            <td>50</td>
                                            <td>30 LPA</td>
                                            <td>N/A</td>
                                            <td>2 Year</td>
                                            <td>We are looking for bachelor of technology under graduate</td>
                                            <td>Male/Female</td>
                                            <td>Yes</td>
                                            <td></td>
                                            <td align="center"><a title="Edit" href="#" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a> <a title="Delete" href="#" class="btn btn-danger btn-xs  "> <span class="fa  fa-trash-o fw-fa "></a></td>
                                        </tr>
                                    </tbody>

                                </table>
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