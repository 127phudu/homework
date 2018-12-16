/*
 Navicat Premium Data Transfer

 Source Server         : connetion1
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : simple_ajax

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 17/12/2018 00:06:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'san pham 1');
INSERT INTO `products` VALUES (2, 'san pham 2');
INSERT INTO `products` VALUES (3, 'san pham 3');
INSERT INTO `products` VALUES (4, 'san pham 4');
INSERT INTO `products` VALUES (5, 'san pham 5');
INSERT INTO `products` VALUES (6, 'san pham 6');
INSERT INTO `products` VALUES (7, 'san pham 7');
INSERT INTO `products` VALUES (8, 'san pham 8');
INSERT INTO `products` VALUES (9, 'san pham 9');
INSERT INTO `products` VALUES (10, 'san pham 10');

SET FOREIGN_KEY_CHECKS = 1;
