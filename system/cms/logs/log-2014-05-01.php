<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-05-01 13:48:41 --> Query error: Incorrect table definition; there can be only one auto column and it must be defined as a key - Invalid query: CREATE TABLE `default_project_votes` (
	`vote` INT(9) UNSIGNED NOT NULL AUTO_INCREMENT,
	`project_id` INT(9) UNSIGNED NOT NULL,
	`user_id` INT(9) UNSIGNED NOT NULL,
	PRIMARY KEY `project_id_user_id` (`project_id`, `user_id`)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ERROR - 2014-05-01 13:50:51 --> Query error: Table 'default_project_votes' already exists - Invalid query: CREATE TABLE `default_project_votes` (
	`vote` INT(9) NOT NULL,
	`project_id` INT(9) UNSIGNED NOT NULL,
	`user_id` INT(9) UNSIGNED NOT NULL,
	PRIMARY KEY `project_id_user_id` (`project_id`, `user_id`)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ERROR - 2014-05-01 13:51:21 --> Query error: Table 'pyrocms.default_bmc_courses' doesn't exist - Invalid query: SELECT *
FROM `default_bmc_courses`
