create database teknologiinformasi;
 
use teknologiinformasi;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `email` varchar(100),
  `message` varchar(150),
  PRIMARY KEY  (`id`)
);