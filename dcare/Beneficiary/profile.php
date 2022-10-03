<?php
session_start();
require_once('header.php');
?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #fff;">
            <!-- Content Header (Page header) -->
            <div class="content-header" style="margin-right:30px;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="main-title">الملف الشخصي للمستفيد</h1>
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

                <h3 class="profile-username text-center"><?php echo $_SESSION['name']; ?></h3>

                <p class="text-muted text-center">المستفيد</p>

               
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
			    <strong><i class="fa fa-user mr-1"></i> اسم المستفيد</strong>
                <p class="text-muted"><?php echo $_SESSION['name']; ?></p>
                <hr>
                <strong><i class="fa fa-envelope mr-1"></i> البريد الإلكتروني</strong>
                <p class="text-muted">
                <?php echo $_SESSION['email']; ?>
                </p>
                <hr>
                <strong><i class="fa fa-home mr-1"></i> العنوان</strong>
                  <p class="text-muted"><?php echo $_SESSION['address']; ?></p>
                  <hr>
                <strong><i class="fa fa-phone mr-1"></i> رقم الجوال</strong>
                <p class="text-muted"><?php echo $_SESSION['phone_number']; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
			 <!-- beneficiary information  -->  
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
                    <form class="form-horizontal" method="POST" action="../php/beneficiary/profile.php">
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
                          <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
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
                          <input type="text" value="<?php echo $_SESSION['name'] ?>" name="name" class="form-control" id="inputName" placeholder="الاسم">
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">العنوان</label>

                        <div class="col-sm-10">
                          <input type="text" value="<?php echo $_SESSION['address'] ?>" name="address" class="form-control" id="inputName" placeholder=" العنوان">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">رقم الهاتف</label>

                        <div class="col-sm-10">
                          <input type="text" value="<?php echo $_SESSION['phone_number'] ?>" name="phone_number" class="form-control" id="inputName" placeholder=" رقم الهاتف">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">البريد الإلكتروني</label>

                        <div class="col-sm-10">
                          <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" id="inputName2" placeholder="البريد الالكتروني">
                        </div>
                      </div>	
					  <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">كلمة المرور</label>

                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="inputName2" value="<?php echo $_SESSION['password']; ?>" placeholder="كلمة المرور">
                        </div>
                      </div>	
                     
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary" name="editProfile" style="background-color: #99C1B9;color: #FFF;border:1px solid #99C1B9">تحديث</button>
                        </div>
                      </div>
                    </form>
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
</body>