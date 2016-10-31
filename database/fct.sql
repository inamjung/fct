/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : fct

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2016-10-31 21:02:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `properties` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`) USING BTREE,
  KEY `idx-auth_item-type` (`type`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item
-- ----------------------------

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for calitems
-- ----------------------------
DROP TABLE IF EXISTS `calitems`;
CREATE TABLE `calitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cal_id` int(11) DEFAULT NULL,
  `tool_id` int(11) DEFAULT NULL,
  `result` enum('ผ่าน','ไม่ผ่าน') DEFAULT NULL COMMENT 'ผลการสอบเทียบ',
  `cuase` varchar(100) DEFAULT NULL COMMENT 'สาเหตุ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of calitems
-- ----------------------------

-- ----------------------------
-- Table structure for companys
-- ----------------------------
DROP TABLE IF EXISTS `companys`;
CREATE TABLE `companys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL COMMENT 'บริษัท',
  `address` varchar(255) DEFAULT NULL COMMENT 'ที่อยู่',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of companys
-- ----------------------------
INSERT INTO `companys` VALUES ('1', 'ยกมา', 'รายการยกมา');

-- ----------------------------
-- Table structure for departments
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL COMMENT 'กลุ่มงาน',
  `department` varchar(255) DEFAULT NULL COMMENT 'แผนก',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO `departments` VALUES ('1', '3', 'ซ่อมบำรุง1');
INSERT INTO `departments` VALUES ('2', '1', 'งานคลังยา');
INSERT INTO `departments` VALUES ('3', '1', 'งานคุ้มครองผู้บริโภค');
INSERT INTO `departments` VALUES ('4', '3', 'งานยานยนต์');
INSERT INTO `departments` VALUES ('5', '1', 'คลังยา');

-- ----------------------------
-- Table structure for fct
-- ----------------------------
DROP TABLE IF EXISTS `fct`;
CREATE TABLE `fct` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fcttype_id` int(11) DEFAULT NULL COMMENT 'ประเภทผู้ป่วย',
  `pass` varchar(10) DEFAULT NULL,
  `colour_id` int(11) DEFAULT NULL COMMENT 'ระดับ',
  `hn` varchar(9) DEFAULT NULL,
  `an` varchar(10) DEFAULT NULL,
  `ptname` varchar(50) DEFAULT NULL COMMENT 'ผู้ป่วย',
  `ptage` varchar(3) DEFAULT NULL COMMENT 'อายุ',
  `diage` varchar(100) DEFAULT NULL COMMENT 'โรค',
  `pps` varchar(5) DEFAULT NULL,
  `pain` varchar(5) DEFAULT NULL,
  `painnote` varchar(100) DEFAULT NULL,
  `cc` varchar(200) DEFAULT NULL,
  `pi` varchar(250) DEFAULT NULL,
  `bt` varchar(5) DEFAULT NULL,
  `pr` varchar(5) DEFAULT NULL,
  `rr` varchar(5) DEFAULT NULL,
  `bp` varchar(7) DEFAULT NULL,
  `drugallergy` varchar(100) DEFAULT NULL,
  `admit` date DEFAULT NULL,
  `dc` date DEFAULT NULL,
  `or` varchar(100) DEFAULT NULL,
  `ordate` date DEFAULT NULL,
  `disease` varchar(50) DEFAULT NULL,
  `receive` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL COMMENT 'ที่อยู่',
  `ptcate` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `hossub` varchar(100) DEFAULT NULL,
  `tra` varchar(100) DEFAULT NULL,
  `retng` varchar(100) DEFAULT NULL,
  `retfo` varchar(100) DEFAULT NULL,
  `colobag` varchar(100) DEFAULT NULL,
  `lesion` varchar(100) DEFAULT NULL,
  `lesioncare` varchar(100) DEFAULT NULL,
  `recov` varchar(100) DEFAULT NULL,
  `recovcare` varchar(100) DEFAULT NULL,
  `oxygen` varchar(100) DEFAULT NULL,
  `lr01` varchar(100) DEFAULT NULL,
  `lr02` varchar(200) DEFAULT NULL,
  `lr03` varchar(100) DEFAULT NULL,
  `lr04` varchar(200) DEFAULT NULL,
  `lr05` varchar(100) DEFAULT NULL,
  `lr06` varchar(200) DEFAULT NULL,
  `lr07` varchar(10) DEFAULT NULL,
  `lr08` varchar(10) DEFAULT NULL,
  `lr09` varchar(10) DEFAULT NULL,
  `lr10` varchar(200) DEFAULT NULL,
  `lrl01` varchar(200) DEFAULT NULL,
  `lrl02` varchar(10) DEFAULT NULL,
  `lrl03` varchar(10) DEFAULT NULL,
  `lrl04` varchar(10) DEFAULT NULL,
  `lrl05` varchar(10) DEFAULT NULL,
  `lrl06` varchar(10) DEFAULT NULL,
  `lrl07` varchar(100) DEFAULT NULL,
  `lrl08` varchar(100) DEFAULT NULL,
  `lr` varchar(100) DEFAULT NULL,
  `lrl09` varchar(100) DEFAULT NULL,
  `lrl10` varchar(10) DEFAULT NULL,
  `lrl11` varchar(10) DEFAULT NULL,
  `lrl12` varchar(10) DEFAULT NULL,
  `lrl13` varchar(10) DEFAULT NULL,
  `other` varchar(100) DEFAULT NULL,
  `appdate` date DEFAULT NULL,
  `doctorapp` varchar(50) DEFAULT NULL,
  `appdate2` date DEFAULT NULL,
  `doctorapp2` varchar(50) DEFAULT NULL,
  `appdate3` date DEFAULT NULL,
  `doctorapp3` varchar(50) DEFAULT NULL,
  `senddate` date DEFAULT NULL COMMENT 'วันที่ส่งเยี่ยม',
  `windpipe` varchar(100) DEFAULT NULL,
  `insulin` varchar(100) DEFAULT NULL,
  `equip` varchar(100) DEFAULT NULL,
  `depart` varchar(50) DEFAULT NULL COMMENT 'แผนกที่ส่ง',
  `hosin` varchar(100) DEFAULT NULL COMMENT 'รพ.สต',
  `officer` varchar(50) DEFAULT NULL,
  `confirm` varchar(10) DEFAULT NULL,
  `confirmfct` varchar(10) DEFAULT NULL,
  `cid` varchar(13) DEFAULT NULL COMMENT 'CID',
  `send` smallint(2) DEFAULT NULL COMMENT 'ส่งเยี่ยม',
  `okcase` smallint(2) DEFAULT NULL COMMENT 'รับเคส',
  `birthday` date DEFAULT NULL COMMENT 'วันเกิด',
  `tmbpart` varchar(2) DEFAULT NULL COMMENT 'ตำบล',
  `sex` varchar(1) DEFAULT NULL COMMENT 'เพศ',
  `bloodgrp` varchar(30) DEFAULT NULL COMMENT 'กรุ๊ปเลือด',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fct
-- ----------------------------
INSERT INTO `fct` VALUES ('1', null, null, null, '000056441', null, 'น.ส.ไอน้ำ เรืองโพน', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '43 หมู่ที่ 03', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '3430300510561', '0', '0', '1974-07-18', '02', '2', 'O');
INSERT INTO `fct` VALUES ('2', null, null, null, '000035959', null, 'นางบุญเที่ยง ศรีกงพาน', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '124', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '3430300716959', '0', '0', '1951-05-12', '01', '2', 'ไม่ทราบหมู่เลือด');
INSERT INTO `fct` VALUES ('3', null, null, null, '000056441', null, 'น.ส.ไอน้ำ เรืองโพน', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '43 หมู่ 3 ต.ชุมภูพร อ.ศรีวิไล จ.บึงกาฬ', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '3430300510561', '0', '0', '1974-07-18', '02', '2', 'O');
INSERT INTO `fct` VALUES ('4', null, null, null, '000060712', null, 'นายชาญณรงค์ นามกว้าง', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '115 หมู่ 2 ต.ศรีชมภู อ.พรเจริญ จ.บึงกาฬ', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1430400110151', '0', '0', '1990-11-13', '01', '1', 'AB');

-- ----------------------------
-- Table structure for fctcolour
-- ----------------------------
DROP TABLE IF EXISTS `fctcolour`;
CREATE TABLE `fctcolour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL COMMENT 'ระดับ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fctcolour
-- ----------------------------
INSERT INTO `fctcolour` VALUES ('1', 'เขียว');
INSERT INTO `fctcolour` VALUES ('2', 'เหลือง');
INSERT INTO `fctcolour` VALUES ('3', 'แดง');

