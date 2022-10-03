<?php
session_start();
    require_once('header.php');
?>
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container" style="padding-top: 25px">
            <h2>ترشيح طبيب</h2>
            <h5>في بالك طبيب معين وحاب ينضم لعائلتنا لا تخليها بنفسك ورشحه لنا  </h5>
        </div>
    </div><!-- End Breadcrumbs -->
    <div style="text-align: center">
        <?php
            if(isset($_SESSION['commentDone'])) {
                ?>
              <center>  <br/><div class="alert alert-danger"  role="alert"  style="width:630px;display:<?php echo isset($_SESSION['commentDone']) ? "block":"none" ?>" >
                    <strong>!</strong> <?php echo $_SESSION['commentDone']; ?>
                    <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				</center>
                <?php
                unset($_SESSION['commentDone']);
            }
            ?>
        <?php
        if(isset($_SESSION['addDone'])) {
            ?>
           <center> <br/><div class="alert alert-success"  role="alert"  style="width:630px;display:<?php echo isset($_SESSION['addDone']) ? "block":"none" ?>" >
                <strong>!</strong> <?php echo $_SESSION['addDone']; ?>
                <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			</center>
            <?php
            unset($_SESSION['addDone']);
        }
        ?>
        <?php
        if(isset($_SESSION['errorDoctor'])) {
            ?>
            <div class="alert alert-success"  role="alert"  style="width:630px;display:<?php echo isset($_SESSION['errorDoctor']) ? "block":"none" ?>" >
                <strong>!</strong> <?php echo $_SESSION['errorDoctor']; ?>
                <button type="button" class="close pull-left" style="float:left;background-color: #CFF4FC;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            unset($_SESSION['errorDoctor']);
        }
        ?>
    </div>
    <section id="contact" class="contact">
        <div data-aos="fade-up" style="height: 0">

        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <img src="assest/images/4.png" style="width: 360px;height: 430px" alt="client">

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="php/beneficiary/doctor.php" method="post" role="form" class="login">
                        <div class="row">
                            <div class="col-md-6 form-group ast">
                                <input type="text" name="name" class="form-control first" id="name" placeholder="الاسم" required>

                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0 ast">
                                <select class="form-select" name="specialization" autocomplete="off" required="required">
                                    <option value="0">التخصص</option>
                                    <option value="طبيب عام">طبيب عام</option>
                                    <option value="طبيب امتياز">طبيب امتياز</option>
                                    <option value="اخصائى">اخصائى</option>
                                    <option value="استشارى">استشارى</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-3 ast">
                            <input type="text" class="form-control first" name="hospital" id="subject" placeholder="المستشفى" required="required" >
                        </div>
                        <div class="form-group mt-3 ast">
                            <input type="text" class="form-control first" name="neighborhood" id="subject" placeholder="الحي" required="required" >
                        </div>

                        <div class="form-group mt-3 ast">
                            <select class="form-select" type="text" placeholder="القسم" name="department" autocomplete="off" required="required">
                                <option value="0">القسم</option>
                                <option value="طب العيون">طب العيون</option>
                                <option value="طب الأطفال">طب الأطفال</option>
                                <option value="طب الأسنان">طب الأسنان</option>
                                <option value="طب الجلديه">طب الجلديه</option>
                            </select>
                        </div>

                        <div class="form-group mt-3 ast">
                            <textarea class="form-control first" name="feedback" rows="5" placeholder="سبب الترشيح" required></textarea>

                        </div>

                        <div class="text-center" style="margin-top:10px"><button name="addDoctor" type="submit">إرسال الترشيح</button></div>
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

</body>

</html>