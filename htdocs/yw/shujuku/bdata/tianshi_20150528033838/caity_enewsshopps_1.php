<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `caity_enewsshopps`;");
E_C("CREATE TABLE `caity_enewsshopps` (
  `pid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(60) NOT NULL DEFAULT '',
  `price` float(11,2) NOT NULL DEFAULT '0.00',
  `otherprice` text NOT NULL,
  `psay` text NOT NULL,
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `caity_enewsshopps` values('1','送货上门','10.00','','送货上门','0','0');");
E_D("replace into `caity_enewsshopps` values('2','特快专递（EMS）','25.00','','特快专递（EMS）','0','0');");
E_D("replace into `caity_enewsshopps` values('3','普通邮递','5.00','','普通邮递','0','1');");
E_D("replace into `caity_enewsshopps` values('4','邮局快邮','12.00','','邮局快邮','0','0');");

require("../../inc/footer.php");
?>