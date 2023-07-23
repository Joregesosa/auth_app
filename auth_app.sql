CREATE DATABASE auth_app;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `bio` tinytext,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `pass` varchar(120) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `las_update` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
)