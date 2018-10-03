/*
Navicat MySQL Data Transfer

Source Server         : OpenServ
Source Server Version : 50641
Source Host           : localhost:3306
Source Database       : films

Target Server Type    : MYSQL
Target Server Version : 50641
File Encoding         : 65001

Date: 2018-10-03 18:04:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for director
-- ----------------------------
DROP TABLE IF EXISTS `director`;
CREATE TABLE `director` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `director` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of director
-- ----------------------------
INSERT INTO `director` VALUES ('1', 'Robert Zemekis');
INSERT INTO `director` VALUES ('2', 'Olivye Nikash');
INSERT INTO `director` VALUES ('3', 'Hayao Miyadzaki');
INSERT INTO `director` VALUES ('4', 'Oleg Fomin');
INSERT INTO `director` VALUES ('5', 'Erick Toledano');

-- ----------------------------
-- Table structure for genre
-- ----------------------------
DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of genre
-- ----------------------------
INSERT INTO `genre` VALUES ('1', 'Comedy');
INSERT INTO `genre` VALUES ('2', 'Anime');
INSERT INTO `genre` VALUES ('3', 'Fantasy');
INSERT INTO `genre` VALUES ('4', 'Fantastic');
INSERT INTO `genre` VALUES ('5', 'Drama');
INSERT INTO `genre` VALUES ('6', 'Biography');

-- ----------------------------
-- Table structure for movie_genre
-- ----------------------------
DROP TABLE IF EXISTS `movie_genre`;
CREATE TABLE `movie_genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movie_genre
-- ----------------------------
INSERT INTO `movie_genre` VALUES ('1', '1', '1');
INSERT INTO `movie_genre` VALUES ('2', '1', '5');
INSERT INTO `movie_genre` VALUES ('3', '2', '5');
INSERT INTO `movie_genre` VALUES ('4', '2', '6');
INSERT INTO `movie_genre` VALUES ('5', '3', '2');
INSERT INTO `movie_genre` VALUES ('6', '4', '2');
INSERT INTO `movie_genre` VALUES ('7', '5', '1');

-- ----------------------------
-- Table structure for movie_title
-- ----------------------------
DROP TABLE IF EXISTS `movie_title`;
CREATE TABLE `movie_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_title` varchar(255) DEFAULT '',
  `director_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movie_title
-- ----------------------------
INSERT INTO `movie_title` VALUES ('1', 'ForestGamp', '1');
INSERT INTO `movie_title` VALUES ('2', 'Intouchables', '2');
INSERT INTO `movie_title` VALUES ('3', 'Moving Castle', '3');
INSERT INTO `movie_title` VALUES ('4', 'Spirited away', '3');
INSERT INTO `movie_title` VALUES ('5', 'Day radio', '4');
SET FOREIGN_KEY_CHECKS=1;
