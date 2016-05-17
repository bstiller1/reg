CREATE DATABASE `Internships`;
CREATE TABLE IF NOT EXISTS `interns` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `email` varchar(75) NOT NULL,
  `password_md5` varchar(32) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
);

