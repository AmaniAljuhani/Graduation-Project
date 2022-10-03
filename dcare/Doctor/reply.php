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
    header('location:../php/doctor/newConsultancy.php?consult_id='.$consult_id);

require_once('header.php');
?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #fff;">
            <!-- Content Header (Page header) -->
            <div class="content-header" style="margin-right:30px;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="main-title">الاستشارة</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div><br>
            <!-- /.content-header -->

            <!-- Main content (Consulting details) -->
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #99C1B9;color: #FFF">
                <h3 class="card-title">الاستشارة</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fa fa-file-text"></i> نص الاستشارة</strong>

                <p class="text-muted">
                    <?php echo isset($consult)? $consult[0]['consultation']:""; ?>
                </p>

                <hr>

                <strong><i class="fa fa-calendar mr-1"></i> تاريخ الاستشارة</strong>

                <p class="text-muted"><?php echo isset($consult)? $consult[0]['consultation_date']:""; ?></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-7">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">الرد على الاستشارة </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                  <div class="active tab-pane" id="timeline">
                    <!-- The timeline -->
                    <form method="post" action="../php/doctor/newConsultancy.php">
                        <input type="text" name="consult_id" value="<?php echo isset($consult)? $consult[0]['consultation_id']:""; ?>" id="" hidden>
						  <textarea class="form-control" name="reply"required placeholder ="هنا يمكنك كتابة ردك على الاستشارة" style="height: 300px"></textarea>
						  <button class="btn btn-primary" name="addReply" style="background-color: #99C1B9;margin-top: 30px;border:1px solid #99C1B9" required  type="submit">الـرد</button>
					  </form>
                  </div>
         
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>	
			<!-- Main content (Consulting details) -->
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