-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2013 at 07:02 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_branch`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mtx_company`
--

INSERT INTO `mtx_company` (`id`, `type_id`, `created_id`, `updated_id`, `charter_capital`, `phone`, `fax`, `mst`, `email`, `status`, `created_at`, `updated_at`, `logo`, `website`) VALUES
(2, 4, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-05-16 18:53:13', '2013-05-16 18:53:13', '5194c8a9dddae.png', NULL),
(3, 5, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-05-16 18:53:55', '2013-05-16 18:53:55', NULL, NULL),
(4, 5, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-05-16 18:54:23', '2013-05-16 18:54:23', NULL, NULL),
(5, 6, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '2013-05-16 18:55:33', '2013-05-16 18:55:33', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mtx_companytype`
--

INSERT INTO `mtx_companytype` (`id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 1, '2013-05-16 18:48:14', '2013-05-16 18:48:14'),
(4, 1, 1, 1, '2013-05-16 18:48:21', '2013-05-16 18:48:21'),
(5, 1, 1, 1, '2013-05-16 18:52:43', '2013-05-16 18:52:43'),
(6, 1, 1, 1, '2013-05-16 18:54:49', '2013-05-16 18:54:49');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mtx_companytype_language`
--

INSERT INTO `mtx_companytype_language` (`id`, `companytype_id`, `language_id`, `name`) VALUES
(4, 3, 2, 'TNHH MTV'),
(5, 4, 2, 'CTY CP'),
(6, 5, 2, 'CTY TNHH TM DV'),
(7, 6, 2, 'CTY TNHH TM KT');

-- --------------------------------------------------------

--
-- Table structure for table `mtx_company_language`
--

CREATE TABLE IF NOT EXISTS `mtx_company_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `representation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_757D1B7C82F1BAF4` (`language_id`),
  KEY `IDX_757D1B7C979B1AD6` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mtx_company_language`
--

INSERT INTO `mtx_company_language` (`id`, `language_id`, `company_id`, `name`, `adress`, `representation`) VALUES
(2, 2, 2, 'CÔNG TY CỔ PHẦN NGÂN LONG', NULL, NULL),
(3, 2, 3, 'CÔNG TY TNHH TM DV KỸ THUẬT MỚI', NULL, NULL),
(4, 2, 4, 'CÔNG TY TNHH TM DV MINH NHẬT', NULL, NULL),
(5, 2, 5, 'CÔNG TY TNHH TM DV KT THÀNH ĐẠT', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_group`
--

INSERT INTO `mtx_group` (`id`, `name`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Administrators', '2013-05-13 14:05:53', '2013-05-13 14:05:53', 1),
(2, 'Manager', '2013-05-13 14:05:53', '2013-05-13 14:05:53', 1),
(3, 'Users', '2013-05-13 14:05:53', '2013-05-13 14:05:53', 1);

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
(1, 1),
(2, 2),
(3, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_language`
--

INSERT INTO `mtx_language` (`id`, `name`, `lang_key`, `is_default`) VALUES
(2, 'Vietnamese', 'vn', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_product`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtx_productgroup`
--

CREATE TABLE IF NOT EXISTS `mtx_productgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6184A463DCD6CC49` (`branch_id`),
  KEY `IDX_6184A4635EE01E44` (`created_id`),
  KEY `IDX_6184A463960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_productgroup`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtx_productgroup_language`
--

CREATE TABLE IF NOT EXISTS `mtx_productgroup_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language_id` int(11) DEFAULT NULL,
  `productgroup_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E0372DC82F1BAF4` (`language_id`),
  KEY `IDX_E0372DC5BC5238A` (`productgroup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_productgroup_language`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtx_product_language`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtx_role`
--

CREATE TABLE IF NOT EXISTS `mtx_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mtx_role`
--

INSERT INTO `mtx_role` (`id`, `role`) VALUES
(1, 'ROLE_SUPER_ADMIN'),
(2, 'ROLE_ADMIN'),
(3, 'ROLE_USER');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_user`
--

INSERT INTO `mtx_user` (`id`, `username`, `fullname`, `salt`, `password`, `email`, `created_at`, `updated_at`, `active`) VALUES
(1, 'admin', 'Administrator', '8b595b1189fd1241b4654882f74afd87', '5767790c7336d17c9b38020419240d6d0b9e400e', 'admin@sm.com', '2013-05-13 14:05:53', '2013-05-13 14:05:53', 1);

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
(1, 1);

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
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sm_media`
--

CREATE TABLE IF NOT EXISTS `sm_media` (
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
  KEY `IDX_FC4A880C12469DE2` (`category_id`),
  KEY `IDX_FC4A880C5EE01E44` (`created_id`),
  KEY `IDX_FC4A880C960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `sm_media`
--

INSERT INTO `sm_media` (`id`, `category_id`, `created_id`, `updated_id`, `name`, `width`, `height`, `created_at`, `updated_at`, `active`) VALUES
(11, 1, NULL, NULL, '5194611d27a7d.png', NULL, NULL, '2013-05-16 11:31:25', '2013-05-16 11:31:25', 0),
(12, 1, NULL, NULL, '51946126cfc8c.bmp', NULL, NULL, '2013-05-16 11:31:34', '2013-05-16 11:31:34', 0),
(13, 1, NULL, NULL, '519461308813d.jpg', NULL, NULL, '2013-05-16 11:31:44', '2013-05-16 11:31:44', 0),
(14, 1, NULL, NULL, '5194613a28a55.png', NULL, NULL, '2013-05-16 11:31:54', '2013-05-16 11:31:54', 0),
(15, 1, NULL, NULL, '51946142d5658.png', NULL, NULL, '2013-05-16 11:32:02', '2013-05-16 11:32:02', 0),
(16, 1, NULL, NULL, '5194614ca0786.png', NULL, NULL, '2013-05-16 11:32:12', '2013-05-16 11:32:12', 0),
(17, 1, NULL, NULL, '51946157085ca.jpeg', NULL, NULL, '2013-05-16 11:32:23', '2013-05-16 11:32:23', 0),
(18, 1, NULL, NULL, '51946162536ed.jpeg', NULL, NULL, '2013-05-16 11:32:34', '2013-05-16 11:32:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sm_media_category`
--

CREATE TABLE IF NOT EXISTS `sm_media_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_id` int(11) DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CC4DC28F5EE01E44` (`created_id`),
  KEY `IDX_CC4DC28F960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sm_media_category`
--

INSERT INTO `sm_media_category` (`id`, `created_id`, `updated_id`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Product Images', '2013-05-16 10:11:59', '2013-05-16 10:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `sm_product_media`
--

CREATE TABLE IF NOT EXISTS `sm_product_media` (
  `products_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`products_id`,`media_id`),
  KEY `IDX_11BE98E86C8A81A9` (`products_id`),
  KEY `IDX_11BE98E8EA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sm_product_media`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mtx_branch`
--
ALTER TABLE `mtx_branch`
  ADD CONSTRAINT `FK_CAB0DCA85EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_CAB0DCA8960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_branch_language`
--
ALTER TABLE `mtx_branch_language`
  ADD CONSTRAINT `FK_64D3050082F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_64D30500DCD6CC49` FOREIGN KEY (`branch_id`) REFERENCES `mtx_branch` (`id`);

--
-- Constraints for table `mtx_company`
--
ALTER TABLE `mtx_company`
  ADD CONSTRAINT `FK_1ACB19A75EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_1ACB19A7960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_1ACB19A7C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `mtx_companytype` (`id`);

--
-- Constraints for table `mtx_companytype`
--
ALTER TABLE `mtx_companytype`
  ADD CONSTRAINT `FK_9AF919955EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_9AF91995960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `mtx_companytype_language`
--
ALTER TABLE `mtx_companytype_language`
  ADD CONSTRAINT `FK_54F6538B1E00F65` FOREIGN KEY (`companytype_id`) REFERENCES `mtx_companytype` (`id`),
  ADD CONSTRAINT `FK_54F6538B82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_company_language`
--
ALTER TABLE `mtx_company_language`
  ADD CONSTRAINT `FK_757D1B7C82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`),
  ADD CONSTRAINT `FK_757D1B7C979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `mtx_company` (`id`);

--
-- Constraints for table `mtx_group_role`
--
ALTER TABLE `mtx_group_role`
  ADD CONSTRAINT `FK_C468F723D60322AC` FOREIGN KEY (`role_id`) REFERENCES `mtx_role` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C468F723FE54D947` FOREIGN KEY (`group_id`) REFERENCES `mtx_group` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `FK_6184A4635EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_6184A463960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
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
  ADD CONSTRAINT `FK_A65A64864584665A` FOREIGN KEY (`product_id`) REFERENCES `mtx_product` (`id`),
  ADD CONSTRAINT `FK_A65A648682F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `mtx_language` (`id`);

--
-- Constraints for table `mtx_user_group`
--
ALTER TABLE `mtx_user_group`
  ADD CONSTRAINT `FK_355999A4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `mtx_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_355999A4FE54D947` FOREIGN KEY (`group_id`) REFERENCES `mtx_group` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mtx_user_role`
--
ALTER TABLE `mtx_user_role`
  ADD CONSTRAINT `FK_A6F8FA57A76ED395` FOREIGN KEY (`user_id`) REFERENCES `mtx_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A6F8FA57D60322AC` FOREIGN KEY (`role_id`) REFERENCES `mtx_role` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sm_media`
--
ALTER TABLE `sm_media`
  ADD CONSTRAINT `FK_FC4A880C960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_FC4A880C12469DE2` FOREIGN KEY (`category_id`) REFERENCES `sm_media_category` (`id`),
  ADD CONSTRAINT `FK_FC4A880C5EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `sm_media_category`
--
ALTER TABLE `sm_media_category`
  ADD CONSTRAINT `FK_CC4DC28F960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_CC4DC28F5EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`);

--
-- Constraints for table `sm_product_media`
--
ALTER TABLE `sm_product_media`
  ADD CONSTRAINT `FK_11BE98E8EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `sm_media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_11BE98E86C8A81A9` FOREIGN KEY (`products_id`) REFERENCES `mtx_product` (`id`) ON DELETE CASCADE;
