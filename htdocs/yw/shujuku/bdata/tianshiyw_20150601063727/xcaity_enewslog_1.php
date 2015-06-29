<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xcaity_enewslog`;");
E_C("CREATE TABLE `xcaity_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `xcaity_enewslog` values('1','afanda','2015-05-20 09:36:05','127.0.0.1','1','','0','2883');");
E_D("replace into `xcaity_enewslog` values('2','afanda','2015-05-20 16:18:32','127.0.0.1','0','','0','3815');");
E_D("replace into `xcaity_enewslog` values('3','afanda','2015-05-20 16:18:42','127.0.0.1','1','','0','3826');");
E_D("replace into `xcaity_enewslog` values('4','afanda','2015-05-21 08:16:49','127.0.0.1','1','','0','1954');");
E_D("replace into `xcaity_enewslog` values('5','afanda','2015-05-22 13:22:52','127.0.0.1','1','','0','2459');");
E_D("replace into `xcaity_enewslog` values('6','afanda','2015-05-28 10:34:46','127.0.0.1','1','','0','1531');");
E_D("replace into `xcaity_enewslog` values('7','afanda','2015-06-01 09:12:40','127.0.0.1','1','','0','4511');");

require("../../inc/footer.php");
?>