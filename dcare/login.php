<?php
session_start();
require_once('header.php');
?>
<link href="assets/css/login.css" rel="stylesheet">

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container" style="padding-top: 25px">
            <h2>مرحبًا بك</h2>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- Form Start -->
    <div class="section" style="background-color: #FFF" dir="rtl">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-lg-30">
                    <div class="design" dir="rtl" style="height:auto">

                        <form class="login" action="php/generalLogin.php" method="post">
                            <?php
                            if(isset($_SESSION['loginFailed'])) {
                                ?>
                                <div class="alert alert-danger"  role="alert"  style="width:330px;display:<?php echo isset($_SESSION['loginFailed']) ? "block":"none" ?>" >
                                    <strong>!</strong> <?php echo $_SESSION['loginFailed']; ?>
                                    <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                                unset($_SESSION['loginFailed']);
                            }
                            ?>
							<?php
							error_reporting(0);
														if($_GET['active'] == 1){
								echo '<div class="alert alert-primary"  role="alert"  style="width:330px;display:block;">
                                    <strong>! </strong>جاري مراجعة طلبك للانضمام بواسطة مدير النظام
                                    <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';							}
								else if($_GET['active'] == 2){
								echo '<div class="alert alert-info"  role="alert"  style="width:330px;display:block;" >';
                                echo '    <strong>! </strong>تم رفض طلب انضمامك من قبل مدير النظام
                                    <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
								}
								else if($_GET['active'] == 3){
								echo '<div class="alert alert-danger"  role="alert"  style="width:330px;display:block;">
                                    <strong>! </strong>تم حظرك من الموقع
                                    <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
								}
								else if($_GET['active'] == 4){
								echo '<div class="alert alert-success"  role="alert"  style="width:330px;display:block;">
                                    <strong>! </strong>تم انشاء الحساب بنجاح يمكنك الان تسجيل الدخول
                                    <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
								}
							   else if($_GET['active'] == 5){
								echo '<div class="alert alert-success"  role="alert"  style="width:330px;display:block;">
                                    <strong>! </strong>تم إنشاء الحساب بنجاح انتظر القبول من مدير النظام
                                    <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
								}
								else if($_GET['reset'] == 1){
								echo '<div class="alert alert-success"  role="alert"  style="width:330px;display:block;">
                                    <strong>! </strong>تم ارسال كلمة المرور الى بريدك الالكتروني
                                    <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
								}
								?>
                            <h4 class="text-center" style="color:#01687B;font-family: Almarai">تسجيل الدخول</h4>
                            <div class="ast">
                                <input class="form-control username" type="text" placeholder="اسم المستخدم" name="username" autocomplete="username" required="required"/>
                                <i class="bx bx-user"></i>
                                <i class="bx bx-check check check-pass"></i>
                                <i class="fa fa-close close close-pass"></i>
                                <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
                                <div class="alert alert-danger custom-alert"><strong>يجب ادخال اسم المستخدم بشكل صحيح </strong></div>
                                <div class="alert alert-danger number-alert">  <strong>يجب ادخال اسم المستخدم بطريقة صحيحة</strong></div>
                            </div>

                            <div class="ast">
                                <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
                                <i class="bx bx-key"></i>
                                <i class="bx bx-check check check-pass"></i>
                                <i class="fa fa-close close close-pass"></i>
                                <i class="show-pass fa fa-eye fa-2x"></i>
                                <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
                                <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>

                                <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وصغيرة ورقم.</strong></div>
                            </div>
                            <input style="background-color:#01687B;padding: 10px;width: 300px" name="Login" class="btn btn-primary btn-block button" type="submit" value="دخول"/>
                            <div class="text-center" style="margin-top:10px;font-weight:bold">
                                <span>لا تمتلك حساب ؟ </span><a style="text-decoration:none;color: #01687B" href="userRegister.php">إنشاء حساب كمستفيد</a><br>
                                <span>لا تمتلك حساب ؟ </span><a style="text-decoration:none;color: #01687B" href="doctorRegister.php">إنشاء حساب كطبيب</a>
                            </div>
                            <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:20px">
                                <span>هل نسيت كلمة المرور؟ </span><a style="text-decoration:none;color: #01687B" href="resetpassword.php">إعادة تعيين الآن</a>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sigma_client">
                        <img src="assest/images/ghaida.png" style="width: 350px;height: 350px" alt="client">
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
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/front.js"></script>

</body>

</html>