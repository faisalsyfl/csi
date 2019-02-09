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

 Date: 09/02/2019 17:20:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for document
-- ----------------------------
DROP TABLE IF EXISTS `document`;
CREATE TABLE `document`  (
  `documentId` int(11) NOT NULL AUTO_INCREMENT,
  `documentEmployeeId` int(11) NOT NULL,
  `documentFileUpload` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `documentCountDownload` int(11) NULL DEFAULT NULL,
  `documentFilename` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `documentLastUpdate` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`documentId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
