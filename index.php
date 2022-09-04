<?php
include_once 'inc/constant.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $w3Name ?> - <?= $w3Description ?></title>
    <?php include 'inc/meta.php'; ?>
</head>

<body>

    <div class="boxed_wrapper ltr">
        <?php include 'inc/header.php'; ?>
        <section id="banner" class="main-slider style3">
            <div class="slider3-round-box wow slideInRight" data-wow-delay="500ms" data-wow-duration="3500ms">
                <img src="assets/images/shape/shape-round-8.png" alt="">
            </div>
            <div class="slider-box">
                <div class="banner-carousel owl-theme owl-carousel">
                    <div class="slide">
                        <div class="auto-container">
                            <div class="content">
                                <div class="big-title">
                                    <h2>We'll Build Your<br> Dream Home with<br> Our Love.</h2>
                                </div>
                                <div class="text">
                                    <p>Amet consectetur adipisicing elit sed do.</p>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one" href="services.php">
                                        <span class="txt">Services</span>
                                    </a>
                                    <a class="btn-one style2" href="about.php">
                                        <span class="txt">About us</span>
                                    </a>
                                </div>
                                <div class="round-box">
                                    <img class="zoom-fade" src="assets/images/shape/slide-round-box.png" alt="">
                                </div>
                                <div class="slide3-right-image">
                                    <img class="float-bob" src="images/author-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="auto-container">
                            <div class="content">
                                <div class="big-title">
                                    <h2>Find Your Dream<br> House And Change <br>Your Life.</h2>
                                </div>
                                <div class="text">
                                    <p>Amet consectetur adipisicing elit sed do.</p>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one" href="contact.php">
                                        <span class="txt">Contact Us</span>
                                    </a>
                                </div>
                                <div class="round-box">
                                    <img class="zoom-fade" src="assets/images/shape/slide-round-box.png" alt="">
                                </div>
                                <div class="slide3-right-image">
                                    <img class="float-bob" src="images/author-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-style1-area sp">
            <div class="thm-shape1 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="assets/images/shape/thm-shape-1.png" alt>
            </div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <p>Why we best ?</p>
                    </div>
                    <h2>The Features for you</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-features-style1 text-center">
                            <div class="icon">
                                <div class="shape1"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="60px" height="60px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                    <path fill="#ed202b" d="M945 412H689c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h256c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zM811 548H689c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h122c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zM477.3 322.5H434c-6.2 0-11.2 5-11.2 11.2v248c0 3.6 1.7 6.9 4.6 9l148.9 108.6c5 3.6 12 2.6 15.6-2.4l25.7-35.1v-.1c3.6-5 2.5-12-2.5-15.6l-126.7-91.6V333.7c.1-6.2-5-11.2-11.1-11.2z" />
                                    <path fill="#ed202b" d="M804.8 673.9H747c-5.6 0-10.9 2.9-13.9 7.7c-12.7 20.1-27.5 38.7-44.5 55.7c-29.3 29.3-63.4 52.3-101.3 68.3c-39.3 16.6-81 25-124 25c-43.1 0-84.8-8.4-124-25c-37.9-16-72-39-101.3-68.3s-52.3-63.4-68.3-101.3c-16.6-39.2-25-80.9-25-124c0-43.1 8.4-84.7 25-124c16-37.9 39-72 68.3-101.3c29.3-29.3 63.4-52.3 101.3-68.3c39.2-16.6 81-25 124-25c43.1 0 84.8 8.4 124 25c37.9 16 72 39 101.3 68.3c17 17 31.8 35.6 44.5 55.7c3 4.8 8.3 7.7 13.9 7.7h57.8c6.9 0 11.3-7.2 8.2-13.3c-65.2-129.7-197.4-214-345-215.7c-216.1-2.7-395.6 174.2-396 390.1C71.6 727.5 246.9 903 463.2 903c149.5 0 283.9-84.6 349.8-215.8c3.1-6.1-1.4-13.3-8.2-13.3z" />
                                </svg>
                            </div>
                            <div class="text">
                                <h4><a href="#">Fast & Easy</a></h4>
                                <p>Lorem ipsum dolor amet consectetur<br> sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-features-style1 active text-center">
                            <div class="icon">
                                <div class="shape1"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="60px" height="60px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="#ed202b" d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 1 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0zM3 10v4h1v-4H3zm17 0v4h1v-4h-1zM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.963 7.963 0 0 1-4.24-1.215z" />
                                </svg>
                            </div>
                            <div class="text">
                                <h4><a href="#">Support 24x7</a></h4>
                                <p>Lorem ipsum dolor amet consectetur<br> sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-features-style1 text-center">
                            <div class="icon">
                                <div class="shape1"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="60px" height="60px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="#ed202b" d="M21.92 6.62a1 1 0 0 0-.54-.54A1 1 0 0 0 21 6h-5a1 1 0 0 0 0 2h2.59L13 13.59l-3.29-3.3a1 1 0 0 0-1.42 0l-6 6a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0L9 12.41l3.29 3.3a1 1 0 0 0 1.42 0L20 9.41V12a1 1 0 0 0 2 0V7a1 1 0 0 0-.08-.38Z" />
                                </svg>
                            </div>
                            <div class="text">
                                <h4><a href="#">Growing Platform</a></h4>
                                <p>Lorem ipsum dolor amet consectetur<br> sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-style1-area">
            <div class="shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img class="float-bob-y" src="assets/images/shape/thm-shape-2.png" alt>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-style1__image1">
                            <div class="shape2 wow zoomIn" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <img class="rotate-me" src="assets/images/shape/thm-shape-3.png" alt>
                            </div>
                            <div class="inner wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <img src="images/about-style1.png" alt>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-style1__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <p>About <?= $w3Name ?></p>
                                </div>
                                <h2>Mohammed is the <br> best Property Dealers <br> for 8 Years.</h2>
                            </div>
                            <div class="inner-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua.enim ad minim veniam quis nostrud.</p>

                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <span class="flaticon-checked"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Customized Properties</h3>
                                            <p>Lorem ipsum dolor amet consectetur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </li>
                                    <li class="style2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="icon">
                                            <span class="flaticon-checked"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Afforable Prices</h3>
                                            <p>Lorem ipsum dolor amet consectetur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </li>

                                    <li class="style2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="icon">
                                            <span class="flaticon-checked"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Scheduled Maintenance</h3>
                                            <p>Lorem ipsum dolor amet consectetur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <?php include 'inc/services.php'; ?>

        <section class="working-process-area">
            <div class="shape1 wow slideInUp" data-wow-delay="100ms" data-wow-duration="5000ms" style="background-image: url(assets/images/shape/working-process-shape-1.png);"></div>
            <div class="shape2 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="3500ms">
                <img class="float-bob-y" src="assets/images/shape/working-process-shape-2.png" alt>
            </div>
            <div class="shape3 wow slideInDown" data-wow-delay="100ms" data-wow-duration="4500ms">
                <img class="float-bob-x" src="assets/images/shape/working-process-shape-3.png" alt>
            </div>
            <div class="shape4 wow slideInRight" data-wow-delay="100ms" data-wow-duration="3500ms">
                <img class="zoom-fade" src="assets/images/shape/working-process-shape-4.png" alt>
            </div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <p>Working Plan</p>
                    </div>
                    <h2><?= $w3Name ?> Working Process</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="working-process-box">
                            <li class="single-working-process wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="arrow-box"><img src="images/arrow.png" alt></div>
                                <div class="img-holder">
                                    <img src="images/working-process-1.png" alt>
                                    <div class="count"></div>
                                </div>
                                <div class="text-holder">
                                    <h3>Schedule Estimate</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, dolore?</p>
                                </div>
                            </li>
                            <li class="single-working-process wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                <div class="arrow-box"><img src="images/arrow-2.png" alt></div>
                                <div class="img-holder">
                                    <img src="images/working-process-2.png" alt>
                                    <div class="count"></div>
                                </div>
                                <div class="text-holder">
                                    <h3>Buy Property</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, dolore?</p>
                                </div>
                            </li>
                            <li class="single-working-process wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="images/working-process-3.png" alt>
                                    <div class="count"></div>
                                </div>
                                <div class="text-holder">
                                    <h3>Relax & Enjoy </h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, dolore?</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="fact-counter-area">
            <div class="pattern-bg" style="background-image: url(images/thm-pattern-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="fact-counter_box">
                            <ul class="clearfix">

                                <li class="single-fact-counter wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <span class="flaticon-complete"></span>
                                    </div>
                                    <div class="outer-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="90">0</span>
                                        </div>
                                        <div class="title">
                                            <h6>Project Complate</h6>
                                        </div>
                                    </div>
                                </li>

                                <li class="single-fact-counter wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <span class="flaticon-like"></span>
                                    </div>
                                    <div class="outer-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="216">0</span>
                                        </div>
                                        <div class="title">
                                            <h6>Satisfied Clients</h6>
                                        </div>
                                    </div>
                                </li>

                                <li class="single-fact-counter wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <span class="flaticon-sharing"></span>
                                    </div>
                                    <div class="outer-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="35">0</span>
                                        </div>
                                        <div class="title">
                                            <h6>Experienced Staff</h6>
                                        </div>
                                    </div>
                                </li>

                                <li class="single-fact-counter wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <span class="flaticon-medal"></span>
                                    </div>
                                    <div class="outer-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="10">0</span>
                                        </div>
                                        <div class="title">
                                            <h6>Awards Win</h6>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'inc/contact.php'; ?>
        <?php include 'inc/testimonials.php'; ?>
        <?php include 'inc/footer.php'; ?>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/knob.js"></script>
    <script src="js/map-script.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/pagenav.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/scrollbar.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.js"></script>

    <script src="js/jquery.bootstrap-touchspin.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/tilt.jquery.js"></script>



    <script src="js/custom.js"></script>




</body>

</html>