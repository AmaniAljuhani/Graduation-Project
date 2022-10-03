<?php
include('php/database.php');
$database = new Database();
if(isset($_GET['doctor_id'])){
    $doctor_id = $_GET['doctor_id'];
    $query = "SELECT doctor.*, assessing.*,beneficiary.name as Bname FROM doctor LEFT JOIN assessing on doctor.doctor_id = assessing.doctor_id LEFT JOIN beneficiary ON beneficiary.beneficiary_id = assessing.beneficiary_id where doctor.doctor_id ='$doctor_id'";
    $doctor = $database->Select($query);
    $rateValue = $database->Select("select totalRate from doctor where doctor_id = '$doctor_id'");
    $rateValue = $rateValue[0]['totalRate'];

}
require_once('header.php');
?>
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container" style="padding-top: 25px">
            <h2>معلومات الطبيب</h2>
			 <p>تجد هنا كل ما ترغب بمعرفته عن الطبيب </p>
            <!--<p>هنا معلومات عن هذا الطبيب. </p> -->
        </div>
    </div><!-- End Breadcrumbs -->
    <div style="text-align: center">
        <?php
		error_reporting(0);
		if($_GET['islogin'] == "1"){
		echo '<br/><center><div class="alert alert-danger"  role="alert"  style="width:630px;display:block;">
			  <strong>! </strong> عفواً صلاحيتك ليست مستفيد قم بدخول كمستفيد حتى تتمكن من التقييم
              <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px;" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div></center>';
								}
        if(isset($_SESSION['commentDone'])) {
            ?>
            <br/><br/><center><div class="alert alert-success"  role="alert"  style="width:630px;display:<?php echo isset($_SESSION['commentDone']) ? "block":"none" ?>" >
                <strong>!</strong> <?php echo $_SESSION['commentDone']; ?>
                <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div></center>
            <?php
            unset($_SESSION['commentDone']);
        }
        ?>
    </div>
    <section id="course-details" class="course-details contact" style="margin-top: 70px">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8">
                    <img src="assest/images/55.png" style="height: 350px;width: 750px" class="img-fluid" alt="">
                    <h3><i class="bx bx-chat"></i> آراء المستفيدين </h3>
                    
                </div>
                <div class="col-lg-4">

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">الاسم</h5>
                        <p><a href="#"><?php echo isset($doctor)?$doctor[0]['name']:""; ?></a></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">البريد الالكتروني</h5>
                        <p><?php echo isset($doctor)?$doctor[0]['email']:""; ?></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">التخصص</h5>
                        <p><?php echo isset($doctor)?$doctor[0]['specialization']:""; ?></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">القسم</h5>
                        <p><?php echo isset($doctor)?$doctor[0]['department']:""; ?></p>
                    </div>
					 <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">المستشفى</h5>
                        <p><?php echo isset($doctor)?$doctor[0]['hospital']:""; ?></p>
                    </div>
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">الحي</h5>
                        <p><?php echo isset($doctor)?$doctor[0]['neighborhood']:""; ?></p>
                    </div>
					 <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">وقت العمل</h5>
                        <p><?php if(isset($doctor)){
							if($doctor[0]['work_from'] == null && $doctor[0]['work_to'] == null){
							echo 'لم يتم تحديد وقت العمل بعد';
						}
							else {
							echo "من ".$doctor[0]['work_from']." الى ".$doctor[0]['work_to'];
							}
						}
						?></p>
                    </div>
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 style="font-family: Almarai">التقييم</h5>
                            <fieldset class="rating" disabled>
                                <input type="radio" id="starr5" <?php echo $rateValue == 5 ? 'checked':''; ?> name="rating1" value="5"/><label for="starr5" class="full" title="Awesome"></label>
                                <input type="radio" id="starr4" <?php echo $rateValue == 4 ? 'checked':''; ?> name="rating1" value="4"/><label for="starr4" class="full"></label>
                                <input type="radio" id="starr3" <?php echo $rateValue == 3 ? 'checked':''; ?> name="rating1" value="3"/><label for="starr3" class="full"></label>
                                <input type="radio" id="starr2" <?php echo $rateValue == 2 ? 'checked':''; ?> name="rating1" value="2"/><label for="starr2" class="full"></label>
                                <input type="radio" id="starr1" <?php echo $rateValue == 1 ? 'checked':''; ?> name="rating1" value="1"/><label for="starr1" class="full"></label>
                            </fieldset>
                    </div>
                </div>
                <!-- Start assessing -->
                <form action="php/rateDoctor.php" method="post" role="form" class="login">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="doctor_id" value="<?php echo $_GET['doctor_id'];?>" id="" hidden>
                            <div class="form-group mt-3 ast">
                                <textarea class="form-control first" style="height:130px" name="comment" rows="12" required placeholder="إضافة التعليق"></textarea>

                            </div>

                            <div class="text-center" style="margin-top:10px"><button name="addRate" type="submit">إضافة التقييم </button></div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mt-3 ast">
                                <div class="rating col-sm-5">
                                    <fieldset class="rating" class="form-control">
                                        <input type="radio" id="star5"  name="rating" value="5"  ><label for="star5" class="full" title="Awesome"></label>
                                        <input type="radio" id="star4" name="rating" value="4"/><label for="star4" class="full"></label>
                                        <input type="radio" id="star3" name="rating" value="3"/><label for="star3" class="full"></label>
                                        <input type="radio" id="star2" name="rating" value="2"/><label for="star2" class="full"></label>
                                        <input type="radio" id="star1" name="rating" value="1"/><label for="star1" class="full"></label>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- End assessing -->
            </div>
        </div>
    </section><!-- End Cource Details Section -->





    <!-- ======= Books Section ======= -->
    <section id="popular-courses" class="courses" style="margin-top: -75px;">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="zoom-in">
        <?php
            if(!empty($doctor[0]['assessing'])){
                $c=0;
                foreach ($doctor as $comment){
        ?>
                <div class="col-lg-12 col-md-12 d-flex book">
                    <div class="course-item">
                        <div class="course-content">
                            <div class="trainer" style="border-bottom: 1px solid #eef0ef; border-top: 0">
                                <div class="trainer-profile" style="margin-bottom: 7px">
                                    <img src="assest/images/19.png" class="img-fluid" alt="">
                                    <span style="margin-right: 10px"><?php echo $comment['Bname'];?></span
                                    <?php $stars = $comment['assessing'];
                                    for($i=1;$i<=5;$i++){
                                        if($i <= $stars)
                                            echo '<span ><i class="fas fa-star" style="color:red;font-size: 16px"></i></span>';
                                        else
                                            echo '<span><i class="fas fa-star" style="font-size: 16px"></i></span>';
                                    }
                                    ?>
                                    <p style="margin-right: 60px"><?php echo $comment['comment'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php $c++; } } ?>
            </div>
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