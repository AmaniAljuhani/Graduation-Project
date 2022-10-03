-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 03:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcare2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`, `email`) VALUES
(1, 'admin', '123', 'admin2022@gmail.com'),
(2, 'dcare', 'Dcare2022-', 'Dcare2022@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `assessing`
--

CREATE TABLE `assessing` (
  `assessing_id` int(11) NOT NULL,
  `assessing` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `comment` text NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `totalRate` int(11) NOT NULL,
  `beneficiary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assessing`
--

INSERT INTO `assessing` (`assessing_id`, `assessing`, `date`, `comment`, `doctor_id`, `totalRate`, `beneficiary_id`) VALUES
(52, 4, '2022-05-18', 'متعاونة جدا ', 38, 4, 11),
(53, 5, '2022-05-18', 'يقدم استشارات جيدة', 41, 5, 13),
(54, 3, '2022-05-18', 'طبيبة جيدة ولكن لا تلتزم بالمواعيد', 45, 3, 12),
(55, 4, '2022-05-18', 'متمرس في عمله', 46, 4, 14),
(56, 5, '2022-05-18', 'رائعة ويوجد لديها خبرة واسعة', 37, 5, 14),
(57, 5, '2022-05-18', 'لديها معرفة واسعة في الأمور الجلدية', 42, 5, 14),
(58, 2, '2022-05-18', 'لا يستمع بشكل جيد للمرضى', 43, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `beneficiary_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`beneficiary_id`, `name`, `email`, `password`, `address`, `phone_number`) VALUES
(11, 'محمد', 'mohamm@gmail.com', '12345Mm-', 'المدينة', 564323456),
(12, 'ابراهيم', 'ab12@gmail.com', '56789Aa-', 'المدينة المنورة', 543234568),
(13, 'ريم', 'reem-20@gmail.com', '12345Rr-', 'المدينة', 546753412),
(14, 'شيماء', 'shim@gmail.com', '56789Ss-', 'المدينة المنورة', 565283965);

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `neighborhood` varchar(30) NOT NULL,
  `feedback` varchar(150) NOT NULL,
  `promotion` int(11) NOT NULL DEFAULT 0,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `name`, `specialization`, `hospital`, `neighborhood`, `feedback`, `promotion`, `department`) VALUES
(23, 'مصطفى عبدالقادر', 'اخصائى', 'الملك فهد', 'الفيصلية', 'رائع و اسلوبة جميل جدا ', 0, 'طب الجلديه'),
(24, 'فاطمة', 'استشارى', 'احد', 'العزيزية', 'متعاونة و ملتزمة بالمواعيد', 0, 'طب العيون');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consultation_id` int(11) NOT NULL,
  `consultation` text NOT NULL,
  `consultation_date` date NOT NULL DEFAULT current_timestamp(),
  `beneficiary_id` int(11) NOT NULL,
  `replied` int(11) NOT NULL DEFAULT 0,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`consultation_id`, `consultation`, `consultation_date`, `beneficiary_id`, `replied`, `department`) VALUES
(23, 'على ماذا يدل رمش العين بكثرة ؟', '2022-05-17', 11, 0, 'طب العيون'),
(24, 'هل تركيبات الأسنان تسبب رائحة الفم الكريهة ؟', '2022-05-17', 11, 0, 'طب الأسنان'),
(25, 'طفلي يشعر بغثيان مستمر ما هو سببه؟', '2022-05-17', 11, 0, 'طب الأطفال'),
(26, 'بعد الاستحمام اشعر بألم في جسمي و ظهور بثور في مناطق متفرقة في جسدي', '2022-05-17', 11, 1, 'طب الجلديه'),
(27, 'متى تظهر التينيا الجلدية؟', '2022-05-17', 12, 0, 'طب الجلديه'),
(28, 'مشكلتي هي اني اعاني من الضوء فأنا لا استطيع فتح عيوني حتى وان كان الضوء خافت ماذا يجب علي ان افعل؟\r\n', '2022-05-17', 12, 1, 'طب العيون'),
(29, 'طفلتي عمرها ٣ أسابيع ولايزال عندها اصفرار خفيف في عينها هل هذا طبيعي ام لا؟', '2022-05-17', 12, 1, 'طب الأطفال'),
(30, 'قمت بإزالة التقويم في الامس قال لي الطبيب يجب علي ان اضع مثبت شفاف، قام بأخذ قياسات اسناني وارسالها الى المختبر و هذا يستغرق ٤ ايام ليكون جهاز التثبيت جاهز، هل يمكن ان تتحرك اسناني ؟', '2022-05-17', 12, 1, 'طب الأسنان'),
(31, 'ما هي أفضل طريقة لتبييض الأسنان وهل هي مرة واحدة ام تحتاج لعدة مرات وما هو أفضل نوع معجون الأسنان من ناحية الحماية من التسوس وأقل ضررا', '2022-05-17', 13, 1, 'طب الأسنان'),
(32, 'طفلي يعاني من انسداد الأنف وهو رضيع بعمر الشهرين\r\n\r\n', '2022-05-17', 13, 1, 'طب الأطفال'),
(33, 'هل العدسات الطبية مناسبة للعيون الحساسة لمن يعاني من قصر نظر،ام النظارات الطبية هي الافضل؟\r\n', '2022-05-17', 13, 1, 'طب العيون'),
(34, 'كيف يساعد الشاي الأخضر على علاج الاحمرار والتهيج؟', '2022-05-17', 13, 0, 'طب الجلديه'),
(35, 'اعاني من حساسية الاسنان تزداد عند الأكل والشرب\r\n', '2022-05-17', 14, 0, 'طب الأسنان'),
(36, 'ما هي النصائح لما بعد تنظيف البشرة', '2022-05-17', 14, 1, 'طب الجلديه'),
(37, 'طفلي عمره ثلاث سنوات سقط على رجله وتورمت وتؤلمه الم محتمل اذا مشى عليها او اذا لمستها ولكنها تزداد في التورم\r\n\r\n', '2022-05-17', 14, 0, 'طب الأطفال'),
(38, 'ما المدة الزمنية المناسبة بين عملية الماء البيضاء و عملية الليزك من اجل تصحيح النظر بالعينين', '2022-05-17', 14, 0, 'طب العيون');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(13, 'سعد', 'saad-0@gmail.com', 'شكر', 'نشكر لكم جهودكم المبذولة ');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `neighborhood` varchar(30) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `work_from` varchar(25) NOT NULL,
  `work_to` varchar(25) NOT NULL,
  `cert_file` varchar(50) NOT NULL,
  `totalRate` int(11) NOT NULL,
  `Active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `name`, `specialization`, `neighborhood`, `hospital`, `department`, `address`, `password`, `email`, `phone_number`, `work_from`, `work_to`, `cert_file`, `totalRate`, `Active`) VALUES
