<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Bliss</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <!-- <link rel="stylesheet" href="css/style.css"> -->
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> -->
      <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <?php
        wp_head();
     ?>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <!-- end loader -->
      <div class="full_bg">
         <!-- header -->
         <header class="header-area">
            <div class="container">
               <div class="row d_flex">
                  <div class=" col-md-3 col-sm-3">
                     <div class="logo">
                        <a href="index.html">Bliss</a>
                     </div>
                  </div>
                  <div class="col-md-9 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <?php
                            wp_nav_menu(
                              array(
                                'menu' => 'primary',
                                'container' =>'',
                                'theme_location' => 'primary',
                                'item_wrap' => '<ul>%3$s</ul>'
                              )
                            );
                          ?>
                           <!-- <ul>
                              <li><a class="active" href="index.html">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="service.html">Service</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="contact.html">Contact us</a></li>
                              <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                              <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                           </ul> -->
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>
