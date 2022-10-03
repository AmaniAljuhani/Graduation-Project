<?php
session_start();
    require_once('header.php');
?>
<link href="assets/css/login.css" rel="stylesheet">
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container" style="padding-top: 25px">
            <h2>إعادة تعيين كلمة المرور</h2>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- Form Start -->
    <div class="section" style="background-color: #FFF" dir="rtl">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-lg-30">
                    <div class="design" dir="rtl" style="height:auto">

                        <form class="login" action="php/resetpassword.php" method="post">

                            <h4 class="text-center" style="color:#01687B;font-family: Almarai">قم بادخال البيانات المطلوبة منك</h4>
                            <div class="ast">
                                <select class="form-select" name="type" id="">
                                    <option value="doctor">دكتور</option>
                                    <option value="beneficiary">مستفيد</option>
                                </select>
                            </div>
                            <br>
                            <div class="ast">
                                <input class="form-control" type="email" placeholder="البريد الإلكترونى" name="email"  required="required"/>
                            </div>
                            <br>
                            
                            <input style="background-color:#01687B;padding: 10px;width: 300px" class="btn btn-primary btn-block button" type="submit" name="Reset" value="إرسال"/>
                            <div class="text-center" style="margin-top:10px;font-weight:bold">
                                <span>لاتمتلك حساب </span><a style="text-decoration:none;color: #01687B" href="userRegister.php">سجل معنا الان ولا تتردد</a><br>
                                //<span>هل أنت لا تمتلك حساب؟ </span><a style="text-decoration:none;color: #01687B" href="doctorRegister.php">انشاء حساب كطبيب</a>
                            </div>
                          
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sigma_client">
                        <img src="assest/images/ghaida.png" style="width: 360px;height: 330px" alt="client">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->


</main><!-- End #main -->

<footer id="footer">



    <div class="container d-md-flex py-4">

        <div class="col-lg-12 copy">
            <div class="copyright" style="margin-top: 5px;text-align:center">
                كل الحقوق محفوظه لدي  &copy; <strong><span>Dcare</span></strong>
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
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/front.js"></script>

</body>

</html>