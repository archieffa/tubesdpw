/*
Navicat MySQL Data Transfer

Source Server         : praktikum
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_bluemoon

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-08 14:26:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `t_admin`
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username_admin` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_admin
-- ----------------------------

-- ----------------------------
-- Table structure for `t_booking`
-- ----------------------------
DROP TABLE IF EXISTS `t_booking`;
CREATE TABLE `t_booking` (
  `id_booking` int(11) NOT NULL AUTO_INCREMENT,
  `name_cust_booking` varchar(100) DEFAULT NULL,
  `check_in_booking` date DEFAULT NULL,
  `check_out_booking` date DEFAULT NULL,
  `guests_booking` varchar(100) DEFAULT NULL,
  `room_booking` varchar(100) DEFAULT '',
  `id_room` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_booking
-- ----------------------------

-- ----------------------------
-- Table structure for `t_customer`
-- ----------------------------
DROP TABLE IF EXISTS `t_customer`;
CREATE TABLE `t_customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `name_customer` varchar(100) DEFAULT NULL,
  `email_customer` varchar(100) DEFAULT NULL,
  `password_customer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_customer
-- ----------------------------

-- ----------------------------
-- Table structure for `t_payment`
-- ----------------------------
DROP TABLE IF EXISTS `t_payment`;
CREATE TABLE `t_payment` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `total_payment` varchar(100) DEFAULT NULL,
  `payment` varchar(100) DEFAULT NULL,
  `id_booking` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_payment
-- ----------------------------

-- ----------------------------
-- Table structure for `t_room`
-- ----------------------------
DROP TABLE IF EXISTS `t_room`;
CREATE TABLE `t_room` (
  `id_room` int(11) NOT NULL AUTO_INCREMENT,
  `type_room` varchar(100) DEFAULT NULL,
  `price_room` varchar(100) DEFAULT NULL,
  `size_room` varchar(100) DEFAULT NULL,
  `capacity_room` varchar(100) DEFAULT NULL,
  `bed_room` varchar(100) DEFAULT NULL,
  `services_room` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_room`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_room
-- ----------------------------
