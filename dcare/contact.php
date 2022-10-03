<?php
session_start();
    require_once('header.php');
?>

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container" style="padding-top: 25px">
            <h2>تواصل معنا</h2>
			<h6>عنك اقتراح أو مشكلة أو حتى استفسار تفضل تواصل معنا وبنساعدك </h6>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div data-aos="fade-up" style="height: 0">

        </div>

        <div class="container" data-aos="fade-up">
            <div style="text-align: center">
                <?php
                if(isset($_SESSION['messageSent'])) {
                    ?>
                   <center> <br/><div class="alert alert-success"  role="alert"  style="width:630px;display:<?php echo isset($_SESSION['messageSent']) ? "block":"none" ?>" >
                        <strong>!</strong> <?php echo $_SESSION['messageSent']; ?>
                        <button type="button" class="close pull-left" style="float:left;background-color: #CFF4FC;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
					</center>
                    <?php
                    unset($_SESSION['messageSent']);
                }
                ?>
            </div>
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt" style="float: right"></i>
                            <h4>الموقع:</h4>
                            <p>المدينة المنورة، المملكة العربية السعودية</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope" style="float: right"></i>
                            <h4>البريد الالكتروني:</h4>
                            <p>info@dcare.com</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="php/contactUs.php" method="post" role="form" class="login">
                        <div class="row">
                            <div class="col-md-6 form-group ast">
                                <input type="text" name="name" class="form-control first" id="name" placeholder="اسمك" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0 ast">
                                <input type="email" class="form-control email" name="email" id="email" placeholder="بريدك الإلكتروني" required>
                            </div>
                        </div>
                        <div class="form-group mt-3 ast">
                            <input type="text" class="form-control first" name="subject" id="subject" placeholder="موضوعك"required >
                        </div>
                        <div class="form-group mt-3 ast">
                            <textarea class="form-control first" name="message" rows="5" placeholder="رسالتك" required></textarea>
                        </div>
                        <div class="text-center" style="margin-top:10px"><button name="contactUS" type="submit">إرسال</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<footer id="footer">


    <div class="container d-md-flex py-4">

        <div class="col-lg-12 copy">
            <div class="copyright" style="margin-top: 5px;text-align:center">
                كل الحقوق محفوظه لدى  &copy; <strong><span>Dcare</span></strong>
            </div>
            <div class="credits">

            </div>
        </div>

    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/front.js"></script>

</body>

</html>