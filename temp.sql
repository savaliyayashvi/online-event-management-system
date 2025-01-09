-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 01:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ms_tb`
--

CREATE TABLE `admin_ms_tb` (
  `Admin_id` int(5) NOT NULL,
  `Admin_name` varchar(20) NOT NULL,
  `Admin_Email_id` varchar(30) NOT NULL,
  `Admin_Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area_ms_tb`
--

CREATE TABLE `area_ms_tb` (
  `Area_id` int(5) NOT NULL,
  `Area_name` varchar(20) NOT NULL,
  `City_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_ms_tb`
--

INSERT INTO `area_ms_tb` (`Area_id`, `Area_name`, `City_id`) VALUES
(1, 'Maninagar', 1),
(2, 'Ghodasar', 5),
(6, 'Maninagar', 2),
(7, 'Ghodasar', 2),
(9, 'Isanpur ', 1),
(10, 'Vastral', 1),
(11, 'Narol', 1),
(12, 'Naroda', 1),
(13, 'Navrangpura', 1),
(14, 'Chandkheda02', 1),
(15, 'Ranip', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `package_id` int(11) NOT NULL DEFAULT 0,
  `package_price` varchar(255) DEFAULT NULL,
  `is_user_employe` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cart_id`, `user_id`, `package_id`, `package_price`, `is_user_employe`) VALUES
