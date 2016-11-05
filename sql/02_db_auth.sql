########################
# CREATING AUTH TABLES #
########################

DROP TABLE IF EXISTS `auth_groups`;

#
# Table structure for table 'auth_groups'
#

CREATE TABLE `auth_groups` (
	`id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	`description` varchar(100) NOT NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

#
# Dumping data for table 'auth_groups'
#

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
	(1,'admin','Administrator'),
	(2,'members','General User');

DROP TABLE IF EXISTS `auth_users`;

#
# Table structure for table 'auth_users'
#

CREATE TABLE `auth_users` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`ip_address` varchar(15) NOT NULL,
	`username` varchar(100) NOT NULL,
	`password` varchar(255) NOT NULL,
	`salt` varchar(255) DEFAULT NULL,
	`email` varchar(100) NOT NULL,
	`activation_code` varchar(40) DEFAULT NULL,
	`forgotten_password_code` varchar(40) DEFAULT NULL,
	`forgotten_password_time` int(11) unsigned DEFAULT NULL,
	`remember_code` varchar(40) DEFAULT NULL,
	`created_on` int(11) unsigned NOT NULL,
	`last_login` int(11) unsigned DEFAULT NULL,
	`active` tinyint(1) unsigned DEFAULT NULL,
	`first_name` varchar(50) DEFAULT NULL,
	`last_name` varchar(50) DEFAULT NULL,
	`company` varchar(100) DEFAULT NULL,
	`phone` varchar(20) DEFAULT NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

#
# Dumping data for table 'auth_users'
#

INSERT INTO `auth_users` (
	`id`,
	`ip_address`,
	`username`,
	`password`,
	`salt`,
	`email`,
	`activation_code`,
	`forgotten_password_code`,
	`forgotten_password_time`,
	`remember_code`,
	`created_on`,
	`last_login`,
	`active`,
	`first_name`,
	`last_name`,
	`company`,
	`phone`
) VALUES (
	1, -- id
	'127.0.0.1', -- ip_address
	'administrator', -- username
	'$2y$08$BCzSyVQiN6U/Y3KHmpj7AOXCfQSYSWJEaaY1XTBX6dobx6TO/50KW', -- password
	'', -- salt
	'admin@admin.com', -- email
	'', -- activation_code
	'', -- forgotten_password_code
	'', -- forgotten_password_time
	'', -- remember_code
	'1268889823', -- created_on
	'1473143314', -- last_login
	1, -- active
	'Admin', -- first_name
	'istrator', -- last_name
	'ADMIN', -- company
	'0' -- phone
);

DROP TABLE IF EXISTS `auth_users_groups`;

#
# Table structure for table 'auth_users_groups'
#

CREATE TABLE `auth_users_groups` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`user_id` int(11) unsigned NOT NULL,
	`group_id` mediumint(8) unsigned NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_users_groups_users1_idx` (`user_id`),
	KEY `fk_users_groups_groups1_idx` (`group_id`),
	CONSTRAINT `uc_users_groups` UNIQUE (`user_id`, `group_id`),
	CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `auth_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
	CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) DEFAULT CHARSET=utf8;

#
# Dumping data for table 'auth_users_group'
#

INSERT INTO `auth_users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1,1,1),
	(2,1,2);

DROP TABLE IF EXISTS `auth_login_attempts`;

#
# Table structure for table 'auth_login_attempts'
#

CREATE TABLE `auth_login_attempts` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`ip_address` varchar(15) NOT NULL,
	`login` varchar(100) NOT NULL,
	`time` int(11) unsigned DEFAULT NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;
