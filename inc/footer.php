<footer class="footer-area <?= $footerClass ?? ""?>">
    <!--Start Footer-->
    <div class="footer">
        <div class="footer-bg" style="background-image: url(images/footer-bg.png);"></div>
        <div class="container">
            <div class="row text-right-rtl">

                <!--Start single footer widget-->
                <div class="col-xl-6 col-lg-6  wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="single-footer-widget marbtm50">
                        <div class="our-company-info">
                            <div class="footer-logo">
                                <a href="#"><img style="height:75px"  src="images/footer-logo.png" alt></a>
                            </div>
                            <div class="text-box">
                                <p><?php echo $w3LongDescription ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget margin__top marbtm50">
                        <div class="title">
                            <h3>Address</h3>
                        </div>
                        <div class="footer-widget-contact-info">
                            <ul>
                                <li>
                                    <div class="inner">
                                        <div class="icon mapmarker">
                                            <span class="flaticon-placeholder"></span>
                                        </div>
                                        <div class="text">
                                            <p><?= $w3Address ?> </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="flaticon-phone"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:<?= $w3Phone ?>"><?= $w3Phone ?></a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="flaticon-envelope-1"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:<?= $w3Email ?>"><?= $w3Email ?></a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-lg-3 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget margin__top">
                        <div class="title">
                            <h3>Usefull Link</h3>
                        </div>
                        <div class="footer-widget-links">
                            <ul class="pull-left">
                                <li><a href="<?= $webBaseUrl ?>about.php">About Company</a></li>
                                <li><a href="<?= $webBaseUrl ?>services.php">Services</a></li>
                                <li><a href="<?= $webBaseUrl ?>contact.php">Contact Us</a></li>
                                <li><a href="<?= $webBaseUrl ?>projects.php">Out Projects</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->


    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-inner">
                <div class="copyright">
                    <p>Copyright ©<a href="#"> 2021 <?= $w3Name ?>.</a> All Rights Reserved.</p>
                </div>
                <div class="footer-social-link">
                    <ul class="clearfix">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="footer-menu">
                    <ul class="footer-nav">
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>

<button class="scroll-top scroll-to-target" data-target="html">
    <span class="icon-right-arrow-1"></span>
</button>