-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql206.sa.tn
-- Generation Time: Dec 26, 2017 at 01:01 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `riotuDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_picture` text NOT NULL,
  `about_description` text NOT NULL,
  `about_vision` text NOT NULL,
  `about_mission` text,
  `about_objective` text NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_picture`, `about_description`, `about_vision`, `about_mission`, `about_objective`) VALUES
(1, 'images/lab04.jpg', 'One of the initiatives of the National Transformation Program is coming up with a Low Cost Communication Network for the Internet of Things (IoT) applications. IoT applications span several areas of the Saudi Vision, Health, Energy Consumption, Security Monitoring, etc. These applications can be also used in the concept of smart housing, smart campus, and smart workplace. Establishing a professional research environment in the Robotics and Internet of Things (IoT) will contribute to 2030 initiative. It will pursue and attract external research funds and grants from industry and external research programs by providing consultation service as well as developing IoT solutions and providing training services for Saudi Market.', 'To be an internationally recognized centre in robotics and internet of things', 'To promote applied research on Robotics and Internet of Things in Prince Sultan University through international collaboration with industrial and academic partners', 'Establish a professional research environment in PSU in the robotics and IoT research.'),
(2, '', '', '', 'To develop robotics and IoT solutions for real applications to sustain the economic and social development in Saudi Arabia inline with 2030 vision.', 'Attract external funds and grants to PSU.'),
(3, '', '', '', NULL, 'Provide a consultation service to the industry both locally and internationally.'),
(4, '', '', '', NULL, 'Develop robotics and IoT solution''s for the Saudi Market in collaboration with international companies.'),
(5, '', '', '', NULL, 'Providing training services to communities in the field of robotics and IoT.'),
(6, '', '', '', NULL, 'Contribute to the involvement of undergraduate and graduate students in professional research and promote their intellectual and learning skills.'),
(7, '', '', '', NULL, 'Establish international collaboration with reputed research groups and institutions in robotics and IoT.'),
(8, '', '', '', NULL, 'Contribute to the enrichment of computer science and engineering programs in the field of robotics and IoT');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_background` text NOT NULL,
  `ad_title` varchar(200) NOT NULL,
  `ad_info` varchar(200) NOT NULL,
  `ad_image` text NOT NULL,
  `ad_image_link` text NOT NULL,
  `ad_botton_title` varchar(50) NOT NULL,
  `ad_botton_link` text NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ad_id`, `ad_background`, `ad_title`, `ad_info`, `ad_image`, `ad_image_link`, `ad_botton_title`, `ad_botton_link`) VALUES
(1, 'images/profile-background-psu.jpg', 'Robot Operating\r\n							System (ROS): The Complete Reference (Volume 2)', '', 'images/rosbook2.jpg', 'http://www.springer.com/us/book/9783319549262', 'PURCHASE', 'http://www.springer.com/us/book/9783319549262'),
(2, 'images/profile-background-psu.jpg', 'RIOT Organizes the Second Drone Pilot Certificate Program', 'at Prince Sultan University, Riyadh, 							January 2018', 'images/drone-training.png', '', 'REGISTER NOW', '');

-- --------------------------------------------------------

--
-- Table structure for table `collaboration`
--

CREATE TABLE IF NOT EXISTS `collaboration` (
  `collaboration_id` int(11) NOT NULL AUTO_INCREMENT,
  `collaboration_picture` text NOT NULL,
  `collaboration_link` text NOT NULL,
  PRIMARY KEY (`collaboration_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_picture` text NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_description` text NOT NULL,
  `event_date` varchar(50) NOT NULL,
  `event_link` text NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_picture`, `event_name`, `event_description`, `event_date`, `event_link`) VALUES
(1, 'images/drone-training.png', 'Drone Pilot Training Certificate', 'The objective of this training program is to provide a quick start to drone piloting with the MAVLink protocol. Learning how to pilot drone and define autonomous mission is very challenging and time consuming. There is a huge amount of informtaion to know, yet this information is very scattered on the Internet. By attending the 13-hour training sessions, the participant will have a full understanding of drone technologies, and will have the ability to build hos own drone, and enjoy piloting it either with a remote control or using a ground station.', 'March\r\n										28-30, 2017', 'http://wiki.coins-lab.org/trainings/drone/index.html');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_name` varchar(50) NOT NULL,
  `content_type` varchar(50) NOT NULL,
  `content_link` text NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`content_id`, `content_name`, `content_type`, `content_link`) VALUES
