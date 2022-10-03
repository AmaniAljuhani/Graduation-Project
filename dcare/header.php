<?php
unset($_SESSION['doctors']);

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>الصفحة الرئيسية | Dcare</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assest/images/sara1.png" rel="icon"  style="width: 55px;height: 55px">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="assest/css1/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assest/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>


    .team .rating{

        overflow: hidden;
        float: right;
        margin-right: 60px
    }

    .team .rating span{

        float: right;
        margin-right: 6px;
        font-size: 24px
    }

    .book{

        margin-bottom: 30px


    }


    .team .ratingg{

        overflow: hidden;
        float: right;
        margin-right: 60px
    }

    .team .ratingg span{

        float: right;
        margin-right: 6px;
        font-size: 24px
    }
        .popular-courses .rating{

            overflow: hidden;
            float: right;
            margin-right: 60px
        }

        .popular-courses .rating span{

            float: right;
            margin-right: 6px;
            font-size: 24px
        }

        .course-details .rating{

            overflow: hidden;
            float: right;
            margin-right: 60px
        }

        .course-details .rating span{

            float: right;
            margin-right: 6px;
            font-size: 24px
        }


        .book{

            margin-bottom: 30px


        }

        .course-details .rating{
            border: none;
            float: left
        }

        .course-details .rating > input{
            display: none;
        }
        .course-details .rating > label:before{
            content: '\f005';
            font-family: FontAwesome;
            margin: 5px;
            font-size: 1.5rem;
            display: inline-block;
            cursor: pointer
        }

        .course-details .rating > .half:before{
            content: '\f089';
            position: absolute;
            cursor: pointer;
        }


        .course-details .rating > label{
            color: #ddd;
            float: right;
            cursor: pointer;
        }

        .course-details .rating > input:checked ~ label,
        .course-details .rating:not(:checked) > label:hover,
        .course-details .rating:not(:checked) > label:hover ~ label{
            color: #fcec12;
        }

        .course-details .rating > input:checked + label:hover,
        .course-details .rating > input:checked ~ label:hover,
        .course-details .rating > label:hover ~ input:checked ~ label,
        .course-details .rating > input:checked ~ label:hover ~ label{
            color: #fcec12;
        }


    </style>
<style>
.book{
		  
	margin-bottom: 30px
}
.team .rating{
	
	overflow: hidden;
	float: right;
	margin-right: 60px
}

.team .rating span{
	
	float: right;
	margin-right: 6px;
	font-size: 24px
}
.popular-courses .rating{
	
	overflow: hidden;
	float: right;
	margin-right: 60px
}

.popular-courses .rating span{
	
	float: right;
	margin-right: 6px;
	font-size: 24px
}
	  
.course-details .rating{
	
	overflow: hidden;
	float: right;
	margin-right: 60px
}

.course-details .rating span{
	
	float: right;
	margin-right: 6px;
	font-size: 24px
}	  

</style>		

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="me-auto col-lg-2 col-sm-4"><img src="assest/images/ghaida.png" class="img-fluid" style="width: 75px;height: 75px"></a>

      <nav id="navbar" class="navbar order-last order-lg-0 col-lg-8" style="font-family: Almarai" >
        <ul>
          <li><a href="index.php" style="font-family: Almarai">الرئيسية</a></li>
           <li><a href="departments.php" style="font-family: Almarai">الأقسام</a></li>
		  <li><a href="doctor.php" style="font-family: Almarai">ترشيح طبيب</a></li>	
          <li><a href="contact.php" style="font-family: Almarai">تواصل معنا</a></li>
		  <li class="dropdown"><a href="" style="font-family: Almarai"><span style="margin-left: 2px">الأطباء</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="php/main/showDoctors.php?department=طب العيون" style="font-family: Almarai">طب العيون</a></li>
              <li><a href="php/main/showDoctors.php?department=طب الأطفال" style="font-family: Almarai">طب الأطفال</a></li>
              <li><a href="php/main/showDoctors.php?department=طب الأسنان" style="font-family: Almarai">طب الأسنان</a></li>
			  <li><a href="php/main/showDoctors.php?department=طب الجلديه" style="font-family: Almarai">طب الجلديه</a></li>
            </ul>
         </li>
         <?php if(!isset($_SESSION['password'])){ ?>
            <li><a href="login.php" style="font-family: Almarai">تسجيل الدخول</a></li>
            <li><a href="userRegister.php" style="font-family: Almarai">إنشاء حساب</a></li>
         <?php } ?>
         <?php if(isset($_SESSION['password'])){ ?>
             <?php if(isset($_SESSION['beneficiary_id'])){ ?>
                <li><a href="Beneficiary/profile.php" style="font-family: Almarai">مرحبا <?php echo '... '.$_SESSION['name']; ?> </a></li>
             <?php } else if(isset($_SESSION['doctor_id'])){?>
                 <li><a href="Doctor/profile.php" style="font-family: Almarai">مرحبا <?php echo '... '.$_SESSION['name']; ?> </a></li>
             <?php } else { ?>
                 <li><a href="Admin/Doctors.php" style="font-family: Almarai">مرحبا <?php echo '... '.$_SESSION['name']; ?> </a></li>
             <?php } ?>
             <li><a href="php/logout.php" style="font-family: Almarai">تسجيل خروج</a></li>
         <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

	<div class="col-lg-3 col-md-6 footer-newsletter" style="width:270px">
		<form action="php/main/findDoctor.php" method="post">
		  <input type="text" name="search" placeholder="ابحث عن طبيبك ...." value="">
			<button type="submit" name="searchBtn" class="but">
			   <i class="bx bx-search"></i>
		    </button>
		</form>
    </div>	

    </div>
  </header><!-- End Header -->
