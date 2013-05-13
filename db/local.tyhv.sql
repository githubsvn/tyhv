-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2013 at 05:26 PM
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
  PRIMARY KEY (`id`),
  KEY `IDX_1ACB19A7C54C8C93` (`type_id`),
  KEY `IDX_1ACB19A75EE01E44` (`created_id`),
  KEY `IDX_1ACB19A7960CC7F3` (`updated_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_company`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mtx_companytype`
--

INSERT INTO `mtx_companytype` (`id`, `created_id`, `updated_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2013-05-13 16:08:34', '2013-05-13 16:08:34');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_companytype_language`
--

INSERT INTO `mtx_companytype_language` (`id`, `companytype_id`, `language_id`, `name`) VALUES
(1, 1, 2, 'TNHH MTV'),
(2, 1, 3, 'JSC');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mtx_company_language`
--


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
(1, 'Administrators', '2013-05-13 15:54:02', '2013-05-13 15:54:02', 1),
(2, 'Manager', '2013-05-13 15:54:02', '2013-05-13 15:54:02', 1),
(3, 'Users', '2013-05-13 15:54:02', '2013-05-13 15:54:02', 1);

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
(2, 'Vietnamese', 'vn', 1),
(3, 'English', 'en', 0);

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
(1, 'admin', 'Administrator', 'a190027678a852bb64eea123f7d59248', 'd4c13c9f6c92a2d1e7cd52f6758fa1f514392f85', 'admin@sm.com', '2013-05-13 15:54:02', '2013-05-13 15:54:02', 1);

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
  ADD CONSTRAINT `FK_9AF91995960CC7F3` FOREIGN KEY (`updated_id`) REFERENCES `mtx_user` (`id`),
  ADD CONSTRAINT `FK_9AF919955EE01E44` FOREIGN KEY (`created_id`) REFERENCES `mtx_user` (`id`);

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