-- ----------------------------
-- Table structure for fctdepart
-- ----------------------------
DROP TABLE IF EXISTS `fctdepart`;
CREATE TABLE `fctdepart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT 'หน่วยงาน',
  `group_id` varchar(1) DEFAULT NULL COMMENT 'กลุ่มงาน',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fctdepart
-- ----------------------------
INSERT INTO `fctdepart` VALUES ('1', 'หอผู้ป่วยใน 1', '1');
INSERT INTO `fctdepart` VALUES ('2', 'หอผู้ป่วยใน 2', '1');
INSERT INTO `fctdepart` VALUES ('3', 'ห้องคลอด', '1');
INSERT INTO `fctdepart` VALUES ('4', 'Center', '2');
INSERT INTO `fctdepart` VALUES ('5', 'ผู้ป่วยนอก', '2');
INSERT INTO `fctdepart` VALUES ('6', 'จิตเวช', '2');
INSERT INTO `fctdepart` VALUES ('7', 'เภสัชกรรม', '2');
INSERT INTO `fctdepart` VALUES ('8', 'กายภาพ', '2');
INSERT INTO `fctdepart` VALUES ('9', 'กลุ่มเวช', '2');
INSERT INTO `fctdepart` VALUES ('10', 'รพ.สต.บ้านดง', '3');
INSERT INTO `fctdepart` VALUES ('11', 'รพ.สต.นาสัก', '3');
INSERT INTO `fctdepart` VALUES ('12', 'รพ.สต.จางเหนือ', '3');
INSERT INTO `fctdepart` VALUES ('13', 'รพ.สต.นาแช่', '3');
INSERT INTO `fctdepart` VALUES ('14', 'รพ.สต.สบป้าด', '3');
INSERT INTO `fctdepart` VALUES ('28', 'รพ.แม่เมาะ', '4');
INSERT INTO `fctdepart` VALUES ('29', 'รพ.มะเร็ง ลำปาง', '5');
INSERT INTO `fctdepart` VALUES ('30', 'รพ.ศูนย์ลำปาง', '5');

-- ----------------------------
-- Table structure for fcthhc
-- ----------------------------
DROP TABLE IF EXISTS `fcthhc`;
CREATE TABLE `fcthhc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fct_id` varchar(11) DEFAULT NULL,
  `fctdate` date DEFAULT NULL COMMENT 'วันที่ส่งเยี่ยม',
  `home` varchar(2) DEFAULT NULL,
  `homept` varchar(50) DEFAULT NULL,
  `t` varchar(5) DEFAULT NULL,
  `pr` varchar(5) DEFAULT NULL,
  `rr` varchar(5) DEFAULT NULL,
  `bp` varchar(7) DEFAULT NULL,
  `feel` varchar(20) DEFAULT NULL,
  `eat` varchar(50) DEFAULT NULL,
  `stool` varchar(15) DEFAULT NULL,
  `urin` varchar(15) DEFAULT NULL,
  `commu` varchar(15) DEFAULT NULL,
  `mental` varchar(10) DEFAULT NULL,
  `self` varchar(20) DEFAULT NULL,
  `lesion` varchar(15) DEFAULT NULL,
  `fall` varchar(10) DEFAULT NULL,
  `sore` varchar(20) DEFAULT NULL,
  `heart` varchar(10) DEFAULT NULL,
  `hearta` varchar(100) DEFAULT NULL,
  `heartnote` varchar(100) DEFAULT NULL,
  `social` varchar(10) DEFAULT NULL,
  `sociala` varchar(100) DEFAULT NULL,
  `socialnote` varchar(100) DEFAULT NULL,
  `bored` varchar(10) DEFAULT NULL,
  `borednote` varchar(200) DEFAULT NULL,
  `depress` varchar(10) DEFAULT NULL,
  `depressnote` varchar(200) DEFAULT NULL,
  `foley` varchar(10) DEFAULT NULL,
  `foleynote` varchar(200) DEFAULT NULL,
  `ng` varchar(10) DEFAULT NULL,
  `ngnote` varchar(200) DEFAULT NULL,
  `pcn` varchar(10) DEFAULT NULL,
  `pcnnote` varchar(200) DEFAULT NULL,
  `tra` varchar(10) DEFAULT NULL,
  `tranote` varchar(200) DEFAULT NULL,
  `wound` varchar(10) DEFAULT NULL,
  `woundnote` varchar(200) DEFAULT NULL,
  `insulin` varchar(15) DEFAULT NULL,
  `insulinnote` varchar(200) DEFAULT NULL,
  `windpipe` varchar(10) DEFAULT NULL,
  `windpipenote` varchar(200) DEFAULT NULL,
  `phy` varchar(10) DEFAULT NULL,
  `phynote` varchar(200) DEFAULT NULL,
  `pra` varchar(10) DEFAULT NULL,
  `pranote` varchar(200) DEFAULT NULL,
  `diet` varchar(10) DEFAULT NULL,
  `dietnote` varchar(200) DEFAULT NULL,
  `env` varchar(10) DEFAULT NULL,
  `envnote` varchar(200) DEFAULT NULL,
  `ser` varchar(10) DEFAULT NULL,
  `sernote` varchar(200) DEFAULT NULL,
  `comp` varchar(10) DEFAULT NULL,
  `compnote` varchar(200) DEFAULT NULL,
  `timeu` varchar(2) DEFAULT NULL,
  `times` varchar(10) DEFAULT NULL,
  `datenext` date DEFAULT NULL,
  `other` varchar(200) DEFAULT NULL,
  `other2` varchar(100) DEFAULT NULL,
  `datedc` date DEFAULT NULL,
  `notefct` varchar(200) DEFAULT NULL,
  `tr01` varchar(30) DEFAULT NULL,
  `tr02` varchar(30) DEFAULT NULL,
  `tr03` varchar(30) DEFAULT NULL,
  `deg04` varchar(100) DEFAULT NULL,
  `deg15` varchar(100) DEFAULT NULL,
  `deg14` varchar(100) DEFAULT NULL,
  `deg13` varchar(100) DEFAULT NULL,
  `deg12` varchar(100) DEFAULT NULL,
  `deg11` varchar(100) DEFAULT NULL,
  `deg10` varchar(10) DEFAULT NULL,
  `deg09` varchar(100) DEFAULT NULL,
  `deg08` varchar(100) DEFAULT NULL,
  `deg07` varchar(100) DEFAULT NULL,
  `deg06` varchar(100) DEFAULT NULL,
  `deg05` varchar(100) DEFAULT NULL,
  `deg03` varchar(100) DEFAULT NULL,
  `deg02` varchar(100) DEFAULT NULL,
  `deg01` varchar(100) DEFAULT NULL,
  `tr15` varchar(30) DEFAULT NULL,
  `tr14` varchar(30) DEFAULT NULL,
  `tr13` varchar(30) DEFAULT NULL,
  `tr12` varchar(30) DEFAULT NULL,
  `tr11` varchar(30) DEFAULT NULL,
  `tr10` varchar(30) DEFAULT NULL,
  `tr09` varchar(30) DEFAULT NULL,
  `tr08` varchar(30) DEFAULT NULL,
  `tr07` varchar(30) DEFAULT NULL,
  `tr06` varchar(30) DEFAULT NULL,
  `tr05` varchar(30) DEFAULT NULL,
  `tr04` varchar(30) DEFAULT NULL,
  `fctname1` varchar(20) DEFAULT NULL,
  `fctname2` varchar(20) DEFAULT NULL,
  `fctname3` varchar(20) DEFAULT NULL,
  `fctname4` varchar(20) DEFAULT NULL,
  `fctname5` varchar(20) DEFAULT NULL,
  `fctname6` varchar(100) DEFAULT NULL,
  `departfct` varchar(100) DEFAULT NULL,
  `lr01` varchar(100) DEFAULT NULL,
  `lr02` varchar(200) DEFAULT NULL,
  `lr03` varchar(100) DEFAULT NULL,
  `lr04` varchar(200) DEFAULT NULL,
  `lr05` varchar(100) DEFAULT NULL,
  `lr06` varchar(200) DEFAULT NULL,
  `lr07` varchar(10) DEFAULT NULL,
  `lr08` varchar(10) DEFAULT NULL,
  `lr09` varchar(10) DEFAULT NULL,
  `lr10` varchar(10) DEFAULT NULL,
  `lrl01` varchar(200) DEFAULT NULL,
  `lrl02` varchar(10) DEFAULT NULL,
  `lrl03` varchar(10) DEFAULT NULL,
  `lrl04` varchar(10) DEFAULT NULL,
  `lrl05` varchar(10) DEFAULT NULL,
  `lrl06` varchar(10) DEFAULT NULL,
  `lrl07` varchar(10) DEFAULT NULL,
  `lrl08` varchar(100) DEFAULT NULL,
  `lr` varchar(100) DEFAULT NULL,
  `lrl10` varchar(10) DEFAULT NULL,
  `lrl11` varchar(10) DEFAULT NULL,
  `lrl09` varchar(100) DEFAULT NULL,
  `cid` varchar(13) DEFAULT NULL COMMENT 'CID',
  `status` enum('เยี่ยมแล้ว','ยังไม่เยี่ยม') DEFAULT NULL,
  `fcthosin_id` int(11) DEFAULT NULL COMMENT 'พื้นที่',
  `birthday` date DEFAULT NULL COMMENT 'วันเกิด',
  `tmbpart` varchar(2) DEFAULT NULL COMMENT 'ตำบล',
  `sex` varchar(1) DEFAULT NULL COMMENT 'เพศ',
  `bloodgrp` varchar(30) DEFAULT NULL COMMENT 'กรุ๊ปเลือด',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fcthhc
-- ----------------------------

-- ----------------------------
-- Table structure for fcthosin
-- ----------------------------
DROP TABLE IF EXISTS `fcthosin`;
CREATE TABLE `fcthosin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `group` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fcthosin
-- ----------------------------
INSERT INTO `fcthosin` VALUES ('1', 'โรงพยาบาลมะเร็ง', '1');
INSERT INTO `fcthosin` VALUES ('2', 'รพสต.บ้านดง', null);
INSERT INTO `fcthosin` VALUES ('3', 'รพสต.นาสัก', null);
INSERT INTO `fcthosin` VALUES ('4', 'รพสต.จางเหนือ', null);
INSERT INTO `fcthosin` VALUES ('5', 'รพสต.นาแช่', null);
INSERT INTO `fcthosin` VALUES ('6', 'รพสต.สบป้าด', null);

