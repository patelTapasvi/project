<?php
function active($currect_page)
{
  $url_array = explode('/', $_SERVER['REQUEST_URI']); // current page url
  $url = end($url_array);
  if ($currect_page == $url) {
    echo 'active'; //class name in css 
  }
}
?>



<!DOCTYPE php>
<php>

  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Healet</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

  </head>

  <body>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index">
            <span>
              Healet
            </span>
          </a>
          <div class="" id="">

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <a href="index">index</a>
                  <a href="about">about</a>
                  <a href="shop">shop</a>
                  <a href="blog">blog</a>
                  <a href="contact">contact</a>
                  <?php
                  if (isset($_SESSION['uid'])) {
                    ?>
                    <li class="nav-item <?php active('profile') ?>">
                      <a class="nav-link tm-nav-link" href="profile">Hi..<?php echo $_SESSION['uname']; ?></a>
                    </li>
                    <li class="nav-item <?php active('user_logout') ?>">
                      <a class="nav-link tm-nav-link" href="user_logout">Logout</a>
                    </li>
                    <?php
                  } else {
                    ?>
                    <li class="nav-item <?php active('signup') ?>">
                      <a class="nav-link tm-nav-link" href="signup">Signup</a>
                    </li>
                    <?php
                  }
                  ?>
                </div>
              </div>
            </div>

          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->