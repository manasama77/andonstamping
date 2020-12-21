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

 Date: 21/12/2020 16:58:06
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
INSERT INTO `targets` VALUES ('i', 0, NULL, NULL);
INSERT INTO `targets` VALUES ('h', 0, NULL, NULL);
INSERT INTO `targets` VALUES ('aa', 0, NULL, NULL);
INSERT INTO `targets` VALUES ('z', 0, NULL, NULL);

-- ----------------------------
-- Procedure structure for newTarget
-- ----------------------------
DROP PROCEDURE IF EXISTS `newTarget`;
delimiter ;;
CREATE PROCEDURE `newTarget`(IN machineName VARCHAR(255),
	IN machineValue INT,
	OUT machineNameOut VARCHAR(255),
	OUT machineValueOut INT)
BEGIN 
	INSERT INTO target 
	(
		machine_name, 
		target_value, 
		updated_at
	)
	VALUES
	(
		machineName,
		machineValue,
		NOW()
	);
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
