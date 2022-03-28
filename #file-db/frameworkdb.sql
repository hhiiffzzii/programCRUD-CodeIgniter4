/*
 Navicat Premium Data Transfer

 Source Server         : PraktikumBD
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : frameworkdb

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 29/03/2022 01:58:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for databarang
-- ----------------------------
DROP TABLE IF EXISTS `databarang`;
CREATE TABLE `databarang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of databarang
-- ----------------------------
INSERT INTO `databarang` VALUES (1, 'Fanta', 'Minuman', 103, NULL, NULL);
INSERT INTO `databarang` VALUES (11, 'Sprite', 'Minuman', 67, NULL, NULL);
INSERT INTO `databarang` VALUES (12, 'Padimas', 'Makanan', 90, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
