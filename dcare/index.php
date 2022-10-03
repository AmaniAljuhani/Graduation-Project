<?php
include('php/database.php');
    require_once('header.php');
?>
<link href="assets/css/loginn.css" rel="stylesheet">
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1 style="font-family: Almarai">موقع Dcare</h1>
        <h2>موقع Dcare يتيح لك العديد من الاستشارات الطبية في مختلف الأقسام الطبية</h2>
    </div>
</section><!-- End Hero -->

<main id="main" >

 <section id="events" class="events" >
        <div class="container" data-aos="fade-up" >

            <div class="section-title">
                <h2>من نحن</h2>
                <p style="font-family: Almarai"></p>
            </div>

     <!--<body background = "assest/images/home.png">-->
            <div class="row">
                  <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card" style="height:250px">
                        <div class="card-img">
                            <img src="assest/images/home.png" alt="...">
                            <div style="height:220px"></div>
                        </div>
                        <div class="card-body">
						<h5 class="card-title"><a href=""><i class=" bx bx-diamond" style="font-size: 30px"></i></a></h5>
                            <p class="card-text"><h2>قيمنا</h2>
							الالتزام بتقديم أفضل الخدمات الصحيَة للجميع، وأن نتواجد دائماَ من أجلك وأجل عائلتك متى ما احتجت للرعاية.</p>
                        </div>
                    </div>

                </div>
                 <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card" style="height:250px">
                        <div class="card-img">
                            <img src="assest/images/home.png" alt="...">
                            <div style="height:220px"></div>
                        </div>
                        <div class="card-body">
						<h5 class="card-title"><a href=""><i class=" bx bx-cool" style="font-size: 30px"></i></a></h5>
                            <p class="card-text"><h2>رؤيتنا</h2>
							تعزيز الخدمات الصحّيّة من خلال التكنولوجيا الرقميّة المبتكرة وأن نكرس أنفسنا لتقديم رعاية فائقة تتمحور حول المريض والأسرة عن طريق تقديم رعاية صحية بأعلى جودة للجميع</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card" style="height:250px">
                        <div class="card-img">
                            <img src="assest/images/home.png" alt="...">
                            <div style="height:220px"></div>
                        </div>
                        <div class="card-body">
						<h5 class="card-title"><a href=""><i class="  bx bx-edit" style="font-size: 30px"></i></a></h5>
                            <p class="card-text"><h2>رسالتنا</h2>
							تلتزم Dcare برسالتها الأسمى ألا وهي تحسين حياة الافراد عبر تقديم خدمات صحية فائقة بأعلى جودة للجميع وتقليص المسافات وسد فجوة الوقت بين الأطباء ومرضاهم</p>
                        </div>
                    </div>

                </div>
				  <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card" style="height:250px">
                        <div class="card-img">
                            <img src="assest/images/home.png" alt="...">
                            <div style="height:220px"></div>
                        </div>
                        <div class="card-body">
						<h5 class="card-title"><a href=""><i class=" bx bx-highlight" style="font-size: 30px"></i></a></h5>
                            <p class="card-text"><h2>أهدافنا</h2>
							سهولة وتوفير الخدمات الطبية والمساهمة في تسهيل حياة الاخرين وتنمية جودة الحياة الصحية ورفعها أيضا نسعى لتحقيق راحة ورضا المريض وتوفير أفضل الأطباء له في منطقة المدينة المنورة</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Events Section -->

    <!-- ======= Events Section ======= -->
   

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>الأقسام</h2>
                <p style="font-family: Almarai">أقسام الموقع</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="assest/images/7.png" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>قسم طب الأسنان</h4>
                            </div>
                            <h3 style="font-size:17px"><a href="php/main/consults.php?department=طب الأسنان"> عرض الاستشارات <i class="bx bx-chevron-left"></i></a></h3>
                            <h3 style="font-size:17px"><a href="consultation.php?department=طب الأسنان">  رفع استشارة  <i class="bx bx-chevron-left"></i></a></h3>
                            
                        </div>
                    </div>
                </div> <!-- End departments Item--> <!-- End departments Item-->
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="assest/images/2.png" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>قسم طب الأطفال</h4>
                            </div>

                            <h3 style="font-size:17px"><a href="php/main/consults.php?department=طب الأطفال"> عرض الاستشارات <i class="bx bx-chevron-left"></i></a></h3>
                            <h3 style="font-size:17px"><a href="consultation.php?department=طب الأطفال">  رفع استشارة  <i class="bx bx-chevron-left"></i></a></h3>
                           

                        </div>
                    </div>
                </div> <!-- End departments Item-->
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="assest/images/5.png" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>قسم طب العيون</h4>
                            </div>

                            <h3 style="font-size:17px"><a href="php/main/consults.php?department=طب العيون"> عرض الاستشارات <i class="bx bx-chevron-left"></i></a></h3>
                            <h3 style="font-size:17px"><a href="consultation.php?department=طب العيون">  رفع استشارة <i class="bx bx-chevron-left"></i></a></h3>
                           

                        </div>
                    </div>
                </div> <!-- End departments Item-->
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="assest/images/99.png" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>قسم طب الجلدية</h4>
                            </div>

                            <h3 style="font-size:17px"><a href="php/main/consults.php?department=طب الجلديه"> عرض الاستشارات <i class="bx bx-chevron-left"></i></a></h3>
                            <h3 style="font-size:17px"><a href="consultation.php?department=طب الجلديه"> رفع استشارة <i class="bx bx-chevron-left"></i></a></h3>

                        </div>
                    </div>
                </div> <!-- End departments Item-->


                <a href="departments.php" class="btn-get-started"><i class="bx bx-chevron-left"></i>عرض المزيد</a>

            </div>

        </div>
    </section><!-- End Popular Courses Section -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <h2>الأطباء</h2>
                <p style="font-family: Almarai">أفضل الأطباء</p>
            </div>

            <div class="row">
                <?php
                    $database = new Database();
                    $doctors = $database->Select("SELECT * from doctor WHERE totalRate >=3 ORDER BY totalRate DESC limit 4 ");
                    if(!empty($doctors)) {
                        foreach ($doctors as $doctor) {
                ?>
                            <div class="col-lg-3 col-md-6 align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="assest/images/19.png" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href="info.php?doctor_id=<?php echo $doctor['doctor_id']; ?>"><i class="bi bi-person" style="padding-right: 5px"></i> الصفحة الشخصية </a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4><?php echo $doctor['name']; ?></h4>
                                        <span>طبيب</span>
                                        <div class="ratingg">
                                            <?php
                                            $stars = $doctor['totalRate'];
                                            for ($i = 1; $i <= 5; $i++) {
                                                if ($i <= $stars)
                                                    echo '<span><i class="fas fa-star" style="color:red;font-size: 16px"></i></span>';
                                                else
                                                    echo '<span><i class="fas fa-star" style="font-size: 16px"></i></span>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>

        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
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