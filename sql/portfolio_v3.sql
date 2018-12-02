-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2018 at 09:16 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `portfolio_v3`
--

-- --------------------------------------------------------

--
-- Table structure for table `nf3_achievement`
--

CREATE TABLE `nf3_achievement` (
  `achievement_id` int(11) NOT NULL,
  `achievement_name` varchar(100) NOT NULL,
  `achievement_url` varchar(500) NOT NULL,
  `achievement_status` int(11) NOT NULL,
  `achievement_order` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf3_achievement`
--

INSERT INTO `nf3_achievement` (`achievement_id`, `achievement_name`, `achievement_url`, `achievement_status`, `achievement_order`, `created_at`) VALUES
(1, '23rd rank global in CodeVita 2016, 1 st round organised by TCS.', 'https://nfraz007.github.io/tcs_codevita_result_2016/', 1, '1.00', '2018-08-10 12:00:00'),
(2, '1st rank (global) in CodeCrunch organized by Government Engineering college.', 'https://www.hackerrank.com/contests/code-crunch/leaderboard', 1, '2.00', '2018-08-10 12:00:00'),
(3, '3rd rank (college) in CDQT2015 codechef', 'https://www.codechef.com/rankings/CDQT2015?filterBy=Institution%3DWest%20Bengal%20University%20of%20Technology&order=asc&sortBy=rank', 1, '3.00', '2018-08-10 12:00:00'),
(4, 'Published my name in WBUT codechef campus chapter in March-2015.', 'https://www.facebook.com/WBUTcoders/posts/1406568236319229', 1, '4.00', '2018-08-10 12:00:00'),
(5, '3rd rank (college) in CDER2015 codechef', 'https://www.codechef.com/rankings/CDER2015?filterBy=Institution%3DWest%20Bengal%20University%20of%20Technology&order=asc&sortBy=rank', 1, '5.00', '2018-08-10 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nf3_certificate`
--

CREATE TABLE `nf3_certificate` (
  `certificate_id` int(11) NOT NULL,
  `certificate_name` varchar(500) NOT NULL,
  `event` varchar(500) NOT NULL,
  `website` varchar(500) NOT NULL,
  `certificate_url` varchar(1000) NOT NULL DEFAULT '#',
  `license` varchar(500) NOT NULL DEFAULT 'NA',
  `certificate_image` varchar(500) NOT NULL DEFAULT 'default.jpg',
  `issued_at` date NOT NULL,
  `certificate_status` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf3_certificate`
--

INSERT INTO `nf3_certificate` (`certificate_id`, `certificate_name`, `event`, `website`, `certificate_url`, `license`, `certificate_image`, `issued_at`, `certificate_status`, `created_at`) VALUES
(1, 'Introduction to HTML5', 'University of Michigan', 'Coursera', 'https://www.coursera.org/account/accomplishments/certificate/AC2CD5VW9CF7', 'AC2CD5VW9CF7', 'um_html.jpg', '2016-03-14', 1, '2018-08-10 12:00:00'),
(2, 'Object Oriented Programming in Java', 'University of California, San Diego', 'Coursera', 'https://www.coursera.org/account/accomplishments/certificate/UHFCRJ6C98T7', 'UHFCRJ6C98T7', 'ucsd_java.jpg', '2016-03-18', 1, '2018-08-10 12:00:00'),
(3, 'Programming for Everybody, PYTHON', 'University of Michigan', 'Coursera', 'https://www.coursera.org/account/accomplishments/certificate/LBR2RJKDBQWZ', 'LBR2RJKDBQWZ', 'um_python.jpg', '2016-03-11', 1, '2018-08-10 12:00:00'),
(4, 'Python Data Structures', 'University of Michigan', 'Coursera', 'https://www.coursera.org/account/accomplishments/certificate/CWVGFPMC4G74', 'CWVGFPMC4G74', 'um_python_ds.jpg', '2016-03-12', 1, '2018-08-10 12:00:00'),
(5, 'Introduction to Programming with Java', 'Universidad Carlos III de Madrid', 'Edx', 'https://courses.edx.org/certificates/75d4b923207b45e3afb7ad0cdeee6b72', '75d4b923207b45e3afb7ad0cdeee6b72', 'ucm_java.jpg', '2016-03-15', 1, '2018-08-10 12:00:00'),
(6, 'Introduction to C++', 'Microsoft', 'Edx', 'https://courses.edx.org/certificates/5dfcdc2b4708439990baf2cbb2c8a1b8', '5dfcdc2b4708439990baf2cbb2c8a1b8', 'microsoft_cpp.jpg', '2016-03-16', 1, '2018-08-10 12:00:00'),
(7, 'Introduction to Python for Data Science', 'Microsoft', 'Edx', 'https://courses.edx.org/certificates/d0da00d373ea48c4a5a78cb655584668', 'd0da00d373ea48c4a5a78cb655584668', 'microsoft_python.jpg', '2016-03-15', 1, '2018-08-10 12:00:00'),
(8, 'Programming Basics', 'IITBombayX', 'Edx', 'https://courses.edx.org/certificates/a4d8c5ed113c4354b0b515c93dd1bcf5', 'a4d8c5ed113c4354b0b515c93dd1bcf5', 'iit_cpp.jpg', '2016-03-15', 1, '2018-08-10 12:00:00'),
(9, 'Certification of Participation', 'CodeVita 2016', 'TCS', '', 'NA', 'part_codevita.jpg', '2016-07-29', 1, '2018-08-10 12:00:00'),
(10, 'Certification of Participation', 'Hackcamp', 'IBM', '', 'NA', 'part_ibm_hackcamp.jpg', '2016-08-13', 1, '2018-08-10 12:00:00'),
(11, 'Certification of Merit', 'Internship', 'Internshala', '', 'NA', 'part_internshala.jpg', '2016-07-02', 1, '2018-08-10 12:00:00'),
(12, 'Certification of Participation', 'Snackdown 2016', 'Codechef', '', 'a3641e0ff22ee40aa0dab0e822d55b9a', 'part_snackdown16.jpg', '2016-08-12', 1, '2018-08-10 12:00:00'),
(13, 'Certification Of Participation', 'Cryptography', 'IIT Kharagpur', '', 'NA', 'part_crypto.jpg', '2017-01-31', 1, '2018-08-10 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nf3_education`
--

CREATE TABLE `nf3_education` (
  `education_id` int(11) NOT NULL,
  `institute_name` varchar(50) NOT NULL,
  `institute_icon` varchar(50) NOT NULL,
  `institute_url` varchar(100) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `field_of_study` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `education_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf3_education`
--

INSERT INTO `nf3_education` (`education_id`, `institute_name`, `institute_icon`, `institute_url`, `degree`, `field_of_study`, `grade`, `year`, `education_status`, `created_at`) VALUES
(1, 'Rotary School', '', '', '10th', 'CBSE', '8.6 CGPA', '2010', 1, '2018-08-10 12:00:00'),
(2, 'MK DAV Public School', '', 'http://mkdav.in/', '12th', 'CBSE', '68 %', '2012', 1, '2018-08-10 12:00:00'),
(3, 'West Bengal University of Technology, MAKAUT', '', 'http://makautexam.net/', 'Bachelor of Technology (B.Tech)', 'Information Technology (IT)', '7.39 CGPA', '2013 - 2017', 1, '2018-08-10 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nf3_experience`
--

CREATE TABLE `nf3_experience` (
  `experience_id` int(11) NOT NULL,
  `experience_type` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_logo` varchar(100) NOT NULL,
  `company_url` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `start_at` datetime NOT NULL,
  `end_at` datetime DEFAULT NULL,
  `detail` varchar(1000) NOT NULL,
  `experience_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf3_experience`
--

INSERT INTO `nf3_experience` (`experience_id`, `experience_type`, `company_name`, `company_logo`, `company_url`, `designation`, `city`, `country`, `start_at`, `end_at`, `detail`, `experience_status`, `created_at`) VALUES
(1, 'INTERNSHIP', 'CareODrive Pvt. Ltd', '', 'https://www.linkedin.com/company/careodrive/?originalSubdomain=in', 'Web Developer Intern', 'Kolkata', 'India', '2016-07-02 12:00:00', '2016-09-02 12:00:00', 'I worked on a startup project of CareODrive in the development of their web services. Being an expert in backend programming, I developed their complete admin panel interface. I also helped in developing user webpage and its android application. I also gave first hand ideas to the company that significantly improved the user experience.', 1, '2018-08-10 12:00:00'),
(2, 'INTERNSHIP', 'Goyal Softwares', '', 'https://www.innovination.com/', 'Web Developer Intern', 'Kolkata', 'India', '2017-01-21 12:00:00', '2017-03-21 12:00:00', 'I worked on development of a travelling website in various area such as Coupon Management System, Complete admin panel creation, andoroid application API development etc. Moreover I also developed an automated backup code (in php) that helped the company save a lot of time (1 hour each day) and fetched me many appreciations.', 1, '2018-08-10 12:00:00'),
(3, 'FREELANCE', 'DoSelect', '', 'https://doselect.com/', 'Freelance Problem Setter', '', '', '2016-07-02 12:00:00', '2017-06-03 12:00:00', 'Fueled by my desire for programming, I also work part-time as a freelance problem setter. Creating innovative ideas and implementing them is my passion. With my creative programming skills, I create different types of programming problems which are used for hiring and practice purposes. For example, algorithmic and tutorial type programming problems.', 1, '2018-08-10 12:00:00'),
(4, 'FULL_TIME', 'Floret Media Pvt. Ltd', '', 'http://www.floretmedia.com/', 'Web Developer', 'Bangalore', 'India', '2017-07-23 12:00:00', '2018-01-15 12:00:00', 'Floret media is a software company, and its biggest product is pepagora. I am currently doing this project. Pepagora is a b2b marketplace for supplier and manufacturer. I am adding some new features into this. Parallelly I am creating an Api for this in lumen because its mobile application is coming to soon. The pepagora website is in core php and codeigniter framework.\nAs I mentioned, floret is a software company so there are lots of client project as well. According to the need I am also working on some clients project like kuberansilks, ayyan fireworks, masonlite, 1mg, haute-horologe etc.', 1, '2018-08-10 12:00:00'),
(5, 'FULL_TIME', 'MildlyClassic Pvt. Ltd', '', 'http://mildlyclassic.com', 'Full Stack Developer', 'Bangalore', 'India', '2018-01-15 12:00:00', NULL, 'MildlyClassic is a startup which is a product and service based company. We are building the entire ERP system for a logistics company. ERP is built upon Codeigniter framework. The website is capable of handling huge traffic from multiple cities of India. We constantly strive to maintain its fast response and scalability.', 1, '2018-08-10 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nf3_menu`
--

CREATE TABLE `nf3_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_url` varchar(50) NOT NULL,
  `menu_icon` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu_status` int(11) NOT NULL,
  `menu_order` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf3_menu`
--

INSERT INTO `nf3_menu` (`menu_id`, `menu_name`, `menu_url`, `menu_icon`, `parent_id`, `menu_status`, `menu_order`, `created_at`) VALUES
(1, 'About Me', 'about-me', 'user-circle', 0, 1, '1.00', '2018-08-10 12:00:00'),
(2, 'Work Experience', 'work-experience', 'briefcase', 0, 1, '2.00', '2018-08-10 12:00:00'),
(3, 'Projects', 'projects', 'code', 0, 1, '3.00', '2018-08-10 12:00:00'),
(4, 'Certifications', 'certifications', 'certificate', 0, 1, '4.00', '2018-08-10 12:00:00'),
(5, 'Blog', 'https://medium.com/@nfraz007', 'rss', 0, 1, '5.00', '2018-08-10 12:00:00'),
(6, 'Contact', 'contact', 'address-book', 0, 1, '6.00', '2018-08-10 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nf3_profile`
--

CREATE TABLE `nf3_profile` (
  `profile_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phone_alt` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_alt` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `website_alt` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `resume_url` varchar(100) NOT NULL,
  `profile_detail` varchar(1000) NOT NULL,
  `profile_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf3_profile`
--

INSERT INTO `nf3_profile` (`profile_id`, `first_name`, `last_name`, `designation`, `phone`, `phone_alt`, `email`, `email_alt`, `website`, `website_alt`, `city`, `country`, `resume_url`, `profile_detail`, `profile_status`, `created_at`) VALUES
(1, 'Nazish', 'Fraz', 'Full Stack Developer', '7004247710', '9748277144', 'nfraz007@gmail.com', '', 'http://nfraz.co.nf', '', 'Bangalore', 'India', 'resume.pdf', 'I love coding  and I know how to use coding to solve a real  world problem. I love to learn  new technologies and strive  constantly to improve myself.  I like singing and solving rubik\'s cube in free time.', 1, '2018-08-10 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nf3_project`
--

CREATE TABLE `nf3_project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_icon` varchar(100) NOT NULL,
  `project_image` varchar(1000) NOT NULL COMMENT 'comma seprated image',
  `project_demo` varchar(1000) NOT NULL,
  `project_url` varchar(100) NOT NULL,
  `project_detail` varchar(1000) NOT NULL,
  `technology` varchar(100) NOT NULL,
  `start_at` datetime NOT NULL,
  `end_at` datetime DEFAULT NULL,
  `project_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf3_project`
--

INSERT INTO `nf3_project` (`project_id`, `project_name`, `project_icon`, `project_image`, `project_demo`, `project_url`, `project_detail`, `technology`, `start_at`, `end_at`, `project_status`, `created_at`) VALUES
(1, 'Tic Tac Toe', '', '', 'https://drive.google.com/file/d/0B6kUEG-brbx1eWRaMDlkODl2TUU/view', 'https://github.com/nfraz007/Android/tree/master/TicTacToe', 'This is a simple black and white game for android for single as well as multi-player mode.', 'Java,XML', '2015-05-01 12:00:00', '2015-06-01 12:00:00', 1, '2018-08-10 12:00:00'),
(2, 'Mini Calculator', '', '', 'https://drive.google.com/file/d/0B6kUEG-brbx1UWVBcmI3RTU1LVU/view', 'https://github.com/nfraz007/Android/tree/master/MiniCalculator', 'Simple android application with stylish interface and all mathematical functions.', 'Java,XML', '2015-05-01 12:00:00', '2015-06-01 12:00:00', 1, '2018-08-10 12:00:00'),
(3, 'Portfolio v1', '', '', 'https://nfraz007.github.io/portfolio_v1', 'https://github.com/nfraz007/portfolio_v1', 'My personal portfolio website which I have created to showcase my projects in one place. ', 'HTML,CSS,Javascript,Bootstrap', '2016-04-01 12:00:00', '2016-05-01 12:00:00', 1, '2018-08-10 12:00:00'),
(4, 'Online Banking', '', '', '', '', 'This was our group academic project in 3rd year where we created a model website of OnlineBanking. We developed both user and admin panel for this website to facilitate online transactions between the user and the bank. We incorporated various security measures required for a safe transaction. It was a two step verification process that involved CAPTCHA verification and admin verification.\r\nWith my recent exposure to operations of payment gateway systems like PayTM, PayPal, Instamojo etc, now I am well equipped to implement and handle projects on OnlineBanking services.', 'HTML,CSS,Javascript,PHP,Mysql', '2016-03-01 12:00:00', '2016-06-01 12:00:00', 1, '2018-08-10 12:00:00'),
(5, 'Canteen Management', '', '', 'http://nazishfraz.co.nf/canteen', 'https://github.com/nfraz007/canteen', 'It is a canteen management website. There are both user and admin panel. Admin can add/remove/edit items in menu. Admin can also add some credit to the user so that they can order something. Admin can see every order , search and filter order and accept/reject the order. User can add/remove any item to their cart and buy their order at any time. User can see their order and filter it.', 'HTML,CSS,Materialize,Javascript,JQuery,JSON,PHP,MySql', '2017-02-01 12:00:00', '2017-02-15 12:00:00', 1, '2018-08-10 12:00:00'),
(6, 'Wryton', '', '', 'http://nazishfraz.co.nf/wryton', 'https://github.com/nfraz007/wryton', 'This was also a self project which I undertook after I got an idea to build a website where users can share their life experiences. Many of us go through many phases in life and gain experience over time. On this website users can share their life experience which would help and guide others when they are going through that phase in life. In this era of technology, this website will definitely be useful for youngsters and adults to face anxiety and depression', 'HTML,CSS,Bootstrap,W3css,Javascript,JQuery,PHP,MySql', '2017-03-01 12:00:00', '2017-03-15 12:00:00', 1, '2018-08-10 12:00:00'),
(7, 'ListAll', '', '', 'http://nazishfraz.co.nf/list_all', 'https://github.com/nfraz007/list_all', 'I created this website for my parents and other middle age people to help them in internet browsing. Since they would not know the names of all the important website at first, they would have had hard time working with internet. In this website I created a database of all the important and frequently visited websites and arranged them properly using keywords. For example if they want to read news headline they just have to search using keyword "news" and links for various website will appear. Similarly they can do shopping, recharge etc using this website very easily. The interface is also very easy to understand. The user and admin panel both created by me and it is constantly being managed and updated. Hence all the user has to do is remember the name of my website and enjoy browsing.', 'HTML,CSS,Bootstrap,W3css,Javascript,JQuery,PHP,MySql', '2017-03-01 12:00:00', '2017-03-15 12:00:00', 1, '2018-08-10 12:00:00'),
(8, 'Portfolio v2', '', '', 'http://nazishfraz.co.nf/portfolio_v2', 'https://github.com/nfraz007/portfolio_v2', 'I have made my portfolio website myself in just 3 days. Initially I had made a portfolio but its limitations was that it was totally static. So in this updated portfolio I completely revamped the interface and made it fully dynamic.', 'HTML,CSS,Bootstrap,W3css,Javascript,JQuery,PHP,MySql', '2017-04-01 12:00:00', '2017-04-04 12:00:00', 1, '2018-08-10 12:00:00'),
(9, 'MoneyBags', '', '', 'http://moneybags.co.nf/', 'https://github.com/nfraz007/moneybags', 'It was a self made project which I completed in just one week\'s time. I made this website as I realized how difficult it can be to manage one\'s expenses like how much do I owe somebody, how much money I will get from others etc. Moreover with students and businessmen, It can be really difficult to keep track where money is coming and going. With the help of this website users can manage their expenses carefully and adopt budget measures to control money.', 'HTML,CSS,Bootstrap,W3css,Javascript,JQuery,PHP,MySql', '2017-04-03 12:00:00', '2017-04-10 12:00:00', 1, '2018-08-10 12:00:00'),
(10, 'Unit Converter', '', '', 'http://nazishfraz.co.nf/unit_converter/', 'https://nfraz007.github.io/unit_converter/', 'Unit Converter allows you to convert any unit to any other compatible unit type. This is a php library. Just include this library in your project and you are all set. Just call a function convert() which takes some parameter and this function will convert your input. You can see all the units, add custom unit and edit the existing units. In this library lots of unit types are there like length, mass, area and so on. For detail just read the documentation of this file.', 'PHP', '2017-05-17 12:00:00', '2017-05-18 12:00:00', 1, '2018-08-10 12:00:00'),
(11, 'Measure Attention', '', '', '', 'https://github.com/deathcod/measure_Attention', 'B.Tech Project in developing android app to monitor a subject’s attention using a set of games. This app can be used to study a subject’s behavior in cognitive Psychology.', 'HTML,W3css,JQuery,JSON,PHP,Mysql,Java,XML', '2017-01-01 12:00:00', '2017-06-10 12:00:00', 1, '2018-08-10 12:00:00'),
(12, 'Tata Steel Centre of Excellence', '', '', 'http://tatasteelcfe.com/', '', 'This was a freelance project for Tata Steel in which we built a custom Content Management System (CMS) in Codeigniter framework.', 'Codeigniter,Mysql,Bootstrap', '2018-07-01 12:00:00', '2018-07-20 12:00:00', 1, '2018-08-10 12:00:00'),
(13, 'Number To Word', '', '', 'http://nazishfraz.co.nf/number_to_word/', 'https://nfraz007.github.io/number_to_word/', 'This is a php script which basically convert a input number to word form. Add this library into your project and just call a function convert(), thats it. Read the documentation for more detail.', 'PHP', '2017-05-01 12:00:00', '2017-05-02 12:00:00', 1, '2018-08-10 12:00:00'),
(14, 'Portfolio v3', '', '', 'https://nfraz.co.nf', 'https://github.com/nfraz007/portfolio_v3', 'This is the third version of my portfolio website. In this project I am using codeigniter. This is a opensource project so any one can use this project for creating a portfolio. This is fully dynamic and every data is coming from database.', 'Codeigniter,Mysql,JSON,HTML,CSS,SASS,Bootstrap,Jquery', '2018-08-01 12:00:00', '2018-08-20 12:00:00', 1, '2018-08-10 12:00:00'),
(15, 'Blood Bank', '', '', 'http://nazishfraz.co.nf/blood_bank', 'https://nfraz007.github.io/blood_bank/', 'I got this project when I was applying to internshala. I had to create a small blood bank website in PHP.', 'HTML,CSS,Bootstrap,Javascript,Jquery,JSON,PHP,Mysql', '2017-07-01 12:00:00', '2017-07-10 12:00:00', 1, '2018-08-10 12:00:00'),
(16, 'Dinars Inventory', '', '', 'https://www.youtube.com/watch?v=VMX84p3mpaQ&t=72s', '', 'This is a inventory and billing software made in laravel. A Parent company can create multiple child complany and see the order and payment flow done by child company. Parent will transfer stock to the child company. Child company will sell all this product to their customer. They can generate invoice, download reports and lots of thing.', 'Laravel,Mysql,HTML,SASS,Bootstrap,Jquery,Ajax', '2018-08-01 12:00:00', '2018-10-05 12:00:00', '1', '2018-12-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nf3_section`
--

CREATE TABLE `nf3_section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `section_value` varchar(50) NOT NULL,
  `section_detail` varchar(500) NOT NULL,
  `section_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf3_section`
--

INSERT INTO `nf3_section` (`section_id`, `section_name`, `section_value`, `section_detail`, `section_status`, `created_at`) VALUES
(1, 'Skills', 'SKILL', 'I believe that in order to improve my skill set, I must indulge myself in learning continuously. Not only does it sharpen my knowledge but it also increases my interest.', 1, '2018-08-10 12:00:00'),
(2, 'Experiences', 'EXPERIENCE', 'I have gained firsthand experience working in crucial project timelines.', 1, '2018-08-10 12:00:00'),
(3, 'Education', 'EDUCATION', 'All my life I have been driven by my strong belief that education is important. I try to learn something new every single day.', 1, '2018-08-10 12:00:00'),
(4, 'Achievements', 'ACHIEVEMENT', 'Coding has always been my passion and when I reached college I got lots of opportunities to pursue it. I utilized this time to participate in various coding competitions.', 1, '2018-08-10 12:00:00'),
(5, 'Projects', 'PROJECT', 'Whenever I learn something new, I make a project on this and add it to my github profile because I firmly believe that knowledge sharing is very important.', 1, '2018-08-10 12:00:00'),
(6, 'Certifications', 'CERTIFICATE', 'In addition to my work and education, I have participated in many coding competitions and conferences. Moreover, I have completed many online courses from reputed colleges and organizations.', 1, '2018-08-10 12:00:00'),
(7, 'Contact', 'CONTACT', 'If you think that I am a good fit for your company, please feel free to contact me anytime. If you have any suggestions for me, then please fill the form below, I will surely work on it.', 1, '2018-08-10 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nf3_social`
--

CREATE TABLE `nf3_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(50) NOT NULL,
  `social_url` varchar(100) NOT NULL,
  `social_icon` varchar(50) NOT NULL,
  `social_status` int(11) NOT NULL,
  `social_order` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf3_social`
--

INSERT INTO `nf3_social` (`social_id`, `social_name`, `social_url`, `social_icon`, `social_status`, `social_order`, `created_at`) VALUES
(1, 'LinkedIn', 'https://www.linkedin.com/in/nazish-fraz-442b61105/', 'linkedin-square', 1, '1.00', '2018-08-10 12:00:00'),
(2, 'Github', 'https://github.com/nfraz007', 'github-square', 1, '2.00', '2018-08-10 12:00:00'),
(3, 'Medium', 'https://medium.com/@nfraz007/', 'medium', 1, '3.00', '2018-08-10 12:00:00'),
(4, 'Codepen', 'https://codepen.io/nfraz007', 'codepen', 1, '5.00', '2018-08-10 12:00:00'),
(5, 'Angellist', 'https://angel.co/nazish-fraz', 'angellist', 1, '6.00', '2018-08-10 12:00:00'),
(6, 'Stack Overflow', 'https://stackoverflow.com/users/7901482/nazish-fraz', 'stack-overflow', 1, '4.00', '2018-08-10 12:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nf3_achievement`
--
ALTER TABLE `nf3_achievement`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indexes for table `nf3_certificate`
--
ALTER TABLE `nf3_certificate`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indexes for table `nf3_education`
--
ALTER TABLE `nf3_education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `nf3_experience`
--
ALTER TABLE `nf3_experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `nf3_menu`
--
ALTER TABLE `nf3_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `nf3_profile`
--
ALTER TABLE `nf3_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `nf3_project`
--
ALTER TABLE `nf3_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `nf3_section`
--
ALTER TABLE `nf3_section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `nf3_social`
--
ALTER TABLE `nf3_social`
  ADD PRIMARY KEY (`social_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nf3_achievement`
--
ALTER TABLE `nf3_achievement`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nf3_certificate`
--
ALTER TABLE `nf3_certificate`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `nf3_education`
--
ALTER TABLE `nf3_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nf3_experience`
--
ALTER TABLE `nf3_experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nf3_menu`
--
ALTER TABLE `nf3_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nf3_profile`
--
ALTER TABLE `nf3_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nf3_project`
--
ALTER TABLE `nf3_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `nf3_section`
--
ALTER TABLE `nf3_section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nf3_social`
--
ALTER TABLE `nf3_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;