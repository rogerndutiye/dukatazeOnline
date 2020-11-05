-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2020 at 01:11 PM
-- Server version: 10.3.26-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukataze_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrertrajectors`
--

CREATE TABLE `carrertrajectors` (
  `id` int(11) NOT NULL,
  `carrer_firstname` varchar(255) NOT NULL,
  `carrer_lastname` varchar(255) NOT NULL,
  `dateofbirth` varchar(40) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `carrer_passion` varchar(200) NOT NULL,
  `mentor_id` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrertrajectors`
--

INSERT INTO `carrertrajectors` (`id`, `carrer_firstname`, `carrer_lastname`, `dateofbirth`, `gender`, `carrer_passion`, `mentor_id`, `phone`, `email`, `status`, `updated_at`, `created_at`) VALUES
(1, 'aime', 'irak', '2019-07-31', 'Male', 'dance', '1', 782229123, 'aimeirak10@gmail.com', 1, '2019-08-17 17:22:35', '2019-08-17 17:22:35'),
(2, 'aime', 'irak', '2091-03-12', 'Male', 'dance', 'sfdfdf', 782229123, '123@mgaii.om', 1, '2019-09-26 19:49:10', '2019-09-26 19:49:10'),
(3, 'fsgaxjkjsa', 'asghxicks', '1998-12-04', 'Female', 'safgxjksa4678', 'aghxbjmas', 787304087, 'aminaumuhoza@gmail.com', 1, '2019-09-26 20:05:00', '2019-09-26 20:05:00'),
(4, 'umuhoza', 'rurabo', '2001-12-08', 'Male', '56557', 'sdfghjk', 730781792, 'dukataze@gmail.com', 1, '2019-09-26 20:07:04', '2019-09-26 20:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'room decoration', 0, '2020-01-15 17:18:56', '2020-01-15 17:18:56'),
(2, 'clothes', 0, '2020-01-15 17:19:17', '2020-01-15 17:19:17'),
(3, 'Bags', 0, '2020-01-15 17:29:52', '2020-01-15 17:29:52'),
(4, 'Table decos', 0, '2020-01-21 06:42:00', '2020-01-21 06:42:00'),
(5, 'Dining Table Decor', 1, '2020-06-05 15:31:47', '2020-06-05 15:31:47'),
(6, 'Wall home decor', 1, '2020-07-25 22:00:54', '2020-07-25 22:00:54'),
(7, 'Room decoration', 1, '2020-09-17 14:12:13', '2020-09-17 14:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `category_types`
--

CREATE TABLE `category_types` (
  `category_type_id` bigint(20) UNSIGNED NOT NULL,
  `category_type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_types`
--

INSERT INTO `category_types` (`category_type_id`, `category_type_name`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'pillow', 1, 0, '2020-01-15 17:19:45', '2020-01-15 17:19:45'),
(2, 'T-shirts', 1, 0, '2020-01-15 17:19:58', '2020-01-15 17:19:58'),
(3, 'T-shirts', 2, 0, '2020-01-15 17:21:33', '2020-01-15 17:21:33'),
(4, 'shoulder bag', 1, 0, '2020-01-15 17:30:16', '2020-01-15 17:30:16'),
(5, 'Bed wrap package', 1, 1, '2020-01-21 06:38:01', '2020-01-21 06:38:01'),
(6, 'Table', 4, 0, '2020-01-21 06:42:48', '2020-01-21 06:42:48'),
(7, 'Special package', 1, 0, '2020-02-02 23:25:14', '2020-02-02 23:25:14'),
(8, 'Table-mats ( Sous-plat)', 4, 0, '2020-06-05 15:29:25', '2020-06-05 15:29:25'),
(9, 'Table-mats ( Sous-plat)', 5, 1, '2020-06-05 15:33:19', '2020-06-05 15:33:19'),
(10, 'Wall Decor', 6, 1, '2020-07-25 22:02:35', '2020-07-25 22:02:35'),
(11, 'Pillows', 7, 1, '2020-09-17 14:13:40', '2020-09-17 14:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `category` enum('Product','Story','Work') NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `mentor_title` varchar(11) NOT NULL,
  `mentor_firstname` varchar(255) NOT NULL,
  `mentor_lastname` varchar(255) NOT NULL,
  `mentor_gender` varchar(255) NOT NULL,
  `mentor_email` varchar(255) NOT NULL,
  `mentor_phone` int(20) NOT NULL,
  `mentor_address` varchar(255) NOT NULL,
  `mentor_qualification` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `mentor_title`, `mentor_firstname`, `mentor_lastname`, `mentor_gender`, `mentor_email`, `mentor_phone`, `mentor_address`, `mentor_qualification`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Dr', 'Abayo', 'Jean', 'Male', 'abayo@gmail.com', 234567890, 'kigali', 'IT', 1, '2019-08-17 11:03:17', '2019-08-17 11:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_02_161107_create_products_table', 1),
(4, '2019_08_02_161803_create_brands_table', 1),
(5, '2019_08_02_161948_create_categories_table', 1),
(6, '2019_08_02_162110_create_category_types_table', 1),
(7, '2019_08_02_162356_create_stories_table', 1),
(8, '2019_08_02_162854_create_questions_table', 1),
(9, '2019_08_06_002118_create_repled_questions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_type_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `product_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category_id`, `category_type_id`, `price`, `product_image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(68, 'Sous-plat', 5, 9, 18500, 'IMG-20200603-WA0047~2.jpg', '1 long mat+ 4 plate mats . Free delivery in Kigali', 1, '2020-06-05 15:35:30', '2020-06-05 15:36:38'),
(72, 'Table mats', 5, 9, 20000, 'IMG-20200713-WA0010~2.jpg', 'Long table wrap with 6 kitenge serviettes. Delivery fee 1000 Frw', 1, '2020-07-25 22:26:12', '2020-07-25 22:27:31'),
(73, 'Floating shelf', 6, 10, 27000, '$_10.JPG', '2 wall floating shelves, without flowers. Delivery fee is 1000 Frw', 1, '2020-07-25 22:54:27', '2020-07-25 23:02:37'),
(74, 'Floating shelves', 6, 10, 35000, '27b9fab0a2ab823f54ca72bbaa201df2_350x350.jpg', '3 floating shelves without flowers. Delivery fee 1000 Frw', 1, '2020-07-25 22:55:52', '2020-07-25 23:02:32'),
(77, 'wall boxes', 6, 10, 67000, 'display-cases-frames-wall-decoration-ideas-13.jpg', '3 BLACK  MDF boxes. Free delivery+ free home fixing', 1, '2020-07-25 23:02:00', '2020-07-25 23:02:10'),
(78, 'Deco pillows', 7, 11, 21500, 'il_340x270.2477180775_4xa1.jpg', 'Deco pillows', 1, '2020-09-17 14:15:19', '2020-09-17 14:18:20'),
(79, 'Wedding gift', 7, 5, 24000, 'dab13748beee90f3b78dd09123d7636d.jpg', 'wedding gift', 1, '2020-09-17 14:17:01', '2020-09-17 14:18:42'),
(80, 'Room deco', 5, 5, 16000, 'il_340x270.1899047786_156w.jpg', 'wedding gift', 1, '2020-09-17 14:18:11', '2020-09-17 14:18:26'),
(81, 'Room deco', 7, 11, 23000, '5fd234bb50b487309cf0ca239bab423c.jpg', 'Room deco', 1, '2020-09-17 14:21:47', '2020-09-17 14:25:36'),
(82, 'Room deco', 5, 11, 18000, 'faf4bb349816f81312248998d6447d83.jpg', 'Room deco', 1, '2020-09-17 14:24:34', '2020-09-17 14:25:42'),
(84, 'Room deco', 7, 11, 18500, '91kh+lmrrsL._SL1500_.jpg', 'Room deco', 1, '2020-09-17 14:27:14', '2020-09-17 14:28:54'),
(85, 'Happy BD', 7, 11, 10000, '3869685_0.jpg', 'BD', 1, '2020-09-17 14:28:17', '2020-09-17 14:28:49'),
(86, 'Indoor sofa', 7, 10, 220000, 'a0ebb49ad8280b020888503dbc239852.jpg', 'Indoor sofa', 1, '2020-09-17 14:39:03', '2020-09-17 14:43:14'),
(88, 'Shelves', 6, 5, 70000, '77b9bcf3-bcc0-4efe-97f5-7e5228732aca.__CR0,0,970,600_PT0_SX970_V1___.jpg', 'Shelves', 1, '2020-09-17 14:48:18', '2020-09-17 14:54:49'),
(89, 'wall deco', 6, 10, 45000, '6135Hp+6k1L._AC_SL1448_.jpg', 'wall deco', 1, '2020-09-17 14:50:13', '2020-09-17 14:54:33'),
(90, 'wall deco', 6, 10, 60000, 'Mckelvy+Modern+Wall+Shelf.jpg', 'wall deco', 1, '2020-09-17 14:51:57', '2020-09-17 14:54:40'),
(91, 'Book shelf', 6, 10, 150000, 's-l300.jpg', 'Book shelf', 1, '2020-09-17 14:53:15', '2020-09-17 14:54:59'),
(92, 'Wall deco', 6, 10, 130000, 'magnificent-wall-shelf-ideas-for-living-room-of-modern-floating-shelves-white-box-design-mounted-670-2.jpg', 'wall deco', 1, '2020-09-17 14:58:29', '2020-09-17 15:02:48'),
(93, 'Orange shelf', 6, 10, 70000, '51+Q0GBBSwL._AC_SX450_.jpg', 'shelf', 1, '2020-09-17 15:06:14', '2020-09-17 15:08:04'),
(94, 'Indoor sofa', 7, 11, 220000, '30cbd9d66f1cc5fde60df78ff1716fad.jpg', 'Indoor sofa', 1, '2020-09-17 15:07:57', '2020-09-17 15:08:11'),
(96, 'wall deco hanger', 6, 10, 68000, 'Ella+Wall+Mounted+Coat+Rack.jpg', 'wall hanger', 1, '2020-09-17 15:19:24', '2020-09-17 15:20:12'),
(97, 'pillows', 7, 11, 21500, 'h217541.001.jpeg', 'Room eco', 1, '2020-09-17 15:22:56', '2020-09-17 15:23:45'),
(98, 'Yellow float', 6, 10, 65000, '57263-2224997.jpg', 'floating', 1, '2020-09-17 15:25:18', '2020-09-17 15:26:19'),
(99, 'Orange float', 7, 10, 75000, 'etagere-tibet-couleur-orange.jpg', 'orange float', 1, '2020-09-17 15:26:07', '2020-09-17 15:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply_action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `full_name`, `address`, `question_title`, `question_description`, `reply_action`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Anonymous', 'help@dukatazeonline.rw', 'condom', 'HELLO!  i am not comfortable to buy a condom what should i do?', '1', 1, '2020-01-15 16:21:09', '2020-01-20 23:34:11'),
(2, 'Anonymous', 'help@dukatazeonline.rw', 'PERIOD cycle', 'IS IT SAFE TO USE  MENSTRUAL CYCLE APP,iF YOU ARE SEXUAL ACTIVE', '1', 1, '2020-01-15 16:22:46', '2020-01-20 23:03:20'),
(3, 'Utazwi', 'ubufasha@dukatazeonline.rw', 'gutwita', 'Ese umuntu akoze imibonano mpuzabitsina idakingiye yabigenza ate ngo ntatwite?', '1', 1, '2020-01-15 16:25:44', '2020-01-15 18:41:00'),
(4, 'Anonymous', 'help@dukatazeonline.rw', 'Periods', 'Mwiriwe neza!!iyo umuntu agira Ama règle ahindagurika cyane ubwo naba mfite ikibazo', '1', 1, '2020-01-20 22:20:19', '2020-02-01 18:15:56'),
(5, 'Anonymous', 'help@dukatazeonline.rw', 'Menstruation', 'I have a painful period what should I do to get rid of it?', '1', 1, '2020-01-20 22:24:11', '2020-01-30 18:27:46'),
(6, 'Anonymous', 'help@dukatazeonline.rw', 'Udukingirizo tw\'igitsina gore', 'Ese udukingirizo tw\'abagore dukoreshwa nk\'utw\'abagabo? Ese tuboneka he? Ese umuntu yakura he amahugurwa y\'uko badukoresha?', '1', 1, '2020-01-20 22:37:41', '2020-01-30 18:22:22'),
(8, 'Anonymous', 'help@dukatazeonline.rw', 'Mbigenze nte kobanseka ngo ndisugi', 'Mfite ikibazo , mfite imyaka 19 ndacyari isugi ariko abakobwa binshuti zanjye birirwa banseka ngo ndacyari umwana ngo nzongere kubavugisha nakuze. Mubyukuri ndabakunda ninshuti zanjye kandi sinifuza kubahara .', '1', 1, '2020-01-30 18:31:40', '2020-04-25 23:38:45'),
(9, 'Anonymous', 'help@dukatazeonline.rw', 'My mum is forcing me to get married , what should i do?', 'Mfite imyaka 21 ninjye mfura ,Mama ari kumbwirango nkore ubukwe  arashaka umwuzukuru, ngo ndakuze bihagije ,kandi njyewe mubyukuri simbishaka sinabiteganya yewe kuko ndashaka kuguma kwiga , ariko we akambwirango nzakomeza nige ngonawe yarize kandi yaratubyaye, mbigenze nte.', '1', 1, '2020-01-30 18:36:13', '2020-04-04 20:10:32'),
(10, 'Anonymous', 'help@dukatazeonline.rw', 'My boyfriend wants me to quit my job, and i don\'t know what to do.', 'I am 21 . i work in a restaurant and they pay me 80,000 frw per month but my boyfriend wants me to quit that job. I requested him to find me a better job but he told me that a beautiful girl like me has to live like a princess. He agreed to give me 100,000 frw per month every month if i quit that job,but he doesn\'t want me to work again.what can i do?', '1', 1, '2020-01-30 18:42:25', '2020-02-01 18:32:11'),
(11, 'Anonymous', 'help@dukatazeonline.rw', 'pain before menstruation', 'my breast started to hurt me3 days before the menstruation  what is it', '1', 1, '2020-03-08 06:45:34', '2020-04-04 20:00:18'),
(12, 'Anonymous', 'help@dukatazeonline.rw', 'I want to give back to community', 'Hello!!! I am a professional wellbeing coach, and I just ran across your work, and I feel like I want to contribute my expertise especially in this lockdown that we are facing in Rwanda, let me know the good way to be in touch with you on this!!!, I also pressed an order of one of your products and my phone numbers are there you can directly reach out to me.', '1', 1, '2020-04-02 23:34:15', '2020-04-04 20:26:53'),
(13, 'Anonymous', 'help@dukatazeonline.rw', 'Sanitary pads', 'I normally don\'t feel comfortable to by pads in our neighboring shops and due to this quarantine, I can\'t go to town or super markets cz roads are closed, do you think you can help me? My periods are coming in a week', '1', 1, '2020-04-02 23:37:15', '2020-04-25 23:26:53'),
(14, 'Anonymous', 'help@dukatazeonline.rw', 'Engagement', 'I have found that you had an event in match and i would like to be invited next time in one of your engagements , how should I go on it, anyway I am from western province but I work in Kigali', '1', 1, '2020-04-02 23:40:55', '2020-04-04 20:23:41'),
(15, 'Anonymous', 'help@dukatazeonline.rw', 'Ese kumara amezi meshi utajya mumihango kandı utarakubaganye ubwo biba byagenze bite?', 'tajya mumihango kandı utarakubaganye ubwo biba byagenze bite?', '0', 1, '2020-04-25 23:41:06', '2020-04-25 23:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `repled_questions`
--

CREATE TABLE `repled_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(11) NOT NULL,
  `reply_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `repled_questions`
--

INSERT INTO `repled_questions` (`id`, `question_id`, `reply_message`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'urakoze kutwandikira! <br><br> Mugihe wakoze imibonano mpuzabitsina idakingiye, Ntanuburyo bwokuboneza urubyaro usanzwe ukoresha, wifashisha ikinini kizwi nka Morning after pills kiboneka muma pharmacy yose. Ubu ni uburyo ukoresha bwo kwitabara , bukaba bukora neza iyo unyweye iki kinini mbere yuko  amasaha 72 arenga umaze gukora imibonano mpuzabitsina, iyo arenze ntibuba bukizewe  nkuko biteganijwe. NB : Ubu buryo subwo gukoresha burigihe ngo ubigere akamenyero kuko bushobora kugira ingaruka nyinshi kubuzima bwawe, ikindi kandi ntibukurinda kwandura indwara zandurira mumibonano mpuzabitsina  idakingiye.', 1, '2020-01-15 18:41:00', '2020-01-15 18:41:00'),
(2, 2, 'Thank you so much for asking this question. If you are sexual active  as you described  above , Counting your safe days basing on your menstrual cycle is not the reliable method to use if you want to prevent unintended pregnancies. We would like to remind you that your normal cycle can change due to various factors.Due to this reason you can\'t  rely on  this method.But we do recommend you to try other available methods such as  condom, contraceptive pills,and other family planning methods that are available.', 1, '2020-01-20 23:03:20', '2020-01-20 23:03:20'),
(3, 1, 'Thank you so much for asking this questions. In Rwanda we have plenty youth centers and they normally have peer educators who can help you to get these condoms even for free.  You can  also reach out to kasha by visiting their website on www.kasha.rw , or call them on 9111.You can also use your mobile phone by dialing *911# to order and WhatsApp +250780440522 to be in touch with them.  We would also want to encourage you to be confident enough to buy them because you are indeed protecting your life.', 1, '2020-01-20 23:34:11', '2020-01-20 23:34:11'),
(4, 6, 'Urakoze cyane kutwandikira utubaza ikibazo. Nkuko imyanya ndangagitsina y\'abagabo n\'abagore itandukanye niko nudukingirizo twabo dutandukanye ndetse tukanakoreshwa bitandukanye ariko twose duhuje intego, ariyo yokwirinda indwara zandurira mumibonano mpuzabitsina idakingiye. Utudukingirizo twombi ushobora kudukura mubigo nderabuzima, muri pharmacy ndetse ukaba wanadutumiza kuri kasha bakatukugezaho. Kuriburi gapaki haba handitseho uko dukoreshwa, kandi wanakwegera ibigo nderabuzima cyangwa se ibigo by\'urubyiruko ukaba wahabwa amahugurwa. Urakoze cyane', 1, '2020-01-30 18:22:22', '2020-01-30 18:22:22'),
(5, 5, 'Hello thank you so much for reaching out to us, we have developed an article with adequate information on your question ,kindly click on this link https://www.dukatazeonline.rw/storieview  . You can also click on SRH stories button located on the left side of your screen. Thank you', 1, '2020-01-30 18:27:46', '2020-01-30 18:27:46'),
(6, 4, 'Murakoze ku kibazo mwatubajije, mubusanzwe ntabwo ari ihame ko ukwezi ku umugore guhorana iminsi imwe guhindagurika kwako bibaho bitewe n\'ibintu bitandukanye. Akenshi iyo mihango itabonetse cyangwa igatinda bivugwa ko haba habayeho ikitwa Anovulation. Ibi bisobanura ko igi ry’umugore riba ritasohotse nk’uko rigomba gusohoka buri kwezi bitewe n’ihindagurika ry’imisemburo. Cyangwa se bikaba byaterwa n\'umunaniro, agahinda gakabije, guhindura ikirere ndetse nimirire mibi. Ariko twanakugira inama yo kwihutira kwa muganga kugirango basuzume barebe ko nta kindi kibyihishe inyuma.\r\nMurakoze!', 1, '2020-02-01 18:15:56', '2020-02-01 18:15:56'),
(7, 10, 'Thanks for asking dear! For this situation you must think big .what could happen if your boyfriend loses his job? Will he still be able to give you that amount monthly?. Go back and remember your vision and goals it is not good a choice to always depend on someone,you must be self reliant and know that life is not lived for others make your own life, and satisfy your needs . You can also propose to him to give you a startup capital so that you can work for yourself he will support you and understand you if he really loves you.', 1, '2020-02-01 18:32:11', '2020-02-01 18:32:11'),
(8, 10, 'Thanks for asking dear! For this situation you must think big .what could happen if your boyfriend loses his job? Will he still be able to give you that amount monthly?. Go back and remember your vision and goals it is not good a choice to always depend on someone,you must be self reliant and know that life is not lived for others make your own life, and satisfy your needs . You can also propose to him to give you a startup capital so that you can work for yourself he will support you and understand you if he really loves you.', 1, '2020-02-01 18:32:11', '2020-02-01 18:32:11'),
(9, 11, 'Thank you for asking this questions and we would like to let you know that we have an article that can answer this situation that you are facing in details, click on the SRH stories you will get that story. Thank you', 1, '2020-04-04 20:00:18', '2020-04-04 20:00:18'),
(10, 9, 'Urakoze kudusangiza ikibazo wahuye nacyo, birumvikana uraremerewe ndetse ibitekerezo byakubanye urusobe. Gusa ningombwa cyane ko uguma gutekereza kunzozi zawe ndetse nuko ugomba kuzigeraho , wamara kuzinoza ukegera umubyeyi wawe utuje ukamubwira aho ushaka kugera ndetse nuko gushinga urugo akakanya byaguhungabanya kugera kunzozi zawe cyane ko utaniteguye . Wongere umwibutseko igihe nikigera urugo uzarushinga ariko ubu ataricyo cyambere ubona kihutirw,a nubona atakumva uziyambaze undi muntu mumuryango Ukumva maze agufashe cyangwa se umuyobozi wisanzuyeho. Urakoze cyane.', 1, '2020-04-04 20:10:32', '2020-04-04 20:10:32'),
(11, 14, 'we are happy for your interest to join our future events, \r\nplease Kindly follow us on our social media platforms , \r\nyou will be getting updates on our events and all planned activities. \r\nTwitter: @dukataze\r\n facebook :@dukataze\r\ninstagram:@dukataze', 1, '2020-04-04 20:23:41', '2020-04-04 20:23:41'),
(12, 12, 'Thank you so much for your interest ,  we are indeed going to reach out to you .', 1, '2020-04-04 20:26:53', '2020-04-04 20:26:53'),
(13, 13, 'Hello, thank you for asking this question, Kindly visit the website of kasha and press your order they will deliver sanitary pads of your choice at your door. you can also call them to 9111 or dial *911#. Thank you.', 1, '2020-04-25 23:26:53', '2020-04-25 23:26:53'),
(14, 8, 'Urakoze cyane kutubaza iki kibazo. Birumvikana ko ukunda inshuti zawe, ariko inshuti nziza ntabwo iguhatira gukora ibitakurimo, ndetse niwowe ubwawe ugomba gufata ibyemezo birebana n\'ubuzima bwawe kandi ingaruka niwowe zigeraho mbere. Kumyaka 19 uracyari muto ufite ejo  heza, kandi kuba ukiri isugi ntabwo aribibi ahubwo nibyiza cyane kuko nibwo buryo bwizewe 100% bwo kwirinda indwara zandurira mumibonano mpuzabitsina. Ntawashidikanyako uri mumurongo mwiza ndetse byaba byiza kurushaho ukomeye kubusugi bwawe , byakunanira ugakoresha agakingirizo. Niba hari Inshuti uzi muhuje indangagaciro kandi itaguhatira gukora ikibi waganira nayo, cyangwa se Umubyeyi wawe kugirango arusheho kukumva nokuguha inama nziza. Ndakurarikira gusoma inkuru irikuri ururubuga , ifite umutwe uvugango \" Kuki kwifata aringenzi?\" . Urakoze cyane', 1, '2020-04-25 23:38:45', '2020-04-25 23:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `storie_id` bigint(20) UNSIGNED NOT NULL,
  `storie_title_eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `storie_title_kinya` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storie_description_eng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `storie_description_kinya` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'stories.gif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`storie_id`, `storie_title_eng`, `storie_title_kinya`, `storie_description_eng`, `storie_description_kinya`, `status`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Why is it important to abstain? Ese kuki kwifata ari ingenzi?', NULL, 'English version\r\n\r\nAbstinence is a self-enforced restraint from indulging in bodily activities that are widely experienced as giving pleasure. Most frequently,the term refers to sexual abstinence , or abstinence from alchol or food. The practice can rise from religious prohibitions and practical considerations.\r\n\r\n.It is very important for young woman to abstain in order to protect their emotional and physical health.Abstaining from sexual intercourse prevents you from early pregnancy and sexual transmitted diseases such as HIV/AIDS, Gonorrhea etc.\r\nYoung women should abstain as a sign of self love, and this has a lot to do in  securing their dreams and goals. It is hard to achieve your dreams when you are fighting with the consequences of unprotected sex at such early age.but if abstinence is hard for you we recommend you to use other methods especially condom.\r\n\r\nKinyarwanda version\r\nKwifata nukwiha umurongo wo kutishora mubikorwa by’umubiri cyane cyane bigamije kwishimisha. Akenshi kwifata bikoreshwa mugusobanura kwifata kumibonano mpuza bitsina, cyangwa se kwifata mugukoresha ibisindisha ndetse n’amafunguro atandukanye. Kwitoza kwifata  bishobora guturuka kubunararibonye bw’umuntu kugiti cye, cyangwa se bikanaturuka kumbyizerere n’imyemerere\r\nNibyingenzi cyane kurubyiruko cyane cyane abakobwa kwitoza kwifata. Kuko bigira akamaro  kanini mukurinda amarangamutima ndetse n’ubuzima muri rusange. Kwifata mukwishora mumibonano mpuza bitsina  bikurinda mugutwara inda Imburagihe ndetse n’indwara zandurira mumibonano mpuza bitsina harimo , virusi itera Sida, Imitezi mburugu , hepatite nizindi nyinshi.\r\n\r\nAbangavu bakwiye kwifata nk’ ikemenyetso cyo kwikunda, kandi ibi bifite byinshi bisobanuye mukurinda inzozi n’intego zabo. Biragoye cyane kugera kuntego wihaye urimo uhangana ninngaruka zokuba warakoze imibonano mpuzabitsina idakingiye kumyaka mike, Ariko iyo kwifata byanze turagushishikariza gukoresha ubundi buryo bwagufasha kurinda ubuzima bwawe, harimo gukoresha agakingirizo\r\n\r\nWritten by Sharon Mbabazi', '', 0, '-photo-abstinence-concept.jpg', '2020-01-15 17:56:00', '2020-01-15 17:56:00'),
(4, 'Why is it important to abstain? Ese kuki kwifata ari ingenzi?', NULL, 'Why is it important to abstain?\r\nKuki kwifata ari ingenzi ?\r\n\r\n<br><br>\r\nEnglish version\r\n<br><br>\r\n\r\nAbstinence is a self-enforced restraint from indulging in bodily activities that are widely experienced as giving pleasure. Most frequently,the term refers to sexual abstinence , or abstinence from alcohol or food. The practice can rise from religious prohibitions and practical considerations.\r\n<br><br>\r\n\r\n.It is very important for young woman to abstain in order to protect their emotional and physical health.Abstaining from sexual intercourse prevents you from early pregnancy and sexual transmitted diseases such as HIV/AIDS, Gonorrhea etc.\r\n<br><br>\r\nYoung women should abstain as a sign of self love, and this has a lot to do in  securing their dreams and goals. It is hard to achieve your dreams when you are fighting with the consequences of unprotected sex at such early age.but if abstainence is hard for you we recommend you to use other methods especially condom.\r\n\r\n<br><br><br>\r\nKinyarwanda version\r\n<br><br>\r\nKwifata nukwiha umurongo wo kutishora mubikorwa by’umubiri cyane cyane bigamije kwishimisha. Akenshi kwifata bikoreshwa mugusobanura kwifata kumibonano mpuza bitsina, cyangwa se kwifata mugukoresha ibisindisha ndetse n’amafunguro atandukanye. Kwitoza kwifata  bishobora guturuka kubunararibonye bw’umuntu kugiti cye, cyangwa se bikanaturuka kumbyizerere n’imyemerere.\r\n<br><br>\r\nNibyingenzi cyane kurubyiruko cyane cyane abakobwa kwitoza kwifata. Kuko bigira akamaro  kanini mukurinda amarangamutima ndetse n’ubuzima muri rusange. Kwifata mukwishora mumibonano mpuza bitsina  bikurinda mugutwara inda Imburagihe ndetse n’indwara zandurira mumibonano mpuza bitsina harimo , virusi itera Sida, Imitezi mburugu , hepatite nizindi nyinshi.\r\n<br><br>\r\n\r\nAbangavu bakwiye kwifata nk’ ikemenyetso cyo kwikunda, kandi ibi bifite byinshi bisobanuye mukurinda inzozi n’intego zabo. Biragoye cyane kugera kuntego wihaye urimo uhangana ninngaruka zokuba warakoze imibonano mpuzabitsina idakingiye kumyaka mike, Ariko iyo kwifata byanze turagushishikariza gukoresha ubundi buryo bwagufasha kurinda ubuzima bwawe, harimo gukoresha agakingirizo\r\n<br><br>\r\n\r\nWritten by Sharon Mbabazi', '', 0, '-photo-abstinence-concept.jpg', '2020-01-15 18:12:53', '2020-01-21 06:15:46'),
(5, 'WHAT YOU SHOULD KNOW ABOUT MENSTRUAL CRAMPS', NULL, 'ENGLISH VERSION \r\n<br><br>\r\nMenstrual cramps basically are painful sensations that affect 84.1% of women right before or/and during a menstrual period. You can also call them Painful periods or dysmenorrhea in medical terms. The pain can just be mild or annoying but sometimes, it can be severe or even extreme! The good news is that through this article you will get the most recent medical opinion on the management of menstrual cramps. \r\n<br><br>\r\n\r\nUsually, girls see their first menses between 9 to 16 years of age. Before or during menses, your body secrete chemicals called prostaglandins which cause uterine contractions for you to evacuate your uterus off the waste of unfertilized egg and destructed uterine wall. Those contractions during menses are normal but they can be painful. A girl with menstruation cramps can present with:\r\n<br><br>\r\n\r\nCramping in the lower belly, pain in back or thighs, diarrhea, nausea, headache, extreme tiredness, flu like illness and feeling belly fullness. Most women start to have painful periods in adolescence (4 to 5 years after first menses) and the pain decrease as women ages.  \r\n<br><br>\r\n\r\nCauses of menstruation cramps\r\n<br><br>\r\n\r\n84.1% of women reports that they had painful periods. Among them, 43.1% report that pain comes in every period while 41% say that pain comes in some periods but not in others. From researches, only 5% of women have severe to extreme painful periods. The release of Prostaglandins by the body alone cause contraction which can be painful even in healthy girls. However, we have 2 types of painful periods or menstrual cramps:\r\n<br><br>\r\n\r\n	Primary dysmenorrhea (Painful menses without any other disease): This constitute 90% of all cramps and is common in adolescents. It can be due to the structure of your pelvis, narrow cervix, abnormal uterus, ovaries or vagina structure. It can also be due to factors that you inherit from your parents like much Prostaglandins hormone. If your mother had cramps, there is a 40% risk that you will have cramps too. This pain is not continuous; it comes and goes many times during menses. It is usually followed by nausea, headache or vomiting. \r\n<br><br>\r\n\r\n\r\n	Secondary dysmenorrhea (Painful menses due to an underlying disease). It usually affects women older than 20 years and the pain increase with age. It can be associated with painful sexual intercourse (dyspareunia), much bleeding episodes during cycle (polymenorrhea, metrorrhagia) or even infertility. We can have many diseases such as:\r\n	<br><br>\r\n\r\n	Endometriosis: It is the most common and it is when the tissue that should only grow in uterus grows outside of uterus like in ovaries which is painful\r\n<br><br>\r\n\r\n	Uterine fibroids or tumors which can bleed or increase pelvic pressure hence pain\r\n<br><br>\r\n\r\n	Intra-uterine devices used in contraception sometimes can cause pain especially during sex\r\n	<br><br>\r\n\r\n	Chronic pelvic pain due to sexually transmitted infections, uterine/bladder abnormalities, ovarian tumors, sexual or mental abuse and many other cause causing pain even when the girl is not in periods. \r\n\r\n<br><br>\r\n\r\n	Obstruction of blood vessels supplying uterus (ischemia)\r\n<br><br>\r\n\r\nIf you are treated against the underlying disease, this menstruation cramp will fade away!\r\n <br><br>\r\n\r\n\r\nWhat can I do to manage painful periods?\r\n<br><br>\r\n\r\nIf the pain is annoying, or is interfering with normal daily job, you can do any of the following to feel better:\r\n<br><br>\r\n\r\no	Take pain killers called Non-Steroidal Anti- Inflammatory Drugs (NSAIDs) like Ibuprofen or Naproxen because they prevent prostaglandins secretion thus stop all symptoms of painful periods. Talk to the pharmacist on how you will take them and take them as soon as bleeding start until 2 to 3 days. \r\n<br><br>\r\n\r\no	Take any hormonal birth control medications (pills, patch, vaginal ring, injection ) because they cause uterus lining to be thin hence no contraction or pain. You can use any or both first or this method to manage your dysmenorrhea. \r\n<br><br>\r\n\r\no	Apply a hot water bottle or heating pad (40 degrees Celsius) on your pelvis (lower part of the belly) gently as often as needed. You can combine this method with pain killers said above. \r\n<br><br>\r\n\r\no	Do physical exercises on regular basis, get enough rest and sleep.\r\n<br><br>\r\n\r\no	Avoid tobacco because it can cause blood vessels obstruction which can aggravate pain \r\n<br><br>\r\n\r\no	Wash your body using warm water, \r\n<br><br>\r\n\r\no	Consume vegetable, chicken, liver, eggs and other nutrients containing iron and Vitamin B9 to replace lost blood which could aggravate symptoms\r\n<br><br>\r\n\r\no	If all these fail, go to the hospital since your pain can be due to an underlying disease (secondary dysmenorrhea). The doctor will examine your vagina, cervix and uterus and ovaries physically or by imaging and will test for infections until the underlying disease is found and treated. \r\n<br><br>\r\n\r\no	At the hospital, the doctor can use electrical way of relieving the pain or through surgery uterine nerves can be cut hence abolishing or pain signals though not recommended now. \r\n\r\n. <br><br>', '', 0, 'stories.gif', '2020-01-18 06:01:12', '2020-01-18 06:21:46'),
(6, 'WHAT YOU SHOULD KNOW ABOUT MENSTRUAL CRAMPS', NULL, 'ENGLISH VERSION \r\n<br><br>\r\nMenstrual cramps basically are painful sensations that affect 84.1% of women right before or/and during a menstrual period. You can also call them Painful periods or dysmenorrhea in medical terms. The pain can just be mild or annoying but sometimes, it can be severe or even extreme! The good news is that through this article you will get the most recent medical opinion on the management of menstrual cramps. \r\n<br><br>\r\n\r\nUsually, girls see their first menses between 9 to 16 years of age. Before or during menses, your body secrete chemicals called prostaglandins which cause uterine contractions for you to evacuate your uterus off the waste of unfertilized egg and destructed uterine wall. Those contractions during menses are normal but they can be painful. A girl with menstruation cramps can present with:\r\n<br><br>\r\n\r\nCramping in the lower belly, pain in back or thighs, diarrhea, nausea, headache, extreme tiredness, flu like illness and feeling belly fullness. Most women start to have painful periods in adolescence (4 to 5 years after first menses) and the pain decrease as women ages.  \r\n<br><br>\r\n\r\nCauses of menstruation cramps\r\n<br><br>\r\n\r\n84.1% of women reports that they had painful periods. Among them, 43.1% report that pain comes in every period while 41% say that pain comes in some periods but not in others. From researches, only 5% of women have severe to extreme painful periods. The release of Prostaglandins by the body alone cause contraction which can be painful even in healthy girls. However, we have 2 types of painful periods or menstrual cramps:\r\n<br><br>\r\n\r\n	Primary dysmenorrhea (Painful menses without any other disease): This constitute 90% of all cramps and is common in adolescents. It can be due to the structure of your pelvis, narrow cervix, abnormal uterus, ovaries or vagina structure. It can also be due to factors that you inherit from your parents like much Prostaglandins hormone. If your mother had cramps, there is a 40% risk that you will have cramps too. This pain is not continuous; it comes and goes many times during menses. It is usually followed by nausea, headache or vomiting. \r\n<br><br>\r\n\r\n\r\n	Secondary dysmenorrhea (Painful menses due to an underlying disease). It usually affects women older than 20 years and the pain increase with age. It can be associated with painful sexual intercourse (dyspareunia), much bleeding episodes during cycle (polymenorrhea, metrorrhagia) or even infertility. We can have many diseases such as:\r\n	<br><br>\r\n\r\n	Endometriosis: It is the most common and it is when the tissue that should only grow in uterus grows outside of uterus like in ovaries which is painful\r\n<br><br>\r\n\r\n	Uterine fibroids or tumors which can bleed or increase pelvic pressure hence pain\r\n<br><br>\r\n\r\n	Intra-uterine devices used in contraception sometimes can cause pain especially during sex\r\n	<br><br>\r\n\r\n	Chronic pelvic pain due to sexually transmitted infections, uterine/bladder abnormalities, ovarian tumors, sexual or mental abuse and many other cause causing pain even when the girl is not in periods. \r\n\r\n<br><br>\r\n\r\n	Obstruction of blood vessels supplying uterus (ischemia)\r\n<br><br>\r\n\r\nIf you are treated against the underlying disease, this menstruation cramp will fade away!\r\n <br><br>\r\n\r\n\r\nWhat can I do to manage painful periods?\r\n<br><br>\r\n\r\nIf the pain is annoying, or is interfering with normal daily job, you can do any of the following to feel better:\r\n<br><br>\r\n\r\no	Take pain killers called Non-Steroidal Anti- Inflammatory Drugs (NSAIDs) like Ibuprofen or Naproxen because they prevent prostaglandins secretion thus stop all symptoms of painful periods. Talk to the pharmacist on how you will take them and take them as soon as bleeding start until 2 to 3 days. \r\n<br><br>\r\n\r\no	Take any hormonal birth control medications (pills, patch, vaginal ring, injection ) because they cause uterus lining to be thin hence no contraction or pain. You can use any or both first or this method to manage your dysmenorrhea. \r\n<br><br>\r\n\r\no	Apply a hot water bottle or heating pad (40 degrees Celsius) on your pelvis (lower part of the belly) gently as often as needed. You can combine this method with pain killers said above. \r\n<br><br>\r\n\r\no	Do physical exercises on regular basis, get enough rest and sleep.\r\n<br><br>\r\n\r\no	Avoid tobacco because it can cause blood vessels obstruction which can aggravate pain \r\n<br><br>\r\n\r\no	Wash your body using warm water, \r\n<br><br>\r\n\r\no	Consume vegetable, chicken, liver, eggs and other nutrients containing iron and Vitamin B9 to replace lost blood which could aggravate symptoms\r\n<br><br>\r\n\r\no	If all these fail, go to the hospital since your pain can be due to an underlying disease (secondary dysmenorrhea). The doctor will examine your vagina, cervix and uterus and ovaries physically or by imaging and will test for infections until the underlying disease is found and treated. \r\n<br><br>\r\n\r\no	At the hospital, the doctor can use electrical way of relieving the pain or through surgery uterine nerves can be cut hence abolishing or pain signals though not recommended now. \r\n\r\n. <br><br>', '', 0, 'stories.gif', '2020-01-18 06:01:13', '2020-01-18 06:23:46'),
(7, 'WHAT YOU SHOULD KNOW ABOUT MENSTRUAL CRAMPS', 'IBYO WAMENYA KU BIJYANYE NO KUBABARA MU GIHE CY’ IMIHANGO.', 'ENGLISH VERSION\r\n<br><br>\r\n\r\nWHAT YOU SHOULD KNOW ABOUT MENSTRUAL CRAMPS\r\n\r\nMenstrual cramps basically are painful sensations that affect 84.1% of women right before or/and during a menstrual period. You can also call them Painful periods or dysmenorrhea in medical terms. The pain can just be mild or annoying but sometimes, it can be severe or even extreme! The good news is that through this article you will get the most recent medical opinion on the management of menstrual cramps. \r\n<br><br>\r\n\r\nUsually, girls see their first menses between 9 to 16 years of age. Before or during menses, your body secrete chemicals called prostaglandins which cause uterine contractions for you to evacuate your uterus off the waste of unfertilized egg and destructed uterine wall. Those contractions during menses are normal but they can be painful. A girl with menstruation cramps can present with:\r\n<br><br>\r\n\r\nCramping in the lower belly, pain in back or thighs, diarrhea, nausea, headache, extreme tiredness, flu like illness and feeling belly fullness. Most women start to have painful periods in adolescence (4 to 5 years after first menses) and the pain decrease as women ages.  \r\n<br><br>\r\n\r\nCauses of menstruation cramps\r\n<br><br>\r\n\r\n84.1% of women reports that they had painful periods. Among them, 43.1% report that pain comes in every period while 41% say that pain comes in some periods but not in others. From researches, only 5% of women have severe to extreme painful periods. The release of Prostaglandins by the body alone cause contraction which can be painful even in healthy girls. However, we have 2 types of painful periods or menstrual cramps:\r\n<br><br>\r\n\r\n	Primary dysmenorrhea (Painful menses without any other disease): This constitute 90% of all cramps and is common in adolescents. It can be due to the structure of your pelvis, narrow cervix, abnormal uterus, ovaries or vagina structure. It can also be due to factors that you inherit from your parents like much Prostaglandins hormone. If your mother had cramps, there is a 40% risk that you will have cramps too. This pain is not continuous; it comes and goes many times during menses. It is usually followed by nausea, headache or vomiting. \r\n<br><br>\r\n\r\n\r\n	Secondary dysmenorrhea (Painful menses due to an underlying disease). It usually affects women older than 20 years and the pain increase with age. It can be associated with painful sexual intercourse (dyspareunia), much bleeding episodes during cycle (polymenorrhea, metrorrhagia) or even infertility. We can have many diseases such as:\r\n	<br><br>\r\n\r\n	Endometriosis: It is the most common and it is when the tissue that should only grow in uterus grows outside of uterus like in ovaries which is painful\r\n<br><br>\r\n\r\n	Uterine fibroids or tumors which can bleed or increase pelvic pressure hence pain\r\n<br><br>\r\n\r\n	Intra-uterine devices used in contraception sometimes can cause pain especially during sex\r\n	<br><br>\r\n\r\n	Chronic pelvic pain due to sexually transmitted infections, uterine/bladder abnormalities, ovarian tumors, sexual or mental abuse and many other cause causing pain even when the girl is not in periods. \r\n\r\n<br><br>\r\n\r\n	Obstruction of blood vessels supplying uterus (ischemia)\r\n<br><br>\r\n\r\nIf you are treated against the underlying disease, this menstruation cramp will fade away!\r\n <br><br>\r\n\r\nwritten by NDAYISHIMIYE MICK', 'KINYARWANDA VERSION \r\n<br><br>\r\nKubabara ni ikibazo abagore cyangwa abakobwa bagera kuri 84.1% bahura nacyo haba mu itangira ry’ imihango cyangwa mu gihe cy’ imihango nyirizina. Ububabare bushobora kuza ku kigero kiringaniye ku buryo bwakihanganirwa arikop bushobora no kuba ku rugero rukabije. Inkuru nziza ni uko binyuze muri iyi nyandiko, uramenya uburyo abaganga batangamo inama bwo kurwanya ububabare mu gihe cy’ imihango.\r\n<br><br>\r\nNi ibihe bimenyetso bijyana no kubabara mu gihe cy’ imihango?\r\n<br><br>\r\nMu busanzwe, umukobwa ajya mu mihango bwa mbere ari hagati y’ imyaka 9-16, imihango ikamara iminsi 3-7 buri kwezi. Mbere gato cyangwa mu gihe cy’ imihango nyirizina, umubiri w’ umukobwa usohora ibinyabutabire byitwa Prostaglandins aribyo bituma nyababyeyi ikorana imbaraga (ikaya) kugirango isohore imihango. Uko gukaya kwa nyababyeyi/umura biransanzwe kuri bose ariko kuri bambwe birabababaza cyane. Umukobwa ubabara mu mihango ashobora kugaragaza ibindi bimeneyetso nk’ ibi: \r\n<br><br>\r\n\r\nKubabara mu kiziba cy’ inda (ahagana hasi mu nda), kubabara mu matako cyangwa mu mugongo, guhitwa, iseseme, umunariro, indwara ijya kumera nk’ ibicurane ndetse no kumva watumbye (mu nda huzuriranye). Abagore benshi batangira kubabara mu gihe cy’imihango uhereye bakiri abangavu (hagati y’ imyaka 4 n’ 5 uhereye igihe baboneye imihango bwa mbere) ariko ubwo bubabare bukagenda bugabanuka uko bakura. \r\n<br><br>\r\n\r\nNi iki gitera kubabara mu gihe cy’ imihango?\r\n<br><br><br>\r\n\r\nAbagore bagera kuri 84.1% bavugako bigeze kubabara mu gihe cy’ imihango. Muri abo, 43.1% bavugako ububabare busa igihe cyose bari mu mihango mu gihe 41% bo bavugako babara mu gihe cy’ imihango imwe n’ imwe. Ubushakashatsi buvugako abagore 5% bonyine aribo babara ku buryo bukabije mu gihe cy’ imihango. Gusohora Prostaglandins k’ umubiri bituma imikaya ya nyababyeyi ukorana imbaraga bikaba byatera ububare no mu bagore/abakobwa badafite ubundi burwayi. Nyamara, hari amoko 2 yo kubabara mu gihe cy’ imihango:  \r\n<br><br>\r\n\r\n	Kubabara mu gihe cy’ imihango bidatewe n’ ubundi burwayi runaka: Ubu bwoko bwo kubabara bugize 90% byo kubabara mu gihe cy’ imihango kandi bwiganje mu bangavu. Bikunze guterwa n’ imiterere y’ umukobwa aho inkondo y’ umura cyangwa umura (nyababyeyi) ubwawo biba bitaraguka bihagije cyangwa imikorere itarakomera y’ imirerantanga ndetse no gufungana kw’ inda ibyara ndetse n’ umwenge w’ igitsina. Bishobora kandi guterwa n’ inkomoko aho usanga imiryango runaka igira Prostaglandins nyinshi. Niba Nyoko (Mama wawe) ababara mu gihe cy’ imihango, haba hari ibyago byinshi ko nawe uzababara mu gihe cy’ imihango. Ubu bubabare buza bugenda bukongera bukagaruka mu minsi y’ imihango ubundi akenshi hagakurikiraho kuruka, isesemi no kurwara umutwe. \r\n<br><br>\r\n\r\n\r\n	Kubabara mu gihe cy’ imihango bitewe n’ indwara runaka. Bikunze gufata abagore n’ abakobwa barengeje imyaka 20 kandi ububabare bukiyongera uko bagenda bakura. Usanga ibi bijyana no kubabara mu gihe bakora imibonano mpuzabitsina, kuva cyane mu gihe cy’ imihango, cyangwa kubona imihango inshuro irenze 1 mu kwezi ndetse n’ ubugumba kuri bamwe. Hari indwara nyinshi zishobora gutuma umuntu ababara mu gihe cy’ imihango harimo n’ izi: \r\n<br><br>\r\n\r\n	Endometriosis: Niyo ikunze gutera kubabara mu gihe cy’ imihango. Ni igihe uturemangingo two muri nyababyeyi twakuriye ahandi hatari muri nyababyeyi; urugero nko mu mirerantanga cyangwa mu miyoborantanga bityo bigatera ububabare. \r\n<br><br>\r\n\r\n	Ibibyimba byo mu mura nabyo bishobora kuva cyangwa bikongera ubucukike(Pressure) mu kiziba cy’ inda (Pelvis) bikaba byatuma umuntu ababara mu gihe cy’ imihango.\r\n<br><br>\r\n\r\n	Utwuma bashyira mu mura muri gahunda yo kuboneza urubyaro natwo dushobora gutera ububabare mu mihango cyangwa mu gihe cy’ imibonano mpuzabitsina. \r\n<br><br>\r\n \r\n	Ububabare karande buterwa n’ indwara zandurira mu mibonano mpuzabitsina, imiterere ya nyababyeyi, ibibyimba byo mu mirerantanga, ihohoterwa rishyingiye ku gitsina cyangwa ku ntekerezo nabyo bishobora gutera kubabara mu mihango. \r\n<br><br>\r\n\r\n	Kuba umura utabona amaraso ahagije nabyo byatuma umukobwa ababara mu gihe cy’ imihango. \r\n<br><br>\r\n\r\nIyo izi ndwara zivuwe, n’ ububabare zatezaga mu gihe cy’ imihango buhita bugenda. \r\n<br><br>\r\n\r\nyanditswe na NDAYISHIMIYE MICK', 1, 'menstrual-pain-3_grande.jpg', '2020-01-18 06:19:12', '2020-01-21 06:19:00'),
(8, 'BASIC MENSTRUAL CYCLE CALCULATION.', 'INSHAMAKE YOKUBARA UKWEZI K\'UMUGORE', 'The menstrual cycle is a highly regulated process in which your body prepare for pregnancy. During this process, the egg or female gamete grows and is released to be ready for fertilization with sperm once unprotected sexual intercourse is done hence pregnancy. In this process also, your womb or uterus become thick, nutritious and soft to house or accommodate the fetus (unborn baby) that could be formed. When there is no unprotected sexual intercourse, the non-fertilized egg plus the prepared uterus will be shaded out as bloody waste (what we call menses or periods). \r\n<br><br>\r\n\r\nThe menstrual cycle differs from girls to girls. Some have regular cycle (where menses comes after a specific number of days) while 30% of girls have irregular cycle (where menses comes in a non-predictable manner). Of those having regular cycle, some can have a cycle of 23 days while others can have a cycle having up to 35 days! The rest have cycles whose days are between 23-35. \r\n<br><br>\r\n\r\nImportant calculations in menstrual cycle:\r\n<br><br>\r\n\r\n	By convention, the first day you see menses is the first day of your cycle\r\n<br><br>\r\n\r\n	For regular cycles, the date of release of egg (ovulation) is always 14 days prior to the next cycle\r\n<br><br>\r\n\r\nFor girls with regular cycles\r\n<br><br>\r\n\r\n	Date of next menses = 1st day of menses + Number of days that make up her cycle\r\n	Date of ovulation = Date of next menses - 14 days\r\n	Fertility period (the range of days in which when you do unprotected sexual intercourse, there is a high chance of pregnancy) = 3 days prior to 3 days post-date of ovulation \r\n<br><br>\r\n\r\nExample: Josiane has regular menstrual cycle of 32 days. The 1st date of her menses were on September 26, 2019. Calculate her fertility period. \r\n<br><br>\r\n\r\n•	Date of next menses = Sep 26 + 32 days = Sep 58 (then remove 30 days’ maximum of September) = October 28, 2019.\r\n•	Date of ovulation = October 28, 2019 – 14 days = October 14, 2019\r\n•	Josiane’s fertility period = From October 14 – 3 days to October 14 + 3 days = From October 11 to October 17, 2019.\r\n<br><br>\r\n\r\nFor girls with irregular cycle, they need to record over a period of 8 months their longest and their shorted cycles. The fertility period is from short cycle – 18 to the long cycle -11.\r\n<br><br>\r\n\r\nExample: Gisele has irregular menstruation cycle. Her shortest cycle is 25 days while the longest is 28 days. If She had menses starting today September 26, 2019, what is her fertility period. \r\n<br><br>\r\n\r\nShort cycle – 18 = 25-18 = 7th day which is October 2, 2019 (you can look on your calendar)\r\n<br><br>\r\n\r\nLong cycle – 11 = 28-11 = 17th day which is October 12, 2019. \r\n <br><br>\r\n\r\nThus, Gisele’s fertility period is from October 2, 2019 to October 12, 2019 \r\n\r\nWritten by NDAYISHIMIYE MICK', 'br><br>\r\nKINYARWANDA VERSION \r\n\r\n\r\n<br><br>\r\nUkwezi k’ umugore ni urukurikirane rw’ iminsi runaka umubiri w’ umugore uba witegura gusama. Muri icyo gihe, intangangore irakorwa, igakura ndetse ikarekurwa kugirango yitegure kuba yahura n’ intangangabo igihe cyose habayeho imibonano mpuzabitsina idakingiye. Muri iki gihe kandi, nyababyeyi irabyimba ikitegura kuzakira umwana. Iyo imibonano mpuzabitsina idakingiye idakozwe, intangangore ndetse n’ ahabyimbye ho mu mura (nyababyeyi) haracika bigasohoka nk’ imyanda y’ amaraso aribyo twita imihango. \r\n<br><br>\r\n\r\nAbakobwa bose ntibagira amaezi areshya. Bamwe bagira ukwezi kudahindagurika (buri gihe nyuma y’iminsi runaka y’ ukwo kwezi abona imihango) mu gihe abandi bagira ukwezi guhindagurika aho imihango iza mu gihe gisa naho gitunguranye. Ku bakobwa bagira ukwezi kudahindagurika, ukwezi gushobra kugira iminsi hagati ya 23 kugeza 35. \r\n<br><br>\r\n\r\nImibare y’ ingenzi yifashishwa mu kubara ukwezi k’ umugore:\r\n<br><br>\r\n\r\n	Muri rusange, umunsi wa mbere ubonye imihango uba ari umunsi wawe wa mbere w’ ukwezi\r\n	Mu mezi adahindagurika, itariki yo gusohoka kw’ intangangore buri gihe ni iminsi 14 mbere y’ itangira ry’ ukundi kwezi\r\n<br><br>\r\n\r\nKu bakobwa bafite amezi adahindagurika:\r\n<br><br>\r\n\r\n	Itariki y’ imihango ikurikira = Umunsi wa mbere wabonyeho imihango y’ ukwezi gushize + iminsi igze ukwezi kwe\r\n	Itariki yo kurekurwa kw’ intangangore = Itariki y’ imihango ikurikira – iminsi 14\r\n	Iminsi y’ uburumbuke (iminsi runaka aho uramutse ukoze imibonano mpuzabitsina ashobora gusama) = iminsi 3 mbere na nyuma y’ umunsi wo gusohoka/kurekurwa kw’ intangangore\r\n<br><br>\r\n\r\nUrugero: Josiane agira ukwezi kudahindagurika kw’ iminsi 32. Umunsi wa mbere aheruka kubona imihango byari kuwa 26th/09/2019. Shaka igihe cye cy’ uburumbuke. \r\n<br><br>\r\n\r\n•	Itariki azaboneraho imihango ikurikira = 26th/09 + iminsi 32 = 58th/09 (none ukuremo iminsi 30 igize ukwezi kwa cyenda) = 28th Ukwakira 2019 (28th/10/2019).\r\n•	Itariki yo kurekurwa kw’ intangangore = 28th/10 – iminsi 14 = 14th Ukwakira 2019\r\n•	Igihe cy’ uburumbuke cya Josiane = 14th/10 – iminsi 3 kugeza kuri 14th/10 + iminsi 3 = Kuva kuwa 11 kugeza kuwa 17 Ukwakira 2019 (11-17th /10/2019)\r\n<br><br>\r\n\r\nKu bakobwa bagira ukwezi guhindagurika, baba basabwa gusuzuma iminsi igize ukwezi kwabo kugeza mu gihe cy’ amezi 8 kugirango bamenye ukwezi kwabo kunini n’ ukwezi kwabo guto. Iminsi y’ uburumbuke iba iri hagati y’ ukwezi guto – 18 kugeza k’ ukwezi kunini – 11. \r\n<br><br>\r\n\r\nUrugero: Gisele agira ukwezi guhindagurika. Yarasuzumye asanga ukwezi kwe guto ari iminsi 25 naho naho ukunini kukagira iminsi 28. Niba yarabonye imihango kuwa 26th/09/2019, shaka igihe cye cy’ uburumbuke.  \r\n<br><br>\r\n\r\nUkwezi guto – 18 = iminsi 25 – 18 = Umunsi wa 7 (nkuko biri kuri Karindali ubwo ni ku itariki 2nd Ukwakira 2019 ubaze uhereye igihe aherukira kubona imihango) \r\n<br><br>\r\n\r\nUkwezi kunini – 11 = iminsi 28 – 11 = Umunsi wa 17 uhereye igihe yaboneye imihango. Ubwo niu ku itariki 12 Ukwakira 2019. \r\n<br><br>\r\n\r\nUbwo rero igihe cy’ uburumbuke cya Gisele ni ukuva kuwa 2nd/10/2019 kugeza kuwa 12th/10/2019\r\n<br><br>\r\nYANDITSWE NA  NDAYISHIMIYE MICK', 1, 'menstrual-cycle-calculator-665x285.jpg', '2020-01-18 06:43:00', '2020-01-21 06:21:19'),
(9, 'WHAT CAN I DO TO MANAGE PAINFUL PERIODS?', 'NI IKI NAKORA NGO NGABANYE CYANGWA MPAGARIKE UBUBABARE MU GIHE CY’ IMIHANGO?', 'ENGLISH VERSION\r\n<br><br>\r\n\r\nIf the pain is annoying, or is interfering with normal daily job, you can do any of the following to feel better:\r\n<br><br>\r\n\r\no	Take pain killers called Non-Steroidal Anti- Inflammatory Drugs (NSAIDs) like Ibuprofen or Naproxen because they prevent prostaglandins secretion thus stop all symptoms of painful periods. Talk to the pharmacist on how you will take them and take them as soon as bleeding start until 2 to 3 days. \r\n<br><br>\r\n\r\no	Take any hormonal birth control medications (pills, patch, vaginal ring, injection ) because they cause uterus lining to be thin hence no contraction or pain. You can use any or both first or this method to manage your dysmenorrhea. \r\n<br><br>\r\n\r\no	Apply a hot water bottle or heating pad (40 degrees Celsius) on your pelvis (lower part of the belly) gently as often as needed. You can combine this method with pain killers said above. \r\n<br><br>\r\n\r\no	Do physical exercises on regular basis, get enough rest and sleep.\r\n<br><br>\r\n\r\no	Avoid tobacco because it can cause blood vessels obstruction which can aggravate pain \r\n<br><br>\r\n\r\no	Wash your body using warm water, \r\n<br><br>\r\n\r\no	Consume vegetable, chicken, liver, eggs and other nutrients containing iron and Vitamin B9 to replace lost blood which could aggravate symptoms\r\n<br><br>\r\n\r\no	If all these fail, go to the hospital since your pain can be due to an underlying disease (secondary dysmenorrhea). The doctor will examine your vagina, cervix and uterus and ovaries physically or by imaging and will test for infections until the underlying disease is found and treated. \r\n<br><br>\r\n\r\no	At the hospital, the doctor can use electrical way of relieving the pain or through surgery uterine nerves can be cut hence abolishing or pain signals though not recommended now\r\n<br><br>', 'KINYARWANDA VERSION\r\n<br><br>\r\nNiba ubabara mu gihe cy’ imihango ku buryo bikubuza gukora indi mirimo, ushobora gukora bimwe muri ibi bikurikira kugirango wumve umeze neza: \r\n<br><br>\r\n\r\n\r\no	Fata imiti ivura ububabare iri mu bwoko bwa NSAIDs. Aha harimo iyitwa Ibuprofen cyangwa Naproxen kuko igabanya ikorwa ry’ ibyitwa Prostaglandins bityo bigahagarika ibimenyetso byose byo kubabara mu gihe cy’ imihango. Vigana na muganga wo muri Farumasi k’ uburyo uzajya ufata iyo miti kandi ujye uyifata nibura kuva imihango itangiye kugeza mu minsi 3. \r\no	Ushobora no gufata imiti yo kuboneza urubyaro ishingiye ku misemburo (ibinini, inshinge, utwuma two mu mura dukoranye imisemburo…) kuko byoroshya inkuta z’ umura bikagabanya gukaya ndetse n’ ububabare. \r\no	Fata mazi ashyushye cyangwa agatambaro gashyushye biringaniye (dogire 40) ugashyire mu kiziba cy’ inda (mu nda ahagana hasi) ukwo wumva ubikeneye. \r\no	Kora imyitozo ngororamubiri ku buryo buhoraho kandi uruhuke/usinzire bihagije\r\no	Irinde itabi kuko ritera amaraso kuvura rikanafunga imitsi igaburira nyababyeyi bityo bikongera ububabare. \r\no	Karaba umubiri n’ amazi y’ akazuyazi. \r\no	Fata igaburo ririmo imboga, umwijima, amagi cyangwa izindi ntungamubiri nk’ ubutare bwa Fer, Vitamini B9 kuko byongera amaraso bigasimbura amaraso yatakaye bikoroshya ububabare \r\no	Niba ibi byose twavuze haruguru bitabashije kworoshya cyangwa guhagarika ububabare bwawe, jya kwa muganga kuko ushobora kuba ufite ikibazo cyo kubabara mu gihe cy’ imihango bitewe n’ uburwayi runaka ufite. Muganga azareba imiterere y’ imyanya yawe myibarukiro, unyure mu cyuma, unasuzumwe indwara zandura kandi uhabwe imiti.\r\no	Kwa muganga, Muganga ashobora gukoresha uburyo bw’ amashanyarazi avura ububabare, ashobora kukubaga, gukuraho imitsi runaka cyangwa nyababyeyi yose bitewe n’ uburwayi ufite.', 1, '5a549948c32ae6961a8b4fdf.jpg', '2020-01-18 06:56:50', '2020-01-21 06:23:19'),
(10, 'WHAT CAN I DO TO MANAGE PAINFUL PERIODS?	NI IKI NAKORA NGO NGABANYE CYANGWA MPAGARIKE UBUBABARE MU GIHE CY’ IMIHANGO?', NULL, 'ENGLISH VERSION\r\n<br><br>\r\nIf the pain is annoying, or is interfering with normal daily job, you can do any of the following to feel better:\r\n<br><br>\r\n\r\no	Take pain killers called Non-Steroidal Anti- Inflammatory Drugs (NSAIDs) like Ibuprofen or Naproxen because they prevent prostaglandins secretion thus stop all symptoms of painful periods. Talk to the pharmacist on how you will take them and take them as soon as bleeding start until 2 to 3 days. \r\n<br><br>\r\n\r\no	Take any hormonal birth control medications (pills, patch, vaginal ring, injection ) because they cause uterus lining to be thin hence no contraction or pain. You can use any or both first or this method to manage your dysmenorrhea. \r\n<br><br>\r\n\r\no	Apply a hot water bottle or heating pad (40 degrees Celsius) on your pelvis (lower part of the belly) gently as often as needed. You can combine this method with pain killers said above. \r\n<br><br>\r\n\r\no	Do physical exercises on regular basis, get enough rest and sleep.\r\n<br><br>\r\n\r\no	Avoid tobacco because it can cause blood vessels obstruction which can aggravate pain \r\n<br><br>\r\n\r\no	Wash your body using warm water, \r\n<br><br>\r\n\r\no	Consume vegetable, chicken, liver, eggs and other nutrients containing iron and Vitamin B9 to replace lost blood which could aggravate symptoms\r\n<br><br>\r\n\r\no	If all these fail, go to the hospital since your pain can be due to an underlying disease (secondary dysmenorrhea). The doctor will examine your vagina, cervix and uterus and ovaries physically or by imaging and will test for infections until the underlying disease is found and treated. \r\n<br><br>\r\n\r\no	At the hospital, the doctor can use electrical way of relieving the pain or through surgery uterine nerves can be cut hence abolishing or pain signals though not recommended now. \r\n\r\n. <br><br>\r\n\r\nKINYARWANDA VERSION\r\n<br><br>\r\nNiba ubabara mu gihe cy’ imihango ku buryo bikubuza gukora indi mirimo, ushobora gukora bimwe muri ibi bikurikira kugirango wumve umeze neza: \r\n<br><br>\r\n\r\n\r\no	Fata imiti ivura ububabare iri mu bwoko bwa NSAIDs. Aha harimo iyitwa Ibuprofen cyangwa Naproxen kuko igabanya ikorwa ry’ ibyitwa Prostaglandins bityo bigahagarika ibimenyetso byose byo kubabara mu gihe cy’ imihango. Vigana na muganga wo muri Farumasi k’ uburyo uzajya ufata iyo miti kandi ujye uyifata nibura kuva imihango itangiye kugeza mu minsi 3. \r\n<br><br>\r\no	Ushobora no gufata imiti yo kuboneza urubyaro ishingiye ku misemburo (ibinini, inshinge, utwuma two mu mura dukoranye imisemburo…) kuko byoroshya inkuta z’ umura bikagabanya gukaya ndetse n’ ububabare. \r\n<br><br>\r\no	Fata mazi ashyushye cyangwa agatambaro gashyushye biringaniye (dogire 40) ugashyire mu kiziba cy’ inda (mu nda ahagana hasi) ukwo wumva ubikeneye. \r\n<br><br>\r\no	Kora imyitozo ngororamubiri ku buryo buhoraho kandi uruhuke/usinzire bihagije\r\n<br><br>\r\no	Irinde itabi kuko ritera amaraso kuvura rikanafunga imitsi igaburira nyababyeyi bityo bikongera ububabare. \r\n<br><br>\r\no	Karaba umubiri n’ amazi y’ akazuyazi. \r\n<br><br>\r\no	Fata igaburo ririmo imboga, umwijima, amagi cyangwa izindi ntungamubiri nk’ ubutare bwa Fer, Vitamini B9 kuko byongera amaraso bigasimbura amaraso yatakaye bikoroshya ububabare \r\n<br><br>\r\no	Niba ibi byose twavuze haruguru bitabashije kworoshya cyangwa guhagarika ububabare bwawe, jya kwa muganga kuko ushobora kuba ufite ikibazo cyo kubabara mu gihe cy’ imihango bitewe n’ uburwayi runaka ufite. Muganga azareba imiterere y’ imyanya yawe myibarukiro, unyure mu cyuma, unasuzumwe indwara zandura kandi uhabwe imiti.\r\n\r\n<br><br>\r\no	Kwa muganga, Muganga ashobora gukoresha uburyo bw’ amashanyarazi avura ububabare, ashobora kukubaga, gukuraho imitsi runaka cyangwa nyababyeyi yose bitewe n’ uburwayi ufite. \r\n\r\nYanditswe na NDAYISHIMIYE MICK', '', 0, '5a549948c32ae6961a8b4fdf.jpg', '2020-01-18 07:06:26', '2020-01-21 05:58:14'),
(11, 'WHY IS IT IMPORTANT TO ABSTAIN?', 'KUKI KWIFATA ARI INGENZI?', 'Why is it important to abstain?\r\nKuki kwifata ari ingenzi ?\r\n\r\n<br><br>\r\nEnglish version\r\n<br><br>\r\n\r\nAbstinence is a self-enforced restraint from indulging in bodily activities that are widely experienced as giving pleasure. Most frequently,the term refers to sexual abstinence , or abstinence from alcohol or food. The practice can rise from religious prohibitions and practical considerations.\r\n<br><br>\r\n\r\n.It is very important for young woman to abstain in order to protect their emotional and physical health.Abstaining from sexual intercourse prevents you from early pregnancy and sexual transmitted diseases such as HIV/AIDS, Gonorrhea etc.\r\n<br><br>\r\nYoung women should abstain as a sign of self love, and this has a lot to do in  securing their dreams and goals. It is hard to achieve your dreams when you are fighting with the consequences of unprotected sex at such early age.but if abstainence is hard for you we recommend you to use other methods especially condom.\r\n\r\nWritten by SHARON MBABAZI', '<br><br><br>\r\nKinyarwanda version\r\n<br><br>\r\nKwifata nukwiha umurongo wo kutishora mubikorwa by’umubiri cyane cyane bigamije kwishimisha. Akenshi kwifata bikoreshwa mugusobanura kwifata kumibonano mpuza bitsina, cyangwa se kwifata mugukoresha ibisindisha ndetse n’amafunguro atandukanye. Kwitoza kwifata  bishobora guturuka kubunararibonye bw’umuntu kugiti cye, cyangwa se bikanaturuka kumbyizerere n’imyemerere.\r\n<br><br>\r\nNibyingenzi cyane kurubyiruko cyane cyane abakobwa kwitoza kwifata. Kuko bigira akamaro  kanini mukurinda amarangamutima ndetse n’ubuzima muri rusange. Kwifata mukwishora mumibonano mpuza bitsina  bikurinda mugutwara inda Imburagihe ndetse n’indwara zandurira mumibonano mpuza bitsina harimo , virusi itera Sida, Imitezi mburugu , hepatite nizindi nyinshi.\r\n<br><br>\r\n\r\nAbangavu bakwiye kwifata nk’ ikemenyetso cyo kwikunda, kandi ibi bifite byinshi bisobanuye mukurinda inzozi n’intego zabo. Biragoye cyane kugera kuntego wihaye urimo uhangana ninngaruka zokuba warakoze imibonano mpuzabitsina idakingiye kumyaka mike, Ariko iyo kwifata byanze turagushishikariza gukoresha ubundi buryo bwagufasha kurinda ubuzima bwawe, harimo gukoresha agakingirizo\r\n<br><br>\r\nYanditswe na SHARON MBABAZI', 0, '64620627_2289814827947058_9194641833514603166_n.jpg', '2020-01-21 06:03:56', '2020-01-21 06:24:42'),
(12, 'Why is it important to abstain?', 'Kuki  kwifata n\'ingenzi?', 'English version\r\n<br><br>\r\n\r\nAbstinence is a self-enforced restraint from indulging in bodily activities that are widely experienced as giving pleasure. Most frequently,the term refers to sexual abstinence , or abstinence from alcohol or food. The practice can rise from religious prohibitions and practical considerations.\r\n<br><br>\r\n\r\n.It is very important for young woman to abstain in order to protect their emotional and physical health.Abstaining from sexual intercourse prevents you from early pregnancy and sexual transmitted diseases such as HIV/AIDS, Gonorrhea etc.\r\n<br><br>\r\nYoung women should abstain as a sign of self love, and this has a lot to do in  securing their dreams and goals. It is hard to achieve your dreams when you are fighting with the consequences of unprotected sex at such early age.but if abstainence is hard for you we recommend you to use other methods especially condom.\r\n\r\nWritten by SHARON MBABAZI', '<br><br><br>\r\nKinyarwanda version\r\n<br><br>\r\nKwifata nukwiha umurongo wo kutishora mubikorwa by’umubiri cyane cyane bigamije kwishimisha. Akenshi kwifata bikoreshwa mugusobanura kwifata kumibonano mpuza bitsina, cyangwa se kwifata mugukoresha ibisindisha ndetse n’amafunguro atandukanye. Kwitoza kwifata  bishobora guturuka kubunararibonye bw’umuntu kugiti cye, cyangwa se bikanaturuka kumbyizerere n’imyemerere.\r\n<br><br>\r\nNibyingenzi cyane kurubyiruko cyane cyane abakobwa kwitoza kwifata. Kuko bigira akamaro  kanini mukurinda amarangamutima ndetse n’ubuzima muri rusange. Kwifata mukwishora mumibonano mpuza bitsina  bikurinda mugutwara inda Imburagihe ndetse n’indwara zandurira mumibonano mpuza bitsina harimo , virusi itera Sida, Imitezi mburugu , hepatite nizindi nyinshi.\r\n<br><br>\r\n\r\nAbangavu bakwiye kwifata nk’ ikemenyetso cyo kwikunda, kandi ibi bifite byinshi bisobanuye mukurinda inzozi n’intego zabo. Biragoye cyane kugera kuntego wihaye urimo uhangana ningaruka zokuba warakoze imibonano mpuzabitsina idakingiye ukiri muto, Ariko iyo kwifata byanze turagushishikariza gukoresha ubundi buryo bwagufasha kurinda ubuzima bwawe, harimo gukoresha agakingirizo\r\n<br><br>\r\n\r\nYanditswe na SHARON MBABAZI', 1, 'X5aT7e95Rb.jpg', '2020-01-21 06:13:17', '2020-01-21 06:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dukataze online', 'dukataze@gmail.com', NULL, '$2y$10$cVEHjxcBP6G7YzfV1qea6e03TbmS52XWDu3KIzQajvmsJFeFEjlgy', '7eEGQQ7BnojvW4TFJqdZP6NsPSZ9VMSVDecZJygy3Irjq0bY03svdl15qhU9', '2019-08-14 17:43:39', '2019-08-14 17:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gasabo exhibition', 'We are happy to be part of Gasabo district exhibition where our exhibition booth has been  visited by  Mayor of Gasabo district, Miss Rwanda 2019 and plenty young People who are willing to join us in our fight of ending teenage pregnancies in young Rwandan women', 'Dukataze (SAYE )_53689042_135533110835815_1362991884036428619_n.jpg', '1', '2020-01-15 16:49:40', '2020-01-15 16:49:40'),
(2, 'Kimisagara  community outreach', 'Today we have gathered youth in interactive discussions on the role of the youth in fighting teenage pregnancies. We were very glad to have students from ALU, Akilah institute, University of Rwanda and  AUCA university.', '_MG_9314.JPG', '1', '2020-01-18 02:43:04', '2020-01-18 02:43:04'),
(3, 'Gacuriro community outreach', 'With the topic entitled as \" The role of teen mums in fighting teenage pregnancies\" we had an amazing talk  at Gacuriro, where we brought together local leaders, former prostitutes, teen mums , members of Icyerekezo group  and other participants , with an aim of identifying together how a teen mum can take a lead in ensuring  that her fellow girl, will never experience what she went through. We thank Cladho for supporting this event.', '52872099_1386458898163751_8274803027089893781_n.jpg', '1', '2020-01-18 03:05:57', '2020-01-18 03:05:57'),
(4, 'Kepler commnity outreach', 'We had an amazing presentation with kepler students where we have clearly explained to them what dukataze program is all about and how they can join this fight of ending teenage pregnancies in Rwanda, through empowering young women, mentally, socially and economically. Special thank to Kepler Kigali campus for inviting us.', '67098484_2315196792077632_2463457594237720894_n.jpg', '1', '2020-01-18 03:11:50', '2020-01-18 03:11:50'),
(5, 'Dukataze community outreach at Dove global prep', 'We were extremely excited to interact with students at Dove global prep, where they were confident enough to share their views on the root causes of teenage pregnancies and what could be done to end it.The students had enough time to learn more about  dukataze program as one of the solutions of teenage pregnancy in Rwandan girls .', '75456981_115381306565823_3424559798002122752_o.jpg', '1', '2020-01-18 03:44:20', '2020-01-18 03:44:20'),
(6, 'Dukataze in youth conneckt Africa  summit 2019', 'We are  glad that our work has been featured in the opening video of  youth conneckt Africa summit 2019 , the biggest gathering of youth on the continent,  bringing together over 4, 500 delegates, including policymakers, business minds, young innovators and influencers.', '75552980_115391833231437_1117835079247200256_o.jpg', '1', '2020-01-17 20:56:06', '2020-01-18 03:56:06'),
(7, 'Dukataze at African union', 'Our founding CEO Amina Umuhoza has been one of the panelists at Africa union Education innovation expo that took place in Gaborone-Botswana 2019.  The theme of the day was entitled as  \"Expanding out-of-school girls horizons through digital transformation”.', '67319307_1178756992312399_4980306565224246283_n.jpg', '1', '2020-01-18 04:11:49', '2020-01-18 04:11:49'),
(8, 'African union digital education innovation exhibition', 'African youth indeed have answers to the problems that are being faced by Africans.We were happy that Dukataze online platform has well represented Rwanda , as a unique digital youth friendly solution of teenage pregnancy in Rwanda.', '73423396_115396376564316_1944029762993258496_o.jpg', '1', '2020-01-18 04:18:44', '2020-01-18 04:18:44'),
(9, 'Dukataze one of 2019 top 40 digital education innovation in Africa', 'African union has recognized our work by selecting dukataze online platform as one of 2019 top 40 digital education innovation in Africa.', '73213723_115396373230983_3122588782088421376_n.jpg', '1', '2020-01-18 04:23:35', '2020-01-18 04:23:35'),
(10, 'National period day in Nyamiyaga', 'We celebrated national period day in Nyamiyaga in Kamonyi district.Where we talked more about menstrual hygiene management  and the issue of teenage pregnancies. We ended our day by distributing sanitary pads to young girls who attended this occasion.', '72531606_2643105729085423_6313394722850522687_n.jpg', '1', '2020-01-18 04:41:34', '2020-01-18 04:41:34'),
(11, 'we are selected among 2019, social impact champions', 'Special thanks to Segal family foundation for selecting us among  2019 Rwanda\'s social impact champions.', '64298553_660426104381356_2580038785156775936_n.png', '1', '2020-01-18 04:45:17', '2020-01-18 04:45:17'),
(12, 'Graduation ceremony of EP program by WSHK', 'After 6 intensive  months receiving entrepreneurship support from westerwelle startup Haus kigali and its partners, today was our graduation day and we are grateful for the support given.', '71529576_416604772327864_481408877101822060_n.jpg', '1', '2020-01-18 04:51:50', '2020-01-18 04:51:50'),
(13, 'We are part of CMX program 2019', 'We were selected to be part of change maker exchange , a global collaboration platform for young social innovators. It gathers some of the world\'s most exciting change makers at impact retreats in beautiful spaces around the world for the exchange and co-creation of ideas. The  retreat that we have been selected to be part of , had took place on the shores of Indian ocean Zanzibar in Tanzania.', '67521139_688740858308091_5998655708694769681_n.jpg', '1', '2020-01-18 05:01:46', '2020-01-18 05:01:46'),
(14, 'We are selected among 2019 Tony Elumelu foundation entrepreneurss', 'Our social enterprise company  has been  selected among 2019 Tony Elumelu Entrepreneurs to receive the support aiming at  growing business operations and impact .', '67370695_1576493679151839_9101190757133320192_o.jpg', '1', '2020-03-29 19:10:59', '2020-03-29 17:10:59'),
(15, 'Mentorship award', 'Our CEO Miss Amina Umuhoza was honored to receive a mentorship award from 250Startups a tech incubation and acceleration program initiated by ICT chamber in collaboration with JICA, for her mentorship support.', 'Graduates-250startups.jpg', '1', '2020-05-17 03:50:31', '2020-05-17 03:50:31'),
(16, 'Youth connekt Africa 2019', 'Our story has been featured in the opening video of  2019 Youth connekt Africa Summit , that has  gathered 10,000 youth from different countries, and high-level delegates and stakeholders involved in youth development. The aim of YCA 2019 was to discuss policies, programs and partnerships and formulating actions that can nurture and develop the talents and abilities of  youth.  The theme for 2019 was “Boosting an Industrious Young Africa”.', '75552980_115391833231437_1117835079247200256_o.jpg', '1', '2020-05-17 04:38:12', '2020-05-17 04:38:12'),
(17, 'Project visit', 'We had an amazing moment with the  visitors that we were honoured to receive  from creative force   Sweden,as the local partner of My period is awesome project.', '83322244_153894262714527_7910666594806661120_o.jpg', '1', '2020-05-17 04:49:45', '2020-05-17 04:49:45'),
(18, 'Africa youth entrepreneurs summit 2020', 'Our founder and CEO Miss Amina umuhoza  has been invited as  a speaker for  Africa youth entrepreneurs summit that took place  Gaborone - Botswana, where she shared more about the Work of Saye  company Ltd / dukataze  and the role of digital transformation in the ecosystem.', '98161206_1859393260861878_292060632281251840_o.jpg', '1', '2020-05-17 04:55:19', '2020-05-17 04:55:19'),
(19, 'MPIA & Dukataze event', 'After 4 days of  an intensive workshop with My period is awesome team, we wrapped up the week by organising an event that Brought together various public figures, entrepreneurs,NGOs,artists,journalists and plenty young people to discuss how menstruation stigma can be fought in Rwandan community.', '90205793_195952098508743_1307600491164729344_o-2.jpg', '1', '2020-05-17 05:23:17', '2020-05-17 05:23:17'),
(20, 'International youth day 2020', 'In celebration of international youth day our founding CEO Miss Umuhoza Amina has been among the panelists where she contributed more on the discussions  that has been organized by  Never again Rwanda', 'EfQUINxXkAMDMLi.jpeg', '1', '2020-09-23 17:37:29', '2020-09-23 15:37:29'),
(21, 'BPN visit', 'we were honored to receive the country director of \r\nBPN Rwanda and the board member of Rwanda Development board, Madam Alice Nkuliyinka ,where we discussed more on how  to grow our  business side to sustain our social cause of fighting teenage pregnancies and menstrual stigma in the Rwandan community.', 'Eimx5GXXgAIwUYa.jpeg', '1', '2020-09-23 17:37:25', '2020-09-23 15:37:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `carrertrajectors`
--
ALTER TABLE `carrertrajectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_types`
--
ALTER TABLE `category_types`
  ADD PRIMARY KEY (`category_type_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repled_questions`
--
ALTER TABLE `repled_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`storie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carrertrajectors`
--
ALTER TABLE `carrertrajectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_types`
--
ALTER TABLE `category_types`
  MODIFY `category_type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `repled_questions`
--
ALTER TABLE `repled_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `storie_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