-- ----------------------------
-- Table structure for fctpass
-- ----------------------------
DROP TABLE IF EXISTS `fctpass`;
CREATE TABLE `fctpass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fctpass
-- ----------------------------
INSERT INTO `fctpass` VALUES ('1', 'อนุญาต');
INSERT INTO `fctpass` VALUES ('2', 'ไม่อนุญาต');

-- ----------------------------
-- Table structure for fcttype
-- ----------------------------
DROP TABLE IF EXISTS `fcttype`;
CREATE TABLE `fcttype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) DEFAULT NULL COMMENT 'Type',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fcttype
-- ----------------------------
INSERT INTO `fcttype` VALUES ('1', 'ติดเตียง');
INSERT INTO `fcttype` VALUES ('2', 'ผู้พิการ');
INSERT INTO `fcttype` VALUES ('3', 'Palliative Care');
INSERT INTO `fcttype` VALUES ('4', 'ติดเตียง + พิการ');
INSERT INTO `fcttype` VALUES ('6', 'ติดเตียง + Palliative Care');
INSERT INTO `fcttype` VALUES ('7', 'พิการ + Palliative Care');
INSERT INTO `fcttype` VALUES ('8', 'ติดเตียง + พิการ + Palliative Care');
INSERT INTO `fcttype` VALUES ('9', 'ผู้สูงอายุ พลัดตกหกล้ม');
INSERT INTO `fcttype` VALUES ('10', 'ผู้สูงอายุ');
INSERT INTO `fcttype` VALUES ('11', 'หญิงตั้งครรภ์ที่มีภาวะเสี่ยง');
INSERT INTO `fcttype` VALUES ('12', 'มารดาหลังคลอด');
INSERT INTO `fcttype` VALUES ('13', 'ทารกแรกเกิด');
INSERT INTO `fcttype` VALUES ('14', 'สูตินรีเวช');
INSERT INTO `fcttype` VALUES ('15', 'เด็กที่มีพัฒนาการล่าช้า');
INSERT INTO `fcttype` VALUES ('16', 'มะเร็ง');
INSERT INTO `fcttype` VALUES ('17', 'stroke');
INSERT INTO `fcttype` VALUES ('20', 'จิตเวช');
INSERT INTO `fcttype` VALUES ('18', 'ARV');
INSERT INTO `fcttype` VALUES ('19', 'TB');
INSERT INTO `fcttype` VALUES ('24', 'COPD');
INSERT INTO `fcttype` VALUES ('25', 'ติดบ้าน');
INSERT INTO `fcttype` VALUES ('26', 'อุบัติเหตุ');
INSERT INTO `fcttype` VALUES ('27', 'โรคหัวใจ');
INSERT INTO `fcttype` VALUES ('28', 'ระบบทางเดินปัสสาวะ');

-- ----------------------------
-- Table structure for fct_copy
-- ----------------------------
DROP TABLE IF EXISTS `fct_copy`;
CREATE TABLE `fct_copy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fcttype_id` int(11) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `colour_id` int(11) DEFAULT NULL,
  `hn` varchar(9) DEFAULT NULL,
  `an` varchar(10) DEFAULT NULL,
  `ptname` varchar(50) DEFAULT NULL COMMENT 'ผู้ป่วย',
  `ptage` varchar(3) DEFAULT NULL COMMENT 'อายุ',
  `diage` varchar(100) DEFAULT NULL COMMENT 'โรค',
  `pps` varchar(5) DEFAULT NULL,
  `pain` varchar(5) DEFAULT NULL,
  `painnote` varchar(100) DEFAULT NULL,
  `cc` varchar(200) DEFAULT NULL,
  `pi` varchar(250) DEFAULT NULL,
  `bt` varchar(5) DEFAULT NULL,
  `pr` varchar(5) DEFAULT NULL,
  `rr` varchar(5) DEFAULT NULL,
  `bp` varchar(7) DEFAULT NULL,
  `drugallergy` varchar(100) DEFAULT NULL,
  `admit` date DEFAULT NULL,
  `dc` date DEFAULT NULL,
  `or` varchar(100) DEFAULT NULL,
  `ordate` date DEFAULT NULL,
  `disease` varchar(50) DEFAULT NULL,
  `receive` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `ptcate` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `hossub` varchar(100) DEFAULT NULL,
  `tra` varchar(100) DEFAULT NULL,
  `retng` varchar(100) DEFAULT NULL,
  `retfo` varchar(100) DEFAULT NULL,
  `colobag` varchar(100) DEFAULT NULL,
  `lesion` varchar(100) DEFAULT NULL,
  `lesioncare` varchar(100) DEFAULT NULL,
  `recov` varchar(100) DEFAULT NULL,
  `recovcare` varchar(100) DEFAULT NULL,
  `oxygen` varchar(100) DEFAULT NULL,
  `lr01` varchar(100) DEFAULT NULL,
  `lr02` varchar(200) DEFAULT NULL,
  `lr03` varchar(100) DEFAULT NULL,
  `lr04` varchar(200) DEFAULT NULL,
  `lr05` varchar(100) DEFAULT NULL,
  `lr06` varchar(200) DEFAULT NULL,
  `lr07` varchar(10) DEFAULT NULL,
  `lr08` varchar(10) DEFAULT NULL,
  `lr09` varchar(10) DEFAULT NULL,
  `lr10` varchar(200) DEFAULT NULL,
  `lrl01` varchar(200) DEFAULT NULL,
  `lrl02` varchar(10) DEFAULT NULL,
  `lrl03` varchar(10) DEFAULT NULL,
  `lrl04` varchar(10) DEFAULT NULL,
  `lrl05` varchar(10) DEFAULT NULL,
  `lrl06` varchar(10) DEFAULT NULL,
  `lrl07` varchar(100) DEFAULT NULL,
  `lrl08` varchar(100) DEFAULT NULL,
  `lr` varchar(100) DEFAULT NULL,
  `lrl09` varchar(100) DEFAULT NULL,
  `lrl10` varchar(10) DEFAULT NULL,
  `lrl11` varchar(10) DEFAULT NULL,
  `lrl12` varchar(10) DEFAULT NULL,
  `lrl13` varchar(10) DEFAULT NULL,
  `other` varchar(100) DEFAULT NULL,
  `appdate` date DEFAULT NULL,
  `doctorapp` varchar(50) DEFAULT NULL,
  `appdate2` date DEFAULT NULL,
  `doctorapp2` varchar(50) DEFAULT NULL,
  `appdate3` date DEFAULT NULL,
  `doctorapp3` varchar(50) DEFAULT NULL,
  `senddate` date DEFAULT NULL,
  `windpipe` varchar(100) DEFAULT NULL,
  `insulin` varchar(100) DEFAULT NULL,
  `equip` varchar(100) DEFAULT NULL,
  `depart` varchar(50) DEFAULT NULL,
  `hosin` varchar(100) DEFAULT NULL,
  `officer` varchar(50) DEFAULT NULL,
  `confirm` varchar(10) DEFAULT NULL,
  `confirmfct` varchar(10) DEFAULT NULL,
  `cid` varchar(13) DEFAULT NULL,
  `send` smallint(2) DEFAULT NULL COMMENT 'ส่งเยี่ยม',
  `okcase` smallint(2) DEFAULT NULL COMMENT 'รับเคส',
  `birthday` date DEFAULT NULL,
  `tmbpart` varchar(2) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `bloodgrp` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=525 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fct_copy
