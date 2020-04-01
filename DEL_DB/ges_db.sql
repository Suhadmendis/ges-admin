/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100131
 Source Host           : localhost:3306
 Source Schema         : quotro

 Target Server Type    : MySQL
 Target Server Version : 100131
 File Encoding         : 65001

 Date: 02/04/2020 00:22:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for m_allo
-- ----------------------------
DROP TABLE IF EXISTS `m_allo`;
CREATE TABLE `m_allo`  (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `REF_REG` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `REF_SESS` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `remark` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `reject` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `accept` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `process_time` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `sys_time` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_allo
-- ----------------------------
INSERT INTO `m_allo` VALUES (43, 'SE/0000014', 'SE/0000002', '', '0', '0', '2020-04-01 22:52:07', '2020-04-01 22:52:07', NULL);
INSERT INTO `m_allo` VALUES (44, 'SE/0000014', 'SE/0000004', '', '0', '0', '2020-04-01 22:52:07', '2020-04-01 22:52:07', NULL);
INSERT INTO `m_allo` VALUES (45, 'SE/0000014', 'SE/0000007', '', '0', '0', '2020-04-01 22:52:07', '2020-04-01 22:52:07', NULL);

-- ----------------------------
-- Table structure for m_payment
-- ----------------------------
DROP TABLE IF EXISTS `m_payment`;
CREATE TABLE `m_payment`  (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `REF` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `player_ref` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `player_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mdate` date NULL DEFAULT NULL,
  `amount` decimal(12, 2) NULL DEFAULT NULL,
  `cancel` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sys_time` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_payment
-- ----------------------------
INSERT INTO `m_payment` VALUES (8, 'PAY/0000002', 'fsdfsdf', 'fdsf', '2020-03-22', 123123.00, NULL, NULL, '2020-03-22 17:02:08');
INSERT INTO `m_payment` VALUES (9, 'PAY/0000003', 'fsdfsdf', 'fsdfsdf', '2020-03-22', 123123.00, '0', NULL, '2020-03-22 17:02:26');
INSERT INTO `m_payment` VALUES (10, 'PAY/0000004', 'dasda', 'dfsd', '2020-03-25', 4234234.00, '0', NULL, '2020-03-25 23:23:51');

-- ----------------------------
-- Table structure for m_registration
-- ----------------------------
DROP TABLE IF EXISTS `m_registration`;
CREATE TABLE `m_registration`  (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `REF` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `guardian_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `guardian_tel` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address_1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address_2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tel_1` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tel_2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sex` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dob` date NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `remark` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `joineddate` date NULL DEFAULT NULL,
  `active` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `black_list` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `status` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `approve` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `platform` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sys_time` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_registration
-- ----------------------------
INSERT INTO `m_registration` VALUES (1, 'REG/0000001', '', '', '', '', '98, hfdu, hf9sd', '', '', '', '', '0000-00-00', '', '', '2020-03-19', '1', '0', NULL, NULL, NULL, NULL, '2020-03-20 02:47:22');
INSERT INTO `m_registration` VALUES (8, 'REG/0000002', 'fdsf', 'fs', 'fg', '', '98, hfdu, hf9sd', '', '332', '', '', '0000-00-00', 'gsfg', '', '0000-00-00', '1', '0', '0', '0', NULL, NULL, '2020-03-22 12:59:33');
INSERT INTO `m_registration` VALUES (9, 'REG/0000003', 'fsdfs', 'dfdsf', 'sdfsd', '', '98, hfdu, hf9sd', '', '5435', '', '', '0000-00-00', 'sdf', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:05:39');
INSERT INTO `m_registration` VALUES (10, 'REG/0000004', 'fsdfs', 'dfdsf', 'sdfsd', '', '98, hfdu, hf9sd', '', '5435', '', '', '0000-00-00', 'sdf', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:05:46');
INSERT INTO `m_registration` VALUES (11, 'REG/0000005', '', '', '', '', '98, hfdu, hf9sd', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:07:59');
INSERT INTO `m_registration` VALUES (14, 'REG/0000006', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:12:59');
INSERT INTO `m_registration` VALUES (15, 'REG/0000007', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:14:04');
INSERT INTO `m_registration` VALUES (16, 'REG/0000008', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:14:42');
INSERT INTO `m_registration` VALUES (17, 'REG/0000009', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:15:15');
INSERT INTO `m_registration` VALUES (18, 'REG/0000010', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:15:59');
INSERT INTO `m_registration` VALUES (19, 'REG/0000011', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:16:14');
INSERT INTO `m_registration` VALUES (20, 'REG/0000012', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:16:28');
INSERT INTO `m_registration` VALUES (21, 'REG/0000013', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:17:48');
INSERT INTO `m_registration` VALUES (22, 'REG/0000014', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:18:31');
INSERT INTO `m_registration` VALUES (23, 'REG/0000015', 'fsdfsd', 'fsdf', 'fsdf', '', '98, hfdu, hf9sd', '', '343245435', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-22 13:19:06');
INSERT INTO `m_registration` VALUES (29, 'REG/0000016', 'Suhad', 'Mendis', 'Suhad Akila Mendis', '', '98, hfdu, hf9sd', '', '0778182596', '', '', '0000-00-00', 'suhad.a.mendis@gmail.com', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-25 20:52:19');
INSERT INTO `m_registration` VALUES (30, 'REG/0000017', 'Suhad', 'Mendis', 'Suhad Akila Mendis', '', '98, hfdu, hf9sd', '', '0778182596', '', '', '0000-00-00', 'suhad.a.mendis@gmail.com', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-25 22:09:02');
INSERT INTO `m_registration` VALUES (31, 'REG/0000018', 'fsdfsd', 'fsdf', 'sdfsd', '', '98, hfdu, hf9sd', '', '5345', '', '', '0000-00-00', 'sdf', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-25 22:12:00');
INSERT INTO `m_registration` VALUES (32, 'REG/0000019', 'fsdfs', 'dfsd', '6ry', '', '98, hfdu, hf9sd', '', '4334', '', '', '0000-00-00', 'fsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-25 22:12:14');
INSERT INTO `m_registration` VALUES (33, 'REG/0000020', 'fsdfs', 'dfsd', '6ry', '', '98, hfdu, hf9sd', '', '4334', '', '', '0000-00-00', 'fsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-25 22:12:19');
INSERT INTO `m_registration` VALUES (34, 'REG/0000021', 'fsdfsd', 'fsdf', 'fsdfs', '', '98, hfdu, hf9sd', '', '', '', '', '0000-00-00', 'sdfsd', '', '0000-00-00', '1', '0', '0', '0', 'WEB', NULL, '2020-03-25 22:24:46');

-- ----------------------------
-- Table structure for m_session
-- ----------------------------
DROP TABLE IF EXISTS `m_session`;
CREATE TABLE `m_session`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `REF` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `session_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `session_des` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mdate` date NULL DEFAULT NULL,
  `from_time` time(0) NULL DEFAULT NULL,
  `to_time` time(0) NULL DEFAULT NULL,
  `location` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `slots` int(4) NULL DEFAULT NULL,
  `full` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` int(1) NULL DEFAULT 0,
  `cancel` int(1) NULL DEFAULT 0,
  `approve` int(1) NULL DEFAULT 0,
  `user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sys_time` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_session
-- ----------------------------
INSERT INTO `m_session` VALUES (1, 'SE/0000001', 'Dynamic Warm Up', 'This is probably the #1 thing missing from most youth practices. It helps prevent injury, improves performance, and improve athletic ability. What good is a basketball player who is injured or is not athletic enough to utilize the basketball skills developed? The better the player moves, the better the player performs. Why not spend time on it?', '2020-03-17', '03:00:04', '17:00:05', 'SSC', 6, NULL, NULL, NULL, NULL, '', NULL);
INSERT INTO `m_session` VALUES (2, 'SE/0000002', 'Teaching Skills', 'The #1 reason kids quit sports is because it\'s not fun anymore. Youth coaches primary focus should be to teach skills and make it an enjoyable experience! This isn\'t high school, college, or even PRO basketball, so don\'t treat your practices like it.', '2020-04-22', '00:00:00', '00:00:00', 'ABC', 22, NULL, NULL, NULL, NULL, '', NULL);
INSERT INTO `m_session` VALUES (3, 'SE/0000003', 'Drills & Games', 'This is probably the #1 thing missing from most youth practices. It helps prevent injury, improves performance, and improve athletic ability. What good is a basketball player who is injured or is not athletic enough to utilize the basketball skills developed? The better the player moves, the better the player performs. Why not spend time on it?', '2020-03-24', '00:00:56', '00:00:07', 'ADT', 16, NULL, 0, 0, 0, '', '2020-03-13 10:46:31');
INSERT INTO `m_session` VALUES (4, 'SE/0000004', 'End of Game Drill', 'The #1 reason kids quit sports is because it\'s not fun anymore. Youth coaches primary focus should be to teach skills and make it an enjoyable experience! This isn\'t high school, college, or even PRO basketball, so don\'t treat your practices like it.', '2020-03-31', '00:00:00', '00:00:00', 'AMT', 10, NULL, 0, 0, 0, '', '2020-03-13 11:31:39');
INSERT INTO `m_session` VALUES (5, 'SE/0000005', 'Light Stretching', 'This is probably the #1 thing missing from most youth practices. It helps prevent injury, improves performance, and improve athletic ability. What good is a basketball player who is injured or is not athletic enough to utilize the basketball skills developed? The better the player moves, the better the player performs. Why not spend time on it?', '2020-03-29', '02:15:00', '02:15:00', 'KRE', 42, NULL, 0, 0, 0, '', '2020-03-20 02:38:32');
INSERT INTO `m_session` VALUES (14, 'SE/0000007', 'Teaching Skills', 'The #1 reason kids quit sports is because it\'s not fun anymore. Youth coaches primary focus should be to teach skills and make it an enjoyable experience! This isn\'t high school, college, or even PRO basketball, so don\'t treat your practices like it.', '2020-03-31', '04:45:00', '04:45:00', 'AMT', 11, NULL, 0, 0, 0, '', '2020-03-22 17:08:45');
INSERT INTO `m_session` VALUES (15, 'SE/0000008', '', '', '0000-00-00', '06:45:00', '06:45:00', '', 0, NULL, 0, 0, 0, '', '2020-04-01 18:34:56');

-- ----------------------------
-- Table structure for sys_info
-- ----------------------------
DROP TABLE IF EXISTS `sys_info`;
CREATE TABLE `sys_info`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `COM_NAME` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COM_EMAIL` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COM_ADD1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COM_ADD2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COM_TEL1` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COM_TEL2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COM_FAX` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `session_ref` int(12) NULL DEFAULT NULL,
  `registration_ref` int(12) NULL DEFAULT NULL,
  `payment_ref` int(12) NULL DEFAULT NULL,
  `session_allo_ref` int(12) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sys_info
-- ----------------------------
INSERT INTO `sys_info` VALUES (1, 'Quotro', NULL, NULL, NULL, NULL, NULL, NULL, 9, 22, 5, 21);

-- ----------------------------
-- Table structure for user_mast
-- ----------------------------
DROP TABLE IF EXISTS `user_mast`;
CREATE TABLE `user_mast`  (
  `user_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_mast
-- ----------------------------
INSERT INTO `user_mast` VALUES ('admin', '123');

SET FOREIGN_KEY_CHECKS = 1;
