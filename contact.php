<?php
include_once 'inc/constant.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CONTACT | <?= $w3Name ?></title>
    <?php include 'inc/meta.php'; ?>
</head>

<body>

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
                                <h2>Contact Us</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li class="active">Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Google map area-->
        <section class="google-map-area">
            <div class="container-fluid">
                <div class="contact-page-map-outer">
                    <!--Map Canvas-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4013472.064197244!2d76.04391597101748!3d10.780160084333655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b1189633%3A0x559475cc463361f0!2sTamil%20Nadu!5e0!3m2!1sen!2sin!4v1656381647866!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <!--Start Google map area-->

        <!--Start Contact Info Area-->
        <section class="contact-info-area">
            <div class="container">
                <div class="row">
                    <!--Start Single Contact Info Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <div class="shape-bg"></div>
                                <span class="icon-placeholder"></span>
                            </div>
                            <div class="text">
                                <h4><a href="#">Office Location</a></h4>
                                <p><?= $w3Address?> </p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Contact Info Box-->
                    <!--Start Single Contact Info Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <div class="shape-bg"></div>
                                <span class="flaticon-opened"></span>
                            </div>
                            <div class="text">
                                <h4><a href="#">Company Email</a></h4>
                                <p class="text1"><a href="mailto:<?= $w3Email ?>"><?= $w3Email?></a></p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Contact Info Box-->
                    <!--Start Single Contact Info Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <div class="shape-bg"></div>
                                <span class="flaticon-phone-call-1"></span>
                            </div>
                            <div class="text">
                                <h4><a href="#">Contact Us</a></h4>
                                <p class="text1"><a href="tel:<?= $w3Phone ?>"><?= $w3Phone ?></a></p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Contact Info Box-->
                </div>
            </div>
        </section>
        <!--End Contact Info Area-->



        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h2>Contact us</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-style1_form">
                            <div class="contact-form">
                                <form id="contact-form" name="contact_form" class="default-form2" action="assets/inc/sendmail.php" method="post">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="form_name" value="" placeholder="Full Name :" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="email" name="form_email" value="" placeholder="Email :" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" placeholder="Phone :">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="form_subject" value="" placeholder="Subject :">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 text-center">
                                            <div class="input-box two">
                                                <textarea name="form_message" placeholder="Enter your message..." required=""></textarea>
                                            </div>
                                            <div class="button-box">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                    <span class="txt">Submit Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Team Style1 Area-->


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