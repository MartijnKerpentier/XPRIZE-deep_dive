-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2022 at 10:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Tasks`
--

CREATE TABLE `Tasks` (
                         `id` int(11) NOT NULL,
                         `Title` varchar(255) NOT NULL,
                         `Description` text DEFAULT NULL,
                         `Publisher` varchar(255) NOT NULL,
                         `Points` int(11) NOT NULL,
                         `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tasks`
--

INSERT INTO `Tasks` (`id`, `Title`, `Description`, `Publisher`, `Points`, `Image`) VALUES
                                                                                       (1, 'cailliau.org', 'Op zoek naar een front-end designer die onze website!', 'Robert Cailliau', 1000, 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/WWW_logo_by_Robert_Cailliau.svg/601px-WWW_logo_by_Robert_Cailliau.svg.png'),
                                                                                       (2, 'Opdracht bedrijf : DHL', 'Als DHL lopen we tegen een groot probleem aan het probleem is dat we veel vervuilen door de pakketjes die we gebruiken om te leveren bedenk een goede oplossing als team!', 'DHL', 100, 'https://yt3.ggpht.com/ytc/AMLnZu_kzFtQeGXKMvhcefe2gmdwUiwsxD1W3FGIiG5JiQ=s900-c-k-c0x00ffffff-no-rj'),
                                                                                       (3, 'Project bedrijf : bol.com', 'Als bol.com zijnde willen we graag een individueel in ons software team wij willen dat je iets software achtig iets maakt waarmee we kunnen zien waar je goed in bent', 'Bol.com', 200, 'https://bol.com/social-tile.png');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
                         `id` int(11) NOT NULL,
                         `Username` varchar(255) NOT NULL,
                         `Password` varchar(255) NOT NULL,
                         `Token` varchar(255) DEFAULT NULL,
                         `Points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `Username`, `Password`, `Token`, `Points`) VALUES
    (1, 'test', 'test', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Tasks`
--
ALTER TABLE `Tasks`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Tasks`
--
ALTER TABLE `Tasks`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
