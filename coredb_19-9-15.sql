-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2015 at 03:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('AddPermission', 2, 'Able to add permission', NULL, NULL, 1434271619, 1434271619),
('Author', 1, 'Author descriptions', NULL, NULL, 1434264927, 1434264927),
('Client', 1, 'Client Roles', NULL, NULL, 1434268923, 1434268923),
('CreatePost', 2, 'Able to create post', NULL, NULL, 1437560729, 1437560729),
('Duduk nganga', 2, 'goyang kaki', NULL, NULL, 1439363830, 1439363830),
('Remove Permission', 2, 'Able to remove permission', NULL, NULL, 1434271729, 1434271729),
('System Admin', 1, 'System Administration', NULL, NULL, 1437560806, 1437560806),
('ViewAuthorisation', 2, 'Able to view Authorisation', NULL, NULL, 1434271465, 1434271465);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Client', 'AddPermission'),
('Client', 'Author'),
('System Admin', 'Client'),
('Author', 'Duduk nganga'),
('Author', 'Remove Permission');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_review`
--

CREATE TABLE IF NOT EXISTS `campaign_review` (
  `id` int(11) NOT NULL,
  `review_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE IF NOT EXISTS `contest` (
  `id` int(7) NOT NULL,
  `contest_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_type` int(2) NOT NULL DEFAULT '0',
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`id`, `contest_id`, `question_id`, `question_type`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(116, 55, 2, 1, 'fdf', '{"answer1":"fdsaf"}', 1, 0, 0),
(117, 55, 3, 0, 'fdf', '{"answer1":"fdf","answer2":"ffd","answer3":"fsdf","answer4":"fsdf","answer5":"B"}', 1, 0, 0),
(118, 55, 4, 1, 'fasdf', '{"answer1":"adfasdfda"}', 1, 0, 0),
(123, 120, 1, 1, 'ret', '{"answer1":"ertert"}', 1, 0, 0),
(124, 55, 1, 1, 'trty', '{"answer1":"rtyrt"}', 1, 0, 0),
(129, 55, 1, 0, 'gfdg', '{"answer1":"f","answer2":"fsdf","answer3":"fds","answer4":"gf","answer5":"A"}', 1, 0, 0),
(137, 120, 1, 0, 'dfgd', '{"answer1":"gdf","answer2":"gdfg","answer3":"dfgdfg","answer4":"gdfg","answer5":"A"}', 1, 0, 0),
(139, 120, 1, 1, 'rrrrrrrrrr', '{"answer1":"rrrrrrrrrrrr"}', 1, 0, 0),
(140, 122, 1, 1, 'rewtwr', '{"answer1":"twerter"}', 1, 1442141692, 1442141692),
(141, 122, 2, 0, 'fdsafad', '{"answer1":"e","answer2":"e","answer3":"w","answer4":"w","answer5":"A"}', 1, 1442141708, 1442141708);

-- --------------------------------------------------------

--
-- Table structure for table `contest_main`
--

CREATE TABLE IF NOT EXISTS `contest_main` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contest_name` varchar(31) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest_main`
--

INSERT INTO `contest_main` (`id`, `user_id`, `contest_name`, `status`, `created_at`, `updated_at`) VALUES
(55, 5, 'My first contest 127', 0, 0, 0),
(120, 6, 'Contest Pertama', 0, 0, 0),
(122, 5, 'ttt', 1, 1442138661, 1442138661);

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE IF NOT EXISTS `lookup` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(4, 'ACTIVE', 1, 'Package', 1),
(5, 'INACTIVE', 0, 'Package', 2),
(6, 'ACTIVE', 1, 'Contest', 1),
(7, 'INACTIVE', 0, 'Contest', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1432527015),
('m130524_201442_init', 1432527020),
('m140506_102106_rbac_init', 1432540036);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(80) NOT NULL DEFAULT '',
  `maxCallOut` int(11) NOT NULL COMMENT 'maximum of callouts allowed',
  `maxAllowedCode` int(11) NOT NULL COMMENT 'number of given code',
  `enable` int(11) DEFAULT '0' COMMENT 'Status of the package',
  `code` varchar(19) DEFAULT NULL COMMENT 'package code',
  `videoMaxSize` varchar(7) DEFAULT '1000',
  `pictureMaxSize` varchar(7) DEFAULT '512',
  `minBalance` int(11) DEFAULT NULL COMMENT 'Minimum balamce on callouts',
  `update_by` int(11) DEFAULT NULL,
  `updated_at` int(11) NOT NULL,
  `create_by` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL,
  `contents` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `contents`) VALUES
(3, '<p><strong>Cromok YEYEYEEEE</strong></p>\r\n\r\n<p><strong><img alt="" src="http://farm8.staticflickr.com/7062/6955616323_d264d6612d_o.jpg" style="height:330px; width:450px" /></strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `setting_item`
--

CREATE TABLE IF NOT EXISTS `setting_item` (
  `id` int(11) NOT NULL,
  `name` varchar(101) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_item`
--

INSERT INTO `setting_item` (`id`, `name`, `update_by`, `create_by`) VALUES
(1, 'layout', NULL, NULL),
(2, 'unify', NULL, NULL),
(3, 'inspinia', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '7',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '5QgSFLJaRv4Rr1wZ3sVBjMw9IStH7pK1', '$2y$13$jQ2cBEwxWubRtF853Xpfe.pVG4mEikyUjJfXsOrV/MDYFXz6FutdC', NULL, 'fahmy@aptinventions.com', 10, 1432527060, 1432527060),
(5, 'hafiz', 'KNXs9RIJxWy37s_L5bLRW43Wrton3UFw', '$2y$13$ywbdTCYlvy1Oa9QufBAJ9OZIyFxNOpdT2mHGgeCf42eju60LImYjO', NULL, 'koihafiz@gmail.com', 10, 1441482104, 1441482104);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `campaign_review`
--
ALTER TABLE `campaign_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contest_main`
--
ALTER TABLE `contest_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup`
--
ALTER TABLE `lookup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `package_code_idx` (`code`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_item`
--
ALTER TABLE `setting_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign_review`
--
ALTER TABLE `campaign_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `contest_main`
--
ALTER TABLE `contest_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `lookup`
--
ALTER TABLE `lookup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `setting_item`
--
ALTER TABLE `setting_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
