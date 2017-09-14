/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : myapp

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-09-14 19:45:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for app_content
-- ----------------------------
DROP TABLE IF EXISTS `app_content`;
CREATE TABLE `app_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` tinyint(4) NOT NULL,
  `version` tinyint(4) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0：删除，1：发布，2：草稿',
  `create_time` datetime NOT NULL,
  `update_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `create_time` (`create_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for app_content_tag
-- ----------------------------
DROP TABLE IF EXISTS `app_content_tag`;
CREATE TABLE `app_content_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `tag_id` (`tag_id`),
  KEY `content_id` (`content_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for app_options
-- ----------------------------
DROP TABLE IF EXISTS `app_options`;
CREATE TABLE `app_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL DEFAULT 'default' COMMENT '配置组',
  `option_key` varchar(255) NOT NULL COMMENT '配置key',
  `option_value` varchar(255) NOT NULL DEFAULT '' COMMENT '配置值',
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1:已删除  0：未删除',
  `createtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `group` (`group`,`option_key`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='配置';

-- ----------------------------
-- Table structure for app_tags
-- ----------------------------
DROP TABLE IF EXISTS `app_tags`;
CREATE TABLE `app_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for app_user
-- ----------------------------
DROP TABLE IF EXISTS `app_user`;
CREATE TABLE `app_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '10',
  `password_hash` varchar(64) NOT NULL DEFAULT '',
  `salt` varchar(255) NOT NULL DEFAULT '',
  `access_token` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL DEFAULT '',
  `password_reset_token` varchar(255) NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `email` (`email`) USING BTREE,
  UNIQUE KEY `name` (`name`),
  KEY `access_token` (`access_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
