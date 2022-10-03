<?php
session_start();
if(isset($_SESSION['consult'])){
    $consult=$_SESSION['consult'];
    unset($_SESSION['consult']);
}
else
    header('location:../php/beneficiary/consult.php');

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
                <div class="col-sm-2">

                    <!--<a href="upload_consulting.html" style="left: 0" class="btn btn-outline-info"><i class="fa fa-upload"></i> رفع استشاره</a>-->
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
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($consult)){
                    foreach ($consult as $cons){
                ?>
                    <tr>
                        <th scope="col"><?php echo $cons['consultation_id'] ; ?></th>
                        <th scope="col"><?php echo $cons['consultation'] ; ?></th>
                        <th scope="col"><?php echo $cons['consultation_date'] ; ?></th>

                        <td>
                            <a href="../php/beneficiary/consult.php?consult_id=<?php echo $cons['consultation_id'] ; ?>" class="btn btn-outline-info">عرض الرد </a>
                        </td>
                    </tr>
                <?php } }?>
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