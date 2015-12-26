/*
Navicat MySQL Data Transfer

Source Server         : 痴学少年
Source Server Version : 50173
Source Host           : qdm19508150.my3w.com:3306
Source Database       : qdm19508150_db

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2015-12-07 21:48:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `db_music`
-- ----------------------------
DROP TABLE IF EXISTS `db_music`;
CREATE TABLE `db_music` (
  `song` varchar(50) DEFAULT NULL,
  `singer` varchar(50) DEFAULT NULL,
  `special` varchar(50) DEFAULT NULL,
  `mid` int(50) NOT NULL AUTO_INCREMENT,
  `sel` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_music
-- ----------------------------
INSERT INTO `db_music` VALUES ('少年锦时.mp3', '赵雷', '《吉姆餐厅》 ', '13', '0');
INSERT INTO `db_music` VALUES ('Counting Stars.mp3', 'OneRepublic', '《Native》', '12', '0');
INSERT INTO `db_music` VALUES ('人质.mp3', '张惠妹', '《我要快乐？》', '11', '0');
INSERT INTO `db_music` VALUES ('晴天.mp3', '周杰伦', '《叶惠美》', '14', '1');
INSERT INTO `db_music` VALUES ('可惜没如果.mp3', '林俊杰', '《新地球》', '15', '0');
INSERT INTO `db_music` VALUES ('我可以.mp3', '蔡旻佑', '《19》', '16', '0');
INSERT INTO `db_music` VALUES ('空城.mp3', '杨坤', '《空城》', '17', '0');
