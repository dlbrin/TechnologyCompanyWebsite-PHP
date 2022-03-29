-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 02:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy-tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'dla', '123'),
(2, 'dlbrenakre17@gmail.com', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(7, 'Dla Azad', 'dlbrenakre17@gmail.com', 'thank u easy tech', 'than you easy tech !'),
(8, 'Dlbrin Akreyi', 'dlaakre26@gmail.com', 'welcome', 'welcome dla'),
(9, 'Dla Azad', 'dlbrenakre17@gmail.com', 'hello', 'hello dla');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `images` varchar(255) NOT NULL,
  `course_img` varchar(255) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `content`, `images`, `course_img`, `num`) VALUES
(1, 'Learning App Development', 'Learn how to develop mobile applications with easy technology courses from top universities and organizations. The easy technoloogy of (iOS and Android) application offers a 6-week introduction to mobile app development that is perfect for students that are new to the app development world. Learn the fundamentals of how to create an app including how they work, their basic components and what is involved in app design and development.', 'app-development.gif', 'android-app-application.jpg', 0),
(2, 'Learning Web Development', 'So, you’re interested in learning web development and becoming a web developer? First of all, congratulations. You’ve made a great choice.And since you’re reading this, you may already be an active member of any web development, or other online coding community. Which is a great place to start, and to find support throughout your chosen pursuit.', 'web.gif', 'web-course.jpg', 0),
(3, 'Learning POS(Cashier)Systems', 'As a consumer, you have no doubt seen a retail POS system in action. But do you know its basic capabilities and how they benefit a retail business? Here are the major functions of retail POS systems today.', 'cashier.gif', 'casher-course.jpg', 0),
(4, 'Phone Repair Technican', 'Special Discount for Mobile Phone Accessories On-site training services in one of our outlets or shops Tools & Equipment Kit We provide access to a reputable wholesale parts suppliers Tools and equipment guide Marketing strategy to drive instant traffic for your business Live support - you’ll have access to live support hotlines Certification that matters', 'repair-phone.gif', 'mob-course.jpg', 0),
(5, 'English Course', 'Learn how to speak grammar English Language with special team and teacher.', '', 'english-course.jpg', 1),
(6, 'Learn Computer Course', 'With Easy Tech Company you can learn computer details and all Microsoft office.', '', 'microsoft-course.jpg', 1),
(7, 'iphone App Development', 'Learn how to develop iphone applications with easy technology courses from top universities and organizations. The easy technoloogy of (iOS and Android) application offers a 6-week introduction to iphone app development that is perfect for students that are new to the app development world. Learn the fundamentals of how to create an app including how they work, their basic components and what is involved in app design and development.', '', 'iphone-app-course.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `custom-app-development`
--

CREATE TABLE `custom-app-development` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `explain` longtext NOT NULL,
  `images` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom-app-development`
--

INSERT INTO `custom-app-development` (`id`, `title`, `content`, `explain`, `images`, `background`) VALUES
(1, 'UI AND UX DESIGN SERVICES', 'Want to build your product with a team that establishes a clear design process, meets deadlines, and delivers a spot-on end result? Turn to Intellectsoft 19s UI and UX services. Our design team is a small design studio within a large software company that', '<b>UX & UI Design</b>:Want to build your product with a team that establishes a clear design process, meets deadlines, and delivers a spot-on end result? Turn to Intellectsoft 19s UI and UX services. Our design team is a small design studio within a large software company that will help you build an engaging product easily and quickly.\r\n<br>\r\n<br>\r\n<b>BENEFITS OF OUR UI AND UX SERVICES</b>:When you choose our services, you get everything to realise your product idea properly, from experience of working with Fortune 500 clients to design standards that will help us deliver your product quicker and without loss in quality.\r\n<br>\r\n<br>\r\n<b>DECADE IN DESIGN</b>:From basic event apps to scalable enterprise software for Fortune 500 companies, our long-standing design team can help your any idea come into being with the latest tools and tech. Our well-established process and standardised approach to design will ensure the final product looks and works as you required.\r\n<br>\r\n<br>\r\n<b>SCALING VELOCITY</b>:To ensure high quality and timely delivery of your product, we created a set of standards for our every designer to follow. We use design systems, perform comprehensive design reviews, re-use the most impactful practices and tools, and constantly mentor our designers. As a result, you get a skillful and organized team that knows what to do.\r\n<br>\r\n<br>\r\n<b>BROAD-RANGING EXPERTISE</b>:Our design team has created different types of apps and software systems for all major industries. You can count on their careful root cause analysis, interface architecture and animation design experience, in-depth post-analysis, and more. You will get a polished final product that is equally beautiful and easy-to-use across all platforms.\r\n<br>\r\n<br>\r\n<b>HOW WE DELIVER UI AND UX SERVICES</b>:A decade in design has allowed our team to perfect the process of delivering UI and UX services. We follow established design standards, workflows, and guidelines 14 you get the product you need, delivered by expert designers within the set timeframe.  Services UX & UI Design web development POS software', 'showcase.png', 'dev.gif'),
(2, 'Web Development Services', 'Easy Tech is one of the best Web Development Company which offers reliable Web Development Services worldwide to generate the most remarkable results & strengthen your business ( Responsive Web Design & Clean Code & Optimized Page Speed & Optimal Conversi', 'Web Development Services:Easy Tech is one of the best Web Development Company which offers reliable Web Development Services worldwide to generate the most remarkable results & strengthen your business ( Responsive Web Design & Clean Code & Optimized Page Speed & Optimal Conversions ).  CUSTOM WEB DEVELOPMENT SERVICE: Easy tech has 4+ years of experience in providing web development services and establishing websites that are Responsive, High Performing and Highly Attractive using the latest web technologies. Our web development specialists provide work revisions until we have satisfied our customers. In professional web development services, we have to tick all the boxes of requirements of our clients. EasyTech web development services include Responsive website, Mobile Friendly Web Designs, Customized E-commerce and Intranet experiences, keeping in mind best practices and latest technological platforms.  WORDPRESS WEBSITE:WordPress has made the lives easier to get the fully functional website developed in quick time. Novice users can easily manage the content of the website. You can make changes to site without making changes to the website coding. But still, you need professionals to get the website up and running. Customized, Highly Attractive and Unique WordPress Solutions is the core aspect of our web development services. WordPress is an easy solution to your website needs because it is: Easy to Manage & Search Engine Friendly & Cost Effective.  LARAVEL DEVELOPMENT:Laravel is one of the most efficient frameworks which is used for developing complex functionalities with a great accuracy. Laravel is a framework of Hypertext Preprocessor which is based on the MVC system.Our Highly Skilled Laravel developers are experienced to make healthy and flawless applications with a clean code. Besides, Laravel is one of the most secure platform for web development: Highly Protected Framework & Excessive-quit and upgraded features and Best Loading Speed .  PHP & MYSQL DEVELOPMENT:PHP and MySQL are significant and widely utilized open-source technologies that are ideal for quick development of database-driven web applications or customized websites.Our professional web developers constantly provide the most extensive PHP web applications and solutions for all commercial areas with outstanding domain expertise.Easy Authentication system , Clean and simple API And Faster and Less Costly.', 'showcase2.png', 'web-development.gif'),
(3, 'POS Software Services', 'If you’re a small business owner, chances are you’ve heard of a point of sale (POS) system.However, just because you’ve heard of something, doesn’t necessarily mean you know everything there is to know about it – especially if your source is less than reliable or you’re a first-time business owner.', 'POS Software Services:If you 19re a small business owner, chances are you 19ve heard of a point of sale (POS) system.However, just because you 19ve heard of something, doesn 19t necessarily mean you know everything there is to know about it 13 especially if your source is less than reliable or you 19re a first-time business owner.  POS software:Since we 19re experts on POS systems here at ShopKeep, and even rated the #1 iPad POS system by merchants like you, we 19d like to do you a solid and help you learn everything there is to know about point of sale systems. They 19re such a critical part of your business operations, whether you own a small retail shop or a five-star restaurant; POS systems not only get you through your day-to-day operations but also help propel you into the future.  POS systems are a combination of software and hardware:to streamline business operations at the point of purchase (POP). They 19re quickly replacing cash registers because they can do more than take payments. To help you see what we mean, let 19s take a closer look at point of sale systems. Consider this your buyer 19s guide. We 19ll cover what exactly they are, why you need one, and where you can buy one.  Inventory Management:One of the fundamental functions of POS software is to manage inventory for retailers. In fact, a lot of POS software started out as merely that 13 inventory management software.In today 19s fast-paced, world where customers will just as soon buy an item online if they can 19t find it in your store, it 19s crucial that you have real-time inventory tracking and inventory control. Too little inventory can result in missed sales and revenue. Too much inventory can result in suppressed cash flow.  Employee Management:Keeping track of your employees can be a business in itself. Who can only work evenings? Who only works days? What are my labor costs so far this week? Can I put another person on the schedule this weekend? It 19s like a game of Who 19s On First, retail edition. It 19s enough to make your head spin.Luckily for you, many point of sale systems can help alleviate those headaches. You can create employee profiles to store their contact information and their credentials to access the POS system.  Reporting and Analytics:If your POS software can give you a variety of reports, great. If it can provide you with the right reports, even better. Reports and analytics can provide insights and help you track Key Performance Indicators (KPI) about your business, allowing you to make smarter, data-driven decisions. Ensure that your system offers a variety of reports that can help you better understand the three major aspects of your business: sales performance, employee performance, and inventory management. Here 19s a detailed list of the reports and metrics you 19re POS system should be able to offer you: Sales by item , Sales by employee , Shift reports , Sales by department and category , Sales by customer , Sales by discount , Sales by payment type (cash, credit or debit card, gift card, or EBT) , Inventory value , Product reorder reports , Cash drawer activity such as pay-ins and payouts.', 'showcase3.png', 'cashier-pos.gif'),
(4, 'MOBILE APP DEVELOPMENT SERVICES', 'Build a solid app faster with our mobile platform that has pre-made feature modules. Leverage our extensive expertise for an industry-specific solution, or an enterprise suite. More so, add technologies like Blockchain and Augmented Reality to elevate your business security, key operations, and employee productivity.', 'CUSTOM APP DEVELOPMENT:Going mobile will help your business streamline operations, bring value to the demanding modern customers, and help you tackle Big Data. Whether it is your first app or fifth, our decade-long expertise in mobile app development will help you succeed with your mobile strategy.  OUR MOBILE APP DEVELOPMENT SERVICES:Build a solid app faster with our mobile platform that has pre-made feature modules. Leverage our extensive expertise for an industry-specific solution, or an enterprise suite. More so, add technologies like Blockchain and Augmented Reality to elevate your business security, key operations, and employee productivity.  ENTERPRISE APP DEVELOPMENT:Transfer your enterprise workflow to a mobile platform that supports the devices you want to implement. An enterprise app suite or a single application, your enterprise and employee productivity will rise on all levels, allowing you to approach key processes more efficiently, as well as cut costs. Technologies like Augmented Reality and Artificial Intelligence based solutions will facilitate the progress further.  MOBILE PLATFORM WITH PRE-MADE MODULES:Our mobile platform employs ready-made modules. Chatbots, beacon based navigation, Augmented reality, data analytics, and more 14 you choose what you need, we add touches to tailor the features to your brand identity, and they become a part of your app. As a result, your app is finished faster without loss in quality. With our pre-made modules, you get everything from custom mobile app development.  INDUSTRY-SPECIFIC MOBILE APPS:From Fintech and Construction to Retail and Sports, Intellecsoft 19s expertise covers the majority of industries. We created an iPad app for Eurostar 19s trains, a blockchain based proximity payments platform, a marketing app for Harley-Davidson, and more. You will get a spot-on mobile solution that meets the demands of your customers.  OUR MOBILE APP DEVELOPMENT PROCESS:Ten years in mobile app development have allowed us to craft a development process that ensures high productivity and efficiency. You will have the app you ordered us at initial stages, on time. We will also support it after the release to ensure its continuous operation.', 'showcase4.png', 'mobile-app-development.gif');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `date`) VALUES
(1, 'MOBILE DEVELOPMENT', 'Build a solid app faster with our mobile platform that has pre-made feature modules.', 'mob-course.jpg', '2021-04-03'),
(2, 'Learning App Development', 'Learn how to develop mobile applications with easy technology courses from top universities and organizations. The easy technoloogy of (iOS and Android) application offers a 6-week introduction to mobile app development that is perfect for students that are new to the app development world. Learn the fundamentals of how to create an app including how they work, their basic components and what is involved in app design and development.', 'android-app-application.jpg', '2021-04-03'),
(3, 'Learning POS(Cashier)Systems1', 'As a consumer, you have no doubt seen a retail POS system in action. But do you know its basic capabilities and how they benefit a retail business? Here are the major functions of retail POS systems today.', 'casher-course.jpg', '2021-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `our-service`
--

CREATE TABLE `our-service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our-service`
--

INSERT INTO `our-service` (`id`, `title`, `content`, `images`) VALUES
(1, 'MOBILE DEVELOPMENT', 'Build a solid app faster with our mobile platform that has pre-made feature modules.\r\n\r\n', 'mobile-app.svg'),
(2, 'Web Development', 'Our web development specialists provide work revisions until we have satisfied our customers.\r\n\r\n', 'web-dev.svg'),
(3, 'UI AND UX DESIGN', 'AR experience design & Mobile app UX and UI design services & Cross-platform experiences design & UI and UX consulting & Design workshops & Web design services.', 'UI-UX.svg'),
(4, 'Cashier System', 'Since we’re experts on POS systems here at ShopKeep, and even rated the #1 iPad POS system by merchants like you, we’d like to do you a solid and help you learn everything there is to know about point of sale systems.\r\n\r\n', 'cashir.svg'),
(5, '\r\nForex Expert Advisors', 'use technology every professional trader dreams of (time Testing,Strategy Generator ,Portfolio Experts).', 'ForexExpertAdvisors.svg'),
(6, '\r\nEducation Software', 'iOS Application , Android Application , Web Development , POS System(Cashier system) and Ms.Office.', 'education.svg'),
(7, 'NATIVE APP DEVELOPMENT', 'Native apps with up to 50% code reuse, forms with up to 90% shared code, complex client-server applications and data visualisation via Syncfusion — these are the cornerstones of our Xamarin mobile app development offering.', 'code.svg'),
(8, 'HYBRID APP DEVELOPMENT', 'We can help you create cross-platform web-based apps, establish real-time data sync with WebSockets, create a Proof-of-Concept app, and more. We can build you a fast, reliable backend, as well as create a secure IoT infrastructure.', 'app-dev.svg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `website_link` varchar(255) NOT NULL,
  `apple_link` varchar(255) NOT NULL,
  `android_link` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `type`, `website_link`, `apple_link`, `android_link`, `images`) VALUES
(1, 'Hemo Kat', 'Website', 'http://hemokat.com/', '', '', 'hemokat.png'),
(2, 'shopingo', 'Website,Apple,Android', 'http://shopingo.store/', 'https://apps.apple.com/us/app/shopingo/id1555118648', 'https://play.google.com/store/apps/details?id=com.easytech.shopingo', 'shopingo.jpg'),
(3, 'Bina', 'Android, Apple', '', 'https://apps.apple.com/us/app/bina-%D8%A8%DB%8C%D9%86%DB%95/id1531210857', 'https://play.google.com/store/apps/details?id=com.komai.binaduhok', 'bina.jpg'),
(4, 'Bazar', 'Android, Apple', '', 'https://apps.apple.com/us/app/bazar-%D8%A8%D8%A7%D8%B2%D8%A7%D8%B1/id1527917667', 'https://play.google.com/store/apps/details?id=com.easytech.bazar', 'bazar.jpg'),
(5, 'Baz Bazar', 'Android, Apple', '', 'https://apps.apple.com/us/app/baz-bazar/id1479594660', 'https://play.google.com/store/apps/details?id=com.shopping.baz', 'bazbazar.jpg'),
(6, 'Aqarati Xani', 'Android, Apple', '', 'https://apps.apple.com/us/app/aqarat-xani/id1516635073', 'https://play.google.com/store/apps/details?id=com.duhok.farmo.easytech.aaah.aqaratnisry', 'aqaratixani.jpg'),
(7, 'Xani Group', 'Android, Apple', '', 'https://apps.apple.com/us/app/xani-group/id1490226472', 'https://play.google.com/store/apps/details?id=com.easytech.xani', 'xanigroup.jpg'),
(8, 'Jinda', 'Website', 'http://jinda-organization.com/', '', '', 'jinda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_courses_register`
--

CREATE TABLE `user_courses_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `comment` mediumtext NOT NULL,
  `course_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_courses_register`
--

INSERT INTO `user_courses_register` (`id`, `name`, `email`, `phone`, `comment`, `course_id`) VALUES
(84, 'Dla Azad', 'dlbrenakre17@gmail.com', '07514142252', 'بژیت سەیدا', '2'),
(85, 'dlbrin Azad', 'dlaakre26@gmail.com', '07514142252', 'دەست خوش', '3'),
(86, 'Dla Azad', 'dlbrenakre17@gmail.com', '07514142252', 'bjit', '7'),
(87, 'Dla Azad', 'dlbrenakre17@gmail.com', '07514142252', 'dast xosh', '2'),
(88, 'Dlbrin Akreyi', 'dlaakre26@gmail.com', '07514142252', 'test', '2'),
(89, 'Dla Azad', 'dlbrenakre17@gmail.com', '07514142252', 'test2', '2'),
(90, 'Dla Azad', 'dlbrenakre17@gmail.com', '07514142252', 'test2', '2'),
(91, 'Dla Azad', 'dlbrenakre17@gmail.com', '07514142252', 'test', '2'),
(94, 'Dla Azad', 'dlbrenakre17@gmail.com', '07514142252', 'test', '3');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`) VALUES
(1, 0),
(2, 192168);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom-app-development`
--
ALTER TABLE `custom-app-development`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our-service`
--
ALTER TABLE `our-service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_courses_register`
--
ALTER TABLE `user_courses_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip` (`ip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `custom-app-development`
--
ALTER TABLE `custom-app-development`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `our-service`
--
ALTER TABLE `our-service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_courses_register`
--
ALTER TABLE `user_courses_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
