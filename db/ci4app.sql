/*
 Navicat Premium Data Transfer

 Source Server         : LOKALAN
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : ci4app

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 11/03/2022 16:50:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for komik
-- ----------------------------
DROP TABLE IF EXISTS `komik`;
CREATE TABLE `komik`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `penulis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `penerbit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sampul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of komik
-- ----------------------------
INSERT INTO `komik` VALUES (1, 'Codeigniter', 'codeigniter', 'Ignis', 'Nister', 'codeigniter.png', NULL, NULL);
INSERT INTO `komik` VALUES (2, 'Pemrograman PHP', 'pemrograman-php', 'Mister', 'Gramed', 'php.jpg', NULL, NULL);
INSERT INTO `komik` VALUES (3, 'dd', 'dd', 'dd', 'd', 'yewr', '2022-03-11 03:22:37', '2022-03-11 03:22:37');
INSERT INTO `komik` VALUES (4, 'ada apa', 'ada-apa', 'penulis', 'terbit', 'terang', '2022-03-11 03:28:02', '2022-03-11 03:28:02');

SET FOREIGN_KEY_CHECKS = 1;
