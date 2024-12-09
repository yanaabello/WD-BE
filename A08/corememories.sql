-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 01:52 PM
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
(1, 1, 'assets/images/ic1.png', 'Going on road trips with my friends was always such an incredible experience! We would pile into the car, blaring our favorite songs and singing along at the top of our lungs. The car would be filled with laughter, jokes, and silly conversations as we drove through unfamiliar places. We’d share snac', '#FF69B4'),
(2, 1, 'assets/images/ic2.png', 'Parties with my friends were some of the best times ever! We’d dance, play games, and enjoy the company of people who made everything more fun. There was always this amazing energy, and it felt like a celebration of our friendship. The laughter and joy stayed with us long after the party.', '#FF69B4'),
(3, 1, 'assets/images/ic3.png', 'Our outings, though simple, were always special moments we cherished. Whether we were at the park or the mall, it was always about being together, laughing, and making memories. It was the time spent with friends that mattered the most, and those moments became the best parts of our lives.', '#FF69B4'),
(4, 4, 'assets/images/ic4.png', 'Getting medals and trophies was such a proud moment. They represented all the hard work I put into my studies and extracurricular activities. Whether it was for academics or events, receiving recognition made me feel accomplished and motivated to keep pushing myself.', '#FFD700'),
(5, 4, 'assets/images/ic5.png', 'Learning to drive was a huge milestone. It felt amazing to gain a new skill that gave me more independence. The sense of freedom I got from being able to go wherever I wanted made all the practice and driving lessons worth it.', '#FFD700'),
(6, 4, 'assets/images/ic6.png', 'Starting my own small nail tech business was both exciting and challenging. It pushed me to be creative while managing my time effectively. Balancing the business side and the artistry taught me a lot about responsibility and helped me grow both professionally and personally.\n\n\n\n\n\n\n', '#FFD700'),
(7, 2, 'assets/images/ic7.png', 'I love picking outfits and experimenting with different styles. It’s my personal way of expressing myself, reflecting my mood, and boosting my confidence. Fashion allows me to showcase my personality and creativity, and it always feels great when I try something new and unique.', '#c119d4'),
(8, 2, 'assets/images/ic8.png', 'Doing nail art allows me to get creative and design something unique for every client. Each new design is a fresh opportunity to show my talent, and it’s exciting to see how my art can make others feel beautiful and confident in their own way.', '#c119d4'),
(9, 2, 'assets/images/ic9.png', 'Sewing is something I enjoy because it gives me the freedom to create or fix clothes exactly how I want. It’s such a rewarding experience to see the finished product and know I’ve brought my vision to life, whether it’s a new creation or a perfectly altered piece.', '#c119d4'),
(10, 3, 'assets/images/ic10.png', 'Hiking was always such a rewarding experience. Reaching the top of the trail and taking in the stunning view made all the effort feel worthwhile. The sense of accomplishment and the beauty of nature made every step of the journey memorable.', '#87CEEB'),
(11, 3, 'assets/images/ic11.png', 'Camping was always exciting, offering the chance to stay outdoors, roast marshmallows by the fire, and sleep under the stars. It felt like a true adventure, where every moment, from setting up the tent to telling stories, added to the thrill of being surrounded by nature.', '#87CEEB'),
(12, 3, 'assets/images/ic12.png', 'Snorkeling was incredibly exciting! Seeing the colorful fish and vibrant coral up close in their natural habitat was a thrilling experience. It felt like being part of another world, and the beauty of the underwater life made it an unforgettable adventure.', '#87CEEB');

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
(1, 'Friendship Island', 'The heart of my strongest bonds and unforgettable moments with friends.', 'Friendship Island is where I keep all the laughter, support, and amazing memories I’ve shared with my friends. It’s filled with stories of hangouts, and funny jokes that no one else understands. This island also reminds me of how my friends have always been there for me, whether it’s to celebrate the good times or to lift me up during tough moments. It’s a colorful and happy place that highlights how important these relationships are in shaping who I am.', '#FF69B4', 'assets/images/friendship.jpg', NULL),
(2, 'Creativity Island', 'The home of my imagination, artistic ideas, and personal expressions.', 'Creativity Island represents my passion for turning ideas into reality, whether it’s through nail art, sewing, or styling my outfits. It’s a place where I explore my artistic side, from designing intricate nail patterns to crafting clothes and accessories with my sewing skills. I also enjoy expressing my personality through the way I dress, mixing and matching styles to create unique looks that reflect who I am. This island reminds me of how creativity allows me to stand out and feel confident in everything I do.', '#c119d4', 'assets/images/creative.jpg', NULL),
(3, 'Adventure Island', 'A space that captures my love for exploring new places and trying new things.', 'Adventure Island is all about stepping out of my comfort zone and embracing excitement. It’s filled with memories of trips, outdoor activities, and moments where I pushed myself to try something new, like hiking, swimming, or exploring unknown spots. Whether it’s a spontaneous trip with friends or a family outing, this island shows my curiosity and passion for discovering the world around me. It’s a reminder to keep chasing new experiences and making life more exciting.', '#87CEEB', 'assets/images/adventure.jpg', NULL),
(4, 'Achievement Island', 'A place where I celebrate my hard work, milestones, and personal growth as a student.', 'Achievement Island represents all the moments when my effort and dedication paid off. From showcasing my talents to earning awards or simply doing well in exams, this island reminds me that hard work leads to success. It\'s also where I keep memories of personal victories, like overcoming fears, learning new skills, and setting goals for the future. Every step here motivates me to keep striving for my dreams.', '#FFD700', 'assets/images/achievement.jpg', NULL);

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
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
