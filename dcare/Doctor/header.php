<?php 
    if(!isset($_SESSION['password']))
    {
        header('location:../login.php');
    }
unset($_SESSION['consults']);
unset($_SESSION['consult']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Dcare</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../assest/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assest/css1/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assest/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="../assest/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	
	<link rel="stylesheet" href="../assest/css1/adminlte.min.css">
    <link rel="stylesheet" href="../assest/css/adminlte.min.css">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="../assest/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="../assest/css/custom-style.css">

</head>
<style>
    .card .rating{
        
        overflow: hidden;
        float: right;
        margin-right: 60px
    }
    
    .card .rating span{
        
        float: right;
        margin-right: 6px;
        font-size: 24px
    }
    
</style>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand   border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item"></li>
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          مرحبا  <?php echo ' '.$_SESSION['name']; ?>    
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="../php/logout.php">تسجيل الخروج<a></li>
                        </ul>
                      </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" >
                <center>
                
                </center>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div>
                    <!-- Sidebar user panel (optional) -->
                    
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						
						 <li class="nav-item">
                               <a href="../index.php" class="nav-link">
                                    <i class="fa fa-home nav-icon"></i>
                                    <p>
                                        الصفحة الرئيسية
                                    </p>
                                </a>
                            </li>
                         <li class="nav-item">
                                <a href="profile.php" class="nav-link">
                                    <i class="fa fa-user nav-icon"></i>
                                    <p>
                                       الملف الشخصي 
                                    </p>
                                </a>
                            </li>
							<li class="nav-item">
                                <a href="newConsultancy.php" class="nav-link">
                                    <i class="fa fa-file-text nav-icon"></i>
                                    <p>
                                        إدارة الاستشارات الجديدة
                                    </p>
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="consultingRecord.php" class="nav-link">
                                    <i class="fa fa-file-text nav-icon"></i>
                                    <p>
                                        الاستشارات الخاصة بي
                                    </p>
                                </a>
                            </li>
                             
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
            <!-- /.sidebar -->
        </aside>
