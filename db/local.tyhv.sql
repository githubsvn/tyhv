-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2013 at 01:11 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `local.tyhv`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `acl_classes`
--


-- --------------------------------------------------------

--
-- Table structure for table `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `acl_entries`
--


-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `acl_object_identities`
--


-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acl_object_identity_ancestors`
--


-- --------------------------------------------------------

--
-- Table structure for table `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `acl_security_identities`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtx_branch`
--

CREATE TABLE IF NOT EXISTS `mtx_branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CAB0DCA85EE01E44` (`created_id`),
  KEY `IDX_CAB0DCA8960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_branch`
--

INSERT INTO `mtx_branch` (`id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, '2013-07-01 11:44:41', '2013-07-01 11:44:41'),
(2, 2, 2, 1, '2013-07-01 11:44:48', '2013-07-01 11:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_branch_language`
--

CREATE TABLE IF NOT EXISTS `mtx_branch_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_64D3050082F1BAF4` (`language_id`),
  KEY `IDX_64D30500DCD6CC49` (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_branch_language`
--

INSERT INTO `mtx_branch_language` (`id`, `language_id`, `branch_id`, `name`) VALUES
(1, 2, 1, 'ABC'),
(2, 2, 2, 'DEF');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_category`
--

CREATE TABLE IF NOT EXISTS `mtx_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A8C8079B727ACA70` (`parent_id`),
  KEY `IDX_A8C8079B5EE01E44` (`created_id`),
  KEY `IDX_A8C8079B960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mtx_category`
--

INSERT INTO `mtx_category` (`id`, `parent_id`, `created_id`, `updated_id`, `lft`, `rgt`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, NULL, 1, 2, 0, NULL, NULL),
(3, NULL, 2, 2, 3, 8, 1, '2013-07-01 11:49:23', '2013-07-01 11:49:23'),
(4, 3, 2, 2, 4, 5, 1, '2013-07-01 11:49:34', '2013-07-01 11:49:34'),
(5, 3, 2, 2, 6, 7, 1, '2013-07-01 11:49:43', '2013-07-01 11:49:43'),
(6, NULL, 2, 2, 9, 14, 1, '2013-07-01 11:49:50', '2013-07-01 11:49:50'),
(7, 6, 2, 2, 10, 11, 1, '2013-07-01 11:49:59', '2013-07-01 11:49:59'),
(8, 6, 2, 2, 12, 13, 1, '2013-07-01 11:50:12', '2013-07-01 11:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_category_language`
--

CREATE TABLE IF NOT EXISTS `mtx_category_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B2A3A34012469DE2` (`category_id`),
  KEY `IDX_B2A3A34082F1BAF4` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mtx_category_language`
--

INSERT INTO `mtx_category_language` (`id`, `category_id`, `language_id`, `name`) VALUES
(1, 3, 2, 'Xã Hội'),
(2, 4, 2, 'Giáo Dục'),
(3, 5, 2, 'Du Lịch'),
(4, 6, 2, 'Thể Thao'),
(5, 7, 2, 'Bóng Đá'),
(6, 8, 2, 'Tenis');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_company`
--

CREATE TABLE IF NOT EXISTS `mtx_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `charter_capital` double DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1ACB19A7C54C8C93` (`type_id`),
  KEY `IDX_1ACB19A75EE01E44` (`created_id`),
  KEY `IDX_1ACB19A7960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_company`
--

INSERT INTO `mtx_company` (`id`, `type_id`, `created_id`, `updated_id`, `charter_capital`, `phone`, `fax`, `mst`, `email`, `status`, `created_at`, `updated_at`, `logo`, `website`) VALUES
(1, 1, 2, 2, NULL, NULL, NULL, NULL, NULL, 1, '2013-07-01 11:44:23', '2013-07-01 11:44:23', NULL, NULL),
(2, 1, 2, 2, NULL, NULL, NULL, NULL, NULL, 1, '2013-07-01 11:44:29', '2013-07-01 11:44:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_companytype`
--

CREATE TABLE IF NOT EXISTS `mtx_companytype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9AF919955EE01E44` (`created_id`),
  KEY `IDX_9AF91995960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_companytype`
--

INSERT INTO `mtx_companytype` (`id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 0, '2013-07-01 10:01:05', '2013-07-01 10:01:05'),
(3, 2, 2, 1, '2013-07-01 11:44:11', '2013-07-01 11:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_companytype_language`
--

CREATE TABLE IF NOT EXISTS `mtx_companytype_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companytype_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_54F6538B1E00F65` (`companytype_id`),
  KEY `IDX_54F6538B82F1BAF4` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_companytype_language`
--

INSERT INTO `mtx_companytype_language` (`id`, `companytype_id`, `language_id`, `name`) VALUES
(1, 1, 2, 'TNHH'),
(3, 3, 2, 'CP');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_company_language`
--

CREATE TABLE IF NOT EXISTS `mtx_company_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `representation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_757D1B7C82F1BAF4` (`language_id`),
  KEY `IDX_757D1B7C979B1AD6` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_company_language`
--

INSERT INTO `mtx_company_language` (`id`, `language_id`, `company_id`, `name`, `description`, `adress`, `representation`) VALUES
(1, 2, 1, 'ABC', NULL, NULL, NULL),
(2, 2, 2, 'DEF', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_group`
--

CREATE TABLE IF NOT EXISTS `mtx_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `active` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mtx_group`
--

INSERT INTO `mtx_group` (`id`, `name`, `created_at`, `updated_at`, `active`) VALUES
(4, 'Administrators', '2013-07-01 09:27:00', '2013-07-01 09:27:00', 1),
(5, 'Manager', '2013-07-01 09:27:00', '2013-07-01 09:27:00', 1),
(6, 'Users', '2013-07-01 09:27:00', '2013-07-01 09:27:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_group_role`
--

CREATE TABLE IF NOT EXISTS `mtx_group_role` (
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`role_id`),
  KEY `IDX_C468F723FE54D947` (`group_id`),
  KEY `IDX_C468F723D60322AC` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_group_role`
--

INSERT INTO `mtx_group_role` (`group_id`, `role_id`) VALUES
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_language`
--

CREATE TABLE IF NOT EXISTS `mtx_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lang_key` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `is_default` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7A5F6FEF30F485F4` (`lang_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_language`
--

INSERT INTO `mtx_language` (`id`, `name`, `lang_key`, `is_default`) VALUES
(2, 'Tiếng Việt', 'vi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_media`
--

CREATE TABLE IF NOT EXISTS `mtx_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ED6E9F4812469DE2` (`category_id`),
  KEY `IDX_ED6E9F485EE01E44` (`created_id`),
  KEY `IDX_ED6E9F48960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_media`
--

INSERT INTO `mtx_media` (`id`, `category_id`, `created_id`, `updated_id`, `name`, `width`, `height`, `created_at`, `updated_at`, `active`) VALUES
(1, 6, NULL, NULL, '51d10900cd7c6.jpg', NULL, NULL, '2013-07-01 11:43:44', '2013-07-01 11:43:44', 1),
(2, 9, NULL, NULL, '51d109f7df202.jpeg', NULL, NULL, '2013-07-01 11:47:51', '2013-07-01 11:47:51', 1),
(3, 9, NULL, NULL, '51d10a0228c2d.jpeg', NULL, NULL, '2013-07-01 11:48:02', '2013-07-01 11:48:02', 1),
(4, 9, NULL, NULL, '51d10a0d8defe.jpg', NULL, NULL, '2013-07-01 11:48:13', '2013-07-01 11:48:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_mediacategory`
--

CREATE TABLE IF NOT EXISTS `mtx_mediacategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_70EAB08727ACA70` (`parent_id`),
  KEY `IDX_70EAB085EE01E44` (`created_id`),
  KEY `IDX_70EAB08960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mtx_mediacategory`
--

INSERT INTO `mtx_mediacategory` (`id`, `parent_id`, `created_id`, `updated_id`, `lft`, `rgt`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 1, 2, 0, NULL, NULL),
(2, NULL, 2, 2, 3, 8, 1, '2013-07-01 11:41:43', '2013-07-01 11:41:43'),
(3, NULL, 2, 2, 9, 14, 1, '2013-07-01 11:41:55', '2013-07-01 11:41:55'),
(4, 2, 2, 2, 4, 5, 1, '2013-07-01 11:42:09', '2013-07-01 11:42:09'),
(5, 2, 2, 2, 6, 7, 1, '2013-07-01 11:42:18', '2013-07-01 11:42:18'),
(6, 3, 2, 2, 10, 11, 1, '2013-07-01 11:42:28', '2013-07-01 11:42:28'),
(7, 3, 2, 2, 12, 13, 1, '2013-07-01 11:42:42', '2013-07-01 11:42:42'),
(8, NULL, 2, 2, 15, 20, 1, '2013-07-01 11:46:07', '2013-07-01 11:46:07'),
(9, 8, 2, 2, 16, 17, 1, '2013-07-01 11:46:17', '2013-07-01 11:46:17'),
(10, 8, 2, 2, 18, 19, 1, '2013-07-01 11:46:25', '2013-07-01 11:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_mediacategory_language`
--

CREATE TABLE IF NOT EXISTS `mtx_mediacategory_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mediacategory_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FBDE26F27B28A30E` (`mediacategory_id`),
  KEY `IDX_FBDE26F282F1BAF4` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mtx_mediacategory_language`
--

INSERT INTO `mtx_mediacategory_language` (`id`, `mediacategory_id`, `language_id`, `name`) VALUES
(1, 2, 2, 'Xã Hội'),
(2, 3, 2, 'Thể Thao'),
(3, 4, 2, 'Giáo Dục'),
(4, 5, 2, 'Du Lịch'),
(5, 6, 2, 'Bóng Đá'),
(6, 7, 2, 'Tenis'),
(7, 8, 2, 'NGÀNH HÀNG ABC'),
(8, 9, 2, 'NHÓM ABC'),
(9, 10, 2, 'NHÓM DEF');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_menu`
--

CREATE TABLE IF NOT EXISTS `mtx_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3798AC02727ACA70` (`parent_id`),
  KEY `IDX_3798AC025EE01E44` (`created_id`),
  KEY `IDX_3798AC02960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_menu`
--

INSERT INTO `mtx_menu` (`id`, `parent_id`, `created_id`, `updated_id`, `lft`, `rgt`, `status`, `created_at`, `updated_at`, `url`) VALUES
(2, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_menu_language`
--

CREATE TABLE IF NOT EXISTS `mtx_menu_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EC57E1DECCD7E912` (`menu_id`),
  KEY `IDX_EC57E1DE82F1BAF4` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mtx_menu_language`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtx_news`
--

CREATE TABLE IF NOT EXISTS `mtx_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_574E0FC112469DE2` (`category_id`),
  KEY `IDX_574E0FC15EE01E44` (`created_id`),
  KEY `IDX_574E0FC1960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_news`
--

INSERT INTO `mtx_news` (`id`, `category_id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`, `image`) VALUES
(1, 7, 2, 2, 1, '2013-07-01 11:53:00', '2013-07-01 11:53:00', '51d10b2c48c9f.jpg'),
(2, 3, 2, 2, 1, '2013-07-01 11:57:22', '2013-07-01 11:57:22', '51d10c329dcef.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_news_language`
--

CREATE TABLE IF NOT EXISTS `mtx_news_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8938071982F1BAF4` (`language_id`),
  KEY `IDX_89380719B5A459A0` (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_news_language`
--

INSERT INTO `mtx_news_language` (`id`, `language_id`, `news_id`, `name`, `intro`, `description`) VALUES
(1, 2, 1, 'XMXT.SG: Đoàn Việt Cường bị sập sống mũi', '<p><span style="color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: bold; letter-spacing: normal; line-height: 24px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; display: inline !important; float: none;">Trận đấu tr&ecirc;n s&acirc;n Đồng Nai chiều nay 30/6 c&oacute; kh&aacute; nhiều t&igrave;nh huống kh&aacute; hy hữu, ngo&agrave;i việc trận đấu su&yacute;t bị ho&atilde;n v&igrave; gi&oacute; lốc, th&igrave; một cầu thủ phải l&ecirc;n xe đi cấp cứu.</span></p>', '<p style="margin-top: 0px; margin-right: auto; margin-bottom: 0px; margin-left: auto; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-weight: normal; font-style: normal; vertical-align: baseline; font-size: 14px; color: #000000; font-family: Arial, Helvetica, sans-serif; font-variant: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; padding: 0px;">Ph&uacute;t 30, trong một pha kh&ocirc;ng chiến, hậu vệ Đo&agrave;n Việt Cường của XMXT.SG đ&atilde; bị tiền đạo Henry của Đồng Nai v&ocirc; t&igrave;nh quất tay tr&uacute;ng mặt. C&uacute; ra tay khiến Việt Cường đổ ập xuống s&acirc;n v&agrave; m&aacute;u loang đầy mặt khiến cầu thủ 2 đội hoảng hốt gọi ngay bộ phận y tế v&agrave;o cấp cứu cho anh.<br /><br />Điều hy hữu l&agrave; thay v&igrave; chờ bộ phận khi&ecirc;ng c&aacute;ng đưa<span class="Apple-converted-space">&nbsp;</span><a style="border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-weight: inherit; font-style: inherit; vertical-align: baseline; text-decoration: none; color: #0377ba; border-width: 0px; padding: 0px; margin: 0px;" href="http://bongdaplus.vn/VLeague/XMXTSai-Gon-Den-nhu-Doan-Viet-Cuong/96372.bbd">Việt Cường</a><span class="Apple-converted-space">&nbsp;</span>ra s&acirc;n để đưa l&ecirc;n xe đi cấp cứu th&igrave; chiếc xe cứu thương đ&atilde; chạy thẳng v&agrave;o s&acirc;n cỏ, khiến BTC s&acirc;n một phen&hellip; hoảng hốt. V&agrave; một nh&acirc;n vi&ecirc;n đ&atilde; tức tốc chạy ra để ngăn lại trước khi chiếc xe n&agrave;y ph&oacute;ng v&agrave;o giữa s&acirc;n. Bởi nếu kh&ocirc;ng th&igrave; nhiều khả năng trận đấu phải ho&atilde;n lần nữa, v&igrave; s&acirc;n bị xe cứu thương&hellip; ph&aacute; n&aacute;t mặt cỏ.</p>\r\n<div style="border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-weight: normal; font-style: normal; vertical-align: baseline; color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-variant: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: center; border-width: 0px; padding: 0px; margin: 0px;"><img style="border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-weight: inherit; font-style: inherit; vertical-align: baseline; border-width: 0px; padding: 0px; margin: 0px;" src="http://bongdaplus.vn/Uploaded/dotuan/2013_06_30/xe%20cuu%20thuong.jpg" alt="" /><br /><em>Xe cứu thương chạy thẳng v&agrave;o s&acirc;n, may m&agrave; bị ngăn lại kịp</em></div>\r\n<p style="margin-top: 0px; margin-right: auto; margin-bottom: 0px; margin-left: auto; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; font-weight: normal; font-style: normal; vertical-align: baseline; font-size: 14px; color: #000000; font-family: Arial, Helvetica, sans-serif; font-variant: normal; letter-spacing: normal; line-height: 25px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; padding: 0px;">Sau đ&oacute;, Việt Cường đ&atilde; được đưa đi cấp cứu v&agrave; sau đ&oacute; được chuyển thẳng về TPHCM để chữa trị, theo BHL đội XMXT.SG cho biết, Cường bị sập sống mũi.<br /><br />Chưa hết, mưa gi&ocirc;ng khiến s&acirc;n vận động Đồng Nai bị mất điện, v&igrave; thế c&aacute;c ph&oacute;ng vi&ecirc;n v&agrave; HLV trưởng của 2 đội phải họp b&aacute;o trong t&igrave;nh cảnh kh&ocirc;ng đ&egrave;n đuốc. Đồng thời, tất cả phải căng tai l&ecirc;n để nghe c&acirc;u hỏi v&agrave; trả lời của nhau, trong l&uacute;c b&ecirc;n ngo&agrave;i tiếng loa ph&oacute;ng thanh của chương tr&igrave;nh xổ số ph&aacute;t ầm ầm!?<br /><br />Đ&uacute;ng l&agrave; lạ l&ugrave;ng như s&acirc;n Đồng Nai!</p>'),
(2, 2, 2, 'Bị "tuýt còi", có quyền chứng minh không vi phạm', '<p><span style="color: #5f5f5f; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: bold; letter-spacing: normal; line-height: 19px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; display: inline !important; float: none;">Theo Luật xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh (XLVPHC) c&oacute; hiệu lực từ ng&agrave;y 1/7, người bị xử phạt vi phạm h&agrave;nh ch&iacute;nh c&oacute; quyền chứng minh m&igrave;nh kh&ocirc;ng vi phạm.</span></p>', '<p><span class="VB_noi_dung" style="font-size: 10pt; color: #000000; line-height: 19px; font-weight: normal;">Cụ thể, c&aacute; nh&acirc;n c&oacute; quyền giải tr&igrave;nh trực tiếp hoặc bằng văn bản với người c&oacute; thẩm quyền xử phạt vi phạm h&agrave;nh ch&iacute;nh về h&agrave;nh vi vi phạm của m&igrave;nh. Người c&oacute; thẩm quyền xử phạt phải th&ocirc;ng b&aacute;o bằng văn bản cho người vi phạm về thời gian v&agrave; địa điểm tổ chức phi&ecirc;n giải tr&igrave;nh trực tiếp trong thời hạn 5 ng&agrave;y, kể từ ng&agrave;y nhận được y&ecirc;u cầu của người vi phạm.</span><br /><br /></p>\r\n<center style="color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<table class="contentimg" style="border-collapse: collapse; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; border-width: initial !important; border-color: initial !important; border-image: initial !important; width: 495px; border-style: none !important;">\r\n<tbody>\r\n<tr>\r\n<td style="border-width: initial !important; border-color: initial !important; border-image: initial !important; border-style: none !important;"><img style="border-width: initial !important; border-color: initial !important; border-image: initial !important; cursor: pointer; padding-top: 0px; padding-right: 0px; padding-bottom: 5px; padding-left: 0px; border-style: none !important;" src="http://a8.vietbao.vn/images/vn888/hot/v2013/8be1c668db-1-CSGT-tuyt-coi-co-quyen-chung-minh-khong-vi-pham.jpeg" alt="Bi tuyt coi co quyen chung minh khong vi pham" width="470" /></td>\r\n</tr>\r\n<tr>\r\n<td style="border-width: initial !important; border-color: initial !important; border-image: initial !important; border-style: none !important;"><span class="VB_chu_thich_hinh" style="color: #005399; font-weight: normal; font-style: italic;">&nbsp;Từ ng&agrave;y 1/7, người bị xử phạt vi phạm h&agrave;nh ch&iacute;nh c&oacute; quyền chứng minh m&igrave;nh kh&ocirc;ng vi phạm.</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</center>\r\n<div style="color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; padding: 0px; margin: 0px;"><span class="VB_noi_dung" style="font-size: 10pt; color: #000000; line-height: 19px; font-weight: normal;">Người c&oacute; thẩm quyền xử phạt tổ chức phi&ecirc;n giải tr&igrave;nh trực tiếp v&agrave; c&oacute; tr&aacute;ch nhiệm n&ecirc;u căn cứ ph&aacute;p l&yacute; v&agrave; t&igrave;nh tiết, chứng cứ li&ecirc;n quan đến h&agrave;nh vi vi phạm h&agrave;nh ch&iacute;nh, h&igrave;nh thức xử phạt, biện ph&aacute;p khắc phục hậu quả dự kiến &aacute;p dụng đối với h&agrave;nh vi vi phạm. Người vi phạm h&agrave;nh ch&iacute;nh, hoặc người đại diện hợp ph&aacute;p của họ c&oacute; quyền tham gia phi&ecirc;n giải tr&igrave;nh v&agrave; đưa ra &yacute; kiến, chứng cứ để bảo vệ quyền v&agrave; lợi &iacute;ch hợp ph&aacute;p của m&igrave;nh.<br /></span></div>\r\n<p><span class="VB_noi_dung" style="font-size: 14px; color: #000000; line-height: 19px; font-weight: normal; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff;">&nbsp;</span></p>\r\n<div style="color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; padding: 0px; margin: 0px;"><span class="VB_noi_dung" style="font-size: 10pt; color: #000000; line-height: 19px; font-weight: normal;">Người c&oacute; thẩm quyền xử phạt c&oacute; tr&aacute;ch nhiệm xem x&eacute;t &yacute; kiến giải tr&igrave;nh của c&aacute; nh&acirc;n, tổ chức vi phạm h&agrave;nh ch&iacute;nh trước khi ra quyết định xử phạt, trừ trường hợp c&aacute; nh&acirc;n, tổ chức kh&ocirc;ng c&oacute; y&ecirc;u cầu giải tr&igrave;nh trong thời hạn quy định.&nbsp;<br /><br /></span></div>\r\n<div style="color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; padding: 0px; margin: 0px;"><span class="VB_noi_dung" style="font-size: 10pt; color: #000000; line-height: 19px; font-weight: normal;">B&ecirc;n cạnh đ&oacute;, Luật XLVPHC sửa đổi bổ sung cũng c&oacute; nhiều điểm mới, đ&aacute;ng lưu &yacute;. Luật XLVPHC quy định, người từ đủ 14 tuổi đến dưới 16 tuổi bị xử phạt vi phạm h&agrave;nh ch&iacute;nh về vi phạm h&agrave;nh ch&iacute;nh do cố &yacute;; người từ đủ 16 tuổi trở l&ecirc;n bị xử phạt vi phạm h&agrave;nh ch&iacute;nh về mọi vi phạm h&agrave;nh ch&iacute;nh.<br /></span></div>\r\n<p><span class="VB_noi_dung" style="font-size: 14px; color: #000000; line-height: 19px; font-weight: normal; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff;">&nbsp;</span></p>\r\n<div style="color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; padding: 0px; margin: 0px;"><span class="VB_noi_dung" style="font-size: 10pt; color: #000000; line-height: 19px; font-weight: normal;">Luật bổ sung c&aacute;c biện ph&aacute;p khắc phục hậu quả: buộc cải ch&iacute;nh th&ocirc;ng tin sai sự thật hoặc g&acirc;y nhầm lẫn; buộc loại bỏ yếu tố vi phạm tr&ecirc;n h&agrave;ng h&oacute;a, bao b&igrave; h&agrave;ng h&oacute;a, phương tiện kinh doanh, vật phẩm; buộc nộp lại số lợi bất hợp ph&aacute;p c&oacute; được do thực hiện vi phạm h&agrave;nh ch&iacute;nh hoặc buộc nộp lại số tiền bằng trị gi&aacute; tang vật, phương tiện vi phạm h&agrave;nh ch&iacute;nh đ&atilde; bị ti&ecirc;u thụ, tẩu t&aacute;n, ti&ecirc;u hủy tr&aacute;i quy định của ph&aacute;p luật...<br /></span></div>\r\n<p><span class="VB_noi_dung" style="font-size: 14px; color: #000000; line-height: 19px; font-weight: normal; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff;">&nbsp;</span></p>\r\n<div style="color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; padding: 0px; margin: 0px;"><span class="VB_noi_dung" style="font-size: 10pt; color: #000000; line-height: 19px; font-weight: normal;">Những trường hợp kh&ocirc;ng xử phạt vi phạm h&agrave;nh ch&iacute;nh cũng được quy định cụ thể, bao gồm: vi phạm h&agrave;nh ch&iacute;nh trong t&igrave;nh thế cấp thiết; vi phạm h&agrave;nh ch&iacute;nh do ph&ograve;ng vệ ch&iacute;nh đ&aacute;ng; vi phạm h&agrave;nh ch&iacute;nh do sự kiện bất ngờ; vi phạm h&agrave;nh ch&iacute;nh do sự kiện bất khả kh&aacute;ng; vi phạm h&agrave;nh ch&iacute;nh kh&ocirc;ng c&oacute; năng lực tr&aacute;ch nhiệm h&agrave;nh ch&iacute;nh; người thực hiện h&agrave;nh vi vi phạm h&agrave;nh ch&iacute;nh chưa đủ tuổi bị xử phạt vi phạm h&agrave;nh ch&iacute;nh.<br /></span></div>\r\n<p><span class="VB_noi_dung" style="font-size: 14px; color: #000000; line-height: 19px; font-weight: normal; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff;">&nbsp;</span></p>\r\n<div style="color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; padding: 0px; margin: 0px;"><span class="VB_noi_dung" style="font-size: 10pt; color: #000000; line-height: 19px; font-weight: normal;">Mức phạt tiền trong xử phạt vi phạm h&agrave;nh ch&iacute;nh từ 50.000 đồng đến 1 tỷ đồng đối với c&aacute; nh&acirc;n, từ 100.000 đồng đến 2 tỷ đồng đối với tổ chức. Xử phạt vi phạm h&agrave;nh ch&iacute;nh kh&ocirc;ng lập bi&ecirc;n bản được &aacute;p dụng trong trường hợp xử phạt cảnh c&aacute;o hoặc phạt tiền đến 250.000 đồng đối với c&aacute; nh&acirc;n, 500.000 đồng đối với tổ chức v&agrave; người c&oacute; thẩm quyền xử phạt phải ra quyết định xử phạt vi phạm h&agrave;nh ch&iacute;nh tại chỗ.<br /></span></div>\r\n<div style="color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; padding: 0px; margin: 0px;">\r\n<p style="margin-top: 10px !important; margin-right: 0px !important; margin-bottom: 10px !important; margin-left: 0px !important; font-size: 13px; font-family: Arial, Helvetica, sans-serif !important; padding: 0px;"><span class="VB_noi_dung" style="font-size: 10pt; color: #000000; line-height: 19px; font-weight: normal;">Khu vực nội th&agrave;nh của th&agrave;nh phố trực thuộc trung ương th&igrave; mức phạt tiền c&oacute; thể cao hơn 2 lần mức phạt chung &aacute;p dụng đối với c&ugrave;ng h&agrave;nh vi vi phạm trong c&aacute;c lĩnh vực giao th&ocirc;ng đường bộ; bảo vệ m&ocirc;i trường; an ninh trật tự, an to&agrave;n x&atilde; hội.</span></p>\r\n<p style="margin-top: 10px !important; margin-right: 0px !important; margin-bottom: 10px !important; margin-left: 0px !important; font-size: 13px; font-family: Arial, Helvetica, sans-serif !important; padding: 0px;" align="right"><em>Viet Bao.vn (Theo Tiền phong)</em></p>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_news_media`
--

CREATE TABLE IF NOT EXISTS `mtx_news_media` (
  `news_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`news_id`,`media_id`),
  KEY `IDX_AAC8006BB5A459A0` (`news_id`),
  KEY `IDX_AAC8006BEA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_news_media`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtx_page`
--

CREATE TABLE IF NOT EXISTS `mtx_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5E9720B15EE01E44` (`created_id`),
  KEY `IDX_5E9720B1960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_page`
--

INSERT INTO `mtx_page` (`id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`, `image`) VALUES
(1, 2, 2, 1, '2013-07-01 11:55:14', '2013-07-01 11:55:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_page_language`
--

CREATE TABLE IF NOT EXISTS `mtx_page_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4099A36882F1BAF4` (`language_id`),
  KEY `IDX_4099A368C4663E4` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_page_language`
--

INSERT INTO `mtx_page_language` (`id`, `language_id`, `page_id`, `name`, `intro`, `description`) VALUES
(1, 2, 1, 'Giới thiệu', '<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: center; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #212121; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">C&Ocirc;NG TY CỔ PHẦN THƯƠNG MẠI NGUYỄN KIM<br style="line-height: 10px;" /></strong></span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: center; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #212121; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">Trụ sở ch&iacute;nh: 63-65-67 Trần Hưng Đạo, Q.1, Tp.Hồ Ch&iacute; Minh</strong></span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: center; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #212121; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;"><img style="border-style: initial; border-color: initial; border-image: initial; font-size: 0px; color: transparent; vertical-align: middle; border-width: 0px; padding: 0px; margin: 0px;" title="Thong tin cong ty Nguyen Kim" src="http://www.nguyenkim.com/images/companies/1/Design/page_nguyenkim/icon/Callcontact.png" alt="Thong tin cong ty Nguyen Kim" width="25" height="25" />Điện thoại: (08) 38 211 211 Fax:&nbsp; (84-8) 38 210 818<br style="line-height: 10px;" /></strong></span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: center; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #212121; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;"><img style="border-style: initial; border-color: initial; border-image: initial; font-size: 0px; color: transparent; vertical-align: middle; border-width: 0px; padding: 0px; margin: 0px;" title="Emmail nguyenkim" src="http://www.nguyenkim.com/images/companies/1/Design/page_nguyenkim/icon/email.png" alt="Emmail nguyenkim" width="25" height="25" /><span class="Apple-converted-space">&nbsp;</span>Email:&nbsp;<span class="Apple-converted-space">&nbsp;</span><a style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #0088cc; text-decoration: none; cursor: pointer; border-width: 0px; padding: 0px; margin: 0px;" href="mailto:info@trade.nguyenkim.com"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #212121; border-width: 0px; padding: 0px; margin: 0px;">info@trade.nguyenkim.com</span></a></strong></span></p>\r\n<p><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #212121; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;"><img style="border-style: initial; border-color: initial; border-image: initial; font-size: 0px; color: transparent; vertical-align: middle; border-width: 0px; padding: 0px; margin: 0px;" title="website nguyenkim" src="http://www.nguyenkim.com/images/companies/1/Design/page_nguyenkim/icon/website.png" alt="website nguyenkim" width="25" height="25" />Website:&nbsp;<a style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #0088cc; text-decoration: none; cursor: pointer; border-width: 0px; padding: 0px; margin: 0px;" href="http://www.nguyenkim.com/"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #212121; border-width: 0px; padding: 0px; margin: 0px;">www.nguyenkim.com</span></a></strong></span></p>', '<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;<span class="Apple-converted-space">&nbsp;</span></strong><span style="border-style: initial; border-color: initial; border-image: initial; font-size: medium; color: #ff0000; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 16px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">LỊCH SỬ H&Igrave;NH TH&Agrave;NH:</strong></span></span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 30px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #212121; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">I &ndash; Năm 1996 - 2000:</strong></span><span class="Apple-converted-space">&nbsp;</span><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">Khai trương Cửa h&agrave;ng Điện m&aacute;y đầu ti&ecirc;n tại 6Bis Trần Hưng Đạo.</span></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 1. L&agrave; cửa h&agrave;ng đầu ti&ecirc;n v&agrave; duy nhất kinh doanh h&agrave;ng ch&iacute;nh h&atilde;ng, b&aacute;n đ&uacute;ng gi&aacute; ni&ecirc;m yết.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 2. &Aacute;p dụng ch&iacute;nh s&aacute;ch Miễn ph&iacute; giao h&agrave;ng v&agrave; lắp đặt tận nh&agrave;.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 3. Đơn vị ti&ecirc;n phong trong việc đầu tư mạnh v&agrave;o chất lượng phục vụ v&agrave; đem lại nhiều quyền lợi cho kh&aacute;ch h&agrave;ng.</span><br style="line-height: 10px;" /><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #212121; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;<strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">II &ndash; Năm 2001 - 2005:</strong></span><span class="Apple-converted-space">&nbsp;</span><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">H&igrave;nh th&agrave;nh Trung t&acirc;m B&aacute;n lẻ Điện m&aacute;y hiện đại đầu ti&ecirc;n tại Việt Nam với t&ecirc;n l&agrave; Trung t&acirc;m Mua sắm S&agrave;i G&ograve;n &ndash; Nguyễn Kim</span></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 1. Trở th&agrave;nh Đơn vị b&aacute;n lẻ điện m&aacute;y c&oacute; Doanh số, Thị phần v&agrave; Chất lượng phục vụ số 1 VN<span class="Apple-converted-space">&nbsp;</span></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 2. Lập trang web b&aacute;n lẻ điện m&aacute;y đầu ti&ecirc;n tại Việt Nam</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 3. L&agrave; đơn vị đầu ti&ecirc;n tại Việt Nam &aacute;p dụng ch&iacute;nh s&aacute;ch &ldquo;ĐỔI TRẢ H&Agrave;NG MIỄN PH&Iacute; TRONG 1 TUẦN&rdquo;</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 4. Triển khai c&aacute;c Chương tr&igrave;nh Khuyến m&atilde;i thường ni&ecirc;n lớn &ldquo;Tuần lễ v&agrave;ng&rdquo;, &ldquo;T&agrave;i trợ trực tiếp&rdquo;.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 5. H&igrave;nh th&agrave;nh k&ecirc;nh b&aacute;n h&agrave;ng B2B chuy&ecirc;n biệt.<span class="Apple-converted-space">&nbsp;</span></span><br style="line-height: 10px;" /><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">III &ndash; Năm 2006 - 2010:</strong><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;"><span class="Apple-converted-space">&nbsp;</span>Chuyển đổi M&ocirc; h&igrave;nh Quản l&yacute; v&agrave; Hoạt động kinh doanh của C&ocirc;ng ty<span class="Apple-converted-space">&nbsp;</span></span></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 1. Chuyển sang h&igrave;nh thức C&ocirc;ng ty Cổ phần.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 2. &Aacute;p dụng Hệ thống Quản trị to&agrave;n diện ERP tr&ecirc;n to&agrave;n C&ocirc;ng ty.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 3. Ph&aacute;t triển từ 1 Trung t&acirc;m th&agrave;nh nhiều Trung t&acirc;m tại Tp.HCM v&agrave; H&agrave; Nội.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 4. Hợp t&aacute;c Chiến lược với tất cả c&aacute;c tập đo&agrave;n điện tử.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;&nbsp; 5. Tốc độ tăng trưởng b&igrave;nh qu&acirc;n: 58%/năm (Số 1 - FAST500).</span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;</strong><span style="border-style: initial; border-color: initial; border-image: initial; font-size: medium; color: #ff0000; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 16px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">TRIẾT L&Yacute;, TẦM NH&Igrave;N, SỨ MỆNH:</strong></span></span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 30px; padding-bottom: 6px; padding-left: 30px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; text-decoration: underline; color: #212121; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">Triết l&yacute;</strong></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: x-large; color: #212121; border-width: 0px; padding: 0px; margin: 0px;">Tất cả cho kh&aacute;ch h&agrave;ng</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: x-large; color: #212121; border-width: 0px; padding: 0px; margin: 0px;">Kh&aacute;ch h&agrave;ng cho tất cả</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; border-width: 0px; padding: 0px; margin: 0px;"><em style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">(H&atilde;y cho tất cả những điều kh&aacute;ch h&agrave;ng mong muốn</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">Kh&aacute;ch h&agrave;ng sẽ cho nhiều hơn những g&igrave; ch&uacute;ng ta mong đợi)</span><br style="line-height: 10px;" /><br style="line-height: 10px;" /></em><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; text-decoration: underline; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #212121; text-decoration: underline; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">Tầm nh&igrave;n</strong></span><br style="line-height: 10px;" /></span><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">C&ocirc;ng ty số 1 c&aacute;ch biệt tại Việt Nam trong lĩnh vực ph&acirc;n phối h&agrave;ng điện tử ti&ecirc;u d&ugrave;ng v&agrave; Trung t&acirc;m Thương mại</span></span><br style="line-height: 10px;" /><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; text-decoration: underline; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; background-color: #ffffff; color: #212121; text-decoration: underline; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">Sứ mệnh</strong></span><br style="line-height: 10px;" /></span><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">1 &ndash; C&ugrave;ng đưa thị trường b&aacute;n lẻ v&agrave; quyền lợi người ti&ecirc;u d&ugrave;ng Việt nam ngang bằng với c&aacute;c nước ti&ecirc;n tiến tr&ecirc;n thế giới.</span></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">2 &ndash; Tạo m&ocirc;i trường phẳng, mở v&agrave; gắn kết ph&aacute;t triển sự nghiệp với to&agrave;n thể th&agrave;nh vi&ecirc;n.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">3 &ndash; Kết hợp h&agrave;i h&ograve;a giữa ph&aacute;t triển nhanh v&agrave; bền vững cho mỗi đồng vốn cổ đ&ocirc;ng.</span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;</strong><span style="border-style: initial; border-color: initial; border-image: initial; font-size: medium; color: #ff0000; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 16px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">BỐI CẢNH THỊ TRƯỜNG:</strong></span></span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 30px; padding-bottom: 6px; padding-left: 30px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; text-decoration: underline; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #212121; text-decoration: underline; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">I. Bối cảnh Kinh tế Việt Nam</strong></span><br style="line-height: 10px;" /></span><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">1. Việt Nam mở cửa ho&agrave;n to&agrave;n thị trường b&aacute;n lẻ</span></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">2. Việt Nam gia nhập TPP &ndash; Tổ chức Đối t&aacute;c Xuy&ecirc;n Th&aacute;i B&igrave;nh Dương.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">3. Ch&iacute;nh phủ quyết t&acirc;m t&aacute;i cơ cấu v&agrave; ph&aacute;t triển nền kinh tế Việt Nam</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">4. GDP b&igrave;nh qu&acirc;n đầu người tăng nhanh, Cơ sở hạ tầng được ch&uacute; trọng ph&aacute;t triển, Tốc độ đ&ocirc; thị h&oacute;a cao.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">5. Nền kinh tế thế giới v&agrave; Việt Nam sau năm 2011 được dự b&aacute;o sẽ hồi phục nhanh v&agrave; mạnh mẽ.</span><br style="line-height: 10px;" /><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; text-decoration: underline; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #212121; text-decoration: underline; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">II. Bối cảnh Thị trường Điện tử ti&ecirc;u d&ugrave;ng Việt Nam</strong></span><br style="line-height: 10px;" /></span><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">1. Sự b&ugrave;ng nổ c&aacute;c sản phẩm c&ocirc;ng nghệ v&agrave; nội dung số.</span></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">2. Tỷ trọng K&ecirc;nh b&aacute;n lẻ truyền thống c&ograve;n cao v&agrave; đang dịch chuyển mạnh sang K&ecirc;nh hiện đại.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">3. Sự ph&aacute;t triển mạnh của Thương mại Điện tử, TV Shopping v&agrave; nhiều h&igrave;nh thức mua sắm hiện đại kh&aacute;c.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">4.&nbsp; Sự đ&ograve;i hỏi của kh&aacute;ch h&agrave;ng về chất lượng phục vụ v&agrave; cập nhật sản phẩm mới ng&agrave;y c&agrave;ng tăng.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">5. Thị phần trong ng&agrave;nh b&aacute;n lẻ h&agrave;ng điện tử ti&ecirc;u d&ugrave;ng đang c&ograve;n ph&acirc;n mảnh (Đ&acirc;y l&agrave; cơ hội rất tốt cho Nguyễn Kim ph&aacute;t triển trong giai đoạn n&agrave;y).</span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;<span style="border-style: initial; border-color: initial; border-image: initial; font-size: medium; color: #ff0000; border-width: 0px; padding: 0px; margin: 0px;">VỊ THẾ V&Agrave; TIỀM LỰC CỦA NGUYỄN KIM:</span></strong></span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 30px; padding-bottom: 6px; padding-left: 30px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">1. Thương hiệu số 1 trong ng&agrave;nh B&aacute;n lẻ điện tử ti&ecirc;u d&ugrave;ng, đạt nhiều giải thưởng trong nước v&agrave; quốc tế, được người ti&ecirc;u d&ugrave;ng tin tưởng v&agrave; đ&aacute;nh gi&aacute; cao (Theo b&aacute;o c&aacute;o nghi&ecirc;n cứu của AC Nielsen: 99% người ti&ecirc;u d&ugrave;ng đ&aacute;nh gi&aacute; Nguyễn Kim l&agrave; Đơn vị số 1 trong ng&agrave;nh B&aacute;n lẻ Điện tử ti&ecirc;u d&ugrave;ng)</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">2. L&agrave; Đơn vị dẫn dắt thị trường, c&oacute; năng lực cao trong việc k&iacute;ch cầu v&agrave; tạo sự s&ocirc;i động thị trường trong ng&agrave;nh B&aacute;n lẻ điện tử ti&ecirc;u d&ugrave;ng.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">3. Được ch&iacute;nh phủ v&agrave; ch&iacute;nh quyền c&aacute;c địa phương khuyến kh&iacute;ch v&agrave; hỗ trợ mạnh mẽ.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; border-width: 0px; padding: 0px; margin: 0px;">4. Được c&aacute;c đối t&aacute;c chiến lược, c&aacute;c Tập đo&agrave;n Điện tử, c&aacute;c Tổ chức T&agrave;i ch&iacute;nh v&agrave; c&aacute;c đối t&aacute;c cung cấp sản phẩm, dịch vụ tin tưởng, hậu thuẫn mạnh mẽ v&agrave; c&oacute; nhiều ưu đ&atilde;i đặc biệt</span>.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">5. Hệ thống Quản trị Điều h&agrave;nh hiện đại, ho&agrave;n thiện theo chuẩn Quốc tế.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">6. Lực lượng C&aacute;n bộ Nh&acirc;n vi&ecirc;n h&ugrave;ng hậu, t&acirc;m huyết, c&oacute; kinh nghiệm v&agrave; tr&igrave;nh độ cao, được đ&agrave;o tạo b&agrave;i bản, thu nhập cao v&agrave; ổn định.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">7. Hệ thống Logistic v&agrave; phục vụ hậu m&atilde;i mạnh mẽ v&agrave; ho&agrave;n chỉnh.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">8. Tiềm lực T&agrave;i ch&iacute;nh mạnh mẽ<span class="Apple-converted-space">&nbsp;</span></span><br style="line-height: 10px;" /><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">- Sau gần hơn 2 năm chuẩn bị kỹ lưỡng với sự tư vấn to&agrave;n diện của C&ocirc;ng ty tư vấn h&agrave;ng đầu thế giới E&amp;Y, ch&uacute;ng t&ocirc;i đ&atilde; ho&agrave;n thiện c&aacute;c hệ thống về cơ cấu tổ chức, c&ocirc;ng nghệ thộng tin, quản trị nguồn nh&acirc;n lực, quản trị rủi ro, quản trị t&agrave;i ch&iacute;nh, hệ thống logistic, dịch vụ kh&aacute;ch h&agrave;ng v&agrave; nhiều hệ thống&nbsp; quản trị kh&aacute;c.</span><br style="line-height: 10px;" /><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; font-family: arial, helvetica, sans-serif; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">Đến thời điểm n&agrave;y ch&uacute;ng t&ocirc;i tự tin v&agrave; mạnh dạn đề ra kế hoạch ph&aacute;t triển mạnh mẽ cho giai đoạn 2011-2015.</span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 0px; padding-bottom: 6px; padding-left: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; border-width: 0px; padding: 0px; margin: 0px;"><strong style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; font-weight: bold; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;<span style="border-style: initial; border-color: initial; border-image: initial; font-size: medium; color: #ff0000; border-width: 0px; padding: 0px; margin: 0px;">MỤC TI&Ecirc;U PH&Aacute;T TRIỂN 2011 &ndash; 2015</span></strong></span></p>\r\n<p style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; padding-top: 6px; padding-right: 30px; padding-bottom: 6px; padding-left: 30px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: #ffffff; border-width: 0px; margin: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">1. Doanh số năm 2011: đạt tốc độ tăng trưởng b&igrave;nh qu&acirc;n 50%/năm.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">2. Thị phần 2015: chiếm lĩnh 30% - 40% thị phần cả nước. Độ phủ 32/64 tỉnh th&agrave;nh.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">3. Top 10 Thương hiệu Việt Nam, thương hiệu số 1 tuyệt đối trong ng&agrave;nh&nbsp; B&aacute;n lẻ Điện tử ti&ecirc;u d&ugrave;ng.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">4. Đạt 98% c&aacute;c chỉ số h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng với chất lượng sản phẩm v&agrave; dịch vụ ưu việt của Nguyễn Kim.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">5. Quyền lợi v&agrave; cơ hội ph&aacute;t triển của CBCNV tốt nhất trong ng&agrave;nh.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">6. Trở th&agrave;nh một C&ocirc;ng ty Đại ch&uacute;ng mạnh tr&ecirc;n thị trường chứng kho&aacute;n Việt Nam.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">Thực hiện th&agrave;nh c&ocirc;ng chiến lược n&agrave;y, ch&uacute;ng t&ocirc;i sẽ ho&agrave;n th&agrave;nh c&aacute;c mục ti&ecirc;u sau:</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">- Tạo việc l&agrave;m ổn định cho hơn 10.000 lao động.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">- Mang lại quyền lợi cao v&agrave; phục vụ chu đ&aacute;o nhất cho người ti&ecirc;u d&ugrave;ng khắp cả nước.<span class="Apple-converted-space">&nbsp;</span></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">-Tạo k&ecirc;nh phấn phối&nbsp; c&aacute;c sản phẩm của c&aacute;c tập đo&agrave;n điện tử, nh&agrave; ph&acirc;n phối trực tiếp đến người ti&ecirc;u d&ugrave;ng tr&ecirc;n cả nước.<span class="Apple-converted-space">&nbsp;</span></span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">- Tạo sự k&iacute;ch cầu v&agrave; s&ocirc;i động của thị trường b&aacute;n lẻ tại địa phương, th&uacute;c đẩy n&acirc;ng cao tỷ trọng k&ecirc;nh ph&acirc;n phối hiện đại v&agrave; g&oacute;p phần ph&aacute;t triển nền kinh tế Việt Nam.</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: 13px; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">&nbsp;</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">1. Giữ vững vị tr&iacute; số 1 c&aacute;ch biệt trong ng&agrave;nh b&aacute;n lẻ điện tử ti&ecirc;u d&ugrave;ng tại Việt Nam</span><br style="line-height: 10px;" /><span style="border-style: initial; border-color: initial; border-image: initial; font-size: small; color: #636363; border-width: 0px; padding: 0px; margin: 0px;">2. Ho&agrave;n th&agrave;nh c&aacute;c sứ mệnh đối với kh&aacute;ch h&agrave;ng, nh&acirc;n vi&ecirc;n v&agrave; cổ đ&ocirc;ng.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_page_media`
--

CREATE TABLE IF NOT EXISTS `mtx_page_media` (
  `page_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`media_id`),
  KEY `IDX_B6F678E3C4663E4` (`page_id`),
  KEY `IDX_B6F678E3EA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_page_media`
--

INSERT INTO `mtx_page_media` (`page_id`, `media_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_product`
--

CREATE TABLE IF NOT EXISTS `mtx_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `productgroup_id` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_863E14455EE01E44` (`created_id`),
  KEY `IDX_863E1445960CC7F3` (`updated_id`),
  KEY `IDX_863E1445DCD6CC49` (`branch_id`),
  KEY `IDX_863E14455BC5238A` (`productgroup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_product`
--

INSERT INTO `mtx_product` (`id`, `created_id`, `updated_id`, `branch_id`, `productgroup_id`, `price`, `unit`, `discount`, `thumb`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, 1, 0, NULL, 0, '51d10a3bca452.jpg', 0, 1, '2013-07-01 11:48:59', '2013-07-01 11:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_productgroup`
--

CREATE TABLE IF NOT EXISTS `mtx_productgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6184A463DCD6CC49` (`branch_id`),
  KEY `IDX_6184A4635EE01E44` (`created_id`),
  KEY `IDX_6184A463960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_productgroup`
--

INSERT INTO `mtx_productgroup` (`id`, `branch_id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 1, '2013-07-01 11:45:10', '2013-07-01 11:45:10'),
(2, 1, 2, 2, 1, '2013-07-01 11:45:32', '2013-07-01 11:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_productgroup_language`
--

CREATE TABLE IF NOT EXISTS `mtx_productgroup_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `productgroup_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E0372DC82F1BAF4` (`language_id`),
  KEY `IDX_E0372DC5BC5238A` (`productgroup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_productgroup_language`
--

INSERT INTO `mtx_productgroup_language` (`id`, `language_id`, `productgroup_id`, `name`) VALUES
(1, 2, 1, 'NHÓM ABC'),
(2, 2, 2, 'NHÓM DEF');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_product_language`
--

CREATE TABLE IF NOT EXISTS `mtx_product_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_A65A64864584665A` (`product_id`),
  KEY `IDX_A65A648682F1BAF4` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_product_language`
--

INSERT INTO `mtx_product_language` (`id`, `product_id`, `language_id`, `name`, `description`) VALUES
(1, 1, 2, 'PRODUCT ABC', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_product_media`
--

CREATE TABLE IF NOT EXISTS `mtx_product_media` (
  `products_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`products_id`,`media_id`),
  KEY `IDX_DFAD0FAD6C8A81A9` (`products_id`),
  KEY `IDX_DFAD0FADEA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_product_media`
--

INSERT INTO `mtx_product_media` (`products_id`, `media_id`) VALUES
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_role`
--

CREATE TABLE IF NOT EXISTS `mtx_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mtx_role`
--

INSERT INTO `mtx_role` (`id`, `role`) VALUES
(4, 'ROLE_SUPER_ADMIN'),
(5, 'ROLE_ADMIN'),
(6, 'ROLE_USER');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_user`
--

CREATE TABLE IF NOT EXISTS `mtx_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `active` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_user`
--

INSERT INTO `mtx_user` (`id`, `username`, `fullname`, `salt`, `password`, `email`, `created_at`, `updated_at`, `active`) VALUES
(2, 'admin', 'Administrator', '3d4f27261af797f4df1d9671537d0619', 'bc00d28c08aa6bb975523a0551d4d22f8693ac0e', 'admin@sm.com', '2013-07-01 09:27:00', '2013-07-01 09:27:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_user_group`
--

CREATE TABLE IF NOT EXISTS `mtx_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_355999A4A76ED395` (`user_id`),
  KEY `IDX_355999A4FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_user_group`
--

INSERT INTO `mtx_user_group` (`user_id`, `group_id`) VALUES
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mtx_user_role`
--

CREATE TABLE IF NOT EXISTS `mtx_user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `IDX_A6F8FA57A76ED395` (`user_id`),
  KEY `IDX_A6F8FA57D60322AC` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtx_user_role`
--

INSERT INTO `mtx_user_role` (`user_id`, `role_id`) VALUES
(2, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Constraints for table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mtx_branch`
--
ALTER TABLE `mtx_branch`
  ADD CONSTRAINT `FK_CAB0DCA8960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_CAB0DCA85EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_branch_language`
--
ALTER TABLE `mtx_branch_language`
  ADD CONSTRAINT `FK_64D30500DCD6CC49` FOREIGN KEY (`branch_id`) REFERENCES `mtx_branch` (`id`),
  ADD CONSTRAINT `FK_64D3050082F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_category`
--
ALTER TABLE `mtx_category`
  ADD CONSTRAINT `FK_A8C8079B960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_A8C8079B5EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_A8C8079B727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mtx_category` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `mtx_category_language`
--
ALTER TABLE `mtx_category_language`
  ADD CONSTRAINT `FK_B2A3A34082F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_B2A3A34012469DE2` FOREIGN KEY (`category_id`) REFERENCES `mtx_category` (`id`);

--
-- Constraints for table `mtx_company`
--
ALTER TABLE `mtx_company`
  ADD CONSTRAINT `FK_1ACB19A7960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_1ACB19A75EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_1ACB19A7C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `mtx_companytype` (`id`);

--
-- Constraints for table `mtx_companytype`
--
ALTER TABLE `mtx_companytype`
  ADD CONSTRAINT `FK_9AF91995960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_9AF919955EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_companytype_language`
--
ALTER TABLE `mtx_companytype_language`
  ADD CONSTRAINT `FK_54F6538B82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_54F6538B1E00F65` FOREIGN KEY (`companytype_id`) REFERENCES `mtx_companytype` (`id`);

--
-- Constraints for table `mtx_company_language`
--
ALTER TABLE `mtx_company_language`
  ADD CONSTRAINT `FK_757D1B7C979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `mtx_company` (`id`),
  ADD CONSTRAINT `FK_757D1B7C82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_group_role`
--
ALTER TABLE `mtx_group_role`
  ADD CONSTRAINT `FK_C468F723D60322AC` FOREIGN KEY (`role_id`) REFERENCES `mtx_role` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C468F723FE54D947` FOREIGN KEY (`group_id`) REFERENCES `mtx_group` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_media`
--
ALTER TABLE `mtx_media`
  ADD CONSTRAINT `FK_ED6E9F48960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_ED6E9F4812469DE2` FOREIGN KEY (`category_id`) REFERENCES `mtx_mediacategory` (`id`),
  ADD CONSTRAINT `FK_ED6E9F485EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_mediacategory`
--
ALTER TABLE `mtx_mediacategory`
  ADD CONSTRAINT `FK_70EAB08960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_70EAB085EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_70EAB08727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mtx_mediacategory` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `mtx_mediacategory_language`
--
ALTER TABLE `mtx_mediacategory_language`
  ADD CONSTRAINT `FK_FBDE26F282F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_FBDE26F27B28A30E` FOREIGN KEY (`mediacategory_id`) REFERENCES `mtx_mediacategory` (`id`);

--
-- Constraints for table `mtx_menu`
--
ALTER TABLE `mtx_menu`
  ADD CONSTRAINT `FK_3798AC02960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_3798AC025EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_3798AC02727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mtx_menu` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `mtx_menu_language`
--
ALTER TABLE `mtx_menu_language`
  ADD CONSTRAINT `FK_EC57E1DE82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_EC57E1DECCD7E912` FOREIGN KEY (`menu_id`) REFERENCES `mtx_menu` (`id`);

--
-- Constraints for table `mtx_news`
--
ALTER TABLE `mtx_news`
  ADD CONSTRAINT `FK_574E0FC1960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_574E0FC112469DE2` FOREIGN KEY (`category_id`) REFERENCES `mtx_category` (`id`),
  ADD CONSTRAINT `FK_574E0FC15EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_news_language`
--
ALTER TABLE `mtx_news_language`
  ADD CONSTRAINT `FK_89380719B5A459A0` FOREIGN KEY (`news_id`) REFERENCES `mtx_news` (`id`),
  ADD CONSTRAINT `FK_8938071982F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_news_media`
--
ALTER TABLE `mtx_news_media`
  ADD CONSTRAINT `FK_AAC8006BEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `mtx_media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_AAC8006BB5A459A0` FOREIGN KEY (`news_id`) REFERENCES `mtx_news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_page`
--
ALTER TABLE `mtx_page`
  ADD CONSTRAINT `FK_5E9720B1960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_5E9720B15EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_page_language`
--
ALTER TABLE `mtx_page_language`
  ADD CONSTRAINT `FK_4099A368C4663E4` FOREIGN KEY (`page_id`) REFERENCES `mtx_page` (`id`),
  ADD CONSTRAINT `FK_4099A36882F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_page_media`
--
ALTER TABLE `mtx_page_media`
  ADD CONSTRAINT `FK_B6F678E3EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `mtx_media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B6F678E3C4663E4` FOREIGN KEY (`page_id`) REFERENCES `mtx_page` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_product`
--
ALTER TABLE `mtx_product`
  ADD CONSTRAINT `FK_863E14455BC5238A` FOREIGN KEY (`productgroup_id`) REFERENCES `mtx_productgroup` (`id`),
  ADD CONSTRAINT `FK_863E14455EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_863E1445960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_863E1445DCD6CC49` FOREIGN KEY (`branch_id`) REFERENCES `mtx_branch` (`id`);

--
-- Constraints for table `mtx_productgroup`
--
ALTER TABLE `mtx_productgroup`
  ADD CONSTRAINT `FK_6184A463960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_6184A4635EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_6184A463DCD6CC49` FOREIGN KEY (`branch_id`) REFERENCES `mtx_branch` (`id`);

--
-- Constraints for table `mtx_productgroup_language`
--
ALTER TABLE `mtx_productgroup_language`
  ADD CONSTRAINT `FK_E0372DC5BC5238A` FOREIGN KEY (`productgroup_id`) REFERENCES `mtx_productgroup` (`id`),
  ADD CONSTRAINT `FK_E0372DC82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_product_language`
--
ALTER TABLE `mtx_product_language`
  ADD CONSTRAINT `FK_A65A648682F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_A65A64864584665A` FOREIGN KEY (`product_id`) REFERENCES `mtx_product` (`id`);

--
-- Constraints for table `mtx_product_media`
--
ALTER TABLE `mtx_product_media`
  ADD CONSTRAINT `FK_DFAD0FADEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `mtx_media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DFAD0FAD6C8A81A9` FOREIGN KEY (`products_id`) REFERENCES `mtx_product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_user_group`
--
ALTER TABLE `mtx_user_group`
  ADD CONSTRAINT `FK_355999A4FE54D947` FOREIGN KEY (`group_id`) REFERENCES `mtx_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_355999A4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `mtx_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_user_role`
--
ALTER TABLE `mtx_user_role`
  ADD CONSTRAINT `FK_A6F8FA57D60322AC` FOREIGN KEY (`role_id`) REFERENCES `mtx_role` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A6F8FA57A76ED395` FOREIGN KEY (`user_id`) REFERENCES `mtx_user` (`id`) ON DELETE CASCADE;