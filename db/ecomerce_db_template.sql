/*
Navicat MySQL Data Transfer

Source Server         : home
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : ecomerce_db_template

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-05-06 09:13:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `items`
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `sort_index` int(11) NOT NULL DEFAULT '0',
  `active` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('1', '1', 'prod1', '12.00', '0', '');

-- ----------------------------
-- Table structure for `item_categories`
-- ----------------------------
DROP TABLE IF EXISTS `item_categories`;
CREATE TABLE `item_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sort_index` int(11) NOT NULL DEFAULT '0',
  `active` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of item_categories
-- ----------------------------
INSERT INTO `item_categories` VALUES ('1', 'cat1', '0', '');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `active` bit(11) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `name_index` (`username`) USING BTREE,
  UNIQUE KEY `email_index` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '96e79218965eb72c92a549dd5a330112', 'hoans.email@gmail.com', 'hoan', '2014-04-20 23:03:05', '4', '\0');
INSERT INTO `users` VALUES ('2', 'hoans', '96e79218965eb72c92a549dd5a330112', 'hoans.email@yahoo.com', 'hoan', '2014-04-20 23:03:37', '0', '\0');
INSERT INTO `users` VALUES ('3', 'codys', '96e79218965eb72c92a549dd5a330112', 'hoan@iktknowledge.com', 'hoan', '2014-04-20 23:10:01', '0', '\0');
