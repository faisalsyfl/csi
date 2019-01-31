/*
 Navicat Premium Data Transfer

 Source Server         : local-db
 Source Server Type    : MySQL
 Source Server Version : 100110
 Source Host           : localhost:3306
 Source Schema         : csi

 Target Server Type    : MySQL
 Target Server Version : 100110
 File Encoding         : 65001

 Date: 31/01/2019 20:25:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for consument
-- ----------------------------
DROP TABLE IF EXISTS `consument`;
CREATE TABLE `consument`  (
  `consumentId` int(11) NOT NULL AUTO_INCREMENT,
  `consumentUserId` int(11) NOT NULL,
  `consumentName` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `consumentAddress` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `consumentRegional` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `consumentPhone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `consumentEmail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `consumentFax` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `consumentWebsite` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `consumentStatus` int(11) NULL DEFAULT NULL,
  `consumentCreatedAt` timestamp(0) NULL DEFAULT NULL,
  `consumentUpdateAt` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`consumentId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee`  (
  `employeeId` int(11) NOT NULL AUTO_INCREMENT,
  `employeeUsername` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `employeePassword` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `employeeEmail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `employeeNIP` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `employeePhone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `employeeCustomer` tinyblob NULL,
  `employeePermissions` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `employeeActivated` time(0) NULL DEFAULT NULL,
  `employeeActive` tinyblob NULL,
  `employeeActivationCode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `employeeActivatedAt` timestamp(0) NULL DEFAULT NULL,
  `employeeLastLogin` timestamp(0) NULL DEFAULT NULL,
  `employeePersistCode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `employeeResetPassword` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `employeeFirstName` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `employeeLastName` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `employeCreatedAt` timestamp(0) NULL DEFAULT NULL,
  `employeeUpdateAt` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`employeeId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
