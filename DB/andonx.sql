/*
 Navicat Premium Data Transfer

 Source Server         : mysql local
 Source Server Type    : MySQL
 Source Server Version : 100416
 Source Host           : localhost:3306
 Source Schema         : andonx

 Target Server Type    : MySQL
 Target Server Version : 100416
 File Encoding         : 65001

 Date: 11/12/2020 09:42:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for targets
-- ----------------------------
DROP TABLE IF EXISTS `targets`;
CREATE TABLE `targets`  (
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `target` int UNSIGNED NOT NULL DEFAULT 0,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of targets
-- ----------------------------
INSERT INTO `targets` VALUES ('i', 8, '2020-12-07 21:27:01', NULL);
INSERT INTO `targets` VALUES ('h', 4, '2020-12-07 21:07:24', NULL);
INSERT INTO `targets` VALUES ('aa', 2, '2020-12-04 08:43:34', NULL);
INSERT INTO `targets` VALUES ('z', 1, '2020-12-04 08:43:32', NULL);

SET FOREIGN_KEY_CHECKS = 1;
