<?php
include("include/header_util.php");
?>

<body>
    <?php
    include("include/navbar.php");
    ?>

    <section id="content">
        <div class="container content">

            <table id="dash-table" class="table table-hover">
                <thead>
                    <th>Job Title</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Date Posted</th>
                </thead>
                <tbody>
                <tr>
                <td><a href="viewjob.php">Software Development Engineering</a></td>
                <td>Amazon</td>
                <td>Bengaluru, Karnataka, India</td>
                <td>05/20/2021</td>
                </tr>
                <tr>
                <td><a href="viewjob.php">Analyst</a></td>
                <td>Goldman Sachs</td>
                <td>Hyderabad, Telangana, India</td>
                <td>05/20/2021</td>
                </tr>
                <tr>
                <td><a href="viewjob.php">System Engineer</a></td>
                <td>Tata Consultancy Services</td>
                <td>Kolkata, West Bengal, India</td>
                <td>05/20/2021</td>
                </tr>
                <tr>
                <td><a href="viewjob.php">Programmer Analyst</a></td>
                <td>Cognizant</td>
                <td>Indore, Madhay Pradesh, India</td>
                <td>05/20/2021</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php
    include("include/footer.php");
    ?>