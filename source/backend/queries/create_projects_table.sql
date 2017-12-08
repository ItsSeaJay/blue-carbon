-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 12:51 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue_carbon`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(16) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(16) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(512) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `subtitle`, `category`, `description`, `thumbnail`) VALUES
(1, 'The Legend of Zelda: Ocarina of Time', 'An action-adventure game set in the fantasy land of Hyrule.', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet diam et massa imperdiet finibus. Vivamus at ullamcorper erat. Etiam bibendum rutrum risus eget sollicitudin. Donec tincidunt enim lacus, in lacinia ex egestas sed. In ut neque in tellus ullamcorper venenatis. Phasellus eu urna metus. Proin tempus, nulla non aliquet sagittis, quam diam imperdiet lorem, sit amet cursus nunc turpis in sem. Vivamus malesuada enim ut mollis elementum. Quisque pulvinar et mauris in ullamcorper. ', 'http://via.placeholder.com/640x480'),
(2, 'Super Mario: Odyssey', 'A happy-go-lucky 3D platformer where you possess enemies to advance.', 0, 'Aliquam luctus mi id purus pharetra, id elementum eros cursus. Etiam ut aliquet odio. Nulla facilisis rhoncus ultrices. Praesent condimentum erat eu consequat consequat. Duis sit amet eleifend dui. In non erat justo. Nam pharetra aliquam consequat. Mauris accumsan neque eget sem luctus, et laoreet massa sollicitudin. Vivamus vitae convallis ipsum. Maecenas accumsan porttitor metus mattis pellentesque. ', 'http://via.placeholder.com/640x480'),
(3, 'Tony Hawk\'s Pro Skater 2', 'An extreme sports themed arcade game emphaisising patience and precision.', 0, 'Morbi eget tincidunt neque. Nulla eleifend lobortis purus, nec consequat felis hendrerit ut. Phasellus fringilla augue eget euismod maximus. Nullam interdum elit sem, eget iaculis nunc dignissim rutrum. Sed laoreet egestas tellus vitae rhoncus. Sed bibendum vehicula elit, et mollis magna vehicula ac. Fusce eleifend luctus quam ut consectetur. Donec tempor nunc a felis lacinia condimentum. Phasellus sagittis mi sed diam pretium, quis feugiat diam placerat. Sed mi purus, ullamcorper vel erat eu, rhoncus pulvinar elit. Maecenas vel egestas diam, et tempor mauris. Nulla turpis urna, congue sed interdum id, tempus eget ex. Vivamus eros est, ultricies auctor condimentum eget, pulvinar eu lectus. Integer volutpat quam lorem. Donec gravida mollis diam, ut pulvinar sapien efficitur a. Aenean vitae viverra lectus. ', 'http://via.placeholder.com/640x480'),
(4, 'Grand Theft Auto IV', 'An ultraviolent satire of American culture set in the criminal underworld of Liberty City.', 0, 'Sed non neque metus. Suspendisse at dui vel urna lacinia volutpat vel vel mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas rutrum, diam sed auctor lacinia, libero odio blandit massa, at tristique diam ex efficitur eros. Sed vitae urna accumsan odio feugiat efficitur blandit vitae justo. In eu euismod massa, at porta metus. Cras sed dui nunc. Etiam id diam nisl. Nulla eget posuere mi, at cursus mi. ', 'http://via.placeholder.com/640x480'),
(5, 'SoulCalibur', 'A 3D one-on-one fighting game of swords and staves.', 0, 'Nam vel massa a mauris euismod viverra nec at lacus. Quisque nec condimentum ipsum. Ut tincidunt ipsum tortor, at aliquet ex hendrerit a. Nulla non ante sit amet ipsum feugiat porttitor. Quisque fringilla interdum mauris. Sed mollis tortor vel enim imperdiet congue id eget nulla. Pellentesque tincidunt sem in commodo pretium. Vestibulum vitae leo turpis. In erat nulla, scelerisque eu fermentum id, porttitor non felis. Suspendisse eu tortor eu nisl bibendum interdum. Maecenas porttitor, tellus ut fermentum accumsan, nibh urna dignissim est, eu tincidunt tellus orci id turpis. Vestibulum sodales, ex ut posuere viverra, leo enim scelerisque diam, eu pretium risus enim at libero. Pellentesque ac commodo orci. Proin ornare tincidunt mi eget ultrices. Cras in urna sem. ', 'http://via.placeholder.com/640x480'),
(6, 'Perfect Dark', 'A first person shooter of futuristic industrial espionage', 0, 'In tempus nunc vel libero tempus aliquet. Vivamus ut sagittis dolor. Aliquam dictum nulla et placerat laoreet. Vestibulum lobortis est leo, id lacinia ex volutpat imperdiet. Nam ut hendrerit nibh. Donec justo neque, posuere non massa ut, fringilla pharetra nisl. Morbi tincidunt, arcu nec viverra consequat, urna purus porttitor leo, eu consectetur nibh libero vitae tortor. Morbi ac dolor sapien. Donec sagittis nisi ac fringilla sollicitudin. Etiam vitae maximus tortor. Fusce facilisis dolor in augue fringilla, non iaculis magna blandit. Proin imperdiet laoreet eleifend. ', 'http://via.placeholder.com/640x480');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
