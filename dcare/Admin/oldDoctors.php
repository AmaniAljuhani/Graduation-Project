<?php
session_start();
if(isset($_SESSION['doctorsData'])){
    $doctors=$_SESSION['doctorsData'];
    unset($_SESSION['doctorsData']);
}
else
    header('location:../php/admin/oldDoctors.php');
require_once('header.php');
?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #fff;">
            <!-- Content Header (Page header) -->
            <div class="content-header" style="margin-right:30px;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="main-title">إدارة الأطباء المسجلين</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div><br>
            <!-- /.content-header -->

            <!-- Main content(Registered Doctors) -->
            <div class="content" style="margin-left:20px; margin-right:30px;">
                <div class="container">
                <?php
                        if(isset($_SESSION['doctorsSuccess'])) {
                        ?>
                          <div class="alert alert-success"  role="alert"  style="width:630px;display:<?php echo isset($_SESSION['doctorsSuccess']) ? "block":"none" ?>" >
                          <strong>!</strong> <?php echo $_SESSION['doctorsSuccess']; ?>
                          <button type="button" class="close pull-left" style="float:left;background-color: #CFF4FC;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <?php
                          unset($_SESSION['doctorsSuccess']);
                          }
                ?>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الاسم</th>
                            <th scope="col">التخصص</th>
                            <th scope="col">المستشفى</th>
                            <th scope="col">الحي</th>
                            <th scope="col">القسم</th>
                            <th scope="col">التحكم</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($doctors))
                            {
                                $count=0;
                                foreach($doctors as $doctor){
                        ?>
                          <tr>
                           <th scope="col"><?php echo ++$count; ?></th>
                           <th scope="col"><?php echo $doctor['name']; ?></th>
                            <th scope="col"><?php echo $doctor['specialization']; ?></th>
                            <th scope="col"><?php echo $doctor['hospital']; ?></th>
                            <th scope="col"><?php echo $doctor['neighborhood']; ?></th>
                            <th scope="col"><?php echo $doctor['department']; ?></th>
                            <td>
                                <?php if($doctor['Active']==1){ ?>
                                    <a type="button" href="../php/admin/oldDoctors.php?id=<?php echo $doctor['doctor_id']; ?>" onclick="return confirm('هل انت متأكد من الحظر؟')" class="btn btn-outline-danger">حظر</a>
                                <?php } if($doctor['Active']==3){ ?>
                                <a type="button" href="../php/admin/oldDoctors.php?idd=<?php echo $doctor['doctor_id']; ?>" onclick="return confirm('هل انت متأكد من إلغاء الحظر؟')" class="btn btn-outline-danger">إلغاء الحظر</a>
                                <?php } ?>
                            </td>
                          </tr>

                        <?php } }?>
                          
                        </tbody>
                      </table>
                </div>
                <!-- /.container-fluid -->
            </div>
			<!-- Main content(Registered Doctors) -->
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