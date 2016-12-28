/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : fct

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2016-12-28 21:02:50
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
  `cid` varchar(13) DEFAULT NULL COMMENT 'CID',
  `pass` int(11) DEFAULT NULL,
  `fcttype_id` int(11) DEFAULT NULL COMMENT 'ประเภทผู้ป่วย',
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
  `receive` varchar(250) DEFAULT NULL,
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
  `hosin` int(11) DEFAULT NULL COMMENT 'รพ.สต',
  `officer` varchar(50) DEFAULT NULL,
  `confirm` smallint(2) DEFAULT '0',
  `confirmfct` smallint(2) DEFAULT '0',
  `send` smallint(2) DEFAULT '0' COMMENT 'ส่งเยี่ยม',
  `okcase` smallint(2) DEFAULT '0' COMMENT 'รับเคส',
  `birthday` date DEFAULT NULL COMMENT 'วันเกิด',
  `tmbpart` varchar(2) DEFAULT NULL COMMENT 'ตำบล',
  `sex` varchar(1) DEFAULT NULL COMMENT 'เพศ',
  `bloodgrp` varchar(30) DEFAULT NULL COMMENT 'กรุ๊ปเลือด',
  `pttype` char(2) DEFAULT NULL COMMENT 'สิทธิ์การรักษา',
  `moopart` varchar(10) DEFAULT NULL,
  `bw` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `vstdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fct
-- ----------------------------
INSERT INTO `fct` VALUES ('1', '3430300510561', null, null, null, '000056441', null, 'น.ส.ไอน้ำ เรืองโพน', null, 'R222', null, null, null, 'คลำพบก้อนที่ท้อง เป็นมา 3เดือน', '3เดือนก่อนมารพ. คลำพบก้อนที่ท้อง เจ็บท้องเวลาสัมผัส\r\n', null, null, null, null, 'ไม่ทราบประวัติการแพ้ยา', null, null, null, null, '\"\"', null, '43 หมู่ 3 ต.ชุมภูพร อ.ศรีวิไล จ.บึงกาฬ', null, '091-3638928', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', '0', '0', '0', null, '02', '2', 'O', 'O1', '03', '40', '145', '41', '2016-04-25');

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
  `fct_id` int(11) DEFAULT NULL,
  `fctdate` date DEFAULT NULL COMMENT 'วันที่ส่งเยี่ยม',
  `home` int(2) DEFAULT NULL,
  `homept` varchar(100) DEFAULT NULL COMMENT 'หมู่บ้าน',
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
  `status` enum('เยี่ยมแล้ว','ยังไม่เยี่ยม') DEFAULT 'ยังไม่เยี่ยม',
  `fcthosin_id` varchar(100) DEFAULT NULL COMMENT 'พื้นที่',
  `birthday` date DEFAULT NULL COMMENT 'วันเกิด',
  `tmbpart` varchar(2) DEFAULT NULL COMMENT 'ตำบล',
  `sex` varchar(1) DEFAULT NULL COMMENT 'เพศ',
  `bloodgrp` varchar(30) DEFAULT NULL COMMENT 'กรุ๊ปเลือด',
  `fcttype_id` int(11) DEFAULT NULL COMMENT 'ประเภทผู้ป่วย',
  `fctcolour_id` int(11) DEFAULT NULL COMMENT 'ความเร่งด่วน',
  `hhclot` int(11) DEFAULT NULL COMMENT 'ครั้งที่เยียม',
  `chlid05_glow` varchar(50) DEFAULT NULL,
  `chlid614_bw` double DEFAULT NULL,
  `chlid614_hg` double DEFAULT NULL,
  `child614_food` varchar(50) DEFAULT NULL,
  `dc` varchar(20) DEFAULT NULL COMMENT 'จำหน่าย',
  `tool` varchar(255) DEFAULT NULL COMMENT 'อุปกรณ์ที่ยืม',
  `cc` varchar(200) DEFAULT NULL,
  `pi` varchar(250) DEFAULT NULL,
  `moopart` varchar(10) DEFAULT NULL COMMENT 'หมู่ที่',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fcthhc
-- ----------------------------

-- ----------------------------
-- Table structure for fcthhcdetail
-- ----------------------------
DROP TABLE IF EXISTS `fcthhcdetail`;
CREATE TABLE `fcthhcdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fcthhc_id` int(11) DEFAULT NULL,
  `fct_id` int(11) DEFAULT NULL,
  `fctnumber` int(11) DEFAULT NULL COMMENT 'ครั้งที่เยี่ยม',
  `fctdate` date DEFAULT NULL COMMENT 'วันที่ส่งเยี่ยม',
  `home` int(2) DEFAULT NULL,
  `homept` varchar(100) DEFAULT NULL COMMENT 'หมู่บ้าน',
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
  `status` enum('เยี่ยมแล้ว','ยังไม่เยี่ยม') DEFAULT 'ยังไม่เยี่ยม',
  `fcthosin_id` varchar(100) DEFAULT NULL COMMENT 'พื้นที่',
  `birthday` date DEFAULT NULL COMMENT 'วันเกิด',
  `tmbpart` varchar(2) DEFAULT NULL COMMENT 'ตำบล',
  `sex` varchar(1) DEFAULT NULL COMMENT 'เพศ',
  `bloodgrp` varchar(30) DEFAULT NULL COMMENT 'กรุ๊ปเลือด',
  `fcttype_id` int(11) DEFAULT NULL COMMENT 'ประเภทผู้ป่วย',
  `fctcolour_id` int(11) DEFAULT NULL COMMENT 'ความเร่งด่วน',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of fcthhcdetail
-- ----------------------------

-- ----------------------------
-- Table structure for fcthhctool
-- ----------------------------
DROP TABLE IF EXISTS `fcthhctool`;
CREATE TABLE `fcthhctool` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT 'อุปกรณ์',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fcthhctool
-- ----------------------------
INSERT INTO `fcthhctool` VALUES ('1', 'เตียงลม');
INSERT INTO `fcthhctool` VALUES ('2', 'ไม้ค้ำยัน');
INSERT INTO `fcthhctool` VALUES ('3', 'worker');
INSERT INTO `fcthhctool` VALUES ('4', 'O2');
INSERT INTO `fcthhctool` VALUES ('5', 'BP');
INSERT INTO `fcthhctool` VALUES ('6', 'อื่นๆ');

-- ----------------------------
-- Table structure for fcthome
-- ----------------------------
DROP TABLE IF EXISTS `fcthome`;
CREATE TABLE `fcthome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmbpart` varchar(2) DEFAULT NULL COMMENT 'รหัสตำบล',
  `name` varchar(100) DEFAULT NULL COMMENT 'หมู่บ้าน',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fcthome
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
INSERT INTO `fcthosin` VALUES ('1', 'โรงพยาบาลแม่เมาะ', '1');
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
  `pttype_price_group_id` int(11) DEFAULT NULL,
  `calc_discount` char(1) DEFAULT NULL,
  PRIMARY KEY (`pttype`),
  KEY `name` (`name`) USING BTREE,
  KEY `ix_ix_hipdata_code` (`hipdata_code`) USING BTREE,
  KEY `ix_pcode` (`pcode`) USING BTREE,
  KEY `ix_pttype_spp_id` (`pttype_spp_id`) USING BTREE,
  KEY `ix_pttype_guid` (`pttype_guid`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of pttype
-- ----------------------------
INSERT INTO `pttype` VALUES ('06', '06:ผู้พิการ (นอกเขต)', '', 'Y', 'AD', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '74', 'N', 'N', null, null, '1', null, null, '{9EA4C1C9-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '74', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('07', '07:นักเรียน ม.ต้น (นอกเขต)', '', 'Y', 'AC', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '73', 'N', 'N', null, null, '1', null, null, '{9EA4C773-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '01', null, null, null, null, null, null, null, null, 'Y', '73', '6', '4', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('08', '08:ภิกษุ สามเณร(นอกเขต)', '', 'Y', 'AF', 'Y', 'Y', '3000047', null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '76', 'N', 'N', null, null, '1', null, null, '{9EA4CAF1-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '76', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('10', '10:ชำระเงิน(จ่ายสด)', '', 'Y', 'A1', 'N', 'Y', null, '0', 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'UCS', null, null, 'N', '0', '10', 'N', 'N', null, null, '5', null, null, '{9EA4CEC5-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '06', '6', '6', null, null, '1', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('12', '12: ตรวจสุภาพแรงงานต่างด้าว', '', 'Y', 'A1', 'Y', 'N', null, null, 'N', '03', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '07', 'N', 'N', null, null, '1', null, null, '{9EA4D1DD-720A-11E6-BDDF-6CAE8B23183A}', null, 'N', null, null, null, null, null, null, null, null, null, null, null, 'Y', '07', '6', '5', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('20', '20 : เบิกได้(จ่ายเงินสด)', '', 'Y', 'A2', 'Y', 'Y', null, '0', 'N', '01', null, null, 'N', null, null, '0', 'Y', 'Y', 'OFC', null, null, 'N', '0', '02', 'N', 'N', null, null, '1', null, null, '{9EA4D4E6-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('21', '21:ลูกหนี้ค่าตรวจสุขภาพหน่วยงานภาครัฐ', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', 'Y', 'OFC', null, null, 'N', '0', '02', 'N', 'N', null, null, '1', null, null, '{9EA4D7EF-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('40', '40:ผู้มีสิทธิลดหย่อนตามระเบียบ สธ', '', 'N', 'AI', 'Y', 'N', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '40', 'N', 'N', null, null, '1', null, null, '{9EA4DAD1-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '4', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('45', '45:ผู้ป่วยในโครงการพระบรมราชานุเคราะห์', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '45', 'N', 'N', null, null, '1', null, null, '{9EA4DDA2-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('50', '50:ผู้ป่วยใช้ พ.ร.บ.', '', 'Y', 'A9', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'UCS', null, null, 'N', '0', '50', 'N', 'N', null, null, '2', null, null, '{9EA4E0ED-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'N', '06', '6', '6', null, null, '7', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('60', '60:อาสาสมัครมาเลเรีย', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '60', 'N', 'N', null, null, '1', null, null, '{9EA4E3DC-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '60', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('61', '61:ครอบครัวอาสาสมัครมาเลเรีย', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '61', 'N', 'N', null, null, '1', null, null, '{9EA4E699-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '61', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('62', '62:ช่างสุขภัณฑ์หมู่บ้าน', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '62', 'N', 'N', null, null, '1', null, null, '{9EA4E955-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('63', '63:ครอบครัวของช่างสุขภัณฑ์หมู่บ้าน', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '78', 'N', 'N', null, null, '1', null, null, '{9EA4EC2C-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('64', '64:ผู้บริหารและครูของโรงเรียนเอกชนที่สอนศาสนาอิสลาม', '', 'N', 'A7', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{9EA4EEED-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '16', '6', '2', null, null, '4', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('65', '65:ครอบครัวผู้บริหารร.ร.และครูสอนศาสนาอิสลาม', '', 'N', 'A7', 'Y', 'N', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, '{9EA4F1C7-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '16', '6', '2', null, null, '4', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('66', '66:ผู้ได้รับพระราชทานเหรียญชายแดน', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '66', 'N', 'N', null, null, '2', null, null, '{9EA4F50D-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '66', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('67', '67:ผู้ได้รับพระราชทานเหรียญเสรีชน', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '67', 'N', 'N', null, null, '2', null, null, '{9EA4F7DB-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '67', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('68', '68:ผู้บริจาคโลหิตครบ 18ครั้ง', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '68', 'N', 'N', null, null, '3', null, null, '{9EA4FA9E-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '68', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('71', '71:เด็ก 0-12ปี (ในเขต)', '', 'Y', 'AA', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '71', 'N', 'N', null, null, '1', null, null, '{9EA4FD56-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '71', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('72', '72:ผู้ป่วยรายได้น้อย(ในเขต)', '', 'Y', 'AB', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '72', 'N', 'N', null, null, '1', null, null, '{9EA5001B-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '72', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('73', '73:นักเรียน ม.ต้น (ในเขต)', '', 'Y', 'AC', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '73', 'N', 'N', null, null, '1', null, null, '{9EA502E5-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '73', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('74', '74:ผู้พิการ (ในเขต)', '', 'Y', 'AD', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '74', 'N', 'N', null, null, '1', null, null, '{9EA505A7-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '74', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('75', '75:ทหารผ่านศึก', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '75', 'N', 'N', null, null, '1', null, null, '{9EA50867-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '98', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('76', '76:ภิกษุ สามเณร(ในเขต)', '', 'Y', 'AF', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '76', 'N', 'N', null, null, '1', null, null, '{9EA50B17-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '76', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('77', '77:ผู้สูงอายุ(ในเขต) 60 ปีขึ้นไป', '', 'Y', 'AG', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', null, '77', 'N', 'N', null, null, '1', null, null, '{9EA50DD3-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '77', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('78', '78:ผู้สูงอายุ(นอกเขต) 60 ปีขึ้นไป', '', 'Y', 'AG', 'Y', 'Y', null, '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '78', 'N', 'N', null, null, '1', null, null, '{9EA51095-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '01', null, null, null, null, null, null, null, null, 'Y', '77', '6', '4', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('79', '79:เด็ก 0-12ปี (นอกเขต)', '', 'Y', 'AA', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '71', 'N', 'N', null, null, '1', null, null, '{9EA51361-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '71', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('80', '80:ครอบครัวทหารผ่านศึก', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '80', 'N', 'N', null, null, '1', null, null, '{9EA51621-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '98', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('81', '81:ผู้นำชุมชน', '', 'Y', 'AK', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '81', 'N', 'N', null, null, '1', null, null, '{9EA518DF-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '81', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('82', '82: อสม.(ในเขต)', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '82', 'N', 'N', null, null, '1', null, null, '{9EA51C0E-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('83', '83:ผู้นำศาสนาอิสลามที่มีการรับรอง', '', 'N', 'AF', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, '{9EA51EDC-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '83', '6', '4', null, null, '3', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('84', '84:ครอบครัวผู้นำศาสนาอิสลาม', '', 'N', 'AF', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, '{9EA5219B-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '83', '6', '4', null, null, '3', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('85', '85:ผู้ได้รับพระราชทานเหรียญงานสงครามยุโรป', '', 'N', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '85', 'N', 'N', null, null, '2', null, null, '{9EA5244C-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '98', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('86', '86:ครอบครัวเหรียญสงครามยุโรป', '', 'N', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '86', 'N', 'N', null, null, '2', null, null, '{9EA52706-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '98', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('87', '87:บุคคลในครอบครัวผู้นำชุมชน', '', 'Y', 'AK', 'Y', 'Y', '', '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '87', 'N', 'N', null, null, '1', null, null, '{9EA529D1-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '87', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('88', '88:บุคคลในครอบครัวอสม.', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '88', 'N', 'N', null, null, '1', null, null, '{9EA52CAC-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('89', '89:บัตรทอง(ในเขต) 12-59 ปี', '', 'Y', 'UC', 'Y', 'Y', '3000225', '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '89', 'N', 'N', null, null, '1', null, null, '{9EA52F7C-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, '03', null, null, null, null, null, null, null, null, 'N', '89', '6', '3', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('90', '90:ทหารเกณฑ์', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '90', 'N', 'N', null, null, '1', null, null, '{9EA53253-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '90', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('91', '91:ผู้ที่อยู่ภายใต้การดูแลของกรมราชทัณฑ์', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '91', 'N', 'N', null, null, '1', null, null, '{9EA5351A-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '91', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('92', '92:ผู้ที่อยู่ในสถานพินิจ/สงเคราะห์', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '91', 'N', 'N', null, null, '1', null, null, '{9EA537D7-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '91', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('93', '93:นักเรียนทหาร', '', 'Y', 'AC', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '93', 'N', 'N', null, null, '1', null, null, '{9EA53A9B-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '93', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('94', '94:ต่างด้าวขึ้นทะเบียน 30 บาท', '', 'Y', 'AL', 'Y', 'Y', '3004569', '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'UCS', '0', '0', 'N', '0', '94', 'N', 'N', null, null, '1', null, null, '{9EA53D60-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, 'Y', null, null, null, null, null, 'Y', '07', '6', '5', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('95', '95:บัตรทอง(นอกเขต) 12-59 ปี', '', 'Y', 'UC', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '89', 'N', 'N', null, null, '1', null, null, '{9EA54040-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '3', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('96', '96:ผู้ป่วยรายได้น้อย(นอกเขต)', '', 'Y', 'AB', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '72', 'N', 'N', null, null, '1', null, null, '{9EA54381-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '72', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('97', '97:อสม.(นอกเขต)', '', 'Y', 'AJ', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '82', 'N', 'N', null, null, '1', null, null, '{9EA54656-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('98', '98:เด็กแรกเกิด', '', 'Y', 'AA', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '71', 'N', 'N', null, null, '1', null, null, '{9EA5491F-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '71', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('99', '99:สิทธิว่าง', '', 'Y', 'AI', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '89', 'N', 'N', null, null, '1', null, null, '{9EA54BDC-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '3', null, null, '3', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B1', 'B1:จ่ายตรง กทม.(ข้าราชการ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B1', 'N', 'N', null, null, '4', null, null, '{9EA54E97-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B2', 'B2:จ่ายตรง กทม.(ลูกจ้างประจำ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B2', 'N', 'N', null, null, '4', null, null, '{9EA55162-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B3', 'B3:จ่ายตรง กทม.(ผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B3', 'N', 'N', null, null, '4', null, null, '{9EA5542E-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B4', 'B4:จ่ายตรง กทม.(บุคคลในครอบครัว)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B4', 'N', 'N', null, null, '4', null, null, '{9EA556EB-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B5', 'B5:จ่ายตรง กทม.(บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B5', 'N', 'N', null, null, '4', null, null, '{9EA559AB-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L1', 'L1:จ่ายตรง-อปท.(ข้าราชการ/พนักงาน/ลูกจ้างประจำ/ครูผู้ดูแลเด็ก/ครูผู้ช่วย)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'L1', 'N', 'N', null, null, '4', null, null, '{9EA55C6A-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L2', 'L2:จ่ายตรง-อปท.(บุคคลในครอบครัว)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'L2', 'N', 'N', null, null, '4', null, null, '{9EA55F37-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L3', 'L3:จ่ายตรง-อปท.(ผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'L3', 'N', 'N', null, null, '4', null, null, '{9EA561F6-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L4', 'L4:จ่ายตรง-อปท.(บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'LGO', null, null, 'N', '0', 'L4', 'N', 'N', null, null, '4', null, null, '{9EA564B9-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L5', 'L5:จ่ายตรง-อปท.(ข้าราชการการเมือง)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'L5', 'N', 'N', null, null, '4', null, null, '{9EA56781-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L6', 'L6:จ่ายตรง-อปท.(บุคคลในครอบครัวข้าราชการการเมือง)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'LGO', null, null, 'N', '0', 'L6', 'N', 'N', null, null, '4', null, null, '{9EA56BB6-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O1', 'O1:จ่ายตรง-สกส.(ข้าราชการ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'OFC', null, null, 'N', '0', 'O1', 'N', 'N', null, null, '4', null, null, '{9EA56FEC-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O2', 'O2:จ่ายตรง-สกส.(ลูกจ้างประจำ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'OFC', null, null, 'N', '0', 'O2', 'N', 'N', null, null, '4', null, null, '{9EA572C5-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O3', 'O3:จ่ายตรง-สกส.(ผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'OFC', null, null, 'N', '0', 'O2', 'N', 'N', null, null, '4', null, null, '{9EA57592-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O4', 'O4:จ่ายตรง-สกส.(บุคคลในครอบครัว)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'OFC', null, null, 'N', '0', 'O4', 'N', 'N', null, null, '4', null, null, '{9EA5785D-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O5', 'O5:จ่ายตรง-สกส.(บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'OFC', null, null, 'N', '0', 'O5', 'N', 'N', null, null, '4', null, null, '{9EA57B27-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('S1', 'S1:ปกส. ในเขต(ผู้ประกันตน)', '', 'Y', 'A7', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'SSS', null, null, 'N', '0', 'S1', 'N', 'N', null, null, '4', null, null, '{9EA57DF7-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', 'Y', null, '4', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('S4', 'S4:ประกันสังคมทุพลภาพ', '', 'Y', 'A7', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'SSS', null, null, 'N', null, 'S4', 'N', 'N', null, null, '4', null, null, '{9EA580BE-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('S5', 'S5:ประกันสังคมกองทุนทดแทน', '', 'Y', 'A7', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'SSS', null, null, 'N', null, 'S5', 'N', 'N', null, null, '1', null, null, '{9EA583A1-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('S6', 'S6:ประกันสังคม 72 ชั่วโมง', '', 'Y', 'A7', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'SSS', null, null, 'N', null, 'S6', 'N', 'N', null, null, '1', null, null, '{9EA5867B-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('SS', 'SS:ประกันสังคม(นอกเขต)', '', 'Y', 'A7', 'Y', 'Y', null, '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'SSS', '0', '0', 'N', '0', 'SS', 'N', 'N', null, null, '1', null, null, '{9EA5895C-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', 'Y', null, '4', null, 'Y', 'Y', null, null, null, null, null, null, null, null);
INSERT INTO `pttype` VALUES ('ST', 'ST:บุคคลที่มีปัญหาสถานะสิทธิ', '', 'Y', 'UC', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', 'ST', 'N', 'N', null, null, '4', null, null, '{9EA58C5A-720A-11E6-BDDF-6CAE8B23183A}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '06', '6', '2', 'N', null, '4', null, 'Y', 'Y', null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for pttype1
-- ----------------------------
DROP TABLE IF EXISTS `pttype1`;
CREATE TABLE `pttype1` (
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
  KEY `name` (`name`) USING BTREE,
  KEY `ix_ix_hipdata_code` (`hipdata_code`) USING BTREE,
  KEY `ix_pcode` (`pcode`) USING BTREE,
  KEY `ix_pttype_spp_id` (`pttype_spp_id`) USING BTREE,
  KEY `ix_pttype_guid` (`pttype_guid`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of pttype1
-- ----------------------------
INSERT INTO `pttype1` VALUES ('10', 'ชำระเงินครบ', '!00000000;1;#:!0000000000;1;#', 'Y', 'A1', 'N', 'Y', '', '0', 'N', '03', 'N', null, 'N', null, '', '0', 'N', 'N', null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{F59B0EDE-0454-4D26-A0EA-B3EC6CBC38AB}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '06', '6', '6', 'N', null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('12', 'ต่างด้าวเรียกเก็บ', '', 'N', 'ST', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, null, null, null, '{E992D354-4F2D-4A57-BB37-19579E5F642C}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '07', '6', '5', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('13', 'ต่างด้าวขึ้นทะเบียน', '', 'Y', 'A1', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{E185DFDE-68E0-423F-9F36-318AA9B8F0E2}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '07', '6', '5', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('14', 'ประกันสังคมกับรพ.อื่น', '', 'Y', 'A7', 'Y', 'Y', null, '0', 'N', '01', null, null, 'N', null, null, '2', 'N', null, 'SSS', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{BEC19B9B-6ED0-4568-BEEE-3BD45AD51229}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('15', 'สถานะคนไทยในต่างประเทศ', '', 'Y', 'A1', 'N', 'Y', null, null, 'N', '03', null, null, 'N', null, null, '0', 'N', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '06', '6', '6', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('18', 'จ่ายตรง อปท.', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', 'Y', 'LGO', null, null, 'N', '0', 'L1', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('19', 'เบิกได้ อปท.', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('20', 'ใช้สิทธิเบิกข้าราชการ', '!00000000;1;#:!0000000000;1;#', 'Y', 'A2', 'Y', 'Y', null, '0', 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{8081CF2E-C0F6-4581-BE88-D01B95110B91}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('21', 'จ่ายตรงข้าราชการ', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', 'Y', 'OFC', null, null, 'N', '0', 'O1', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('22', 'รัฐวิสาหกิจ', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '2', 'N', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '6', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('23', 'ต่างด้าวไม่ขึ้นทะเบียน', '', 'Y', 'A1', 'N', 'Y', null, '0', 'N', '03', null, null, 'N', null, null, '2', 'N', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{EA8632E8-F1C5-483A-B50B-931FBECA79CB}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '07', '6', '6', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('30', 'บัตรประกันสุขภาพ ทั่วไป', '!00-1-0000000-0;1;#:!00-1-00000-0;1;#:!00000-1-0000-00000;1;#', 'N', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{390D9E12-A652-4768-9AA6-8176073ABAB4}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', '3', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('33', 'นักเรียนมัธยม (13-15 ปี)', '!00000000;1;#:!00000000;1;#', 'Y', 'AC', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{BC37D382-E6F5-4B0D-84F1-A18E148D9257}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '73', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('34', 'บัตรประกันสังคม', '!00-0000000-0;1;#:!0-0000-00000-00-0;1;#', 'Y', 'A7', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '2', 'Y', null, 'SSS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{3D833FDA-BB62-4755-9A31-F55CD21AA4C3}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('35', 'กองทุนทดแทน', '', 'Y', 'A8', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '1', 'Y', null, null, null, null, 'Y', null, null, 'N', 'N', null, null, '1', null, null, '{C53F2E6C-0AD9-44BB-A07C-57B845A1F844}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '6', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('36', 'พรบ.', '', 'Y', 'A9', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '2', 'Y', null, null, null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{757C8170-9714-43C4-9C6E-AC4BD4CB860F}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '6', null, null, '7', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('37', 'ครูเอกชน', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '08', '6', '1', 'Y', null, '5', null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('41', 'ทหารผ่านศึก', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{F3661219-DE24-4993-9E52-677CD1DF67BB}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '75', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('42', 'พระภิกษุ สามเณร', '!00000000;1;#:!00000000;1;#', 'Y', 'AF', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{22BB071D-AC4A-4EB2-8741-F1328E668D05}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '76', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('43', 'บัตรประกันสุขภาพ อสม.', '!00-3-0000000-0;1;#:!00-3-00000-0;1;#:!00000-3-0000-00000;1;#', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{2702BFE0-CF98-40FB-9F93-7800CD6D2925}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', 'N', null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('44', 'บัตรประกันสุขภาพ ผู้นำ', '!00-2-0000000-0;1;#:!00-2-00000-0;1;#:!00000-2-0000-00000;1;#', 'Y', 'AK', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{FE44B424-CBB2-4685-B43E-6325608C7FA3}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '81', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('45', 'สิทธิประเภท ก. อื่นๆ', '!00000000;1;#:!00000000;1;#:!ก.00000;1;#', 'N', 'A3', 'Y', 'Y', null, '0', null, '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '{6FD3FF88-905E-42C6-9518-9F8FE7A8FE17}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('46', 'สิทธิประเภท ข. อื่นๆ', '!00000000;1;#:!00000000;1;#', 'N', 'A4', 'Y', 'Y', null, '0', null, '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '{BE7D96F4-EA53-44A5-9A43-3BCAC141721D}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('47', 'สิทธิประเภท ค. อื่นๆ', '!00000000;1;#:!00000000;1;#', 'N', 'A5', 'Y', 'Y', null, '0', null, '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '{4AF46535-FA14-4165-B36B-3F790FA95035}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('48', 'สิทธิประเภท ง. อื่นๆ', '!00000000;1;#:!00000000;1;#', 'N', 'A6', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{9B257F25-29AD-416A-B548-0D04FCB03A08}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('50', 'ผู้มีรายได้น้อย', '!00000000;1;#:!ก.0000000;1;#:!ข.0000000;1;#', 'Y', 'AB', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{EF90C77B-1CC8-4C56-BE78-41C0F30EFDAE}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '72', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('51', 'ครอบครัวผู้นำชุมชน', '!00000000;1;#:!00000000;1;#', 'Y', 'AK', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{DB866046-D3AD-41B2-BCA2-D999DEB214D3}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '81', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('52', 'ไม่มีบัตร สปน.', '', 'N', 'A3', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{52A000B2-C926-45A7-9366-5E601F8045A4}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('61', 'ผู้สูงอายุ', '!00000000;1;#:!ข.0000000;1;#', 'Y', 'AG', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'Y', 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{7D889D75-B71F-4B91-96C6-C86BAC7A52AB}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '77', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('62', 'เด็ก 0-12 ปี', '!00000000;1;#:!ข.0000000;1;#', 'Y', 'AA', 'Y', 'Y', '', '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'UCS', '0', '5', 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{74436271-BB70-4AB6-8E46-11016DD3C467}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '71', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('63', 'นักเรียนประถม (6-12 ปี)', '!00000000;1;#:!ข.0000000;1;#:!ก.0000000;1;#', 'N', 'AA', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, '{9219D15A-9B7B-42F6-A827-DF2D18D152D5}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '73', '6', '4', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('64', 'ผู้พิการ', '!00000000;1;#:!0-0000-00000-00-0;1;#:!00000000;1;#', 'Y', 'AD', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{72C58800-C9D1-449B-96F8-01CA5F54ECB1}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '74', '6', '4', null, null, null, null, 'Y', 'N', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('65', 'สิทธิ์ว่าง', '', 'Y', 'ST', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '6', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('66', 'สิทธิ์อนุเคราะห์', '', 'Y', 'AB', 'N', 'N', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '66', '6', '6', null, null, null, null, null, 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('67', 'อปท. ตนเอง', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L1', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('68', 'อปท. บุคคลในครอบครัว', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L2', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, null, null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('69', 'อปท. บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L4', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('70', 'อปท. ผู้รับเบี้ยหวัดบำนาญ', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L3', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('71', 'อปท. ลูกจ้างประจำ', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L5', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('72', 'อปท. สิทธิประจำตำแหน่งและบุคคลในครอบครัว', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'N', null, 'LGO', null, null, 'N', '0', 'L6', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '5', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('77', 'โครงการพิเศษ', '', 'N', 'A3', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{AF542B44-BE0C-4EC3-8FBE-94E5F24FA125}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '77', '6', '6', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('81', 'ขรก. (ตนเอง)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O1', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('82', 'ขรก.(บุคคลในครอบครัว)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O4', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('83', 'ขรก.(บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O5', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, null, null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('84', 'ขรก.(ผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O3', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('85', 'ขรก.(ลูกจ้างประจำ)', '', 'Y', 'A2', 'N', 'Y', null, null, 'N', '01', null, null, 'N', null, null, '0', 'N', null, 'OFC', null, null, 'N', '0', 'O2', 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('88', 'ครอบครัว อสม.', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('89', 'บุคคลมีปัญหาสถานะภาพสิทธิ', '', 'Y', 'ST', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '99', '6', '6', null, null, null, null, 'N', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('90', 'บัตรประกันสุขภาพ (30 บาท)', '!00000000;1;#:!0000000000;1;#', 'Y', 'UC', 'Y', 'Y', '', '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{5F118FED-1D35-4E5E-8C8F-EB1FF7704DA0}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '3', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('91', 'UC นอกเขตในจังหวัด', '', 'N', 'UA', 'N', 'Y', '', '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{ABFDD563-1D74-4E78-9868-715CCC17129A}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('92', 'UC รอยต่อนอกเขต', '', 'Y', 'UC', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{91EE1F52-5D9F-41FF-B514-4F264CFA7E57}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '3', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('93', 'UC นอกเขต(ฉุกเฉิน)ต่างจังหวัด', '', 'N', 'UA', 'N', 'N', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{7B262552-05A2-4CA1-934E-3A20748946CB}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('94', 'UC ท นอกเขต(ฉุกเฉิน)ต่างจังหวัด', '', 'N', 'UA', 'N', 'N', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{C2830EB4-9F0B-4573-899A-357FBB776F7C}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('95', 'UC ท นอกเขตในจังหวัด', '!ท00000000;1;#:!ท0000000000;1;#', 'N', 'UB', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{6F9D1A83-175F-4FE9-99C6-93C9BCCB722E}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', '4', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('96', 'UC ท รอยต่อนอกเขต', '!ท00000000;1;#:!ท0000000000;1;#', 'Y', 'UB', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '5', null, null, '{506BCC5C-A060-4136-8DDC-B841FBF5CB74}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '4', null, null, null, null, 'Y', 'Y', null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('97', 'บัตรประกันสุขภาพ (ยกเว้นค่าธรรมเนียม)', '!ท00000000;1;#:!ท0000000000;1;#', 'N', 'UB', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{1AAFF86E-33F3-442B-953F-4D622667964D}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '89', '6', '3', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('98', 'UC นอกเขต(ฉุกเฉิน)ในจังหวัด', '!00000000;1;#:!0000000000;1;#', 'N', 'UA', 'N', 'Y', '', '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{B4357145-1C54-4E23-B04C-C6EE1A4FCE24}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '98', '6', '3', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `pttype1` VALUES ('99', 'UC ท นอกเขต(ฉุกเฉิน)ในจังหวัด', '!ท00000000;1;#:!ท0000000000;1;#', 'N', 'UB', 'N', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, null, null, null, 'N', null, null, 'N', 'N', null, null, null, null, null, '{CC6DF9FE-C691-4EA6-AC25-6D83128BFC7A}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '78', '6', '4', null, null, null, null, null, null, null, null, null, null, null, null);

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
INSERT INTO `user` VALUES ('1', 'admin', 'admin@localhost.com', '$2y$12$dPJB3nYzwapkDWV/M/j8NOIL54PWhA6L3ZB.D./V4tyEp5YVHcRUe', 'gscRoe1lTkPJmxrcuvWccAP3SpBSgx9y', null, null, null, null, null, null, null, null, null, null, '1477563186', '1477563186', '::1', '2', 'ผู้ดูแลระบบ', 'risk.png', '', '');
INSERT INTO `user` VALUES ('2', 'user', 'user@localhost.com', '$2y$12$OdbHVyUxftQ4sWbU2/b5vecd14EQiDOQtGLY0mlbIoYNg5N7g9wIm', 'sZXdlEkovbpGRuTUai-48qtKRg0wG_xD', null, null, null, null, null, null, null, null, null, null, '1477564929', '1477564929', '::1', '3', null, null, null, null);
INSERT INTO `user` VALUES ('3', 'viewer', 'viewer@localhost.com', '$2y$12$JzwBl6l5vOHx7AR1Cuz/E.LQekOFxuH/PTdOKDOePtrQp84h4doBa', 'VRGs5thRauimpQrCdDsjXUNZsW8CRaSB', null, null, null, null, null, null, null, null, null, null, '1477564995', '1477564995', '::1', '1', null, null, null, null);