(35, 'فهد', 'طبيب عام', 'العزيزية', 'احد', 'طب الأسنان', '24.694514073949403,39.58799729687499', '121212Ff-', 'fa@gmail.com', '0565387256', '', '', '../cert_files/6283d09144efb_الشهادة الطبية..pdf', 0, 1),
(36, 'عبدالله', 'طبيب امتياز', 'الحزام', 'المدينة المنورة', 'طب الأسنان', '24.484724352021747,39.17051682812499', '343434Aa-', 'abdullah11@gmail.com', '0564328765', '', '', '../cert_files/6283d4371a9ec_الشهادة الطبية..pdf', 0, 0),
(37, 'ندى', 'اخصائى', 'الحمراء', 'التخصصي', 'طب الأسنان', '24.424719974019762,39.88462815624999', '454545Nn-', 'nada@gmail.com', '0543865598', '', '', '../cert_files/6283d4aa0dbe4_الشهادة الطبية..pdf', 5, 1),
(38, 'هند', 'طبيب عام', 'العزيزية', 'احد', 'طب العيون', '24.71946559568803,39.52207932812499', '565656Hh-', 'hind-@gmail.com', '0567311679', '', '', '../cert_files/6283d512b39c7_الشهادة الطبية..pdf', 4, 1),
(39, 'علي', 'طبيب امتياز', 'الحمراء', 'التخصصي', 'طب العيون', '24.444724608404332,39.79124436718749', '676767Aa-', 'ali-x@gmail.com', '0548998457', '', '', '../cert_files/6283daafdb7e0_الشهادة الطبية..pdf', 0, 0),
(40, 'عبدالعزيز', 'اخصائى', 'المطار', 'المغربي', 'طب العيون', '24.319643640206692,39.56053147656249', '787878Aa-', 'aziz@gmail.com', '0548739021', '', '', '../cert_files/6283db110c822_الشهادة الطبية..pdf', 0, 0),
(41, 'ماهر', 'استشارى', 'الفيصلية ', 'الملك فهد', 'طب العيون', '24.424719974019762,39.21995530468749', '898989Mm-', 'maher-m@gmail.com', '0546521890', '', '', '../cert_files/6283db7947bcf_الشهادة الطبية..pdf', 5, 1),
(42, 'اسماء', 'طبيب عام', 'الحمراء', 'التخصصي', 'طب الجلديه', '24.43472268789191,39.88462815624999', '910910Aa-', 'asmaaa@gmail.com', '0543966453', '', '', '../cert_files/6283dbe8c0531_الشهادة الطبية..pdf', 5, 1),
(43, 'هاجر', 'اخصائى', 'قباء', 'الحياة الوطني', 'طب الجلديه', '24.059080096245296,39.78575120312499', '10111011Hh-', 'hajer-20@gmail.com', '0548728394', '', '', '../cert_files/6283dcd3dc33d_الشهادة الطبية..pdf', 2, 1),
(44, 'خالد', 'استشارى', 'الحزام', 'المدينة المنورة', 'طب الجلديه', '24.664565651409916,39.60996995312499', '111211Kk-', 'khh@gmail.com', '0547893645', '', '', '../cert_files/6283dd8f228cc_الشهادة الطبية..pdf', 0, 0),
(45, 'نور', 'طبيب عام', 'الشريبات', 'المدينة الوطني', 'طب الأطفال', '24.46472606838278,39.61546311718749', '12131213Nn-', 'noor-a@gmail.com', '0543276567', '', '', '../cert_files/6283de0c7b35e_الشهادة الطبية..pdf', 3, 1),
(46, 'احمد', 'اخصائى', 'الحزام', 'المدينة المنورة', 'طب الأطفال', '24.46472606838278,39.56053147656249', '131413Ah-', 'ahmadd@gmail.com', '0565436654', '', '', '../cert_files/6283de7c90594_الشهادة الطبية..pdf', 4, 1),
(47, 'معاذ', 'استشارى', 'قباء', 'الحياة الوطني', 'طب الأطفال', '24.454725735315197,39.68687424999999', '141514Mo-', 'mo-a@gmail.com', '0567512145', '', '', '../cert_files/6283df5063799_الشهادة الطبية..pdf', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `reply` text NOT NULL,
  `reply_date` date NOT NULL DEFAULT current_timestamp(),
  `doctor_id` int(11) NOT NULL,
  `consultation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `reply`, `reply_date`, `doctor_id`, `consultation_id`) VALUES
(21, 'ذلك يعتمد على حالة الأسنان و نوع سوء الاطباق الذي تم علاجه ، اذا كان الطبيب المعالج لك مختص في التقويم سيقوم باختيار المثبت المناسب و اعطاءك التعليمات اللازمة لحالتك', '2022-05-17', 35, 30),
(22, 'افضل طريقة هي زيارة طبيب الاسنان بلا شك واية طرق اخرى قد تتبع في المنزل من قبل شخص غير متمرس او وصفات مجهولة المصدر قد تضر صحة مينا الاسنان بلا شك ارجو عدم اتباع هذي الوصفات ويمكن استعمال معجون كريس وايت مرتين فقط في الاسبوع حتي لا تتضرر مينا الاسنان\r\n\r\n', '2022-05-17', 35, 31),
(23, 'حسب سبب الاعراض هل ميكروبي او تحسسي وطبقا لذلك تكون خطة العلاج والتعليمات النظارة امن غالبا والعدسات اجمل\r\n', '2022-05-17', 41, 33),
(24, 'أولا يفضل فحص شامل للعين قرنية حدقة شبكية والتأكد من عدم وجود جفاف ممكن قضاء معظم اوقات النهار على الاضاءة الكهربائية خففت موضوع التعود للضوء الساطع\r\n\r\n', '2022-05-17', 41, 28),
(25, 'قد تكون لديك حساسية من الكلور يرجى زيارة الطبيب', '2022-05-17', 42, 26),
(26, 'يجب تنظيف البشرة يومياً باستخدام الغسول المناسب للبشرة، أو التنظيف العميق بواسطة أقنعة البشرة أو التقنيات الحديثة للتنظيف والتقشير.\r\n\r\n', '2022-05-17', 42, 36),
(27, 'طبيعي طالما الطفلة ترضع بشكل طبيعي ونشيطه تبكي وتحرك أطرافها بشكل طبيعي\r\n\r\n', '2022-05-17', 45, 29),
(28, 'يمكن اجراء غسل للانف بقطرة ملحية تؤخذ من الصيدلية وتكرار العملية اكثر من مرة في اليوم\r\n', '2022-05-17', 45, 32);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `beneficiary_ id` int(11) NOT NULL,
  `doctor_ id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assessing`
--
ALTER TABLE `assessing`
  ADD PRIMARY KEY (`assessing_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `beneficiary_id` (`beneficiary_id`);

--
-- Indexes for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`beneficiary_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consultation_id`),
  ADD KEY `beneficiary_id` (`beneficiary_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `consultation_id` (`consultation_id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`beneficiary_ id`,`doctor_ id`),
  ADD KEY `doctor_ id` (`doctor_ id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assessing`
--
ALTER TABLE `assessing`
  MODIFY `assessing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `beneficiary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessing`
--
ALTER TABLE `assessing`
  ADD CONSTRAINT `assessing_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assessing_ibfk_2` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiary` (`beneficiary_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiary` (`beneficiary_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `replies_ibfk_3` FOREIGN KEY (`consultation_id`) REFERENCES `consultation` (`consultation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `search_ibfk_1` FOREIGN KEY (`doctor_ id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `search_ibfk_2` FOREIGN KEY (`beneficiary_ id`) REFERENCES `beneficiary` (`beneficiary_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
