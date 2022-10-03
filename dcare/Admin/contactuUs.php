<?php
session_start();
if(isset($_SESSION['contactus'])){
    $contactus=$_SESSION['contactus'];
    unset($_SESSION['contactus']);
}
else
    header('location:../php/admin/contactUs.php');
require_once('header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #fff;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="margin-right:30px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="main-title">إدارة التواصل معنا </h1>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div><br>
    <!-- /.content-header -->

    <!-- Main content(Doctors Requests) -->
    <div class="content" style="margin-left:20px; margin-right:30px;">
        <div class="container">
		<?php
                    if(isset($_SESSION['doctorsSuccess'])) {
                        ?>
                       <center> <div class="alert alert-success"  role="alert"  style="width:630px;display:<?php echo isset($_SESSION['doctorsSuccess']) ? "block":"none" ?>" >
                            <strong>!</strong> <?php echo $_SESSION['doctorsSuccess']; ?>
                            <button type="button" class="close pull-left" style="float:left;background-color: #0000;border:none;font-size:20px" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
						</center>
                        <?php
                        unset($_SESSION['doctorsSuccess']);
                    }
                    ?>
            <table class="table table-striped">
                <thead>
                 <tr style="text-align:center;">
                    <th scope="col">#</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">البريد الإلكتروني</th>
                    <th scope="col">الموضوع</th>
                    <th scope="col">الرسالة</th>
				    <th scope="col">التحكم </th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(isset($contactus))
                {
                    $count=0;
                    foreach($contactus as $contact){
                        ?>
                         <tr style="text-align:center;">
                            <th scope="col"><?php echo ++$count; ?></th>
                            <th scope="col"><?php echo $contact['name']; ?></th>
                            <th scope="col"><?php echo $contact['email']; ?></th>
                            <th scope="col"><?php echo $contact['subject']; ?></th>
                            <th scope="col"><?php echo $contact['message']; ?></th>
							<td>
							  <a href="../php/admin/contactus.php?id=<?php echo $contact['id']; ?>" onclick="return confirm('هل انت متاكد تريد حذفه؟')" class="btn btn-outline-danger">حذف</a>
							</td>
                        </tr>

                    <?php } }?>

                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- Main content(Doctors Requests) -->
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