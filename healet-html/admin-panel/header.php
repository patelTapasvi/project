<!-- <?php
if (isset($_SESSION['aid'])) {

} else {
    echo "<script>
		window.location='admin'
		</script>";
}
?> -->


<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index">
                        <img src="assets/img/logo.png" />

                    </a>

                </div>

                <span class="logout-spn">
                    <a href="admin_logout" style="color:#fff;">LOGOUT</a>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">



                    <li class="active-link">
                        <a href="index"><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>



                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i
                                class="fa fa-table "></i>Categories
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="add_categories">Add Categories</a></li>
                            <li><a href="manage_categories">Manage Categories</a></li>
                        </ul>
                    </li>
                    <li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-table "></i>Services
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="add_services">Add Services</a></li>
                            <li><a href="manage_services">Manage Services</a></li>
                        </ul>
                    </li>
                    <li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-table "></i>Blog
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="add_blog">Add Blog</a></li>
                            <li><a href="manage_blog">Manage Blog</a></li>
                        </ul>
                    </li>
                    <li>
                    <li>
                        <a href="manage_customer"><i class="fa fa-edit "></i>Customer</a>
                    </li>
                    <li>
                        <a href="manage_contact"><i class="fa fa-edit "></i>Contact</a>
                    </li>


                </ul>
            </div>

        </nav>