<?php
include 'functions.php';
 ?>




<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta name="description" content="Zuman - Creative Personal Portfolio">
    <meta name="keywords" content="Portfolio, Personal, Creatiev, Zuman, Html Template, Portfolio Template">
    <meta name="author" content="ixTheme">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Creative Personal Portfolio</title>
    <!-- Favicon -->
    <link href="img/favicon.png" type="image/png" rel="icon">

    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="css/mobiriseicons.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/splitting.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body id="top" data-spy="scroll" data-target="#menu_items">
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--  start page loader  -->
    <div id="preloader">
        <div class="scroll-static"></div>
    </div>
    <!--  end page loader  -->

    <!-- start landing wrapper  -->
   <?php foreach ($result10 as $value10) {
       ?>

    <div class="landing_wrapper bg-img" data-src="dashboard/uploads/font/<?php echo $value10["font_image"];?>">
           <?php } ?>
        <!-- start header  -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-8">
                        <div class="logo">
                            <a href="index.html"><img src="dashboard/uploads/logo/<?php  echo $after_assoc["logo"];?>" alt="" width="100"></a>
                        </div>
                    </div>

                    <?php

        foreach ($result3 as $value3) {
       ?>
                    <div class="col-md-9 col-4">




                        <ul id="menu_items" class="menu_items">
                            <li class="nav-item">
                                <a href="<?php echo $value3['home']; ?>" class="active menu_item nav-link slide-horizontal" data-splitting><?php echo $value3['home_head']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $value3['about']; ?>" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $value3['about_head']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $value3['service']; ?>" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $value3['service_head']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $value3['works']; ?>" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $value3['works_head']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $value3['testimonial']; ?>" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $value3['testimonial_head']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $value3['contact']; ?>" class="menu_item nav-link slide-horizontal" data-splitting><?php echo $value3['contact_head']; ?></a>
                            </li>
                        </ul>




                        <!-- responsive menu btn -->
                        <div class="nav-btn">
                            <span class="ion-android-menu"></span>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </header>
        <!-- end header  -->
        <!-- start home wrapper -->

        <div class="home_wrapper">
            <!-- start landing content -->
            <div class="landing_content">
                                <?php
            foreach ($result10 as  $value10) {
          ?>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">


                            <h5 class="title-slide-in" data-splitting><?php echo $value10['header1']; ?> </h5>
                            <h1 class="title-slide-in" data-splitting><?php echo $value10['header2']; ?></h1>
                            <h4 class="title-slide-in" data-splitting><?php echo $value10['header3']; ?></h4>
                        </div>

                    </div>
                </div>


            </div>
            <!-- end landing content -->
             <?php }
                        ?>
        </div>



        <!-- end home wrapper -->
    </div>
    <!-- end landing wrapper  -->
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- start about wrapper -->
                <div id="about" class="about_wrapper">
                    <div class="about">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <!-- start about image -->
                                <?php
                                foreach ($result7 as $value7) {
                               ?>

                                <div class="about_img">
                                    <img class="about_img_1 top" src="dashboard/uploads/about/<?php echo $value7["about_img"];?>" alt="">
                                    <img class="about_img_2 bottom" src="img/about_photo_2.jpg" alt="">
                                </div>
                                <!-- end about image -->
                            </div>

                            <div class="col-lg-6 col-md-7">
                                <!-- start about details -->

                                <div class="about_info">
                                    <h4><?php echo $value7['header']; ?></h4>
                                    <img class="zigzag" src="img/zigzag.svg" alt="">
                                    <p class="about_desc"><span><?php echo $value7['para1']; ?></span> <?php echo $value7['para2']; ?>  </p>
                                    <!-- start social links -->
                                    <ul class="social_links">
                                        <li><a href="#"><span class="ion-social-twitter"></span></a></li>
                                        <li><a href="#"><span class="ion-social-instagram-outline"></span></a></li>
                                        <li><a href="#"><span class="ion-social-linkedin"></span></a></li>
                                        <li><a href="#"><span class="ion-social-facebook"></span></a></li>
                                        <li><a href="#"><span class="ion-social-dribbble-outline"></span></a></li>
                                    </ul>
                                    <!-- end social links -->
                                </div>
                                <?php } ?>
                                <!-- end about details -->
                            </div>



                        </div>
                    </div>
                </div>


                <!-- end about wrapper -->
                <!-- start services wrapper -->
                <div id="service" class="services">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- section title -->
                            <?php
            foreach ($result6 as  $value6) {
          ?>
                            <div class="text-center">
                                <h2 class="section_title"><?php echo $value6['services_head']; ?></h2>
                            </div>
                            <!-- start service items -->
                            <div class="service_items">
                                <div class="row">
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-sites"></i>
                                            <h6 data-hover="Design"><?php echo $value6['design_head']; ?></h6>
                                            <p><?php echo $value6['design']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-extension"></i>
                                            <h6 data-hover="Development"><?php echo $value6['development_head']; ?></h6>
                                            <p><?php echo $value6['development']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-rocket"></i>
                                            <h6 data-hover="Graphics"><?php echo $value6['graphics_head']; ?></h6>
                                            <p><?php echo $value6['graphics']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-flag"></i>
                                            <h6 data-hover="Branding"><?php echo $value6['branding_head']; ?></h6>
                                            <p><?php echo $value6['branding']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-image-slider"></i>
                                            <h6 data-hover="Photography"><?php echo $value6['photography_head']; ?></h6>
                                            <p><?php echo $value6['photography']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-like"></i>
                                            <h6 data-hover="Support"><?php echo $value6['support_head']; ?></h6>
                                            <p><?php echo $value6['support']; ?></p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                </div>
                            </div>
                            <!-- end service items -->
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- end services wrapper -->

                <!-- start counter wrapper -->
                          <?php

        foreach ($result5 as $value5) {
       ?>

                <div class="counter">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-3">
                                    <i class="mbri-user"></i>
                                    <h4><?php echo $value5['happy']; ?></h4>
                                    <span class="counter-number"><?php echo $value5['happy_counter']; ?></span>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <i class="mbri-code"></i>
                                    <h4><?php echo $value5['project']; ?></h4>
                                    <span class="counter-number"><?php echo $value5['project_counter']; ?></span>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <i class="mbri-hot-cup"></i>
                                    <h4><?php echo $value5['coffee']; ?></h4>
                                    <span class="counter-number"><?php echo $value5['coffee_counter']; ?></span>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <i class="mbri-cust-feedback"></i>
                                    <h4><?php echo $value5['total']; ?></h4>
                                    <span class="counter-number"><?php echo $value5['total_counter']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                       <?php }
                        ?>

                <!-- end counter wrapper -->
                <!-- start testimonials wrapper -->
                <div id="testimonial" class="testimonials">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Testimonials</h2>
                            </div>
                            <div class="owl-carousel testimonial_slider">
                                <?php
                                foreach ($result11 as $value11) {
                                            ?>
                                <!-- start testimonial single item -->
                                <div class="testimonial_single_item">
                                    <img src="dashboard/uploads/test/<?php echo $value11['test_image'] ?>" alt="">
                                    <p><?php echo $value11['parag1']; ?></p>
                                    <h4><?php echo $value11['parag2']; ?></h4>
                                    <span><?php echo $value11['parag3']; ?></span>
                                </div>


                                <?php }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end testimonials wrapper -->
                <!-- start clients wrapper -->


                  <div class="clients">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-10 client_items">

                            <!-- section title -->

                            <h2 class="section_title">Clients</h2>
                            <div class="row no-gutters">



                                <div class="col">
                                    <?php

                                    foreach ($result99 as $value99) {
                                   ?>
                                    <img src="dashboard/uploads/clients/<?php echo $value99['clients_image']; ?>">
                                    <?php }
                                    ?>


                                </div>


                            </div>


                        </div>
                    </div>
                </div>


                <!-- end clients wrapper -->
                <!-- start contact wrapper -->

                <div id="contact" class="contact_wrapper">
                    <div class="text-center">

                        <h2 class="section_title">Drop a line</h2>

                           <?php

        foreach ($result1 as $value1) {
       ?>


                             <?php
          if(!empty($_SESSION['success'])){
           ?>
          <div class="alert alert-danger" role="alert">
              <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
              ?>
          </div>
          <?php } ?>

                    </div>
                    <div class="row justify-content-center">
                        <!-- start contact info ( email - phone) -->
                        <div class="col-lg-3 col-md-12">
                            <div class="contact_item">
                                <h5><span><?php echo $value1['phone_head']; ?></span></h5>
                               <p><span><?php echo $value1['phone']; ?></span> </p>
                            </div>
                            <div class="contact_item">
                                <h5><span><?php echo $value1['email_head']; ?></span></h5>
                               <p> <?php echo $value1['email']; ?></p>
                            </div>
                        </div>

                        <?php }
                        ?>
                        <!-- end contact info ( email - phone) -->
                        <!-- start contact form -->


                        <div class="col-lg-7 col-md-12">
<!--                            <form id="contact-form" action="https://sojonever.com/html/zuman/php/mail.php">-->
                                <div class="row">
                                    <div class="col">
                                        <p class="form-message"></p>
                                    </div>
                                </div>

                                <form action="dashboard/message_post.php" method="post" id="contactForm" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- input field for NAME -->
                                        <input class="input_field required" type="text" name="name" name="name" placeholder="Name">
                                        <!-- input field for EMAIL -->
                                        <input class="input_field required" type="email" name="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- input field for MESSAGE -->
                                        <textarea class="input_field required" name="message" name="message" placeholder="Tell Me About Your Query."></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                              <input type="file" name="photo" class="form-control">
                              </div>
                                <div id="success"></div>


                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <!-- button for MESSAGE-SEND -->
                                        <button class="button slide-vertical" type="submit" data-splitting>send message</button>
                                    </div>
                                </div>
                                 </form>
<!--                            </form>-->
                        </div>

                        <!-- end contact form -->
                    </div>
                </div>

                <!-- end contact wrapper -->
                <!-- start footer wrapper -->
                <footer>
                    <a href="#top" class="go_top">
                        <?php
                   foreach ($result8 as $value8) {
                  ?>

                        <i class="ion-ios-arrow-thin-up"></i>
                    </a>
                    <!-- start social links -->
                    <ul class="social_links">
                        <li><a href="<?php echo $value8['twitter']; ?>"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="<?php echo $value8['instragram']; ?>"><span class="ion-social-instagram-outline"></span></a></li>
                        <li><a href="<?php echo $value8['youtube']; ?>"><span class="fab fa-youtube"></span></a></li>
                        <li><a href="<?php echo $value8['facebook']; ?>"><span class="ion-social-facebook"></span></a></li>
                        <li><a href="<?php echo $value8['google_plus']; ?>"><span class="fab fa-google-plus-g"></span></a></li>
                    </ul>
                     <?php
                      }
                      ?>

                    <?php
                   foreach ($result4 as $value4) {
                  ?>

                    <p class="copyright">&copy; <?php echo $value4['copy_right']; echo "  ";?><a href="http://<?php echo $value4['url']; ?>" ><?php echo $value4['url_front']; ?></a></p>
                    <p>Created by <span><?php echo $value4['url']; ?></span></p>


                    <?php
                      }
                      ?>

                </footer>
                <!-- end footer wrapper -->
            </div>
        </div>
    </div>


    <!-- ========  All JS Here ========  -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from sojonever.com/html/zuman/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2019 21:46:40 GMT -->
</html>
