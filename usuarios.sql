CREATE TABLE IF NOT EXISTS `tbl_users` (
`userID` int(11) NOT NULL AUTO_INCREMENT,
`userName` varchar(100) NOT NULL,
`userEmail` varchar(100) NOT NULL UNIQUE,
`userPass` varchar(100) NOT NULL,
`userStatus` enum('Y','N') NOT NULL DEFAULT 'N',
`tokenCode` varchar(100) NOT NULL,
PRIMARY KEY (`userID`)
)