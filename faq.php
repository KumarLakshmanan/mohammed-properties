<?php
include_once 'inc/constant.php';
$footerClass = " gray-bg";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ABOUT | <?= $w3Name ?></title>
    <?php include 'inc/meta.php'; ?>
</head>

<body>
    <style>
        .gray-bg {
            background-color: #f8f5ee;
        }
    </style>
    <div class="boxed_wrapper ltr">
        <?php include 'inc/header.php'; ?>
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(images/breadcrumb-1.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title">
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li class="active">FAQ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->
        <section class="faq-style1-area">
            <div class="shape1 wow slideInRight" data-wow-delay="500ms" data-wow-duration="6500ms">
                <img class="zoom-fade" src="assets/images/shape/faq-shape.png" alt="">
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-style1__content">
                            <div class="inner-content">
                                <ul class="accordion-box">
                                    <li class="accordion block wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>Is this the best property at the best price</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block active-block wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>How can I manage my property?</h3>
                                        </div>
                                        <div class="acc-content current">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>How can I buy easily?</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>How can I be a member?</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block wow slideInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>Can I manage my account online?</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-style1__content">
                            <div class="inner-content">
                                <ul class="accordion-box">
                                    <li class="accordion block wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>How can I buy easily?</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>How can I be a member?</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block wow slideInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>Can I manage my account online?</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>Is this the best property at the best price</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>How can I manage my property?</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>

                                    <li class="accordion block wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fa fa-chevron-down"></i></div>
                                            <h3>How can I be a member?</h3>
                                        </div>
                                        <div class="acc-content">
                                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit eius mod tempor incididunt labore dolore magna aliquanim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip amet consectur.</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

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



    <!-- thm custom script -->
    <script src="js/custom.js"></script>




</body>

</html>