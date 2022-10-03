<?php
session_start();
if(isset($_GET['department'])){
    $department = $_GET['department'];
}
if(isset($_SESSION['consultants'])){
    $consultants=$_SESSION['consultants'];
    unset($_SESSION['consultants']);
}
else
    header('location:php/main/consults.php?department='.$department);

require_once('header.php');
?>
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container" style="padding-top: 25px">
            <h2>الاستشارات</h2>
            <p>توجد هنا الاستشارات الطبية الخاصة بالقسم </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Books Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <?php
                    if(isset($consultants)){
                        foreach ($consultants as $consultant){
                ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin-bottom: 20px">
                    <div class="course-item">
                        <img src="assest/images/120.png" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>نص الاستشارة</h4>
                            </div>

                            <p><?php echo $consultant['consultation']; ?></p>
                            <h3 style="font-size:17px"><a href="php/main/consults.php?consult_id=<?php echo $consultant['consultation_id']; ?>"> عرض الاستشارة وردها <i class="bx bx-chevron-left"></i></a></h3>

                        </div>
                    </div>
                </div> <!-- End departments Item-->

                <?php } } ?>
            </div>

        </div>
    </section><!-- End Books Section -->

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