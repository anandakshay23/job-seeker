<div id="wrapper" class="home-page">
    <!-- start header -->
    <header>
        <div class="topbar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="pull-left hidden-xs"><i class="fa fa-phone"></i>Tel No. (+001) 123-456-789</p>
                        <p   class="pull-right login"><a data-target="#myModal" data-toggle="modal" href=""> <i class="fa fa-lock"></i> Login </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div style="min-height: 30px;"></div>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Job Seeker
                        <!-- <img src="plugins/home-plugins/img/logo.png" alt="logo"/> -->
                    </a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Job Search <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class=""><a href="advancesearch.php">Advance Search</a></li>
                                <li><a href="search-company.php">Job By Company</a></li>
                                <li><a href="search-jobtitle.php">Job By Title</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="company.php">Company</a></li>
                        <li class=""><a href="hiring.php">Hiring Now</a></li>
                        <li class=""><a href="about.php">About Us</a></li>
                        <li class=""><a href="contect.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <?php include("login.php"); ?>