-- ----------------------------

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT 'ชื่อกลุ่มงาน',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'กลุ่มงานเภสัชกรรมชุมชน');
INSERT INTO `groups` VALUES ('2', 'กลุ่มงานทันตกรรม');
INSERT INTO `groups` VALUES ('3', 'กลุ่มงานบริหารจัดการทั่วไป');
INSERT INTO `groups` VALUES ('4', 'สารสนเทศ1');
INSERT INTO `groups` VALUES ('5', 'แม่บ้าน10');
INSERT INTO `groups` VALUES ('6', 'แม่บ้าน11');
INSERT INTO `groups` VALUES ('7', 'แม่บ้าน12');

-- ----------------------------
-- Table structure for maemoh_income_code
-- ----------------------------
DROP TABLE IF EXISTS `maemoh_income_code`;
CREATE TABLE `maemoh_income_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `income_code` varchar(20) NOT NULL,
  `income_name` varchar(255) DEFAULT NULL,
  `income_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of maemoh_income_code
-- ----------------------------
INSERT INTO `maemoh_income_code` VALUES ('1', '1102050101.103', 'ลูกหนี้ค่าตรวจสุขภาพหน่วยงานภาครัฐ', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('2', '1102050101.107', 'ลูกหนี้ค่ารักษาเบิกต้นสังกัด OPD', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('4', '1102050101.201', 'ลูกหนี้ค่ารักษา OPD-UC ใน CUP', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('6', '1102050101.203', 'ลูกหนี้ค่ารักษา OPD-UC นอกCUP(ในจังหวัด)', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('8', '1102050101.205', 'ลูกหนี้ค่ารักษา OPD-UC นอกCUP(ต่างจังหวัด)', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('10', '1102050101.207', 'ลูกหนี้ค่ารักษา OPD-UC ต่างสังกัด สป.', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('12', '1102050101.209', 'ลูกหนี้ค่ารักษา UC-P&P Expressed demand   OPD', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('13', '1102050101.216', 'ลูกหนี้ค่ารักษา UC OPD-AE', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('15', '1102050101.218', 'ลูกหนี้ค่ารักษา UC-OPD-HC', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('17', '1102050101.220', 'ลูกหนี้ค่ารักษา UC-OPD-DMI', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('19', '1102050101.301', 'ลูกหนี้ค่ารักษาประกันสังคม OPD เครือข่าย', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('21', '1102050101.303', 'ลูกหนี้ค่ารักษาประกันสังคม OPD นอกเครือข่าย', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('23', '1102050101.305', 'ลูกหนี้ค่ารักษาประกันสังคม OPD ต่างสังกัด สป.', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('27', '1102050101.309', 'ลูกหนี้ค่ารักษาประกันสังคม-ค่าใช้จ่ายสูงฯ OPD', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('29', '1102050101.401', 'ลูกหนี้ค่ารักษา-เบิกจ่ายตรงกรมบัญชีกลาง OPD', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('31', '1102050101.501', 'ลูกหนี้ค่ารักษา-แรงงานต่างด้าว OPD', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('33', '1102050101.503', 'ลูกหนี้ค่ารักษา-แรงงานต่างด้าว OPD นอก CUP', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('36', '1102050101.701', 'ลูกหนี้ค่ารักษา-บุคลที่มีปัญหาสถานะฯ OPD ในจังหวัด', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('37', '1102050101.702', 'ลูกหนี้ค่ารักษา-บุคลที่มีปัญหาสถานะฯ OPD ต่างจังหวัด', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('39', '1102050101.801', 'ลูกหนี้ค่ารัหษา-เบิกจ่ายตรง อปท. OPD', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('41', '1102050102.106', 'ลูกหนี้ค่ารักษา-ชำระเงินเอง', 'OPD');
INSERT INTO `maemoh_income_code` VALUES ('43', '1102050102.602', 'ลูกหนี้ค่ารักษา พรบ.รถ OPD ', 'OPD');

-- ----------------------------
-- Table structure for maemoh_income_code_ipd
-- ----------------------------
DROP TABLE IF EXISTS `maemoh_income_code_ipd`;
CREATE TABLE `maemoh_income_code_ipd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `income_code` varchar(20) NOT NULL,
  `income_name` varchar(255) DEFAULT NULL,
  `income_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of maemoh_income_code_ipd
-- ----------------------------
INSERT INTO `maemoh_income_code_ipd` VALUES ('3', '1102050101.108', 'ลูกหนี้ค่ารักษาเบิกต้นสังกัด IPD', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('5', '1102050101.202', 'ลูกหนี้ค่ารักษา IPD-UC ใน CUP', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('7', '1102050101.204', 'ลูกหนี้ค่ารักษา IPD-UC นอกCUP(ในจังหวัด)', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('9', '1102050101.206', 'ลูกหนี้ค่ารักษา IPD-UC นอกCUP(ต่างจังหวัด)', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('11', '1102050101.208', 'ลูกหนี้ค่ารักษา IPD-UC ต่างสังกัด สป.', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('14', '1102050101.217', 'ลูกหนี้ค่ารักษา UC IPD-AE', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('16', '1102050101.219', 'ลูกหนี้ค่ารักษา UC-IPD-HC', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('18', '1102050101.221', 'ลูกหนี้ค่ารักษา UC-IPD-DMI', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('20', '1102050101.302', 'ลูกหนี้ค่ารักษาประกันสังคม IPD เครือข่าย ', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('22', '1102050101.304', 'ลูกหนี้ค่ารักษาปรกันสังคม IPD นอกเครือข่าย ', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('24', '1102050101.306', 'ลูกหนี้ค่ารักษาประกันสังคม IPD ต่างสังกัด สป.', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('25', '1102050101.307', 'ลูกหนี้ค่ารักษาประกันสังคม-กองทุนทดแทน IPD', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('26', '1102050101.308', 'ลุกหนี้ค่ารักษาประกันสังคม 72ชั่วโมงแรก IPD', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('28', '1102050101.310', 'ลูกหนี้ค่ารักษาประกันสังคม-ค่าใช้จ่ายสูง IPD', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('30', '1102050101.402', 'ลูกหนี้ค่ารักษา-เบิกจ่ายตรงกรมบัญชีกลาง IPD', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('32', '1102050101.502', 'ลูกหนี้ค่ารักษา-แรงงานต่างด้าว IPD', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('34', '1102050101.504', 'ลูกหนี้ค่ารักษา-แรงงานต่างด้าว IPD นอก CUP', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('35', '1102050101.505', 'ลูกหนี้ค่ารักษา-แรงงานต่างด้าว ค่าใช้จ่ายสูง/อุบัติเหตุ/ฉุกเฉิน IPD', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('38', '1102050101.703', 'ลูกหนี้ค่ารักษาบุคคลที่มีปัญหาสถานะและสิทธิเบิกจากส่วนกลาง IPD', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('40', '1102050101.802', 'ลูกหนี้ค่ารักษา - เบิกจ่ายตรง อปท. IPD', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('42', '1102050102.107', 'ลูกหนี้ค่ารักษา-ชำระเงินเอง', 'IPD');
INSERT INTO `maemoh_income_code_ipd` VALUES ('44', '1102050102.603', 'ลูกหนี้ค่ารักษา พรบ.รถ IPD ', 'IPD');

-- ----------------------------
-- Table structure for maemoh_income_pttype
-- ----------------------------
DROP TABLE IF EXISTS `maemoh_income_pttype`;
CREATE TABLE `maemoh_income_pttype` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `INCOME_CODE` varchar(20) NOT NULL,
  `PTTYPE` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=193 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of maemoh_income_pttype
-- ----------------------------
INSERT INTO `maemoh_income_pttype` VALUES ('18', '1102050101.201', '33');
INSERT INTO `maemoh_income_pttype` VALUES ('19', '1102050101.201', '41');
INSERT INTO `maemoh_income_pttype` VALUES ('20', '1102050101.201', '42');
INSERT INTO `maemoh_income_pttype` VALUES ('21', '1102050101.201', '43');
INSERT INTO `maemoh_income_pttype` VALUES ('22', '1102050101.201', '44');
INSERT INTO `maemoh_income_pttype` VALUES ('23', '1102050101.201', '50');
INSERT INTO `maemoh_income_pttype` VALUES ('24', '1102050101.201', '51');
INSERT INTO `maemoh_income_pttype` VALUES ('25', '1102050101.201', '61');
INSERT INTO `maemoh_income_pttype` VALUES ('26', '1102050101.201', '62');
INSERT INTO `maemoh_income_pttype` VALUES ('27', '1102050101.201', '64');
INSERT INTO `maemoh_income_pttype` VALUES ('29', '1102050101.201', '88');
INSERT INTO `maemoh_income_pttype` VALUES ('30', '1102050101.201', '90');
INSERT INTO `maemoh_income_pttype` VALUES ('31', '1102050101.201', '92');
INSERT INTO `maemoh_income_pttype` VALUES ('32', '1102050101.201', '96');
INSERT INTO `maemoh_income_pttype` VALUES ('52', '1102050101.203', '15');
INSERT INTO `maemoh_income_pttype` VALUES ('75', '1102050101.401', '21');
INSERT INTO `maemoh_income_pttype` VALUES ('77', '1102050101.501', '13');
INSERT INTO `maemoh_income_pttype` VALUES ('96', '1102050102.602', '36');
INSERT INTO `maemoh_income_pttype` VALUES ('98', '1102050102.603', '40');
INSERT INTO `maemoh_income_pttype` VALUES ('99', '1102050102.603', '43');
INSERT INTO `maemoh_income_pttype` VALUES ('105', '1102050101.209', '05');
INSERT INTO `maemoh_income_pttype` VALUES ('117', '1102050102.107', '20');
INSERT INTO `maemoh_income_pttype` VALUES ('118', '1102050102.106', '14');
INSERT INTO `maemoh_income_pttype` VALUES ('119', '1102050102.106', '10');
INSERT INTO `maemoh_income_pttype` VALUES ('133', '1102050101.701', '89');
INSERT INTO `maemoh_income_pttype` VALUES ('137', '1102050101.107', '22');
INSERT INTO `maemoh_income_pttype` VALUES ('138', '1102050101.107', '37');
INSERT INTO `maemoh_income_pttype` VALUES ('139', '1102050102.107', '67');
INSERT INTO `maemoh_income_pttype` VALUES ('140', '1102050102.107', '68');
INSERT INTO `maemoh_income_pttype` VALUES ('141', '1102050101.107', '69');
INSERT INTO `maemoh_income_pttype` VALUES ('147', '1102050102.107', '70');
INSERT INTO `maemoh_income_pttype` VALUES ('152', '1102050101.301', '34');
INSERT INTO `maemoh_income_pttype` VALUES ('154', '1102050101.107', '20');
INSERT INTO `maemoh_income_pttype` VALUES ('170', '1102050101.801', '18');
INSERT INTO `maemoh_income_pttype` VALUES ('173', '1102050101.303', '35');
INSERT INTO `maemoh_income_pttype` VALUES ('183', '1102050101.107', '84');
INSERT INTO `maemoh_income_pttype` VALUES ('184', '1102050101.107', '85');
INSERT INTO `maemoh_income_pttype` VALUES ('188', '1102050101.107', '71');
INSERT INTO `maemoh_income_pttype` VALUES ('189', '1102050101.107', '72');
INSERT INTO `maemoh_income_pttype` VALUES ('190', '1102050101.107', '81');
INSERT INTO `maemoh_income_pttype` VALUES ('191', '1102050101.107', '82');
INSERT INTO `maemoh_income_pttype` VALUES ('192', '1102050101.107', '83');

-- ----------------------------
-- Table structure for maemoh_income_pttype_ipd
-- ----------------------------
DROP TABLE IF EXISTS `maemoh_income_pttype_ipd`;
CREATE TABLE `maemoh_income_pttype_ipd` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `INCOME_CODE` varchar(20) NOT NULL,
  `PTTYPE` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of maemoh_income_pttype_ipd
-- ----------------------------
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('12', '1102050101.103', '23');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('17', '1102050101.108', '22');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('35', '1102050101.202', '34');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('36', '1102050101.202', '41');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('37', '1102050101.202', '42');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('38', '1102050101.202', '43');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('39', '1102050101.202', '44');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('40', '1102050101.202', '50');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('41', '1102050101.202', '51');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('42', '1102050101.202', '61');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('43', '1102050101.202', '62');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('44', '1102050101.202', '64');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('46', '1102050101.202', '88');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('47', '1102050101.202', '90');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('48', '1102050101.202', '92');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('49', '1102050101.202', '96');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('50', '1102050101.202', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('51', '1102050101.202', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('52', '1102050101.203', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('53', '1102050101.204', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('54', '1102050101.207', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('55', '1102050101.208', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('56', '1102050101.209', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('57', '1102050101.209', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('58', '1102050101.209', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('59', '1102050101.209', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('61', '1102050101.214', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('62', '1102050101.215', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('63', '1102050101.215', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('64', '1102050101.215', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('65', '1102050101.215', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('66', '1102050101.215', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('70', '1102050101.302', '34');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('74', '1102050101.304', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('75', '1102050101.401', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('76', '1102050101.402', '21');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('77', '1102050101.501', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('78', '1102050101.502', '13');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('79', '1102050102.101', '04');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('80', '1102050102.101', '10');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('81', '1102050102.101', '16');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('82', '1102050102.101', '20');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('83', '1102050102.101', '36');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('84', '1102050102.101', '30');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('85', '1102050102.101', '41');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('86', '1102050102.101', '51');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('87', '1102050102.101', '99');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('88', '1102050102.101', '31');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('89', '1102050102.101', '32');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('90', '1102050102.101', '42');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('91', '1102050102.101', '44');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('92', '1102050102.101', '45');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('93', '1102050102.101', '52');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('94', '1102050102.101', '14');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('95', '1102050102.103', '13');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('96', '1102050102.602', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('98', '1102050102.603', '36');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('99', '1102050102.603', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('101', '1102050101.202', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('102', '1102050101.204', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('105', '1102050101.209', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('107', '1102050101.216', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('108', '1102050101.216', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('109', '1102050101.217', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('110', '1102050101.217', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('111', '1102050101.217', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('112', '1102050101.217', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('115', '1102050101.307', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('116', '1102050101.703', '89');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('117', '1102050102.107', '10');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('118', '1102050102.106', '14');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('119', '1102050102.106', '10');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('133', '1102050101.701', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('137', '1102050102.107', '14');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('138', '1102050102.107', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('139', '1102050102.107', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('140', '1102050102.107', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('141', '1102050102.107', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('147', '1102050102.107', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('149', '1102050101.307', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('152', '1102050101.301', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('153', '1102050101.304', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('154', '1102050102.107', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('167', '1102050101.216', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('170', '1102050101.801', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('171', '1102050101.802', '18');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('173', '1102050101.303', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('175', '1102050101.217', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('176', '1102050101.217', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('177', '1102050101.301', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('179', '1102050101.217', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('181', '1102050101.220', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('182', '1102050101.221', '0');
INSERT INTO `maemoh_income_pttype_ipd` VALUES ('183', '1102050101.216', '0');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('1', null, null, null, null, null, null, null);
INSERT INTO `profile` VALUES ('2', null, null, null, null, null, null, null);
INSERT INTO `profile` VALUES ('3', null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for pttype
-- ----------------------------
DROP TABLE IF EXISTS `pttype`;
CREATE TABLE `pttype` (
  `pttype` char(2) NOT NULL DEFAULT '',
  `name` varchar(250) DEFAULT NULL,
  `editmask` varchar(100) DEFAULT NULL,
  `isuse` char(1) DEFAULT NULL,
  `pcode` char(2) DEFAULT NULL,
  `requirecode` char(1) DEFAULT NULL,
  `doctor_fee` char(1) DEFAULT NULL,
  `fee_code` varchar(7) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `contract` char(1) DEFAULT NULL,
  `paidst` char(2) DEFAULT NULL,
  `in_region` char(1) DEFAULT NULL,
  `uc` char(1) DEFAULT NULL,
  `require_hcode` char(1) DEFAULT NULL,
  `oldcode` varchar(5) DEFAULT NULL,
  `fee_code2` varchar(7) DEFAULT NULL,
  `price_type` int(11) DEFAULT NULL,
  `debtor` char(1) DEFAULT NULL,
  `noexpire` char(1) DEFAULT NULL,
  `hipdata_code` varchar(6) DEFAULT NULL,
  `min_age` int(11) DEFAULT NULL,
  `max_age` int(11) DEFAULT NULL,
  `bill_sss` char(1) DEFAULT NULL,
  `bill_type` int(11) DEFAULT NULL,
  `hipdata_pttype` char(3) DEFAULT NULL,
  `use_contract_id` char(1) DEFAULT NULL,
  `yearly_charge` char(1) DEFAULT NULL,
  `yearly_charge_icode1` varchar(7) DEFAULT NULL,
  `yearly_charge_icode2` varchar(7) DEFAULT NULL,
  `region_type` int(11) DEFAULT NULL,
  `pttype_group1` char(3) DEFAULT NULL,
  `pttype_group2` char(3) DEFAULT NULL,
  `pttype_guid` varchar(38) DEFAULT NULL,
  `max_debt_money` double(15,3) DEFAULT NULL,
  `allow_finance_edit` char(1) DEFAULT NULL,
  `print_csmb_statement` char(1) DEFAULT NULL,
  `pttype_information` longtext,
  `fee_code_paidst` char(2) DEFAULT NULL,
  `fee_code2_paidst` char(2) DEFAULT NULL,
  `debt_due_day` int(11) DEFAULT NULL,
  `rx_pay_debit_tr` char(1) DEFAULT NULL,
  `separate_rcpno` char(1) DEFAULT NULL,
  `rcp_bookno` int(11) DEFAULT NULL,
  `separate_debt_id` char(1) DEFAULT NULL,
  `admit_fee_code` varchar(7) DEFAULT NULL,
  `use_package` char(1) DEFAULT NULL,
  `charge_df_perday` char(1) DEFAULT NULL,
  `nhso_code` char(2) DEFAULT NULL,
  `ipd_hour_cut` int(11) DEFAULT NULL,
  `pttype_spp_id` int(11) DEFAULT NULL,
  `print_presc_ned` char(1) DEFAULT NULL,
  `hos_guid` varchar(38) DEFAULT NULL,
  `sks_benefit_plan_type_id` int(11) DEFAULT NULL,
  `pttype_std_code` char(4) DEFAULT NULL,
  `export_eclaim` char(1) DEFAULT NULL,
  `round_money` char(1) DEFAULT NULL,
  `pttype_price_policy_type_id` int(11) DEFAULT NULL,
  `emp_privilege` char(1) DEFAULT NULL,
  `is_pttype_plan` char(1) DEFAULT NULL,
  `finance_round_money` char(1) DEFAULT NULL,
  `emp_financial` char(1) DEFAULT NULL,
  `pttype_eclaim_id` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`pttype`),
  KEY `name` (`name`),
  KEY `ix_ix_hipdata_code` (`hipdata_code`),
  KEY `ix_pcode` (`pcode`),
  KEY `ix_pttype_spp_id` (`pttype_spp_id`),
  KEY `ix_pttype_guid` (`pttype_guid`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of pttype
-- ----------------------------
INSERT INTO `pttype` VALUES ('10', 'ชำระเงินครบ', '!00000000;1;#:!0000000000;1;#', 'Y', 'A1', 'N', 'Y', '', '0', 'N', '03', 'N', null, 'N', null, '', '0', 'N', 'N', null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{F59B0EDE-0454-4D26-A0EA-B3EC6CBC38AB}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '06', '6', '6', 'N', null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('12', 'ต่างด้าวเรียกเก็บ', '', 'N', 'ST', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, null, null, null, '{E992D354-4F2D-4A57-BB37-19579E5F642C}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '07', '6', '5', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('13', 'ต่างด้าวขึ้นทะเบียน', '', 'Y', 'A1', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{E185DFDE-68E0-423F-9F36-318AA9B8F0E2}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '07', '6', '5', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('14', 'ประกันสังคมกับรพ.อื่น', '', 'Y', 'A7', 'Y', 'Y', null, '0', 'N', '01', null, null, 'N', null, null, '2', 'N', null, 'SSS', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{BEC19B9B-6ED0-4568-BEEE-3BD45AD51229}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('15', 'สถานะคนไทยในต่างประเทศ', '', 'Y', 'A1', 'N', 'Y', null, null, 'N', '03', null, null, 'N', null, null, '0', 'N', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '06', '6', '6', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('18', 'จ่ายตรง อปท.', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', 'Y', 'LGO', null, null, 'N', '0', 'L1', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('19', 'เบิกได้ อปท.', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('20', 'ใช้สิทธิเบิกข้าราชการ', '!00000000;1;#:!0000000000;1;#', 'Y', 'A2', 'Y', 'Y', null, '0', 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{8081CF2E-C0F6-4581-BE88-D01B95110B91}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('21', 'จ่ายตรงข้าราชการ', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', 'Y', 'OFC', null, null, 'N', '0', 'O1', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('22', 'รัฐวิสาหกิจ', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '2', 'N', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '6', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('23', 'ต่างด้าวไม่ขึ้นทะเบียน', '', 'Y', 'A1', 'N', 'Y', null, '0', 'N', '03', null, null, 'N', null, null, '2', 'N', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{EA8632E8-F1C5-483A-B50B-931FBECA79CB}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '07', '6', '6', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('30', 'บัตรประกันสุขภาพ ทั่วไป', '!00-1-0000000-0;1;#:!00-1-00000-0;1;#:!00000-1-0000-00000;1;#', 'N', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{390D9E12-A652-4768-9AA6-8176073ABAB4}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', '3', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('33', 'นักเรียนมัธยม (13-15 ปี)', '!00000000;1;#:!00000000;1;#', 'Y', 'AC', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{BC37D382-E6F5-4B0D-84F1-A18E148D9257}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '73', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('34', 'บัตรประกันสังคม', '!00-0000000-0;1;#:!0-0000-00000-00-0;1;#', 'Y', 'A7', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '2', 'Y', null, 'SSS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{3D833FDA-BB62-4755-9A31-F55CD21AA4C3}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('35', 'กองทุนทดแทน', '', 'Y', 'A8', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '1', 'Y', null, null, null, null, 'Y', null, null, 'N', 'N', null, null, '1', null, null, '{C53F2E6C-0AD9-44BB-A07C-57B845A1F844}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '6', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('36', 'พรบ.', '', 'Y', 'A9', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '2', 'Y', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{757C8170-9714-43C4-9C6E-AC4BD4CB860F}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '6', null, null, '7', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('37', 'ครูเอกชน', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '08', '6', '1', 'Y', null, '5', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('41', 'ทหารผ่านศึก', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{F3661219-DE24-4993-9E52-677CD1DF67BB}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '75', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('42', 'พระภิกษุ สามเณร', '!00000000;1;#:!00000000;1;#', 'Y', 'AF', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{22BB071D-AC4A-4EB2-8741-F1328E668D05}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '76', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('43', 'บัตรประกันสุขภาพ อสม.', '!00-3-0000000-0;1;#:!00-3-00000-0;1;#:!00000-3-0000-00000;1;#', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{2702BFE0-CF98-40FB-9F93-7800CD6D2925}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', 'N', null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('44', 'บัตรประกันสุขภาพ ผู้นำ', '!00-2-0000000-0;1;#:!00-2-00000-0;1;#:!00000-2-0000-00000;1;#', 'Y', 'AK', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{FE44B424-CBB2-4685-B43E-6325608C7FA3}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '81', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('45', 'สิทธิประเภท ก. อื่นๆ', '!00000000;1;#:!00000000;1;#:!ก.00000;1;#', 'N', 'A3', 'Y', 'Y', null, '0', null, '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '{6FD3FF88-905E-42C6-9518-9F8FE7A8FE17}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('46', 'สิทธิประเภท ข. อื่นๆ', '!00000000;1;#:!00000000;1;#', 'N', 'A4', 'Y', 'Y', null, '0', null, '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '{BE7D96F4-EA53-44A5-9A43-3BCAC141721D}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('47', 'สิทธิประเภท ค. อื่นๆ', '!00000000;1;#:!00000000;1;#', 'N', 'A5', 'Y', 'Y', null, '0', null, '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '{4AF46535-FA14-4165-B36B-3F790FA95035}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('48', 'สิทธิประเภท ง. อื่นๆ', '!00000000;1;#:!00000000;1;#', 'N', 'A6', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{9B257F25-29AD-416A-B548-0D04FCB03A08}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('50', 'ผู้มีรายได้น้อย', '!00000000;1;#:!ก.0000000;1;#:!ข.0000000;1;#', 'Y', 'AB', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{EF90C77B-1CC8-4C56-BE78-41C0F30EFDAE}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '72', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('51', 'ครอบครัวผู้นำชุมชน', '!00000000;1;#:!00000000;1;#', 'Y', 'AK', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{DB866046-D3AD-41B2-BCA2-D999DEB214D3}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '81', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('52', 'ไม่มีบัตร สปน.', '', 'N', 'A3', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{52A000B2-C926-45A7-9366-5E601F8045A4}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('61', 'ผู้สูงอายุ', '!00000000;1;#:!ข.0000000;1;#', 'Y', 'AG', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'Y', 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{7D889D75-B71F-4B91-96C6-C86BAC7A52AB}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '77', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('62', 'เด็ก 0-12 ปี', '!00000000;1;#:!ข.0000000;1;#', 'Y', 'AA', 'Y', 'Y', '', '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'UCS', '0', '5', 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{74436271-BB70-4AB6-8E46-11016DD3C467}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '71', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('63', 'นักเรียนประถม (6-12 ปี)', '!00000000;1;#:!ข.0000000;1;#:!ก.0000000;1;#', 'N', 'AA', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, '{9219D15A-9B7B-42F6-A827-DF2D18D152D5}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '73', '6', '4', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('64', 'ผู้พิการ', '!00000000;1;#:!0-0000-00000-00-0;1;#:!00000000;1;#', 'Y', 'AD', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{72C58800-C9D1-449B-96F8-01CA5F54ECB1}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '74', '6', '4', null, null, null, null, 'Y', 'N', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('65', 'สิทธิ์ว่าง', '', 'Y', 'ST', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '6', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('66', 'สิทธิ์อนุเคราะห์', '', 'Y', 'AB', 'N', 'N', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '66', '6', '6', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('67', 'อปท. ตนเอง', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L1', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('68', 'อปท. บุคคลในครอบครัว', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L2', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, null, null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('69', 'อปท. บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L4', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('70', 'อปท. ผู้รับเบี้ยหวัดบำนาญ', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L3', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('71', 'อปท. ลูกจ้างประจำ', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L5', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('72', 'อปท. สิทธิประจำตำแหน่งและบุคคลในครอบครัว', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L6', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('77', 'โครงการพิเศษ', '', 'N', 'A3', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{AF542B44-BE0C-4EC3-8FBE-94E5F24FA125}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '77', '6', '6', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('81', 'ขรก. (ตนเอง)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O1', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('82', 'ขรก.(บุคคลในครอบครัว)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O4', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('83', 'ขรก.(บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O5', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, null, null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('84', 'ขรก.(ผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O3', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('85', 'ขรก.(ลูกจ้างประจำ)', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O2', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('88', 'ครอบครัว อสม.', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('89', 'บุคคลมีปัญหาสถานะภาพสิทธิ', '', 'Y', 'ST', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '99', '6', '6', null, null, null, null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('90', 'บัตรประกันสุขภาพ (30 บาท)', '!00000000;1;#:!0000000000;1;#', 'Y', 'UC', 'Y', 'Y', '', '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{5F118FED-1D35-4E5E-8C8F-EB1FF7704DA0}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '3', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('91', 'UC นอกเขตในจังหวัด', '', 'N', 'UA', 'N', 'Y', '', '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{ABFDD563-1D74-4E78-9868-715CCC17129A}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('92', 'UC รอยต่อนอกเขต', '', 'Y', 'UC', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{91EE1F52-5D9F-41FF-B514-4F264CFA7E57}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '3', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('93', 'UC นอกเขต(ฉุกเฉิน)ต่างจังหวัด', '', 'N', 'UA', 'N', 'N', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{7B262552-05A2-4CA1-934E-3A20748946CB}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('94', 'UC ท นอกเขต(ฉุกเฉิน)ต่างจังหวัด', '', 'N', 'UA', 'N', 'N', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{C2830EB4-9F0B-4573-899A-357FBB776F7C}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('95', 'UC ท นอกเขตในจังหวัด', '!ท00000000;1;#:!ท0000000000;1;#', 'N', 'UB', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{6F9D1A83-175F-4FE9-99C6-93C9BCCB722E}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', '4', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('96', 'UC ท รอยต่อนอกเขต', '!ท00000000;1;#:!ท0000000000;1;#', 'Y', 'UB', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{506BCC5C-A060-4136-8DDC-B841FBF5CB74}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('97', 'บัตรประกันสุขภาพ (ยกเว้นค่าธรรมเนียม)', '!ท00000000;1;#:!ท0000000000;1;#', 'N', 'UB', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{1AAFF86E-33F3-442B-953F-4D622667964D}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', '3', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('98', 'UC นอกเขต(ฉุกเฉิน)ในจังหวัด', '!00000000;1;#:!0000000000;1;#', 'N', 'UA', 'N', 'Y', '', '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{B4357145-1C54-4E23-B04C-C6EE1A4FCE24}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '98', '6', '3', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('99', 'UC ท นอกเขต(ฉุกเฉิน)ในจังหวัด', '!ท00000000;1;#:!ท0000000000;1;#', 'N', 'UB', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{CC6DF9FE-C691-4EA6-AC25-6D83128BFC7A}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', '4', null, null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for registools
-- ----------------------------
DROP TABLE IF EXISTS `registools`;
CREATE TABLE `registools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_list` varchar(255) DEFAULT NULL COMMENT 'รายการ',
  `year` int(3) DEFAULT NULL COMMENT 'อายุการใช้งาน',
  `fnumber` varchar(255) DEFAULT NULL COMMENT 'เลขประจำกลุ่ม',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of registools
-- ----------------------------
INSERT INTO `registools` VALUES ('1', 'โต๊ะทำงานระดับซี6', '8', '7730-007-0008');
INSERT INTO `registools` VALUES ('2', 'เครื่องคอมพิวเตอร์ส่วนบุคคลแบบพกพา', '5', '7110-001-0019');
INSERT INTO `registools` VALUES ('3', 'เครื่องกระตุ้นกล้ามเนื้อ', '3', '6530-004-0001');
INSERT INTO `registools` VALUES ('4', 'เครื่องปรับอากาศขนาด12,000 btu', '10', '3100-002-0003');
INSERT INTO `registools` VALUES ('5', 'เครื่องคอมพิวเตอร์ตั้งโต๊ะ', '5', '2100-004-0112');

-- ----------------------------
-- Table structure for social_account
-- ----------------------------
DROP TABLE IF EXISTS `social_account`;
CREATE TABLE `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `data` text,
  `code` varchar(32) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`) USING BTREE,
  UNIQUE KEY `account_unique_code` (`code`) USING BTREE,
  KEY `fk_user_account` (`user_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of social_account
-- ----------------------------

-- ----------------------------
-- Table structure for token
-- ----------------------------
DROP TABLE IF EXISTS `token`;
CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of token
-- ----------------------------
INSERT INTO `token` VALUES ('1', 'UbZg6dOxHVey4BR_B7PYqU4iSM8hsH_R', '1477563186', '0');
INSERT INTO `token` VALUES ('2', '77wl-jPASsqztFtmdEixqcukU7oOEa4C', '1477564930', '0');
INSERT INTO `token` VALUES ('3', 'CJOKo2UlRaV52vXleBkZg75eJ-czsfR4', '1477564995', '0');

-- ----------------------------
-- Table structure for tools
-- ----------------------------
DROP TABLE IF EXISTS `tools`;
CREATE TABLE `tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registool_id` int(11) DEFAULT NULL COMMENT 'รายการครุภัณฑ์',
  `tooltype_id` int(11) DEFAULT NULL COMMENT 'ประเภท',
  `buydate` date DEFAULT NULL COMMENT 'วันที่ซื้อ',
  `okdate` date DEFAULT NULL COMMENT 'วันที่ตรวจรับ',
  `yearbudget` varchar(4) DEFAULT NULL COMMENT 'ปีงบประมาณ',
  `company_id` int(11) DEFAULT NULL COMMENT 'บริษัท',
  `price` decimal(10,0) DEFAULT NULL COMMENT 'ราคา/หน่วย',
  `budget` varchar(100) DEFAULT NULL COMMENT 'ประเภทงบ',
  `serial` varchar(100) DEFAULT NULL COMMENT 'เลขซีเรียล',
  `model` varchar(100) DEFAULT NULL COMMENT 'ยี่ห้อ/รุ่น',
  `wardate` date DEFAULT NULL COMMENT 'วันที่รับประกัน',
  `department_id` int(11) DEFAULT NULL COMMENT 'แผนก',
  `howbuy` varchar(100) DEFAULT NULL COMMENT 'วิธีการจัดซื้อ',
  `exprie` varchar(100) DEFAULT NULL COMMENT 'แทงจำหน่าย',
  `expriedate` date DEFAULT NULL COMMENT 'วันที่แทงจำหน่าย',
  `expriecase` varchar(100) DEFAULT NULL COMMENT 'สาเหตุแทงจำหน่าย',
  `fnumber` varchar(255) DEFAULT NULL COMMENT 'เลขครุภํณฑ์กลุ่ม',
  `lnumber` varchar(255) DEFAULT NULL COMMENT 'เลขครุภํณฑ์รายการ',
  `pictool` varchar(255) DEFAULT NULL COMMENT 'รูปภาพ',
  `user_id` int(11) DEFAULT NULL COMMENT 'ผู้บันทึก',
  `regdate` date DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT NULL,
  `pictoolname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tools
-- ----------------------------
INSERT INTO `tools` VALUES ('1', '2', '4', '2014-10-01', '2014-10-01', '2558', '2', '23500', 'บำรงุ', '', '', '2014-10-01', '4', 'ตกลง', '0', null, null, '7110-001-0019', '0013', '1183_1_4-Photo.png', null, null, null, null);
INSERT INTO `tools` VALUES ('2', '1', '1', '2015-12-01', '2015-12-07', '2558', '4', '1800', 'บำรงุ', '', '', null, '2', 'ตกลง', '', null, null, '7730-007-0008', '0218', 'gg.png', null, null, null, null);
INSERT INTO `tools` VALUES ('3', '4', '7', '2015-12-01', '2015-12-08', '2558', '3', '3200', 'ค่าเสื่อม', '', '', null, '5', 'ตกลง', '', null, null, '3100-002-0003', '0023', 'su.jpg', null, null, null, null);
INSERT INTO `tools` VALUES ('7', '2', '4', '2015-12-01', '2015-12-03', '2558', '2', '22150', 'บำรงุ', '', '', null, '7', 'ตกลง', '', null, null, '7110-001-0019', '0151', '1183_1_4-Photo1.png', null, null, null, null);
INSERT INTO `tools` VALUES ('6', '5', '4', '2015-08-04', '2015-08-14', '2557', '2', '23750', 'บำรงุ', '', 'hp pro', '2015-12-31', '3', 'ตกลง', '', null, null, '2100-004-0112', '0015', 'compc.jpg', null, null, null, null);
INSERT INTO `tools` VALUES ('8', '1', '1', '2015-07-01', '2015-07-10', '2556', '4', '2200', 'บำรงุ', '', '', null, '3', 'ตกลง', '', null, null, '7730-007-0008', '0219', 'gg1.png', null, null, null, null);
INSERT INTO `tools` VALUES ('9', '1', '1', '2015-07-01', '2015-07-03', '2556', '4', '2200', '', '', '', null, '4', 'ตกลง', '', null, null, '7730-007-0008', '0220', 'gg1.png', null, null, null, null);

-- ----------------------------
-- Table structure for tooltypes
-- ----------------------------
DROP TABLE IF EXISTS `tooltypes`;
CREATE TABLE `tooltypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) DEFAULT NULL COMMENT 'ประเภท',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tooltypes
-- ----------------------------
INSERT INTO `tooltypes` VALUES ('1', 'ครุภัณฑ์สำนักงาน');
INSERT INTO `tooltypes` VALUES ('2', 'ครุภัณฑ์ยานพาหนะ');
INSERT INTO `tooltypes` VALUES ('3', 'ครุภัณฑ์งานบ้านการครัว');
INSERT INTO `tooltypes` VALUES ('4', 'ครุภัณฑ์คอมพิวเตอร์');
INSERT INTO `tooltypes` VALUES ('5', 'ครุภัณฑ์เครื่องมือแพทย์');
INSERT INTO `tooltypes` VALUES ('6', 'ครุภัณฑ์วิทยาศาสตร์');
INSERT INTO `tooltypes` VALUES ('7', 'ครุภัณฑ์ไฟฟ้า');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_token` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmation_sent_at` int(11) DEFAULT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recovery_token` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recovery_sent_at` int(11) DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registered_from` int(11) DEFAULT NULL,
  `logged_in_from` int(11) DEFAULT NULL,
  `logged_in_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fcthosin_id` int(11) DEFAULT NULL COMMENT 'พื้นที่',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ชื่อ-สกุล',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'รูปประจำตัว',
  `pos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ตำแหน่ง',
  `role` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`) USING BTREE,
  UNIQUE KEY `user_unique_email` (`email`) USING BTREE,
  UNIQUE KEY `user_confirmation` (`id`,`confirmation_token`) USING BTREE,
  UNIQUE KEY `user_recovery` (`id`,`recovery_token`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin@localhost.com', '$2y$12$dPJB3nYzwapkDWV/M/j8NOIL54PWhA6L3ZB.D./V4tyEp5YVHcRUe', 'gscRoe1lTkPJmxrcuvWccAP3SpBSgx9y', null, null, null, null, null, null, null, null, null, null, '1477563186', '1477563186', '::1', null, 'ผู้ดูแลระบบ', 'risk.png', '', '');
INSERT INTO `user` VALUES ('2', 'user', 'user@localhost.com', '$2y$12$OdbHVyUxftQ4sWbU2/b5vecd14EQiDOQtGLY0mlbIoYNg5N7g9wIm', 'sZXdlEkovbpGRuTUai-48qtKRg0wG_xD', null, null, null, null, null, null, null, null, null, null, '1477564929', '1477564929', '::1', null, null, null, null, null);
INSERT INTO `user` VALUES ('3', 'viewer', 'viewer@localhost.com', '$2y$12$JzwBl6l5vOHx7AR1Cuz/E.LQekOFxuH/PTdOKDOePtrQp84h4doBa', 'VRGs5thRauimpQrCdDsjXUNZsW8CRaSB', null, null, null, null, null, null, null, null, null, null, '1477564995', '1477564995', '::1', null, null, null, null, null);
