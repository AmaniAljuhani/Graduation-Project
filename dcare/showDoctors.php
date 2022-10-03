<?php
include('php/database.php');
if(isset($_GET['department'])){
    $department = $_GET['department'];
}
if(isset($_SESSION['doctors'])){
    $doctors=$_SESSION['doctors'];
    unset($_SESSION['doctors']);
}
else
    header('location:php/main/showDoctors.php?department='.$department);

require_once('header.php');
?>
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container" style="padding-top: 25px" >
        <h2>الأطباء</h2>
       
      </div>
    </div><!-- End Breadcrumbs -->
	  
	  

   <section id="team" class="team">
      <div class="container">

        <div class="row">
			<form style="margin-bottom: 50px" method="post" action="php/main/showDoctors.php">
				<div class="row">
					<div class="col-lg-2 form-group" style="margin-bottom: 10px">
					<select class="form-control" name="neighborhood" style="margin-bottom: 10px">
					<option value="">الحي</option>
						<?php
						$arrayneighborhood = array();
						$i;
						foreach ($doctors as $doctor){
							$i++;
							$arrayneighborhood[$i] = $doctor['neighborhood'];
						}
						$allneighborhood=array_unique($arrayneighborhood);
						foreach ($allneighborhood as $allneighborhoodz){
						?>
						<option value="<?php echo $allneighborhoodz; ?>"><?php echo $allneighborhoodz; ?></option>
						<?php } ?>
						</select>
					</div>
					
                    <div class="col-lg-2 form-group">
						<select class="form-control" name="hospital" style="margin-bottom: 10px">
						<option value="">المستشفى</option>

						<?php
							$arrayHospital = array();
							$i;
								foreach($doctors as $doctor){
									$i++;
									$arrayHospital[$i] = $doctor['hospital'];
								}
									$allHospital=array_unique($arrayHospital);
							
						foreach ($allHospital as $allHospitalz){
						?>
						<option value="<?php echo $allHospitalz; ?>"><?php echo $allHospitalz; ?></option>
						<?php } ?>
						</select>
                        <input type="text" hidden name="department" value="<?php echo $department; ?>">
                    </div>
					<div class="col-lg-2 form-group">
						<select class="form-control" name="specialization" style="margin-bottom: 10px">
							<option value="0">التخصص</option>
							<option value="طبيب عام">طبيب عام</option>
							<option value="طبيب امتياز">طبيب امتياز</option>
							<option value="اخصائى">اخصائى</option>
							<option value="استشارى">استشارى</option>
						</select>
					</div>
					<div class="col-lg-3 form-group">
						<select class="form-control" name="assessing" style="margin-bottom: 10px">
                            <option value="0">التقييم</option>
                            <option value="5">خمس نجوم</option>
							<option value="4">اربع نجوم</option>
							<option value="3">ثلاثة نجوم</option>
							<option value="2">نجمتين</option>
							<option value="1">نجمة</option>
						</select>
					</div>
					<div class="col-lg-2 form-group" style="margin-bottom: 10px">
						<input class="btn btn-primary" name="filter" style="background-color:#b0bec5;border: 1px solid #455a64;width: 250px" type="submit" value="فلتره"/>
					</div>
				</div>
		    </form>
            <?php
            if(isset($doctors)&&!empty($doctors)){
                foreach ($doctors as $doctor){
            ?>
                    <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="member">
                      <div class="member-img">
                        <img src="assest/images/do.png" class="img-fluid" alt="">
                        <div class="social">
                          <a href="info.php?doctor_id=<?php echo $doctor['doctor_id']; ?>"><i class="bi bi-person" style="padding-right: 5px"></i> الصفحة الشخصية </a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4><?php echo $doctor['name']; ?></h4>
                        <span>طبيب</span>
						<?php 
						if($doctor['work_from'] == null && $doctor['work_to'] == null){
							echo '<span>لم يتم تحديد وقت العمل بعد</span>';
						}
						else {
							echo '<span>وقت العمل من '.$doctor['work_from'].' الى '.$doctor['work_to'].'</span>';
						}
						?>
                          <div class="rating" style="margin-right: 0;">
                              <?php
                              if($doctor['totalRate']) {
                                  $stars = $doctor['totalRate'];
                                  for ($i = 1; $i <= 5; $i++) {
                                      if ($i <= $stars)
                                          echo '<span><i class="fas fa-star" style="color:red;font-size: 16px"></i></span>';
                                      else
                                          echo '<span><i class="fas fa-star" style="font-size: 16px"></i></span>';
                                  }
                              }else
                              {
                                  echo '<span><i class="fas fa-star" style="font-size: 16px"></i></span>';
                                  echo '<span><i class="fas fa-star" style="font-size: 16px"></i></span>';
                                  echo '<span><i class="fas fa-star" style="font-size: 16px"></i></span>';
                                  echo '<span><i class="fas fa-star" style="font-size: 16px"></i></span>';
                                  echo '<span><i class="fas fa-star" style="font-size: 16px"></i></span>';
                              }
                              ?>
                          </div>
                      </div>
                    </div>
                  </div>

            <?php }}
            else
                echo 'لا يوجد أطباء';
                ?>
			
        </div>

      </div>
    </section><!-- End Team Section -->    

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