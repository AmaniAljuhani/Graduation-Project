<?php
include('../php/database.php');
$database = new Database();
if(isset($_SESSION['doctor_id'])){
    $doctor_id = $_SESSION['doctor_id'];
    $query = "SELECT doctor.*, assessing.*,beneficiary.name as Bname FROM doctor LEFT JOIN assessing on doctor.doctor_id = assessing.doctor_id LEFT JOIN beneficiary ON beneficiary.beneficiary_id = assessing.beneficiary_id where doctor.doctor_id ='$doctor_id'";
    $doctors = $database->Select($query);
}
    require_once('header.php');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/clocklet/css/clocklet.min.css">
<script src="https://cdn.jsdelivr.net/npm/clocklet"></script>
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
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #fff;">
            <!-- Content Header (Page header) -->
            <div class="content-header" style="margin-right:30px;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="main-title">الملف الشخصي للطبيب</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div><br>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Doctor information  -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../assest/images/1.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION['name'];?></h3>

                <p class="text-muted text-center">الطبيب</p>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #99C1B9;color: #FFF">
                <h3 class="card-title">معلوماتي الشخصية</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			    <strong><i class="fa fa-user mr-1"></i> اسم الطبيب</strong>
                <p class="text-muted"> <?php echo $_SESSION['name'];?> </p>
                <hr>
                <strong><i class="fa fa-envelope mr-1"></i> البريد الإلكتروني</strong>
                <p class="text-muted">
                  <?php echo $_SESSION['email'];?>
                </p>
                <hr>
                <strong><i class="fa fa-map-pin"></i> العنوان</strong>
                <p class="text-muted"> <?php echo $_SESSION['address'];?> </p>
                  <hr>
                  <strong><i class="fa fa-clock mr-1"></i> مواقيت الدوام </strong>
                <p class="text-muted"> <?php echo 'من'.'  '.$_SESSION['from'].' '.'إلى'.' '.$_SESSION['to'] ;?> </p>
                  <hr>
                  <strong><i class="fa fa-home mr-1"></i> التخصص</strong>
                  <p class="text-muted"> <?php echo $_SESSION['specialization'];?> </p>
                  <hr>
                  <strong><i class="fa fa-home mr-1"></i> المستشفى</strong>
                  <p class="text-muted"> <?php echo $_SESSION['hospital'];?> </p>
                  <hr>
                  <strong><i class="fa fa-home mr-1"></i> الحي</strong>
                  <p class="text-muted"> <?php echo $_SESSION['neighborhood'];?> </p>
                  <hr>
                  <strong><i class="fa fa-home mr-1"></i> القسم</strong>
                  <p class="text-muted"> <?php echo $_SESSION['department'];?> </p>
                  <hr>
                  <strong><i class="fa fa-phone mr-1"></i> رقم الجوال</strong>
                  <p class="text-muted"> <?php echo $_SESSION['phone_number'];?> </p>

              </div>
              <!-- /.card-body -->
            </div>
			 <!-- Doctor information  -->  
            <!-- /.card -->
          </div>
          <!-- /.col -->
			 <!-- Doctor Updating information  -->
          <div class="col-md-9">
            <div class="card">
             <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                
                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" action="../php/doctor/profile.php" method="POST">
                    <?php
                        if(isset($_SESSION['success'])) {
                        ?>
                          <div class="alert alert-success"  role="alert"  style="width:430px;display:<?php echo isset($_SESSION['success']) ? "block":"none" ?>" >
                          <strong>!</strong> <?php echo $_SESSION['success']; ?>
                          <button type="button" class="close pull-left" style="float:left;background-color: #CFF4FC;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <?php
                          unset($_SESSION['success']);
                          }
                        ?>  
                        <?php
                        if(isset($_SESSION['formErrors'])) {
                        ?>
                          <div class="alert alert-danger"  role="alert"  style="width:430px;display:<?php echo isset($_SESSION['formErrors']) ? "block":"none" ?>" >
                          <strong>!</strong> <?php $formErrors = $_SESSION['formErrors']; echo $formErrors[0]; ?>       
                          <button type="button" class="close pull-left" style="float:left;background-color: #CFF4FC;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <?php
                          unset($_SESSION['formErrors']);
                        }
                        ?>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">الاسم</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['name']; ?>" id="inputName" placeholder="الاسم ">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">التخصص</label>

                        <div class="col-sm-10">
						      <select class="form-select first" name="specialization" autocomplete="off" required="required">
							  <option value="<?php echo $_SESSION['specialization']; ?>"><?php echo $_SESSION['specialization']; ?></option>
							  <option value="طبيب عام">طبيب عام</option>
							  <option value="طبيب امتياز">طبيب امتياز</option>
							  <option value="اخصائى">اخصائى</option>
							  <option value="استشارى">استشارى</option>
						      </select>
                        </div>
                      </div>	
                      <div class="form-group">
                        <label for="inputtext" class="col-sm-3 control-label">المستشفى</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="hospital" value="<?php echo $_SESSION['hospital']; ?>" id="inputtext" placeholder="المستشفي">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">الحي</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="neighborhood" value="<?php echo $_SESSION['neighborhood']; ?>" id="inputName2" placeholder="الحي">
                        </div>
                      </div>
					            <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">القسم</label>

                        <div class="col-sm-10">
						      <select class="form-select first" type="" placeholder="القسم" name="department" autocomplete="off" required="required">
							  <option value="<?php echo $_SESSION['department']; ?>"><?php echo $_SESSION['department']; ?></option>
							  </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">رقم الهاتف</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phone_number" value="<?php echo $_SESSION['phone_number']; ?>" id="inputName2" placeholder="رقم الهاتف">
                        </div>
                      </div>
            
					  <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">البريد الإلكتروني</label>

                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>" id="inputName2" placeholder="البريد الالكتروني">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">العنوان</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="loCation" name="address[location]"  value="<?php echo $_SESSION['address']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal" readonly  placeholder="العنوان">
                        </div>
                      </div>
                        <div class="row">
                                <label for="" class="col-sm-2">مواقيت الدوام:</label>
                                <div class="col-sm-3">
                                    <label for="" class="col-sm-2"> من</label>
								  <input name="from" data-clocklet="format: h:mm a" value="<?php echo $_SESSION['from']; ?>" id="inputName2">
                                </div>
                                <div class="col-sm-3">
                                    <label for="" class="col-sm-2">إلى</label>
								  <input name="to" data-clocklet="format: h:mm a" value="<?php echo $_SESSION['to']; ?>" id="inputName2">

                                </div>
                        </div>
					  <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">كلمة المرور</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" id="inputName2" value="<?php echo $_SESSION['password']; ?>" placeholder="كلمة المرور">
                        </div>
                      </div>	
                     
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="editProfile" class="btn btn-primary" style="background-color: #99C1B9;color: #FFF;border:1px solid #99C1B9">تحديث</button>
                        </div>
                      </div>
                    </form>
                  </div>
				  <div class="active tab-pane" id="settings">
                   <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">تعليقات وتقييمات الأشخاص لك</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                  <div class="active tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <?php
                        if(!empty($doctors[0]['assessing'])){
                            foreach ($doctors as $doctor){
                      ?>
                                <div>
                                    <i class="fas fa-comment" style="background-color: #99C1B9;color: #FFF;border:1px solid #99C1B9"></i>

                                    <div class="timeline-item">
                                        <span class="time"> <?php echo $doctor['date'];?></span>

                                        <h3 class="timeline-header"><i class="far fa-user"></i> <?php echo $doctor['Bname'];?> </h3>

                                        <div class="timeline-body" style="height: 140px">
                                            <div>
                                                <i class="fas fa-file-alt"></i>
                                                <?php echo $doctor['comment'];?>
                                            </div>
                                            <div class="rating" style="margin-right: 0">
                                                <?php $stars = $doctor['assessing'];
                                                for($i=1;$i<=5;$i++){
                                                    if($i <= $stars)
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

                      <div>
                        <i class="far fa-clock" style="background-color: #99C1B9;color: #FFF;border:1px solid #99C1B9"></i>
                      </div>
                    </div>
                  </div>
         
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
                  </div>	
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
			<!-- Doctor Updating information  -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    <div class="container d-md-flex py-4">

        <div class="col-lg-12 copy">
            <div class="copyright" style="margin-top: 5px;text-align:center">
                كل الحقوق محفوظه لدى  &copy; <strong><span>Dcare</span></strong>
            </div>
            <div class="credits">

            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="../assest/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assest/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assest/js/adminlte.min.js"></script>
<script>
    var map;
    function initialize() {

        var myLatlng = new google.maps.LatLng(24.498503281051967, 39.69445101898856);

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