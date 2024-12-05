CREATE TABLE `mySiteUsers` (
   `userId` int(10) unsigned NOT NULL AUTO_INCREMENT,
   `username` varchar(40) NOT NULL,
   `password` varchar(40) NOT NULL,
   PRIMARY KEY (`userId`)
);