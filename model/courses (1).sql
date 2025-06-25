-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 10:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(50) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `price` int(50) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `duration`, `price`, `description`, `url`, `category`) VALUES
(4, 'Mobile App Development', '4 months', 100, 'Create Android and iOS applications using Flutter.', 'mobile.com', 'Programming'),
(5, 'Cybersecurity', '5 months', 500, 'Learn how to protect systems and networks from cyber threats.', NULL, 'Security'),
(6, 'Artificial Intelligence', '6 months', 100, 'Understand the basics of AI and build intelligent systems.', 'ai-course.com', 'Programming'),
(7, 'Cloud Computing', '5 months', 100, 'Get hands-on with AWS, Azure, and cloud-based deployments.', 'cloud-course.com', 'Programming'),
(8, 'UI/UX Design', '3 months', 500, 'Design user-friendly interfaces and improve user experience.', NULL, 'Design'),
(9, 'DevOps', '4 months', 100, 'Integrate development and operations with CI/CD and automation.', NULL, 'Programming'),
(10, 'Python Programming', '2 months', 100, 'Learn Python basics, scripting, and automation.', 'python.com', 'Programming'),
(11, 'Digital Marketing', '3 months', 100, 'Master SEO, SEM, social media, and content marketing.', NULL, 'Marketing'),
(12, 'Blockchain Fundamentals', '4 months', 100, 'Learn blockchain principles, smart contracts, and cryptocurrencies.', NULL, 'Programming'),
(13, 'Java Programming', '3 months', 100, 'Develop robust applications using Java SE and Java EE.', NULL, 'Programming'),
(14, 'Graphic Design', '2 months', 500, 'Create stunning visuals using Photoshop and Illustrator.', 'graphic.com', 'Design'),
(15, 'Networking Basics', '3 months', 500, 'Understand networking protocols, IP addressing, and routing.', NULL, 'Security'),
(16, 'Ethical Hacking', '5 months', 500, 'Explore penetration testing and secure system vulnerabilities.', NULL, 'Security'),
(17, 'C++ Programming', '3 months', 100, 'Dive into OOP and system-level programming with C++.', NULL, 'Programming'),
(18, 'React.js Development', '2.5 months', 100, 'Build modern front-end apps using React and JSX.', NULL, 'Programming'),
(19, 'Laravel Framework', '3 months', 100, 'Create dynamic websites and APIs using Laravel.', NULL, 'Programming'),
(20, 'Machine Learning', '5 months', 100, 'Develop predictive models using Python and ML libraries.', NULL, 'Programming'),
(21, 'Game Development', '4 months', 100, 'Create 2D and 3D games using Unity and C#.', 'gamecourse.com', 'Programming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
