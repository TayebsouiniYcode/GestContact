DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  	`Id` int NOT NULL AUTO_INCREMENT,
  	`Username` varchar(20) NOT NULL UNIQUE,
   	`Password` varchar(30) NOT NULL,
    `SignUpDate` date,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB;