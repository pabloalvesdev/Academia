<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Fitness Gym - A Modern Fitness Gym Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include_once 'components/header.html'; ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Elements</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Elements</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area mt-50 section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- ========== Buttons ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        <h2>Buttons</h2>
                    </div>
                    <!-- Selene Button -->
                    <div class="fitness-buttons-area mb-100">
                        <a href="#" class="btn fitness-btn m-2">Send message</a>
                        <a href="#" class="btn fitness-btn btn-2 m-2">Send message</a>
                        <a href="#" class="btn fitness-btn btn-3 m-2">Get a membership</a>
                    </div>
                </div>

                <!-- ========== Progress Bars & Accordions ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        <h2>Accordians &amp; Tabs</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Donec ipsum metus, pharetr a quis nunc sit amet, maximus.
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Maximus vehicula nibh. Prae sent pulvinar porta.
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Pharetr a quis nunc sit amet, maximus vehicula nibh.
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <div class="fitness-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Morbi vel arcu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Sed faucibus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Sed faucibus mau</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="fitness-tab-content">
                                    <!-- Tab Text -->
                                    <div class="fitness-tab-text">
                                        <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="fitness-tab-content">
                                    <!-- Tab Text -->
                                    <div class="fitness-tab-text">
                                        <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="fitness-tab-content">
                                    <!-- Tab Text -->
                                    <div class="fitness-tab-text">
                                        <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Milestones ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        <h2>Milestone</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="fitness-cool-facts-area mb-50">
                        <div class="row">

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact elements text-center mb-100">
                                    <img src="img/core-img/stationary-bike2.png" alt="">
                                    <h2><span class="counter">1293</span></h2>
                                    <p>Km Spinned</p>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact elements text-center mb-100">
                                    <img src="img/core-img/chronometer.png" alt="">
                                    <h2><span class="counter">12</span></h2>
                                    <p>Hours a Day</p>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact elements text-center mb-100">
                                    <img src="img/core-img/beef.png" alt="">
                                    <h2><span class="counter">311</span></h2>
                                    <p>Days of Diet</p>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact elements text-center mb-100">
                                    <img src="img/core-img/swimming2.png" alt="">
                                    <h2><span class="counter">3000</span></h2>
                                    <p>Km Swimmed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Loaders ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        <h2>Loaders</h2>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Loaders Area Start -->
                    <div class="our-skills-area">
                        <div class="row">

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area elements mb-100 wow fadeInUp" data-wow-delay="100ms">
                                    <div id="circle" class="circle" data-value="0.75">
                                        <div class="skills-text">
                                            <span>75%</span>
                                            <h6>Training</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area elements mb-100 wow fadeInUp" data-wow-delay="300ms">
                                    <div id="circle2" class="circle" data-value="0.50">
                                        <div class="skills-text">
                                            <span>50%</span>
                                            <h6>Endurance</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area elements mb-100 wow fadeInUp" data-wow-delay="500ms">
                                    <div id="circle3" class="circle" data-value="0.90">
                                        <div class="skills-text">
                                            <span>90%</span>
                                            <h6>Commitment</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area elements mb-100 wow fadeInUp" data-wow-delay="700ms">
                                    <div id="circle4" class="circle" data-value="1">
                                        <div class="skills-text">
                                            <span>100%</span>
                                            <h6>Professionals</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        <h2>Icon Boxes</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <div class="course-content d-flex align-items-center">
                                    <!-- Course Icon -->
                                    <div class="course-icon d-flex align-items-center justify-content-center">
                                        <img src="img/core-img/apple.png" alt="">
                                    </div>
                                    <h4>Diet Specialists</h4>
                                </div>
                                <p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <div class="course-content d-flex align-items-center">
                                    <!-- Course Icon -->
                                    <div class="course-icon d-flex align-items-center justify-content-center">
                                        <img src="img/core-img/swimming.png" alt="">
                                    </div>
                                    <h4>Swimming Pool</h4>
                                </div>
                                <p>Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <div class="course-content d-flex align-items-center">
                                    <!-- Course Icon -->
                                    <div class="course-icon d-flex align-items-center justify-content-center">
                                        <img src="img/core-img/stationary-bike.png" alt="">
                                    </div>
                                    <h4>Spinning Class</h4>
                                </div>
                                <p>Nullam vulputate a lectus non molestie. Duis at lobortis neque, in maximus leo. Donec nec blandit ex, in finibus tortor.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Elements Area End ***** -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-11.jpg);">

        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <p class="mb-30">Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id. Nullam vulputate a lectus non molestie. Duis at lobortis neque.</p>
                            <!-- Social Info -->
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>testimonials</h6>
                            </div>

                            <!-- Testimonials Slides -->
                            <div class="testimonials-slides owl-carousel">

                                <div class="single-slide">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Michael Smith</span>
                                    </div>
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Julia Williams</span>
                                    </div>
                                </div>

                                <div class="single-slide">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Michael Smith</span>
                                    </div>
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Julia Williams</span>
                                    </div>
                                </div>

                                <div class="single-slide">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Michael Smith</span>
                                    </div>
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial">
                                        <p>“ Molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus</p>
                                        <span>Julia Williams</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <div class="widget-title">
                                <h6>Classes</h6>
                            </div>

                            <nav>
                                <ul class="fitness-classes">
                                    <li><a href="#">Bodybuilding Class</a></li>
                                    <li><a href="#">Fitness Class</a></li>
                                    <li><a href="#">Yoga Courses</a></li>
                                    <li><a href="#">Dumbell Class</a></li>
                                    <li><a href="#">Spinning Class</a></li>
                                    <li><a href="#">Kangoo Jump Class</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget-area mb-50">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>

                            <!-- Single Contact -->
                            <div class="single-contact mb-30">
                                <span>Address:</span>
                                <p>481 Creekside Lane Avila <br>Beach, CA 93424</p>
                            </div>

                            <!-- Single Contact -->
                            <div class="single-contact mb-30">
                                <span>Phone:</span>
                                <p>+53 345 7953 32453</p>
                            </div>

                            <!-- Single Contact -->
                            <div class="single-contact mb-30">
                                <span>Email:</span>
                                <p>yourmail@gmail.com</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Live Chat Code :: Start of Tawk.to Script -->
    <script>
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5b55ea72df040c3e9e0bdf85/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!-- End of Tawk.to Script -->
</body>

</html>