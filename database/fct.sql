/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : fct

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2016-11-24 11:05:10
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
-- Table structure for fct
-- ----------------------------
DROP TABLE IF EXISTS `fct`;
CREATE TABLE `fct` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fcttype_id` int(11) DEFAULT NULL COMMENT 'ประเภทผู้ป่วย',
  `pass` int(11) DEFAULT NULL,
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
  `confirm` smallint(2) DEFAULT '0',
  `confirmfct` smallint(2) DEFAULT NULL,
  `cid` varchar(13) DEFAULT NULL COMMENT 'CID',
  `send` smallint(2) DEFAULT '0' COMMENT 'ส่งเยี่ยม',
  `okcase` smallint(2) DEFAULT '0' COMMENT 'รับเคส',
  `birthday` date DEFAULT NULL COMMENT 'วันเกิด',
  `tmbpart` varchar(2) DEFAULT NULL COMMENT 'ตำบล',
  `sex` varchar(1) DEFAULT NULL COMMENT 'เพศ',
  `bloodgrp` varchar(30) DEFAULT NULL COMMENT 'กรุ๊ปเลือด',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=tis620;

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Table structure for fcthhc1
-- ----------------------------
DROP TABLE IF EXISTS `fcthhc1`;
CREATE TABLE `fcthhc1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fct_id` int(11) DEFAULT NULL,
  `fctdate` date DEFAULT NULL COMMENT 'วันที่ส่งเยี่ยม',
  `home` varchar(2) DEFAULT NULL,
  `homept` int(11) DEFAULT NULL COMMENT 'หมู่บ้าน',
  `t` varchar(5) DEFAULT NULL,
  `pr` varchar(5) DEFAULT NULL,
  `rr` varchar(5) DEFAULT NULL,
  `bp` varchar(7) DEFAULT NULL,
  `datenext` date DEFAULT NULL,
  `other` varchar(200) DEFAULT NULL,
  `other2` varchar(100) DEFAULT NULL,
  `datedc` date DEFAULT NULL,
  `notefct` varchar(200) DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=tis620;

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
-- Table structure for fctpass
-- ----------------------------
DROP TABLE IF EXISTS `fctpass`;
CREATE TABLE `fctpass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=tis620;

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
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT 'ชื่อกลุ่มงาน',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

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
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  KEY `name` (`name`) USING BTREE,
  KEY `ix_ix_hipdata_code` (`hipdata_code`) USING BTREE,
  KEY `ix_pcode` (`pcode`) USING BTREE,
  KEY `ix_pttype_spp_id` (`pttype_spp_id`) USING BTREE,
  KEY `ix_pttype_guid` (`pttype_guid`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

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
-- Table structure for tooltypes
-- ----------------------------
DROP TABLE IF EXISTS `tooltypes`;
CREATE TABLE `tooltypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) DEFAULT NULL COMMENT 'ประเภท',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

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
