DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  	`Id` int NOT NULL AUTO_INCREMENT,
  	`Username` varchar(20) NOT NULL UNIQUE,
   	`Password` varchar(30) NOT NULL,
    `SignUpDate` date,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  	`Id` int NOT NULL AUTO_INCREMENT,
  	`Name` varchar(20) NOT NULL,
   	`Phone` varchar(30) NULL,
    `Email` varchar(50) NOT NULL,
    `Address` varchar(255) NULL, 
    `Id_User` int NOT NULL,
  PRIMARY KEY (`Id`),
    FOREIGN KEY (Id_User)
        REFERENCES user(Id)
        ON DELETE CASCADE
) ENGINE=InnoDB;