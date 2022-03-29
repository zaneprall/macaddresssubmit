# macaddresssubmit


This file is specifically built to be hosted on ubuntu LAMP stack.

This is a basic logging method designed basic trusted user submission. 

This requires a database built to hold variables. See files. Database name is main. defaulted to mariadb.
create statement below.


CREATE TABLE `mycomon` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT current_timestamp(),
  `generation` int(3) NOT NULL,
  `image` longblob DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `temperaturef` int(11) DEFAULT NULL,
  `humidity` int(11) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
























