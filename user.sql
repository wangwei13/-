/*
Navicat MySQL Data Transfer

Source Server         : ww
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : user

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-18 10:49:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `productId` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `productName` varchar(30) NOT NULL,
  `productIntro` varchar(10000) NOT NULL,
  `productPrice` float NOT NULL,
  `file` varchar(20) NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('15', '星月菩提', '星月菩提=', '1231', 'slider-img-2.jpg');
INSERT INTO `product` VALUES ('21', '文玩', '我去玩', '341', 'slider-img-3.jpg');
INSERT INTO `product` VALUES ('22', '委屈翁', '为去玩额', '342342', 'slider-img-3.jpg');
INSERT INTO `product` VALUES ('23', '12', '12额外', '1231', 'jgpt.jpg');
INSERT INTO `product` VALUES ('24', '2313', '123 的', '2312', 'slider-img-3.jpg');
INSERT INTO `product` VALUES ('25', '2312 ', '恶趣味去', '2313', 'xypt.jpg');
INSERT INTO `product` VALUES ('26', '13', '23123', '231', 'xypt.jpg');
INSERT INTO `product` VALUES ('27', '3424', '发生的', '43242', 'slider-img-1.jpg');

-- ----------------------------
-- Table structure for `regist`
-- ----------------------------
DROP TABLE IF EXISTS `regist`;
CREATE TABLE `regist` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` int(4) NOT NULL,
  `type` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of regist
-- ----------------------------
INSERT INTO `regist` VALUES ('35', 'user1', '123123123', '1', '0');
INSERT INTO `regist` VALUES ('36', 'user2', '123456', '1', '0');
INSERT INTO `regist` VALUES ('37', 'user3', '123123', '3', '0');
INSERT INTO `regist` VALUES ('38', 'admin', '123123', '1', '1');
INSERT INTO `regist` VALUES ('39', 'ww11', '123123123', '3', '0');