(1, 'Los Angeles', 'picture', 'images/lab05.jpg'),
(2, 'New York', 'picture', 'images/lab/3drsolo.jpg'),
(3, 'New York', 'picture', 'images/lab/rpi.jpg'),
(4, 'New York', 'picture', 'images/lab/bebop.jpg'),
(5, 'New York', 'picture', 'images/lab/cluster.jpg'),
(6, 'New York', 'picture', 'images/lab/cluster2.jpg'),
(7, 'Chicago', 'picture', 'images/lab/drones.jpg'),
(8, '', 'video', 'https://www.youtube.com/embed/gfl0bORdm3I?playlist=gfl0bORdm3Ik&loop=1');

-- --------------------------------------------------------

--
-- Table structure for table `main_info`
--

CREATE TABLE IF NOT EXISTS `main_info` (
  `main_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_info_class` text NOT NULL,
  `main_info_title` varchar(100) NOT NULL,
  PRIMARY KEY (`main_info_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `main_info`
--

INSERT INTO `main_info` (`main_info_id`, `main_info_class`, `main_info_title`) VALUES
(1, 'icon icon_book_alt ico-styled-md text-primary', 'LATEST PUBLICATIONS'),
(2, 'icon icon_lightbulb ico-styled-md text-primary', 'LATEST NEWS'),
(3, 'icon icon_gift ico-styled-md text-primary', 'NEWSLETTER');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_picture` text,
  `news_name` varchar(50) NOT NULL,
  `news_date` varchar(50) NOT NULL,
  `news_description` text NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_picture`, `news_name`, `news_date`, `news_description`) VALUES
(1, NULL, 'New Grant Attracted', 'Nov 1, 2017', 'The RIOTU Lab would like to thank <a href="http://www.gaitech.com/">Gaitech Robotics (China)</a> for the research grant provided to the lab, in the context of R&D collaboration MoU established between Prince Sultan University and Gaitech Robotics.\r\n\r\n'),
(2, NULL, 'Open Positions for Students', 'Nov 1, 2017', 'The RIOTU Lab is looking for talented and skilled students to join the research activities of the lab. We look for studengs with strong skills in programming and software development. Knowledge of drones, ROS, and Robotics will be an added value.');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `newsletter_id` int(11) NOT NULL AUTO_INCREMENT,
  `newsletter_date` varchar(20) NOT NULL,
  `newsletter_image` text NOT NULL,
  `newsletter_link` text NOT NULL,
  PRIMARY KEY (`newsletter_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`newsletter_id`, `newsletter_date`, `newsletter_image`, `newsletter_link`) VALUES
(1, 'APRIL 2017', 'images/newsletter1.png', 'resources/newsletter1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_name` varchar(50) NOT NULL,
  `person_level` varchar(50) NOT NULL,
  `person_major` text NOT NULL,
  `person_location` text NOT NULL,
  `person_phone` varchar(15) NOT NULL,
  `person_email` varchar(50) NOT NULL,
  `person_website` text NOT NULL,
  `social_facebook` text NOT NULL,
  `social_website` text NOT NULL,
  `social_linkedin` text NOT NULL,
  `social_twitter` text NOT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `person_name`, `person_level`, `person_major`, `person_location`, `person_phone`, `person_email`, `person_website`, `social_facebook`, `social_website`, `social_linkedin`, `social_twitter`) VALUES
(1, 'Prof. Anis Koubaa', 'Director', 'Robotic Software Engineering, Internet-of-Things, Wireless Sensor Networks, Cloud Robotics, Robot Operating System (ROS)', 'Prince Sultan University, College of Computer and Information Sciences, Office E256 (Old Building), Rafha Street, Saudi Arabia', '(11) 494 - 8851', 'akoubaa@psu.edu.sa', 'akoubaa/index.php', '', '', 'https://www.linkedin.com/in/anis-koubaa-84aa4344/', ''),
(2, 'Dr. Basit Qureshi', 'Senior Researcher', 'Cloud Computing, Distributed Systems', 'Prince Sultan University, College of Computer and Information Sciences, Rafha Street, Saudi Arabia', '(11) 494 - 8284', 'qureshi@psu.edu.sa', '', '', '', '', ''),
(3, 'Dr. Dhafer Almakles', 'Senior Researcher', 'Control Theory, Non-Linear Control, Networked, Event-triggered and Quantized Control Systems, Design Nonlinear Control System', 'Prince Sultan University, College of Engineering, Rafha Street, Saudi Arabia', '(11) 494 - 8284', 'dalmakhles@psu.edu.sa', '', '', '', '', ''),
(4, 'Yasir Javed', 'Researcher', 'Mobile Robots, 5G Wireless Networks, Internet-of-Things, Robot Operating System (ROS)', 'Prince Sultan University, College of Computer and Information Sciences, Rafha Street, Saudi Arabia', '(11) 494 - 8287', 'yjaved@psu.edu.sa', '', '', '', '', ''),
(5, 'Ms. Maram Alajlan', 'Researcher', 'Robot Operating System (ROS), Robotics Path Planning, Internet-of-Things, Cloud Robotics', 'Prince Sultan University, College of Computer and Information Sciences, Rafha Street, Saudi Arabia', '(11) 494 - 8172', 'majlan@psu.edu.sa', '', '', '', '', ''),
(6, 'Taha Ahmed Khursheed', 'Student Member', 'Network and Communication Engineering', 'Prince Sultan University, College of Egineering, Rafha Street, Saudi Arabia', 'N/A', 'yjaved@psu.edu.sa', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE IF NOT EXISTS `publications` (
  `publication_id` int(11) NOT NULL AUTO_INCREMENT,
  `publication_name` varchar(250) NOT NULL,
  `director` varchar(150) NOT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `date` varchar(20) NOT NULL,
  `publication_link` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `publication_type` varchar(50) NOT NULL,
  PRIMARY KEY (`publication_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`publication_id`, `publication_name`, `director`, `reference`, `date`, `publication_link`, `website`, `publication_type`) VALUES
(1, 'Robots and Sensor Clouds', 'Anis Koubaa, Elhadi Shakshuki', 'Studies in Systems, Decision and Control', 'January 2017', 'http://link.springer.com/book/10.1007/978-3-319-22168-7?no-access=true', 'Springer', 'book'),
(3, 'Robot Operating System (ROS): The Complete Reference (Volume 2)', 'Anis Koubaa', '', 'February 2016', 'http://www.springer.com/us/book/9783319549262', 'Springer', 'book'),
(4, 'Design and performance analysis of global path planning techniques for autonomous mobile robots in grid environments', 'Imen Chaari, Anis Koubaa, Hachemi Bennaceur, Adel Ammar, Maram Alajlan, Habib Youssef', 'International Journal of Advanced Robotic Systems, Vol.(0), Issue (0)', 'January 2017', '', 'Other, impact factor: 0.615, ISI', 'journal'),
(5, 'MyBot: Cloud-Based Service Robot using Service-Oriented Architecture', 'Anis Koubaa, Mohamed-Foued Sriti, Yasir Javed, Maram Alajlan, Basit Qureshi, Fatma Ellouze, Abdelrahman Mahmoud', 'Robotic Journal, Vol.(0), Issue (0)', 'January 2017', '', 'Robotic Journal, Vol.(0), Issue (0)', 'journal'),
(6, 'Dual Mode for Vehicular Platoon Safety: Simulation and Formal Verification', 'Oussama Karoui, Mohamed Khalgui, Anis Koubaa, Emna Guerfala, Zhiwu Li, Eduardo Tovard', 'Information Sciences, Vol.(0), Issue (0)', 'March 2017', 'http://www.sciencedirect.com/science/article/pii/S0020025517305959', 'Elsevier, impact factor: 3.364, SCOPUS', 'journal'),
(7, 'Move and Improve: a Market-Based Mechanism for the Multiple Depot Multiple Travelling Salesmen Problem', 'Anis Koubaa, Omar Cheikhrouhou, Hachemi Bennaceur, Mohamed-Foued Sriti, Yasir Javed, Adel Ammar', 'Journal of Intelligent & Robotic Systems, Vol.(85), Issue (0)', 'February 2016', 'http://link.springer.com/article/10.1007/s10846-016-0400-x', 'Springer, impact factor: 0.932, ISI', 'journal'),
(8, 'Z-Monitor: A protocol analyzer for IEEE 802.15. 4-based low-power wireless networks', 'Stefano Tennina, Olfa Gaddour, Anis Koubaa, Fernando Royo, Mario Alves, Mohamed Abid', 'Computer Networks, Vol.(95), Issue (0)', 'February 2016', 'http://www.sciencedirect.com/science/article/pii/S1389128615004788', 'Elsevier, impact factor: 1.446, ISI', 'journal'),
(9, 'FL-MTSP: a fuzzy logic approach to solve the multi-objective multiple traveling salesman problem for multi-robot systems', 'Sahar Trigui, Omar Cheikhrouhou, Anis Koubaa, Uthman Baroudi, Habib Youssef', 'Soft Computing, Vol.(0), Issue (0)', 'August 2016', 'http://link.springer.com/article/10.1007/s00500-016-2279-7', 'Springer, impact factor: 1.63, ISI', 'journal'),
(10, 'Relaxed Dijkstra and A* with linear complexity for robot path planning problems in large-scale grid environments', 'Adel Ammar, Hachemi Bennaceur, Imen Chaari, Anis Koubaa, Maram Alajlan', 'Soft Computing, Vol.(20), Issue (10)', 'October 2016', 'http://link.springer.com/article/10.1007/s00500-015-1750-1', 'Springer, impact factor: 1.63, ISI', 'journal'),
(11, 'Cyber-physical systems clouds: A survey', 'Rihab Chaari, Fatma Ellouze, Anis Koubaa, Basit Qureshi, Nuno Pereira, Habib Youssef, Eduardo Tovar', 'Computer Networks, Vol.(108), Issue (1)', 'October 2016', 'http://wiki.coins-lab.org/promotion/allpapers/journal-01.pdf', 'Elsevier, impact factor: 1.256, ISI', 'journal'),
(12, 'GLOBAL ROBOT PATH PLANNING USING GA FOR LARGE GRID MAPS: MODELLING, PERFORMANCE AND EXPERIMENTATION', 'Maram Alajlan, Imen Chaari, Anis Koubaa, Hachemi Bennaceur, Adel Ammar, Habib Youssef', 'International Journal of Robotics and Automation, Vol.(31), Issue (6)', 'December 2016', 'http://www.actapress.com/PaperInfo.aspx?PaperID=45430&reason=500', 'Springer, impact factor: 0, SCOPUS', 'journal'),
(13, 'Reliable link quality estimation in low-power wireless networks and its impact on tree-routing', 'Nouha Baccour, Anis Koubaa, Habib Youssef, Mario Alves', 'Ad Hoc Networks, Vol.(27), Issue (0)', 'April 2015', 'http://www.sciencedirect.com/science/article/pii/S1570870514002637', 'Elsevier, impact factor: 1.66, ISI', 'journal'),
(14, 'Quality-of-service aware routing for static and mobile ipv6-based low-power and lossy sensor networks using RPL', 'Olfa Gaddour, Anis Koubaa, Mohamed Abid', 'Ad Hoc Networks, Vol.(33), Issue (0)', 'October 2015', 'http://www.sciencedirect.com/science/article/pii/S1570870515000992', 'Elsevier, impact factor: 1.66, ISI', 'journal'),
(15, 'ROS As a Service: Web Services for Robot Operating System', 'Anis Koubaa', 'Journal of Software Engineering for Robotics, Vol.(6), Issue (1)', 'December 2015', 'http://joser.unibg.it/index.php?journal=joser&page=article&op=view&path%5B%5D=97', 'University of Bergamo	Universita degli Studi di Bergamo, impact factor: 0, NOT INDEXED', 'journal'),
(16, 'Reliable and Fast Hand-Offs in Low-Power Wireless Networks', 'Hossein Fotouhi, Mario Alves, Marco Zuniga, Anis Koubaa', 'IEEE Transactions on Mobile Computing, Vol.(11), Issue (13)', 'February 2014', 'http://ieeexplore.ieee.org/document/6747331/', 'IEEE, impact factor: 2.543, ISI', 'journal'),
(17, 'RPL in a nutshell: A survey', 'Olfa Gaddour, Anis Koubaa', 'Computer Networks, Vol.(14), Issue (56)', 'August 2012', 'http://wiki.coins-lab.org/promotion/allpapers/journal-15.pdf', 'Springer, impact factor: 1.256, ISI', 'journal'),
(18, 'A Service-Oriented Cloud-Based Management System for the Internet-of-Drones', 'Anis Koubaa, Basit Qureshi, Mohamed-Foued Sriti, Yasir Javed, Eduardo Tovar', '17th International Conference on Autonomous Robot Systems and Competitions (ICARSC 2017)', 'January 2017', '', 'IEEE', 'conference'),
(19, 'On Power Consumption Profiles for Data Intensive Workloads in Virtualized Hadoop Clusters', 'Basit Qureshi, Sultan Alwehaibi, Anis Koubaa', '2017 IEEE International Conference on Computer Communications (INFOCOM)', 'May 2017', '', 'IEEE\r\n', 'conference'),
(20, 'Performance of a Low Cost Hadoop Cluster for Image Analysis in Cloud Robotics Environment', 'Basit Qureshi, Yasir Javed, Anis Koubaa, Mohamed-Foued Sriti, Maram Alajlan', 'Procedia Computer Science', 'December 2017', 'http://www.sciencedirect.com/science/article/pii/S1877050916300278', 'Elsevier', 'conference'),
(21, 'Turtlebot at Office: A Service-Oriented Software Architecture for Personal Assistant Robots Using ROS', 'Anis Koubaa, Mohamed-Foued Sriti, Yasir Javed, Maram Alajlan, Basit Qureshi, Fatma Ellouze, Abdelrahman Mahmoud', 'Autonomous Robot Systems and Competitions (ICARSC), 2016 International Conference', 'March 2016', 'http://ieeexplore.ieee.org/abstract/document/7781988/', 'IEEE', 'conference'),
(22, 'Analytical Hierarchy Process based Multi-objective Multiple Traveling Salesman Problem', 'Omar Cheikhrouhou, Anis Koubaa, Anis Zaard', 'Autonomous Robot Systems and Competitions (ICARSC), 2016 International Conference', 'May 2016', 'http://ieeexplore.ieee.org/abstract/document/7781965/', 'IEEE', 'conference'),
(23, 'A Clustering Market-Based Approach for Multi-robot Emergency Response Applications', 'Sahar Trigui, Anis Koubaa, Omar Cheikhrouhou, Basit Qureshi, Habib Youssef', '2016 International Conference on Autonomous Robot Systems and Competitions (ICARSC)', 'May 2016', 'http://ieeexplore.ieee.org/abstract/document/7781966/', 'IEEE', 'conference'),
(24, 'ROS Web Services: A Tutorial', 'Fatma Ellouze, Anis Koubaa, Habib Youssef', 'Robot Operating System (ROS)', 'February 2016', 'http://link.springer.com/chapter/10.1007/978-3-319-26054-9_18', 'Springer', 'book_chapter'),
(25, 'Writing Global Path Planners Plugins in ROS: A Tutorial', 'Maram Alajlan, Anis Koubaa', 'Robot Operating System (ROS)', 'February 2016', 'http://link.springer.com/chapter/10.1007/978-3-319-26054-9_4', 'Springer', 'book_chapter'),
(26, 'COROS: a multi-agent software architecture for cooperative and autonomous service robots', 'Anis Koubaa, Mohamed-Foued Sriti, Hachemi Bennaceur, Adel Ammar, Yasir Javed, Maram Alajlan, Nada Al-Elaiwi, Mohamed Tounsi, Elhadi Shakshuki', 'Cooperative Robots and Sensor Networks 2015', 'May 2016', 'http://link.springer.com/chapter/10.1007/978-3-319-18299-5_1', 'Springer', 'book_chapter');

-- --------------------------------------------------------

--
-- Table structure for table `realresearch`
--

CREATE TABLE IF NOT EXISTS `realresearch` (
  `realresearch_id` int(11) NOT NULL AUTO_INCREMENT,
  `realresearch_title` varchar(50) NOT NULL,
  `realresearch_description` text NOT NULL,
  PRIMARY KEY (`realresearch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `realresearch`
--

INSERT INTO `realresearch` (`realresearch_id`, `realresearch_title`, `realresearch_description`) VALUES
(1, 'RESEARCH AREAS', 'The Robotics and Internet-of-Things research lab focuses on the integration of robots into the Internet of Things to promote new types of applications that leverage the use of these two technologies. RIOT has a long expertise in developing solutions for Internet-of-Things and Mobile Robots. The research lab also fosters its activites to be aligned with national priorities in particular the 2020 National Transformation Plan and 2030 Vision. In particular, with a strategic vision for the future, RIOT is working in emerging topics such as: \r\n'),
(2, 'CONSULTATION SERVICES', 'The Robotics and Internet-of-Things provides consultation services to industry, academia and government institutions to develop real-world solutions around our research areas. We also provide training services on drones building, piloting and applications development, robots software development, Robot Operating System (ROS). For further information, contact us.');

-- --------------------------------------------------------

--
-- Table structure for table `realresearch_info`
--

CREATE TABLE IF NOT EXISTS `realresearch_info` (
  `realresearch_points_id` int(11) NOT NULL,
  `realresearch_points` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realresearch_info`
--

INSERT INTO `realresearch_info` (`realresearch_points_id`, `realresearch_points`) VALUES
(1, 'Software Engineering for Cloud Robotics\r\n'),
(1, 'Big data analytics for IoT and Robotics applications'),
(1, 'Security and safety of drones'),
(1, 'Integration of robots/drones into the IoT and the Cloud'),
(1, 'Communication and Networking for the IoT'),
(1, 'AI Algorithms for Planning in Robotics'),
(1, 'Design of Unmanned Aerial Vehicles (UAVs) and their applications'),
(1, 'Software Engineering for Cloud Robotics\r\n'),
(1, 'Big data analytics for IoT and Robotics applications'),
(1, 'Security and safety of drones'),
(1, 'Integration of robots/drones into the IoT and the Cloud'),
(1, 'Communication and Networking for the IoT'),
(1, 'AI Algorithms for Planning in Robotics'),
(1, 'Design of Unmanned Aerial Vehicles (UAVs) and their applications');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE IF NOT EXISTS `research` (
  `research_id` int(11) NOT NULL AUTO_INCREMENT,
  `research_title` varchar(50) NOT NULL,
  `researher_name` varchar(200) NOT NULL,
  `researcher_email` text NOT NULL,
  `research_type` varchar(50) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `research_document` text NOT NULL,
  PRIMARY KEY (`research_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `join_date` date NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `office_phone` varchar(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `role`, `birth_date`, `join_date`, `address`, `phone`, `office_phone`, `city`, `country`, `email`, `website`) VALUES
(1, 'Mohammed', 'Almalki', 'almalki', 'cs371', 'admin', '1996-08-16', '2017-12-23', 'Riyadh', '550060013', '0114999999', 'Riyadh', 'SA', 'imhmdiz11@gmail.com', 'bestriotu.sa.tn'),
(2, 'Anis', 'Koubaa', 'akoubaa', 'cs371', 'admin', '0000-00-00', '2017-12-23', 'Riyadh', '500000000', '0114948851', 'Riyadh', 'SA', 'akoubaa@psu.edu.sa', 'http://dei.isep.ipp.pt/~akoubaa/'),
(6, 'Omar', 'Baothman', 'omar', 'cs371', 'member', NULL, '2017-12-25', '', '', '', '', '', 'omar@gmail.com', ''),
(4, 'Raad', 'Alkhaldi', 'raad', 'cs371', 'member', NULL, '2017-12-24', '', '', '', '', '', 'raad@gmail.com', ''),
(8, 'Ayman', 'Albasha', 'Ayman_psu', 'ayman12345', 'admin', NULL, '2017-12-24', '', '', '', '', '', 'mcaymann@gmail.com', ''),
(11, 'Ibrahim', 'Alyousfi', 'yousfi', '12345', 'member', NULL, '2017-12-25', '', '', '', '', '', 'alyousfi@gmail.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
