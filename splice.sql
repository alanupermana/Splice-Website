
SET FOREIGN_KEY_CHECKS=0;


-- ----------------------------
-- Table structure for community
-- ----------------------------
DROP TABLE IF EXISTS `community`;
CREATE TABLE `community` (
  `id_community` int(11) NOT NULL AUTO_INCREMENT,
  `song` varchar(50) NOT NULL DEFAULT 'music.mp3',
  PRIMARY KEY (`id_community`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `community` VALUES ('1', 'music.mp3');

-- Table structure for community
-- ----------------------------
DROP TABLE IF EXISTS `dashboard`;
CREATE TABLE `dashboard` (
  `id_dashboard` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'gambar.jpg',
  PRIMARY KEY (`id_dashboard`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `dashboard` VALUES ('1', 'Membuat music yang indah','Hal pertama yang kita dengar tentang musik adalah..','gambar.png');

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(50) NOT NULL,
  `song` varchar(50) NOT NULL DEFAULT 'music.mp3',
  `waktu` date NOT NULL,
  `deskripsi` longtext NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES ('1', 'Kaluna','music.mp3','2017-04-05','Kaluna Bands','alanupermana');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(100) NOT NULL DEFAULT 'noavatar.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Alanu Dinasti Permana', 'alanupermana', '123123', 'alanupermana@gmail.com', 'noavatar.png');
