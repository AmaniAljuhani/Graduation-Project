<?php
session_start();
if(isset($_GET['department']))
    $department=$_GET['department'];
require_once('header.php');
?>
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container" style="padding-top: 25px">
            <h2>رفع استشارة</h2>
            
        </div>
    </div><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
        <div data-aos="fade-up" style="height: 0">

        </div>

        <div class="container" data-aos="fade-up">
            <div style="text-align: center">
                <?php
                if(isset($_SESSION['commentDone'])) {
                    ?>
                   <center> <br/> <div class="alert alert-danger"  role="alert"  style="width:630px;display:<?php echo isset($_SESSION['commentDone']) ? "block":"none" ?>" >
                        <strong>!</strong> <?php echo $_SESSION['commentDone']; ?>
                        <button type="button" class="close pull-left" style="float:left;background-color: #CFF4FC;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
					</center>
                    <?php
                    unset($_SESSION['commentDone']);
                }
                ?>
                <?php
                if(isset($_SESSION['uploadDone'])) {
                    ?>
                  <center> <br/>  <div class="alert alert-success"  role="alert"  style="width:700px;display:<?php echo isset($_SESSION['uploadDone']) ? "block":"none" ?>" >
                        <strong>!</strong> <?php echo $_SESSION['uploadDone']; ?>
                        <button type="button" class="close pull-left" style="float:left;background-color: #CFF4FC;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
					</center>
                    <?php
                    unset($_SESSION['uploadDone']);
                }
                ?>
            </div>
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <img src="assest/images/00.png" style="width: 460px;height: 430px" alt="client">

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="php/main/consults.php" method="post" role="form" class="login">
                        <input type="text" name="department" value="<?php echo $department;?>" hidden>
                        <div class="form-group mt-3 ast">
                            <textarea class="form-control first" name="consultation" rows="6" style="height:400px"required placeholder ="اكتب الاستشارة هنا ...."></textarea>

                        </div>
                        <div class="text-center" style="margin-top:10px"><button name="uploadConsult" required type="submit">إرسال</button></div>
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