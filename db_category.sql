/*
Navicat MySQL Data Transfer

Source Server         : 痴学少年
Source Server Version : 50173
Source Host           : qdm19508150.my3w.com:3306
Source Database       : qdm19508150_db

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2015-12-07 21:48:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `db_category`
-- ----------------------------
DROP TABLE IF EXISTS `db_category`;
CREATE TABLE `db_category` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_category
-- ----------------------------
INSERT INTO `db_category` VALUES ('23', '杂文');
INSERT INTO `db_category` VALUES ('25', 'Linux');
INSERT INTO `db_category` VALUES ('26', 'PHP');
INSERT INTO `db_category` VALUES ('27', 'C++/java/C');
