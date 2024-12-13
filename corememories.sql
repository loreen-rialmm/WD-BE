-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 02:45 PM
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
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'coreFam1', 'New Year Celebration!', NULL),
(2, 1, 'coreFam2', 'Christmas Celebration!', NULL),
(3, 1, 'coreFam3', 'Grandparents Anniversary Celebration!', NULL),
(4, 2, 'coreFriends1', 'Drawming Day!', NULL),
(5, 2, 'coreFriends2', 'Overnight at Tiaong :D', NULL),
(6, 2, 'coreFriends3', 'Catch Up!', NULL),
(7, 2, 'coreFriends4', 'Concert Core!', NULL),
(8, 3, 'coreSponty1', 'Tagaytay Getaway!', NULL),
(9, 3, 'coreSponty2', 'San Pablo Lake!', NULL),
(10, 3, 'coreSponty3', 'Febfair!', NULL),
(11, 3, 'coreSponty4', 'Sponty Day Celebration!', NULL),
(12, 3, 'coreSponty5', 'Quick Movie Date!', NULL),
(13, 4, 'coreFilmMusic1', 'My Comfort Show!', NULL),
(14, 4, 'coreFilmMusic2', 'Glenn D-Day :(', NULL),
(15, 4, 'coreFilmMusic3', 'My new fave show!', NULL),
(16, 4, 'coreFilmMusic4', 'Favorite Male Artist!', NULL),
(17, 4, 'coreFilmMusic5', 'Hopeless Romantic Core!', NULL),
(18, 4, 'coreFilmMusic6', 'New Fave Female Artist!', NULL),
(19, 1, 'coreFam4', 'Lihim Cafe!', NULL),
(20, 1, 'coreFam5', 'Bonding Moment :D', NULL),
(21, 1, 'coreFam6', 'Baguio Trip!', NULL),
(22, 2, 'coreFriends6', 'San Pablo Trip!', NULL),
(23, 2, 'coreFriends7', 'Colored Drawing :D', NULL),
(24, 3, 'coreSponty6', 'Advance Bday Treat :D', NULL),
(25, 4, 'coreFilmMusic7', 'Great Animation Movie!', NULL),
(26, 4, 'coreFilmMusic8', 'Guardians of the Galaxy :D', NULL),
(27, 4, 'coreFilmMusic9', 'Conan ON TOP >>>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family', 'My foundation and greatest support system, shaping my values and providing unconditional love.', 'Family is the core of who I am. They’ve been my guiding light through life’s ups and downs, instilling values like kindness, perseverance, and compassion. Their unconditional love has been a source of strength, grounding me in times of uncertainty and celebrating my successes with heartfelt pride. Whether through shared meals, heartfelt conversations, or quiet moments of togetherness, my family has been the unwavering force shaping my character and inspiring my dreams.', '#42738D', 'bgInOut2', NULL),
(2, 'Friends', 'My chosen family, offering companionship, laughter, and invaluable life lessons.', 'My friends are my second family—each bringing unique colors to my life’s canvas. They’ve been there for the laughter-filled moments and the times of challenge, teaching me empathy, patience, and resilience. Every adventure, inside joke, and heart-to-heart has left a lasting imprint on my soul, reminding me that life is richer when shared with those who truly understand you. Their presence is a testament to the power of connection and mutual growth.', '#D6CE85', 'bgInOut3', NULL),
(3, 'Sponty Trip', 'My adventurous side, embracing spontaneity and the joy of unplanned journeys.', 'Sponty Trip represents my love for adventure and the thrill of stepping into the unknown. These unplanned escapades have taught me to embrace change, find joy in the unexpected, and appreciate life’s simple pleasures. Whether it\'s a sudden road trip or a last-minute outing, these experiences have broadened my horizons and shown me the beauty of living in the moment.', '#7EB384', 'bgInOut4', NULL),
(4, 'Film and Music', 'My creative sanctuary, where stories and melodies fuel my imagination and emotional expression.', 'Film and Music are my emotional outlets, where I find comfort, inspiration, and self-expression. Movies transport me to different worlds, while music speaks directly to my soul, evoking emotions that words sometimes can\'t. Together, they fuel my imagination, nurture my creativity, and provide solace during challenging times. They’ve helped me navigate my feelings, discover new perspectives, and remain grounded in my journey of self-discovery.', '#B78DBF', 'bgInOut5', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
