<!--shape image end-->

<!--footer section start-->
<footer class="footer-section">

    <!--footer top start-->
    <div class="footer-top pt-4 background-img-2" style="background: #003bb3;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-12 col-md-4 col-lg-4 mb-4 mb-md-4 mb-sm-5 mb-lg-0">
                    <div class="footer-nav-wrap text-white">
                        <div class="social-list-wrap">
                            <ul class="social-list list-inline list-unstyled">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/GetToNote" target="_blank" title="Facebook">
                                        <span class="ti-facebook"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/company/gettonote" target="_blank" title="Linkedin">
                                        <span class="ti-linkedin"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/mytonote/" target="_blank" title="Instagram">
                                        <span class="ti-instagram"></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 mb-4 mb-sm-5 mb-md-0 mb-lg-0">
                    <div class="footer-nav-wrap text-white text-lg-right text-md-right text-left">
                        <ul class="list-inline list-unstyled">
                            <li class="mb-2 list-inline-item">
                                <a href="/#home" class="page-scroll">Home</a>
                            </li>
                            <li class="mb-2 list-inline-item">
                                <a href="/#faq" class="page-scroll">FAQ</a>
                            </li>
                            <li class="mb-2 list-inline-item">
                                <a href="/#contact" class="page-scroll">Contact Us</a>
                            </li>
                            <li class="mb-2 list-inline-item">
                                <a href="/#about" class="page-scroll">About Us</a>
                            </li>
                            <li class="mb-2 list-inline-item">
                                <a href="<?= $privacy_url ?>">Privacy Policy</a>
                            </li>
                            <li class="mb-2 list-inline-item">
                                <a href="<?= $terms_url ?>">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom copyright start-->
        <div class="footer-bottom border-gray-light mt-1 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <div class="copyright-wrap small-text">
                            <p class="mb-0 text-white">© ToNote, All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="terms-policy-wrap text-lg-right text-md-right text-left">
<!--                            <ul class="list-inline">-->
<!--                                <li class="list-inline-item"><a class="small-text" href="#">Terms</a></li>-->
<!--                                <li class="list-inline-item"><a class="small-text" href="#">Security</a></li>-->
<!--                                <li class="list-inline-item"><a class="small-text" href="#">Privacy Policy</a></li>-->
<!--                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom copyright end-->
    </div>
    <!--footer top end-->
</footer>
<!--footer section end-->

<!--jQuery-->
<script src="js/jquery-3.5.0.min.js"></script>
<!--Popper js-->
<script src="js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="js/jquery.easing.min.js"></script>

<!--wow js-->
<script src="js/wow.min.js"></script>
<!--owl carousel js-->
<script src="js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="js/jquery.countdown.min.js"></script>
<!--validator js-->
<script src="js/validator.min.js"></script>
<!--custom js-->
<script src="js/scripts.js"></script>
<script>
    $('body').on('click touchstart', function () {
        const videoElement = document.getElementById('intro-video');
        if (!videoElement.playing) {
            // video is already playing so do nothing
            videoElement.play();
        }
    });

    $('body').append('<a id="scroll-to-top" class="scroll-to-top-btn" href="#"><i class="ti-arrow-up"></i></a>');
    if ($('#scroll-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#scroll-to-top').addClass('active');
                } else {
                    $('#scroll-to-top').removeClass('active');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#scroll-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 1250);
        });
    }
</script>
</body>
</html>