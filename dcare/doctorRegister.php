<?php
session_start();
    require_once('header.php');
?>
<link href="assets/css/login.css" rel="stylesheet">
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal"   tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body" >
                <div id="map" style="width: 100%;height: 500px;overflow: hidden;position: relative;"></div>
            </div>
        </div>
    </div>
</div>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container" style="padding-top: 25px">
        <h2>يسعدنا انضمامك إلى عائلتنا</h2>
      </div>
    </div><!-- End Breadcrumbs -->
	  
	 <!-- Form Start -->
  <div class="section" style="background-color: #FFF" dir="rtl">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-lg-30">
          <div class="design" dir="rtl" style="height:auto">
	
 <form class="login" action="php/doctorRegister.php" enctype="multipart/form-data" method="post">
 <?php
      if(isset($_SESSION['registerErrors'])) {
      ?>
      <div class="alert alert-danger"  role="alert"  style="width:330px;display:<?php echo isset($_SESSION['registerErrors']) ? "block":"none" ?>" >
      <strong>!</strong> <?php $formErrors = $_SESSION['formErrors']; echo $formErrors[0]; ?>       
      <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <?php
      unset($_SESSION['registerErrors']);
      unset($_SESSION['formErrors']);
      }
  ?>
  <h4 class="text-center" style="color:#01687B;font-family: Almarai">إنشاء حساب جديد كطبيب</h4>
  <div class="ast">
	  <input class="form-control namedoctor"  minlength="3" maxlength="30" type="text" placeholder="الاسم" name="name" autocomplete="off" required="required"/>
	  <i class="bx bx-user"></i>
	  <i class="bx bx-check check"></i> 
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">الاسم مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> <strong> اسم المستخدم يجب ان لا يزيد عن 30 حرف </strong></div>
  </div>
  <div class="ast">
	  <input class="form-control first" type="text" placeholder="الحي" name="neighborhood" autocomplete="off" required="required"/>
	  <i class="bx bx-home"></i>
	  <i class="bx bx-check check"></i> 
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">الحي مطلوب أو <strong>اجباري</strong></div>
  </div>
  <div class="ast">
      <select class="form-select first" name="specialization" autocomplete="off" required="required">
          <option value="0">التخصص</option>
          <option value="طبيب عام">طبيب عام</option>
          <option value="طبيب امتياز">طبيب امتياز</option>
          <option value="اخصائى">اخصائى</option>
          <option value="استشارى">استشارى</option>
      </select>
	  <i class="bx bx-check check"></i> 
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">التخصص مطلوب أو <strong>اجباري</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control first" type="text" placeholder="المستشفي" name="hospital" autocomplete="off" required="required"/>
	  <i class=" bx bxs-first-aid"></i>
	  <i class="bx bx-check check"></i> 
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">المستشفي مطلوبه أو <strong>اجباري</strong></div>
  </div>
  <div class="ast">
      <select class="form-select first" type="text" placeholder="القسم" name="department" autocomplete="off" required="required">
          <option value="0">القسم</option>
          <option value="طب العيون">طب العيون</option>
          <option value="طب الأطفال">طب الأطفال</option>
          <option value="طب الأسنان">طب الأسنان</option>
          <option value="طب الجلديه">طب الجلديه</option>
      </select>
	  <i class="bx bx-check check"></i> 
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">القسم مطلوب أو <strong>اجباري</strong></div>
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="bx bx-key"></i>
	  <i class="bx bx-check check check-pass"></i>
	  <i class="bx bx-close close close-pass"></i>
	  <i class="show-pass bx bx-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة وأرقام ورموز.</strong></div>
  </div>

   <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="new-password" required="required"/>
	  <i class="bx bx-envelope"></i>
	  <i class="bx bx-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> <strong>يجب ادخال البريد الالكترني بشكل صحيح</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control address" id="loCation" name="address[location]" readonly type="text" placeholder="العنوان" data-bs-toggle="modal" data-bs-target="#exampleModal" required="required"/>
	  <i class="bx bxs-map-pin"></i>
	  <i class="bx bx-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
  </div>
   <div class="ast">
	  <input class="form-control phone" minlength="10" maxlength="10" type="text" placeholder="رقم الهاتف" name="phone_number" autocomplete="new-password" required="required"/>
	  <i class="bx bx-phone"></i>
	  <i class="bx bx-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">يجب أن يحتوي رقم الهاتف على <strong>10 أرقام</strong></div>
	  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
	  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
  </div>
  	 <p>الرجاء إرفاق شهادتك الطبية </p>
     <div class="ast">
	  <input class="form-control file" type="file" placeholder="اختيار الملف" name="cert_file" autocomplete="new-password" required="required"/>
  </div>
  <br/>
  <input style="background-color:#01687B;padding: 10px;width: 300px" name="Register" class="btn btn-primary btn-block button" type="submit" value="إنشاء"/>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:15px">
	  <span>التسجيل كمستفيد </span><a style="text-decoration:none;color: #01687B" href="userRegister.php"> سجل معنا الآن ولا تتردد </a><br>
	  <span>هل أنت عضو؟ </span><a style="text-decoration:none;color: #01687B" href="login.php">سجل دخولك</a>
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
<script>
    var map;
    function initialize() {

        var myLatlng = new google.maps.LatLng(24.51099922485627, 39.57634799354159);

        var myOptions ={

            zoom: 8,

            center: myLatlng,

            mapTypeId: google.maps.MapTypeId.ROADMAP

        };

        map = new google.maps.Map(document.getElementById("map"), myOptions);

        var marker = new google.maps.Marker({

            draggable: true,

            position: myLatlng,

            map: map,

            title: "Your location"

        });

        google.maps.event.addListener(marker, 'dragend', function (event) {

            document.getElementById("loCation").value = event.latLng.lat()+','+event.latLng.lng();

            infoWindow.open(map, marker);

        });

    }
    google.maps.event.addDomListener(window, "load", initialize());
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9UeezZ2xyNjrwck8SLdh9NxsJp6HhLQc&callback=initialize">
</script>
</body>

</html>