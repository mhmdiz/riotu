-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 05:33 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riotudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_picture` text NOT NULL,
  `about_description` text NOT NULL,
  `about_vision` text NOT NULL,
  `about_mission` text NOT NULL,
  `about_objective` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_picture`, `about_description`, `about_vision`, `about_mission`, `about_objective`) VALUES
('images/lab04.jpg', 'One of the initiatives of the National Transformation Program is coming up with a Low Cost Communication Network for the Internet of Things (IoT) applications. IoT applications span several areas of the Saudi Vision, Health, Energy Consumption, Security Monitoring, etc. These applications can be also used in the concept of smart housing, smart campus, and smart workplace. Establishing a professional research environment in the Robotics and Internet of Things (IoT) will contribute to 2030 initiative. It will pursue and attract external research funds and grants from industry and external research programs by providing consultation service as well as developing IoT solutions and providing training services for Saudi Market.', 'To be an internationally recognized centre in robotics and internet of things', 'To promote applied research on Robotics and Internet of Things in Prince Sultan University through international collaboration with industrial and academic partners\r\nTo develop robotics and IoT solutions for real applications to sustain the economic and social development in Saudi Arabia inline with 2030 vision.', 'Establish a professional research environment in PSU in the robotics and IoT research.\r\nAttract external funds and grants to PSU.\r\nProvide a consultation service to the industry both locally and internationally.\r\nDevelop robotics and IoT solution’s for the Saudi Market in collaboration with international companies.\r\nProviding training services to communities in the field of robotics and IoT.\r\nContribute to the involvement of undergraduate and graduate students in professional research and promote their intellectual and learning skills.\r\nEstablish international collaboration with reputed research groups and institutions in robotics and IoT.\r\nContribute to the enrichment of computer science and engineering programs in the field of robotics and IoT');

-- --------------------------------------------------------

--
-- Table structure for table `collaboration`
--

CREATE TABLE `collaboration` (
  `collaboration_id` int(11) NOT NULL,
  `collaboration_picture` text NOT NULL,
  `collaboration_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collaboration`
--

INSERT INTO `collaboration` (`collaboration_id`, `collaboration_picture`, `collaboration_link`) VALUES
(1, 'images/gaitech.png', 'http://www.gaitech.hk'),
(2, 'images/cister.jpg', 'https://www.cister.isep.ipp.pt/');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_picture` text NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_description` text NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_picture`, `event_name`, `event_description`, `event_date`) VALUES
(1, 'images/drone-training.png', 'Drone Pilot Training Certificate', 'The objective of this training program is to provide a quick start to drone piloting with the MAVLink protocol. Learning how to pilot drone and define autonomous mission is very challenging and time consuming. There is a huge amount of informtaion to know, yet this information is very scattered on the Internet. By attending the 13-hour training sessions, the participant will have a full understanding of drone technologies, and will have the ability to build hos own drone, and enjoy piloting it either with a remote control or using a ground station.', '2017-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `content_id` int(11) NOT NULL,
  `content_type` varchar(50) NOT NULL,
  `content_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`content_id`, `content_type`, `content_link`) VALUES
(1, 'picture', 'images/lab05.jpg'),
(2, 'picture', 'images/lab/3drsolo.jpg'),
(3, 'picture', 'images/lab/rpi.jpg'),
(4, 'picture', 'images/lab/bebop.jpg'),
(5, 'picture', 'images/lab/cluster.jpg'),
(6, 'picture', 'images/lab/cluster2.jpg'),
(7, 'picture', 'images/lab/drones.jpg'),
(8, 'video', 'https://i.ytimg.com/vi_webp/gfl0bORdm3I/hqdefault.webp');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_picture` text,
  `news_name` varchar(50) NOT NULL,
  `news_date` date NOT NULL,
  `news_discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_picture`, `news_name`, `news_date`, `news_discription`) VALUES
(1, NULL, 'New Grant Attracted', '2017-11-01', 'The RIOTU Lab would like to thank Gaitech Robotics (China) for the research grant provided to the lab, in the context of R&D collaboration MoU established between Prince Sultan University and Gaitech Robotics.\r\n\r\n'),
(2, NULL, 'Open Positions for Students', '2017-11-01', '2017-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `newsletter_date` date NOT NULL,
  `newsletter_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_level` varchar(50) NOT NULL,
  `person_major` text NOT NULL,
  `person_location` text NOT NULL,
  `person_phone` varchar(15) NOT NULL,
  `person_email` varchar(50) NOT NULL,
  `social_facebook` text NOT NULL,
  `social_website` text NOT NULL,
  `social_linkedin` text NOT NULL,
  `social_twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `person_name`, `person_level`, `person_major`, `person_location`, `person_phone`, `person_email`, `social_facebook`, `social_website`, `social_linkedin`, `social_twitter`) VALUES
