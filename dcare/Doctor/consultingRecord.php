<?php
session_start();
if(isset($_SESSION['consults'])){
    $consultants=$_SESSION['consults'];
    unset($_SESSION['consults']);
}
else
    header('location:../php/doctor/consultingRecord.php');

require_once('header.php');
?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #fff;">
            <!-- Content Header (Page header) -->
            <div class="content-header" style="margin-right:30px;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="main-title">استشـاراتي</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div><br>
            <!-- /.content-header -->

            <!-- Main content(Consulting tables) -->
            <div class="content" style="margin-left:20px; margin-right:30px;">
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">رقم الاستشارة</th>
                            <th scope="col">عنوان الاستشارة</th>
                            <th scope="col">تاريخ الاستشارة</th>
                            <th scope="col">اسم المستفيد</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($consultants)){
                            foreach ($consultants as $consultant){
                                ?>
                                <tr>
                                    <td scope="col"><?php echo $consultant['consultation_id']; ?></td>
                                    <td scope="col"><?php echo $consultant['consultation']; ?></td>
                                    <td scope="col"><?php echo $consultant['consultation_date']; ?></td>
                                    <td scope="col"><?php echo $consultant['name']; ?></td>
                                    <td>
                                        <a href="../php/doctor/consultingRecord.php?consult_id=<?php echo $consultant['consultation_id']; ?>" class="btn btn-outline-info">عرض الرد</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
                      </table>
                </div>
                <!-- /.container-fluid -->
            </div>
			<!-- Main content(Consulting tables) -->
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