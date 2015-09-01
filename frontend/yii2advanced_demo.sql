/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : yii2advanced_demo

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-09-01 19:02:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1440668146');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1440668149');
INSERT INTO `migration` VALUES ('m150828_012734_create_prize_products_table', '1440731056');
INSERT INTO `migration` VALUES ('m150828_015831_create_prize_categories', '1440731057');
INSERT INTO `migration` VALUES ('m150828_021125_create_prize_records_table', '1440731057');

-- ----------------------------
-- Table structure for prize_categories
-- ----------------------------
DROP TABLE IF EXISTS `prize_categories`;
CREATE TABLE `prize_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `probability` float DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of prize_categories
-- ----------------------------
INSERT INTO `prize_categories` VALUES ('1', '5000元商品', '0.01', '1440743079', '1440743079');
INSERT INTO `prize_categories` VALUES ('2', '2000元商品', '0.03', '1440743108', '1440743108');
INSERT INTO `prize_categories` VALUES ('3', '50元商品', '0.1', '1440743147', '1440743147');
INSERT INTO `prize_categories` VALUES ('4', '20元商品', '0.3', '1440743185', '1440743185');
INSERT INTO `prize_categories` VALUES ('5', '0.1元商品', '0.56', '1440743218', '1440743218');
INSERT INTO `prize_categories` VALUES ('6', '0元商品', '100', '0', '0');

-- ----------------------------
-- Table structure for prize_products
-- ----------------------------
DROP TABLE IF EXISTS `prize_products`;
CREATE TABLE `prize_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8_unicode_ci,
  `price` float DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `prize_category_id` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of prize_products
-- ----------------------------
INSERT INTO `prize_products` VALUES ('1', 'iPhone 6plus', 'A、iPhone 6plus 一台，1%中奖率。', '5880', '1', '1', '1440742257', '1440742257');
INSERT INTO `prize_products` VALUES ('2', 'iPadMini 3', 'B、iPadMini 3 二台，3%中奖率', '2500', '2', '2', '1440742462', '1440742462');
INSERT INTO `prize_products` VALUES ('3', '韩国城商品 吕', 'C、韩国城商品 吕 洗发水 50套，10%中奖率。', '50', '50', '3', '1440742528', '1440742528');
INSERT INTO `prize_products` VALUES ('4', '韩国城保湿面膜', 'D、韩国城保湿面膜 300 盒，30%中奖率。', '20', '300', '4', '1440742578', '1440742578');
INSERT INTO `prize_products` VALUES ('5', '绑钻', 'E、绑钻 1000份，每份 10绑钻 ≈ 0.1元，56%中奖率。', '0.1', '1000', '5', '1440742670', '1440742670');
INSERT INTO `prize_products` VALUES ('6', '下次没准就能中哦', '下次没准就能中哦', '0', '5000', '6', '0', '0');

-- ----------------------------
-- Table structure for prize_records
-- ----------------------------
DROP TABLE IF EXISTS `prize_records`;
CREATE TABLE `prize_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `prize_product_id` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of prize_records
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'lili', '35RVjEQFSamvdKNY3v7_EKZSBu6z-avB', '$2y$13$iS9kspcFDGzTOMxytrqjcez1WS6vQib4Fz7zJ.3NGdw/fAy/BzP3u', null, 'lili@b5m.com', '10', '1440668300', '1440668300');