(1, 'Prof. Anis Koubaa', 'Director', 'Robotic Software Engineering, Internet-of-Things, Wireless Sensor Networks, Cloud Robotics, Robot Operating System (ROS)', 'Prince Sultan University, College of Computer and Information Sciences, Office E256 (Old Building), Rafha Street, Saudi Arabia', '(11) 494 - 8851', 'akoubaa at psu.edu.sa', '', '', 'https://www.linkedin.com/in/anis-koubaa-84aa4344/', ''),
(2, 'Dr. Basit Qureshi', 'Senior Researcher', 'Cloud Computing, Distributed Systems', 'Prince Sultan University, College of Computer and Information Sciences, Rafha Street, Saudi Arabia', '(11) 494 - 8284', 'qureshi at psu.edu.sa', '', '', '', ''),
(3, 'Dr. Dhafer Almakles', 'Senior Researcher', 'Control Theory, Non-Linear Control, Networked, Event-triggered and Quantized Control Systems, Design Nonlinear Control System', 'Prince Sultan University, College of Engineering, Rafha Street, Saudi Arabia', '(11) 494 - 8284', 'dalmakhles at psu.edu.sa', '', '', '', ''),
(4, 'Yasir Javed', 'Researcher', 'Mobile Robots, 5G Wireless Networks, Internet-of-Things, Robot Operating System (ROS)', 'Prince Sultan University, College of Computer and Information Sciences, Rafha Street, Saudi Arabia', '(11) 494 - 8287', 'yjaved at psu.edu.sa', '', '', '', ''),
(5, 'Ms. Maram Alajlan', 'Researcher', 'Robot Operating System (ROS), Robotics Path Planning, Internet-of-Things, Cloud Robotics', 'Prince Sultan University, College of Computer and Information Sciences, Rafha Street, Saudi Arabia', '(11) 494 - 8172', 'majlan at psu.edu.sa', '', '', '', ''),
(6, 'Taha Ahmed Khursheed', 'Student Member', 'Network and Communication Engineering', 'Prince Sultan University, College of Egineering, Rafha Street, Saudi Arabia', 'N/A', 'yjaved at psu.edu.sa', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `publication_id` int(11) NOT NULL,
  `publication_name` varchar(250) NOT NULL,
  `director` varchar(150) NOT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `website` varchar(100) NOT NULL,
  `publication_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`publication_id`, `publication_name`, `director`, `reference`, `date`, `website`, `publication_type`) VALUES
(1, 'Robots and Sensor Clouds', 'Anis Koubaa, Elhadi Shakshuki, ', 'Studies in Systems, Decision and Control', '2016-01-01', 'Springer', 'book'),
(3, 'Robot Operating System (ROS): The Complete Reference (Volume 2)', 'Anis Koubaa, ', '', '2016-02-01', 'Springer', 'book'),
(4, 'Design and performance analysis of global path planning techniques for autonomous mobile robots in grid environments', 'Imen Chaari, Anis Koubaa, Hachemi Bennaceur, Adel Ammar, Maram Alajlan, Habib Youssef, ', 'International Journal of Advanced Robotic Systems, Vol.(0), Issue (0),', '2017-01-01', 'Other, impact factor: 0.615, ISI', 'journal'),
(5, 'MyBot: Cloud-Based Service Robot using Service-Oriented Architecture', 'Anis Koubaa, Mohamed-Foued Sriti, Yasir Javed, Maram Alajlan, Basit Qureshi, Fatma Ellouze, Abdelrahman Mahmoud, ', 'Robotic Journal, Vol.(0), Issue (0),', '2017-01-01', 'Robotic Journal, Vol.(0), Issue (0),', 'journal'),
(6, 'Dual Mode for Vehicular Platoon Safety: Simulation and Formal Verification', 'Oussama Karoui, Mohamed Khalgui, Anis Koubaa, Emna Guerfala, Zhiwu Li, Eduardo Tovard, ', 'Information Sciences, Vol.(0), Issue (0),', '2017-03-01', 'Elsevier, impact factor: 3.364, SCOPUS', 'journal'),
(7, 'Move and Improve: a Market-Based Mechanism for the Multiple Depot Multiple Travelling Salesmen Problem', 'Anis Koubaa, Omar Cheikhrouhou, Hachemi Bennaceur, Mohamed-Foued Sriti, Yasir Javed, Adel Ammar, ', 'Journal of Intelligent & Robotic Systems, Vol.(85), Issue (0),', '2016-02-01', 'Springer, impact factor: 0.932, ISI', 'journal'),
(8, 'Z-Monitor: A protocol analyzer for IEEE 802.15. 4-based low-power wireless networks', 'Stefano Tennina, Olfa Gaddour, Anis Koubaa, Fernando Royo, Mario Alves, Mohamed Abid, ', 'Computer Networks, Vol.(95), Issue (0),', '2016-02-01', 'Elsevier, impact factor: 1.446, ISI', 'journal'),
(9, 'FL-MTSP: a fuzzy logic approach to solve the multi-objective multiple traveling salesman problem for multi-robot systems', 'Sahar Trigui, Omar Cheikhrouhou, Anis Koubaa, Uthman Baroudi, Habib Youssef,', 'Soft Computing, Vol.(0), Issue (0),', '2016-08-01', 'Springer, impact factor: 1.63, ISI', 'journal'),
(10, 'Relaxed Dijkstra and A* with linear complexity for robot path planning problems in large-scale grid environments', 'Adel Ammar, Hachemi Bennaceur, Imen Chaari, Anis Koubaa, Maram Alajlan,', 'Soft Computing, Vol.(20), Issue (10)', '2016-10-01', 'Springer, impact factor: 1.63, ISI', 'journal'),
(11, 'Cyber-physical systems clouds: A survey', 'Rihab Chaari, Fatma Ellouze, Anis Koubaa, Basit Qureshi, Nuno Pereira, Habib Youssef, Eduardo Tovar, ', 'Computer Networks, Vol.(108), Issue (1),', '2016-10-01', 'Elsevier, impact factor: 1.256, ISI', 'journal'),
(12, 'GLOBAL ROBOT PATH PLANNING USING GA FOR LARGE GRID MAPS: MODELLING, PERFORMANCE AND EXPERIMENTATION', 'Maram Alajlan, Imen Chaari, Anis Koubaa, Hachemi Bennaceur, Adel Ammar, Habib Youssef, ', 'International Journal of Robotics and Automation, Vol.(31), Issue (6),', '2016-12-01', 'Springer, impact factor: 0, SCOPUS', 'journal'),
(13, 'Reliable link quality estimation in low-power wireless networks and its impact on tree-routing', 'Nouha Baccour, Anis Koubaa, Habib Youssef, Mario Alves, ', 'Ad Hoc Networks, Vol.(27), Issue (0),', '2015-04-01', 'Elsevier, impact factor: 1.66, ISI', 'journal'),
(14, 'Quality-of-service aware routing for static and mobile ipv6-based low-power and lossy sensor networks using RPL', 'Olfa Gaddour, Anis Koubaa, Mohamed Abid, ', 'Ad Hoc Networks, Vol.(33), Issue (0).', '2015-10-01', 'Elsevier, impact factor: 1.66, ISI', 'journal'),
(15, 'ROS As a Service: Web Services for Robot Operating System', 'Anis Koubaa,', 'Journal of Software Engineering for Robotics, Vol.(6), Issue (1)', '2015-12-01', 'University of Bergamo	Universita degli Studi di Bergamo, impact factor: 0, NOT INDEXED', 'journal'),
(16, 'Reliable and Fast Hand-Offs in Low-Power Wireless Networks', 'Hossein Fotouhi, Mario Alves, Marco Zuniga, Anis Koubaa, ', 'IEEE Transactions on Mobile Computing, Vol.(11), Issue (13),', '2014-02-01', 'IEEE, impact factor: 2.543, ISI', 'journal'),
(17, 'RPL in a nutshell: A survey', 'Olfa Gaddour, Anis Koubaa,', 'Computer Networks, Vol.(14), Issue (56),', '2012-08-01', 'Springer, impact factor: 1.256, ISI', 'journal'),
(18, 'A Service-Oriented Cloud-Based Management System for the Internet-of-Drones', 'Anis Koubaa, Basit Qureshi, Mohamed-Foued Sriti, Yasir Javed, Eduardo Tovar, ', '17th International Conference on Autonomous Robot Systems and Competitions (ICARSC 2017).', '2017-01-01', 'IEEE', 'conference'),
(19, 'On Power Consumption Profiles for Data Intensive Workloads in Virtualized Hadoop Clusters', 'Basit Qureshi, Sultan Alwehaibi, Anis Koubaa, ', '2017 IEEE International Conference on Computer Communications (INFOCOM), ', '2017-03-01', 'IEEE\r\n', 'conference'),
(20, 'Performance of a Low Cost Hadoop Cluster for Image Analysis in Cloud Robotics Environment', 'Basit Qureshi, Yasir Javed, Anis Koubaa, Mohamed-Foued Sriti, Maram Alajlan, ', 'Procedia Computer Science,', '2017-12-01', 'Elsevier', 'conference'),
(21, 'Turtlebot at Office: A Service-Oriented Software Architecture for Personal Assistant Robots Using ROS', 'Anis Koubaa, Mohamed-Foued Sriti, Yasir Javed, Maram Alajlan, Basit Qureshi, Fatma Ellouze, Abdelrahman Mahmoud, ', 'Autonomous Robot Systems and Competitions (ICARSC), 2016 International Conference,', '2016-03-01', 'IEEE', 'conference'),
(22, 'Analytical Hierarchy Process based Multi-objective Multiple Traveling Salesman Problem', 'Omar Cheikhrouhou, Anis Koubaa, Anis Zaard, ', 'Autonomous Robot Systems and Competitions (ICARSC), 2016 International Conference,', '2016-03-01', 'IEEE', 'conference'),
(23, 'A Clustering Market-Based Approach for Multi-robot Emergency Response Applications', 'Sahar Trigui, Anis Koubaa, Omar Cheikhrouhou, Basit Qureshi,, Habib Youssef, ', '2016 International Conference on Autonomous Robot Systems and Competitions (ICARSC),', '2016-03-01', 'IEEE', 'conference'),
(24, 'ROS Web Services: A Tutorial', 'Fatma Ellouze, Anis Koubaa, Habib Youssef, ', 'Robot Operating System (ROS),', '2016-02-01', 'Springer', 'book_chapter'),
(25, 'Writing Global Path Planners Plugins in ROS: A Tutorial', 'Maram Alajlan, Anis Koubaa, ', 'Robot Operating System (ROS),', '2016-02-01', 'Springer', 'book_chapter'),
(26, 'COROS: a multi-agent software architecture for cooperative and autonomous service robots', 'Anis Koubaa, Mohamed-Foued Sriti, Hachemi Bennaceur, Adel Ammar, Yasir Javed, Maram Alajlan, Nada Al-Elaiwi, Mohamed Tounsi, Elhadi Shakshuki, ', 'Cooperative Robots and Sensor Networks 2015', '2015-05-01', 'Springer', 'book_chapter');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `research_id` int(11) NOT NULL,
  `research_name` varchar(50) NOT NULL,
  `research_type` varchar(50) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `reviewer` varchar(50) NOT NULL,
  `researcher` varchar(50) NOT NULL,
  `research_document` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `join_date` date NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `office_phone` varchar(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collaboration`
--
ALTER TABLE `collaboration`
  ADD PRIMARY KEY (`collaboration_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`publication_id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`research_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collaboration`
--
ALTER TABLE `collaboration`
  MODIFY `collaboration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `publication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `research_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
