<?php
session_start();
if(isset($_GET['consult_id'])){
    $consult_id = $_GET['consult_id'];
}
if(isset($_SESSION['consult'])){
    $consult=$_SESSION['consult'];
    unset($_SESSION['consult']);
}
else
    header('location:php/main/consults.php?consult_id='.$consult_id);

    require_once('header.php');
?>

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container" style="padding-top: 25px">
            <h2>الاستشارة</h2>
            
        </div>
    </div><!-- End Breadcrumbs -->

    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8">
                    <div class="cons" style="height: 300px;width: 750px;background-color:#F6F7F6;padding:10px;border-radius:5px"><?php echo isset($consult)? $consult[0]['consultation']:""; ?></div>
                    <h3><i class="bx bx-chat"></i> الرد على الاستشارة </h3>
                   
                </div>
                <div class="col-lg-4">

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">اسم كاتب الاستشارة</h5>
                        <p><a href="#"><?php echo isset($consult)? $consult[0]['bname']:""; ?></a></p>
                    </div>

                  <!--  <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">البريد الالكتروني</h5>
                        <p><?php echo isset($consult)? $consult[0]['email']:"";?></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">رقم الهاتف</h5>
                        <p><?php echo isset($consult)? $consult[0]['phone_number']:""; ?></p>
                    </div>-->

                </div>
            </div>

        </div>
    </section><!-- End Cource Details Section -->


    <!-- ======= Books Section ======= -->
    <section id="popular-courses" class="courses" style="margin-top: -75px">
        <div class="container" data-aos="fade-up">
        <?php if(isset($consult)){
        foreach ($consult as $cons) {
        ?>
            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <div class="col-lg-12 col-md-12 d-flex book">
                    <div class="course-item">
                        <div class="course-content">
                            <div class="trainer" style="border-bottom: 1px solid #eef0ef; border-top: 0">
                                <div class="trainer-profile" style="margin-bottom: 7px">
                                    <img src="assest/images/19.png" class="img-fluid" alt="">
                                    <span style="margin-right: 10px">د/ <?php echo $cons['dname']; ?></span>
                                    <p style="margin-right: 60px"><?php echo $cons['reply']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php } } ?>

        </div>
    </section>

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

</body>

</html>