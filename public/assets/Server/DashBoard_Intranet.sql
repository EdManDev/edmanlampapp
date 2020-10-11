CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userimage` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `codepostal` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE  dipspo_voit (
  `id` int(15) AUTO_INCREMENT NOT NULL,
  `NomCAt	` varchar(200) NOT DEFAULT, 
  `Dispo	` varchar(200) NOT DEFAULT, 
  `Aujour` varchar(200) NOT DEFAULT, 
)

CREATE TABLE sim_Resv (
  `id` int(15) AUTO_INCREMENT NOT NULL,
  `startDATE` date NOT DEFAULT, 
  `endDATE` date NOT DEFAULT, 
  `startTIME` date NOT DEFAULT, 
  `endTIME` date NOT DEFAULT,
  `catVehicule` date NOT DEFAULT,
  `srcLocation` date NOT DEFAULT
)

CREATE TABLE sim_Resv (
  `id` int(15) AUTO_INCREMENT NOT NULL,
  `startDATE` date NOT DEFAULT, 
  `endDATE` date NOT DEFAULT, 
  `startTIME` date NOT DEFAULT, 
  `endTIME` date NOT DEFAULT,
  `catVehicule` date NOT DEFAULT,
  `srcLocation` date NOT DEFAULT
)
