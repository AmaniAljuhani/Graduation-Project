<?php
session_start();
if(isset($_SESSION['consult'])){
    $consult=$_SESSION['consult'];
}
require_once('header.php');
?>
<div class="content-wrapper" style="background-color: #fff;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="margin-right:30px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1 class="main-title">استشـاراتي</h1>

                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div><br>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #99C1B9;color: #FFF">
                            <h3 class="card-title" >  الاستشارة</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fa fa-file-text"></i> نص الاستشارة</strong>

                            <p class="text-muted">
                                <?php echo isset($consult)? $consult[0]['consultation']:"" ;?>
                            </p>

                            <hr>

                            <strong><i class="fa fa-calendar mr-1"></i> تاريخ الاستشارة</strong>

                            <p class="text-muted"><?php echo isset($consult)? $consult[0]['consultation_date']:"" ;?></p>

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

                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">الرد على استشارتي</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <?php if(isset($consult)){
                                foreach ($consult as $cons) {
                                ?>
                                    <div class="active tab-pane" id="timeline">
                                        <!-- The timeline -->
                                        <div class="timeline timeline-inverse">

                                            <div>
                                                <i class="fas fa-share" style="background-color: #99C1B9;color: #FFF;border:1px solid #99C1B9"></i>

                                                <div class="timeline-item">
                                                    <span class="time"> <?php echo $cons['reply_date']; ?></span>

                                                    <h3 class="timeline-header">
                                                        <a href="../info.php?doctor_id=<?php echo $cons['doctor_id'];?>" style="font-size: 15px;color:#999999"><i class="far fa-user"></i> د/ <?php echo $cons['dname']; ?></a></h3>
                                                    <div class="timeline-body">
                                                        <i class="fas fa-file-alt"></i> <?php echo $cons['reply']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="far fa-clock" style="background-color: #99C1B9;color: #FFF;border:1px solid #99C1B9"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php } } ?>

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