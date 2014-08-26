-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `acievements`;
CREATE TABLE `acievements` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `details` varchar(45) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `acievements` (`id`, `name`, `details`, `student_id`) VALUES
(0,	'juara 1 lomba balap karung',	'wrewr',	2);

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `details` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `behaviors`;
CREATE TABLE `behaviors` (
  `id` int(11) NOT NULL,
  `details` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `name` text NOT NULL,
  `value` text NOT NULL,
  `explanation` text NOT NULL,
  `deleted` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `configs` (`id`, `type`, `name`, `value`, `explanation`, `deleted`) VALUES
(1,	2,	'title',	'SuperQuiz',	'set the title of wpQuiz',	0),
(2,	2,	'copyright',	'Copyright 2005 Mizno Systemworks',	'your own copyright notice',	0),
(3,	1,	'enable_registration',	'1',	'whether new registrations will be allowed',	0),
(4,	1,	'registration_approval',	'0',	'whether registration requires administrator approval',	0),
(5,	1,	'admin_submitbuttons',	'0',	'whether submit buttons should be enabled in the admin panel',	0),
(6,	1,	'indexview',	'0',	'whether guests can view the index page',	0),
(7,	1,	'inline_images',	'0',	'whether images are shown inline',	0),
(8,	1,	'javascript_checking',	'1',	'javascript checks for blanks',	0),
(9,	1,	'mode',	'0',	'mode of debug',	0),
(10,	1,	'APPNAME',	'AyoSekolah v1.0',	'exp',	0);

DROP TABLE IF EXISTS `detentions`;
CREATE TABLE `detentions` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `summary` varchar(45) DEFAULT NULL,
  `details` varchar(45) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `event_types`;
CREATE TABLE `event_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `descriptions` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `deleted` smallint(5) unsigned DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  `deleted` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `login_tokens` (`id`, `user_id`, `token`, `duration`, `used`, `created`, `expires`, `deleted`) VALUES
(1,	1,	'fb84e9f5392197dd14898f3965e3d225',	'2 weeks',	0,	'2014-07-16 14:24:10',	'2014-07-30 14:24:10',	0),
(2,	1,	'109df24f5af5a91384b8bf7bf7beffbc',	'2 weeks',	0,	'2014-07-16 14:32:41',	'2014-07-30 14:32:41',	0),
(3,	1,	'bc8e641af90d003e1c61711be81cc521',	'2 weeks',	0,	'2014-07-16 14:49:15',	'2014-07-30 14:49:15',	0),
(4,	2,	'8aecdc999d72de70c408fa1ad7972c99',	'2 weeks',	0,	'2014-07-16 14:50:51',	'2014-07-30 14:50:51',	0),
(5,	1,	'287583f3bfbdce36392a823095759b6f',	'2 weeks',	0,	'2014-07-16 14:51:31',	'2014-07-30 14:51:31',	0),
(6,	2,	'b42da5766939d2108151d7c631865324',	'2 weeks',	0,	'2014-07-16 14:52:32',	'2014-07-30 14:52:32',	0),
(7,	1,	'f9a9f998183e92143dcc00f9c33dd10b',	'2 weeks',	0,	'2014-07-16 14:56:49',	'2014-07-30 14:56:49',	0),
(8,	2,	'f5a043848e536501c00ffd61c549d11c',	'2 weeks',	0,	'2014-07-16 15:00:19',	'2014-07-30 15:00:19',	0),
(9,	1,	'3011d32dc8f362bb3ff1f5d4c699bfd5',	'2 weeks',	0,	'2014-07-16 15:04:46',	'2014-07-30 15:04:46',	0),
(10,	1,	'40dc2a8967aab8773309611431ef0981',	'2 weeks',	0,	'2014-07-16 15:26:58',	'2014-07-30 15:26:58',	0),
(11,	2,	'28da4c0267b691ec90e0e4f7c4029bbc',	'2 weeks',	0,	'2014-07-16 15:28:22',	'2014-07-30 15:28:22',	0),
(12,	1,	'19676630d5811243d5d8c8760afa2e28',	'2 weeks',	0,	'2014-07-16 15:28:42',	'2014-07-30 15:28:42',	0),
(13,	1,	'45e7a0006ee46e1b0fbeda1990a37dd0',	'2 weeks',	1,	'2014-07-16 15:49:57',	'2014-07-30 15:49:57',	0),
(14,	2,	'f6507e6c588aac890df7202efbbee0ea',	'2 weeks',	0,	'2014-07-16 15:53:54',	'2014-07-30 15:53:54',	0),
(15,	1,	'9355fa3e52ace7ebf96e731012d09599',	'2 weeks',	1,	'2014-07-18 17:48:28',	'2014-08-01 17:48:28',	0),
(16,	1,	'04d93cb49674836cb71a650d8614b9e2',	'2 weeks',	1,	'2014-07-19 01:42:20',	'2014-08-02 01:42:20',	0),
(17,	1,	'365aae9de6fdabcb16f45675f50fe296',	'2 weeks',	1,	'2014-07-19 09:24:20',	'2014-08-02 09:24:20',	0),
(18,	1,	'f898bc09a2689a5d710bf9114e5f0c7e',	'2 weeks',	0,	'2014-07-19 13:42:51',	'2014-08-02 13:42:51',	0),
(19,	1,	'f2146a4bad1b1d708bc698a353df4114',	'2 weeks',	0,	'2014-07-30 07:24:01',	'2014-08-13 07:24:01',	0);

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `deleted` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `is_read` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `deleted`, `created`, `modified`, `status`, `user_id`, `sender_id`, `is_read`) VALUES
(1,	'lala',	'lala@lala.com',	'rewrewrewr',	0,	'2014-07-31 07:45:14',	'2014-07-31 07:45:14',	1,	0,	0,	0),
(2,	'jaja',	'jaja@jaja.com',	'w44234234324\r\n234324\r\n3242\r\n34324324\r\n32423432\r\n4324324324324324',	0,	'2014-07-31 07:45:45',	'2014-07-31 07:45:45',	1,	0,	0,	0);

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `target` varchar(200) NOT NULL,
  `is_read` varchar(20) NOT NULL,
  `read` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `notifications` (`id`, `user_id`, `title`, `message`, `created`, `modified`, `deleted`, `sender_id`, `type`, `target`, `is_read`, `read`) VALUES
(1,	1,	'',	'welcome!',	'2014-08-07 10:00:04',	'2014-08-07 10:00:04',	0,	1,	'1',	'1',	'',	''),
(2,	1,	'',	'welcome!',	'2014-08-07 10:01:32',	'2014-08-07 10:01:32',	0,	1,	'1',	'1',	'',	''),
(3,	1,	'',	'welcome!',	'2014-08-07 10:03:11',	'2014-08-07 10:03:11',	0,	1,	'1',	'1',	'',	''),
(4,	1,	'',	'welcome!',	'2014-08-07 10:05:19',	'2014-08-07 10:05:19',	0,	1,	'1',	'1',	'',	''),
(5,	1,	'',	'welcome!',	'2014-08-07 10:10:50',	'2014-08-07 10:10:50',	0,	1,	'1',	'1',	'',	'');

DROP TABLE IF EXISTS `notification_groups`;
CREATE TABLE `notification_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `notification_groups` (`id`, `name`, `deleted`) VALUES
(1,	'user_registration',	0);

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `details` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `students` (`id`, `name`, `address`, `details`) VALUES
(1,	'eewrewr',	'ewrew',	'rewrewr'),
(2,	'wahyu',	'cikupa',	'sdfdsf');

DROP TABLE IF EXISTS `students_classes`;
CREATE TABLE `students_classes` (
  `id` int(11) NOT NULL,
  `teachers_id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `details` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `student_addresses`;
CREATE TABLE `student_addresses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `date_from` varchar(45) DEFAULT NULL,
  `date_to` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `student_events`;
CREATE TABLE `student_events` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `event_type_id` int(11) NOT NULL,
  `event_date` varchar(45) DEFAULT NULL,
  `details` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `student_loans`;
CREATE TABLE `student_loans` (
  `id` int(11) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `details` varchar(45) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `student_loans` (`id`, `date`, `amount`, `details`, `student_id`) VALUES
(0,	'ret',	'retret',	'retretret',	1);

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `deadline_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tasks` (`id`, `name`, `description`, `deadline_date`, `user_id`, `created`, `modified`, `deleted`, `status`) VALUES
(1,	'login error terus',	'login error terus. tidak bisa masuk ke sana untuk semua member',	'2014-08-01 00:00:00',	1,	'2014-07-30 18:32:29',	'2014-07-30 18:32:29',	0,	1);

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `transcripts`;
CREATE TABLE `transcripts` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `details` varchar(45) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(3) DEFAULT '0',
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `email_verified`, `active`, `ip_address`, `created`, `modified`, `deleted`, `phone`, `address`, `postal_code`, `avatar`) VALUES
(1,	1,	'admin',	'365caef7fccbdb1ee711f084be9317a7',	'1e6d99570a4d37cc29b18c4a6b06e6ed',	'admin@admin.com',	'Admin',	'',	1,	1,	'',	'2014-07-17 01:11:58',	'2014-08-06 12:36:23',	0,	'098888838383',	'Graha Raflesia Blok E11/10 Citra Raya',	'15710',	'1407303383.jpg'),
(2,	2,	'xxxxxx',	'e507883fd661b1955b05cd6b79a30347',	'ca7ba40d06eb01362488374dbd39a348',	'xxxx@xxxx.xxx',	'lala',	'lele',	1,	1,	NULL,	'2014-07-16 14:50:37',	'2014-07-16 16:09:06',	0,	'',	'',	'',	''),
(3,	2,	'lala',	'7d0b6c3b8607e2a850c52c5251ded591',	'95557e1f4957f0f2462ee5c694e062bc',	'lala@lala.com',	'lala',	'lala',	1,	1,	NULL,	'2014-07-26 15:00:50',	'2014-07-26 15:01:20',	0,	'',	'',	'',	'32.jpg'),
(4,	2,	'mama',	'81add07645eab05824a7e62859a175bd',	'49c2851df8d4c371bfcd8bbda8c5fcb9',	'mama@mama.com',	'mama',	'mama',	1,	1,	NULL,	'2014-07-29 23:22:51',	'2014-07-29 23:22:51',	0,	'',	'',	'',	''),
(5,	1,	'adminx',	'14dcf1a19a07ec4be4ab05425b3c5bfb',	'cf1fb44d6b570f47fb42403b5bb8842b',	'adminx@admin.com',	'admin',	'x',	1,	1,	NULL,	'2014-07-31 05:29:11',	'2014-07-31 12:14:45',	0,	'',	'',	'',	'1406823285.png'),
(6,	2,	'juzojofo',	'cba6a05299648ced75a26ad172cb7970',	'991001e3d2840cc0ca96a3855d3203cb',	'tadix@yahoo.com',	'Hillary',	'Donaldson',	1,	1,	'127.0.0.1',	'2014-08-04 11:50:24',	'2014-08-04 11:51:19',	0,	'',	'',	'',	''),
(7,	2,	'jaja',	'47526334b5c86e893e3f995ed1010c67',	'c02e7ebb84421b4525c52ad872f6c273',	'jaja@yahoo.com',	'jaja',	'jaja',	1,	1,	'127.0.0.1',	'2014-08-05 03:44:34',	'2014-08-06 12:31:21',	0,	'',	'',	'',	'1407303080.jpg'),
(8,	2,	'wawa',	'4e442821863dc3c793688206aa09c71f',	'fe745472f58fbd6cae72f763424db497',	'wawa@wawa.com',	'wawa',	'wawa',	1,	1,	'127.0.0.1',	'2014-08-06 12:28:53',	'2014-08-06 12:30:46',	0,	'',	'',	'',	'1407303046.jpg');

DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`, `deleted`) VALUES
(1,	'Admin',	'Admin',	0,	'2014-07-17 01:12:21',	'2014-07-17 01:12:21',	0),
(2,	'User',	'User',	1,	'2014-07-17 01:12:21',	'2014-07-17 01:12:21',	0),
(3,	'Guest',	'Guest',	0,	'2014-07-17 01:12:21',	'2014-07-17 01:12:21',	0);

DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `deleted` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_group_permissions` (`id`, `user_group_id`, `controller`, `action`, `allowed`, `deleted`) VALUES
(1,	1,	'Pages',	'display',	1,	0),
(2,	2,	'Pages',	'display',	1,	0),
(3,	3,	'Pages',	'display',	1,	0),
(4,	1,	'UserGroupPermissions',	'index',	1,	0),
(5,	2,	'UserGroupPermissions',	'index',	0,	0),
(6,	3,	'UserGroupPermissions',	'index',	0,	0),
(7,	1,	'UserGroupPermissions',	'update',	1,	0),
(8,	2,	'UserGroupPermissions',	'update',	0,	0),
(9,	3,	'UserGroupPermissions',	'update',	0,	0),
(10,	1,	'UserGroups',	'index',	1,	0),
(11,	2,	'UserGroups',	'index',	0,	0),
(12,	3,	'UserGroups',	'index',	0,	0),
(13,	1,	'UserGroups',	'addGroup',	1,	0),
(14,	2,	'UserGroups',	'addGroup',	0,	0),
(15,	3,	'UserGroups',	'addGroup',	0,	0),
(16,	1,	'UserGroups',	'editGroup',	1,	0),
(17,	2,	'UserGroups',	'editGroup',	0,	0),
(18,	3,	'UserGroups',	'editGroup',	0,	0),
(19,	1,	'UserGroups',	'deleteGroup',	1,	0),
(20,	2,	'UserGroups',	'deleteGroup',	0,	0),
(21,	3,	'UserGroups',	'deleteGroup',	0,	0),
(22,	1,	'Users',	'index',	1,	0),
(23,	2,	'Users',	'index',	0,	0),
(24,	3,	'Users',	'index',	0,	0),
(25,	1,	'Users',	'viewUser',	1,	0),
(26,	2,	'Users',	'viewUser',	0,	0),
(27,	3,	'Users',	'viewUser',	0,	0),
(28,	1,	'Users',	'myprofile',	1,	0),
(29,	2,	'Users',	'myprofile',	1,	0),
(30,	3,	'Users',	'myprofile',	0,	0),
(31,	1,	'Users',	'login',	1,	0),
(32,	2,	'Users',	'login',	1,	0),
(33,	3,	'Users',	'login',	1,	0),
(34,	1,	'Users',	'logout',	1,	0),
(35,	2,	'Users',	'logout',	1,	0),
(36,	3,	'Users',	'logout',	1,	0),
(37,	1,	'Users',	'register',	1,	0),
(38,	2,	'Users',	'register',	1,	0),
(39,	3,	'Users',	'register',	1,	0),
(40,	1,	'Users',	'changePassword',	1,	0),
(41,	2,	'Users',	'changePassword',	1,	0),
(42,	3,	'Users',	'changePassword',	0,	0),
(43,	1,	'Users',	'changeUserPassword',	1,	0),
(44,	2,	'Users',	'changeUserPassword',	0,	0),
(45,	3,	'Users',	'changeUserPassword',	0,	0),
(46,	1,	'Users',	'addUser',	1,	0),
(47,	2,	'Users',	'addUser',	0,	0),
(48,	3,	'Users',	'addUser',	0,	0),
(49,	1,	'Users',	'editUser',	1,	0),
(50,	2,	'Users',	'editUser',	0,	0),
(51,	3,	'Users',	'editUser',	0,	0),
(52,	1,	'Users',	'dashboard',	1,	0),
(53,	2,	'Users',	'dashboard',	1,	0),
(54,	3,	'Users',	'dashboard',	0,	0),
(55,	1,	'Users',	'deleteUser',	1,	0),
(56,	2,	'Users',	'deleteUser',	0,	0),
(57,	3,	'Users',	'deleteUser',	0,	0),
(58,	1,	'Users',	'makeActive',	1,	0),
(59,	2,	'Users',	'makeActive',	0,	0),
(60,	3,	'Users',	'makeActive',	0,	0),
(61,	1,	'Users',	'accessDenied',	1,	0),
(62,	2,	'Users',	'accessDenied',	1,	0),
(63,	3,	'Users',	'accessDenied',	1,	0),
(64,	1,	'Users',	'userVerification',	1,	0),
(65,	2,	'Users',	'userVerification',	1,	0),
(66,	3,	'Users',	'userVerification',	1,	0),
(67,	1,	'Users',	'forgotPassword',	1,	0),
(68,	2,	'Users',	'forgotPassword',	1,	0),
(69,	3,	'Users',	'forgotPassword',	1,	0),
(70,	1,	'Users',	'makeActiveInactive',	1,	0),
(71,	2,	'Users',	'makeActiveInactive',	0,	0),
(72,	3,	'Users',	'makeActiveInactive',	0,	0),
(73,	1,	'Users',	'verifyEmail',	1,	0),
(74,	2,	'Users',	'verifyEmail',	0,	0),
(75,	3,	'Users',	'verifyEmail',	0,	0),
(76,	1,	'Users',	'activatePassword',	1,	0),
(77,	2,	'Users',	'activatePassword',	1,	0),
(78,	3,	'Users',	'activatePassword',	1,	0),
(79,	1,	'Sets',	'index',	1,	0),
(80,	2,	'Sets',	'index',	1,	0),
(81,	3,	'Sets',	'index',	0,	0),
(82,	1,	'Sets',	'view',	1,	0),
(83,	2,	'Sets',	'view',	1,	0),
(84,	3,	'Sets',	'view',	0,	0),
(85,	1,	'Sets',	'add',	1,	0),
(86,	2,	'Sets',	'add',	0,	0),
(87,	3,	'Sets',	'add',	0,	0),
(88,	1,	'Pages',	'dashboard',	1,	0),
(89,	2,	'Pages',	'dashboard',	1,	0),
(90,	3,	'Pages',	'dashboard',	1,	0),
(91,	1,	'Exam',	'delete',	1,	0),
(92,	2,	'Exam',	'delete',	0,	0),
(93,	3,	'Exam',	'delete',	0,	0),
(94,	1,	'Exam',	'edit',	1,	0),
(95,	2,	'Exam',	'edit',	0,	0),
(96,	3,	'Exam',	'edit',	0,	0),
(97,	1,	'Exam',	'add',	1,	0),
(98,	2,	'Exam',	'add',	0,	0),
(99,	3,	'Exam',	'add',	0,	0),
(100,	1,	'Exam',	'result',	1,	0),
(101,	2,	'Exam',	'result',	1,	0),
(102,	3,	'Exam',	'result',	0,	0),
(103,	1,	'Exam',	'view',	1,	0),
(104,	2,	'Exam',	'view',	1,	0),
(105,	3,	'Exam',	'view',	0,	0),
(106,	1,	'Exam',	'start',	1,	0),
(107,	2,	'Exam',	'start',	1,	0),
(108,	3,	'Exam',	'start',	0,	0),
(109,	1,	'Exam',	'index',	1,	0),
(110,	2,	'Exam',	'index',	1,	0),
(111,	3,	'Exam',	'index',	1,	0),
(112,	1,	'Categories',	'delete',	1,	0),
(113,	2,	'Categories',	'delete',	0,	0),
(114,	3,	'Categories',	'delete',	0,	0),
(115,	1,	'Categories',	'edit',	1,	0),
(116,	2,	'Categories',	'edit',	0,	0),
(117,	3,	'Categories',	'edit',	0,	0),
(118,	1,	'Categories',	'add',	1,	0),
(119,	2,	'Categories',	'add',	0,	0),
(120,	3,	'Categories',	'add',	0,	0),
(121,	1,	'Categories',	'view',	1,	0),
(122,	2,	'Categories',	'view',	1,	0),
(123,	3,	'Categories',	'view',	1,	0),
(124,	1,	'Categories',	'index',	1,	0),
(125,	2,	'Categories',	'index',	1,	0),
(126,	3,	'Categories',	'index',	1,	0),
(127,	1,	'Faqs',	'view',	1,	0),
(128,	2,	'Faqs',	'view',	0,	0),
(129,	3,	'Faqs',	'view',	0,	0),
(130,	1,	'Faqs',	'index',	1,	0),
(131,	2,	'Faqs',	'index',	1,	0),
(132,	3,	'Faqs',	'index',	1,	0),
(133,	1,	'Faqs',	'add',	1,	0),
(134,	2,	'Faqs',	'add',	0,	0),
(135,	3,	'Faqs',	'add',	0,	0),
(136,	1,	'Faqs',	'edit',	1,	0),
(137,	2,	'Faqs',	'edit',	0,	0),
(138,	3,	'Faqs',	'edit',	0,	0),
(139,	1,	'Myexam',	'index',	1,	0),
(140,	2,	'Myexam',	'index',	1,	0),
(141,	3,	'Myexam',	'index',	0,	0),
(142,	1,	'Myexam',	'view',	1,	0),
(143,	2,	'Myexam',	'view',	1,	0),
(144,	3,	'Myexam',	'view',	0,	0),
(145,	1,	'Myexam',	'add',	1,	0),
(146,	2,	'Myexam',	'add',	0,	0),
(147,	3,	'Myexam',	'add',	0,	0),
(148,	1,	'Myexam',	'edit',	1,	0),
(149,	2,	'Myexam',	'edit',	0,	0),
(150,	3,	'Myexam',	'edit',	0,	0),
(151,	1,	'Myexam',	'delete',	1,	0),
(152,	2,	'Myexam',	'delete',	0,	0),
(153,	3,	'Myexam',	'delete',	0,	0),
(154,	1,	'Users',	'update_profile',	1,	0),
(155,	2,	'Users',	'update_profile',	1,	0),
(156,	3,	'Users',	'update_profile',	0,	0),
(157,	1,	'Pricing',	'index',	1,	0),
(158,	2,	'Pricing',	'index',	1,	0),
(159,	3,	'Pricing',	'index',	1,	0),
(160,	1,	'Pages',	'index',	1,	0),
(161,	2,	'Pages',	'index',	1,	0),
(162,	3,	'Pages',	'index',	1,	0),
(163,	1,	'Pages',	'tour',	1,	0),
(164,	2,	'Pages',	'tour',	1,	0),
(165,	3,	'Pages',	'tour',	1,	0),
(166,	1,	'Pages',	'signup',	1,	0),
(167,	2,	'Pages',	'signup',	1,	0),
(168,	3,	'Pages',	'signup',	1,	0),
(169,	1,	'Pages',	'faq',	1,	0),
(170,	2,	'Pages',	'faq',	1,	0),
(171,	3,	'Pages',	'faq',	1,	0),
(172,	1,	'Pages',	'invoice',	1,	0),
(173,	2,	'Pages',	'invoice',	1,	0),
(174,	3,	'Pages',	'invoice',	1,	0),
(175,	1,	'Pages',	'account',	1,	0),
(176,	2,	'Pages',	'account',	1,	0),
(177,	3,	'Pages',	'account',	0,	0),
(178,	1,	'Pages',	'error',	1,	0),
(179,	2,	'Pages',	'error',	1,	0),
(180,	3,	'Pages',	'error',	0,	0);

-- 2014-08-26 09:46:32