(1, 1, 4, '28000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_ms_tb`
--

CREATE TABLE `category_ms_tb` (
  `Category_id` int(5) NOT NULL,
  `Category_name` varchar(20) NOT NULL,
  `veg_price` int(11) DEFAULT NULL,
  `non_veg_price` int(11) DEFAULT NULL,
  `room_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_ms_tb`
--

INSERT INTO `category_ms_tb` (`Category_id`, `Category_name`, `veg_price`, `non_veg_price`, `room_price`) VALUES
(1, 'Birthday ', 250, 500, 1000),
(3, 'Ring Ceremony ', 500, 550, 1000),
(5, 'Baby Shower', 250, 300, 1000),
(7, 'Wedding ', 1500, 2000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `city_ms_tb`
--

CREATE TABLE `city_ms_tb` (
  `City_id` int(5) NOT NULL,
  `City_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city_ms_tb`
--

INSERT INTO `city_ms_tb` (`City_id`, `City_name`) VALUES
(1, 'Ahmedabad '),
(4, 'Vadoadara'),
(5, 'Surat'),
(6, 'Bhavnagar');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `customer_id` int(5) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_addresss` varchar(300) NOT NULL,
  `customer_email_id` varchar(50) NOT NULL,
  `customer_mob_no` bigint(10) NOT NULL,
  `customer_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`customer_id`, `customer_name`, `customer_addresss`, `customer_email_id`, `customer_mob_no`, `customer_password`) VALUES
(1, 'nisha', 'demo', 'nis@gmail.com', 1023456058, 'nis123'),
(2, 'prachi shah', '21 jay managl park sos , Hatkeswar, Ahemedabad', 'prachi07@gmail.com', 9856231256, 'Prachi07'),
(3, 'prachi shah', '21 jay managl park sos , Hatkeswar, Ahemedabad', 'prachi07@gmail.com', 9856231256, 'Prachi07');

-- --------------------------------------------------------

--
-- Table structure for table `custom_tbl`
--

CREATE TABLE `custom_tbl` (
  `custom_id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `Event_id` int(5) NOT NULL,
  `custom_details` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custom_tbl`
--

INSERT INTO `custom_tbl` (`custom_id`, `customer_id`, `Event_id`, `custom_details`) VALUES
(1, 1, 1, 'aaaaaaaaaaaaaaaaaaa'),
(5, 1, 1, 'hey'),
(8, 2, 2, 'hey ,,,,,'),
(9, 0, 1, 'hey ,,,,,'),
(10, 0, 1, 'hey prachi '),
(11, 1, 3, 'hey prachi '),
(12, 2, 7, 'hey prachi 000'),
(13, 7, 7, 'hey prachi '),
(15, 2, 9, '2134'),
(16, 1, 10, 'Veg Food'),
(18, 1, 1, 'hey ,,,,,'),
(19, 7, 7, 'sdsadsa'),
(20, 0, 7, 'sdsadsa'),
(21, 4, 4, 'hey prachi 0000000000000000'),
(22, 0, 4, 'hey prachi 0000000000000000'),
(23, 4, 4, 'hey prachi 0000000000000000'),
(24, 0, 4, 'hey prachi 0000000000000000');

-- --------------------------------------------------------

--
-- Table structure for table `employee_ms_tb`
--

CREATE TABLE `employee_ms_tb` (
  `Employee_id` int(5) NOT NULL,
  `Employee_name` varchar(20) NOT NULL,
  `Employee_Desg` varchar(20) NOT NULL,
  `Employee_Email_id` varchar(30) NOT NULL,
  `Employee_Mobile_no` int(10) NOT NULL,
  `Address` varchar(160) NOT NULL,
  `Employee_Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_ms_tb`
--

INSERT INTO `employee_ms_tb` (`Employee_id`, `Employee_name`, `Employee_Desg`, `Employee_Email_id`, `Employee_Mobile_no`, `Address`, `Employee_Password`) VALUES
(1, 'aakash', 'wedding planner', 'aksh@gmail.com', 2147483647, 'mithakali six road navarangpura', 'aks123'),
(2, 'krish', 'Wedding Planner', 'krish@gmail.com', 2147483647, 'Maninagar ahmedabad', 'Hopes123'),
(3, 'Rakesh', 'BirthDay Planneer', 'rakesh27@gmail.com', 2147483647, '85, jay mangal park society near pinky juice\r\nbhaipura road ,hatkeshwar , maninagar', 'Rakesh23'),
(4, 'Vivek Makwana ', 'BirthDay Planneer', 'vivek1331@gmail.com', 2147483647, ' 48 Manek Bag socitey Nr Raj Baug socitey ghodasar ahmedabad', 'Vivek133'),
(5, 'Dhwanit', 'Event Specialist', 'dhwanit22@gmail.com', 2147483647, '54,kameshvar park society ghodasar Ahmedabad', 'Dhwanit1'),
(6, 'Rehant Patil', 'Commmunity Manager', 'rehant234@gmail.com', 2147483647, '48 Punit Nagar socitey Nr Kamla  socitey ghodasar ahmedabad', 'Rehant56'),
(7, 'Janmejay  Chauhan', 'Event Manager', 'janmejay@gmail.com', 2147483647, 'Secto-5, New Shriji Nagar, Nr, Swaminarayan Temple, 141, Swaminarayan High School, Nava Vadaj, Ahmedabad, Gujarat · ~9 km', 'Janu677B');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_tbl`
--

CREATE TABLE `employee_salary_tbl` (
  `emp_sal_id` int(5) NOT NULL,
  `Employee_id` int(5) NOT NULL,
  `scheduling_month` date NOT NULL,
  `payment_date` date NOT NULL,
  `Amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_salary_tbl`
--

INSERT INTO `employee_salary_tbl` (`emp_sal_id`, `Employee_id`, `scheduling_month`, `payment_date`, `Amount`) VALUES
(1, 1, '2023-02-16', '2023-02-24', 15000),
(3, 2, '2023-02-24', '2023-06-09', 150000),
(5, 4, '2023-06-07', '2023-07-08', 20000),
(6, 7, '2023-09-15', '2023-10-03', 22000),
(7, 6, '2023-07-06', '2023-08-02', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `employee_schedule_tbl`
--

CREATE TABLE `employee_schedule_tbl` (
  `Employee_Sch_id` int(5) NOT NULL,
  `Employee_id` int(5) NOT NULL,
  `Event_Id` int(5) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_schedule_tbl`
--

INSERT INTO `employee_schedule_tbl` (`Employee_Sch_id`, `Employee_id`, `Event_Id`, `Date`) VALUES
(1, 1, 0, '0000-00-00'),
(2, 1, 0, '0000-00-00'),
(3, 1, 1, '2023-02-09'),
(4, 2, 1, '2023-02-17'),
(5, 1, 1, '2023-02-02'),
(6, 1, 1, '2023-03-09'),
(7, 1, 3, '2023-02-24'),
(8, 2, 3, '2023-02-26'),
(10, 1, 7, '2023-03-09'),
(11, 3, 8, '2023-03-08'),
(12, 6, 6, '2023-06-30'),
(13, 4, 12, '2023-05-19'),
(14, 5, 7, '2023-08-23'),
(15, 7, 9, '2023-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `event_photo_tb`
--

CREATE TABLE `event_photo_tb` (
  `Event_photo_id` int(7) NOT NULL,
  `Event_photo_name` varchar(20) NOT NULL,
  `Event_photo` varchar(30) NOT NULL,
  `Event_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_photo_tb`
--

INSERT INTO `event_photo_tb` (`Event_photo_id`, `Event_photo_name`, `Event_photo`, `Event_id`) VALUES
(1, 'Amazing wedding', 'OIP01.jpg', 1),
(3, 'Ring Ceremony', 'Wedding2.jfif', 3),
(5, 'Wedding', 'wedding-01.jpg', 3),
(6, 'Birthday', 'Birthday1.jfif', 7),
(7, 'Baby  Shower', 'Baby4.jfif', 10),
(8, 'Baby Shower', 'Baby6.jfif', 9),
(9, 'Birthday', 'Birthday3.jfif', 7),
(10, 'Ring Ceremony', 'Ring6.jpg', 12),
(11, 'Ring Ceremony', 'Ring7.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `event_tb`
--

CREATE TABLE `event_tb` (
  `Event_id` int(5) NOT NULL,
  `Event_name` varchar(20) NOT NULL,
  `Details` varchar(450) NOT NULL,
  `Category_id` int(5) NOT NULL,
  `venue_type` varchar(100) NOT NULL,
  `veg_food` varchar(50) NOT NULL,
  `non_veg_food` varchar(50) NOT NULL,
  `room_count` varchar(20) NOT NULL,
  `parking_space` varchar(50) NOT NULL,
  `catering_type` varchar(110) NOT NULL,
  `Area_id` int(5) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Mobile_no` bigint(10) NOT NULL,
  `Event_date` date NOT NULL,
  `Person_capacity` int(8) NOT NULL,
  `DJ` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_tb`
--

INSERT INTO `event_tb` (`Event_id`, `Event_name`, `Details`, `Category_id`, `venue_type`, `veg_food`, `non_veg_food`, `room_count`, `parking_space`, `catering_type`, `Area_id`, `Address`, `Mobile_no`, `Event_date`, `Person_capacity`, `DJ`) VALUES
(1, 'Birthday', ' We use to do events like all type of Birthday Parties, Baby Shower, Kitty Parties, Corporate Events, Pet\'s Birthday Party, Formal Get-together, …', 1, 'castle', '1000 per plate', '1500 per plate', '800 rooms', 'outdoor available', 'availabe', 13, ' 601, Pushtiheights, Opp. Shivam Snacks, Gurukul Road, Ahmedabad, Gujarat 380052', 6235847995, '2020-01-22', 450, 'In house DJ availabl'),
(3, 'Ring Ceremony', ' ', 3, 'In Door', '200 per plate', '250 per plate', 'Unavailable', 'Unavailable', 'In house catering only', 1, ' ', 6352469221, '0008-10-20', 100, 'In house DJ availabl'),
(5, 'The Wed Project', '                                                                                                                                                                                                                                                                                                                                                                                                 They provide  exquisite views along with opulent hospitality maki', 7, 'Hotel', '1200 per plate', '1500 per plate', '150 rooms', 'outdoor available', 'In house catering', 1, '                     \r\nWorli, Mumbai\r\n(View on Map)\r\nNo. 11, Khan Abdul Gaffar K', 7896587569, '2012-10-22', 500, 'In house DJ availabl'),
(6, 'Birthday', ' This business is working in the following industry: Retail of toys and games.\r\n\r\nName: Guddu Birthday, Baby Shower, 1st Birthday Decoration & Christmas\r\n\r\nEngaged in: Retail of toys and games\r\n\r\nSector:  Shopping »  Retail of toys and games\r\n\r\nIndustry: Retail sale of games and toys in specialized stores\r\n\r\nISIC Codes  4764', 1, 'Resort', '300 per plate', '450 per plate', '3-4 rooms available', 'outdoor available', 'availabe', 14, ' Sarvodaya Nagar, 40/316, Ahmedabad, Gujarat 380026 ', 7548965478, '0008-10-22', 250, 'In house DJ availabl'),
(7, 'Sweet Home Weddings', '       located in Ranchi, Midwaay Resort, Patratu is a well designed wedding venue that serves as the epitome of splendour and regality for your family and wedding guests. Midwaay Resort, Patratu is a wedding venue that is great to host multiple pre wedding and wedding celebrations. This gorgeous property sits in a great location and makes it worthwhile to choose this impressive venue. They are also widely reputed for their professional and warm ', 7, 'Hotel', '450 per plate', '500 per plate', '500 rooms', 'outdoor available', 'availabe', 1, '    \r\nAshok Nagar, Ahmedabad\r\n(View on Map)\r\nMidwaay, Talatar. Betimore, Patratu', 8866249644, '2020-01-22', 1000, '8000'),
(9, 'Baby Shower', ' Whether you\'re the host or parent-to-be, this list can help you gather what you need for a great baby shower.\r\nBabylist editors love baby gear and independently curate their favorite products to share with you. If you buy something through links on our site, Babylist may earn a commission.', 5, 'In Door', '300 per plate', '320 per plate', 'Unavailable', 'Unavailable', 'In house catering only', 1, ' 27, Shubh (Vastral) Co Op Society (Labh Ghar Swaminarayan Gurukul School, Niran', 8658745896, '2012-10-22', 100, 'In house DJ availabl'),
(10, 'Baby Shower', 'It’s totally up to you whether your baby shower is before or after your baby arrives, the proximity to baby’s arrival date, or if you have a shower at all.\r\n\r\nCreate your baby registry\r\nYou may have started your registry already, in which case, good for you for getting on that early! Your registry doesn’t necessarily have to be finished at this point, but you should feel pretty good about what’s on there by the time your baby shower invites go ou', 5, 'Hotel', '400 per plate', '450 per plate', '50 rooms', 'There is sufficient parking available', 'availabe', 7, ' 23, Behind Shastri Stadium, Soni ni Chali, Chitrakut Society, Bapunagar, Ahmeda', 7766548922, '0008-10-22', 150, 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `package_ms_tbl`
--

CREATE TABLE `package_ms_tbl` (
  `package_id` int(11) NOT NULL,
  `category_id` int(5) NOT NULL,
  `venue_type` varchar(30) NOT NULL,
  `rooms` bigint(10) NOT NULL,
  `person_capacity` bigint(10) NOT NULL,
  `price` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_tbl`
--

CREATE TABLE `package_tbl` (
  `package_id` int(5) NOT NULL,
  `package_name` varchar(20) NOT NULL,
  `package_details` varchar(200) NOT NULL,
  `package_price` float NOT NULL,
  `Event_id` int(11) NOT NULL,
  `ven_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_tbl`
--

INSERT INTO `package_tbl` (`package_id`, `package_name`, `package_details`, `package_price`, `Event_id`, `ven_id`) VALUES
(2, 'Golden Package', 'includes Balloon decoration  \r\nlimited beverages\r\n                 \r\n                                            ', 5000, 1, 1),
(3, 'Silver Package', 'Decoration\r\n Balloon Decoration upto 500 of balloons. \r\n1 Happy birthday bunting, Balloon bunches at entrance, Cake table with balloons, Balloon bunches on seiling and rooms.\r\nUp to 10 no of kids\r\n   ', 18000, 1, 2),
(4, 'Platinum Package', 'Decoration - Balloon Decoration upto 1000 of balloons. 1 Happy birthday bunting as per theme, Balloon Arche at entrance as per theme, Cake table with balloons,Balloon bunches on seiling and rooms,    ', 28000, 1, 3),
(5, 'Basic Package', 'Package includes Balloon Decoration upto 300 of balloons. \r\nOne Game One Activity', 4500, 1, 4),
(6, 'Golden Package', 'Starting price of room\r\n5500 per room 3 persons maximum (Extra sheet includes charges 1500)\r\n\r\nPlate Price\r\n1,200  per plate (taxes extra) Veg price\r\n\r\n1,500  per plate (taxes extra) Non Veg price    ', 500000, 7, 1),
(7, 'Silver Package', 'Food and décor provided by the venue\r\nAll vegetarian food available\r\nMultiple banquet hall is available.\r\nParking for 250 vehicles\r\n35 rooms available @ Rs 3000-4000\r\nNo alcohol allowed \r\nNon-cancella', 80000, 3, 5),
(8, 'Platinum Package', 'Lawn for outdoor events\r\nSpacious banquet hall\r\nOpen decoration\r\nFood and décor by the venue\r\nNon-vegetarian food is served\r\nParking space for around 400 vehicles\r\n178 rooms available @ Rs 7000-8000 p', 500000, 7, 4),
(9, 'Basic Package', 'Venue: INR 1,00, 000 to INR 3,00,000.\r\n Decoration: INR 1,50,000 to INR 3,00,000.\r\n Catering: INR 600- 1,000 Per Plate. \r\nBridal/Groom\'s attire: INR 50,000 – 1,00,000.                               ', 100000, 5, 6),
(10, 'Basic Package', 'MIN - 100 PEOPLE\r\n MAX - 500 PEOPLE  \r\nBOTH VEG & NON VEG\r\nBOTH INDOOR & OUTDOOR\r\n Veg -  375 + TaxNon Veg - 650 + Tax   \r\nThe seating capacity - 350 to 400 pax,\r\n car parking - 100,\r\n 2 AC Rooms, Kit', 50000, 3, 9),
(11, 'Golden Package', 'MIN - 50 PEOPLEMAX - 500 PEOPLE \r\nBOTH VEG & NON VEG\r\nBOTH INDOOR & OUTDOOR Veg -  1400 + TaxNon Veg - 1600 + Tax                  \r\nHALL\r\n7000 sq.ft. AC banquet hall\r\nLAWN\r\n4000 sq.ft. Lush green law', 80000, 3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_cat_tbl`
--

CREATE TABLE `vendor_cat_tbl` (
  `ven_cat_id` int(5) NOT NULL,
  `ven_cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_cat_tbl`
--

INSERT INTO `vendor_cat_tbl` (`ven_cat_id`, `ven_cat_name`) VALUES
(1, 'Catering'),
(2, 'Photographer'),
(4, 'Decorators'),
(5, 'Magician'),
(7, 'DJ Sounds'),
(8, 'Artist');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_det_tbl`
--

CREATE TABLE `vendor_det_tbl` (
  `ven_id` int(5) NOT NULL,
  `ven_photo` varchar(20) NOT NULL,
  `ven_name` varchar(20) NOT NULL,
  `ven_email_id` varchar(30) NOT NULL,
  `ven_mob_no` bigint(10) NOT NULL,
  `ven_cat_id` int(5) NOT NULL,
  `ven_address` varchar(160) NOT NULL,
  `ven_pass` varchar(10) NOT NULL,
  `ven_about` varchar(300) NOT NULL,
  `ven_available` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_det_tbl`
--

INSERT INTO `vendor_det_tbl` (`ven_id`, `ven_photo`, `ven_name`, `ven_email_id`, `ven_mob_no`, `ven_cat_id`, `ven_address`, `ven_pass`, `ven_about`, `ven_available`) VALUES
(1, 'Catering1.jfif', 'Rakesh', 'rakesh2@gmail.com', 7854589654, 1, '                                                                               Municipal School, B-162/1277, Near Khokhra Circle, Gujarat Housing Board, B/H, Kh', 'Qx123456', 'The Prince Group Of Events is an end to end wedding planning brand located in Jaipur. They have dedicated professionals with the best skills to create something new and unique. Efficiency and success is a habit of this passionate team who put their heart and soul in preparing for the big day with al', 'yes'),
(2, 'Catering2.jfif', 'Suresh', 'suresh8824@gmail.com', 9965478921, 1, '                                                                                                                                   20, Indraprasth Park, OPP, Su', 'Suresh24', 'Harmony eventz is a wedding planning company specializing in wedding decoration and planning. The team of kind and passionate individuals who put every ounce of effort to make your special day memorable not only for you but for everyone present there. They are devoted to imagining, planning, and exe', 'yes'),
(3, 'team-member-4.jpg', 'Vaibhav Patel', 'vaibhav21@gmail.com', 8978657654, 1, '\r\nGandhinagar, Gandhinagar\r\n(View on Map)\r\nHotel German Palace - Bhat, Ahmedabad, Gujarat, India', 'vai23@Pt', 'An especially sought-after main dining venues in Ahmedabad is Hotel German Palace. It was designed with the goal of offering a chic and great banqueting venue to accommodate the various needs of their clients. Whatever the size of the gathering, staff try to make every celebration a resounding succe', 'yes'),
(4, 'Photo5.jfif', 'Nagraj studio by Fur', 'mahesh@gmail.com', 8547624987, 2, '6, Muktajivan Estate, Nr Swaminarayan Wadi, Maninagar, Ahmedabad, Gujarat 380008 · ~2.7 km', 'Mahesh@1', 'NAGRAJ Studio by Furtografer has been shooting weddings for a few years now. They are based in Gandhinagar - Ahmedabad and even travel outstations to offer their services. They know their way around their equipment and create beautiful memories for their clients. They provided approx 150-200 edited ', 'yes'),
(5, 'Photo4.jfif', ' Digital Photo ', 'pankaj333@gmail.com', 7534568977, 2, 'Shop NO 7 Surbhi Park Society, Kharawala Factory, Ahmedabad, Gujarat 382443 · ~3.2 km', 'Pankaj@2', 'Dolphin Photography is a Professional Wedding & Portrait Photography venture based in Chandigarh. Having a tremendous experience of 7 years in the industry, they have been presenting a world full of beautiful moments and precious memories through their photographs. The company consists of a team of ', 'yes'),
(6, 'Decorator2.jfif', 'Sri Janani Catering ', 'jayanti@gmail.com', 8546789634, 1, 'Vadapalani, Gujrat\r\n', 'Jayant@3', 'WedMeGood - Your Personal Wedding Planner  Plan your wedding with Us  WedMeGood is your personal wedding planning site. Browse through the site to find vendors for your wedding. Explore wedding inspiration & ideas and our very popular wedding blog to prepare for your wedding following latest trends.', 'yes'),
(7, 'mg3.jfif', 'Magician Nilesh Kuma', 'nilesh88@gmail.com', 7564789658, 5, 'Secto-5, New Shriji Nagar, Nr, Swaminarayan Temple, 141, Swaminarayan High School, Nava Vadaj, Ahmedabad, Gujarat · ~9 km', 'Shank@34', 'Give your guests a treat of their Lifetime with Kunal Newar (Corporate Entertainer and Mentalist) where he shows incredible demonstrations of the Human Mind, Superhuman Mental abilities, Mind Reading, Power of Memory, Predictions added with a touch of Magic and Illusions. He is the \'Man who Knows\'. ', 'yes'),
(8, 'dj4.jfif', 'Yash Pataskar', 'nilesh88@gmail.com', 9865745598, 7, 'Secto-5, New Shriji Nagar, Nr, Swaminarayan Temple, 141, Swaminarayan High School, Nava Vadaj, Ahmedabad, Gujarat · ~9 km', 'Bhaves@1g', 'The name Yash Pataskar is synonymous with the world’s most alluring and dynamic Illusionist. Yash has created spellbinding illusions in the minds of his audiences from round the globe. He was invited to perform in the United States, Mexico & the Bahamas while engaged with an international organizati', 'yes'),
(9, 'dj5.jfif', 'DJ chetas', 'chetas889@gmail.com', 6854789654, 7, 'Rajpat Nagar Ahmedabad, Gujrat', 'Raju@666', 'Based in Delhi, DJ Gunjan Sharma is one of the prominent DJs in the city. His musical journey started when he was 16 years old. Music being his passion, performance skills came to him naturally. As a young budding artist, he started performing for his friends at private parties. Seeing the success o', 'yes'),
(13, '', '', '', 0, 0, '', '', '', ''),
(14, '', '', '', 0, 0, '', '', '', ''),
(15, 'dj2.jfif', 'Dj Shine', 'shine346@gmail.com', 7569842357, 7, '                                                 \r\nNorth Gujrat,Gujrat                                            ', 'Djshine2', 'Harsha Vardhana Karibasavaiah, known as SHINE HVK, is an established DJ in Bangalore, who grew up with a strong appreciation for a variety of music genres, which gradually cultivated from passion to profession. He is a self-motivated individual who honed his skills and stepped into DJing in the year', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ms_tb`
--
ALTER TABLE `admin_ms_tb`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `area_ms_tb`
--
ALTER TABLE `area_ms_tb`
  ADD PRIMARY KEY (`Area_id`);

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category_ms_tb`
--
ALTER TABLE `category_ms_tb`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `city_ms_tb`
--
ALTER TABLE `city_ms_tb`
  ADD PRIMARY KEY (`City_id`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `custom_tbl`
--
ALTER TABLE `custom_tbl`
  ADD PRIMARY KEY (`custom_id`);

--
-- Indexes for table `employee_ms_tb`
--
ALTER TABLE `employee_ms_tb`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `employee_salary_tbl`
--
ALTER TABLE `employee_salary_tbl`
  ADD PRIMARY KEY (`emp_sal_id`);

--
-- Indexes for table `employee_schedule_tbl`
--
ALTER TABLE `employee_schedule_tbl`
  ADD PRIMARY KEY (`Employee_Sch_id`);

--
-- Indexes for table `event_photo_tb`
--
ALTER TABLE `event_photo_tb`
  ADD PRIMARY KEY (`Event_photo_id`);

--
-- Indexes for table `event_tb`
--
ALTER TABLE `event_tb`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `package_ms_tbl`
--
ALTER TABLE `package_ms_tbl`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_tbl`
--
ALTER TABLE `package_tbl`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `vendor_cat_tbl`
--
ALTER TABLE `vendor_cat_tbl`
  ADD PRIMARY KEY (`ven_cat_id`);

--
-- Indexes for table `vendor_det_tbl`
--
ALTER TABLE `vendor_det_tbl`
  ADD PRIMARY KEY (`ven_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_ms_tb`
--
ALTER TABLE `admin_ms_tb`
  MODIFY `Admin_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `area_ms_tb`
--
ALTER TABLE `area_ms_tb`
  MODIFY `Area_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_ms_tb`
--
ALTER TABLE `category_ms_tb`
  MODIFY `Category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city_ms_tb`
--
ALTER TABLE `city_ms_tb`
  MODIFY `City_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `custom_tbl`
--
ALTER TABLE `custom_tbl`
  MODIFY `custom_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `employee_ms_tb`
--
ALTER TABLE `employee_ms_tb`
  MODIFY `Employee_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_salary_tbl`
--
ALTER TABLE `employee_salary_tbl`
  MODIFY `emp_sal_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_schedule_tbl`
--
ALTER TABLE `employee_schedule_tbl`
  MODIFY `Employee_Sch_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `event_photo_tb`
--
ALTER TABLE `event_photo_tb`
  MODIFY `Event_photo_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event_tb`
--
ALTER TABLE `event_tb`
  MODIFY `Event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package_ms_tbl`
--
ALTER TABLE `package_ms_tbl`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_tbl`
--
ALTER TABLE `package_tbl`
  MODIFY `package_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendor_cat_tbl`
--
ALTER TABLE `vendor_cat_tbl`
  MODIFY `ven_cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor_det_tbl`
--
ALTER TABLE `vendor_det_tbl`
  MODIFY `ven_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
